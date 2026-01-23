@extends('layouts.app')

@section('title', 'Our Products - Sinton Group')
@section('meta_description', 'Explore Sinton Group\'s comprehensive product portfolio including fertilizers, oleochemicals, agriculture and food products, plus our strategic investments.')

@section('content')
<!-- Page Header -->
<section class="hero" style="height: 50vh; min-height: 400px; margin-top: 80px;">
    <div class="hero-background">
        <div class="hero-slide active">
            <img src="{{ asset('images/backgrounds/hero4.jpg') }}" alt="Our Products">
        </div>
    </div>
    <div class="hero-overlay"></div>
    
    <div class="hero-content">
        <h1>Our Products</h1>
        <p>Comprehensive solutions across trading and investments</p>
    </div>
</section>

<!-- Products Overview -->
<section class="section" style="background: white; padding: 80px 0;">
    <div class="container">
        <div class="section-title">
            <h2>Product Portfolio</h2>
            <p>Delivering excellence across multiple commodity sectors</p>
        </div>
        
        <div class="cards-grid" style="margin-top: 50px;">
            <!-- Trading Card -->
            <div class="business-card">
                <div class="card-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Trading</h3>
                <p>We primarily trade by sourcing allocations directly from primary producers to government-owned entities and trusted private companies. Our commitment to fostering long-term partnerships is demonstrated through our assurance of reliable supply and consistent quality.</p>
                <a href="{{ route('products.trade') }}" class="btn btn-primary" style="margin-top: 20px;">View Trade Products</a>
            </div>
            
            <!-- Investment Card -->
            <div class="business-card">
                <div class="card-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Investments</h3>
                <p>To elevate our product portfolio across various trading sectors, we are investing in the production and processing of fertilizers, oleochemicals, agricultural and food products. These investments ensure food security and reliable supply chains.</p>
                <a href="{{ route('products.investments') }}" class="btn btn-primary" style="margin-top: 20px;">View Investments</a>
            </div>
        </div>
    </div>
</section>

<!-- Product Categories -->
<section class="products section" style="background: var(--light-gray);">
    <div class="container">
        <div class="section-title">
            <h2>Product Categories</h2>
            <p>Four key sectors driving our business</p>
        </div>
        
        <div class="products-grid">
            <!-- Fertilizers -->
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('images/products/fertilizers.jpg') }}" alt="Fertilizers">
                </div>
                <div class="product-content">
                    <h3>Fertilizers</h3>
                    <p><strong>Trading:</strong> Urea, DAP, MOP, NPK, TSP, Rock Phosphate</p>
                    <p><strong>Investments:</strong> 5 NPK plants (2M MT/year capacity)</p>
                </div>
            </div>
            
            <!-- Oleochemicals -->
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('images/products/oleochemicals.jpg') }}" alt="Oleochemicals">
                </div>
                <div class="product-content">
                    <h3>Oleochemicals</h3>
                    <p><strong>Manufacturing:</strong> CP16, CP18, Vitamin E, Glycerin</p>
                    <p><strong>Capacity:</strong> 60,000 MT/year (Indonesia)</p>
                </div>
            </div>
            
            <!-- Agriculture Products -->
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('images/products/agriculture.jpg') }}" alt="Agriculture Products">
                </div>
                <div class="product-content">
                    <h3>Agriculture Products</h3>
                    <p><strong>Trading:</strong> Rice, Wheat, Raw Sugar, Soybean Meal</p>
                    <p><strong>Platform:</strong> Online procurement via Agribid partnership</p>
                </div>
            </div>
            
            <!-- Food Products -->
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('images/products/food.jpg') }}" alt="Food Products">
                </div>
                <div class="product-content">
                    <h3>Food Products</h3>
                    <p><strong>Trading:</strong> Milk, Australian Beef, Brazilian Beef, Buffalo Meat</p>
                    <p><strong>Investments:</strong> Meat & milk processing facilities</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Links -->
<section class="section" style="background: white; padding: 80px 0;">
    <div class="container">
        <div class="section-title">
            <h2>Explore Our Offerings</h2>
            <p>Learn more about our trading and investment activities</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 50px;">
            <div style="background: var(--light-teal); padding: 40px; border-radius: 15px; text-align: center;">
                <div style="font-size: 60px; color: var(--primary-teal); margin-bottom: 20px;">
                    <i class="fas fa-boxes"></i>
                </div>
                <h3 style="color: var(--primary-navy); margin-bottom: 15px;">Trade Products</h3>
                <p style="margin-bottom: 25px;">Explore our comprehensive trading portfolio across fertilizers, oleochemicals, agriculture and food products.</p>
                <a href="{{ route('products.trade') }}" class="btn btn-primary">View Details</a>
            </div>
            
            <div style="background: var(--light-teal); padding: 40px; border-radius: 15px; text-align: center;">
                <div style="font-size: 60px; color: var(--primary-teal); margin-bottom: 20px;">
                    <i class="fas fa-industry"></i>
                </div>
                <h3 style="color: var(--primary-navy); margin-bottom: 15px;">Strategic Investments</h3>
                <p style="margin-bottom: 25px;">Discover our production facilities and infrastructure investments across Asia.</p>
                <a href="{{ route('products.investments') }}" class="btn btn-primary">View Details</a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="contact section">
    <div class="container">
        <div class="section-title">
            <h2>Interested in Our Products?</h2>
            <p>Contact us to discuss your commodity needs</p>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ route('contact') }}" class="btn btn-primary" style="background: white; color: var(--primary-navy); font-size: 18px; padding: 18px 45px;">Get In Touch</a>
        </div>
    </div>
</section>
@endsection
