// ===================================
// SINTON GROUP - MAIN JAVASCRIPT
// ===================================

// Hero Slider Data
const heroSlides = [
    {
        image: '/images/backgrounds/hero1.jpg',
        title: 'Trusted Partnerships',
        description: 'Building strong, trusted partnerships for reliable and successful delivery'
    },
    {
        image: '/images/backgrounds/hero2.jpg',
        title: 'ESG Sustainability',
        description: 'Committed to environment, social and governance (ESG) excellence for a sustainable future'
    },
    {
        image: '/images/backgrounds/hero3.jpg',
        title: 'Investment for Growth',
        description: 'Empowering your business with strategic investments for unprecedented growth'
    },
    {
        image: '/images/backgrounds/hero4.jpg',
        title: 'Naturally Refined',
        description: 'Providing premium, naturally refined products to fuel your success'
    },
    {
        image: '/images/backgrounds/hero5.jpg',
        title: 'Direct Value Chain Contribution',
        description: 'Strengthening supply chain to increase efficiency'
    }
];

let currentSlide = 0;

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initHeroSlider();
    initMobileMenu();
    initScrollEffects();
    initSmoothScroll();
});

// ===== HERO SLIDER =====
function initHeroSlider() {
    const heroBackground = document.querySelector('.hero-background');
    const heroContent = document.querySelector('.hero-content');
    const indicatorsContainer = document.querySelector('.hero-indicators');
    
    if (!heroBackground || !heroContent) return;
    
    // Create slides
    heroSlides.forEach((slide, index) => {
        const slideDiv = document.createElement('div');
        slideDiv.className = 'hero-slide';
        if (index === 0) slideDiv.classList.add('active');
        
        const img = document.createElement('img');
        img.src = slide.image;
        img.alt = slide.title;
        
        slideDiv.appendChild(img);
        heroBackground.appendChild(slideDiv);
        
        // Create indicator
        const indicator = document.createElement('div');
        indicator.className = 'indicator';
        if (index === 0) indicator.classList.add('active');
        indicator.addEventListener('click', () => goToSlide(index));
        indicatorsContainer.appendChild(indicator);
    });
    
    // Update content for first slide
    updateHeroContent(0);
    
    // Auto-play slider
    setInterval(nextSlide, 5000);
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % heroSlides.length;
    updateSlide();
}

function goToSlide(index) {
    currentSlide = index;
    updateSlide();
}

function updateSlide() {
    const slides = document.querySelectorAll('.hero-slide');
    const indicators = document.querySelectorAll('.indicator');
    
    slides.forEach((slide, index) => {
        slide.classList.toggle('active', index === currentSlide);
    });
    
    indicators.forEach((indicator, index) => {
        indicator.classList.toggle('active', index === currentSlide);
    });
    
    updateHeroContent(currentSlide);
}

function updateHeroContent(index) {
    const heroContent = document.querySelector('.hero-content');
    const slide = heroSlides[index];
    
    // Fade out
    heroContent.style.opacity = '0';
    heroContent.style.transform = 'translateY(20px)';
    
    setTimeout(() => {
        heroContent.querySelector('h1').textContent = slide.title;
        heroContent.querySelector('p').textContent = slide.description;
        
        // Fade in
        heroContent.style.opacity = '1';
        heroContent.style.transform = 'translateY(0)';
    }, 500);
}

// ===== MOBILE MENU =====
function initMobileMenu() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (!menuToggle || !navMenu) return;
    
    menuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        menuToggle.classList.toggle('active');
    });
    
    // Close menu when clicking on a link
    const navLinks = document.querySelectorAll('.nav-menu a');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');
            menuToggle.classList.remove('active');
        });
    });
}

// ===== SCROLL EFFECTS =====
function initScrollEffects() {
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // Highlight active nav link based on scroll position
    const sections = document.querySelectorAll('section[id]');
    
    window.addEventListener('scroll', () => {
        const scrollY = window.pageYOffset;
        
        sections.forEach(section => {
            const sectionHeight = section.offsetHeight;
            const sectionTop = section.offsetTop - 100;
            const sectionId = section.getAttribute('id');
            
            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                document.querySelector(`.nav-menu a[href*="${sectionId}"]`)?.classList.add('active');
            } else {
                document.querySelector(`.nav-menu a[href*="${sectionId}"]`)?.classList.remove('active');
            }
        });
    });
}

// ===== SMOOTH SCROLL =====
function initSmoothScroll() {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            if (href === '#') return;
            
            e.preventDefault();
            
            const target = document.querySelector(href);
            if (target) {
                const offsetTop = target.offsetTop - 80;
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// ===== ANIMATION ON SCROLL =====
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe elements for animation
document.addEventListener('DOMContentLoaded', () => {
    const animateElements = document.querySelectorAll('.business-card, .product-card, .office-card, .stat-item');
    
    animateElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});
