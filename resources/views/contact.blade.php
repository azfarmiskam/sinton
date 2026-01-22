@extends('layouts.app')

@section('title', 'Contact Us - Sinton Group')
@section('meta_description', 'Get in touch with Sinton Group. We have offices in Singapore, Malaysia, Indonesia and India. Contact us for commodity trading and investment opportunities.')

@section('content')
<!-- Page Header -->
<section class="hero" style="height: 50vh; min-height: 400px; margin-top: 80px;">
    <div class="hero-background">
        <div class="hero-slide active">
            <img src="{{ asset('images/backgrounds/hero1.jpg') }}" alt="Contact Us">
        </div>
    </div>
    <div class="hero-overlay"></div>
    
    <div class="hero-content">
        <h1>Contact Us</h1>
        <p>Let's discuss how we can work together</p>
    </div>
</section>

<!-- Contact Information -->
<section class="section" style="background: white; padding: 80px 0;">
    <div class="container">
        <div class="section-title">
            <h2>Get In Touch</h2>
            <p>We're here to answer your questions and discuss partnership opportunities</p>
        </div>
        
        <div class="contact-info" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px; margin-top: 60px;">
            <div class="contact-item" style="background: var(--light-teal); padding: 40px 30px; border-radius: 15px; text-align: center;">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3 style="color: var(--primary-navy); margin-bottom: 15px;">Email Us</h3>
                <p style="color: var(--dark-gray); font-size: 17px;">info@sinton.asia</p>
            </div>
            
            <div class="contact-item" style="background: var(--light-teal); padding: 40px 30px; border-radius: 15px; text-align: center;">
                <div class="contact-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h3 style="color: var(--primary-navy); margin-bottom: 15px;">Website</h3>
                <p style="color: var(--dark-gray); font-size: 17px;">www.sinton.asia</p>
            </div>
            
            <div class="contact-item" style="background: var(--light-teal); padding: 40px 30px; border-radius: 15px; text-align: center;">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3 style="color: var(--primary-navy); margin-bottom: 15px;">Headquarters</h3>
                <p style="color: var(--dark-gray); font-size: 17px;">Singapore</p>
            </div>
        </div>
    </div>
</section>

<!-- Office Locations -->
<section class="section" style="background: var(--light-gray); padding: 80px 0;">
    <div class="container">
        <div class="section-title">
            <h2>Our Office Locations</h2>
            <p>Strategically positioned across Asia to serve you better</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 35px; margin-top: 50px;">
            <!-- Singapore Office -->
            <div class="product-card">
                <div class="product-content" style="padding: 40px 30px; text-align: center;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-teal), var(--secondary-teal)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; font-size: 35px; color: white;">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 style="color: var(--primary-navy); margin-bottom: 10px;">Singapore</h3>
                    <p style="color: var(--gray); font-size: 14px; margin-bottom: 5px;">Headquarters</p>
                    <p style="color: var(--dark-gray); margin-top: 20px; line-height: 1.8;">
                        Our main office and headquarters, coordinating global operations and strategic partnerships.
                    </p>
                </div>
            </div>
            
            <!-- Kuala Lumpur Office -->
            <div class="product-card">
                <div class="product-content" style="padding: 40px 30px; text-align: center;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-teal), var(--secondary-teal)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; font-size: 35px; color: white;">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 style="color: var(--primary-navy); margin-bottom: 10px;">Kuala Lumpur</h3>
                    <p style="color: var(--gray); font-size: 14px; margin-bottom: 5px;">Malaysia</p>
                    <p style="color: var(--dark-gray); margin-top: 20px; line-height: 1.8;">
                        Regional office serving the Malaysian market and Southeast Asian operations.
                    </p>
                </div>
            </div>
            
            <!-- Labuan Office -->
            <div class="product-card">
                <div class="product-content" style="padding: 40px 30px; text-align: center;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-teal), var(--secondary-teal)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; font-size: 35px; color: white;">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 style="color: var(--primary-navy); margin-bottom: 10px;">Labuan</h3>
                    <p style="color: var(--gray); font-size: 14px; margin-bottom: 5px;">Malaysia</p>
                    <p style="color: var(--dark-gray); margin-top: 20px; line-height: 1.8;">
                        Strategic office in Labuan supporting our regional trading activities.
                    </p>
                </div>
            </div>
            
            <!-- Indonesia Office -->
            <div class="product-card">
                <div class="product-content" style="padding: 40px 30px; text-align: center;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-teal), var(--secondary-teal)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; font-size: 35px; color: white;">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 style="color: var(--primary-navy); margin-bottom: 10px;">Indonesia</h3>
                    <p style="color: var(--gray); font-size: 14px; margin-bottom: 5px;">Regional Office</p>
                    <p style="color: var(--dark-gray); margin-top: 20px; line-height: 1.8;">
                        Managing our investment projects and operations across Indonesia.
                    </p>
                </div>
            </div>
            
            <!-- India Office -->
            <div class="product-card">
                <div class="product-content" style="padding: 40px 30px; text-align: center;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-teal), var(--secondary-teal)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; font-size: 35px; color: white;">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 style="color: var(--primary-navy); margin-bottom: 10px;">India</h3>
                    <p style="color: var(--gray); font-size: 14px; margin-bottom: 5px;">Regional Office</p>
                    <p style="color: var(--dark-gray); margin-top: 20px; line-height: 1.8;">
                        Supporting our fertilizer investments and South Asian market operations.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Inquiries -->
<section class="section" style="background: white; padding: 80px 0;">
    <div class="container">
        <div class="section-title">
            <h2>Business Inquiries</h2>
            <p>We welcome partnership and trading opportunities</p>
        </div>
        
        <div style="max-width: 800px; margin: 0 auto;">
            <div class="business-cards" style="padding: 0;">
                <div class="cards-grid" style="margin-top: 40px;">
                    <!-- Trading Inquiries -->
                    <div class="business-card">
                        <div class="card-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3>Trading Partnerships</h3>
                        <p>Interested in our commodity trading services? We source and supply fertilizers, oleochemicals, agriculture and food products globally.</p>
                        <p style="margin-top: 20px; color: var(--primary-teal); font-weight: 600;">
                            <i class="fas fa-envelope"></i> info@sinton.asia
                        </p>
                    </div>
                    
                    <!-- Investment Inquiries -->
                    <div class="business-card">
                        <div class="card-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Investment Opportunities</h3>
                        <p>Explore investment opportunities in our production facilities across Indonesia. We're building the future of sustainable commodity production.</p>
                        <p style="margin-top: 20px; color: var(--primary-teal); font-weight: 600;">
                            <i class="fas fa-envelope"></i> info@sinton.asia
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="contact section">
    <div class="container">
        <div class="section-title">
            <h2>Ready to Start a Conversation?</h2>
            <p>Reach out to us today and let's explore how we can work together</p>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="mailto:info@sinton.asia" class="btn btn-primary" style="background: white; color: var(--primary-navy); font-size: 18px; padding: 18px 45px;">
                <i class="fas fa-envelope" style="margin-right: 10px;"></i>Email Us Now
            </a>
        </div>
    </div>
</section>
@endsection
