<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('meta_description', 'Sinton Group - Singapore-based global commodity trading company specializing in fertilizers, oleochemicals, agriculture and food products.')">
    <meta name="keywords" content="commodity trading, fertilizers, oleochemicals, agriculture, food products, Singapore, Malaysia, Indonesia, India">
    <meta name="author" content="Sinton Group">
    
    <title>@yield('title', 'Sinton Group - Global Commodity Trading')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logos/sintonemblem.png') }}">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    @yield('extra_css')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logos/sintonlogo.png') }}" alt="Sinton Group Logo">
                </a>
            </div>
            
            <ul class="nav-menu">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                <li class="dropdown">
                    <a href="{{ route('products') }}" class="{{ request()->routeIs('products*') ? 'active' : '' }}">
                        Our Products <i class="fas fa-chevron-down" style="font-size: 10px; margin-left: 5px;"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('products') }}">All Products</a></li>
                        <li><a href="{{ route('products.trade') }}">Trade</a></li>
                        <li><a href="{{ route('products.investments') }}">Investments</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a></li>
            </ul>
            
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About Sinton Group</h3>
                    <p>A Singapore-based global commodity trading company with offices across Asia, specializing in fertilizers, oleochemicals, agriculture and food products.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('products.trade') }}">Trade Products</a></li>
                        <li><a href="{{ route('products.investments') }}">Investments</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Our Offices</h3>
                    <ul class="footer-links">
                        <li>Singapore</li>
                        <li>Kuala Lumpur, Malaysia</li>
                        <li>Labuan, Malaysia</li>
                        <li>Indonesia</li>
                        <li>India</li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p><i class="fas fa-envelope"></i> info@sinton.asia</p>
                    <p><i class="fas fa-globe"></i> www.sinton.asia</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Sinton Group. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('extra_js')
</body>
</html>
