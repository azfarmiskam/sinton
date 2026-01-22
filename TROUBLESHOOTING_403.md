# 403 Forbidden Error - Troubleshooting Guide

## Current Setup
- **Git synced to**: `public_html/sinton.asia/web`
- **Domain directory**: `public_html/sinton.asia/web/public`
- **Error**: 403 Forbidden

---

## ✅ Solutions (Try in Order)

### Solution 1: Set Correct File Permissions

In cPanel File Manager, navigate to `public_html/sinton.asia/web/public/` and set these permissions:

1. **All folders**: 755
2. **All files**: 644
3. **index.php**: 644
4. **.htaccess**: 644

**How to set permissions in cPanel:**
- Right-click on folder/file → Change Permissions
- Or select files → Permissions button at top

**Critical folders to check:**
```
public_html/sinton.asia/web/storage/          → 755
public_html/sinton.asia/web/storage/logs/     → 755
public_html/sinton.asia/web/bootstrap/cache/  → 755
public_html/sinton.asia/web/public/           → 755
```

---

### Solution 2: Verify .env File Exists

1. Go to `public_html/sinton.asia/web/`
2. Check if `.env` file exists
3. If not, copy `.env.example` to `.env`
4. Edit `.env` and set:

```env
APP_NAME="Sinton Group"
APP_ENV=production
APP_KEY=base64:YOUR_KEY_HERE
APP_DEBUG=false
APP_URL=https://sinton.asia

LOG_CHANNEL=stack
LOG_LEVEL=error
```

**Generate APP_KEY:**
- If you have SSH access: `php artisan key:generate`
- Without SSH: Run locally and copy the key from your local `.env`

---

### Solution 3: Verify .htaccess File

Make sure `public_html/sinton.asia/web/public/.htaccess` exists and contains:

```apache
# Set default index file
DirectoryIndex index.php index.html

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

# Disable directory browsing
Options -Indexes
```

---

### Solution 4: Check PHP Version

Laravel 12 requires **PHP 8.2 or higher**.

**To check/change PHP version in cPanel:**
1. Go to **MultiPHP Manager** or **Select PHP Version**
2. Select your domain: `sinton.asia`
3. Change to **PHP 8.2** or **PHP 8.3**
4. Save

---

### Solution 5: Verify index.php Exists

Check that `public_html/sinton.asia/web/public/index.php` exists.

If it's missing, the file should contain:

```php
<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
```

---

### Solution 6: Check Domain Configuration

In cPanel → **Domains** or **Addon Domains**:

1. Verify domain: `sinton.asia`
2. Document Root should be: `public_html/sinton.asia/web/public`
3. If wrong, update it

**Alternative path format** (depending on cPanel):
- `/home/username/public_html/sinton.asia/web/public`

---

### Solution 7: Clear Laravel Cache

If you have SSH access:

```bash
cd public_html/sinton.asia/web
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

Without SSH, delete these folders via File Manager:
- `bootstrap/cache/*.php` (except `.gitignore`)
- `storage/framework/cache/data/*`
- `storage/framework/views/*`

---

### Solution 8: Check Error Logs

**View error logs:**
1. In cPanel → **Errors** or **Error Log**
2. Or check: `public_html/sinton.asia/web/storage/logs/laravel.log`

**Enable debug mode temporarily** (in `.env`):
```env
APP_DEBUG=true
```

Visit the site again and check what error appears. **Remember to turn debug OFF after:**
```env
APP_DEBUG=false
```

---

### Solution 9: Verify Composer Dependencies

The `vendor` folder must exist with all dependencies.

**Check if vendor folder exists:**
- `public_html/sinton.asia/web/vendor/`

**If missing or incomplete:**
1. If SSH access: `composer install --optimize-autoloader --no-dev`
2. Without SSH: You may need to upload the `vendor` folder from your local machine

---

### Solution 10: Create a Test File

Create `public_html/sinton.asia/web/public/test.php`:

```php
<?php
phpinfo();
```

Visit: `https://sinton.asia/test.php`

**If this works:**
- PHP is working
- Problem is with Laravel configuration

**If this doesn't work:**
- Problem is with server/permissions
- Contact GoDaddy support

---

## 🔍 Quick Diagnostic Checklist

Run through this checklist:

- [ ] PHP version is 8.2 or higher
- [ ] `.env` file exists in `web/` folder
- [ ] `APP_KEY` is set in `.env`
- [ ] `.htaccess` exists in `web/public/`
- [ ] `index.php` exists in `web/public/`
- [ ] `vendor/` folder exists and is complete
- [ ] Folder permissions: 755 for folders, 644 for files
- [ ] Domain document root points to `web/public/`
- [ ] `storage/` and `bootstrap/cache/` are writable (755)

---

## 🆘 Still Not Working?

### Check These Common Issues:

1. **Symlink Issue**: Some shared hosts don't allow symlinks
   - Delete `public/storage` if it exists
   - Copy `storage/app/public/` contents to `public/storage/`

2. **mod_rewrite Not Enabled**: Contact GoDaddy to enable it

3. **Open_basedir Restriction**: Check with GoDaddy if paths are restricted

4. **Memory Limit**: Increase in `.htaccess`:
   ```apache
   php_value memory_limit 256M
   ```

---

## 📞 Contact Support

If none of these work:
1. Contact **GoDaddy Support** with these details:
   - Laravel 12 application
   - PHP 8.2+ required
   - Need mod_rewrite enabled
   - Document root: `public_html/sinton.asia/web/public`

2. Provide them the error from:
   - cPanel Error Logs
   - `storage/logs/laravel.log`

---

## ✅ After Fixing

Once the site loads:

1. **Turn off debug mode**: `APP_DEBUG=false`
2. **Test all pages**:
   - Home: https://sinton.asia
   - About: https://sinton.asia/about
   - Products: https://sinton.asia/products/trade
   - Investments: https://sinton.asia/products/investments
   - Contact: https://sinton.asia/contact
3. **Check images load**
4. **Test mobile view**
5. **Delete test.php** if you created it

---

**Last Updated**: January 22, 2026
