@extends('frontend.layouts.main')

@section('main-container')
<!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-xxl py-4 about-section position-relative overflow-hidden" id="about">
        <!-- Background Logo -->
        <div class="about-bg-logo">
            <img src="{{url('frontend/img/logo.png')}}" alt="Logo Background">
        </div>
        <div class="container position-relative" style="z-index: 2;">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h1 class="display-5 mb-0 wow fadeInUp" data-wow-delay="0.1s">Why Choose Us</h1>
                </div>
            </div>
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
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>FDA Approved Laser Machines</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Dermatologist-Approved Formulas</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Premium Ingredients, Visible Results</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Safe for All Skin Types</p>
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
                    <a class="btn btn-primary py-3 px-5 mt-3" href="{{url('/about')}}">Why Choose Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
    <style>
        /* About Section Background Logo */
        .about-section {
            position: relative;
            overflow: hidden;
        }
        
        .about-bg-logo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 0;
            pointer-events: none;
        }
        
        .about-bg-logo img {
            width: 800px;
            height: auto;
            max-width: 100%;
            object-fit: contain;
            opacity: 0.3;
            filter: blur(0.5px);
        }
        
        .about-section .container {
            position: relative;
            z-index: 2;
        }
        
        @media (max-width: 991.98px) {
            .about-bg-logo img {
                width: 500px;
                opacity: 0.12;
            }
        }
        
        @media (max-width: 768px) {
            .about-bg-logo img {
                width: 350px;
                opacity: 0.10;
            }
        }
    </style>

    <!-- Expertise Start -->
    <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h1 class="display-5 mb-0 wow fadeInUp" data-wow-delay="0.1s">Skills & Experience</h1>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">At Stack Asthetic, we combine advanced science with gentle care to deliver skincare that truly works. From everyday glow to specialized treatments, our mission is to help you look and feel your best. <span class="badge fda-approved-badge-inline px-3 py-2 mt-2 d-inline-flex align-items-center"><i class="fas fa-check-circle me-2"></i>FDA Approved</span></p>
                    <h3 class="mb-4">Our Expertise</h3>
                    <div class="expertise-container position-relative" style="min-height: 550px;">
                        <!-- Animated Circles with Data -->
                        <div class="expertise-circle expertise-circle-1" data-skill="Super Pulse Fractional CO2" data-percent="95" data-color="primary">
                            <div class="circle-content">
                                <div class="circle-percent">95%</div>
                                <div class="circle-label">Super Pulse Fractional CO2</div>
                            </div>
                        </div>
                        <div class="expertise-circle expertise-circle-2" data-skill="ND YAG Machine" data-percent="85" data-color="warning">
                            <div class="circle-content">
                                <div class="circle-percent">85%</div>
                                <div class="circle-label">ND YAG Machine</div>
                            </div>
                        </div>
                        <div class="expertise-circle expertise-circle-3" data-skill="MNRF Machine" data-percent="90" data-color="danger">
                            <div class="circle-content">
                                <div class="circle-percent">90%</div>
                                <div class="circle-label">MNRF Machine</div>
                            </div>
                        </div>
                        <div class="expertise-circle expertise-circle-4" data-skill="Cryolipolysis Machine" data-percent="90" data-color="danger">
                            <div class="circle-content">
                                <div class="circle-percent">90%</div>
                                <div class="circle-label">Cryolipolysis Machine</div>
                            </div>
                        </div>
                        <div class="expertise-circle expertise-circle-5" data-skill="HydraFacial Machine" data-percent="95" data-color="dark">
                            <div class="circle-content">
                                <div class="circle-percent">95%</div>
                                <div class="circle-label">HydraFacial Machine</div>
                            </div>
                        </div>
                        <div class="expertise-circle expertise-circle-6" data-skill="Hair Removal Laser Machine" data-percent="85" data-color="info">
                            <div class="circle-content">
                                <div class="circle-percent">85%</div>
                                <div class="circle-label">Hair Removal Laser Machine</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="image-wrapper position-relative rounded overflow-hidden" style="height: 100%; min-height: 600px;">
                        <div class="fda-approved-badge" style="top: 20px; right: 20px; z-index: 5;">
                            <i class="fas fa-check-circle"></i>FDA Approved
                        </div>
                        <!-- Background Animated Balls -->
                        <div class="bg-ball bg-ball-1"></div>
                        <div class="bg-ball bg-ball-2"></div>
                        <div class="bg-ball bg-ball-3"></div>
                        <div class="bg-ball bg-ball-4"></div>
                        <div class="bg-ball bg-ball-5"></div>
                        <div class="bg-ball bg-ball-6"></div>
                        <img class="img-fluid rounded w-100 position-relative product-image-float" src="{{url('frontend/img/stack-product.jpeg')}}" alt="Stack Product" style="height: 100%; object-fit: cover; z-index: 2;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise End -->

    <style>
        .expertise-container {
            overflow: hidden;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 20px;
            padding: 30px;
        }

        .expertise-circle {
            position: absolute;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease, z-index 0.3s ease;
            z-index: 2;
        }

        .expertise-circle:hover {
            transform: scale(1.15);
            z-index: 20 !important;
        }

        .expertise-circle-1 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            top: 3%;
            left: 5%;
            animation: float1 10.5s ease-in-out infinite;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
            z-index: 2;
        }

        .expertise-circle-2 {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            top: 10%;
            right: 8%;
            animation: float2 11.8s ease-in-out infinite;
            box-shadow: 0 10px 30px rgba(245, 87, 108, 0.4);
            z-index: 3;
        }

        .expertise-circle-3 {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            top: 48%;
            left: 10%;
            animation: float3 12.3s ease-in-out infinite;
            box-shadow: 0 10px 30px rgba(79, 172, 254, 0.4);
            z-index: 4;
        }

        .expertise-circle-4 {
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            bottom: 10%;
            right: 10%;
            animation: float4 10.2s ease-in-out infinite;
            box-shadow: 0 10px 30px rgba(250, 112, 154, 0.4);
            z-index: 5;
        }

        .expertise-circle-5 {
            background: linear-gradient(135deg, #30cfd0 0%, #330867 100%);
            bottom: 3%;
            left: 8%;
            animation: float5 11.5s ease-in-out infinite;
            box-shadow: 0 10px 30px rgba(48, 207, 208, 0.4);
            z-index: 6;
        }

        .expertise-circle-6 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            top: 32%;
            right: 5%;
            animation: float6 9.2s ease-in-out infinite;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
            z-index: 7;
        }

        .circle-content {
            text-align: center;
            color: white;
            padding: 10px;
            position: relative;
            z-index: 10;
            pointer-events: none;
        }

        .circle-percent {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 5px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        .circle-label {
            font-size: 12px;
            font-weight: 600;
            line-height: 1.2;
            text-shadow: 0 1px 2px rgba(0,0,0,0.2);
        }

        /* Background Balls for Image */
        .image-wrapper {
            background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
        }

        .bg-ball {
            position: absolute;
            border-radius: 50%;
            opacity: 0.6;
            z-index: 1;
        }

        .bg-ball-1 {
            width: 220px;
            height: 220px;
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
            top: 5%;
            left: -5%;
            animation: bgFloat1 12s ease-in-out infinite;
        }

        .bg-ball-2 {
            width: 190px;
            height: 190px;
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            top: 30%;
            right: -3%;
            animation: bgFloat2 14s ease-in-out infinite;
        }

        .bg-ball-3 {
            width: 240px;
            height: 240px;
            background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%);
            bottom: 10%;
            left: -8%;
            animation: bgFloat3 13s ease-in-out infinite;
        }

        .bg-ball-4 {
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, #fad0c4 0%, #ffd1ff 100%);
            top: 50%;
            right: -5%;
            animation: bgFloat4 15s ease-in-out infinite;
        }

        .bg-ball-5 {
            width: 180px;
            height: 180px;
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
            bottom: 25%;
            right: 5%;
            animation: bgFloat5 11s ease-in-out infinite;
        }

        .bg-ball-6 {
            width: 210px;
            height: 210px;
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            top: 15%;
            left: 10%;
            animation: bgFloat6 16s ease-in-out infinite;
        }

        @keyframes float1 {
            0% { transform: translate(0, 0) rotate(0deg); }
            20% { transform: translate(12px, -15px) rotate(6deg); }
            40% { transform: translate(-15px, 10px) rotate(-8deg); }
            60% { transform: translate(15px, 12px) rotate(5deg); }
            80% { transform: translate(-10px, -12px) rotate(-5deg); }
            100% { transform: translate(0, 0) rotate(0deg); }
        }

        @keyframes float2 {
            0% { transform: translate(0, 0) rotate(0deg); }
            15% { transform: translate(-12px, 10px) rotate(-6deg); }
            30% { transform: translate(15px, -18px) rotate(9deg); }
            50% { transform: translate(-10px, -10px) rotate(-4deg); }
            70% { transform: translate(12px, 12px) rotate(7deg); }
            85% { transform: translate(-12px, 8px) rotate(-5deg); }
            100% { transform: translate(0, 0) rotate(0deg); }
        }

        @keyframes float3 {
            0% { transform: translate(0, 0) rotate(0deg); }
            18% { transform: translate(10px, 18px) rotate(7deg); }
            35% { transform: translate(-18px, -12px) rotate(-9deg); }
            52% { transform: translate(15px, -14px) rotate(6deg); }
            68% { transform: translate(-12px, 16px) rotate(-7deg); }
            85% { transform: translate(10px, -8px) rotate(4deg); }
            100% { transform: translate(0, 0) rotate(0deg); }
        }

        @keyframes float4 {
            0% { transform: translate(0, 0) rotate(0deg); }
            22% { transform: translate(-15px, -10px) rotate(-7deg); }
            38% { transform: translate(18px, 14px) rotate(8deg); }
            55% { transform: translate(-12px, 12px) rotate(-5deg); }
            72% { transform: translate(14px, -15px) rotate(6deg); }
            88% { transform: translate(-10px, -8px) rotate(-4deg); }
            100% { transform: translate(0, 0) rotate(0deg); }
        }

        @keyframes float5 {
            0% { transform: translate(0, 0) rotate(0deg); }
            17% { transform: translate(15px, 12px) rotate(6deg); }
            33% { transform: translate(-14px, -18px) rotate(-8deg); }
            50% { transform: translate(16px, 10px) rotate(5deg); }
            67% { transform: translate(-10px, 14px) rotate(-5deg); }
            83% { transform: translate(12px, -10px) rotate(4deg); }
            100% { transform: translate(0, 0) rotate(0deg); }
        }

        @keyframes float6 {
            0% { transform: translate(0, 0) rotate(0deg); }
            19% { transform: translate(-12px, 18px) rotate(-6deg); }
            37% { transform: translate(16px, -12px) rotate(9deg); }
            54% { transform: translate(-14px, -16px) rotate(-6deg); }
            71% { transform: translate(13px, 10px) rotate(7deg); }
            87% { transform: translate(-10px, -8px) rotate(-4deg); }
            100% { transform: translate(0, 0) rotate(0deg); }
        }

        @keyframes bgFloat1 {
            0% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(45px, -50px) rotate(90deg); }
            50% { transform: translate(-55px, 40px) rotate(180deg); }
            75% { transform: translate(50px, 55px) rotate(270deg); }
            100% { transform: translate(0, 0) rotate(360deg); }
        }

        @keyframes bgFloat2 {
            0% { transform: translate(0, 0) rotate(0deg); }
            20% { transform: translate(-65px, 35px) rotate(-100deg); }
            40% { transform: translate(50px, -70px) rotate(200deg); }
            60% { transform: translate(-45px, -55px) rotate(-300deg); }
            80% { transform: translate(60px, 45px) rotate(400deg); }
            100% { transform: translate(0, 0) rotate(360deg); }
        }

        @keyframes bgFloat3 {
            0% { transform: translate(0, 0) rotate(0deg); }
            18% { transform: translate(60px, 55px) rotate(110deg); }
            36% { transform: translate(-55px, -60px) rotate(220deg); }
            54% { transform: translate(50px, -45px) rotate(330deg); }
            72% { transform: translate(-60px, 50px) rotate(440deg); }
            90% { transform: translate(45px, 60px) rotate(550deg); }
            100% { transform: translate(0, 0) rotate(360deg); }
        }

        @keyframes bgFloat4 {
            0% { transform: translate(0, 0) rotate(0deg); }
            22% { transform: translate(-60px, -50px) rotate(-95deg); }
            44% { transform: translate(55px, 65px) rotate(190deg); }
            66% { transform: translate(-50px, 45px) rotate(-285deg); }
            88% { transform: translate(60px, -55px) rotate(380deg); }
            100% { transform: translate(0, 0) rotate(360deg); }
        }

        @keyframes bgFloat5 {
            0% { transform: translate(0, 0) rotate(0deg); }
            16% { transform: translate(50px, 60px) rotate(105deg); }
            32% { transform: translate(-65px, -50px) rotate(210deg); }
            48% { transform: translate(55px, -60px) rotate(315deg); }
            64% { transform: translate(-50px, 55px) rotate(420deg); }
            80% { transform: translate(60px, 50px) rotate(525deg); }
            96% { transform: translate(-55px, -45px) rotate(630deg); }
            100% { transform: translate(0, 0) rotate(360deg); }
        }

        @keyframes bgFloat6 {
            0% { transform: translate(0, 0) rotate(0deg); }
            21% { transform: translate(-55px, 65px) rotate(-110deg); }
            42% { transform: translate(60px, -55px) rotate(220deg); }
            63% { transform: translate(-60px, -50px) rotate(-330deg); }
            84% { transform: translate(55px, 60px) rotate(440deg); }
            100% { transform: translate(0, 0) rotate(360deg); }
        }

        /* Product Image Float Animation */
        .product-image-float {
            animation: productFloat 3s ease-in-out infinite;
        }

        @keyframes productFloat {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-15px);
            }
        }

        @media (max-width: 768px) {
            .expertise-circle {
                width: 100px;
                height: 100px;
            }
            .circle-percent {
                font-size: 20px;
            }
            .circle-label {
                font-size: 10px;
            }
        }
    </style>


    <!-- Service Start -->
    <div class="container-fluid bg-light my-5 py-6" id="service">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Our Products</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="{{url('/products')}}">See More</a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-card position-relative rounded overflow-hidden" style="height: 400px; cursor: pointer;">
                        <img class="img-fluid w-100 h-100" src="{{url('frontend/img/product_1.png')}}" alt="Premium Skincare Product" style="object-fit: cover; transition: transform 0.5s ease;">
                        <div class="service-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-white" style="background: rgba(0,0,0,0); transition: background 0.5s ease;">
                            <h4 class="mb-0 text-white" style="opacity: 0; transition: opacity 0.5s ease; font-size: 1.5rem; font-weight: bold;">Super Pulse CO2</h4>
                        </div>
                        <div class="service-content position-absolute bottom-0 start-0 w-100 p-4 text-white" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                            <p class="mb-2">Transform your skin with premium collection and improve overall skin text... <a href="{{url('/products')}}" class="fw-bold" style="text-decoration: none; color: #0d6efd;">more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-card position-relative rounded overflow-hidden" style="height: 400px; cursor: pointer;">
                        <img class="img-fluid w-100 h-100" src="{{url('frontend/img/product_2.png')}}" alt="Beauty Treatment" style="object-fit: cover; transition: transform 0.5s ease;">
                        <div class="service-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-white" style="background: rgba(0,0,0,0); transition: background 0.5s ease;">
                            <h4 class="mb-0 text-white" style="opacity: 0; transition: opacity 0.5s ease; font-size: 1.5rem; font-weight: bold;">Salmon-DNA-Serum</h4>
                        </div>
                        <div class="service-content position-absolute bottom-0 start-0 w-100 p-4 text-white" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                            <p class="mb-2">Experience professional beauty treatments for anti-aging and Skin Rejuve... <a href="{{url('/products')}}" class="fw-bold" style="text-decoration: none; color: #0d6efd;">more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-card position-relative rounded overflow-hidden" style="height: 400px; cursor: pointer;">
                        <img class="img-fluid w-100 h-100" src="{{url('frontend/img/product_3.png')}}" alt="Super Pulse Fractional CO2" style="object-fit: cover; transition: transform 0.5s ease;">
                        <div class="service-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-white" style="background: rgba(0,0,0,0); transition: background 0.5s ease;">
                            <h4 class="mb-0 text-white" style="opacity: 0; transition: opacity 0.5s ease; font-size: 1.5rem; font-weight: bold;">Skin Control Mask</h4>
                        </div>
                        <div class="service-content position-absolute bottom-0 start-0 w-100 p-4 text-white" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                            <p class="mb-2">Gives soft wrapping feeling and shows remarkable attaching skill to your... <a href="{{url('/products')}}" class="fw-bold" style="text-decoration: none; color: #0d6efd;">more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <style>
        .service-card:hover img {
            transform: scale(1.1);
        }
        .service-card:hover .service-overlay {
            background: rgba(0,0,0,0.6) !important;
        }
        .service-card:hover .service-overlay h4 {
            opacity: 1 !important;
        }
    </style>


    <!-- Mission and Vision Start -->
    <div class="container-fluid bg-light py-6" id="mission-vision">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mission-vision-card bg-white rounded shadow-sm p-5 wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="mission-vision-company mb-4">STACK ASTHETIC</h2>
                        <div class="mission-vision-tabs mb-4">
                            <button class="mission-tab-btn active" onclick="showContent('vision')">Our Vision</button>
                            <button class="mission-tab-btn" onclick="showContent('mission')">Our Mission</button>
                        </div>
                        <div class="mission-vision-content-box border rounded p-4">
                            <div id="vision-content" class="mission-content active">
                                <h3 class="text-center mb-4 fw-bold">Our Vision</h3>
                                <p class="mb-3">To be a leading force in the skincare and aesthetic industry, recognized for our commitment to excellence, innovation, and transformative results. We envision a future where everyone can achieve their best skin health through advanced technology, premium products, and personalized care.</p>
                                <p class="mb-0">We strive to continuously push boundaries, setting new standards in aesthetic treatments and skincare solutions that empower individuals to look and feel their absolute best.</p>
                            </div>
                            <div id="mission-content" class="mission-content">
                                <h3 class="text-center mb-4 fw-bold">Our Mission</h3>
                                <p class="mb-3">To deliver exceptional skincare and aesthetic solutions that combine cutting-edge science with personalized care. We are dedicated to helping our clients achieve their skin goals through innovative products, professional treatments, and expert guidance.</p>
                                <p class="mb-0">Our mission is to build lasting relationships with our clients by providing safe, effective, and results-driven solutions that enhance natural beauty and boost confidence. We are committed to excellence in every aspect of our service, from product development to client care.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission and Vision End -->

    <style>
        .mission-vision-card {
            max-width: 100%;
        }
        
        .mission-vision-company {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .mission-vision-tabs {
            display: flex;
            gap: 0;
            border-bottom: 2px solid #e9ecef;
        }
        
        .mission-tab-btn {
            padding: 12px 30px;
            border: none;
            background: #e9ecef;
            color: #333;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            border-radius: 0;
        }
        
        .mission-tab-btn:first-child {
            border-top-left-radius: 8px;
        }
        
        .mission-tab-btn:last-child {
            border-top-right-radius: 8px;
        }
        
        .mission-tab-btn.active {
            background: var(--primary);
            color: white;
        }
        
        .mission-tab-btn:hover:not(.active) {
            background: #dee2e6;
        }
        
        .mission-vision-content-box {
            border-color: var(--primary) !important;
            border-width: 2px !important;
            min-height: 250px;
        }
        
        .mission-content {
            display: none;
        }
        
        .mission-content.active {
            display: block;
        }
        
        .mission-content h3 {
            color: #333;
            font-size: 1.75rem;
        }
        
        .mission-content p {
            color: #555;
            line-height: 1.8;
            font-size: 1rem;
        }
        
        @media (max-width: 768px) {
            .mission-vision-card {
                padding: 2rem !important;
            }
            
            .mission-vision-company {
                font-size: 1.2rem;
                letter-spacing: 1px;
            }
            
            .mission-tab-btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
            
            .mission-content h3 {
                font-size: 1.5rem;
            }
            
            .mission-content p {
                font-size: 0.95rem;
            }
        }
    </style>

    <script>
        function showContent(type) {
            // Hide all content
            document.querySelectorAll('.mission-content').forEach(content => {
                content.classList.remove('active');
            });
            
            // Remove active class from all buttons
            document.querySelectorAll('.mission-tab-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            
            // Show selected content
            document.getElementById(type + '-content').classList.add('active');
            
            // Add active class to clicked button
            event.target.classList.add('active');
        }
    </script>

    <!-- Testimonial Start -->
    <div class="container-fluid bg-light py-5 my-5" id="testimonial">
        <div class="container-fluid py-5">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Happy Clients</h1>
            <div class="row justify-content-center">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-left h-100">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="{{url('frontend/img/testimonial-1.jpg')}}" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="{{url('frontend/img/testimonial-2.jpg')}}" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="{{url('frontend/img/testimonial-3.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="{{url('frontend/img/testimonial-1.jpg')}}" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">I have been using Stack Asthetic products for a few months now, and I have seen a significant improvement in my skin. The products are easy to use and the results are visible.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Kanika Kapoor</h5>
                            <span>Skin & Hair Specialist</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="{{url('frontend/img/testimonial-2.jpg')}}" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">I have been using Stack Asthetic products for a few months now, and I have seen a significant improvement in my hair. The treatments we did for our clients are easy to use and the results are visible.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Ritesh Deshmukh</h5>
                            <span>Skin & Hair Specialist</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="{{url('frontend/img/testimonial-3.jpg')}}" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">I have been using Stack Asthetic products for a few months now, and I have seen a significant improvement in the treatments we did for our clients. The products are easy to use and the results are visible.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Rajesh Kumar</h5>
                            <span>Skin & Hair Specialist</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="{{url('frontend/img/testimonial-1.jpg')}}" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="{{url('frontend/img/testimonial-2.jpg')}}" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="{{url('frontend/img/testimonial-3.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-xxl pb-5 contact-section position-relative overflow-hidden" id="contact">
        <!-- Background Logo -->
        <div class="contact-bg-logo">
            <img src="{{url('frontend/img/logo.png')}}" alt="Logo Background">
        </div>
        <div class="container py-5 position-relative" style="z-index: 2;">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12 text-center">
                    <h1 class="display-5 mb-4">Let's Work Together</h1>
                    <p class="mb-4 fs-5">Ready to transform your skincare routine? Connect with us today and discover personalized solutions tailored to your unique skin needs. Our expert team is here to guide you on your journey to healthier, glowing skin. Whether you have questions about our products, need skincare advice, or want to explore our services, we're just a message away. Let's start your skincare transformation together!</p>
                    <a class="btn btn-primary py-3 px-5" href="{{url('/contact')}}">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    
    <style>
        /* Contact Section Background Logo */
        .contact-section {
            position: relative;
            overflow: hidden;
        }
        
        .contact-bg-logo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 0;
            pointer-events: none;
        }
        
        .contact-bg-logo img {
            width: 800px;
            height: auto;
            max-width: 100%;
            object-fit: contain;
            opacity: 0.4;
            filter: blur(1px);
        }
        
        .contact-section .container {
            position: relative;
            z-index: 2;
        }
        
        @media (max-width: 991.98px) {
            .contact-bg-logo img {
                width: 500px;
                opacity: 0.05;
            }
        }
        
        @media (max-width: 768px) {
            .contact-bg-logo img {
                width: 350px;
                opacity: 0.04;
            }
        }
    </style>
@endsection