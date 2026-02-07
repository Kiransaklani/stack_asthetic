@extends('frontend.layouts.main')

@section('main-container')
    <!-- Page Title Bar Start -->
    <div class="container-fluid page-title-bar text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- <h1 class="display-4 fw-bold mb-0">Salmon-DNA-Serum</h1> -->
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
                    <li class="breadcrumb-item active" aria-current="page">Salmon-DNA-Serum</li>
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
                            <a href="{{url('frontend/img/dna-serum-1.png')}}" data-lightbox="product-images">
                                <img class="img-fluid rounded" src="{{url('frontend/img/dna-serum-1.png')}}" alt="Product Image 1" style="cursor: pointer;">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="{{url('frontend/img/dna-serum-2.png')}}" data-lightbox="product-images">
                                <img class="img-fluid rounded" src="{{url('frontend/img/dna-serum-2.png')}}" alt="Product Image 2" style="cursor: pointer;">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="{{url('frontend/img/dna-serum-3.png')}}" data-lightbox="product-images">
                                <img class="img-fluid rounded" src="{{url('frontend/img/dna-serum-3.png')}}" alt="Product Image 3" style="cursor: pointer;">
                            </a>
                        </div>
                    </div>
                    <div class="mb-3 position-relative">
                        <span class="fda-approved-badge" style="top: 15px; right: 15px;"><i class="fas fa-check-circle"></i>FDA Approved</span>
                        <a href="{{url('frontend/img/product_2.png')}}" data-lightbox="product-images">
                            <img class="img-fluid rounded" src="{{url('frontend/img/product_2.png')}}" alt="Main Product Image" style="cursor: pointer;">
                        </a>
                    </div>
                </div>

                <!-- Product Information -->
                <div class="col-lg-6">
                    <h2 class="display-5 mb-4">Salmon-DNA-Serum</h2>
                    
                    <!-- Product Details -->
                    <h3 class="mb-3">Product Details</h3>
                    <p class="mb-4">Experience our professional beauty treatments designed to address your specific skin concerns. From anti-aging solutions to acne treatments, this product delivers comprehensive skincare benefits. Our advanced formula targets multiple skin issues simultaneously for optimal results.</p>

                    <!-- Key Features and Advantages -->
                    <h4 class="mb-3">Key Features and Advantages of This Product</h4>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Advanced anti-aging technology for youthful skin</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Effective acne treatment and prevention</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Deep hydration and moisture retention</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Skin brightening and tone correction</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Reduces fine lines and wrinkles</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Protects against environmental damage</li>
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

    <!-- What Does Salmon DNA Serum Do Section Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="text-center">
                        <img class="img-fluid rounded shadow-lg" src="{{url('frontend/img/15.png')}}" alt="Salmon DNA Serum Benefits">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">What Does Salmon DNA Serum Do?</h2>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-start">
                            <span class="text-primary me-3" style="font-size: 1.5rem;">Ø</span>
                            <span>Effective treatment for atrophic acne scars</span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <span class="text-primary me-3" style="font-size: 1.5rem;">Ø</span>
                            <span>Improves overall skin texture & complexion</span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <span class="text-primary me-3" style="font-size: 1.5rem;">Ø</span>
                            <span>Minimises enlarged pores</span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <span class="text-primary me-3" style="font-size: 1.5rem;">Ø</span>
                            <span>Stimulates collagen production</span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <span class="text-primary me-3" style="font-size: 1.5rem;">Ø</span>
                            <span>Quick treatment with minimal downtime</span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <span class="text-primary me-3" style="font-size: 1.5rem;">Ø</span>
                            <span>Fast speed scanning system</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- What Does Salmon DNA Serum Do Section End -->

    <!-- Solving Fundamental Skin Problem Section Start -->
    <div class="container-fluid video-section py-6">
        <div class="video-decorative-elements">
            <div class="decorative-circle circle-1"></div>
            <div class="decorative-circle circle-2"></div>
            <div class="decorative-circle circle-3"></div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h1 class="mb-3">SOLVING FUNDAMENTAL SKIN PROBLEM</h1>
                    <h3 class="display-6 mb-4">Skin <span class="text-primary">Rejuvenation</span> & <span class="text-primary">Anti-aging</span></h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-4">
                    <div class="pdrn-icon-wrapper mb-4">
                        <div class="pdrn-droplet">
                            <span class="pdrn-text">PDRN</span>
                        </div>
                    </div>
                    <div class="info-box p-4 mb-4">
                        <p class="mb-0 lead">It contains ultra-low molecular weight PDRN ingredients that are highly absorbed into the skin, providing PDRN molecular weights to each skin layer.</p>
                    </div>
                    <div class="product-vials mb-4">
                        <img class="img-fluid" src="{{url('frontend/img/product_2.png')}}" alt="Salmon DNA Serum Vials" style="max-width: 300px;">
                    </div>
                    <div class="benefits-text mb-3">
                        <p class="h5 mb-2">Skin regeneration,</p>
                        <p class="h5 mb-4">increased elasticity</p>
                    </div>
                    <div class="highlight-text">
                        <h2 class="display-5 fw-bold text-primary">SALMON DNA PDRN!!!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Solving Fundamental Skin Problem Section End -->

    <!-- Benefits Section Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <!-- Hydration & Moisturization -->
                <div class="col-lg-6">
                    <div class="benefit-card p-5 h-100">
                        <div class="text-center mb-4">
                            <div class="benefit-number">1</div>
                            <h3 class="fw-bold mb-4">HYDRATION & MOISTURIZATION</h3>
                        </div>
                        <div class="text-center mb-4">
                            <i class="fas fa-tint fa-4x text-primary mb-3"></i>
                        </div>
                        <p class="text-center lead">Salmon PDRN has the ability to <span class="text-primary fw-bold">attract</span> and <span class="text-primary fw-bold">retain moisture in the skin</span>, helping people with dry skin.</p>
                    </div>
                </div>

                <!-- Skin Regeneration & Protection -->
                <div class="col-lg-6">
                    <div class="benefit-card p-5 h-100">
                        <div class="text-center mb-4">
                            <div class="benefit-number">2</div>
                            <h3 class="fw-bold mb-4">SKIN REGENERATION & PROTECTION</h3>
                        </div>
                        <div class="regeneration-chart mb-4">
                            <h5 class="mb-3">Regeneration</h5>
                            <div class="chart-bars mb-3">
                                <div class="chart-bar-wrapper mb-2">
                                    <div class="chart-bar" style="width: 46.75%; background: var(--primary); height: 40px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; border-radius: 5px;">
                                        46.75%
                                    </div>
                                </div>
                                <div class="chart-bar-wrapper">
                                    <div class="chart-bar" style="width: 98.5%; background: var(--primary); height: 40px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; border-radius: 5px;">
                                        98.5%
                                    </div>
                                </div>
                            </div>
                            <p class="small text-muted mb-4">7 and 15 days after application of PDRN ointment to autologous skin graft site. Regeneration rate increased by <span class="text-primary fw-bold">46.75%</span> and <span class="text-primary fw-bold">98.5%</span> compared to non-use of PDRN.</p>
                        </div>
                        <p class="text-center lead">Accelerates the skin's natural healing process to <span class="text-primary fw-bold">quickly improve scars and wounds</span>. It also strengthens the skin's barrier function to <span class="text-primary fw-bold">protect the skin from the external environment</span>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Benefits Section End -->

    <!-- TIP Section Start -->
    <div class="container-xxl py-6 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h1 class="fw-bold text-primary mb-0">TIP</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="tip-steps">
                        <!-- Step 01 -->
                        <div class="tip-step mb-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="step-tab">STEP 01</div>
                            <div class="step-content">
                                <p class="mb-0">Please <span class="text-primary fw-bold">MTS</span> with 1 bottle of ampoule for deep skin care.</p>
                            </div>
                        </div>

                        <!-- Step 02 -->
                        <div class="tip-step mb-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="step-tab">STEP 02</div>
                            <div class="step-content">
                                <p class="mb-0">Please apply ampoule for 6 days after <span class="text-primary fw-bold">MTS</span>.</p>
                            </div>
                        </div>

                        <!-- Step 03 -->
                        <div class="tip-step mb-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="step-tab">STEP 03</div>
                            <div class="step-content">
                                <p class="mb-0">Apply a lot of <span class="text-primary fw-bold">DNA ampoule</span> at night.</p>
                            </div>
                        </div>

                        <!-- Step 04 -->
                        <div class="tip-step mb-4 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="step-tab">STEP 04</div>
                            <div class="step-content">
                                <p class="mb-0">If you receive care for 28 days, <span class="text-primary fw-bold">your skin will fundamentally change</span>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TIP Section End -->
@endsection
