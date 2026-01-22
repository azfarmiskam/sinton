# Sinton Group - GoDaddy Shared Hosting Deployment Guide

## Prerequisites
- GoDaddy shared hosting account with cPanel access
- Domain: sinton.asia pointed to your hosting
- SSH access (if available) or File Manager in cPanel
- FTP client (FileZilla recommended)

---

## Method 1: Manual Upload via cPanel (Recommended for Shared Hosting)

### Step 1: Prepare Your Local Files

1. **Optimize for Production** (Already done if you ran the composer command):
   ```bash
   composer install --optimize-autoloader --no-dev
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

2. **Set Environment to Production**:
   - Open `.env` file
   - Change `APP_ENV=local` to `APP_ENV=production`
   - Change `APP_DEBUG=true` to `APP_DEBUG=false`
   - Update `APP_URL=http://localhost` to `APP_URL=https://sinton.asia`

### Step 2: Upload Files to GoDaddy

1. **Login to cPanel** at your GoDaddy hosting

2. **File Structure on Server**:
   ```
   /home/yourusername/
   ├── public_html/              ← This is your domain root
   │   └── (Laravel public folder contents go here)
   └── sinton_app/               ← Create this folder for Laravel app
       └── (All other Laravel files go here)
   ```

3. **Upload Files**:
   
   **Option A: Using File Manager in cPanel**
   - Create a folder called `sinton_app` in your home directory (one level above public_html)
   - Upload ALL Laravel files EXCEPT the `public` folder to `sinton_app`
   - Upload ONLY the contents of the `public` folder to `public_html`
   
   **Option B: Using FTP (FileZilla)**
   - Connect to your GoDaddy hosting via FTP
   - Upload structure as described above

### Step 3: Modify index.php in public_html

After uploading, edit `public_html/index.php`:

**Find these lines:**
```php
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
```

**Change to:**
```php
require __DIR__.'/../sinton_app/vendor/autoload.php';
$app = require_once __DIR__.'/../sinton_app/bootstrap/app.php';
```

### Step 4: Set Up .env File

1. In cPanel File Manager, navigate to `/sinton_app/`
2. Copy `.env.example` to `.env`
3. Edit `.env` with these settings:

```env
APP_NAME="Sinton Group"
APP_ENV=production
APP_KEY=base64:YOUR_KEY_HERE
APP_DEBUG=false
APP_URL=https://sinton.asia

LOG_CHANNEL=stack
LOG_LEVEL=error

# Database settings (if you add database later)
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### Step 5: Generate Application Key

**Via SSH** (if available):
```bash
cd ~/sinton_app
php artisan key:generate
```

**Without SSH**:
- Use an online Laravel key generator
- Or run `php artisan key:generate` locally and copy the key to server's .env

### Step 6: Set Folder Permissions

In cPanel File Manager, set these permissions:

```
sinton_app/storage/          → 755
sinton_app/storage/logs/     → 755
sinton_app/bootstrap/cache/  → 755
```

### Step 7: Create .htaccess in public_html

Ensure `public_html/.htaccess` exists with this content:

```apache
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```

### Step 8: Test Your Website

Visit `https://sinton.asia` - Your website should now be live!

---

## Method 2: Using Git (If SSH Access Available)

### Step 1: Push to GitHub

```bash
cd c:\Users\user\Documents\Project\Laravel\sinton
git init
git add .
git commit -m "Initial commit"
git remote add origin YOUR_GITHUB_REPO_URL
git push -u origin main
```

### Step 2: Clone on Server via SSH

```bash
ssh username@sinton.asia
cd ~
git clone YOUR_GITHUB_REPO_URL sinton_app
cd sinton_app
composer install --optimize-autoloader --no-dev
cp .env.example .env
php artisan key:generate
```

### Step 3: Link Public Folder

```bash
cd ~/public_html
rm -rf *  # BE CAREFUL! This removes all files in public_html
cp -r ~/sinton_app/public/* .
```

Then follow Steps 3-7 from Method 1.

---

## Common Issues & Solutions

### Issue 1: 500 Internal Server Error
**Solution**: Check folder permissions (storage and bootstrap/cache should be 755)

### Issue 2: "No input file specified"
**Solution**: Check that index.php paths are correct (Step 3 in Method 1)

### Issue 3: Images not loading
**Solution**: Ensure all files in `public/images/` are uploaded correctly

### Issue 4: CSS/JS not loading
**Solution**: 
- Check that `public/css/` and `public/js/` folders are in public_html
- Clear browser cache

### Issue 5: APP_KEY not set
**Solution**: Run `php artisan key:generate` or manually generate and add to .env

---

## File Checklist Before Upload

✅ All files in `sinton_app/` folder (except public)
✅ Contents of `public/` folder in `public_html/`
✅ `.env` file configured
✅ `index.php` paths updated
✅ `.htaccess` file in public_html
✅ Folder permissions set correctly

---

## Post-Deployment

1. **Test all pages**:
   - Home: https://sinton.asia
   - About: https://sinton.asia/about
   - Trade: https://sinton.asia/products/trade
   - Investments: https://sinton.asia/products/investments
   - Contact: https://sinton.asia/contact

2. **Check mobile responsiveness**

3. **Test navigation and links**

4. **Verify images load correctly**

---

## Important Notes

⚠️ **This website is currently static** (no database). If you need to add:
- Contact forms
- Admin panel
- Dynamic content

You'll need to:
1. Create a MySQL database in cPanel
2. Update .env with database credentials
3. Run migrations: `php artisan migrate`

---

## Support

If you encounter issues:
1. Check error logs in `sinton_app/storage/logs/laravel.log`
2. Enable debug mode temporarily: `APP_DEBUG=true` in .env (remember to turn off after)
3. Check GoDaddy's PHP version (Laravel 12 requires PHP 8.2+)

---

**Deployment Date**: January 22, 2026
**Laravel Version**: 12.48.1
**PHP Required**: 8.2+
