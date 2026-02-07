<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Stack Aesthetics</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{url('frontend/img/logo.png')}}" rel="icon" type="image/png">
    <link href="{{url('frontend/img/logo.png')}}" rel="apple-touch-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('frontend/css/style.css')}}" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s" style="z-index: 9999;">
        <a href="{{url('/')}}" class="navbar-brand d-block d-lg-none">
            <img src="{{url('frontend/img/logo.png')}}" alt="Logo" style="height: 60px;">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{url('/')}}" class="nav-item nav-link {{request()->is('/') ? 'active' : ''}}">Home</a>
                <a href="{{url('/about')}}" class="nav-item nav-link {{request()->is('about') ? 'active' : ''}}">About</a>
            </div>
            <a href="{{url('/')}}" class="navbar-brand bg-secondary py-1 px-4 mx-3 d-none d-lg-block d-flex align-items-center justify-content-center" style="min-height: auto;">
                <img src="{{url('frontend/img/logo.png')}}" alt="Logo" style="height: 90px; width: auto; object-fit: contain;">
            </a>
            <div class="navbar-nav me-auto py-0">
                <a href="{{url('/products')}}" class="nav-item nav-link {{request()->is('products') ? 'active' : ''}}">Products</a>
                <a href="{{url('/services')}}" class="nav-item nav-link {{request()->is('services') ? 'active' : ''}}">Service</a>
                <a href="{{url('/contact')}}" class="nav-item nav-link {{request()->is('contact') ? 'active' : ''}}">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    @if(!request()->is('about') && !request()->is('services') && !request()->is('products') && !request()->is('contact') && !request()->is('product/*'))
    <!-- Header Start -->
    <div class="container-fluid bg-light my-6 mt-0 hero-section position-relative overflow-hidden" id="home">
        <!-- Background Images -->
        <div class="hero-image-wrapper">
            <img class="hero-image hero-image-1" src="{{url('frontend/img/profile_1.png')}}" alt="">
            <img class="hero-image hero-image-2" src="{{url('frontend/img/profile_2.png')}}" alt="">
            <img class="hero-image hero-image-3" src="{{url('frontend/img/profile_3.png')}}" alt="">
        </div>
        <div class="container position-relative" style="z-index: 2;">
            <div class="row g-5 mt-5 align-items-end">
                <div class="col-lg-8 py-6 pb-0 pt-lg-0">
                    <h3 class="text-primary mb-3 hero-discover">Discover</h3>
                    <h1 class="display-3 mb-3 hero-title">Your Stack Aesthetic Partner</h1>
                    <h2 class="typed-text-output d-inline hero-subtitle"></h2>
                    <div class="typed-text d-none">We create premium skincare solutions to enhance your natural beauty.</div>
                    <div class="d-flex align-items-center pt-5 flex-wrap gap-3">
                        <a href="{{url('/products')}}" class="btn btn-primary py-3 px-4 hero-button">Explore Products</a>
                        <a href="{{url('/services')}}" class="btn btn-primary py-3 px-4 hero-button">Our Services</a>
                    </div>
                </div>
                <div class="col-lg-4 position-relative d-flex align-items-end">
                    <div class="hero-right-image-wrapper">
                        <img class="img-fluid hero-right-image" src="{{url('frontend/img/profile_5.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    
    <style>
        /* Hero Section Animations */
        .hero-section {
            min-height: 600px;
        }
        
        /* Discover Text Animation - Top to Bottom */
        .hero-discover {
            animation: slideDown 1s ease-out forwards;
            opacity: 0;
            transform: translateY(-50px);
        }
        
        @keyframes slideDown {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Title Animation */
        .hero-title {
            animation: fadeInUp 1s ease-out 0.3s forwards;
            opacity: 0;
            transform: translateY(30px);
        }
        
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Subtitle Animation */
        .hero-subtitle {
            animation: fadeInUp 1s ease-out 0.6s forwards;
            opacity: 0;
            transform: translateY(30px);
        }
        
        /* Explore Button Animation - Right to Left */
        .hero-button {
            animation: slideInRight 1s ease-out 0.9s forwards;
            opacity: 0;
            transform: translateX(100px);
            position: relative;
            overflow: hidden;
        }
        
        .hero-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }
        
        .hero-button:hover::before {
            left: 100%;
        }
        
        @keyframes slideInRight {
            0% {
                opacity: 0;
                transform: translateX(100px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        /* Image Animation - Background */
        .hero-image-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
        }
        
        .hero-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            opacity: 0.25;
            z-index: 1;
        }
        
        /* Image 1 - Shows first (0-3s) */
        .hero-image-1 {
            opacity: 0;
            animation: imageFloatIn 1.2s ease-out 0.6s forwards, 
                       imageCycle1 9s ease-in-out infinite;
        }
        
        /* Image 2 - Shows second (3-6s) */
        .hero-image-2 {
            opacity: 0;
            animation: imageFloatIn 1.2s ease-out 0.6s forwards, 
                       imageCycle2 9s ease-in-out infinite;
        }
        
        /* Image 3 - Shows third (6-9s) */
        .hero-image-3 {
            opacity: 0;
            animation: imageFloatIn 1.2s ease-out 0.6s forwards, 
                       imageCycle3 9s ease-in-out infinite;
        }
        
        @keyframes imageFloatIn {
            0% {
                opacity: 0;
                transform: scale(1.1);
            }
            100% {
                opacity: 0.25;
                transform: scale(1);
            }
        }
        
        /* Image Cycle Animation - Profile 1 (0-3s visible) */
        @keyframes imageCycle1 {
            0% {
                opacity: 0.25;
                z-index: 3;
                transform: scale(1);
            }
            30% {
                opacity: 0.25;
                z-index: 3;
                transform: scale(1.05) translateY(-5px);
            }
            33.33% {
                opacity: 0;
                z-index: 1;
                transform: scale(1);
            }
            33.34%, 100% {
                opacity: 0;
                z-index: 1;
            }
        }
        
        /* Image Cycle Animation - Profile 2 (3-6s visible) */
        @keyframes imageCycle2 {
            0%, 33.33% {
                opacity: 0;
                z-index: 1;
            }
            33.34% {
                opacity: 0.25;
                z-index: 3;
                transform: scale(1);
            }
            60% {
                opacity: 0.25;
                z-index: 3;
                transform: scale(1.05) translateY(-5px);
            }
            66.66% {
                opacity: 0;
                z-index: 1;
                transform: scale(1);
            }
            66.67%, 100% {
                opacity: 0;
                z-index: 1;
            }
        }
        
        /* Image Cycle Animation - Profile 3 (6-9s visible) */
        @keyframes imageCycle3 {
            0%, 66.66% {
                opacity: 0;
                z-index: 1;
            }
            66.67% {
                opacity: 0.25;
                z-index: 3;
                transform: scale(1);
            }
            90% {
                opacity: 0.25;
                z-index: 3;
                transform: scale(1.05) translateY(-5px);
            }
            100% {
                opacity: 0;
                z-index: 1;
                transform: scale(1);
            }
        }
        
        /* Right Side Image - Profile 5 */
        .hero-right-image-wrapper {
            position: relative;
            width: 100%;
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }
        
        .hero-right-image {
            width: 100%;
            max-width: 100%;
            height: auto;
            object-fit: contain;
            z-index: 2;
            padding-top: 100px;
            transform: scale(2);
            transform-origin: bottom center;
            animation: zoomInOut 4s ease-in-out infinite;
        }
        
        @keyframes zoomInOut {
            0%, 100% {
                transform: scale(2);
            }
            50% {
                transform: scale(2.2);
            }
        }
        
        /* Responsive Design */
        @media (max-width: 991.98px) {
            .hero-section {
                min-height: auto;
            }
            
            .hero-image {
                opacity: 0.15;
            }
            
            .hero-right-image {
                animation: zoomInOutMobile 4s ease-in-out infinite;
            }
            
            @keyframes zoomInOutMobile {
                0%, 100% {
                    transform: scale(1.2);
                }
                50% {
                    transform: scale(1.35);
                }
            }
        }
        
        @media (max-width: 768px) {
            .hero-discover {
                font-size: 1.2rem;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-right-image {
                animation: zoomInOutSmall 4s ease-in-out infinite;
            }
            
            @keyframes zoomInOutSmall {
                0%, 100% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.15);
                }
            }
        }
    </style>
    @endif

