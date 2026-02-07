@extends('frontend.layouts.main')

@section('main-container')
    <!-- Page Title Bar Start -->
    <div class="container-fluid page-title-bar text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- <h1 class="display-5 fw-bold mb-0">Laser Machine Services</h1> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Bar End -->

    <!-- Service Intro Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-3">Beyond Sales — We Service What We Sell</h2>
                    <div class="mx-auto mb-4" style="width: 100px; height: 3px; background: var(--primary);"></div>
                    <p class="lead">Along with the sale of machines, we have strong experience in <strong>servicing laser machines</strong>. We don’t just supply FDA-approved laser equipment — we keep your devices running at their best with expert installation, calibration, maintenance, and repair.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Intro End -->

    <!-- FDA Approved Laser Machines Gallery Start -->
    <div class="container-xxl py-4">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h3 class="mb-2">FDA Approved Laser Machines We Support</h3>
                    <div class="mx-auto" style="width: 100px; height: 3px; background: var(--primary);"></div>
                    <p class="mt-3 text-muted">We sell and service a range of FDA-approved laser devices for aesthetic and medical use.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-machine-card rounded overflow-hidden shadow-sm border h-100">
                        <a href="{{url('frontend/img/product_1.png')}}" data-lightbox="laser-machines">
                            <img class="img-fluid w-100" src="{{url('frontend/img/product_1.png')}}" alt="FDA Approved Laser Machine" style="height: 280px; object-fit: cover;">
                        </a>
                        <div class="p-3 text-center bg-light">
                            <small class="text-primary fw-semibold">FDA Approved</small>
                            <p class="mb-0 small">Laser device — sales &amp; full service support</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-machine-card rounded overflow-hidden shadow-sm border h-100">
                        <a href="{{url('frontend/img/product_2.png')}}" data-lightbox="laser-machines">
                            <img class="img-fluid w-100" src="{{url('frontend/img/product_2.png')}}" alt="FDA Approved Laser Machine" style="height: 280px; object-fit: cover;">
                        </a>
                        <div class="p-3 text-center bg-light">
                            <small class="text-primary fw-semibold">FDA Approved</small>
                            <p class="mb-0 small">Laser device — sales &amp; full service support</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-machine-card rounded overflow-hidden shadow-sm border h-100">
                        <a href="{{url('frontend/img/super-pulse-1.png')}}" data-lightbox="laser-machines">
                            <img class="img-fluid w-100" src="{{url('frontend/img/super-pulse-1.png')}}" alt="FDA Approved Laser Machine" style="height: 280px; object-fit: cover;">
                        </a>
                        <div class="p-3 text-center bg-light">
                            <small class="text-primary fw-semibold">FDA Approved</small>
                            <p class="mb-0 small">Laser device — sales &amp; full service support</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-machine-card rounded overflow-hidden shadow-sm border h-100">
                        <a href="{{url('frontend/img/super-pulse-2.png')}}" data-lightbox="laser-machines">
                            <img class="img-fluid w-100" src="{{url('frontend/img/super-pulse-2.png')}}" alt="FDA Approved Laser Machine" style="height: 280px; object-fit: cover;">
                        </a>
                        <div class="p-3 text-center bg-light">
                            <small class="text-primary fw-semibold">FDA Approved</small>
                            <p class="mb-0 small">Laser device — sales &amp; full service support</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-machine-card rounded overflow-hidden shadow-sm border h-100">
                        <a href="{{url('frontend/img/product_3.png')}}" data-lightbox="laser-machines">
                            <img class="img-fluid w-100" src="{{url('frontend/img/product_3.png')}}" alt="FDA Approved Laser Machine" style="height: 280px; object-fit: cover;">
                        </a>
                        <div class="p-3 text-center bg-light">
                            <small class="text-primary fw-semibold">FDA Approved</small>
                            <p class="mb-0 small">Laser device — sales &amp; full service support</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-machine-card rounded overflow-hidden shadow-sm border h-100">
                        <a href="{{url('frontend/img/product_4.png')}}" data-lightbox="laser-machines">
                            <img class="img-fluid w-100" src="{{url('frontend/img/product_4.png')}}" alt="FDA Approved Laser Machine" style="height: 280px; object-fit: cover;">
                        </a>
                        <div class="p-3 text-center bg-light">
                            <small class="text-primary fw-semibold">FDA Approved</small>
                            <p class="mb-0 small">Laser device — sales &amp; full service support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FDA Approved Laser Machines Gallery End -->

    <!-- What We Offer - Laser Machine Services Start -->
    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h3 class="mb-2">Our Laser Machine Services</h3>
                    <div class="mx-auto" style="width: 100px; height: 3px; background: var(--primary);"></div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded p-4 bg-white shadow-sm h-100 text-center">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-tools fa-lg"></i>
                        </div>
                        <h5 class="mb-2">Installation &amp; Setup</h5>
                        <p class="mb-0 small text-muted">Professional installation and calibration of FDA-approved laser machines at your facility.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="rounded p-4 bg-white shadow-sm h-100 text-center">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-cogs fa-lg"></i>
                        </div>
                        <h5 class="mb-2">Maintenance &amp; Calibration</h5>
                        <p class="mb-0 small text-muted">Regular maintenance and precision calibration to ensure optimal performance and safety.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded p-4 bg-white shadow-sm h-100 text-center">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-wrench fa-lg"></i>
                        </div>
                        <h5 class="mb-2">Repair &amp; Troubleshooting</h5>
                        <p class="mb-0 small text-muted">Expert repair and troubleshooting for laser equipment so you face minimal downtime.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="rounded p-4 bg-white shadow-sm h-100 text-center">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-user-graduate fa-lg"></i>
                        </div>
                        <h5 class="mb-2">Training &amp; Support</h5>
                        <p class="mb-0 small text-muted">Operator training and ongoing technical support for your team.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- What We Offer End -->

    <!-- Why Choose Our Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4">Why Choose Our Laser Machine Service?</h3>
                    <p class="mb-4">We have years of hands-on experience with aesthetic and medical laser equipment. When you buy from us, you get more than a machine — you get a long-term service partner who understands your devices and keeps them running safely and effectively.</p>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="far fa-check-circle text-primary me-2"></i> Experienced technicians trained on FDA-approved laser systems</li>
                        <li class="mb-3"><i class="far fa-check-circle text-primary me-2"></i> Quick response for maintenance and repair to reduce downtime</li>
                        <li class="mb-3"><i class="far fa-check-circle text-primary me-2"></i> Genuine parts and manufacturer-recommended procedures</li>
                        <li class="mb-3"><i class="far fa-check-circle text-primary me-2"></i> Service support for machines sold by us and select other brands</li>
                    </ul>
                    <a href="{{url('/contact')}}" class="btn btn-primary py-3 px-4 mt-2">Get Service or Quote</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-3">
                        <div class="col-6">
                            <img class="img-fluid rounded shadow" src="{{url('frontend/img/about-4.png')}}" alt="Laser service">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid rounded shadow" src="{{url('frontend/img/about-5.png')}}" alt="Laser machine service">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Our Service End -->
@endsection
