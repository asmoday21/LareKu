@extends('guru.guru_master')

@section('guru')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepatah Petitih Minangkabau</title>
    
    <!-- Menggunakan font Google modern untuk konsistensi desain -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            /* Skema Warna Global - Vibrant EdTech */
            --bg-main: #F7F9FC;
            --surface: #FFFFFF;
            
            --text-dark: #1E293B;
            --text-gray: #64748B;
            
            --border-color: rgba(0,0,0,0.06); 
            
            /* Warna Khusus Tema Pepatah (Purple/Indigo) */
            --brand-primary: #6366F1;    
            --brand-secondary: #8B5CF6;
            --brand-accent: #EC4899;
            --brand-warning: #F59E0B;
            --brand-success: #10B981;
            
            /* Shadows & Border Radius (Squircle) */
            --shadow-sm: 0 2px 8px rgba(0,0,0,0.04);
            --shadow-md: 0 10px 25px rgba(0,0,0,0.06);
            --shadow-lg: 0 20px 40px rgba(0,0,0,0.08);
            --shadow-hover: 0 25px 50px rgba(99, 102, 241, 0.15);
            
            --radius-md: 16px;
            --radius-lg: 24px;
            --radius-xl: 32px;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background-color: var(--bg-main);
            color: var(--text-dark);
            -webkit-font-smoothing: antialiased;
        }

        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        .app-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 1.5rem;
            padding-bottom: 5rem;
        }

        /* ====== HERO BANNER ====== */
        .hero-banner {
            background: linear-gradient(135deg, #1E1B4B 0%, #312E81 50%, #4C1D95 100%);
            border-radius: 0 0 var(--radius-xl) var(--radius-xl);
            padding: 5rem 2rem 6rem;
            margin-bottom: -3rem; /* Memberi ruang untuk kartu overlay */
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow-md);
        }

        /* Ornamen Glassmorphism di Hero */
        .hero-banner::before {
            content: '';
            position: absolute;
            top: -20%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(99,102,241,0.3) 0%, rgba(255,255,255,0) 70%);
            border-radius: 50%;
            animation: pulseGentle 4s ease-in-out infinite alternate;
        }

        .hero-banner::after {
            content: '';
            position: absolute;
            bottom: -30%;
            right: -5%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(236,72,153,0.2) 0%, rgba(255,255,255,0) 70%);
            border-radius: 50%;
            animation: pulseGentle 5s ease-in-out infinite alternate-reverse;
        }

        @keyframes pulseGentle {
            0% { opacity: 0.6; transform: scale(0.95); }
            100% { opacity: 1; transform: scale(1.05); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1.25rem;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 50px;
            font-family: 'Outfit', sans-serif;
            font-size: 0.85rem;
            font-weight: 600;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 1.5rem;
        }

        .hero-title {
            color: #FFFFFF;
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            line-height: 1.2;
        }

        .hero-title span {
            background: linear-gradient(135deg, #FCD34D, #F59E0B);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p.hero-desc {
            font-size: 1.1rem;
            color: #CBD5E1;
            font-weight: 500;
            max-width: 700px;
            margin: 0 auto 2rem;
            line-height: 1.6;
        }

        .hero-actions {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn-hero-primary {
            background: linear-gradient(135deg, #F59E0B, #D97706);
            color: white;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(245, 158, 11, 0.3);
            text-decoration: none;
        }

        .btn-hero-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(245, 158, 11, 0.4);
            color: white;
        }

        .btn-hero-secondary {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            color: white;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-hero-secondary:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-3px);
            color: white;
        }

        /* ====== INTRODUCTION CARDS ====== */
        .intro-card {
            background: var(--surface);
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--border-color);
            margin-bottom: 3rem;
            position: relative;
            z-index: 10;
        }

        .intro-title {
            font-size: 1.75rem;
            color: var(--brand-primary);
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .intro-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .intro-item {
            padding: 1.5rem;
            border-radius: var(--radius-md);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .intro-item:hover {
            transform: translateY(-5px);
        }

        .intro-item-1 { background: #EEF2FF; border: 1px solid #C7D2FE; }
        .intro-item-1 i { color: #4F46E5; }
        
        .intro-item-2 { background: #F0FDF4; border: 1px solid #A7F3D0; }
        .intro-item-2 i { color: #10B981; }
        
        .intro-item-3 { background: #FFFBEB; border: 1px solid #FDE68A; }
        .intro-item-3 i { color: #F59E0B; }

        .intro-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            display: block;
        }

        .intro-item h4 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }

        .intro-item p {
            font-size: 0.9rem;
            color: var(--text-gray);
            margin: 0;
            line-height: 1.5;
        }

        /* ====== FLIP CARDS (PEPATAH) ====== */
        .section-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .section-header h2 {
            font-size: 2.25rem;
            color: var(--text-dark);
        }
        
        .section-header span {
            background: linear-gradient(135deg, var(--brand-primary), var(--brand-accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .flip-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .flip-card {
            background-color: transparent;
            height: 320px;
            perspective: 1000px;
            cursor: pointer;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform-style: preserve-3d;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-md);
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
            box-shadow: var(--shadow-hover);
        }

        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: var(--radius-lg);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            border: 1px solid var(--border-color);
        }

        .flip-card-front {
            background-color: var(--surface);
            color: var(--text-dark);
        }

        .flip-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .flip-subtitle {
            font-family: 'Outfit', sans-serif;
            font-size: 1rem;
            font-weight: 700;
            color: var(--text-gray);
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .flip-quote {
            font-size: 1.25rem;
            font-weight: 700;
            font-style: italic;
            line-height: 1.5;
            margin: 0;
        }

        .flip-card-back {
            transform: rotateY(180deg);
            color: white;
        }

        .flip-back-title {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            font-weight: 800;
        }

        .flip-back-desc {
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            opacity: 0.95;
        }

        .flip-tag {
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(5px);
            padding: 0.4rem 1rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 700;
            font-family: 'Outfit', sans-serif;
        }

        /* Warna Spesifik Kartu */
        .card-blue .flip-quote { color: #2563EB; }
        .card-blue .flip-icon { color: #2563EB; }
        .card-blue .flip-card-back { background: linear-gradient(135deg, #2563EB, #1D4ED8); border: none; }

        .card-green .flip-quote { color: #059669; }
        .card-green .flip-icon { color: #059669; }
        .card-green .flip-card-back { background: linear-gradient(135deg, #10B981, #047857); border: none; }

        .card-purple .flip-quote { color: #7C3AED; }
        .card-purple .flip-icon { color: #7C3AED; }
        .card-purple .flip-card-back { background: linear-gradient(135deg, #8B5CF6, #6D28D9); border: none; }

        .card-teal .flip-quote { color: #0D9488; }
        .card-teal .flip-icon { color: #0D9488; }
        .card-teal .flip-card-back { background: linear-gradient(135deg, #14B8A6, #0F766E); border: none; }

        .card-orange .flip-quote { color: #EA580C; }
        .card-orange .flip-icon { color: #EA580C; }
        .card-orange .flip-card-back { background: linear-gradient(135deg, #F97316, #C2410C); border: none; }

        .card-red .flip-quote { color: #DC2626; }
        .card-red .flip-icon { color: #DC2626; }
        .card-red .flip-card-back { background: linear-gradient(135deg, #EF4444, #B91C1C); border: none; }

        /* ====== TIPS CARDS ====== */
        .tips-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .tips-card {
            background: var(--surface);
            border-radius: var(--radius-md);
            padding: 2rem;
            text-align: center;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
            box-shadow: var(--shadow-sm);
        }

        .tips-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }

        .tips-icon-box {
            width: 64px;
            height: 64px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin: 0 auto 1.5rem;
        }

        /* ====== MODAL SKOR ====== */
        .modal-custom .modal-content {
            border-radius: var(--radius-lg);
            border: none;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            overflow: hidden;
        }

        .modal-custom .modal-header {
            border-bottom: 1px solid var(--border-color);
            padding: 1.5rem 2rem;
            background: #F8FAFC;
        }

        .modal-custom .modal-body {
            padding: 2rem;
        }

        .form-control-custom {
            font-family: 'Nunito', sans-serif;
            border: 2px solid var(--border-color);
            padding: 1rem 1.5rem;
            border-radius: 16px;
            font-size: 1.1rem;
            color: var(--text-dark);
            text-align: center;
            transition: all 0.3s ease;
            width: 100%;
        }

        .form-control-custom:focus {
            border-color: var(--brand-primary);
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.15);
            outline: none;
        }

        .result-box {
            padding: 1.5rem;
            border-radius: var(--radius-md);
            margin-top: 1.5rem;
            text-align: center;
            display: none; /* Hidden by default */
            animation: fadeInUp 0.4s ease;
        }
        
        .result-box.show { display: block; }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .flip-grid, .intro-grid, .tips-grid { grid-template-columns: repeat(2, 1fr); }
            .hero-banner { padding: 4rem 1.5rem 5rem; }
            .hero-title { font-size: 2.25rem; }
        }

        @media (max-width: 768px) {
            .flip-grid, .intro-grid, .tips-grid { grid-template-columns: 1fr; }
            .hero-actions { flex-direction: column; }
            .hero-actions a, .hero-actions button { width: 100%; }
        }
    </style>
</head>
<body>

    <!-- HERO SECTION -->
    <header class="hero-banner">
        <div class="hero-content" data-aos="fade-up">
            
            <div class="hero-badge">
                <i class="fas fa-quote-left text-warning"></i> 
                <span>Seni Berbahasa Minangkabau</span>
            </div>
            
            <h1 class="hero-title">Pepatah Petitih <span>Minangkabau</span></h1>
            
            <p class="hero-desc">
                Kearifan lokal dalam bentuk ungkapan bijak yang mengandung nilai-nilai moral, etika, dan filosofi hidup masyarakat Minangkabau yang tak lekang oleh waktu.
            </p>
            
            <div class="hero-actions">
                <a href="#koleksi" class="btn-hero-primary">
                    <i class="bi bi-search me-2"></i> Jelajahi Pepatah
                </a>
                <button type="button" class="btn-hero-secondary" data-bs-toggle="modal" data-bs-target="#scoreModal">
                    <i class="bi bi-bar-chart-fill me-2"></i> Lihat Skor Siswa
                </button>
            </div>
            
        </div>
    </header>

    <div class="app-container">
        
        <!-- INTRODUCTION CARD -->
        <div class="intro-card" data-aos="fade-up" data-aos-delay="100">
            <h2 class="intro-title">Apa itu Pepatah Petitih?</h2>
            <p class="text-center text-secondary mb-0" style="max-width: 800px; margin: 0 auto; font-family: 'Nunito', sans-serif;">
                Pepatah petitih adalah ungkapan tradisional Minangkabau yang berisi nasihat, ajaran moral, dan panduan hidup. Biasanya disampaikan dalam bentuk kiasan atau perumpamaan alam yang mudah diingat dan dipahami.
            </p>
            
            <div class="intro-grid">
                <div class="intro-item intro-item-1">
                    <i class="bi bi-lightbulb-fill intro-icon"></i>
                    <h4>Mengandung Hikmah</h4>
                    <p>Setiap pepatah mengandung pelajaran hidup yang mendalam dan relevan.</p>
                </div>
                <div class="intro-item intro-item-2">
                    <i class="bi bi-chat-quote-fill intro-icon"></i>
                    <h4>Mudah Diingat</h4>
                    <p>Disampaikan dalam bahasa yang indah, berima, dan puitis.</p>
                </div>
                <div class="intro-item intro-item-3">
                    <i class="bi bi-tree-fill intro-icon"></i>
                    <h4>Menggunakan Kiasan</h4>
                    <p>Menyampaikan pesan tersirat melalui perumpamaan gejala alam sekitar.</p>
                </div>
            </div>
        </div>

        <!-- FLIP CARDS SECTION -->
        <div id="koleksi" class="section-header" data-aos="fade-up">
            <h2>Koleksi <span>Pepatah Petitih</span></h2>
            <p class="text-secondary">Arahkan kursor ke kartu (hover) untuk melihat makna dan penjelasannya.</p>
        </div>

        <div class="flip-grid">
            
            <!-- Card 1 -->
            <div class="flip-card card-blue" data-aos="fade-up" data-aos-delay="100">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <i class="bi bi-tree flip-icon"></i>
                        <div class="flip-subtitle">Pepatah #1</div>
                        <p class="flip-quote">"Alam takambang jadi guru"</p>
                    </div>
                    <div class="flip-card-back">
                        <i class="bi bi-book-half fs-1 mb-3"></i>
                        <h3 class="flip-back-title">Makna & Penjelasan</h3>
                        <p class="flip-back-desc">Alam semesta menjadi guru bagi kehidupan. Semua gejala, sifat, dan kejadian di alam dapat memberikan pelajaran berharga bagi manusia.</p>
                        <span class="flip-tag">Pendidikan & Ilmu</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flip-card card-green" data-aos="fade-up" data-aos-delay="200">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <i class="bi bi-people flip-icon"></i>
                        <div class="flip-subtitle">Pepatah #2</div>
                        <p class="flip-quote">"Bulek aia dek pambuluah, bulek kato dek mufakat"</p>
                    </div>
                    <div class="flip-card-back">
                        <i class="bi bi-diagram-3-fill fs-1 mb-3"></i>
                        <h3 class="flip-back-title">Makna & Penjelasan</h3>
                        <p class="flip-back-desc">Air menjadi bulat (menyatu) karena bambu, kata menjadi bulat (sepakat) karena mufakat. Menekankan pentingnya musyawarah dalam mengambil keputusan.</p>
                        <span class="flip-tag">Gotong Royong</span>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="flip-card card-purple" data-aos="fade-up" data-aos-delay="300">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <i class="bi bi-symmetry-horizontal flip-icon"></i>
                        <div class="flip-subtitle">Pepatah #3</div>
                        <p class="flip-quote">"Duduak samo randah, tagak samo tinggi"</p>
                    </div>
                    <div class="flip-card-back">
                        <i class="bi bi-person-check-fill fs-1 mb-3"></i>
                        <h3 class="flip-back-title">Makna & Penjelasan</h3>
                        <p class="flip-back-desc">Duduk sama rendah, berdiri sama tinggi. Menggajarkan pentingnya kesetaraan, keadilan, dan tidak saling merendahkan dalam masyarakat.</p>
                        <span class="flip-tag">Kesetaraan Sosial</span>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="flip-card card-teal" data-aos="fade-up" data-aos-delay="100">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <i class="bi bi-shield-check flip-icon"></i>
                        <div class="flip-subtitle">Pepatah #4</div>
                        <p class="flip-quote">"Batang tarandam akar takuak"</p>
                    </div>
                    <div class="flip-card-back">
                        <i class="bi bi-lightning-charge-fill fs-1 mb-3"></i>
                        <h3 class="flip-back-title">Makna & Penjelasan</h3>
                        <p class="flip-back-desc">Batang terendam akar terapung. Mengajarkan untuk tetap kuat menghadapi kesulitan hidup dan tidak mudah menyerah pada keadaan.</p>
                        <span class="flip-tag">Ketahanan & Kegigihan</span>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="flip-card card-orange" data-aos="fade-up" data-aos-delay="200">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <i class="bi bi-geo-alt flip-icon"></i>
                        <div class="flip-subtitle">Pepatah #5</div>
                        <p class="flip-quote">"Dimana bumi dipijak, disitu langit dijunjung"</p>
                    </div>
                    <div class="flip-card-back">
                        <i class="bi bi-globe-americas fs-1 mb-3"></i>
                        <h3 class="flip-back-title">Makna & Penjelasan</h3>
                        <p class="flip-back-desc">Di mana pun kita berada atau merantau, kita harus menghormati adat istiadat, budaya, dan aturan masyarakat setempat.</p>
                        <span class="flip-tag">Adaptasi Budaya</span>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="flip-card card-red" data-aos="fade-up" data-aos-delay="300">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <i class="bi bi-gem flip-icon"></i>
                        <div class="flip-subtitle">Pepatah #6</div>
                        <p class="flip-quote">"Emas tempawan, timah dibuang"</p>
                    </div>
                    <div class="flip-card-back">
                        <i class="bi bi-stars fs-1 mb-3"></i>
                        <h3 class="flip-back-title">Makna & Penjelasan</h3>
                        <p class="flip-back-desc">Emas disimpan, timah dibuang. Mengajarkan kita untuk selektif: mengambil dan mempertahankan hal yang baik, serta membuang hal yang buruk.</p>
                        <span class="flip-tag">Kebijaksanaan</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- TIPS SECTION -->
        <div class="section-header" data-aos="fade-up">
            <h2>Tips Menghafal <span>Pepatah</span></h2>
        </div>

        <div class="tips-grid">
            <div class="tips-card" data-aos="fade-up" data-aos-delay="100">
                <div class="tips-icon-box" style="background: #EEF2FF; color: #4F46E5;">
                    <i class="bi bi-music-note-beamed"></i>
                </div>
                <h3 style="font-size: 1.25rem; font-weight: 800; margin-bottom: 0.5rem;">Cari Iramanya</h3>
                <p class="text-secondary small mb-0">Pepatah Minang memiliki irama berima. Bacalah dengan nada yang berpantun agar lebih mudah melekat di ingatan.</p>
            </div>
            <div class="tips-card" data-aos="fade-up" data-aos-delay="200">
                <div class="tips-icon-box" style="background: #F0FDF4; color: #10B981;">
                    <i class="bi bi-image"></i>
                </div>
                <h3 style="font-size: 1.25rem; font-weight: 800; margin-bottom: 0.5rem;">Bayangkan Visualnya</h3>
                <p class="text-secondary small mb-0">Visualisasikan kiasan yang ada dalam pepatah. Bayangkan alam, benda, atau situasi yang sedang digambarkan.</p>
            </div>
            <div class="tips-card" data-aos="fade-up" data-aos-delay="300">
                <div class="tips-icon-box" style="background: #FFFBEB; color: #F59E0B;">
                    <i class="bi bi-chat-quote"></i>
                </div>
                <h3 style="font-size: 1.25rem; font-weight: 800; margin-bottom: 0.5rem;">Praktikkan Langsung</h3>
                <p class="text-secondary small mb-0">Sisipkan pepatah dalam percakapan atau tulisan sehari-hari. Semakin sering digunakan, maknanya makin meresap.</p>
            </div>
        </div>

    </div>

    <!-- MODAL SKOR SISWA -->
    <div class="modal fade modal-custom" id="scoreModal" tabindex="-1" aria-labelledby="scoreModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="scoreModalLabel" style="font-family: 'Outfit';">
                        <i class="bi bi-bar-chart-fill text-primary me-2"></i> Pantau Hasil Kuis Siswa
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <i class="bi bi-search text-primary" style="font-size: 3rem;"></i>
                        <p class="text-secondary mt-3 mb-4">Masukkan Nomor Induk Siswa Nasional (NISN) untuk melihat hasil evaluasi kuis.</p>
                        
                        <form id="nisnForm" onsubmit="event.preventDefault(); checkScoreByNISN()">
                            <input type="text" id="nisnInput" name="nisn" placeholder="Ketik NISN di sini..." class="form-control-custom mb-3" required autocomplete="off">
                            <button type="submit" class="btn-hero-primary border-0 w-100 py-3" style="background: linear-gradient(135deg, #4F46E5, #3730A3);">
                                Cek Skor Siswa
                            </button>
                        </form>
                    </div>

                    <!-- Container Hasil -->
                    <div id="resultContainer" class="result-box">
                        <!-- Hasil disuntik lewat JS -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS Animation
            AOS.init({ 
                duration: 800, 
                once: true,
                offset: 50,
                easing: 'ease-out-cubic'
            });

            // Reset modal form saat ditutup
            const scoreModal = document.getElementById('scoreModal');
            scoreModal.addEventListener('hidden.bs.modal', function () {
                document.getElementById('nisnInput').value = '';
                document.getElementById('resultContainer').classList.remove('show');
            });
        });

        // Simulasi data skor siswa (Database Tiruan)
        const studentScores = {
            '1234567890': { name: 'Budi Santoso', score: 5, total: 5, message: 'Luar biasa! Siswa ini memiliki pemahaman yang sangat baik.' },
            '0987654321': { name: 'Siti Rahmawati', score: 3, total: 5, message: 'Hasil yang cukup bagus, tapi masih bisa ditingkatkan lagi.' },
            '1122334455': { name: 'Ahmad Faisal', score: 2, total: 5, message: 'Perlu lebih banyak belajar. Sarankan siswa untuk meninjau kembali materi.' },
            '6677889900': { name: 'Dewi Lestari', score: 4, total: 5, message: 'Sangat baik! Pemahaman siswa ini hampir sempurna.' },
        };

        // Fungsi Cek Skor
        function checkScoreByNISN() {
            const nisnInput = document.getElementById('nisnInput').value;
            const resultBox = document.getElementById('resultContainer');
            
            // Animasi reset
            resultBox.classList.remove('show');
            
            // Tunggu sebentar untuk efek loading (opsional)
            setTimeout(() => {
                const scoreData = studentScores[nisnInput];

                if (scoreData) {
                    const percentage = Math.round((scoreData.score / scoreData.total) * 100);
                    let colorClass = 'bg-primary-subtle';
                    let textClass = 'text-primary';
                    let icon = '<i class="bi bi-check-circle-fill"></i>';

                    if (percentage >= 80) {
                        colorClass = 'bg-success-subtle'; textClass = 'text-success';
                        icon = '<i class="bi bi-trophy-fill"></i>';
                    } else if (percentage >= 60) {
                        colorClass = 'bg-warning-subtle'; textClass = 'text-warning';
                        icon = '<i class="bi bi-emoji-smile-fill"></i>';
                    } else {
                        colorClass = 'bg-danger-subtle'; textClass = 'text-danger';
                        icon = '<i class="bi bi-exclamation-triangle-fill"></i>';
                    }

                    resultBox.className = `result-box show ${colorClass}`;
                    resultBox.innerHTML = `
                        <div class="display-4 ${textClass} mb-3">${icon}</div>
                        <h4 class="fw-bold mb-1" style="font-family: 'Outfit';">${scoreData.name}</h4>
                        <p class="text-secondary small mb-3">NISN: ${nisnInput}</p>
                        <div class="d-inline-block bg-white px-4 py-2 rounded-pill shadow-sm mb-3">
                            <span class="fs-3 fw-bold ${textClass}">${scoreData.score} <span class="text-muted fs-5">/ ${scoreData.total}</span></span>
                        </div>
                        <p class="small text-dark mb-0">${scoreData.message}</p>
                    `;
                } else {
                    resultBox.className = `result-box show bg-danger-subtle`;
                    resultBox.innerHTML = `
                        <div class="display-4 text-danger mb-3"><i class="bi bi-x-circle-fill"></i></div>
                        <h4 class="fw-bold text-danger mb-2" style="font-family: 'Outfit';">Data Tidak Ditemukan</h4>
                        <p class="text-dark small mb-0">NISN yang Anda masukkan tidak terdaftar atau siswa belum mengerjakan kuis. Silakan periksa kembali.</p>
                    `;
                }
            }, 150);
        }
    </script>
</body>
</html>
@endsection