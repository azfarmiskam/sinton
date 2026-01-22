# Server Setup Script for GoDaddy

## Option 1: If You Have SSH Access (Recommended)

Run these commands in SSH:

```bash
cd public_html/sinton.asia/web
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Option 2: Upload vendor.zip via FTP

Since GitHub won't accept the large vendor folder, you need to upload it manually:

### Step 1: Create vendor.zip on Your Local Machine

**Windows PowerShell:**
```powershell
cd C:\Users\user\Documents\Project\Laravel\sinton
Compress-Archive -Path "vendor" -DestinationPath "vendor.zip" -Force
```

This will create `vendor.zip` in your sinton folder.

### Step 2: Upload to cPanel

1. In cPanel File Manager, go to `public_html/sinton.asia/web/`
2. Click **Upload**
3. Upload `vendor.zip`
4. Right-click `vendor.zip` → **Extract**
5. Delete `vendor.zip` after extraction

## Option 3: Use Composer on cPanel (If Available)

Some shared hosts have Composer in cPanel:

1. Look for **Terminal** or **SSH Access** in cPanel
2. Or check if there's a **Composer** tool
3. Navigate to your project and run:
   ```bash
   composer install --no-dev
   ```

## After vendor Folder is Ready

Make sure these permissions are set:

```
vendor/                     → 755
storage/                    → 755 (recursive)
bootstrap/cache/            → 755
```

Then visit: https://sinton.asia

It should work!
