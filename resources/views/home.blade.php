@extends('layouts.app')

@section('title', 'Sinton Group - Global Commodity Trading Excellence')
@section('meta_description', 'Sinton Group is a Singapore-based global commodity trading company specializing in fertilizers, oleochemicals, agriculture and food products with offices across Asia.')

@section('content')
<!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-background"></div>
    <div class="hero-overlay"></div>
    
    <div class="hero-content">
        <h1>Trusted Partnerships</h1>
        <p>Building strong, trusted partnerships for reliable and successful delivery</p>
        <div class="hero-buttons">
            <a href="{{ route('products.trade') }}" class="btn btn-primary">Explore Trading</a>
            <a href="{{ route('products.investments') }}" class="btn btn-secondary">View Investments</a>
        </div>
    </div>
    
    <div class="hero-indicators"></div>
</section>

<!-- Business Cards Section -->
<section class="business-cards section" id="business">
    <div class="container">
        <div class="cards-grid">
            <!-- Trading Card -->
            <div class="business-card">
                <div class="card-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Trading</h3>
                <p>We primarily trade by sourcing allocations directly from primary producers to government-owned entities and trusted private companies. Our commitment to fostering long-term partnerships is demonstrated through our assurance of reliable supply and consistent quality, tailored to meet the specific demands of buyers.</p>
                <a href="{{ route('products.trade') }}" class="btn btn-primary" style="margin-top: 15px;">Learn More</a>
            </div>
            
            <!-- Investment Card -->
            <div class="business-card">
                <div class="card-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Investment</h3>
                <p>To elevate our product portfolio across various trading sectors, we are investing in the production and processing of fertilizers, oleochemicals, agricultural and food products. These investments are aimed at ensuring food security, maintaining consistent quality and providing a reliable supply chain for Sinton and our partners.</p>
                <a href="{{ route('products.investments') }}" class="btn btn-primary" style="margin-top: 15px;">Discover More</a>
            </div>
        </div>
    </div>
</section>

<!-- About Preview Section -->
<section class="about section" id="about-preview" style="background: linear-gradient(135deg, #f5f7fa 0%, #e8f7f6 100%); padding: 80px 0;">
    <div class="container">
        <div class="section-title">
            <h2>About Sinton Group</h2>
            <p>Your trusted partner in global commodity trading</p>
        </div>
        
        <div class="about-content">
            <p>Founded in 2021, Sinton Group is a Singapore-based global commodity trading company with offices in Malaysia, India and Indonesia. Our business activities include sourcing, supplying, trading, logistics and investing in the agriculture, food and fertilizer products.</p>
            
            <p>Sinton possesses a diverse portfolio in multi-commodity trading specialising in fertilizers, oleochemicals, agriculture and food products. We facilitate the global flow of goods by cultivating long-lasting partnerships with international buyers and suppliers, including multinationals and government agencies.</p>
            
            <a href="{{ route('about') }}" class="btn btn-primary" style="margin-top: 30px;">Read More About Us</a>
        </div>
        
        <div class="about-stats">
            <div class="stat-item">
                <div class="stat-number">2021</div>
                <div class="stat-label">Founded</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">5</div>
                <div class="stat-label">Office Locations</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">4</div>
                <div class="stat-label">Product Categories</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">Global</div>
                <div class="stat-label">Reach</div>
            </div>
        </div>
    </div>
</section>

<!-- Products Preview Section -->
<section class="products section" id="products-preview">
    <div class="container">
        <div class="section-title">
            <h2>Our Product Portfolio</h2>
            <p>Comprehensive solutions across multiple commodity sectors</p>
        </div>
        
        <div class="products-grid">
            <!-- Fertilizers -->
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('images/products/fertilizers.jpg') }}" alt="Fertilizers">
                </div>
                <div class="product-content">
                    <h3>Fertilizers</h3>
                    <p>Trading in Urea, DAP, MOP, NPK, TSP and Rock Phosphate with future investments in production facilities.</p>
                </div>
            </div>
            
            <!-- Oleochemicals -->
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('images/products/oleochemicals.jpg') }}" alt="Oleochemicals">
                </div>
                <div class="product-content">
                    <h3>Oleochemicals</h3>
                    <p>Manufacturing CP16, CP18, Vitamin E and Glycerin with state-of-the-art facilities in Indonesia.</p>
                </div>
            </div>
            
            <!-- Agriculture Products -->
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('images/products/agriculture.jpg') }}" alt="Agriculture Products">
                </div>
                <div class="product-content">
                    <h3>Agriculture Products</h3>
                    <p>Trading Rice, Wheat, Raw Sugar and Soybean meal through innovative online platforms.</p>
                </div>
            </div>
            
            <!-- Food Products -->
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('images/products/food.jpg') }}" alt="Food Products">
                </div>
                <div class="product-content">
                    <h3>Food Products</h3>
                    <p>Supplying premium Milk, Australian Beef, Brazilian Beef and Buffalo Meat to global markets.</p>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 50px;">
            <a href="{{ route('products.trade') }}" class="btn btn-primary">View All Products</a>
        </div>
    </div>
</section>

<!-- Offices Section -->
<section class="offices section" id="offices">
    <div class="container">
        <div class="section-title">
            <h2>Our Global Presence</h2>
            <p>Strategically located offices across Asia</p>
        </div>
        
        <div class="offices-grid">
            <div class="office-card">
                <div class="office-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3>Singapore</h3>
            </div>
            
            <div class="office-card">
                <div class="office-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3>Kuala Lumpur</h3>
            </div>
            
            <div class="office-card">
                <div class="office-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3>Labuan</h3>
            </div>
            
            <div class="office-card">
                <div class="office-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3>Indonesia</h3>
            </div>
            
            <div class="office-card">
                <div class="office-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3>India</h3>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="contact section" id="cta" style="padding: 60px 0;">
    <div class="container">
        <div class="section-title">
            <h2>Ready to Partner With Us?</h2>
            <p>Let's build a sustainable future together</p>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ route('contact') }}" class="btn btn-primary" style="background: white; color: var(--primary-navy); font-size: 18px; padding: 18px 45px;">Get In Touch</a>
        </div>
    </div>
</section>
@endsection
