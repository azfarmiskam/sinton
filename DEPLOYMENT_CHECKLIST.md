# Quick Deployment Checklist for sinton.asia

## 📦 Files to Upload

### To `/sinton_app/` folder (create this in home directory):
- [ ] app/
- [ ] bootstrap/
- [ ] config/
- [ ] database/
- [ ] resources/
- [ ] routes/
- [ ] storage/
- [ ] vendor/
- [ ] .env (configure after upload)
- [ ] artisan
- [ ] composer.json
- [ ] composer.lock

### To `/public_html/` folder (domain root):
- [ ] css/
- [ ] js/
- [ ] images/
- [ ] index.php (MUST EDIT - see guide)
- [ ] .htaccess
- [ ] favicon.ico (if exists)

## ⚙️ Configuration Steps

1. [ ] Upload all files to correct locations
2. [ ] Edit `public_html/index.php` - change paths to `../sinton_app/`
3. [ ] Copy `.env.example` to `.env` in sinton_app
4. [ ] Edit `.env`:
   - [ ] APP_ENV=production
   - [ ] APP_DEBUG=false
   - [ ] APP_URL=https://sinton.asia
   - [ ] APP_KEY=base64:... (generate this)
5. [ ] Set permissions:
   - [ ] sinton_app/storage/ → 755
   - [ ] sinton_app/bootstrap/cache/ → 755
6. [ ] Verify `.htaccess` in public_html

## 🧪 Testing

- [ ] Visit https://sinton.asia (home page)
- [ ] Test https://sinton.asia/about
- [ ] Test https://sinton.asia/products/trade
- [ ] Test https://sinton.asia/products/investments
- [ ] Test https://sinton.asia/contact
- [ ] Check all images load
- [ ] Test mobile view
- [ ] Test navigation menu

## 🚨 If Something Goes Wrong

1. Check error logs: `sinton_app/storage/logs/laravel.log`
2. Verify index.php paths are correct
3. Check folder permissions
4. Ensure PHP version is 8.2+
5. Clear browser cache

## 📞 Quick Reference

**Domain**: sinton.asia
**Laravel Version**: 12.48.1
**PHP Required**: 8.2+
**Deployment Method**: Manual upload via cPanel

See `DEPLOYMENT_GUIDE.md` for detailed instructions.
