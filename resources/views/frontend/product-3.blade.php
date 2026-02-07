@extends('frontend.layouts.main')

@section('main-container')
    <!-- Page Title Bar Start -->
    <div class="container-fluid page-title-bar text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- <h1 class="display-4 fw-bold mb-0">Skin Control Mask</h1> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Bar End -->

    <!-- Breadcrumb Navigation Start -->
    <div class="container-fluid bg-light py-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{url('/services')}}" class="text-decoration-none">Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Skin Control Mask</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb Navigation End -->

    <!-- Product Detail Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <!-- Product Images -->
                <div class="col-lg-6">
                    <div class="row g-3 mb-3">
                        <div class="col-4">
                            <a href="{{url('frontend/img/mask-sheet-1.png')}}" data-lightbox="product-images">
                                <img class="img-fluid rounded" src="{{url('frontend/img/mask-sheet-1.png')}}" alt="Product Image 1" style="cursor: pointer;">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="{{url('frontend/img/mask-sheet-2.png')}}" data-lightbox="product-images">
                                <img class="img-fluid rounded" src="{{url('frontend/img/mask-sheet-2.png')}}" alt="Product Image 2" style="cursor: pointer;">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="{{url('frontend/img/mask-sheet-3.png')}}" data-lightbox="product-images">
                                <img class="img-fluid rounded" src="{{url('frontend/img/mask-sheet-3.png')}}" alt="Product Image 3" style="cursor: pointer;">
                            </a>
                        </div>
                    </div>
                    <div class="mb-3 position-relative">
                        <span class="fda-approved-badge fda-badge-left" style="top: 15px;"><i class="fas fa-check-circle"></i>FDA Approved</span>
                        <a href="{{url('frontend/img/product_3.png')}}" data-lightbox="product-images">
                            <img class="img-fluid rounded" src="{{url('frontend/img/product_3.png')}}" alt="Main Product Image" style="cursor: pointer;">
                        </a>
                    </div>
                </div>

                <!-- Product Information -->
                <div class="col-lg-6">
                    <h2 class="display-5 mb-4">Skin Control Mask</h2>
                    
                    <!-- Product Details -->
                    <h3 class="mb-3">Product Details</h3>
                    <p class="mb-4">Get personalized skincare advice from our certified experts. This product is designed to work with your unique skin type, providing customized care that addresses your specific needs. Our formula adapts to your skin's requirements for optimal results.</p>

                    <!-- Key Features and Advantages -->
                    <h4 class="mb-3">Key Features and Advantages of This Product</h4>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Personalized skincare consultation included</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Adaptive formula for all skin types</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Expert-recommended ingredients</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Customizable routine based on skin analysis</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Professional-grade formulation</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Comprehensive skincare solution</li>
                    </ul>

                    <!-- Query CTA -->
                    <div class="mt-4">
                        <h5 class="mb-3">Want to get more inquiry on this?</h5>
                        <p class="mb-3">Share your query with us.</p>
                        <a href="{{ url('/contact') }}" class="btn btn-primary py-2 px-4">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Detail End -->

    <!-- Particular Ingredients Section Start -->
    <div class="container-xxl py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="fw-bold mb-3">Particular ingredients for MOISTURIZING & SOOTHING</h2>
                    <p class="lead">Absolute basic ingredients for moisturizing and healthier skin care.</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Ingredient 1 -->
                <div class="col-lg-6 col-md-6">
                    <div class="ingredient-card p-4 h-100">
                        <div class="row align-items-center">
                            <div class="col-4 text-center">
                                <div class="ingredient-icon mb-3">
                                    <i class="fas fa-flask fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="ingredient-badges mb-2">
                                    <span class="badge bg-primary me-2 mb-2">Sodium Hyaluronate</span>
                                    <span class="badge" style="background: #87CEEB;">Hyaluronic Acid</span>
                                </div>
                                <p class="mb-0">Hyaluronic Acid contains moisture of 1,000 times of its weight.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ingredient 2 -->
                <div class="col-lg-6 col-md-6">
                    <div class="ingredient-card p-4 h-100">
                        <div class="row align-items-center">
                            <div class="col-4 text-center">
                                <div class="ingredient-icon mb-3">
                                    <i class="fas fa-leaf fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="ingredient-badges mb-2">
                                    <span class="badge bg-primary">Allantoin</span>
                                </div>
                                <p class="mb-0">Extracted from natural ingredients, such as: comfrey, sugar beet, etc. It has ability to calm and moisturize skin, even with small amount.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ingredient 3 -->
                <div class="col-lg-6 col-md-6">
                    <div class="ingredient-card p-4 h-100">
                        <div class="row align-items-center">
                            <div class="col-4 text-center">
                                <div class="ingredient-icon mb-3">
                                    <i class="fas fa-dna fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="ingredient-badges mb-2">
                                    <span class="badge bg-primary me-2 mb-2">Palmitoyl Pentapeptide-4</span>
                                    <span class="badge" style="background: #87CEEB;">Acetyl Hexapeptide-8</span>
                                </div>
                                <p class="mb-0">Also known as "peptide" boast to build up collagen and elastin to improve the texture of skin.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ingredient 4 -->
                <div class="col-lg-6 col-md-6">
                    <div class="ingredient-card p-4 h-100">
                        <div class="row align-items-center">
                            <div class="col-4 text-center">
                                <div class="ingredient-icon mb-3">
                                    <i class="fas fa-atom fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="ingredient-badges mb-2">
                                    <span class="badge bg-primary">SH-Oligopeptide-1</span>
                                </div>
                                <p class="mb-0">Also known as "E.G.F" helps to keep moisture and to stay moist longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Particular Ingredients Section End -->

    <!-- Premium Tencel Fabric Section Start -->
    <div class="container-fluid video-section py-6">
        <div class="video-decorative-elements">
            <div class="decorative-circle circle-1"></div>
            <div class="decorative-circle circle-2"></div>
            <div class="decorative-circle circle-3"></div>
        </div>
        
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="text-center">
                        <img class="img-fluid rounded shadow-lg" src="{{url('frontend/img/mask-sheet-2.png')}}" alt="Tencel Fabric Mask">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Premium sheet, made with <span class="text-primary">Tencel fabric</span></h2>
                    <p class="lead mb-4">Made with ECO friendly ingredient. Sticks on skin, without any elevation.</p>
                    
                    <div class="tencel-info-boxes mb-4">
                        <div class="info-box p-4 mb-3">
                            <p class="mb-0">100% cellulose type fiber. A premium fabric made ECO friendly with gum tree.</p>
                        </div>
                        <div class="info-box p-4">
                            <p class="mb-0">It has huge ability to hold moisture (ampoule) and sticks very well. It doesn't irritate skin.</p>
                        </div>
                    </div>

                    <h3 class="fw-bold mb-3">What is "<span class="text-primary">Tencel</span>"?</h3>
                    
                    <div class="tencel-features">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="feature-badge text-center p-3">
                                    <h5 class="mb-0">High Absorption</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="feature-badge text-center p-3">
                                    <h5 class="mb-0">No irritation on skin</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="feature-badge text-center p-3">
                                    <h5 class="mb-0">Outstanding ventilation</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="feature-badge text-center p-3">
                                    <h5 class="mb-0">Remarkable sticking ability</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Premium Tencel Fabric Section End -->

    <!-- Effective Skin Control System Section Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="display-5 mb-3">Effective <span class="text-primary">skin control system</span></h2>
                    <p class="lead">Designed with high concentrated extract ampoule collaborating with premium sheet for moisturizing.</p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="system-feature-card text-center p-5 h-100">
                        <div class="feature-number-circle mb-4">
                            <span class="number">1</span>
                        </div>
                        <h4 class="fw-bold text-primary mb-3">Aftercare | Soothing & Cooling</h4>
                        <p class="mb-0">It helps to quickly cool down the heat and soothe the skin after treatments: such as MTS, PMU, and etc.</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="system-feature-card text-center p-5 h-100">
                        <div class="feature-number-circle mb-4">
                            <span class="number">2</span>
                        </div>
                        <h4 class="fw-bold text-primary mb-3">Concentrated nutrition supply | Nutrition</h4>
                        <p class="mb-0">Contains multiple high concentrated extract ampoules: such as E.G.F, Palmitoyl Pentopeptide-4, and Acetyl Hexapeptide-8, etc. to help skin to look alive.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="system-feature-card text-center p-5 h-100">
                        <div class="feature-number-circle mb-4">
                            <span class="number">3</span>
                        </div>
                        <h4 class="fw-bold text-primary mb-3">Concentrated moisturize care | Moisturizing</h4>
                        <p class="mb-0">Contains natural ingredients such as Hyaluronic, Allantoin, etc. to deliver the moisture to skin and decrease losing moisture for better moist care for skin.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Effective Skin Control System Section End -->
@endsection
