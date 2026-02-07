@extends('frontend.layouts.main')

@section('main-container')
    <!-- Page Title Bar Start -->
    <div class="container-fluid page-title-bar text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- <h1 class="display-4 fw-bold mb-0">About</h1> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Bar End -->

    <!-- About Stack Heading Start -->
    <div class="container-xxl py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="mb-2">About Stack</h1>
                    <div class="mx-auto" style="width: 100px; height: 3px; background: var(--primary);"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Stack Heading End -->

    <!-- About Start -->
    <div class="container-xxl py-6" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-5">
                        <div class="years flex-shrink-0 text-center me-4">
                            <h1 class="display-1 mb-0">9</h1>
                            <h5 class="mb-0">Years</h5>
                        </div>
                        <h3 class="lh-base mb-0">Trusted Experience in Skincare & Beauty Treatments</h3>
                    </div>
                    <p class="mb-4">At Stack Asthetic, we combine advanced science with gentle care to deliver skincare that truly works. From everyday glow to specialized treatments, our mission is to help you look and feel your best.</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>FDA approved laser machines</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Dermatologist-Approved Formulas</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Premium Ingredients, Visible Results</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Safe for All Skin Types</p>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="">Why Choose Us</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src="{{url('frontend/img/about-5.png')}}" alt="">
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src="{{url('frontend/img/about-4.png')}}" alt="">
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Happy Clients</h5>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">2000</h2><p>+</p>
                    </div>
                    <p class="mb-4">Thousands of satisfied clients trust us for their daily skincare needs.</p>
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Products Developed</h5>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">100</h2><p>+</p>
                    </div>
                    <p class="mb-0">Innovative skincare solutions designed with care and science.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- We Are Stack Analysis Start -->
    <div class="container-fluid py-6" id="we-are">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h1 class="display-4 fw-bold mb-2">We are Stack Analysis</h1>
                    <div class="mx-auto" style="width: 100px; height: 3px; background: var(--primary);"></div>
                </div>
            </div>
            <div class="row g-5 mt-2">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="text-align: justify;">
                    <p class="mb-3">Stack Analysis stands as a recognized pioneer in the field of aesthetic medicine and skincare technology. Having served the industry for more than ten years, our core expertise lies in delivering end-to-end manufacturing services including original equipment manufacturing and original design manufacturing for high-end cosmetic products and aesthetic medical devices.</p>
                    <p class="mb-3">What sets us apart is our unwavering dedication to superior quality, which manifests through our market-leading prices, breakthrough innovations, and outstanding aesthetic appeal. We ensure rigorous quality control, foster transparent dialogue with clients, and offer region-specific support with adaptable organizational frameworks tailored to varying business requirements.</p>
                    <p class="mb-0">By forging meaningful alliances and pursuing relentless advancement, we craft offerings that merge state-of-the-art scientific breakthroughs with real-world applicability, guaranteeing that every client receives solutions that go beyond their initial expectations. <span class="fda-approved-inline"><i class="fas fa-check-circle text-primary me-1"></i><strong>FDA Approved</strong> equipment and processes.</span></p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s" style="text-align: justify;">
                    <p class="mb-3">Stack Analysis champions a partnership-driven methodology that generates mutual benefits for everyone involved. Our executive leadership, comprising seasoned professionals in global market expansion and technical innovation, possesses extensive collective expertise spanning the cosmetic and medical technology domains.</p>
                    <p class="mb-3">Our business model is built on a triple-benefit strategy where distributors, end customers, and final consumers all gain value from our offerings. By following globally recognized quality protocols and implementing systematic enhancement initiatives, we foster collaborative opportunities within our organization and with strategic allies worldwide.</p>
                    <p class="mb-0">We are committed to nurturing enduring connections based on open communication, consistent performance, and a unified vision of pushing boundaries in aesthetic healthcare and cosmetic technology innovation.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- We Are Stack Analysis End -->

    <!-- Video/Image Section Start -->
    <div class="container-fluid video-section py-6" id="video-section">
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
                            <i class="fas fa-microscope fa-2x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Advanced Technology</h4>
                        <p class="mb-0">State-of-the-art medical aesthetic equipment with cutting-edge innovation and precision engineering.</p>
                    </div>
                </div>

                <!-- Main Product Image -->
                <div class="col-lg-6 col-md-4 mb-4 mb-lg-0">
                    <div class="video-wrapper about-badges-spaced my-3 position-relative wow fadeInUp" data-wow-delay="0.5s">
                        <div class="product-badge">
                            <span><i class="fas fa-star me-2"></i>Premium Quality</span>
                        </div>
                        <div class="fda-approved-badge with-product-badge">
                            <i class="fas fa-check-circle"></i>FDA Approved
                        </div>
                        <img class="img-fluid w-100 video-image" src="{{url('frontend/img/stack-product.jpeg')}}" alt="Stack Analysis Manufacturing">
                        <!-- Video placeholder - replace img with video tag when ready -->
                        <!-- 
                        <video class="img-fluid w-100" controls>
                            <source src="{{url('frontend/video/manufacturing.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        -->
                    </div>
                </div>

                <!-- Right Feature Box -->
                <div class="col-lg-3 col-md-4 mb-4 mb-lg-0">
                    <div class="feature-box text-center wow fadeInRight" data-wow-delay="0.7s">
                        <div class="feature-icon-wrapper mb-3">
                            <i class="fas fa-shield-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Quality Assurance</h4>
                        <p class="mb-0">Rigorous quality control and testing to ensure the highest standards in every product we deliver.</p>
                    </div>
                </div>
            </div>

            <!-- Bottom Feature Box (Global Partnership + South Korea & China) -->
            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box text-center wow fadeInUp" data-wow-delay="0.7s">
                        <div class="feature-icon-wrapper mb-3">
                            <i class="fas fa-globe-asia fa-2x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">South Korean Partnerships</h4>
                        <p class="mb-0">Strategic alliances with leading South Korean aesthetic and skincare companies. We bring K-beauty innovation, advanced R&D, and FDA-approved medical aesthetic equipment from trusted Korean manufacturers to our global network.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box text-center wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-icon-wrapper mb-3">
                            <i class="fas fa-handshake fa-2x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Global Partnership</h4>
                        <p class="mb-0">Building lasting relationships with distributors and clients worldwide through trust and excellence—including strong ties with South Korean and Chinese companies in medical aesthetics and skincare technology.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box text-center wow fadeInUp" data-wow-delay="0.9s">
                        <div class="feature-icon-wrapper mb-3">
                            <i class="fas fa-industry fa-2x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Chinese Market Partnerships</h4>
                        <p class="mb-0">Collaboration with established Chinese companies in medical aesthetics, cosmetic technology, and OEM/ODM manufacturing. We leverage quality-driven production and innovation from China to serve distributors and clinics across regions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video/Image Section End -->

    <!-- Stack Analysis Culture Start -->
    <div class="container-fluid stack-culture-section my-5 py-3" id="culture">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h1 class="display-4 fw-bold mb-0">Stack Analysis Culture</h1>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="culture-card text-center">
                        <h2 class="culture-heading mb-3">Vision</h2>
                        <div class="culture-underline mx-auto mb-4"></div>
                        <p class="culture-text mb-0">To become a world-class provider of advanced medical aesthetic equipment and premium skincare solutions that transform lives globally.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="culture-card text-center">
                        <h2 class="culture-heading mb-3">Mission</h2>
                        <div class="culture-underline mx-auto mb-4"></div>
                        <p class="culture-text mb-0">To make world-class health and beauty accessible to everyone through innovative technology, exceptional quality, and personalized care solutions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="culture-card text-center">
                        <h2 class="culture-heading mb-3">Responsibility</h2>
                        <div class="culture-underline mx-auto mb-4"></div>
                        <p class="culture-text mb-0">To increase confidence in quality medical aesthetic solutions and build trust through transparency, reliability, and continuous innovation in every product we deliver.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Stack Analysis Culture End -->
@endsection
