@extends('siswa.siswa_master')
@section('siswa')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Materi Pembelajaran - IPS Terpadu</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts: Outfit & Nunito (Sesuai dengan Tema Dalam) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    
    <style>
        :root {
            /* Skema Warna Global - Vibrant EdTech */
            --bg-main: #F7F9FC;         /* Soft Gray/Blueish background */
            --surface: #FFFFFF;         /* Card background */
            
            --text-dark: #1E293B;       /* Heading */
            --text-gray: #64748B;       /* Paragraph */
            
            --border-color: rgba(0,0,0,0.06); 
            
            /* Warna Tema 1 (Sosial/Geografi) - Indigo/Pink */
            --theme-1-main: #4F46E5;    
            --theme-1-secondary: #EC4899;
            --theme-1-bg: #EEF2FF;
            
            /* Warna Tema 2 (Lingkungan) - Emerald/Teal */
            --theme-2-main: #059669;    
            --theme-2-secondary: #0D9488;
            --theme-2-bg: #F0FDF4;
            
            /* Warna Tema 3 (Ekonomi) - Blue/Orange */
            --theme-3-main: #0284C7;    
            --theme-3-secondary: #EA580C;
            --theme-3-bg: #F0F9FF;
            
            /* Warna Tema 4 (Pemberdayaan/Sosial) - Deep Indigo/Green */
            --theme-4-main: #4338CA;    
            --theme-4-secondary: #10B981;
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

        /* Container Limit (Menyelaraskan dengan Tema Dalam) */
        .app-container {
            max-width: 1400px; /* Diperlebar agar 4 kartu muat rapi dalam 1 baris */
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* ====== HERO BANNER BARU (Gaya EdTech Modern) ====== */
        .hero-banner {
            background: linear-gradient(135deg, #1E293B 0%, #0F172A 100%);
            border-radius: 0 0 var(--radius-xl) var(--radius-xl);
            padding: 5rem 2rem 6rem;
            margin-bottom: -3rem; /* Overlap effect for cards */
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
            margin-bottom: 1.5rem;
        }

        .hero-title {
            color: #FFFFFF;
            font-size: 3rem;
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
            font-size: 1.2rem;
            color: #94A3B8;
            font-weight: 500;
            max-width: 650px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* ====== KARTU TEMA ====== */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Memaksa 4 kartu berjejer dalam 1 baris */
            gap: 1.5rem;
            position: relative;
            z-index: 10;
        }

        .card-materi {
            background: var(--surface);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 2rem 1.5rem; /* Padding sedikit disesuaikan agar proporsional */
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: var(--shadow-sm);
            position: relative;
            overflow: hidden;
        }

        /* Top Border Accent Effect */
        .card-materi::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }
        
        .card-materi:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
        }

        .card-materi:hover::before {
            opacity: 1;
        }

        .badge-count {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-family: 'Outfit', sans-serif;
            font-size: 0.8rem;
            font-weight: 700;
            margin-bottom: 2rem;
            align-self: flex-start;
        }

        .card-icon {
            width: 64px;
            height: 64px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease;
        }

        .card-materi:hover .card-icon {
            transform: scale(1.1) rotate(-5deg);
        }

        .card-title {
            font-size: 1.25rem; /* Ukuran font disesuaikan untuk layout 4 kolom */
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 0.75rem;
            line-height: 1.3;
        }

        .card-desc {
            color: var(--text-gray);
            font-size: 0.95rem; /* Ukuran font disesuaikan */
            line-height: 1.6;
            margin-bottom: 1.5rem;
            flex-grow: 1;
            font-weight: 500;
        }

        /* THEME STYLING (Menyelaraskan dengan palet di materi dalam) */
        
        /* Theme 1 - Sosial (Indigo/Pink) */
        .theme-1::before { background: linear-gradient(90deg, var(--theme-1-main), var(--theme-1-secondary)); }
        .theme-1 .badge-count { background: var(--theme-1-bg); color: var(--theme-1-main); }
        .theme-1 .card-icon { background: linear-gradient(135deg, rgba(79,70,229,0.1), rgba(236,72,153,0.1)); color: var(--theme-1-main); }
        .theme-1 .btn-learn { background: linear-gradient(135deg, var(--theme-1-main), #3730A3); }

        /* Theme 2 - Lingkungan (Emerald/Teal) */
        .theme-2::before { background: linear-gradient(90deg, var(--theme-2-main), var(--theme-2-secondary)); }
        .theme-2 .badge-count { background: var(--theme-2-bg); color: var(--theme-2-main); }
        .theme-2 .card-icon { background: linear-gradient(135deg, rgba(5,150,105,0.1), rgba(13,148,136,0.1)); color: var(--theme-2-main); }
        .theme-2 .btn-learn { background: linear-gradient(135deg, var(--theme-2-main), #047857); }

        /* Theme 3 - Ekonomi (Blue/Orange) */
        .theme-3::before { background: linear-gradient(90deg, var(--theme-3-main), var(--theme-3-secondary)); }
        .theme-3 .badge-count { background: var(--theme-3-bg); color: var(--theme-3-main); }
        .theme-3 .card-icon { background: linear-gradient(135deg, rgba(2,132,199,0.1), rgba(234,88,12,0.1)); color: var(--theme-3-main); }
        .theme-3 .btn-learn { background: linear-gradient(135deg, var(--theme-3-main), #0369A1); }

        /* Theme 4 - Pemberdayaan (Deep Indigo/Soft Green) */
        .theme-4::before { background: linear-gradient(90deg, var(--theme-4-main), var(--theme-4-secondary)); }
        .theme-4 .badge-count { background: var(--theme-4-bg); color: var(--theme-4-main); }
        .theme-4 .card-icon { background: linear-gradient(135deg, rgba(67,56,202,0.1), rgba(16,185,129,0.1)); color: var(--theme-4-main); }
        .theme-4 .btn-learn { background: linear-gradient(135deg, var(--theme-4-main), #312E81); }

        /* Bottom Meta & Button */
        .meta-info {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(0,0,0,0.05);
            margin-bottom: 1.5rem;
        }

        .meta-time {
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--text-gray);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-family: 'Outfit', sans-serif;
        }

        .meta-tag {
            font-family: 'Outfit', sans-serif;
            font-size: 0.75rem;
            font-weight: 700;
            padding: 0.35rem 0.75rem;
            border-radius: 8px;
            background: var(--bg-main);
            color: var(--text-dark);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-learn {
            border: none;
            border-radius: 50px;
            padding: 0.8rem 1.5rem;
            font-weight: 700;
            font-size: 1rem;
            font-family: 'Outfit', sans-serif;
            color: white;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            width: 100%;
            text-decoration: none;
            box-shadow: var(--shadow-sm);
        }
        
        .btn-learn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
            color: white;
        }

        /* Responsiveness & Animations */
        /* Tablet & Laptop Kecil (Membuat 2 baris x 2 kolom agar seimbang) */
        @media (max-width: 1100px) {
            .card-grid { grid-template-columns: repeat(2, 1fr); gap: 1.5rem; }
            .card-materi { padding: 2rem; }
        }

        /* Mobile */
        @media (max-width: 768px) {
            .hero-banner { padding: 4rem 1.5rem 5rem; border-radius: 0 0 32px 32px; }
            .hero-title { font-size: 2rem; }
            p.hero-desc { font-size: 1.05rem; }
            .card-grid { grid-template-columns: 1fr; gap: 1.5rem; }
            .card-materi { padding: 2rem 1.5rem; }
        }

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
    </style>
</head>
<body>
    
    <!-- Hero Section -->
    <header class="hero-banner fade-in-up">
        <div class="hero-content">
            <span class="hero-badge"><i class="fas fa-graduation-cap me-2"></i>IPS Terpadu Kelas VII</span>
            <h1 class="hero-title">Eksplorasi Lingkungan &<br><span>Dinamika Masyarakat</span></h1>
            <p class="hero-desc mt-3 mb-0">
                Pilih tema pembelajaran untuk mulai memahami interaksi keruangan, potensi alam, kegiatan ekonomi, dan kehidupan sosial budaya di sekitarmu.
            </p>
        </div>
    </header>

    <div class="app-container">
        <!-- Materials Grid -->
        <div class="card-grid">
            
            <!-- Card Tema 1 -->
            <div class="fade-in-up delay-1">
                <div class="card-materi theme-1">
                    <span class="badge-count">
                        <i class="fas fa-layer-group"></i> 5 Sub-materi
                    </span>
                    
                    <div class="card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    
                    <h3 class="card-title">Tema 01: Kehidupan Sosial dan Kondisi Lingkungan Sekitar</h3>
                    <p class="card-desc">Pelajari tentang cara kita berinteraksi, mengenal lokasi absolut/relatif, dan pengaruh lingkungan terhadap kehidupan sehari-hari secara mendalam.</p>
                    
                    <div class="meta-info">
                        <span class="meta-tag">Geografi & Sosiologi</span>
                    </div>
                    
                    <a href="{{ route('siswa.materi.tema1', ['id' => 1]) }}" class="btn-learn mt-auto">
                        Mulai Belajar <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
            
            <!-- Card Tema 2 -->
            <div class="fade-in-up delay-2">
                <div class="card-materi theme-2">
                    <span class="badge-count">
                        <i class="fas fa-layer-group"></i> 4 Sub-materi
                    </span>
                    
                    <div class="card-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    
                    <h3 class="card-title">Tema 02: Keberagaman Lingkungan Sekitar</h3>
                    <p class="card-desc">Kenali pembentukan bumi, cuaca, iklim, pelestarian lingkungan alam, serta adaptasi budaya dan mitigasi bencana masyarakat lokal.</p>
                    
                    <div class="meta-info">
                        <span class="meta-tag">Lingkungan Hidup</span>
                    </div>
                    
                    <a href="{{ route('siswa.materi.tema2', ['id' => 2]) }}" class="btn-learn mt-auto">
                        Mulai Belajar <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
            
            <!-- Card Tema 3 -->
            <div class="fade-in-up delay-3">
                <div class="card-materi theme-3">
                    <span class="badge-count">
                        <i class="fas fa-layer-group"></i> 6 Sub-materi
                    </span>
                    
                    <div class="card-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    
                    <h3 class="card-title">Tema 03: Potensi Ekonomi Lingkungan</h3>
                    <p class="card-desc">Cari tahu bagaimana pemanfaatan sumber daya alam, dinamika kependudukan, dan kegiatan maritim bisa menciptakan peluang ekonomi berkelanjutan.</p>
                    
                    <div class="meta-info">
                        <span class="meta-tag">Ekonomi</span>
                    </div>
                    
                    <a href="{{ route('siswa.materi.tema3', ['id' => 3]) }}" class="btn-learn mt-auto">
                        Mulai Belajar <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
            
            <!-- Card Tema 4 -->
            <div class="fade-in-up delay-4">
                <div class="card-materi theme-4">
                    <span class="badge-count">
                        <i class="fas fa-layer-group"></i> 5 Sub-materi
                    </span>
                    
                    <div class="card-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    
                    <h3 class="card-title">Tema 04: Pemberdayaan Masyarakat</h3>
                    <p class="card-desc">Pelajari keragaman sosial budaya, sejarah lokal, literasi keuangan dasar, dan bagaimana komunitas bekerja sama untuk menjadi mandiri.</p>
                    
                    <div class="meta-info">
                        <span class="meta-tag">Pemberdayaan</span>
                    </div>
                    
                    <a href="{{ route('siswa.materi.tema4', ['id' => 4]) }}" class="btn-learn mt-auto">
                        Mulai Belajar <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Halaman Daftar Materi (EdTech Theme) berhasil dimuat.');
        });
    </script>
</body>
</html>
@endsection