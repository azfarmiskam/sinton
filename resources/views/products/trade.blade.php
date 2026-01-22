@extends('layouts.app')

@section('title', 'Trade Products - Sinton Group')
@section('meta_description', 'Sinton Group trades in fertilizers, oleochemicals, agriculture and food products, sourcing directly from primary producers to deliver quality and reliability.')

@section('content')
<!-- Page Header -->
<section class="hero" style="height: 50vh; min-height: 400px; margin-top: 80px;">
    <div class="hero-background">
        <div class="hero-slide active">
            <img src="{{ asset('images/backgrounds/hero4.jpg') }}" alt="Trade Products">
        </div>
    </div>
    <div class="hero-overlay"></div>
    
    <div class="hero-content">
        <h1>Trade Products</h1>
        <p>Premium commodities sourced from trusted global partners</p>
    </div>
</section>

<!-- Trade Introduction -->
<section class="section" style="background: white; padding: 60px 0;">
    <div class="container">
        <div class="about-content" style="max-width: 1000px;">
            <p style="font-size: 19px; line-height: 2; text-align: center;">We primarily trade by sourcing allocations directly from primary producers to government-owned entities and trusted private companies. Our commitment to fostering long-term partnerships is demonstrated through our assurance of reliable supply and consistent quality, tailored to meet the specific demands of buyers.</p>
        </div>
    </div>
</section>

<!-- Fertilizers -->
<section class="section" style="background: var(--light-gray);">
    <div class="container">
        <div class="section-title">
            <h2>Fertilizers</h2>
            <p>Essential nutrients for global agriculture</p>
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; max-width: 1100px; margin: 0 auto;">
            <div>
                <img src="{{ asset('images/products/fertilizers.jpg') }}" alt="Fertilizers" style="border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
            </div>
            <div>
                <p style="font-size: 17px; line-height: 1.9; margin-bottom: 25px;">The fertilizer products we trade in are Urea, DAP, MOP, NPK, TSP and Rock Phosphate. Sinton is set to invest in a DAP plant in India and Rock Phosphate mines in Sri Lanka and Australia as part of its future expansion plans.</p>
                
                <div style="background: white; padding: 30px; border-radius: 12px; margin-top: 25px;">
                    <h3 style="color: var(--primary-navy); margin-bottom: 20px; font-size: 20px;">Products We Trade:</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 10px 0; border-bottom: 1px solid var(--light-gray); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--primary-teal); margin-right: 12px;"></i>
                            <span>Urea</span>
                        </li>
                        <li style="padding: 10px 0; border-bottom: 1px solid var(--light-gray); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--primary-teal); margin-right: 12px;"></i>
                            <span>DAP (Diammonium Phosphate)</span>
                        </li>
                        <li style="padding: 10px 0; border-bottom: 1px solid var(--light-gray); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--primary-teal); margin-right: 12px;"></i>
                            <span>MOP (Muriate of Potash)</span>
                        </li>
                        <li style="padding: 10px 0; border-bottom: 1px solid var(--light-gray); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--primary-teal); margin-right: 12px;"></i>
                            <span>NPK (Nitrogen, Phosphorus, Potassium)</span>
                        </li>
                        <li style="padding: 10px 0; border-bottom: 1px solid var(--light-gray); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--primary-teal); margin-right: 12px;"></i>
                            <span>TSP (Triple Super Phosphate)</span>
                        </li>
                        <li style="padding: 10px 0; display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--primary-teal); margin-right: 12px;"></i>
                            <span>Rock Phosphate</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Oleochemicals -->
<section class="section" style="background: white;">
    <div class="container">
        <div class="section-title">
            <h2>Oleochemicals</h2>
            <p>Specialized additives and essential food ingredients</p>
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; max-width: 1100px; margin: 0 auto;">
            <div>
                <p style="font-size: 17px; line-height: 1.9; margin-bottom: 25px;">The oleochemicals we are in the process of manufacturing are CP16, CP18, Vitamin E and Glycerin.</p>
                
                <div style="background: var(--light-teal); padding: 30px; border-radius: 12px; margin-top: 25px;">
                    <h3 style="color: var(--primary-navy); margin-bottom: 20px; font-size: 20px;">Our Oleochemical Products:</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 10px 0; border-bottom: 1px solid rgba(27, 160, 152, 0.2); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--primary-teal); margin-right: 12px;"></i>
                            <span>CP16 (Cetyl Palmitate)</span>
                        </li>
                        <li style="padding: 10px 0; border-bottom: 1px solid rgba(27, 160, 152, 0.2); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--primary-teal); margin-right: 12px;"></i>
                            <span>CP18 (Cetyl Stearate)</span>
                        </li>
                        <li style="padding: 10px 0; border-bottom: 1px solid rgba(27, 160, 152, 0.2); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--primary-teal); margin-right: 12px;"></i>
                            <span>Vitamin E</span>
                        </li>
                        <li style="padding: 10px 0; display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--primary-teal); margin-right: 12px;"></i>
                            <span>Glycerin</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <img src="{{ asset('images/products/oleochemicals.jpg') }}" alt="Oleochemicals" style="border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
            </div>
        </div>
    </div>
</section>

<!-- Agriculture Products -->
<section class="section" style="background: var(--light-gray);">
    <div class="container">
        <div class="section-title">
            <h2>Agriculture Products</h2>
            <p>Quality agricultural commodities for global markets</p>
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; max-width: 1100px; margin: 0 auto;">
            <div>
                <img src="{{ asset('images/products/agriculture.jpg') }}" alt="Agriculture Products" style="border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
            </div>
            <div>
                <p style="font-size: 17px; line-height: 1.9; margin-bottom: 25px;">The agriculture products we trade in are Rice, Wheat, Raw Sugar and Soybean meal. Sinton has partnered with Agribid to revolutionize commodity procurement in the agriculture sector through an online platform connecting direct sellers and buyers.</p>
                
                <div style="background: white; padding: 30px; border-radius: 12px; margin-top: 25px;">
                    <h3 style="color: var(--primary-navy); margin-bottom: 20px; font-size: 20px;">Agricultural Commodities:</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 10px 0; border-bottom: 1px solid var(--light-gray); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--primary-teal); margin-right: 12px;"></i>
                            <span>Rice</span>
                        </li>
                        <li style="padding: 10px 0; border-bottom: 1px solid var(--light-gray); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--primary-teal); margin-right: 12px;"></i>
                            <span>Wheat</span>
                        </li>
                        <li style="padding: 10px 0; border-bottom: 1px solid var(--light-gray); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--primary-teal); margin-right: 12px;"></i>
                            <span>Raw Sugar</span>
                        </li>
                        <li style="padding: 10px 0; display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--primary-teal); margin-right: 12px;"></i>
                            <span>Soybean Meal</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Food Products -->
<section class="section" style="background: white;">
    <div class="container">
        <div class="section-title">
            <h2>Food Products</h2>
            <p>Premium food products from trusted sources</p>
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; max-width: 1100px; margin: 0 auto;">
            <div>
                <p style="font-size: 17px; line-height: 1.9; margin-bottom: 25px;">The food products we trade in are Milk, Australian Beef, Brazilian Beef and Buffalo Meat.</p>
                
                <div style="background: var(--light-teal); padding: 30px; border-radius: 12px; margin-top: 25px;">
                    <h3 style="color: var(--primary-navy); margin-bottom: 20px; font-size: 20px;">Food Products Range:</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 10px 0; border-bottom: 1px solid rgba(27, 160, 152, 0.2); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--primary-teal); margin-right: 12px;"></i>
                            <span>Milk & Dairy Products</span>
                        </li>
                        <li style="padding: 10px 0; border-bottom: 1px solid rgba(27, 160, 152, 0.2); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--primary-teal); margin-right: 12px;"></i>
                            <span>Australian Beef</span>
                        </li>
                        <li style="padding: 10px 0; border-bottom: 1px solid rgba(27, 160, 152, 0.2); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--primary-teal); margin-right: 12px;"></i>
                            <span>Brazilian Beef</span>
                        </li>
                        <li style="padding: 10px 0; display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: var(--primary-teal); margin-right: 12px;"></i>
                            <span>Buffalo Meat</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <img src="{{ asset('images/products/food.jpg') }}" alt="Food Products" style="border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="contact section">
    <div class="container">
        <div class="section-title">
            <h2>Interested in Our Trade Products?</h2>
            <p>Contact us to discuss your commodity trading needs</p>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ route('contact') }}" class="btn btn-primary" style="background: white; color: var(--primary-navy); font-size: 18px; padding: 18px 45px;">Get In Touch</a>
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
