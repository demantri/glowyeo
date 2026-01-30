<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glowy EO | Professional Event Organizer & MICE Services</title>

    <link rel="icon" type="image/png" href="{{ env('APP_ADMIN') . '/storage/' . $settings->favicon }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css?v=1.0.2') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top shadow-sm" id="mainNavbar">
        <div class="container">
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navScrollspy">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#clients">Clients</a></li>
                </ul>
            </div>

            <a class="navbar-brand d-flex align-items-center ms-auto" href="#home">
                <img src="{{ env('APP_ADMIN') . '/storage/' . $settings->logo }}" alt="Glowy Logo" id="navLogoImg"
                    style="height: 50px;">
            </a>
        </div>
    </nav>

    <section id="home" class="hero-banner d-flex align-items-center justify-content-center text-center">
        <video autoplay muted loop playsinline class="hero-video-bg">
            <source src="{{ asset('events/video/homepage.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="hero-video-overlay"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="hero-content mx-auto w-100" data-aos="zoom-in">
                {{-- <h1 class="text-white mb-5 homepage-title">
                    Make Your Dream Event Come True with an <span class="text-highlight">Easiest Way, Efficient </span>
                    <span class="text-highlight">and Memorable</span>
                </h1> --}}

                <div class="hero-3d-wrapper mx-auto">
                    <div class="hero-3d-layer">
                        <img src="{{ asset('assets/bintang3.svg') }}" alt="3D Icon">
                    </div>

                    <h1 class="hero-hover-title">
                        Make Your Dream Event Come True with an
                        <span class="text-highlight">Easiest Way, Efficient</span>
                        <span class="text-highlight">and Memorable</span>
                    </h1>
                </div>

                <div class="d-flex justify-content-center gap-3 mt-4">
                    <a href="#about" class="hero-btn btn-primary-glow">
                        <i class="bi bi-arrow-down"></i> Scroll
                    </a>
                    <button class="hero-btn btn-white-glass" data-bs-toggle="modal" data-bs-target="#heroVideoModal">
                        <i class="bi bi-play-circle-fill"></i> Watch Video
                    </button>
                </div>
            </div>
        </div>

        <div class="hero-stats-bar shadow-lg">
            <div class="container">
                <div class="row text-center g-0 align-items-center">
                    <div class="col-3 stat-item">
                        <h2 class="m-0">2015</h2>
                        <small class="text-dark fw-bold">Established</small>
                    </div>
                    <div class="col-3 stat-item">
                        <h2 class="m-0">250<span class="plus-yellow">+</span></h2>
                        <small class="text-dark fw-bold">Events Delivered</small>
                    </div>
                    <div class="col-3 stat-item">
                        <h2 class="m-0">120<span class="plus-yellow">+</span></h2>
                        <small class="text-dark fw-bold">Clients</small>
                    </div>
                    <div class="col-3 stat-item no-border">
                        <h2 class="m-0">Premium</h2>
                        <small class="text-dark fw-bold">Creative Vision</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="heroVideoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark border-0">
                <div class="modal-body p-0 position-relative">

                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                        data-bs-dismiss="modal"></button>

                    <div class="ratio ratio-16x9">
                        <iframe id="youtubePlayer" src="https://www.youtube.com/embed/3Cdt7v_iJW8"
                            title="YouTube video" allow="autoplay; encrypted-media" allowfullscreen>
                        </iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section id="about" class="about-section">
        <div class="container position-relative">
            <div class="about-main-card bg-white shadow-lg p-4 p-md-5" data-aos="fade-up" data-aos-delay="200">
                <div class="row mb-4">
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <img src="{{ asset('assets/star.svg') }}" alt="star" class="about-star">
                            <h2 class="about-title m-0 text-blue">ABOUT <span class="text-yellow">GLOWY</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="about-desc">
                            <p class="text-dark m-0">
                                {{-- <strong>GLOWY EO offers comprehensive, high-standard MICE services blending strategy and
                                    creativity.</strong>
                                As a trusted partner, we bring energy, passion, and a premium vision to every event. --}}
                                {!! $about->description !!}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row g-4 align-items-stretch">
                    <div class="col-lg-4">
                        <div class="about-image-wrapper h-100">
                            {{-- <img src="{{ asset('events/sample.jpg') }}" alt="Professional Worker"
                                class="img-fluid rounded-4 shadow-sm h-100 w-100" style="object-fit: cover;"> --}}
                            <img src="{{ env('APP_ADMIN') . '/storage/' . $about->image }}" alt="About Image"
                                class="img-fluid rounded-4 shadow-sm h-100 w-100" style="object-fit: cover;">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="vision-box p-4 h-100 text-white">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <i class="bi bi-eye-fill fs-4"></i>
                                <h5 class="fw-bold m-0">Our Vision</h5>
                            </div>
                            <p class="small opacity-90 m-0">
                                {{-- To become a <span class="fw-bold">trusted and forward thinking</span> event organizer
                                that consistently delivers professional, creative, and impactful event experiences. --}}
                                {!! $about->vision_content !!}
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mission-box p-4 h-100 text-white">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <i class="bi bi-rocket-takeoff-fill fs-4"></i>
                                <h5 class="fw-bold m-0">Our Mission</h5>
                            </div>
                            <div class="mission-steps">
                                {{-- <div class="mission-item d-flex gap-3 mb-3">
                                    <span class="mission-num">1</span>
                                    <p class="small m-0">Collaborate closely with clients to transform ideas into
                                        impactful events.</p>
                                </div>
                                <div class="mission-item d-flex gap-3 mb-3">
                                    <span class="mission-num">2</span>
                                    <p class="small m-0">Deliver seamless, efficient, and transparent event management
                                        processes.</p>
                                </div>
                                <div class="mission-item d-flex gap-3">
                                    <span class="mission-num">3</span>
                                    <p class="small m-0">Provide customized solutions with a strong fighting spirit and
                                        creative excellence.</p>
                                </div> --}}
                                @foreach ($about->missions as $index => $mission)
                                    <div class="mission-item d-flex gap-3">
                                        <span class="mission-num">{{ $index + 1 }}</span>
                                        <p class="small m-0">
                                            {!! $mission->content !!}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-choose-us" class="py-5">
        <div class="container mb-5">
            <div class="main-glass-card p-4 p-md-5 shadow-lg" data-aos="fade-up">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                {{-- <img src="{{ asset('events/sample.jpg') }}" alt="Event Setup"
                                    class="img-fluid rounded-4 main-gallery-img"> --}}
                                <img src="{{ env('APP_ADMIN') . '/storage/' . $whyChoose->image_main }}"
                                    alt="Event Setup" class="img-fluid rounded-4 main-gallery-img">
                            </div>
                            <div class="col-sm-6">
                                <div class="row g-3">
                                    <div class="col-12">
                                        {{-- <img src="{{ asset('events/sample.jpg') }}" alt="Meeting"
                                            class="img-fluid rounded-4 side-gallery-img"> --}}
                                        <img src="{{ env('APP_ADMIN') . '/storage/' . $whyChoose->image_top }}"
                                            alt="Meeting" class="img-fluid rounded-4 side-gallery-img">
                                    </div>
                                    <div class="col-12">
                                        {{-- <img src="{{ asset('events/sample.jpg') }}" alt="Production"
                                            class="img-fluid rounded-4 side-gallery-img"> --}}
                                        <img src="{{ env('APP_ADMIN') . '/storage/' . $whyChoose->image_bottom }}"
                                            alt="Production" class="img-fluid rounded-4 side-gallery-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <img src="{{ asset('assets/star.svg') }}" width="30" alt="star">
                            <h2 class="section-title-alt m-0 text-blue">WHY <span class="text-yellow">CHOOSE US</span>
                            </h2>
                        </div>
                        <p class="text-muted small mb-3">
                            {{-- From concept development to on-site execution, GLOWY EO provides comprehensive, end-to-end
                            event management services. --}}
                            {!! $whyChoose->description !!}
                        </p>

                        {{-- <div class="feature-buttons-list d-grid gap-3">
                            <div class="feat-btn btn-orange-grad">
                                <i class="bi bi-shield-fill-check me-2"></i> Trust & Professionalism
                            </div>
                            <div class="feat-btn btn-blue-grad">
                                <i class="bi bi-people-fill me-2"></i> Optimistic & Client Approach
                            </div>
                            <div class="feat-btn btn-magenta-grad">
                                <i class="bi bi-lightbulb-fill me-2"></i> Creative Excellence
                            </div>
                            <div class="feat-btn btn-pink-grad">
                                <i class="bi bi-fire me-2"></i> Strong Fighting Spirit
                            </div>
                        </div> --}}

                        <div class="feature-buttons-list d-grid gap-3">
                            @foreach ($whyChoose->items as $item)
                                <div class="feat-btn {{ $item->gradient_class }}">
                                    <i class="{{ $item->icon }} me-2"></i>
                                    {{ $item->title }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="glowy-ticker-separator">
            <img src="{{ asset('assets/police_line.svg') }}" alt="Glowy Divider" class="img-fluid ticker-png">
        </div>
    </section>

    <section id="services" class="services-section py-5">
        <div class="container position-relative">
            <div class="row g-4 justify-content-center align-items-center service-grid-layout">

                <div class="col-12 d-flex justify-content-center" data-aos="fade-down">
                    @include('components.service-card-item', ['service' => $services[0]])
                </div>

                <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end pr-xl-5"
                    data-aos="fade-right">
                    @include('components.service-card-item', ['service' => $services[1]])
                </div>

                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="services-center-header text-center" data-aos="zoom-in">
                        <div class="service-main-label">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <img src="{{ asset('assets/star.svg') }}" width="30" alt="star">
                                <h2 class="m-0">OUR <span class="text-yellow">SERVICE</span></h2>
                            </div>
                            <p class="m-0 fw-bold small">WHAT WE DO</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 d-flex justify-content-center justify-content-lg-start pl-xl-5"
                    data-aos="fade-left">
                    @include('components.service-card-item', ['service' => $services[2]])
                </div>

                <div class="col-lg-12 d-flex justify-content-center gap-4 mt-5" data-aos="fade-up">
                    <div class="d-flex flex-column flex-md-row gap-5 justify-content-center w-100">
                        <div class="d-flex justify-content-center">
                            @include('components.service-card-item', ['service' => $services[3]])
                        </div>
                        <div class="d-flex justify-content-center">
                            @include('components.service-card-item', ['service' => $services[4]])
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio-with-bg py-5">
        <div class="container text-center">
            <div class="portfolio-header mb-5" data-aos="fade-down">
                <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
                    <img src="{{ asset('assets/star.svg') }}" width="40" alt="star">
                    <h2 class="main-portfolio-title m-0">OUR BEST <span class="text-yellow">MOMENTS</span></h2>
                </div>
                <div class="tagline-pill mx-auto mt-3">
                    LIVE • IMPACT • EXPERIENCE
                </div>
            </div>

            <div id="portfolio-splide" class="splide position-relative">
                <div class="splide__arrows custom-arrows">
                    <button class="splide__arrow splide__arrow--prev arrow-circle">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next arrow-circle">
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>

                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($portfolio as $item)
                            <li class="splide__slide">
                                <div class="portfolio-card shadow-lg">
                                    <img src="{{ env('APP_ADMIN') . '/storage/' . $item->thumbnail }}"
                                        class="img-fluid portfolio-main-img" alt="{{ $item->title }}">
                                    <div class="portfolio-card-overlay">
                                        <h5 class="fw-bold">{{ $item->title }}</h5>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="clients" class="py-5 bg-white-pure">
        <div class="container text-center">
            <div class="portfolio-header mb-5" data-aos="fade-down">
                <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
                    <img src="{{ asset('assets/star.svg') }}" width="40" alt="star">
                    <h2 class="main-portfolio-title m-0 text-dark">TRUSTED BY LEADING <span
                            class="text-yellow">BRANDS</span></h2>
                </div>
                <div class="tagline-pill-magenta mx-auto mt-3">
                    PARTNERSHIP • TRUST • COLLABORATION
                </div>
            </div>

            <div class="row g-4 justify-content-center align-items-center">
                @foreach ($clients as $client)
                    <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in">
                        <div class="client-logo-static p-4">
                            <img src="{{ env('APP_ADMIN') . '/storage/' . $client->thumbnail }}"
                                alt="{{ $client->description }}" class="img-fluid client-img-display">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section py-5">
        <div class="container">
            <div class="main-contact-card bg-white shadow-lg p-4 p-md-5" data-aos="fade-up">
                <div class="row g-5">

                    <div class="col-lg-6 position-relative">
                        <div class="contact-header mb-4">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <img src="{{ asset('assets/star.svg') }}" width="35" alt="star">
                                <h2 class="contact-title m-0">LET'S CREATE <span class="text-yellow">MAGIC</span></h2>
                            </div>
                            <div class="pill-tag-magenta">
                                FREE CONSULTATION • FAST RESPONSE
                            </div>
                        </div>

                        <form id="consultationForm" class="mt-4">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Full Name</label>
                                    <input type="text" name="name" class="form-control custom-input"
                                        placeholder="Enter your name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Company/Brand</label>
                                    <input type="text" name="company" class="form-control custom-input"
                                        placeholder="Enter your company/brand" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Email</label>
                                    <input type="email" name="email" class="form-control custom-input"
                                        placeholder="Enter your email" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">WhatsApp Number</label>
                                    <input type="text" name="whatsapp" class="form-control custom-input"
                                        placeholder="Enter your number" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold">Event Type</label>
                                    <input type="text" name="event" class="form-control custom-input"
                                        placeholder="Enter your type event" required>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" id="submitBtn"
                                        class="btn btn-glowy w-100 py-3 text-white fw-bold"
                                        style="background: var(--vivid-magenta);">
                                        <span class="btn-text">BOOK FREE CONSULTATION</span>
                                        <span class="btn-loading d-none">
                                            <span class="spinner-border spinner-border-sm"></span> Sending...
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="vertical-divider d-none d-lg-block"></div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-header mb-4">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <img src="{{ asset('assets/star.svg') }}" width="35" alt="star">
                                <h2 class="contact-title m-0">VISIT OUR <span class="text-yellow">HUB</span></h2>
                            </div>
                        </div>

                        <div class="map-wrapper rounded-4 overflow-hidden mb-4 shadow-sm">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7999815067687!2d106.79532297887874!3d-6.290000245295207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f10029e39241%3A0x766f6cd89bb7d89!2sGlowy%20Wedding!5e0!3m2!1sen!2sid!4v1768641570180!5m2!1sen!2sid"
                                width="100%" height="100%" style="border:0;" allowfullscreen=""
                                loading="lazy"></iframe>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="d-flex gap-3">
                                    <i class="bi bi-geo-alt-fill text-primary fs-4"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1">Office Location</h6>
                                        <p class="small text-muted mb-0">{{ $settings->address }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex gap-3">
                                    <i class="bi bi-telephone-fill text-primary fs-4"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1">Direct Chat</h6>
                                        {{-- <p class="small text-muted mb-0">+628132069714</p> --}}
                                        <a href="https://wa.me/{{ $settings->phone }}" target="_blank"
                                            class="wa-link small m-0">
                                            {{ $settings->phone }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer class="bg-white text-dark py-5 border-top">
        <div class="container">
            <div class="row g-4 justify-content-between">

                <div class="col-lg-5 text-center text-md-start">
                    <h2 class="fw-bold text-primary mb-3">GLOWY EO</h2>
                    <p class="small text-muted mb-4 pe-lg-5" style="line-height: 1.8;">
                        Professional event management company specializing in corporate events, brand activations, and
                        MICE programs since 2015.
                    </p>
                    <p class="small fw-bold text-magenta mb-0">Growing Together, Glowing Forever!</p>
                </div>

                <div class="col-lg-2 col-md-6 text-center text-md-start">
                    <h6 class="text-primary fw-bold mb-4">Quick Links</h6>
                    <ul class="list-unstyled small">
                        <li class="mb-3"><a href="#home" class="footer-link-new">Home</a></li>
                        <li class="mb-3"><a href="#about" class="footer-link-new">About Us</a></li>
                        <li class="mb-3"><a href="#services" class="footer-link-new">Our Services</a></li>
                        <li class="mb-3"><a href="#portfolio" class="footer-link-new">Portfolio</a></li>
                        <li class="mb-3"><a href="#contact" class="footer-link-new">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 text-center text-md-start">
                    <h6 class="text-primary fw-bold mb-4">Follow Us</h6>
                    <div class="d-flex justify-content-center justify-content-md-start gap-3 mb-4">
                        <a href="#" class="social-icon-new"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon-new"><i class="bi bi-tiktok"></i></a>
                        <a href="#" class="social-icon-new"><i class="bi bi-youtube"></i></a>
                    </div>
                    <div class="footer-logo mt-2">
                        <img src="{{ env('APP_ADMIN') . '/storage/' . $settings->logo }}" alt="Glowy Logo"
                            class="img-fluid" style="max-height: 70px;">
                    </div>
                </div>

            </div>

            <div class="border-top mt-5 pt-4 text-center">
                <p class="small fw-bold text-dark m-0">
                    &copy; 2015 <strong>PT. GLOWYEO KARYA INOVASI</strong>. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.getElementById('consultationForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = this;
            const btn = document.getElementById('submitBtn');
            const btnText = btn.querySelector('.btn-text');
            const btnLoading = btn.querySelector('.btn-loading');

            btn.disabled = true;
            btnText.classList.add('d-none');
            btnLoading.classList.remove('d-none');

            fetch("{{ route('consultation.send') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Accept": "application/json"
                    },
                    body: new FormData(form)
                })
                .then(res => res.json())
                .then(data => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: data.message,
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.reload();
                    });
                })
                .catch(() => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Failed to send message. Please try again.'
                    });
                })
                .finally(() => {
                    btn.disabled = false;
                    btnText.classList.remove('d-none');
                    btnLoading.classList.add('d-none');
                });
        });
    </script>

    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        window.addEventListener('scroll', function() {
            const nav = document.getElementById('mainNavbar');
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');

            // 1. Logika Tampilkan Navbar Putih & Tampilkan Logo
            if (window.scrollY > 80) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }

            // 2. Logika Scrollspy (Garis Kuning Active)
            let current = "";
            sections.forEach((section) => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= sectionTop - 150) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach((link) => {
                link.classList.remove('active');
                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('active');
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#portfolio-splide', {
                type: 'loop',
                perPage: 1, // Hanya 1 di tengah
                focus: 'center',
                padding: '25%', // Menampilkan slide samping sebagai potongan
                autoplay: true,
                interval: 2000,
                updateOnMove: true,
                arrows: true, // Mengaktifkan custom arrows di atas
                breakpoints: {
                    768: {
                        padding: '10%',
                        perPage: 1,
                    },
                }
            }).mount();
        });
    </script>

    <script>
        const videoModal = document.getElementById('heroVideoModal');
        const youtubePlayer = document.getElementById('youtubePlayer');
        const videoSrc = youtubePlayer.getAttribute('src');

        videoModal.addEventListener('shown.bs.modal', function() {
            youtubePlayer.src = videoSrc + '?autoplay=1&rel=0';
        });

        videoModal.addEventListener('hidden.bs.modal', function() {
            youtubePlayer.src = videoSrc; // stop video saat modal ditutup
        });
    </script>
</body>

</html>
