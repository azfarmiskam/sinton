@extends('layouts.app')

@section('title', 'About Us - Sinton Group')
@section('meta_description', 'Founded in 2021, Sinton Group is a Singapore-based global commodity trading company with offices in Malaysia, India and Indonesia.')

@section('content')
<!-- Page Header -->
<section class="hero" style="height: 50vh; min-height: 400px; margin-top: 80px;">
    <div class="hero-background">
        <div class="hero-slide active">
            <img src="{{ asset('images/backgrounds/hero1.jpg') }}" alt="About Sinton Group">
        </div>
    </div>
    <div class="hero-overlay"></div>
    
    <div class="hero-content">
        <h1>About Sinton Group</h1>
        <p>Building partnerships, delivering excellence since 2021</p>
    </div>
</section>

<!-- About Content -->
<section class="about section">
    <div class="container">
        <div class="section-title">
            <h2>Who We Are</h2>
        </div>
        
        <div class="about-content">
            <p style="font-size: 19px; line-height: 2;">Founded in 2021, Sinton Group is a Singapore-based global commodity trading company with offices in Malaysia, India and Indonesia. Our business activities include sourcing, supplying, trading, logistics and investing in the agriculture, food and fertilizer products.</p>
            
            <p style="font-size: 19px; line-height: 2;">Sinton possesses a diverse portfolio in multi-commodity trading specialising in fertilizers, oleochemicals, agriculture and food products. We facilitate the global flow of goods by cultivating long-lasting partnerships with international buyers and suppliers, including multinationals and government agencies.</p>
        </div>
        
        <div class="about-stats">
            <div class="stat-item">
                <div class="stat-number">2021</div>
                <div class="stat-label">Year Founded</div>
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
                <div class="stat-label">Market Reach</div>
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="section" style="background: var(--light-gray);">
    <div class="container">
        <div class="section-title">
            <h2>Our Core Values</h2>
            <p>The principles that guide everything we do</p>
        </div>
        
        <div class="products-grid">
            <div class="product-card">
                <div class="product-content" style="padding: 40px 30px;">
                    <div style="font-size: 50px; color: var(--primary-teal); margin-bottom: 20px;">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Trusted Partnerships</h3>
                    <p>Building strong, trusted partnerships for reliable and successful delivery across all our business operations.</p>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-content" style="padding: 40px 30px;">
                    <div style="font-size: 50px; color: var(--primary-teal); margin-bottom: 20px;">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>ESG Sustainability</h3>
                    <p>Committed to environment, social and governance (ESG) excellence for a sustainable future.</p>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-content" style="padding: 40px 30px;">
                    <div style="font-size: 50px; color: var(--primary-teal); margin-bottom: 20px;">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Investment for Growth</h3>
                    <p>Empowering businesses with strategic investments for unprecedented growth and development.</p>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-content" style="padding: 40px 30px;">
                    <div style="font-size: 50px; color: var(--primary-teal); margin-bottom: 20px;">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3>Naturally Refined</h3>
                    <p>Providing premium, naturally refined products to fuel success across global markets.</p>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-content" style="padding: 40px 30px;">
                    <div style="font-size: 50px; color: var(--primary-teal); margin-bottom: 20px;">
                        <i class="fas fa-link"></i>
                    </div>
                    <h3>Value Chain Excellence</h3>
                    <p>Strengthening supply chains to increase efficiency and deliver consistent value.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Offices -->
<section class="offices section">
    <div class="container">
        <div class="section-title">
            <h2>Our Global Offices</h2>
            <p>Strategically positioned across Asia to serve you better</p>
        </div>
        
        <div class="offices-grid">
            <div class="office-card">
                <div class="office-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Singapore</h3>
                <p style="margin-top: 10px; color: var(--gray); font-size: 14px;">Headquarters</p>
            </div>
            
            <div class="office-card">
                <div class="office-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Kuala Lumpur</h3>
                <p style="margin-top: 10px; color: var(--gray); font-size: 14px;">Malaysia</p>
            </div>
            
            <div class="office-card">
                <div class="office-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Labuan</h3>
                <p style="margin-top: 10px; color: var(--gray); font-size: 14px;">Malaysia</p>
            </div>
            
            <div class="office-card">
                <div class="office-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Indonesia</h3>
                <p style="margin-top: 10px; color: var(--gray); font-size: 14px;">Regional Office</p>
            </div>
            
            <div class="office-card">
                <div class="office-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>India</h3>
                <p style="margin-top: 10px; color: var(--gray); font-size: 14px;">Regional Office</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="contact section">
    <div class="container">
        <div class="section-title">
            <h2>Partner With Sinton Group</h2>
            <p>Join us in building a sustainable and prosperous future</p>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ route('contact') }}" class="btn btn-primary" style="background: white; color: var(--primary-navy); font-size: 18px; padding: 18px 45px;">Contact Us Today</a>
        </div>
    </div>
</section>
@endsection
