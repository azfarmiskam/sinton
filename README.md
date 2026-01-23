# Sinton Group - Corporate Website

![Sinton Group Logo](public/images/logos/sintonlogo.png)

A professional corporate website for **Sinton Group**, a Singapore-based global commodity trading company specializing in fertilizers, oleochemicals, agriculture and food products.

## 🌐 Live Website

**🎉 LIVE**: [sinton.asia](https://sinton.asia)

**Status**: ✅ Successfully deployed on GoDaddy shared hosting

## 📋 About

Founded in 2021, Sinton Group is a global commodity trading company with offices across Asia:
- 🇸🇬 Singapore (Headquarters)
- 🇲🇾 Kuala Lumpur, Malaysia
- 🇲🇾 Labuan, Malaysia
- 🇮🇩 Indonesia
- 🇮🇳 India

## 🎯 Business Activities

### Trading
- **Fertilizers**: Urea, DAP, MOP, NPK, TSP, Rock Phosphate
- **Oleochemicals**: CP16, CP18, Vitamin E, Glycerin
- **Agriculture Products**: Rice, Wheat, Raw Sugar, Soybean Meal
- **Food Products**: Milk, Australian Beef, Brazilian Beef, Buffalo Meat

### Investments
- **Oleochemicals Plant** (Indonesia) - 60,000 MT/year capacity
- **NPK Fertilizer Plants** (5 facilities) - 2,000,000 MT/year total capacity
- **Meat Processing Plant** - 100,000 MT/year capacity
- **Milk Processing Plants** (10 facilities) - 1,000,000 litres/day capacity

## 🛠️ Technology Stack

- **Framework**: Laravel 12.48.1
- **PHP**: 8.2+
- **Frontend**: HTML5, CSS3, JavaScript (Vanilla)
- **Fonts**: Montserrat (Headings), Open Sans (Body)
- **Icons**: Font Awesome 6.4.0

## 🎨 Design Features

- ✅ Responsive design (mobile-friendly)
- ✅ Modern corporate aesthetics
- ✅ Hero slider with 5 rotating slides
- ✅ Smooth animations and transitions
- ✅ Brand colors: Teal (#1BA098) & Navy (#0D5C7D)
- ✅ SEO optimized

## 📁 Project Structure

```
sinton/
├── app/                    # Laravel application logic
├── public/                 # Public assets
│   ├── css/               # Stylesheets
│   ├── js/                # JavaScript files
│   └── images/            # Images (logos, products, backgrounds)
├── resources/
│   └── views/             # Blade templates
│       ├── layouts/       # Layout templates
│       ├── products/      # Product pages
│       ├── home.blade.php
│       ├── about.blade.php
│       └── contact.blade.php
├── routes/
│   └── web.php            # Web routes
├── DEPLOYMENT_GUIDE.md    # Deployment instructions
└── DEPLOYMENT_CHECKLIST.md # Quick deployment checklist
```

## 🚀 Local Development

### Prerequisites
- PHP 8.2 or higher
- Composer
- Laravel Herd (recommended) or Laravel Valet

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/azfarmiskam/sinton.git
   cd sinton
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Set up environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Serve the application**
   
   **Using Laravel Herd:**
   - The site will be available at `http://sinton.test`
   
   **Using Artisan:**
   ```bash
   php artisan serve
   ```
   - Visit `http://localhost:8000`

## 📦 Deployment to GoDaddy Shared Hosting

See the comprehensive deployment guide:
- **[DEPLOYMENT_GUIDE.md](DEPLOYMENT_GUIDE.md)** - Complete step-by-step instructions
- **[DEPLOYMENT_CHECKLIST.md](DEPLOYMENT_CHECKLIST.md)** - Quick reference checklist

### Quick Deployment Steps

1. Upload Laravel files to `/sinton_app/` folder
2. Upload `public/` folder contents to `/public_html/`
3. Edit `public_html/index.php` to update paths
4. Configure `.env` file
5. Set folder permissions (755 for storage and cache)

## 📄 Pages

- **Home** (`/`) - Hero slider, business overview, products preview
- **About Us** (`/about`) - Company information, values, offices
- **Trade Products** (`/products/trade`) - Detailed product categories
- **Investments** (`/products/investments`) - Investment projects
- **Contact Us** (`/contact`) - Contact information and office locations

## 🎨 Brand Guidelines

### Colors
- **Primary Teal**: `#1BA098`
- **Primary Navy**: `#0D5C7D`
- **Secondary Teal**: `#16C5B5`
- **Dark Navy**: `#073B52`
- **Light Teal**: `#E8F7F6`

### Typography
- **Headings**: Montserrat (700 weight)
- **Body**: Open Sans (400 weight)
- **H1**: 35px (desktop), 28px (mobile)
- **Subheading**: 24px
- **Body**: 17px
- **Secondary**: 13px

## 📝 License

This project is proprietary and confidential. All rights reserved by Sinton Group.

## 👨‍💻 Developer

Developed by **Azfar Miskam**
- GitHub: [@azfarmiskam](https://github.com/azfarmiskam)

## 📞 Contact

For inquiries about Sinton Group:
- **Email**: info@sinton.asia
- **Website**: [www.sinton.asia](https://sinton.asia)

---

**Last Updated**: January 22, 2026
**Version**: 1.0.0
