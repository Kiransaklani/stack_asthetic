@extends('frontend.layouts.main')

@section('main-container')
    <!-- Page Title Bar Start -->
    <div class="container-fluid page-title-bar text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- <h1 class="display-4 fw-bold mb-0">Super Pulse CO2</h1> -->
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
                    <li class="breadcrumb-item active" aria-current="page">Super Pulse CO2</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb Navigation End -->

    <!-- Product Detail Start -->
    <div class="container-xxl mb-5 py-6">
        <div class="container">
            <div class="row g-5">
                <!-- Product Images -->
                <div class="col-lg-6">
                    <div class="row g-3 mb-3">
                        <div class="col-4">
                            <a href="{{url('frontend/img/super-pulse-1.png')}}" data-lightbox="product-images">
                                <img class="img-fluid rounded" src="{{url('frontend/img/super-pulse-1.png')}}" alt="Product Image 1" style="cursor: pointer;">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="{{url('frontend/img/super-pulse-2.png')}}" data-lightbox="product-images">
                                <img class="img-fluid rounded" src="{{url('frontend/img/super-pulse-2.png')}}" alt="Product Image 2" style="cursor: pointer;">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="{{url('frontend/img/super-pulse-3.png')}}" data-lightbox="product-images">
                                <img class="img-fluid rounded" src="{{url('frontend/img/super-pulse-3.png')}}" alt="Product Image 3" style="cursor: pointer;">
                            </a>
                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="{{url('frontend/img/product_1.png')}}" data-lightbox="product-images">
                            <img class="img-fluid rounded" src="{{url('frontend/img/product_1.png')}}" alt="Main Product Image" style="cursor: pointer;">
                        </a>
                    </div>
                </div>

                <!-- Product Information -->
                <div class="col-lg-6">
                    <h2 class="display-5 mb-4">Super Pulse CO2</h2>
                    
                    <!-- Product Details -->
                    <h3 class="mb-3">Product Details</h3>
                    <p class="mb-4">This premium skincare product is specially formulated with advanced ingredients to deliver exceptional results. Our carefully crafted formula combines natural extracts with cutting-edge science to provide your skin with the nourishment it deserves. Experience the transformation as this product works to improve skin texture, enhance radiance, and restore your natural glow.</p>

                    <!-- Key Features and Advantages -->
                    <h4 class="mb-3">Key Features and Advantages of This Product</h4>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Dermatologist-tested and clinically proven formula</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Contains premium natural ingredients for safe and effective results</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Suitable for all skin types including sensitive skin</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Non-comedogenic and hypoallergenic formulation</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Visible results within weeks of regular use</li>
                        <li class="mb-2"><i class="far fa-check-circle text-primary me-2"></i>Long-lasting hydration and nourishment</li>
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

    <!-- Super Pulse CO2 Section Start -->
    <div class="container-fluid video-section py-6" id="super-pulse-section">
        <!-- Decorative Background Elements -->
        <div class="video-decorative-elements">
            <div class="decorative-circle circle-1"></div>
            <div class="decorative-circle circle-2"></div>
            <div class="decorative-circle circle-3"></div>
        </div>
        
        <div class="container">
            <!-- Main Product Image with Feature Boxes on Sides -->
            <div class="row align-items-center">
                <!-- Left Feature Box -->
                <div class="col-lg-3 col-md-4 mb-4 mb-lg-0">
                    <div class="feature-box text-center wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="feature-icon-wrapper mb-3">
                            <i class="fas fa-laser-pointer fa-2x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Multi Mode Technology</h4>
                        <p class="mb-0">Advanced CO2 laser with Fractional, Ultra, and CW modes for versatile skin resurfacing and rejuvenation treatments.</p>
                    </div>
                </div>

                <!-- Main Product Image -->
                <div class="col-lg-6 col-md-4 mb-4 mb-lg-0">
                    <div class="video-wrapper my-3 position-relative wow fadeInUp" data-wow-delay="0.5s">
                        <div class="product-badge">
                            <span><i class="fas fa-star me-2"></i>Super Pulse CO2</span>
                        </div>
                        <div class="fda-approved-badge fda-badge-left">
                            <i class="fas fa-check-circle"></i>FDA Approved
                        </div>
                        <img class="img-fluid w-100 video-image" src="{{url('frontend/img/1.png')}}" alt="Super Pulse CO2 Laser">
                    </div>
                </div>

                <!-- Right Feature Box -->
                <div class="col-lg-3 col-md-4 mb-4 mb-lg-0">
                    <div class="feature-box text-center wow fadeInRight" data-wow-delay="0.7s">
                        <div class="feature-icon-wrapper mb-3">
                            <i class="fas fa-heartbeat fa-2x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Deep Resurfacing</h4>
                        <p class="mb-0">Effective treatment for scar removal, wrinkle reduction, and pigmentation issues with precision and safety.</p>
                    </div>
                </div>
            </div>

            <!-- Bottom Feature Box (Treatment Modes) -->
            <div class="row justify-content-center mt-4">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box text-center wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-icon-wrapper mb-3">
                            <i class="fas fa-cogs fa-2x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Precision Control</h4>
                        <p class="mb-0">USA imported Metal RF Tube with 10600nm laser technology for superior performance and reliability.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Super Pulse CO2 Section End -->

    <!-- What does CO2 Fractional Laser do Section Start -->
    <div class="container-xxl py-3">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="fw-bold mb-0">What does CO2 Fractional Laser do</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="text-center">
                        <img class="img-fluid rounded" src="{{url('frontend/img/15.png')}}" alt="CO2 Fractional Laser">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- What does CO2 Fractional Laser do Section End -->

    <!-- CO2 Laser Scan Head Technology Comparison Section Start -->
    <div class="container-xxl py-3">
        <div class="container">
            <!-- Divider Line -->
            <div class="row mb-5">
                <div class="col-12">
                    <hr class="section-divider">
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="fw-bold mb-0">CO2 Laser Scan Head Technology Comparison</h2>
                    <p class="lead mt-3">Fully Digital vs Hybrid vs Fully Analog Systems</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered comparison-table">
                            <thead>
                                <tr>
                                    <th class="text-center">Features</th>
                                    <th class="text-center">Fully Analog</th>
                                    <th class="text-center">Hybrid</th>
                                    <th class="text-center bg-primary text-white">Fully Digital<br><small>(Ours)</small></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold">Novanta Products</td>
                                    <td>62xxK/83xxK with 67x driver<br>MOVIA Scan Head</td>
                                    <td>62xxK/83xxK with digital driver<br>Versia Scan Head</td>
                                    <td class="bg-light fw-bold">Lightning II</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Price</td>
                                    <td class="text-center">$</td>
                                    <td class="text-center">$$</td>
                                    <td class="text-center bg-light fw-bold">$$$</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Field Serviceability</td>
                                    <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center bg-light"><i class="fas fa-times text-danger"></i></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Accuracy</td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i> <i class="fas fa-check text-success"></i></td>
                                    <td class="text-center bg-light"><i class="fas fa-check text-success"></i> <i class="fas fa-check text-success"></i> <i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Available Mirror Size Range</td>
                                    <td class="text-center">3mm to 50mm</td>
                                    <td class="text-center">3mm to 50mm</td>
                                    <td class="text-center bg-light fw-bold">14mm to 50mm</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Drift</td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i> <i class="fas fa-check text-success"></i></td>
                                    <td class="text-center bg-light"><i class="fas fa-check text-success"></i> <i class="fas fa-check text-success"></i> <i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Predictive Control</td>
                                    <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center bg-light"><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Protection from OBS components</td>
                                    <td>Low</td>
                                    <td>High</td>
                                    <td class="bg-light fw-bold">Medium/High</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="alert alert-info mt-4" role="alert">
                        <strong><i class="fas fa-info-circle me-2"></i>Note:</strong> New Super Pulse CO2 Laser uses Digital signal system which is more expensive and stable, protective, faster, compared to market 98% use Analog signal.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CO2 Laser Scan Head Technology Comparison Section End -->

    <!-- Before After & Digital System Section Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <!-- Before and After Changes in Skin -->
                <div class="col-lg-6">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold mb-4">Before and After Skin Results</h2>
                    </div>
                    <div class="text-center">
                        <img class="img-fluid rounded shadow-lg" src="{{url('frontend/img/20.png')}}" alt="Before and After Skin Changes">
                    </div>
                </div>

                <!-- Digital System -->
                <div class="col-lg-6">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold mb-4">Digital System Features</h2>
                    </div>
                    <div class="text-center">
                        <img class="img-fluid rounded shadow-lg" src="{{url('frontend/img/14.png')}}" alt="Digital System Features">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Before After & Digital System Section End -->
@endsection
