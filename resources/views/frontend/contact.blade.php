@extends('frontend.layouts.main')

@section('main-container')
    <!-- Page Title Bar Start -->
    <div class="container-fluid page-title-bar text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- <h1 class="display-4 fw-bold mb-0">Contact</h1> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Bar End -->

    <!-- Contact Us Heading Start -->
    <div class="container-xxl py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="mb-2">Contact Us</h1>
                    <div class="mx-auto" style="width: 100px; height: 3px; background: var(--primary);"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Us Heading End -->

    <!-- Contact Start -->
    <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Left Column - Information -->
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <span class="inquiry-badge">Inquiry</span>
                    <p class="mb-4 mt-3">Stack Asthetic is an official partner dedicated to delivering exceptional skincare, medical aesthetics, and health technology solutions. We combine advanced science with personalized care to help you achieve your best skin health.</p>
                    
                    <!-- Call Us Card -->
                    <div class="contact-info-card mb-3">
                        <div class="d-flex align-items-center">
                            <div class="contact-icon-wrapper">
                                <i class="fas fa-phone contact-icon"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-0 contact-label">Call Us Now</p>
                                <h4 class="mb-0 contact-value">89209 29328</h4>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mail Us Card -->
                    <div class="contact-info-card mb-3">
                        <div class="d-flex align-items-center">
                            <div class="contact-icon-wrapper">
                                <i class="fas fa-envelope contact-icon"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-0 contact-label">Mail Us Now</p>
                                <h4 class="mb-0 contact-value">thestackanalysis@gmail.com</h4>
                            </div>
                        </div>
                    </div>

                     <!-- Address Us Card -->
                     <div class="contact-info-card">
                        <div class="d-flex align-items-center">
                            <div class="contact-icon-wrapper">
                                <i class="fas fa-map-marker-alt contact-icon"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-0 contact-label">Address</p>
                                <h4 class="mb-0 contact-value">Rajender Nagar, Sahibabad, Ghaziabad, Uttar Pradesh</h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Inquiry Form -->
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="inquiry-form-panel">
                        <form action="{{ route('contact.inquiry') }}" method="POST">
                            @csrf
                            @if(session('success'))
                                <div class="alert alert-success mb-3">{{ session('success') }}</div>
                            @endif
                            @if($errors->any())
                                <div class="alert alert-danger mb-3">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $err)
                                            <li>{{ $err }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" value="{{ old('email') }}" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile" value="{{ old('mobile') }}" required>
                                        <label for="mobile">Your Mobile</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="brand" name="brand" aria-label="Choose Brand">
                                            <option value="">Choose Brand</option>
                                            <option value="Super Pulse CO2" {{ old('brand') == 'Super Pulse CO2' ? 'selected' : '' }}>Super Pulse CO2</option>
                                            <option value="Salmon-DNA-Serum" {{ old('brand') == 'Salmon-DNA-Serum' ? 'selected' : '' }}>Salmon-DNA-Serum</option>
                                            <option value="Skin Control Mask" {{ old('brand') == 'Skin Control Mask' ? 'selected' : '' }}>Skin Control Mask</option>
                                            <option value="Revital Cream" {{ old('brand') == 'Revital Cream' ? 'selected' : '' }}>Revital Cream</option>
                                            <option value="Machine Services" {{ old('brand') == 'Machine Services' ? 'selected' : '' }}>Machine Services</option>
                                            <option value="Others" {{ old('brand') == 'Others' ? 'selected' : '' }}>Others</option>
                                        </select>
                                        <label for="brand">Choose Brand</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="date" name="date" placeholder="Choose Date" value="{{ old('date') }}">
                                        <label for="date">Choose Date</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Describe your query" id="query" name="query" style="height: 120px; resize: vertical;">{{ old('query') }}</textarea>
                                        <label for="problem">Describe your query</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3 inquiry-submit-btn" type="submit">Inquiry Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    
    <style>
        /* Inquiry Badge */
        .inquiry-badge {
            display: inline-block;
            padding: 6px 16px;
            background: #e9ecef;
            color: #6c757d;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        /* Contact Info Cards */
        .contact-info-card {
            background: #f0f4f8;
            border-radius: 12px;
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .contact-info-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .contact-icon-wrapper {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        
        .contact-icon {
            color: var(--primary);
            font-size: 1.25rem;
        }
        
        .contact-label {
            color: #6c757d;
            font-size: 0.875rem;
            font-weight: 500;
        }
        
        .contact-value {
            color: var(--primary);
            font-size: 1.25rem;
            font-weight: 700;
            margin-top: 4px;
        }
        
        /* Inquiry Form Panel */
        .inquiry-form-panel {
            background: #e8f0f5;
            border-radius: 12px;
            padding: 30px;
        }
        
        .inquiry-form-panel .form-control,
        .inquiry-form-panel .form-select {
            background: white;
            border: 1px solid #dee2e6;
            border-radius: 8px;
        }
        
        .inquiry-form-panel .form-control:focus,
        .inquiry-form-panel .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(98, 68, 197, 0.25);
        }
        
        .inquiry-submit-btn {
            border-radius: 8px;
            font-weight: 600;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
        }
        
        @media (max-width: 768px) {
            .inquiry-form-panel {
                padding: 20px;
            }
            
            .contact-info-card {
                padding: 15px;
            }
            
            .contact-value {
                font-size: 1.1rem;
            }
        }
    </style>


    <!-- Map Start -->
    <div class="container-xxl pt-2 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-xxl pt-5 px-0">
            <div class="bg-dark">
                <iframe
                src="https://www.google.com/maps?q=Sahibabad,+Ghaziabad,+Uttar+Pradesh,+India&output=embed"
                frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" aria-hidden="false"
                tabindex="0"></iframe>
            </div>
        </div>
    </div>
    <!-- Map End -->
@endsection
