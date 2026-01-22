@extends('layouts.app')

@section('title', 'Investments - Sinton Group')
@section('meta_description', 'Sinton Group is investing in oleochemicals, fertilizers, meat processing and milk processing facilities across Asia to ensure food security and reliable supply chains.')

@section('content')
<!-- Page Header -->
<section class="hero" style="height: 50vh; min-height: 400px; margin-top: 80px;">
    <div class="hero-background">
        <div class="hero-slide active">
            <img src="{{ asset('images/backgrounds/hero3.jpg') }}" alt="Investments">
        </div>
    </div>
    <div class="hero-overlay"></div>
    
    <div class="hero-content">
        <h1>Strategic Investments</h1>
        <p>Building infrastructure for sustainable growth and food security</p>
    </div>
</section>

<!-- Investment Introduction -->
<section class="section" style="background: white; padding: 60px 0;">
    <div class="container">
        <div class="about-content" style="max-width: 1000px;">
            <p style="font-size: 19px; line-height: 2; text-align: center;">To elevate our product portfolio across various trading sectors, we are investing in the production and processing of fertilizers, oleochemicals, agricultural and food products. These investments are aimed at ensuring food security, maintaining consistent quality and providing a reliable supply chain for Sinton and our partners.</p>
        </div>
    </div>
</section>

<!-- Oleochemicals Investment -->
<section class="section" style="background: var(--light-gray);">
    <div class="container">
        <div class="section-title">
            <h2>Oleochemicals Plant</h2>
            <p>State-of-the-art manufacturing facility in Indonesia</p>
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; max-width: 1100px; margin: 0 auto;">
            <div>
                <img src="{{ asset('images/products/oleochemicals.jpg') }}" alt="Oleochemicals Plant" style="border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
            </div>
            <div>
                <p style="font-size: 17px; line-height: 1.9; margin-bottom: 25px;">Sinton is developing an oleochemicals plant in Siak of Riau Province, Indonesia. This project aims to manufacture specialized additives such as CP16, CP18 as well as essential food ingredients like Vitamin E and Glycerin.</p>
                
                <div style="background: white; padding: 30px; border-radius: 12px; margin-top: 25px;">
                    <h3 style="color: var(--primary-navy); margin-bottom: 20px; font-size: 20px;">Project Details:</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 15px 0; border-bottom: 1px solid var(--light-gray);">
                            <strong style="color: var(--primary-teal);">Location:</strong> Siak, Riau Province, Indonesia
                        </li>
                        <li style="padding: 15px 0; border-bottom: 1px solid var(--light-gray);">
                            <strong style="color: var(--primary-teal);">Capacity:</strong> 60,000 MT per annum
                        </li>
                        <li style="padding: 15px 0; border-bottom: 1px solid var(--light-gray);">
                            <strong style="color: var(--primary-teal);">Expected Completion:</strong> Mid 2026
                        </li>
                        <li style="padding: 15px 0;">
                            <strong style="color: var(--primary-teal);">Products:</strong> CP16, CP18, Vitamin E, Glycerin
                        </li>
                    </ul>
                </div>
                
                <p style="font-size: 15px; line-height: 1.8; margin-top: 25px; color: var(--gray);">
                    <i class="fas fa-info-circle" style="color: var(--primary-teal); margin-right: 8px;"></i>
                    Concurrently, Sinton plans to have other similar plants built across Indonesia in line with the off-take agreements with our clients.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Fertilizers Investment -->
<section class="section" style="background: white;">
    <div class="container">
        <div class="section-title">
            <h2>NPK Fertilizer Plants</h2>
            <p>Large-scale fertilizer production across Indonesia</p>
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; max-width: 1100px; margin: 0 auto;">
            <div>
                <p style="font-size: 17px; line-height: 1.9; margin-bottom: 25px;">Sinton is establishing five NPK fertilizer plants across Indonesia. Each plant will have production capacity of 400,000 metric tons per year, totaling 2,000,000 metric tons annually across all plants.</p>
                
                <div style="background: var(--light-teal); padding: 30px; border-radius: 12px; margin-top: 25px;">
                    <h3 style="color: var(--primary-navy); margin-bottom: 20px; font-size: 20px;">Investment Highlights:</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 15px 0; border-bottom: 1px solid rgba(27, 160, 152, 0.2);">
                            <strong style="color: var(--primary-navy);">Number of Plants:</strong> 5 facilities
                        </li>
                        <li style="padding: 15px 0; border-bottom: 1px solid rgba(27, 160, 152, 0.2);">
                            <strong style="color: var(--primary-navy);">Capacity per Plant:</strong> 400,000 MT/year
                        </li>
                        <li style="padding: 15px 0; border-bottom: 1px solid rgba(27, 160, 152, 0.2);">
                            <strong style="color: var(--primary-navy);">Total Capacity:</strong> 2,000,000 MT/year
                        </li>
                        <li style="padding: 15px 0;">
                            <strong style="color: var(--primary-navy);">First Plant Commissioning:</strong> 2027
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <img src="{{ asset('images/products/fertilizers.jpg') }}" alt="NPK Fertilizer Plants" style="border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
            </div>
        </div>
    </div>
</section>

<!-- Meat Processing Investment -->
<section class="section" style="background: var(--light-gray);">
    <div class="container">
        <div class="section-title">
            <h2>Meat Processing Plant</h2>
            <p>Premium meat processing facility in Indonesia</p>
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; max-width: 1100px; margin: 0 auto;">
            <div>
                <img src="{{ asset('images/products/food.jpg') }}" alt="Meat Processing" style="border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
            </div>
            <div>
                <p style="font-size: 17px; line-height: 1.9; margin-bottom: 25px;">Sinton works with prominent Australian, Brazilian and Indian companies to supply beef to Indonesia. We partnered with an Indonesian company to help distribute meat to the local market.</p>
                
                <div style="background: white; padding: 30px; border-radius: 12px; margin-top: 25px;">
                    <h3 style="color: var(--primary-navy); margin-bottom: 20px; font-size: 20px;">Facility Specifications:</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 15px 0; border-bottom: 1px solid var(--light-gray);">
                            <strong style="color: var(--primary-teal);">Location:</strong> Indonesia
                        </li>
                        <li style="padding: 15px 0; border-bottom: 1px solid var(--light-gray);">
                            <strong style="color: var(--primary-teal);">Working Capacity:</strong> 100,000 MT per annum
                        </li>
                        <li style="padding: 15px 0;">
                            <strong style="color: var(--primary-teal);">Products:</strong> Australian Beef, Brazilian Beef, Buffalo Meat
                        </li>
                    </ul>
                </div>
                
                <p style="font-size: 15px; line-height: 1.8; margin-top: 25px; color: var(--gray);">
                    <i class="fas fa-info-circle" style="color: var(--primary-teal); margin-right: 8px;"></i>
                    We intend to build a meat processing plant in Indonesia that will have a working capacity of 100,000 metric tons per annum.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Milk Processing Investment -->
<section class="section" style="background: white;">
    <div class="container">
        <div class="section-title">
            <h2>Milk Processing Plants</h2>
            <p>Nationwide milk processing infrastructure in Indonesia</p>
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; max-width: 1100px; margin: 0 auto;">
            <div>
                <p style="font-size: 17px; line-height: 1.9; margin-bottom: 25px;">Sinton is currently collaborating with leading suppliers in the milk industry to establish multiple milk processing plants throughout Indonesia. In partnership with these suppliers, Sinton aims to build ten milk processing plants nationwide.</p>
                
                <div style="background: var(--light-teal); padding: 30px; border-radius: 12px; margin-top: 25px;">
                    <h3 style="color: var(--primary-navy); margin-bottom: 20px; font-size: 20px;">Project Overview:</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 15px 0; border-bottom: 1px solid rgba(27, 160, 152, 0.2);">
                            <strong style="color: var(--primary-navy);">Total Plants Planned:</strong> 10 facilities nationwide
                        </li>
                        <li style="padding: 15px 0; border-bottom: 1px solid rgba(27, 160, 152, 0.2);">
                            <strong style="color: var(--primary-navy);">Total Capacity:</strong> 1,000,000 litres/day
                        </li>
                        <li style="padding: 15px 0; border-bottom: 1px solid rgba(27, 160, 152, 0.2);">
                            <strong style="color: var(--primary-navy);">Phase 1 Plants:</strong> 3 facilities
                        </li>
                        <li style="padding: 15px 0;">
                            <strong style="color: var(--primary-navy);">Phase 1 Capacity:</strong> 300,000 litres/day
                        </li>
                    </ul>
                </div>
                
                <p style="font-size: 15px; line-height: 1.8; margin-top: 25px; color: var(--gray);">
                    <i class="fas fa-info-circle" style="color: var(--primary-teal); margin-right: 8px;"></i>
                    In the first phase, we are constructing three plants in various locations with a combined production capacity of 300,000 litres per day.
                </p>
            </div>
            <div>
                <img src="{{ asset('images/products/food.jpg') }}" alt="Milk Processing" style="border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
            </div>
        </div>
    </div>
</section>

<!-- Investment Summary -->
<section class="section" style="background: var(--light-gray); padding: 80px 0;">
    <div class="container">
        <div class="section-title">
            <h2>Investment Portfolio Summary</h2>
            <p>Comprehensive infrastructure development across key sectors</p>
        </div>
        
        <div class="about-stats">
            <div class="stat-item">
                <div class="stat-number">16</div>
                <div class="stat-label">Total Facilities</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">4</div>
                <div class="stat-label">Sectors</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">2026</div>
                <div class="stat-label">First Completion</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">Indonesia</div>
                <div class="stat-label">Primary Location</div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="contact section">
    <div class="container">
        <div class="section-title">
            <h2>Investment Opportunities</h2>
            <p>Partner with us in building sustainable infrastructure</p>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ route('contact') }}" class="btn btn-primary" style="background: white; color: var(--primary-navy); font-size: 18px; padding: 18px 45px;">Contact Us</a>
        </div>
    </div>
</section>
@endsection

@section('extra_css')
<style>
@media (max-width: 768px) {
    section div[style*="grid-template-columns: 1fr 1fr"] {
        grid-template-columns: 1fr !important;
    }
}
</style>
@endsection
