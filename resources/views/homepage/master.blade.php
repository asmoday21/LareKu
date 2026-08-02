<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budaya Minangkabau - Warisan Leluhur yang Abadi</title>
    
    <!-- Material Design Icons -->
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        :root {
            --primary-blue: #1a56db;
            --primary-blue-dark: #1e3a8a;
            --accent-purple: #7c3aed;
            --accent-teal: #0d9488;
            --bg-gradient-start: #f0f4ff;
            --bg-gradient-end: #e8edf5;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--bg-gradient-start) 0%, var(--bg-gradient-end) 100%);
            min-height: 100vh;
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        /* ===== HEADER ===== */
        .header-glass {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            position: sticky;
            top: 0;
            z-index: 50;
            transition: all 0.3s ease;
        }

        .brand-logo {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-purple));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            font-weight: 800;
            flex-shrink: 0;
        }

        .brand-name {
            font-size: 1.1rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-purple));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            white-space: nowrap;
        }

        .nav-link {
            position: relative;
            color: #64748b;
            font-weight: 500;
            transition: color 0.3s ease;
            text-decoration: none;
            font-size: 0.95rem;
        }

        .nav-link:hover {
            color: var(--primary-blue);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary-blue), var(--accent-purple));
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .btn-primary-gradient {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--accent-purple) 100%);
            color: white;
            padding: 0.5rem 1.25rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.85rem;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(26, 86, 219, 0.25);
            white-space: nowrap;
        }

        .btn-primary-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(26, 86, 219, 0.35);
            color: white;
        }

        .btn-outline-light {
            background: transparent;
            color: white;
            padding: 0.5rem 1.25rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.85rem;
            border: 2px solid rgba(255,255,255,0.3);
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            white-space: nowrap;
        }

        .btn-outline-light:hover {
            background: rgba(255,255,255,0.1);
            border-color: rgba(255,255,255,0.5);
            transform: translateY(-2px);
            color: white;
        }

        /* ===== HERO ===== */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-blue-dark) 50%, var(--accent-purple) 100%);
            position: relative;
            overflow: hidden;
            padding: 3rem 0;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 70%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
            pointer-events: none;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 50%;
            height: 150%;
            background: radial-gradient(circle, rgba(255,255,255,0.05) 0%, transparent 60%);
            pointer-events: none;
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: 800;
            line-height: 1.2;
        }

        .hero-title .highlight {
            background: linear-gradient(135deg, #fbbf24, #f59e0b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-image {
            border-radius: 20px;
            border: 3px solid rgba(255,255,255,0.15);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
            transition: transform 0.5s ease;
            width: 100%;
            max-width: 500px;
            height: auto;
        }

        .hero-image:hover {
            transform: scale(1.02) rotate(-1deg);
        }

        /* ===== CARDS ===== */
        .modern-card {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.7);
            border-radius: 20px;
            padding: 1.5rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            height: 100%;
        }

        .modern-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-blue), var(--accent-purple), var(--accent-teal));
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .modern-card:hover::before {
            opacity: 1;
        }

        .modern-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -12px rgba(26, 86, 219, 0.15);
            background: rgba(255, 255, 255, 0.98);
        }

        .card-icon {
            width: 56px;
            height: 56px;
            border-radius: 16px;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-purple));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin: 0 auto 0.75rem;
            box-shadow: 0 8px 20px rgba(26, 86, 219, 0.2);
        }

        /* ===== GALLERY ===== */
        .gallery-item {
            border-radius: 16px;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            transition: all 0.4s ease;
        }

        .gallery-item img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.08);
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 60%);
            opacity: 0;
            transition: opacity 0.4s ease;
            display: flex;
            align-items: flex-end;
            padding: 1.25rem;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-overlay h4 {
            color: white;
            font-weight: 700;
            font-size: 1rem;
            margin-bottom: 0.25rem;
        }

        .gallery-overlay p {
            color: rgba(255,255,255,0.8);
            font-size: 0.8rem;
        }

        /* ===== SECTION TITLE ===== */
        .section-title {
            font-size: 2rem;
            font-weight: 800;
            color: #1e293b;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-blue), var(--accent-purple));
            border-radius: 2px;
        }

        /* ===== MOBILE MENU ===== */
        #mobile-menu {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        /* ===== FEATURES ===== */
        .feature-item {
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            transform: translateX(4px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        /* ===== ANIMATIONS ===== */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
        }

        /* ============================================ */
        /* ===== RESPONSIVE BREAKPOINTS ===== */
        /* ============================================ */

        /* Tablet & Mobile Landscape (768px - 1023px) */
        @media (max-width: 1023px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-section {
                padding: 2.5rem 0;
            }
            
            .modern-card {
                padding: 1.25rem;
            }
            
            .section-title {
                font-size: 1.75rem;
            }
        }

        /* Mobile Landscape (480px - 767px) */
        @media (max-width: 767px) {
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .hero-title {
                font-size: 1.8rem;
            }
            
            .hero-section {
                padding: 2rem 0;
            }
            
            .hero-image {
                max-width: 100%;
            }
            
            .modern-card {
                padding: 1rem;
            }
            
            .section-title {
                font-size: 1.5rem;
            }
            
            .card-icon {
                width: 48px;
                height: 48px;
                font-size: 1.2rem;
            }
            
            .gallery-item img {
                height: 180px;
            }
            
            .brand-name {
                font-size: 0.95rem;
            }
            
            .brand-logo {
                width: 36px;
                height: 36px;
                font-size: 1rem;
            }
            
            .btn-primary-gradient,
            .btn-outline-light {
                padding: 0.45rem 1rem;
                font-size: 0.8rem;
            }
            
            .feature-item {
                padding: 0.75rem !important;
            }
            
            .feature-item .w-10 {
                width: 32px !important;
                height: 32px !important;
            }
            
            .feature-item .text-xl {
                font-size: 1rem !important;
            }
        }

        /* Mobile Portrait (320px - 479px) */
        @media (max-width: 479px) {
            .hero-title {
                font-size: 1.4rem;
            }
            
            .hero-section {
                padding: 1.5rem 0;
            }
            
            .hero-section .text-lg {
                font-size: 0.95rem !important;
            }
            
            .modern-card h3 {
                font-size: 1.1rem !important;
            }
            
            .modern-card p {
                font-size: 0.8rem !important;
            }
            
            .section-title {
                font-size: 1.25rem;
            }
            
            .section-title::after {
                width: 40px;
                height: 3px;
            }
            
            .card-icon {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
            
            .gallery-item img {
                height: 150px;
            }
            
            .gallery-overlay {
                padding: 0.75rem;
            }
            
            .gallery-overlay h4 {
                font-size: 0.85rem;
            }
            
            .gallery-overlay p {
                font-size: 0.7rem;
            }
            
            .brand-name {
                font-size: 0.85rem;
            }
            
            .brand-logo {
                width: 32px;
                height: 32px;
                font-size: 0.85rem;
            }
            
            .btn-primary-gradient,
            .btn-outline-light {
                padding: 0.4rem 0.75rem;
                font-size: 0.75rem;
                border-radius: 10px;
            }
            
            .btn-primary-gradient i,
            .btn-outline-light i {
                font-size: 0.8rem;
            }
            
            .feature-item {
                padding: 0.6rem !important;
                gap: 0.5rem !important;
            }
            
            .feature-item .w-10 {
                width: 28px !important;
                height: 28px !important;
            }
            
            .feature-item .text-xl {
                font-size: 0.85rem !important;
            }
            
            .feature-item p {
                font-size: 0.8rem !important;
            }
            
            .nav-link {
                font-size: 0.85rem;
            }
            
            footer .text-sm {
                font-size: 0.75rem !important;
            }
            
            footer .text-xs {
                font-size: 0.65rem !important;
            }
        }

        /* Sangat Kecil (< 320px) */
        @media (max-width: 319px) {
            .hero-title {
                font-size: 1.2rem;
            }
            
            .hero-section .text-lg {
                font-size: 0.85rem !important;
            }
            
            .brand-name {
                font-size: 0.75rem;
            }
            
            .brand-logo {
                width: 28px;
                height: 28px;
                font-size: 0.75rem;
            }
            
            .btn-primary-gradient,
            .btn-outline-light {
                padding: 0.3rem 0.6rem;
                font-size: 0.65rem;
            }
            
            .modern-card {
                padding: 0.75rem;
            }
            
            .section-title {
                font-size: 1.1rem;
            }
        }
    </style>
</head>

<body>

    <!-- ===== HEADER ===== -->
    <header class="header-glass">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
            <a href="#" class="flex items-center gap-2 sm:gap-3">
                <div class="brand-logo">
                    <i class="mdi mdi-school"></i>
                </div>
                <span class="brand-name">Lareku</span>
            </a>
            
            <nav class="hidden lg:flex items-center gap-4 xl:gap-6">
                <a href="#hero" class="nav-link">Beranda</a>
                <a href="{{ route('materi') }}" class="nav-link">Budaya</a>
                <a href="{{ route('cp-atp') }}" class="nav-link">Materi</a>
                <a href="{{ route('login') }}" class="btn-primary-gradient text-sm">
                    <i class="mdi mdi-login"></i> Masuk
                </a>
            </nav>
            
            <button id="menu-toggle" class="lg:hidden p-2 text-slate-600 hover:text-blue-600 focus:outline-none">
                <i class="mdi mdi-menu text-2xl"></i>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden">
            <nav class="flex flex-col p-4 space-y-2">
                <a href="#hero" class="nav-link py-2">Beranda</a>
                <a href="{{ route('materi') }}" class="nav-link py-2">Budaya</a>
                <a href="{{ route('cp-atp') }}" class="nav-link py-2">Materi</a>
                <a href="{{ route('login') }}" class="btn-primary-gradient justify-center mt-2">
                    <i class="mdi mdi-login"></i> Masuk
                </a>
            </nav>
        </div>
    </header>

    <!-- ===== MAIN CONTENT ===== -->
    <main>

        <!-- ===== HERO SECTION ===== -->
        <section id="hero" class="hero-section text-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
                    <!-- Left Content -->
                    <div class="flex-1 text-center lg:text-left fade-in">
                        <h1 class="hero-title mb-3 sm:mb-4">
                            <span class="highlight">Budaya Minangkabau</span><br>
                            <span>Jelajahi Warisan Leluhur</span>
                        </h1>
                        <p class="text-white/80 text-base sm:text-lg mb-6 sm:mb-8 leading-relaxed max-w-lg mx-auto lg:mx-0">
                            Selamat datang di petualangan budaya yang luar biasa! Platform pembelajaran ini dirancang khusus untuk siswa SMP yang ingin menyelami kekayaan budaya Minangkabau.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center lg:justify-start">
                            <a href="{{ route('register') }}" class="btn-primary-gradient justify-center">
                                <i class="mdi mdi-account-plus"></i> Mulai Petualangan
                            </a>
                            <button id="watch-video-btn" data-video="https://www.youtube.com/embed/4-_obvYZloY" class="btn-outline-light justify-center">
                                <i class="mdi mdi-play-circle"></i> Tonton Video
                            </button>
                        </div>
                    </div>
                    
                    <!-- Right Image -->
                    <div class="flex-1 fade-in w-full">
                        <div class="floating">
                            <img src="{{ asset('homepage/img/Indonesian house.jpg') }}" 
                                 alt="Budaya Minangkabau" 
                                 class="hero-image w-full max-w-sm sm:max-w-md md:max-w-lg mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== VALUES SECTION ===== -->
        <section id="capaian" class="py-12 sm:py-16">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-8 sm:mb-12">
                    <h2 class="section-title">Apa yang akan kita pelajari?</h2>
                    <p class="text-slate-500 mt-3 sm:mt-4 max-w-2xl mx-auto text-sm sm:text-base">
                        Mari mengenal lebih dalam kekayaan budaya Minangkabau yang membanggakan dan penuh makna kehidupan!
                    </p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                    <div class="modern-card text-center fade-in">
                        <div class="card-icon">
                            <i class="mdi mdi-handshake"></i>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-slate-800 mb-2">Adat Istiadat</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">
                            Memahami sistem adat dan tradisi yang mengatur kehidupan masyarakat Minangkabau berdasarkan prinsip "Adat basandi syarak, syarak basandi Kitabullah".
                        </p>
                    </div>
                    
                    <div class="modern-card text-center fade-in">
                        <div class="card-icon">
                            <i class="mdi mdi-home-outline"></i>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-slate-800 mb-2">Rumah Gadang</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">
                            Mengenal arsitektur unik rumah tradisional Minangkabau dan filosofi di balik setiap ornamen dan strukturnya yang penuh makna.
                        </p>
                    </div>
                    
                    <div class="modern-card text-center fade-in">
                        <div class="card-icon">
                            <i class="mdi mdi-palette"></i>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-slate-800 mb-2">Seni & Budaya</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">
                            Mempelajari tarian, musik, makanan, dan kesenian khas Minangkabau yang telah diwariskan turun-temurun.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== FEATURES SECTION ===== -->
        <section id="features" class="py-12 sm:py-16 bg-white/50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-8 sm:mb-12">
                    <h2 class="section-title">Fitur Pembelajaran</h2>
                    <p class="text-slate-500 mt-3 sm:mt-4 max-w-2xl mx-auto text-sm sm:text-base">
                        Platform ini cocok untuk berbagai kalangan yang ingin mendalami budaya Minangkabau
                    </p>
                </div>
                
                <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
                    <!-- Left Features -->
                    <div class="flex-1 order-2 lg:order-1 w-full">
                        <div class="space-y-3 sm:space-y-4">
                            <div class="feature-item flex items-start gap-3 sm:gap-4 p-3 sm:p-4 bg-white rounded-xl shadow-sm border border-slate-100">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0">
                                    <i class="mdi mdi-check-circle text-blue-600 text-lg sm:text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-slate-700 font-medium text-sm sm:text-base">Siswa SMP kelas VII yang ingin mengenal budaya Minangkabau</p>
                                </div>
                            </div>
                            <div class="feature-item flex items-start gap-3 sm:gap-4 p-3 sm:p-4 bg-white rounded-xl shadow-sm border border-slate-100">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-purple-50 flex items-center justify-center flex-shrink-0">
                                    <i class="mdi mdi-check-circle text-purple-600 text-lg sm:text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-slate-700 font-medium text-sm sm:text-base">Guru mata pelajaran IPS dan Bahasa Daerah</p>
                                </div>
                            </div>
                            <div class="feature-item flex items-start gap-3 sm:gap-4 p-3 sm:p-4 bg-white rounded-xl shadow-sm border border-slate-100">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-teal-50 flex items-center justify-center flex-shrink-0">
                                    <i class="mdi mdi-check-circle text-teal-600 text-lg sm:text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-slate-700 font-medium text-sm sm:text-base">Siapa saja yang ingin melestarikan dan memahami budaya Minangkabau</p>
                                </div>
                            </div>
                            <div class="feature-item flex items-start gap-3 sm:gap-4 p-3 sm:p-4 bg-white rounded-xl shadow-sm border border-slate-100">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-amber-50 flex items-center justify-center flex-shrink-0">
                                    <i class="mdi mdi-check-circle text-amber-600 text-lg sm:text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-slate-700 font-medium text-sm sm:text-base">Pelajar dari daerah lain yang ingin mengenal kebudayaan Sumatera Barat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Image -->
                    <div class="flex-1 order-1 lg:order-2 w-full">
                        <div class="floating">
                            <img src="{{ asset('homepage/img/indonesian house.jpg') }}" 
                                 alt="Fitur Pembelajaran" 
                                 class="rounded-2xl shadow-xl border-2 border-white w-full max-w-sm sm:max-w-md mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== GALLERY SECTION ===== -->
        <section id="portfolio" class="py-12 sm:py-16">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-8 sm:mb-12">
                    <h2 class="section-title">Galeri Budaya Minangkabau</h2>
                    <p class="text-slate-500 mt-3 sm:mt-4 max-w-2xl mx-auto text-sm sm:text-base">
                        Kumpulan foto kebudayaan dan tradisi Minangkabau yang kaya akan nilai sejarah dan filosofi
                    </p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                    <div class="gallery-item fade-in">
                        <img src="{{ asset('homepage/img/download.jpg') }}" alt="Rumah Gadang">
                        <div class="gallery-overlay">
                            <div>
                                <h4>Rumah Gadang</h4>
                                <p>Rumah adat dengan atap bergonjong yang menjadi simbol budaya Minangkabau</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="gallery-item fade-in">
                        <img src="{{ asset('homepage/img/tari piring.jpg') }}" alt="Tari Piring">
                        <div class="gallery-overlay">
                            <div>
                                <h4>Tari Piring</h4>
                                <p>Tarian tradisional yang menggunakan piring sebagai properti utama</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="gallery-item fade-in">
                        <img src="{{ asset('homepage/img/rendang.jpg') }}" alt="Rendang">
                        <div class="gallery-overlay">
                            <div>
                                <h4>Rendang</h4>
                                <p>Makanan tradisional yang telah diakui sebagai salah satu makanan terenak di dunia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- ===== FOOTER ===== -->
    <footer class="bg-gradient-to-r from-slate-900 to-slate-800 text-white py-6 sm:py-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="flex items-center justify-center gap-2 mb-3">
                    <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-gradient-to-br from-blue-600 to-purple-500 flex items-center justify-center">
                        <i class="mdi mdi-school text-white text-xs sm:text-sm"></i>
                    </div>
                    <span class="font-bold text-base sm:text-lg">Budaya Minangkabau</span>
                </div>
                <p class="text-slate-400 text-xs sm:text-sm">&copy; Platform Budaya Minangkabau. Semua Hak Dilindungi.</p>
                <p class="text-slate-500 text-[10px] sm:text-xs mt-1">Dikembangkan dengan ❤️ untuk melestarikan budaya Minangkabau</p>
            </div>
        </div>
    </footer>

    <!-- ===== VIDEO MODAL ===== -->
    <div id="videoModal" class="fixed inset-0 bg-black/70 flex items-center justify-center z-[1000] hidden transition-opacity duration-300 px-4">
        <div class="bg-white rounded-2xl overflow-hidden w-full max-w-2xl relative transform scale-95 transition-transform duration-300 shadow-2xl">
            <button id="close-modal-btn" class="absolute -top-10 sm:-top-12 right-0 text-white text-2xl sm:text-3xl hover:text-gray-300 transition-colors z-10">
                <i class="mdi mdi-close"></i>
            </button>
            <div class="relative w-full" style="padding-top: 56.25%;">
                <iframe id="youtubeVideo" class="absolute inset-0 w-full h-full" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- ===== SCROLL TO TOP ===== -->
    <button id="scroll-to-top" class="fixed bottom-4 sm:bottom-6 right-4 sm:right-6 p-2.5 sm:p-3 bg-gradient-to-br from-blue-600 to-purple-500 text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 z-50 hidden transform hover:scale-110">
        <i class="mdi mdi-chevron-up text-lg sm:text-xl"></i>
    </button>

    <!-- ===== SCRIPTS ===== -->
    <script>
        // ===== MOBILE MENU TOGGLE =====
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            const icon = menuToggle.querySelector('i');
            if (mobileMenu.classList.contains('hidden')) {
                icon.className = 'mdi mdi-menu text-2xl';
            } else {
                icon.className = 'mdi mdi-close text-2xl';
            }
        });

        document.querySelectorAll('#mobile-menu a').forEach(item => {
            item.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                const icon = menuToggle.querySelector('i');
                icon.className = 'mdi mdi-menu text-2xl';
            });
        });

        // ===== VIDEO MODAL =====
        const videoModal = document.getElementById('videoModal');
        const watchVideoBtn = document.getElementById('watch-video-btn');
        const closeModalBtn = document.getElementById('close-modal-btn');
        const youtubeVideo = document.getElementById('youtubeVideo');

        watchVideoBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const videoUrl = watchVideoBtn.getAttribute('data-video');
            youtubeVideo.src = videoUrl + "?autoplay=1";
            videoModal.classList.remove('hidden');
            setTimeout(() => {
                videoModal.querySelector('div').classList.remove('scale-95');
                videoModal.querySelector('div').classList.add('scale-100');
            }, 10);
        });

        closeModalBtn.addEventListener('click', () => {
            videoModal.querySelector('div').classList.remove('scale-100');
            videoModal.querySelector('div').classList.add('scale-95');
            setTimeout(() => {
                youtubeVideo.src = "";
                videoModal.classList.add('hidden');
            }, 300);
        });

        // Close modal on outside click
        videoModal.addEventListener('click', (e) => {
            if (e.target === videoModal) {
                videoModal.querySelector('div').classList.remove('scale-100');
                videoModal.querySelector('div').classList.add('scale-95');
                setTimeout(() => {
                    youtubeVideo.src = "";
                    videoModal.classList.add('hidden');
                }, 300);
            }
        });

        // ===== SCROLL TO TOP =====
        const scrollToTopBtn = document.getElementById('scroll-to-top');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                scrollToTopBtn.classList.remove('hidden');
            } else {
                scrollToTopBtn.classList.add('hidden');
            }
        });

        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // ===== FADE-IN ANIMATION =====
        const fadeElements = document.querySelectorAll('.fade-in');
        
        const fadeInObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });
        
        fadeElements.forEach(element => {
            fadeInObserver.observe(element);
        });

        // Staggered animation delay
        document.querySelectorAll('.fade-in').forEach((el, index) => {
            el.style.transitionDelay = `${index * 0.15}s`;
        });
    </script>

</body>
</html>