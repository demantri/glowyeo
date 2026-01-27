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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

    <style>
        :root {
            --royal-purple: #0B5FFF;
            --vivid-magenta: #FF0080;
            --golden-joy: #FFC022;
            --deep-purple: #7C1485;
            --light-bg: #FDF8F2;
            --dark-text: #1a1a1a;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 68px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--dark-text);
            overflow-x: hidden;
        }

        /* --- Navbar --- */

        /* Sembunyikan logo secara default */
        #navLogoImg {
            opacity: 0;
            transform: translateX(-20px);
            /* Efek slide in saat muncul */
            transition: all 0.4s ease-in-out;
            visibility: hidden;
        }

        /* Tampilkan logo saat navbar di-scroll (sudah tampil putih) */
        .navbar.scrolled #navLogoImg {
            opacity: 1;
            transform: translateX(0);
            visibility: visible;
        }

        .navbar {
            background-color: transparent;
            transition: 0.4s;
            padding: 1.5rem 0;
        }

        .navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.98);
            padding: 0.8rem 0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .navbar.scrolled .nav-link {
            color: var(--dark-text) !important;
        }

        .nav-link:hover {
            color: var(--golden-joy) !important;
        }

        /* Styling Menu Link */
        .nav-link {
            position: relative;
            padding-bottom: 5px;
            transition: color 0.3s ease;
            color: white !important;
            font-weight: bold;
            margin: 0 10px;
        }

        /* Garis Kuning di Bawah Menu Active */
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            bottom: -5px;
            left: 0;
            background-color: var(--golden-joy);
            /* Warna kuning logo anda */
            transition: width 0.3s ease;
        }

        .navbar.scrolled #navLogoImg {
            opacity: 1;
            transform: translateX(0);
            visibility: visible;
        }

        /* Saat Menu Active atau di Hover */
        .nav-link.active::after,
        .nav-link:hover::after {
            width: 100%;
        }

        /* Warna teks saat scrolled */
        .navbar.scrolled .nav-link.active {
            color: var(--royal-purple) !important;
            /* Atau warna gelap pilihan anda */
            font-weight: 700;
        }

        .transition-all {
            transition: all 0.4s ease;
        }

        /* --- Vibrant Background (Hero & Contact) --- */
        /* .hero,
        .contact-vibrant {
            background: linear-gradient(135deg, rgba(11, 95, 255, 0.9) 0%, rgba(255, 0, 128, 0.9) 50%, rgba(255, 192, 34, 0.8) 100%),
                url('{{ asset('events/bg-img.png') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }

        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero h1 {
            font-size: clamp(2.2rem, 5vw, 4rem);
            font-weight: 800;
            line-height: 1.2;
        } */

        /* hero */
        /* HERO BACKGROUND IMAGE */
        .hero-banner {
            background-image: url('{{ asset('events/bg-hero.webp') }}');
            /* sesuaikan path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            position: relative;
        }

        /* Optional overlay biar teks lebih kebaca */
        .hero-overlay {
            background: linear-gradient(to right,
                    rgba(0, 0, 0, 0.45),
                    rgba(0, 0, 0, 0.1));
            min-height: 100vh;
        }

        /* Konten hero */
        .hero-content {
            max-width: 650px;
        }

        .hero-content h1 {
            font-weight: 800;
            line-height: 1.1;
        }

        .hero-content p {
            opacity: 0.9;
        }

        /* --- Section Styling --- */
        section {
            padding: 100px 0;
        }

        .section-title {
            color: var(--dark-text);
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        /* .contact-vibrant .section-title {
            color: white !important;
        } */

        .title-underline {
            width: 80px;
            height: 5px;
            background-color: var(--vivid-magenta);
            margin-bottom: 3rem;
            border-radius: 10px;
        }

        .text-center .title-underline {
            margin-left: auto;
            margin-right: auto;
        }

        /* --- Cards & Components --- */
        /* Animasi Breathe untuk Ikon */
        @keyframes breathe {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        .service-icon.breathe {
            display: inline-block;
            animation: breathe 3s ease-in-out infinite;
        }

        /* Modifikasi Service Card Hover */
        /* --- Services Premium Style --- */
        #services {
            background-color: var(--light-bg);
        }

        .service-card {
            background: white;
            border-radius: 24px;
            padding: 40px 30px;
            height: 100%;
            position: relative;
            z-index: 1;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        /* Background ornament saat hover */
        .service-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(11, 95, 255, 0.03) 0%, transparent 70%);
            z-index: -1;
            transition: 0.5s;
            opacity: 0;
        }

        .service-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 50px -12px rgba(11, 95, 255, 0.15);
            border-color: var(--royal-purple);
        }

        .service-card:hover::before {
            opacity: 1;
        }

        /* Icon Container */
        .icon-box {
            width: 70px;
            height: 70px;
            background: rgba(11, 95, 255, 0.05);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            transition: 0.3s;
        }

        .service-card:hover .icon-box {
            background: var(--royal-purple);
            transform: rotate(-10deg);
        }

        .service-card:hover .service-icon {
            color: white !important;
        }

        /* List Styling */
        .service-list {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        .service-list li {
            padding: 8px 0;
            font-size: 0.9rem;
            color: #555;
            transition: 0.3s;
            display: flex;
            align-items: center;
        }

        .service-list li i {
            color: var(--golden-joy);
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .service-card:hover .service-list li {
            color: var(--dark-text);
        }

        /* Animasi Breathe tetap ada */
        @keyframes breathe {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(2);
            }
        }

        .breathe {
            animation: breathe 3s ease-in-out infinite;
        }

        /* End service card */

        .portfolio-item {
            position: relative;
            border-radius: 5px;
            overflow: hidden;
            height: 300px;
        }

        .portfolio-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, #7B3A8194, transparent);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 25px;
            opacity: 1;
            transition: 0.4s;
        }

        .btn-glowy {
            background-color: var(--golden-joy);
            color: var(--dark-text);
            padding: 12px 35px;
            border-radius: 50px;
            font-weight: 700;
            border: none;
            transition: 0.3s;
        }

        .btn-glowy:hover {
            transform: translateY(-3px);
            background-color: white;
            color: var(--golden-joy);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .info-icon {
            color: var(--golden-joy);
            font-size: 2rem;
        }

        .text-muted-white {
            color: rgba(255, 255, 255, 0.8);
        }

        .list-style-none {
            list-style: none;
            padding: 0;
        }

        .list-style-none li {
            margin-bottom: 8px;
        }

        /* Efek animasi khusus untuk garis bawah judul */
        [data-aos="stretch-right"] {
            width: 0;
            transition-property: width;
        }

        [data-aos="stretch-right"].aos-animate {
            width: 80px;
            /* Sesuai lebar title-underline Anda */
        }

        /* Hover effect pada stats agar lebih interaktif */
        #about h3 {
            transition: transform 0.3s ease;
            cursor: default;
        }

        #about .col-6:hover h3 {
            transform: scale(1.2);
            color: var(--vivid-magenta) !important;
        }

        @keyframes breathe {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.25);
                /* Membesar 15% */
            }

            100% {
                transform: scale(1);
            }
        }

        /* Terapkan ke ikon dalam section Why Choose Us */
        .breathe-icon {
            display: inline-block;
            /* Penting agar transform scale berfungsi */
            animation: breathe 2.5s ease-in-out infinite;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top shadow-sm" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#home">
                <img src="{{ env('APP_ADMIN') . '/storage/' . $settings->logo }}" alt="Glowy EO Logo" id="navLogoImg"
                    class="me-2" style="height: 40px;">
            </a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto" id="navScrollspy">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#clients">Clients</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="hero-banner">
        <div class="hero-cta-right horizontal">
            <a href="#about" class="hero-cta-btn scroll-btn">
                <span class="cta-icon">↓</span>
                <span class="cta-label">Scroll</span>
            </a>

            <button class="hero-cta-btn video-btn" data-bs-toggle="modal" data-bs-target="#heroVideoModal">
                <span class="cta-icon">▶</span>
                <span class="cta-label">Watch Video</span>
            </button>
        </div>

        <style>
            .hero-banner {
                min-height: 100svh;
                min-height: 100vh;
                background: url('{{ asset('events/bg-hero.webp') }}') center / cover no-repeat;
                opacity: 0;
                animation: heroBgFade 1.2s ease-out forwards;
            }

            @media (max-width: 991px) {
                .hero-banner {
                    background-position: center top;
                }

                .hero-cta-right.horizontal {
                    left: 50%;
                    right: auto;
                    bottom: 8%;
                    transform: translateX(-50%);
                    flex-direction: column;
                    gap: 12px;
                    padding-bottom: env(safe-area-inset-bottom);
                }

                .hero-cta-btn {
                    width: 220px;
                    justify-content: center;
                }
            }

            @keyframes heroBgFade {
                to {
                    opacity: 1;
                }
            }

            /* CTA WRAPPER */
            .hero-cta-right.horizontal {
                position: absolute;
                right: 4%;
                bottom: 18%;
                display: flex;
                align-items: center;
                gap: 16px;
                z-index: 3;
            }

            /* CTA BUTTON */
            .hero-cta-btn {
                display: flex;
                align-items: center;
                gap: 10px;
                padding: 14px 22px;
                border-radius: 36px;
                background: rgba(255, 255, 255, 0.18);
                backdrop-filter: blur(8px);
                border: 1px solid rgba(255, 255, 255, 0.4);
                color: #fff;
                font-size: 14px;
                font-weight: 600;
                text-decoration: none;
                cursor: pointer;
                transition: all 0.35s ease;
            }

            /* ICON */
            .hero-cta-btn .cta-icon {
                font-size: 16px;
                transition: transform 0.3s ease;
            }

            /* HOVER EFFECT */
            .hero-cta-btn:hover {
                background: #ffffff;
                color: #000;
                transform: translateY(-2px);
            }

            .hero-cta-btn:hover .cta-icon {
                transform: translateX(4px);
            }

            /* RESPONSIVE */
            @media (max-width: 991px) {
                .hero-cta-right.horizontal {
                    right: 50%;
                    bottom: 10%;
                    transform: translateX(50%);
                }
            }
        </style>
    </section>

    <div class="modal fade" id="heroVideoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark border-0">
                <div class="modal-body p-0 position-relative">

                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                        data-bs-dismiss="modal"></button>

                    <div class="ratio ratio-16x9">
                        <iframe id="youtubePlayer" src="https://www.youtube.com/embed/3Cdt7v_iJW8" title="YouTube video"
                            allow="autoplay; encrypted-media" allowfullscreen>
                        </iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section id="about" class="overflow-hidden">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200">
                    <h2 class="section-title">About GLOWY Event Organizer</h2>
                    <div class="title-underline" data-aos="stretch-right" data-aos-delay="300"></div>

                    <p data-aos="fade-up" data-aos-delay="400">
                        GLOWY EO provides comprehensive MICE services (Meeting, Incentive, Convention, and Exhibition)
                        designed to meet high industry standards through strategic planning, creative execution, and
                        operational excellence.
                    </p>
                    <p class="text-muted" data-aos="fade-up" data-aos-delay="500">
                        Our approach combines professionalism, creativity, and consistency positioning
                        GLOWY EO as a trusted long-term partner for brands, corporations, institutions, and communities.
                    </p>
                    <p class="text-muted" data-aos="fade-up" data-aos-delay="600">
                        Our brand identity reflects energy, passion, and a youthful yet confident
                        character, balanced with optimism, warmth, and premium creative vision.
                    </p>
                </div>

                <div class="col-lg-6">
                    <div class="p-4 bg-white rounded-4 shadow-sm mb-4 border-start border-4 border-primary"
                        data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="200">
                        <h5>Vision</h5>
                        <p class="small m-0 text-muted">
                            To become a trusted and forward-thinking event organizer that consistently delivers
                            professional, creative, and impactful event experiences, while building long-term
                            partnerships and staying relevant in an ever-evolving industry.
                        </p>
                    </div>

                    <div class="p-4 bg-white rounded-4 shadow-sm border-start border-4 border-magenta"
                        style="border-color: var(--vivid-magenta)!important;" data-aos="zoom-in-left"
                        data-aos-duration="1000" data-aos-delay="500">

                        <h5 class="fw-bold mb-3">Mission</h5>

                        <ul class="mission-list small m-0 text-muted">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                To collaborate closely with clients in transforming ideas into impactful events.
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                To deliver seamless, efficient, and transparent event management processes.
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                To provide customized solutions with a strong fighting spirit.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-5 g-4 text-center">
                <div class="col-6 col-md-3" data-aos="flip-up" data-aos-delay="100">
                    <h3 class="fw-bold text-primary">2015</h3>
                    <small class="fw-bold text-muted">ESTABLISHED</small>
                </div>
                <div class="col-6 col-md-3" data-aos="flip-up" data-aos-delay="300">
                    <h3 class="fw-bold text-primary">250+</h3>
                    <small class="fw-bold text-muted">EVENTS DELIVERED</small>
                </div>
                <div class="col-6 col-md-3" data-aos="flip-up" data-aos-delay="500">
                    <h3 class="fw-bold text-primary">120+</h3>
                    <small class="fw-bold text-muted">CLIENTS</small>
                </div>
                <div class="col-6 col-md-3" data-aos="flip-up" data-aos-delay="700">
                    <h3 class="fw-bold text-primary">PREMIUM</h3>
                    <small class="fw-bold text-muted">CREATIVE VISION</small>
                </div>
            </div>
        </div>

        <style>
            #about {
                position: relative;
                overflow: hidden;
            }

            /* layer background image */
            #about::before {
                content: "";
                position: absolute;
                inset: 0;
                background-image:
                    linear-gradient(rgba(255, 255, 255, 0.95),
                        rgba(255, 255, 255, 0.95)),
                    url('{{ asset('events/bg-img.png') }}');
                /* ganti path */
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                z-index: 0;
            }

            /* semua konten about di atas background */
            #about>* {
                position: relative;
                z-index: 1;
            }

            /* Mission list with icon */
            .mission-list {
                list-style: none;
                padding-left: 0;
            }

            .mission-list li {
                display: flex;
                align-items: flex-start;
                gap: 10px;
                margin-bottom: 12px;
                line-height: 1.6;
            }

            .mission-list li i {
                color: var(--vivid-magenta);
                font-size: 1rem;
                margin-top: 2px;
                flex-shrink: 0;
            }
        </style>
    </section>

    <section id="why-choose-us" class="bg-white">
        <div class="container text-center">
            <h2 class="section-title">Why Choose GLOWY EO</h2>
            <div class="title-underline"></div>

            <div class="row g-5 text-start">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="d-flex align-items-start">
                        <i class="bi-shield-fill-check fs-2 text-primary me-3 breathe-icon"></i>
                        <div>
                            <h5 class="fw-bold">Trust & Professionalism</h5>
                            <p class="small text-muted">GLOWY EO is built on a foundation of trust, professionalism,
                                and consistency. Since 2015, we have been committed to delivering reliable event
                                solutions with structured planning, clear communication, and high service standards that
                                clients can depend on.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-lightbulb-fill fs-2 text-primary me-3 breathe-icon"></i>
                        <div>
                            <h5 class="fw-bold">Creative Excellence</h5>
                            <p class="small text-muted">Creativity is at the core of every event we deliver. GLOWY EO
                                develops strong, relevant, and premium concepts that are thoughtfully designed to align
                                with each client’s objectives, brand identity, and audience experience.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-heart-fill fs-2 text-primary me-3 breathe-icon"></i>
                        <div>
                            <h5 class="fw-bold">Optimistic & Client-Oriented Approach</h5>
                            <p class="small text-muted">GLOWY EO approaches every project with optimism, flexibility,
                                and a client-first perspective, ensuring a smooth, enjoyable, and memorable event
                                journey.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-fire fs-2 text-primary me-3 breathe-icon"></i>
                        <div>
                            <h5 class="fw-bold">Strong Fighting Spirit</h5>
                            <p class="small text-muted">Driven by passion and dedication, GLOWY EO demonstrates
                                resilience and commitment in every stage of execution.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="d-flex align-items-start p-4 rounded-4" style="background-color: var(--light-bg);">
                        <i class="bi bi-infinity fs-2 text-primary me-3 breathe-icon"></i>
                        <div>
                            <h5 class="fw-bold">End-to-End Event Solutions</h5>
                            <p class="small text-muted m-0">From concept development to on-site execution, GLOWY EO
                                provides comprehensive, end-to-end event management services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            /* =============================== PORTFOLIO BACKGROUND IMAGE ================================ */
            #why-choose-us {
                position: relative;
                overflow: hidden;
            }

            /* layer background image */
            #why-choose-us::before {
                content: "";
                position: absolute;
                inset: 0;
                background-image:
                    linear-gradient(rgba(255, 255, 255, 0.82),
                        rgba(231, 231, 231, 0.92)),
                    url('{{ asset('events/bg-img4.png') }}');
                /* ganti path */
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                z-index: 0;
            }

            /* pastikan konten di atas background */
            #why-choose-us>* {
                position: relative;
                z-index: 1;
            }
        </style>
    </section>

    <section id="services">
        <div class="container text-center">
            <h2 class="section-title" data-aos="fade-down">
                Our Event Management & MICE Services
            </h2>
            <div class="title-underline" data-aos="zoom-in"></div>

            <div class="row g-4 justify-content-center">
                @foreach ($services as $index => $service)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">

                        <div class="service-card shadow-sm">
                            <div class="icon-box">
                                <i class="bi bi-{{ $service->icon ?? 'briefcase' }} service-icon breathe m-0"></i>
                            </div>

                            <h5 class="fw-bold mb-3">
                                {{ $service->title }}
                            </h5>

                            <div class="border-bottom w-25 mx-auto mb-3"
                                style="border-color: var(--golden-joy) !important; border-width: 2px !important;">
                            </div>

                            <ul class="service-list">
                                @foreach ($service->items as $item)
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        {{ $item->name }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <style>
            #services {
                position: relative;
                overflow: hidden;
            }

            #services::before {
                content: "";
                position: absolute;
                inset: 0;
                background-image:
                    linear-gradient(rgba(255, 255, 255, 0.92), #FDF8F2DE),
                    url('{{ asset('events/bg-img5.png') }}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                z-index: 0;
            }

            #services>* {
                position: relative;
                z-index: 1;
            }
        </style>
    </section>

    <section id="portfolio" class="bg-white">
        <div class="container text-center">
            <h2 class="section-title">Our Best Moments</h2>
            <div class="title-underline"></div>
            <p class="text-muted mb-5">Experience-driven events that create meaningful impact.</p>

            <div id="portfolio-splide" class="splide" aria-label="Portfolio Splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($portfolio as $item)
                            <li class="splide__slide p-2">
                                <div class="portfolio-item shadow-sm border-0">
                                    <div class="portfolio-img-wrapper">
                                        <img src="{{ env('APP_ADMIN') . '/storage/' . $item->thumbnail }}"
                                            class="img-fluid" alt="{{ $item->title }}">
                                        <div class="portfolio-overlay text-white text-start">
                                            <h6 class="fw-bold m-0">{{ $item->title }}</h6>
                                            <small class="opacity-75">Glowy Event Organizer</small>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <style>
            /* =============================== PORTFOLIO BACKGROUND IMAGE ================================ */
            #portfolio {
                position: relative;
                overflow: hidden;
            }

            /* layer background image */
            #portfolio::before {
                content: "";
                position: absolute;
                inset: 0;
                background-image:
                    linear-gradient(rgba(255, 255, 255, 0.92),
                        rgba(255, 255, 255, 0.92)),
                    url('{{ asset('events/bg-img3.png') }}');
                /* ganti path */
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                z-index: 0;
            }

            /* pastikan konten di atas background */
            #portfolio>* {
                position: relative;
                z-index: 1;
            }

            /* Default semua slide */
            #portfolio-splide .splide__slide {
                transform: scale(0.85);
                opacity: 0.6;
                transition: all 0.4s ease;
            }

            /* Slide yang aktif (tengah) */
            #portfolio-splide .splide__slide.is-active {
                transform: scale(1.15);
                opacity: 1;
                z-index: 2;
            }

            /* Opsional: efek bayangan lebih kuat di tengah */
            #portfolio-splide .splide__slide.is-active .portfolio-item {
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            }

            .portfolio-img-wrapper {
                overflow: hidden;
                border-radius: 5px;
            }

            .portfolio-img-wrapper img {
                width: 100%;
                height: 310px;
                object-fit: cover;
            }
        </style>
    </section>

    <section id="clients" class="bg-white">
        <div class="container text-center">
            <h2 class="section-title">Our Trusted Clients</h2>
            <div class="title-underline"></div>
            <p class="mb-5 opacity-75">
                GLOWY EO has earned the trust of a diverse range of clients across various industries,
                including government, finance, and lifestyle brands.
            </p>
        </div>


        @php
            $rows = $clients->chunk(6); // FIX: 1 baris = 6 logo
        @endphp

        <div class="client-rows">
            @foreach ($rows as $rowIndex => $row)
                <div class="client-row animate-row-{{ $rowIndex + 1 }}">
                    <div class="client-row-track">
                        {{-- Loop Pertama --}}
                        @foreach ($row as $client)
                            <div class="client-logo-item">
                                <div class="client-logo-wrapper p-3">
                                    <img src="{{ env('APP_ADMIN') . '/storage/' . $client->thumbnail }}"
                                        alt="{{ $client->description }}" class="img-fluid client-logo">
                                </div>
                            </div>
                        @endforeach

                        {{-- Loop Kedua (Duplicate untuk seamless loop) --}}
                        @foreach ($row as $client)
                            <div class="client-logo-item">
                                <div class="client-logo-wrapper p-3">
                                    <img src="{{ env('APP_ADMIN') . '/storage/' . $client->thumbnail }}"
                                        alt="{{ $client->description }}" class="img-fluid client-logo">
                                </div>
                            </div>
                        @endforeach

                        @foreach ($row as $client)
                            <div class="client-logo-item">
                                <div class="client-logo-wrapper p-3">
                                    <img src="{{ env('APP_ADMIN') . '/storage/' . $client->thumbnail }}"
                                        alt="{{ $client->description }}" class="img-fluid client-logo">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <style>
            /* =============================== CLIENTS BACKGROUND IMAGE ================================ */
            #clients {
                position: relative;
                overflow: hidden;
            }

            /* layer background image */
            #clients::before {
                content: "";
                position: absolute;
                inset: 0;
                background-image:
                    linear-gradient(rgba(255, 255, 255, 0.95),
                        rgba(255, 255, 255, 0.95)),
                    url('{{ asset('events/bg-img.png') }}');
                /* ganti path */
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                z-index: 0;
            }

            /* semua konten clients di atas background */
            #clients>* {
                position: relative;
                z-index: 1;
            }

            .client-rows {
                display: flex;
                flex-direction: column;
                gap: 1.5rem;
                /* Jarak antar baris */
                padding: 2rem 0;
                overflow: hidden;
                background: transparent;
            }

            .client-row {
                width: 100%;
                overflow: hidden;
                display: flex;
            }

            .client-row-track {
                display: flex;
                width: max-content;
                gap: 2rem;
                /* Jarak antar logo */
            }

            .client-logo-item {
                flex: 0 0 200px;
                /* Lebar tetap untuk setiap item logo */
                display: flex;
                justify-content: center;
            }

            .client-logo-wrapper {
                background: #fff;
                border-radius: 15px;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100px;
                width: 100%;
                /* Mengikuti lebar item */
                transition: all 0.3s ease;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            }

            .client-logo {
                max-height: 45px;
                max-width: 80%;
                filter: grayscale(100%);
                opacity: 0.5;
                transition: 0.3s;
            }

            .client-logo-wrapper:hover .client-logo {
                filter: grayscale(0%);
                opacity: 1;
                transform: scale(1.1);
            }

            /* =============================== ANIMASI PER BARIS (Dinamis) ================================ */

            /* Baris 1: Ke Kiri (Normal) */
            .animate-row-1 .client-row-track {
                animation: march-left 40s linear infinite;
            }

            /* Baris 2: Ke Kanan (Berlawanan arah) */
            .animate-row-2 .client-row-track {
                animation: march-left 12s linear infinite;
            }

            /* Baris 3: Ke Kiri (Lebih Lambat) */
            .animate-row-3 .client-row-track {
                animation: march-left 50s linear infinite;
            }

            /* Berhenti saat kursor di atasnya */
            /* .client-row:hover .client-row-track {
                animation-play-state: paused;
            } */

            /* =============================== KEYFRAMES (Seamless) ================================ */
            @keyframes march-left {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(calc(-50% - 1rem));
                }

                /* -50% + setengah dari gap */
            }

            @keyframes march-right {
                0% {
                    transform: translateX(calc(-50% - 1rem));
                }

                100% {
                    transform: translateX(0);
                }
            }
        </style>
    </section>

    <section id="contact" class="contact-vibrant">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="bg-white p-5 rounded-4 shadow-lg text-dark">
                        <h2 class="fw-bold mb-2">Let's Create Magic Together</h2>
                        <p class="text-muted mb-4">Punya visi acara yang luar biasa? Ceritakan pada kami. Tim ahli kami
                            siap mengubah ide Anda menjadi pengalaman yang tak terlupakan.</p>

                        <form id="consultationForm">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold small">Full Name</label>
                                    <input type="text" name="name" class="form-control" required
                                        placeholder="Enter your full name">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold small">Company / Brand Name</label>
                                    <input type="text" name="company" class="form-control" required
                                        placeholder="Name of your company or community">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold small">Active Email Address</label>
                                    <input type="email" name="email" class="form-control" required
                                        placeholder="For proposal delivery and follow-up">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold small">WhatsApp Number</label>
                                    <input type="text" name="whatsapp" class="form-control" required
                                        placeholder="Our team will contact you via WhatsApp">
                                </div>

                                <div class="col-12 mb-4">
                                    <label class="form-label fw-bold small">Event Type</label>
                                    <input type="text" name="event" class="form-control" required
                                        placeholder="The type of event you are planning">
                                </div>

                                <div class="col-12">
                                    <button type="submit" id="submitBtn"
                                        class="btn btn-glowy w-100 py-3 text-white fw-bold"
                                        style="background: var(--vivid-magenta);">
                                        <span class="btn-text">BOOK FREE CONSULTATION</span>
                                        <span class="btn-loading d-none">
                                            <span class="spinner-border spinner-border-sm"></span> Sending...
                                        </span>
                                    </button>

                                    <p class="text-center small text-muted mt-3 mb-0">
                                        Respon cepat dalam kurang dari 24 jam.
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left">
                    <div class="mb-4">
                        <h2 class="section-title text-start mb-3">Visit Our Hub</h2>
                        <p class="">Kreativitas berawal dari sini. Silakan mampir untuk berdiskusi
                            langsung atau hubungi kami melalui kanal resmi di bawah.</p>
                    </div>

                    <div class="rounded-4 overflow-hidden shadow-lg border border-3 border-white mb-4"
                        style="height: 300px;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7999815067687!2d106.79532297887874!3d-6.290000245295207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f10029e39241%3A0x766f6cd89bb7d89!2sGlowy%20Wedding!5e0!3m2!1sen!2sid!4v1768641570180!5m2!1sen!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-geo-alt-fill info-icon me-3"></i>
                                <div>
                                    <h6 class="fw-bold m-0">Office Location</h6>
                                    <p class="small m-0">{{ $settings->address }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-whatsapp info-icon me-3"></i>
                                <div>
                                    <h6 class="fw-bold m-0">Direct Chat</h6>
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

        <style>
            .wa-link {
                display: inline-flex;
                align-items: center;
                gap: 6px;
                color: #212529;
                text-decoration: none;
                font-weight: 500;
                transition: all 0.3s ease;
            }

            .wa-link i {
                font-size: 15px;
                color: #25D366;
                transition: transform 0.3s ease;
            }

            .wa-link:hover {
                color: #25D366;
            }

            .wa-link:hover i {
                transform: scale(1.15);
            }

            /* =============================== CLIENTS BACKGROUND IMAGE ================================ */
            #contact {
                position: relative;
                overflow: hidden;
            }

            /* layer background image */
            #contact::before {
                content: "";
                position: absolute;
                inset: 0;
                background-image:
                    /* linear-gradient(rgba(255, 255, 255, 0.95),
                        rgba(255, 255, 255, 0.95)), */
                    linear-gradient(rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.95)),
                    url('{{ asset('events/bg-hero.webp') }}');
                /* ganti path */
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                z-index: 0;
            }

            /* semua konten contact di atas background */
            #contact>* {
                position: relative;
                z-index: 1;
            }

            #consultationForm .form-control::placeholder {
                font-size: 0.8rem;
                opacity: 0.7;
            }
        </style>
    </section>

    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4 justify-content-between">

                <div class="col-lg-4 text-center text-md-start">
                    <h3 class="fw-bold mb-3">GLOWY EO</h3>
                    <p class="small opacity-75 mb-4">
                        {{ $settings->subtitle }}
                    </p>
                    <p class="small fw-bold text-white mb-0">{{ $settings->tagline }}</p>
                </div>

                <div class="col-lg-3 col-md-6 text-center text-md-start">
                    <h6 class="text-uppercase fw-bold mb-3" style="letter-spacing: 1px; color: var(--golden-joy);">
                        Quick Links</h6>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="#home"
                                class="footer-link text-decoration-none text-white opacity-75">Home</a></li>
                        <li class="mb-2"><a href="#about"
                                class="footer-link text-decoration-none text-white opacity-75">About Us</a></li>
                        <li class="mb-2"><a href="#services"
                                class="footer-link text-decoration-none text-white opacity-75">Our Services</a></li>
                        <li class="mb-2"><a href="#portfolio"
                                class="footer-link text-decoration-none text-white opacity-75">Portfolio</a></li>
                        <li class="mb-2"><a href="#contact"
                                class="footer-link text-decoration-none text-white opacity-75">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 text-center text-md-start">
                    <h6 class="text-uppercase fw-bold mb-3" style="letter-spacing: 1px; color: var(--golden-joy);">
                        Follow Us</h6>
                    <div class="d-flex justify-content-center justify-content-md-start gap-3">
                        <a href="#" class="btn btn-outline-light rounded-circle social-icon" title="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light rounded-circle social-icon" title="TikTok">
                            <i class="bi bi-tiktok"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light rounded-circle social-icon" title="YouTube">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="border-top border-secondary mt-5 pt-4 text-center">
                <p class="small opacity-50 m-0">
                    &copy; 2015 <strong>{{ $settings->company_name }}</strong>. All Rights Reserved.
                </p>
            </div>
        </div>

        <style>
            /* CSS Khusus Footer */
            .footer-link:hover {
                opacity: 1 !important;
                color: var(--golden-joy) !important;
                padding-left: 5px;
                transition: all 0.3s ease;
            }

            .social-icon {
                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.3s ease;
            }

            .social-icon:hover {
                background-color: var(--vivid-magenta);
                border-color: var(--vivid-magenta);
                transform: translateY(-3px);
            }
        </style>
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
                type: 'loop', // Membuat slide terus berputar
                drag: 'free', // Memungkinkan drag bebas
                focus: 'center', // Slide aktif di tengah
                perPage: 3, // Menampilkan 4 slide di desktop
                gap: '1rem', // Jarak antar slide
                autoplay: true,
                interval: 3000,
                pauseOnHover: false,
                arrows: true, // Hilangkan panah jika ingin tampilan bersih
                pagination: false, // Aktifkan titik navigasi
                breakpoints: {
                    1024: {
                        perPage: 3, // 3 slide di tablet/laptop kecil
                    },
                    768: {
                        perPage: 2, // 2 slide di tablet
                    },
                    480: {
                        perPage: 1, // 1 slide di HP
                        padding: '2rem', // Memberikan intipan slide berikutnya di HP
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
