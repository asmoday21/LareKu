@extends('siswa.siswa_master')

@section('siswa')
<!-- Menggunakan font Google modern untuk konsistensi desain -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    :root {
        /* Skema Warna Global - Vibrant EdTech */
        --bg-main: #F7F9FC;         /* Soft Gray/Blueish background */
        --surface: #FFFFFF;         /* Card background */
        
        --text-dark: #1E293B;       /* Heading */
        --text-gray: #64748B;       /* Paragraph */
        
        --border-color: rgba(0,0,0,0.06); 
        
        /* Warna Tema 1 (Sosial/Geografi) - Indigo */
        --theme-1-main: #4F46E5;    
        --theme-1-secondary: #818CF8;
        --theme-1-bg: #EEF2FF;
        
        /* Warna Tema 2 (Lingkungan) - Emerald */
        --theme-2-main: #059669;    
        --theme-2-secondary: #34D399;
        --theme-2-bg: #F0FDF4;
        
        /* Warna Tema 3 (Ekonomi) - Ocean/Orange */
        --theme-3-main: #0284C7;    
        --theme-3-secondary: #7DD3FC;
        --theme-3-bg: #F0F9FF;
        
        /* Warna Tema 4 (Pemberdayaan/Sosial) - Deep Indigo */
        --theme-4-main: #4338CA;    
        --theme-4-secondary: #667EEA;
        --theme-4-bg: #EEF2FF;
        
        /* Shadows & Border Radius (Squircle) */
        --shadow-sm: 0 2px 8px rgba(0,0,0,0.04);
        --shadow-md: 0 10px 25px rgba(0,0,0,0.06);
        --shadow-lg: 0 20px 40px rgba(0,0,0,0.08);
        --shadow-hover: 0 25px 50px rgba(0,0,0,0.12);
        
        --radius-md: 16px;
        --radius-lg: 24px;
        --radius-xl: 32px;
    }

    body {
        font-family: 'Nunito', sans-serif;
        background-color: var(--bg-main);
        color: var(--text-dark);
        padding-bottom: 4rem;
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
    }

    /* ====== HERO BANNER (Gaya EdTech Modern) ====== */
    .hero-banner {
        background: linear-gradient(135deg, #1E293B 0%, #0F172A 100%);
        border-radius: 0 0 var(--radius-xl) var(--radius-xl);
        padding: 4rem 2rem 5rem;
        margin-bottom: 2rem;
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
        background: radial-gradient(circle, rgba(79,70,229,0.3) 0%, rgba(255,255,255,0) 70%);
        border-radius: 50%;
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
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-badge {
        display: inline-block;
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
        margin-bottom: 1rem;
    }

    .hero-title {
        color: #FFFFFF;
        font-size: 2.75rem;
        font-weight: 800;
        margin-bottom: 1rem;
        line-height: 1.2;
    }

    .hero-title span {
        background: linear-gradient(135deg, #818CF8, #F472B6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    p.hero-desc {
        font-family: 'Nunito', sans-serif;
        font-size: 1.15rem;
        color: #94A3B8;
        font-weight: 500;
        max-width: 650px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* ====== STATS SECTION ====== */
    .stats-section {
        background: var(--surface);
        border-radius: var(--radius-lg);
        padding: 1.5rem;
        margin-top: -3rem; /* Overlap effect */
        margin-bottom: 3rem;
        box-shadow: var(--shadow-md);
        position: relative;
        z-index: 10;
        border: 1px solid var(--border-color);
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.5rem;
    }

    .stat-card {
        text-align: center;
        padding: 1rem;
        background: var(--bg-main);
        border-radius: var(--radius-md);
        border: 1px solid var(--border-color);
        transition: transform 0.3s ease;
    }

    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: var(--shadow-sm);
        border-color: #CBD5E1;
    }

    .stat-number {
        font-size: 2.25rem;
        font-weight: 800;
        color: var(--theme-1-main);
        font-family: 'Outfit', sans-serif;
        display: block;
        margin-bottom: 0.25rem;
    }

    .stat-label {
        color: var(--text-gray);
        font-size: 0.9rem;
        font-weight: 600;
        font-family: 'Nunito', sans-serif;
    }

    /* ====== KARTU MATERI UTAMA (4 KOLOM KESAMPING) ====== */
    .card-materi {
        background: var(--surface);
        border: 1px solid var(--border-color);
        border-radius: var(--radius-lg);
        padding: 2rem;
        height: 100%;
        display: flex;
        flex-direction: column;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: var(--shadow-sm);
    }
    
    .card-materi:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
        border-color: transparent;
    }

    .badge-count {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.4rem 0.8rem;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        align-self: flex-start;
    }

    .card-icon {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .card-title {
        font-family: 'Outfit', sans-serif;
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 0.75rem;
        line-height: 1.4;
    }

    .card-desc {
        color: var(--text-gray);
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 2rem;
        flex-grow: 1;
    }

    .meta-info {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 1.5rem;
        border-top: 1px solid var(--border-color);
        margin-bottom: 1.5rem;
    }

    .meta-time {
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--text-gray);
        display: flex;
        align-items: center;
        gap: 0.4rem;
    }

    .meta-tag {
        font-size: 0.75rem;
        font-weight: 700;
        padding: 0.3rem 0.6rem;
        border-radius: 6px;
        background: var(--bg-main);
        color: var(--text-dark);
    }

    .btn-learn {
        border: none;
        border-radius: 50px;
        padding: 0.75rem 1.5rem;
        font-weight: 700;
        font-size: 1rem;
        font-family: 'Outfit', sans-serif;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        width: 100%;
        text-decoration: none;
    }
    
    .btn-learn:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
        color: white;
    }

    /* Warna Spesifik Kartu Utama */
    .card-theme-1 { border-top: 4px solid var(--theme-1-main); }
    .card-theme-1 .badge-count { background: var(--theme-1-bg); color: var(--theme-1-main); }
    .card-theme-1 .card-icon { background: var(--theme-1-bg); color: var(--theme-1-main); }
    .card-theme-1 .btn-learn { background: var(--theme-1-main); color: white; }

    .card-theme-2 { border-top: 4px solid var(--theme-2-main); }
    .card-theme-2 .badge-count { background: var(--theme-2-bg); color: var(--theme-2-main); }
    .card-theme-2 .card-icon { background: var(--theme-2-bg); color: var(--theme-2-main); }
    .card-theme-2 .btn-learn { background: var(--theme-2-main); color: white; }

    .card-theme-3 { border-top: 4px solid var(--theme-3-main); }
    .card-theme-3 .badge-count { background: var(--theme-3-bg); color: var(--theme-3-main); }
    .card-theme-3 .card-icon { background: var(--theme-3-bg); color: var(--theme-3-main); }
    .card-theme-3 .btn-learn { background: var(--theme-3-main); color: white; }

    .card-theme-4 { border-top: 4px solid var(--theme-4-main); }
    .card-theme-4 .badge-count { background: var(--theme-4-bg); color: var(--theme-4-main); }
    .card-theme-4 .card-icon { background: var(--theme-4-bg); color: var(--theme-4-main); }
    .card-theme-4 .btn-learn { background: var(--theme-4-main); color: white; }

    /* ====== KARTU TEMA COLLAPSE (ACCORDION) ====== */
    .themes-container {
        display: grid;
        /* MEMAKSA 4 KOLOM KESAMPING */
        grid-template-columns: repeat(4, 1fr);
        gap: 1.5rem;
        margin-bottom: 2rem;
        /* ALIGN-ITEMS START: Cegah kartu lain memanjang saat 1 accordion dibuka */
        align-items: start; 
    }

    .theme-card {
        background: var(--surface);
        border-radius: var(--radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-sm);
        border: 1px solid var(--border-color);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .theme-card:hover {
        transform: translateY(-4px);
        box-shadow: var(--shadow-lg);
        border-color: transparent;
    }

    .theme-header {
        padding: 1.5rem;
        color: white;
        cursor: pointer;
        position: relative;
        user-select: none;
        
        /* TRIK AGAR KARTU SAMA BESAR: Flexbox & Height tetap */
        display: flex;
        flex-direction: column;
        height: 240px; 
    }

    /* Styling Individual Theme Header */
    .theme-01 .theme-header { background: linear-gradient(135deg, var(--theme-1-main), var(--theme-1-secondary)); }
    .theme-02 .theme-header { background: linear-gradient(135deg, var(--theme-2-main), var(--theme-2-secondary)); }
    .theme-03 .theme-header { background: linear-gradient(135deg, var(--theme-3-main), var(--theme-3-secondary)); }
    .theme-04 .theme-header { background: linear-gradient(135deg, var(--theme-4-main), var(--theme-4-secondary)); }

    .theme-number {
        position: absolute;
        top: 1rem;
        right: 1.5rem;
        font-size: 2.5rem;
        font-weight: 900;
        opacity: 0.15;
        font-family: 'Outfit', sans-serif;
        line-height: 1;
    }

    .theme-icon {
        font-size: 2rem;
        margin-bottom: 0.75rem;
        display: block;
    }

    .theme-title {
        font-weight: 800;
        font-size: 1.15rem;
        margin-bottom: 0.5rem;
        line-height: 1.3;
    }

    .theme-subtitle {
        opacity: 0.9;
        font-size: 0.85rem;
        font-family: 'Nunito', sans-serif;
        margin-bottom: 1rem;
        
        /* Flex Grow memaksa tombol 'Lihat Bab' turun ke paling bawah */
        flex-grow: 1; 
    }

    .theme-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.8rem;
        font-weight: 700;
        background: rgba(0,0,0,0.15);
        padding: 0.4rem 0.8rem;
        border-radius: 50px;
        margin-top: auto; /* Memastikan rata bawah */
    }

    .chevron-icon {
        transition: transform 0.3s ease;
        font-size: 1rem;
    }

    .theme-header[aria-expanded="true"] .chevron-icon {
        transform: rotate(180deg);
    }

    .collapse-content {
        background: var(--surface);
    }

    /* Isi dari Collapse (List Materi) */
    .materi-section {
        padding: 1.25rem;
    }

    .materi-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }

    .materi-item {
        padding: 0.75rem 1rem;
        background: var(--bg-main);
        border: 1px solid var(--border-color);
        border-radius: var(--radius-md);
        display: flex;
        align-items: center;
        transition: all 0.2s ease;
        text-decoration: none;
        color: var(--text-dark);
    }

    .materi-item:hover {
        background: #FFFFFF;
        border-color: #CBD5E1;
        box-shadow: var(--shadow-sm);
        transform: translateX(4px);
    }

    .materi-item i {
        color: var(--text-gray);
        margin-right: 0.75rem;
        font-size: 1rem;
        flex-shrink: 0;
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--border-color);
        border-radius: 8px;
    }
    
    .theme-01 .materi-item i { color: var(--theme-1-main); background: var(--theme-1-bg); }
    .theme-02 .materi-item i { color: var(--theme-2-main); background: var(--theme-2-bg); }
    .theme-03 .materi-item i { color: var(--theme-3-main); background: var(--theme-3-bg); }
    .theme-04 .materi-item i { color: var(--theme-4-main); background: var(--theme-4-bg); }

    .materi-text {
        font-size: 0.85rem;
        font-weight: 600;
        line-height: 1.4;
    }

    /* Animasi */
    .fade-in-up {
        animation: fadeInUp 0.7s cubic-bezier(0.16, 1, 0.3, 1) both;
    }
    .delay-1 { animation-delay: 0.1s; }
    .delay-2 { animation-delay: 0.2s; }
    .delay-3 { animation-delay: 0.3s; }
    .delay-4 { animation-delay: 0.4s; }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Responsive adjustments */
    @media (max-width: 1199px) {
        /* Tablet: Jadi 2 kolom agar tidak sempit */
        .themes-container { grid-template-columns: repeat(2, 1fr); }
    }

    @media (max-width: 768px) {
        /* Mobile: Jadi 1 kolom */
        .hero-banner { padding: 3rem 1.5rem 4rem; border-radius: 0 0 24px 24px; }
        .hero-title { font-size: 2rem; }
        .stats-section { margin-top: -2rem; padding: 1rem; }
        .stats-grid { grid-template-columns: repeat(2, 1fr); gap: 1rem; }
        .stat-number { font-size: 1.75rem; }
        .themes-container { grid-template-columns: 1fr; }
    }
</style>

<!-- Hero Section -->
<header class="hero-banner fade-in-up">
    <div class="hero-content">
        <span class="hero-badge"><i class="fas fa-graduation-cap me-2"></i>IPS Terpadu Kelas VII</span>
        <h1 class="hero-title">Eksplorasi Lingkungan &<br><span>Dinamika Masyarakat</span></h1>
        <p class="hero-desc">
            Pilih modul pembelajaran di bawah untuk mulai memahami interaksi keruangan, potensi alam, kegiatan ekonomi, dan kehidupan sosial budaya di sekitarmu.
        </p>
    </div>
</header>

<div class="app-container">
    <!-- Stats Section -->
    <div class="stats-section fade-in-up delay-1">
        <div class="stats-grid">
            <div class="stat-card">
                <span class="stat-number">4</span>
                <div class="stat-label"><i class="bi bi-collection-fill me-1 text-primary"></i> Tema Utama</div>
            </div>
            <div class="stat-card">
                <span class="stat-number">22</span>
                <div class="stat-label"><i class="bi bi-journal-text me-1 text-success"></i> Sub Materi</div>
            </div>
            <div class="stat-card">
                <span class="stat-number">15</span>
                <div class="stat-label"><i class="bi bi-bullseye me-1 text-warning"></i> Tujuan Belajar</div>
            </div>
            <div class="stat-card">
                <span class="stat-number">4</span>
                <div class="stat-label"><i class="bi bi-mortarboard-fill me-1 text-danger"></i> Bidang Ilmu</div>
            </div>
        </div>
    </div>

    <!-- Materials Grid (4 Columns on XL screens) -->
    <h3 class="mb-4 fw-bold" style="font-family: 'Outfit';">Modul Materi Utama</h3>
    <div class="row g-4 mb-5">
        
        <!-- Card 1 -->
        <div class="col-12 col-md-6 col-xl-3 fade-in-up delay-1">
            <div class="card-materi card-theme-1">
                <span class="badge-count"><i class="fas fa-layer-group"></i> 7 Sub-materi</span>
                <div class="card-icon"><i class="fas fa-globe-asia"></i></div>
                <h3 class="card-title">Tema 01: Lingkungan Sekitar</h3>
                <p class="card-desc">Pelajari tentang interaksi keruangan dan lokasi tempat tinggal secara mendalam.</p>
                <div class="meta-info">
                    <div class="meta-time"><i class="far fa-clock"></i> 120 menit</div>
                    <span class="meta-tag">Penting</span>
                </div>
                <a href="{{ route('siswa.materi.tema1', ['id' => 1]) }}" class="btn-learn mt-auto">
                    Mulai Belajar <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col-12 col-md-6 col-xl-3 fade-in-up delay-2">
            <div class="card-materi card-theme-2">
                <span class="badge-count"><i class="fas fa-layer-group"></i> 3 Sub-materi</span>
                <div class="card-icon"><i class="fas fa-tree"></i></div>
                <h3 class="card-title">Tema 02: Keberagaman Lingkungan</h3>
                <p class="card-desc">Kenali pelestarian alam dan diversitas budaya yang ada di sekitar kita.</p>
                <div class="meta-info">
                    <div class="meta-time"><i class="far fa-clock"></i> 90 menit</div>
                    <span class="meta-tag">Interaktif</span>
                </div>
                <a href="{{ route('siswa.materi.tema2', ['id' => 2]) }}" class="btn-learn mt-auto">
                    Mulai Belajar <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col-12 col-md-6 col-xl-3 fade-in-up delay-3">
            <div class="card-materi card-theme-3">
                <span class="badge-count"><i class="fas fa-layer-group"></i> 5 Sub-materi</span>
                <div class="card-icon"><i class="fas fa-chart-line"></i></div>
                <h3 class="card-title">Tema 03: Potensi Ekonomi</h3>
                <p class="card-desc">Bagaimana sumber daya alam menciptakan peluang ekonomi berkelanjutan.</p>
                <div class="meta-info">
                    <div class="meta-time"><i class="far fa-clock"></i> 150 menit</div>
                    <span class="meta-tag">Analitis</span>
                </div>
                <a href="{{ route('siswa.materi.tema3', ['id' => 3]) }}" class="btn-learn mt-auto">
                    Mulai Belajar <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col-12 col-md-6 col-xl-3 fade-in-up delay-4">
            <div class="card-materi card-theme-4">
                <span class="badge-count"><i class="fas fa-layer-group"></i> 4 Sub-materi</span>
                <div class="card-icon"><i class="fas fa-hands-helping"></i></div>
                <h3 class="card-title">Tema 04: Pemberdayaan</h3>
                <p class="card-desc">Cara masyarakat bekerja sama membangun komunitas yang lebih mandiri.</p>
                <div class="meta-info">
                    <div class="meta-time"><i class="far fa-clock"></i> 110 menit</div>
                    <span class="meta-tag">Sosial</span>
                </div>
                <a href="{{ route('siswa.materi.tema4', ['id' => 4]) }}" class="btn-learn mt-auto">
                    Mulai Belajar <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>

    </div>

    <!-- Theme Cards (Accordion Based - 4 Columns Grid) -->
    <h3 class="mb-4 fw-bold" style="font-family: 'Outfit'; border-top: 1px dashed var(--border-color); padding-top: 2rem;">Detail Sub Materi</h3>
    <div class="themes-container">
        
        <!-- Tema 01 Accordion -->
        <div class="theme-card theme-01 fade-in-up delay-1">
            <div class="theme-header" data-bs-toggle="collapse" data-bs-target="#tema01" aria-expanded="false">
                <div class="theme-number">01</div>
                <i class="bi bi-people-fill theme-icon"></i>
                <h3 class="theme-title">Kehidupan Sosial & Lingkungan</h3>
                <p class="theme-subtitle">Eksplorasi sosial budaya</p>
                <div class="theme-meta">
                    <span><i class="bi bi-journals me-1"></i>Lihat Bab</span>
                    <i class="bi bi-chevron-down chevron-icon"></i>
                </div>
            </div>
            <div class="collapse collapse-content" id="tema01">
                <div class="materi-section">
                    <div class="materi-grid">
                        <div class="materi-item"><i class="bi bi-geo-alt-fill"></i><span class="materi-text">Mengenal Lokasi Tinggal</span></div>
                        <div class="materi-item"><i class="bi bi-arrows-move"></i><span class="materi-text">Konektivitas Antarruang</span></div>
                        <div class="materi-item"><i class="bi bi-thermometer-sun"></i><span class="materi-text">Perubahan Iklim</span></div>
                        <div class="materi-item"><i class="bi bi-exclamation-triangle-fill"></i><span class="materi-text">Bencana Alam</span></div>
                        <div class="materi-item"><i class="bi bi-graph-up-arrow"></i><span class="materi-text">Kegiatan Ekonomi</span></div>
                        <div class="materi-item"><i class="bi bi-chat-heart-fill"></i><span class="materi-text">Interaksi Sosial</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tema 02 Accordion -->
        <div class="theme-card theme-02 fade-in-up delay-2">
            <div class="theme-header" data-bs-toggle="collapse" data-bs-target="#tema02" aria-expanded="false">
                <div class="theme-number">02</div>
                <i class="bi bi-tree-fill theme-icon"></i>
                <h3 class="theme-title">Keberagaman Lingkungan</h3>
                <p class="theme-subtitle">Pelestarian lingkungan alam</p>
                <div class="theme-meta">
                    <span><i class="bi bi-journals me-1"></i>Lihat Bab</span>
                    <i class="bi bi-chevron-down chevron-icon"></i>
                </div>
            </div>
            <div class="collapse collapse-content" id="tema02">
                <div class="materi-section">
                    <div class="materi-grid">
                        <div class="materi-item"><i class="bi bi-eye-fill"></i><span class="materi-text">Lingkungan Sekitar</span></div>
                        <div class="materi-item"><i class="bi bi-shield-fill-check"></i><span class="materi-text">Pembiasaan Diri Pelestarian</span></div>
                        <div class="materi-item"><i class="bi bi-basket-fill"></i><span class="materi-text">Pembiasaan Kebutuhan</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tema 03 Accordion -->
        <div class="theme-card theme-03 fade-in-up delay-3">
            <div class="theme-header" data-bs-toggle="collapse" data-bs-target="#tema03" aria-expanded="false">
                <div class="theme-number">03</div>
                <i class="bi bi-cash-coin theme-icon"></i>
                <h3 class="theme-title">Potensi Ekonomi</h3>
                <p class="theme-subtitle">Sumber daya & peluang</p>
                <div class="theme-meta">
                    <span><i class="bi bi-journals me-1"></i>Lihat Bab</span>
                    <i class="bi bi-chevron-down chevron-icon"></i>
                </div>
            </div>
            <div class="collapse collapse-content" id="tema03">
                <div class="materi-section">
                    <div class="materi-grid">
                        <div class="materi-item"><i class="bi bi-gem"></i><span class="materi-text">Pemanfaatan Potensi SDA</span></div>
                        <div class="materi-item"><i class="bi bi-flag-fill"></i><span class="materi-text">Potensi Negara Maju</span></div>
                        <div class="materi-item"><i class="bi bi-signpost-fill"></i><span class="materi-text">Toponimi Daerah</span></div>
                        <div class="materi-item"><i class="bi bi-shop"></i><span class="materi-text">Ekonomi Sekitar</span></div>
                        <div class="materi-item"><i class="bi bi-chat-dots-fill"></i><span class="materi-text">Interaksi Sosial</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tema 04 Accordion -->
        <div class="theme-card theme-04 fade-in-up delay-4">
            <div class="theme-header" data-bs-toggle="collapse" data-bs-target="#tema04" aria-expanded="false">
                <div class="theme-number">04</div>
                <i class="bi bi-hands-thumbs-up-fill theme-icon"></i>
                <h3 class="theme-title">Pemberdayaan Masyarakat</h3>
                <p class="theme-subtitle">Komunitas berkarakter</p>
                <div class="theme-meta">
                    <span><i class="bi bi-journals me-1"></i>Lihat Bab</span>
                    <i class="bi bi-chevron-down chevron-icon"></i>
                </div>
            </div>
            <div class="collapse collapse-content" id="tema04">
                <div class="materi-section">
                    <div class="materi-grid">
                        <div class="materi-item"><i class="bi bi-palette-fill"></i><span class="materi-text">Keragaman Sosial Budaya</span></div>
                        <div class="materi-item"><i class="bi bi-exclamation-circle-fill"></i><span class="materi-text">Permasalahan Kehidupan</span></div>
                        <div class="materi-item"><i class="bi bi-arrow-up-circle-fill"></i><span class="materi-text">Pemberdayaan Warga</span></div>
                        <div class="materi-item"><i class="bi bi-diagram-3-fill"></i><span class="materi-text">Peranan Komunitas</span></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const collapseHeaders = document.querySelectorAll('[data-bs-toggle="collapse"]');
    const collapseElements = document.querySelectorAll('.collapse');
    
    // Ensure all are closed initially
    collapseElements.forEach(collapse => {
        collapse.classList.remove('show');
    });
    
    collapseHeaders.forEach(header => {
        header.setAttribute('aria-expanded', 'false');
    });
    
    // Handle accordion collapse functionality
    collapseHeaders.forEach(header => {
        header.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const targetId = this.getAttribute('data-bs-target');
            const targetElement = document.querySelector(targetId);
            const currentlyExpanded = this.getAttribute('aria-expanded') === 'true';
            
            if (currentlyExpanded) {
                // Close current dropdown
                targetElement.classList.remove('show');
                this.setAttribute('aria-expanded', 'false');
            } else {
                // First close all other dropdowns
                collapseHeaders.forEach(otherHeader => {
                    if (otherHeader !== this) {
                        const otherTargetId = otherHeader.getAttribute('data-bs-target');
                        const otherTarget = document.querySelector(otherTargetId);
                        
                        if (otherTarget && otherTarget.classList.contains('show')) {
                            otherTarget.classList.remove('show');
                            otherHeader.setAttribute('aria-expanded', 'false');
                        }
                    }
                });
                
                // Then open current dropdown
                targetElement.classList.add('show');
                this.setAttribute('aria-expanded', 'true');
                
                // Smooth scroll to the opened content
                setTimeout(() => {
                    const headerRect = this.getBoundingClientRect();
                    const scrollTop = window.pageYOffset + headerRect.top - 100; // offset for nav
                    
                    window.scrollTo({
                        top: scrollTop,
                        behavior: 'smooth'
                    });
                }, 250);
            }
        });
    });
    
    // Prevent Bootstrap default collapse from interfering with custom logic
    collapseElements.forEach(collapse => {
        collapse.addEventListener('show.bs.collapse', function(e) {
            e.preventDefault();
            e.stopPropagation();
        });
        collapse.addEventListener('hide.bs.collapse', function(e) {
            e.preventDefault();
            e.stopPropagation();
        });
        
        // Add smooth transitions
        collapse.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
        collapse.style.overflow = 'hidden';
    });
});
</script>
@endsection