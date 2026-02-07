@extends('frontend.layouts.main')

@section('main-container')
    <!-- Page Title Bar Start -->
    <div class="container-fluid page-title-bar text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- <h1 class="display-4 fw-bold mb-0">Products</h1> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Bar End -->

    <!-- Products Heading Start -->
    <div class="container-xxl py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="mb-2">Our Products</h1>
                    <div class="mx-auto" style="width: 100px; height: 3px; background: var(--primary);"></div>
                    <p class="mt-3 mb-0"><span class="badge fda-approved-badge-inline px-3 py-2 d-inline-flex align-items-center"><i class="fas fa-check-circle me-2"></i>FDA Approved</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Products Heading End -->

    <!-- Products Start -->
    <div class="container-xxl py-6 pt-5" id="project">
        <div class="container">
            <!-- Product Card 1 -->
            <div class="row g-0 mb-4 bg-white rounded shadow-sm overflow-hidden wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6 position-relative">
                    <span class="fda-approved-badge" style="top: 15px; right: 15px;"><i class="fas fa-check-circle"></i>FDA Approved</span>
                    <img class="img-fluid w-100 h-100" src="{{url('frontend/img/product_1.png')}}" alt="Product 1" style="object-fit: cover; max-height: 350px;">
                </div>
                <div class="col-lg-6 d-flex align-items-center p-4">
                    <div class="w-100">
                        <h2 class="h3 mb-2">Super Pulse CO2</h2>
                        <p class="mb-3">Transform your skin with our premium skincare collection. Formulated with natural ingredients and advanced science, our products deliver visible results for a radiant, healthy glow.</p>
                        <a href="{{url('/product/super-pulse-co2')}}" class="btn btn-primary py-2 px-4">
                            View Details <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="row g-0 mb-4 bg-white rounded shadow-sm overflow-hidden wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-lg-6 d-flex align-items-center p-4 order-lg-1 order-2">
                    <div class="w-100">
                        <h2 class="h3 mb-2">Salmon-DNA-Serum</h2>
                        <p class="mb-3">Experience our professional beauty treatments designed to address your specific skin concerns. From anti-aging solutions to acne treatments, we've got you covered.</p>
                        <a href="{{url('/product/salmon-dna-serum')}}" class="btn btn-primary py-2 px-4">
                            View Details <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1 position-relative">
                    <span class="fda-approved-badge" style="top: 15px; right: 15px;"><i class="fas fa-check-circle"></i>FDA Approved</span>
                    <img class="img-fluid w-100 h-100" src="{{url('frontend/img/product_2.png')}}" alt="Product 2" style="object-fit: cover; max-height: 350px;">
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="row g-0 mb-4 bg-white rounded shadow-sm overflow-hidden wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-6 position-relative">
                    <span class="fda-approved-badge fda-badge-left" style="top: 15px;"><i class="fas fa-check-circle"></i>FDA Approved</span>
                    <img class="img-fluid w-100 h-100" src="{{url('frontend/img/product_3.png')}}" alt="Product 3" style="object-fit: cover; max-height: 350px;">
                </div>
                <div class="col-lg-6 d-flex align-items-center p-4">
                    <div class="w-100">
                        <h2 class="h3 mb-2">Skin Control Mask</h2>
                        <p class="mb-3">Get personalized skincare advice from our certified experts. We analyze your skin type and recommend the perfect routine tailored to your unique needs and lifestyle.</p>
                        <a href="{{url('/product/skin-control-mask')}}" class="btn btn-primary py-2 px-4">
                            View Details <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="row g-0 mb-4 bg-white rounded shadow-sm overflow-hidden wow fadeInUp" data-wow-delay="0.4s">
                <div class="col-lg-6 d-flex align-items-center p-4 order-lg-1 order-2">
                    <div class="w-100">
                        <h2 class="h3 mb-2">Revital Cream</h2>
                        <p class="mb-3">Discover our advanced skincare solutions that combine cutting-edge technology with natural ingredients. Achieve the perfect balance for your skin's health and beauty.</p>
                        <a href="{{url('/product/revital-cream')}}" class="btn btn-primary py-2 px-4">
                            View Details <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1 position-relative">
                    <span class="fda-approved-badge" style="top: 15px; right: 15px;"><i class="fas fa-check-circle"></i>FDA Approved</span>
                    <img class="img-fluid w-100 h-100" src="{{url('frontend/img/product_4.png')}}" alt="Product 4" style="object-fit: cover; max-height: 350px;">
                </div>
            </div>
            
            <!-- Products Description Section -->
            <div class="row mt-5 wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-12 text-center">
                    <p class="fs-5 text-muted mb-4">Discover our premium range of skincare products designed to transform your beauty routine</p>
                    <a class="btn btn-primary py-3 px-5" href="{{url('/contact')}}">Contact Us for More Details</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->
@endsection
