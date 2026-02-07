@extends('frontend.layouts.main')

@section('main-container')
    <!-- Page Title Bar Start -->
    <div class="container-fluid page-title-bar text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- <h1 class="display-4 fw-bold mb-0">Revital Cream</h1> -->
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
                    <li class="breadcrumb-item active" aria-current="page">Revital Cream</li>
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
                            <a href="{{url('frontend/img/revital-cream-1.png')}}" data-lightbox="product-images">
                                <img class="img-fluid rounded" src="{{url('frontend/img/revital-cream-1.png')}}" alt="Product Image 1" style="cursor: pointer;">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="{{url('frontend/img/revital-cream-2.png')}}" data-lightbox="product-images">
                                <img class="img-fluid rounded" src="{{url('frontend/img/revital-cream-2.png')}}" alt="Product Image 2" style="cursor: pointer;">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="{{url('frontend/img/revital-cream-3.png')}}" data-lightbox="product-images">
                                <img class="img-fluid rounded" src="{{url('frontend/img/revital-cream-3.png')}}" alt="Product Image 3" style="cursor: pointer;">
                            </a>
                        </div>
                    </div>
                    <div class="mb-3 position-relative">
                        <span class="fda-approved-badge" style="top: 15px; right: 15px;"><i class="fas fa-check-circle"></i>FDA Approved</span>
                        <a href="{{url('frontend/img/product_4.png')}}" data-lightbox="product-images">
                            <img class="img-fluid rounded" src="{{url('frontend/img/product_4.png')}}" alt="Main Product Image" style="cursor: pointer;">
                        </a>
                    </div>
                </div>

                <!-- Product Information -->
                <div class="col-lg-6">
                    <h2 class="display-5 mb-4">Revital Cream</h2>
                    
                    <!-- Product Details -->
                    <h3 class="mb-3">Product Details</h3>
                    <p class="mb-4">Discover our advanced skincare solutions that combine cutting-edge technology with natural ingredients. This product represents the perfect balance between innovation and nature, delivering exceptional results for your skin's health and beauty. Experience the future of skincare today.</p>

                    <!-- Key Features and Advantages -->
                    <h4 class="mb-3">Key Features and Advantages of This Product</h4>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Cutting-edge technology meets natural ingredients</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Advanced formula for maximum effectiveness</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Perfect balance for skin health</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Innovative skincare solution</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Comprehensive skin care benefits</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Future-ready skincare technology</li>
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

    <!-- Recommended For Section Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h1 class="mb-3">RECOMMENDED FOR</h1>
                    <p class="lead">AFTER-CARE & SOOTHING CREAM FOR DAMAGED SKIN</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Point 1 -->
                <div class="col-lg-6">
                    <div class="recommended-card p-4 h-100">
                        <div class="d-flex align-items-start">
                            <div class="recommended-number-circle me-4">
                                <span class="number">1</span>
                            </div>
                            <div class="flex-grow-1">
                                <div class="recommended-label mb-3">
                                    <h5 class="fw-bold text-white mb-0 p-2"># After MTS, semi-permanent makeup</h5>
                                </div>
                                <p class="mb-0">Proper after-care can enormously affect to the result of these skin treatments. Apply revital cream twice a day, every morning and evening, for 3-5 days. This will keep your skin moist and will enhance the effect of treatments.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Point 2 -->
                <div class="col-lg-6">
                    <div class="recommended-card p-4 h-100">
                        <div class="d-flex align-items-start">
                            <div class="recommended-number-circle me-4">
                                <span class="number">2</span>
                            </div>
                            <div class="flex-grow-1">
                                <div class="recommended-label mb-3">
                                    <h5 class="fw-bold text-white mb-0 p-2"># Skin texture improvement</h5>
                                </div>
                                <p class="mb-0">By moisturizing and reinforcing skin protection layer, Dr.drawing revital cream will improve your skin texture.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Point 3 -->
                <div class="col-lg-6">
                    <div class="recommended-card p-4 h-100">
                        <div class="d-flex align-items-start">
                            <div class="recommended-number-circle me-4">
                                <span class="number">3</span>
                            </div>
                            <div class="flex-grow-1">
                                <div class="recommended-label mb-3">
                                    <h5 class="fw-bold text-white mb-0 p-2"># Skin protection from external damages</h5>
                                </div>
                                <p class="mb-0">Our skin becomes vulnerable after having microneedling or microblading procedures. Dr.drawing revital cream will keep your skin safe by creating moisture protection layer.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Point 4 -->
                <div class="col-lg-6">
                    <div class="recommended-card p-4 h-100">
                        <div class="d-flex align-items-start">
                            <div class="recommended-number-circle me-4">
                                <span class="number">4</span>
                            </div>
                            <div class="flex-grow-1">
                                <div class="recommended-label mb-3">
                                    <h5 class="fw-bold text-white mb-0 p-2"># Protection after shaving</h5>
                                </div>
                                <p class="mb-0">Dr.drawing revital cream is also good for after-shaving. By creating moisture protection layer, this protects our skin from external damages and prevents skin troubles.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Recommended For Section End -->

    <!-- Features Section Start -->
    <div class="container-fluid video-section py-6">
        <div class="video-decorative-elements">
            <div class="decorative-circle circle-1"></div>
            <div class="decorative-circle circle-2"></div>
            <div class="decorative-circle circle-3"></div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2 class="display-5 mb-3">FEATURES</h2>
                    <div class="features-subtitle mb-4">
                        <span class="badge features-badge-custom px-4 py-2">After-care & soothing cream for damaged skin</span>
                    </div>
                    <!-- Image below subtitle -->
                    <div class="feature-main-image mb-5">
                        <img class="img-fluid rounded shadow-lg" src="{{url('frontend/img/revital-test.png')}}" alt="Revital Cream Features" style="max-width: 900px; width: 100%;">
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <!-- Point 1: Beneficial Ingredients -->
                <div class="col-lg-6">
                    <div class="feature-point-card p-5 h-100 d-flex flex-column">
                        <h4 class="fw-bold mb-4">#POINT1 Beneficial ingredients</h4>
                        <div class="flex-grow-1">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-success me-3 mt-1" style="font-size: 1.2rem;"></i>
                                    <span>Perfect after-care cream for aesthetic.</span>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-success me-3 mt-1" style="font-size: 1.2rem;"></i>
                                    <span>Beneficial for skin moisturizing, regeneration and vitalize.</span>
                                </li>
                                <li class="mb-0 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-success me-3 mt-1" style="font-size: 1.2rem;"></i>
                                    <span>Made of various active ingredients such as Peptides EGF, Panthenol, and natural extracts.</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto pt-3">
                            <div class="ingredient-highlight p-3 rounded">
                                <p class="mb-0 small text-muted"><i class="fas fa-leaf text-success me-2"></i>Natural & Effective Formula</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Point 2: Upgraded Container -->
                <div class="col-lg-6">
                    <div class="feature-point-card p-5 h-100 d-flex flex-column">
                        <h4 class="fw-bold mb-4">#POINT2 Upgraded container</h4>
                        <div class="flex-grow-1">
                            <div class="sealing-info">
                                <h5 class="fw-bold mb-3">Excellent sealing</h5>
                                <p class="mb-0">It is impossible to make it contact the air, so it prevents pollution (oxidation), light exposure, and it is impossible to be oxidized by air content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Section End -->

    <!-- Texture and Advantages Section Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="display-5 mb-3">TEXTURE AND ADVANTAGES</h2>
                </div>
            </div>
            <div class="row g-4">
                <!-- Texture Points -->
                <div class="col-lg-6">
                    <div class="texture-advantages-card p-5 h-100">
                        <h4 class="fw-bold mb-4 text-primary">TEXTURE</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3 d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-3 mt-1" style="font-size: 1.2rem;"></i>
                                <span>Gel cream type enables easy and excellent applying</span>
                            </li>
                            <li class="mb-0 d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-3 mt-1" style="font-size: 1.2rem;"></i>
                                <span>Creating moisture layer immediately after applying. Quickly absorbed into skin and gives fresh feeling for long time.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Advantages Points -->
                <div class="col-lg-6">
                    <div class="texture-advantages-card p-5 h-100">
                        <h4 class="fw-bold mb-4 text-primary">ADVANTAGES OF AIRLESS CONTAINER</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-3 mt-1" style="font-size: 1.2rem;"></i>
                                <span>Perfect protection from pollution</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-3 mt-1" style="font-size: 1.2rem;"></i>
                                <span>Excellent suction prevents waste of contents</span>
                            </li>
                            <li class="mb-0 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-3 mt-1" style="font-size: 1.2rem;"></i>
                                <span>Exquisite pump enables constant pumping</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Texture and Advantages Section End -->

    <!-- Product Information Section Start -->
    <div class="container-xxl py-6 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="display-5 mb-3">PRODUCT INFORMATION</h2>
                    <p class="lead">After-care & soothing cream for damaged skin</p>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <img class="img-fluid rounded shadow-lg" src="{{url('frontend/img/revital-cream-3.png')}}" alt="Revital Cream Product Information">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="product-info-content">
                        <!-- Direction -->
                        <div class="info-section mb-4">
                            <h4 class="fw-bold mb-3">DIRECTION:</h4>
                            <p class="mb-0">Pump out the content, gently massage it and wash-off with tepid water.</p>
                        </div>

                        <!-- Ingredient -->
                        <div class="info-section mb-4">
                            <h4 class="fw-bold mb-3">INGREDIENT:</h4>
                            <p class="mb-0 small">Water, Cetyl Ethylhexanoate, Caprylic/Capric Triglyceride, Sodium Hyaluronate, Glycerin, Methylpropanediol, Dimethicone/Vinyl Dimethicone Crosspolymer, Cetyl PEG/PPG-10/1 Dimethicone, Panthenol, Octyldodecanol, Dimethicone, Sodium Chloride, Betaine, Trehalose, Centella Asiatica Extract, Camellia Sinensis Leaf Extract, Castanea Crenata (Chestnut) Shell Extract, Diospyros Kaki Leaf Extract, Ulmus Davidiana Root Extract, Acetyl Hexapeptide-8, Palmitoyl Pentapeptide-3, rh-Oligopeptide-1, Butylene Glycol, 1,2-Hexanediol, Allantoin, Adenosine, Aloe Barbadensis Leaf Extract, Chlorphenesin, Disodium EDTA, Fragrance.</p>
                        </div>

                        <!-- Caution -->
                        <div class="info-section mb-4">
                            <h4 class="fw-bold mb-3">CAUTION:</h4>
                            <p class="mb-0">For external use only. Avoid direct contact with eyes. Do not use on damaged or irritated skin. Discontinue use if irritation or rash occurs. To ensure skin compatibility, conduct a skin test prior to use. Keep out of reach of children.</p>
                        </div>

                        <!-- Volume -->
                        <div class="info-section text-center">
                            <p class="h5 text-primary mb-0">50ml/1.7 fl.oz</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Information Section End -->
@endsection
