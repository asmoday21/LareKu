<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Materi Pembelajaran - Tema 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --success-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --warning-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            --card-shadow: 0 10px 40px rgba(0,0,0,0.1);
            --card-shadow-hover: 0 20px 60px rgba(0,0,0,0.15);
            --border-radius: 20px;
        }

        * {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            color: #2c3e50;
            line-height: 1.6;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        @keyframes slideInUp {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
            border-bottom: 1px solid rgba(255, 255, 255, 0.18);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-section {
            background: var(--primary-gradient);
            color: white;
            padding: 120px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="%23ffffff" opacity="0.1"><polygon points="0,0 1000,0 1000,100"/></svg>');
            animation: float 6s ease-in-out infinite;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            animation: slideInUp 1s ease-out;
        }

        .hero-section p {
            font-size: 1.3rem;
            opacity: 0.9;
            animation: slideInUp 1s ease-out 0.3s both;
        }

        .content-section {
            padding: 80px 0;
        }

        .card {
            border: none;
            border-radius: var(--border-radius);
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            box-shadow: var(--card-shadow);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--primary-gradient);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-15px);
            box-shadow: var(--card-shadow-hover);
        }

        .card:hover::before {
            transform: scaleX(1);
        }

        .card-header {
            background: transparent;
            border-bottom: 2px solid #f8f9fa;
            font-weight: 700;
            font-size: 1.4rem;
            color: #2c3e50;
            padding: 25px;
            position: relative;
        }

        .card-header i {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 1.5rem;
        }

        .card-body {
            padding: 30px;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            transition: transform 0.3s ease;
        }

        .video-container:hover {
            transform: scale(1.02);
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 15px;
        }

        .local-wisdom-card {
            background: linear-gradient(135deg, rgba(52, 152, 219, 0.1) 0%, rgba(155, 89, 182, 0.1) 100%);
            border-left: 6px solid #3498db;
            position: relative;
        }

        .local-wisdom-card::after {
            content: '🏛️';
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 3rem;
            opacity: 0.1;
        }

        .quiz-card {
            background: linear-gradient(135deg, rgba(46, 204, 113, 0.1) 0%, rgba(26, 188, 156, 0.1) 100%);
            border-left: 6px solid #2ecc71;
            position: relative;
        }

        .quiz-card::after {
            content: '🧠';
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 3rem;
            opacity: 0.1;
        }

        .question-item {
            cursor: pointer;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 15px;
            background: rgba(255, 255, 255, 0.8);
            border: 2px solid transparent;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .question-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.6s;
        }

        .question-item:hover {
            transform: translateX(10px);
            background: rgba(255, 255, 255, 0.95);
            border-color: #3498db;
            box-shadow: 0 8px 25px rgba(52, 152, 219, 0.2);
        }

        .question-item:hover::before {
            left: 100%;
        }

        .quiz-result {
            margin-top: 20px;
            padding: 25px;
            border-radius: 15px;
            display: none;
            animation: slideInUp 0.5s ease-out;
        }

        .correct-answer {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            border-color: #28a745;
            color: #155724;
            animation: pulse 0.6s ease-in-out;
        }

        .wrong-answer {
            background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
            border-color: #dc3545;
            color: #721c24;
            animation: pulse 0.6s ease-in-out;
        }

        .btn-check-answer {
            background: var(--success-gradient);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: 0 8px 25px rgba(79, 172, 254, 0.3);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-check-answer::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.6s;
        }

        .btn-check-answer:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(79, 172, 254, 0.4);
        }

        .btn-check-answer:hover::before {
            left: 100%;
        }

        .btn-secondary {
            background: var(--primary-gradient);
            border: none;
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(102, 126, 234, 0.4);
            background: var(--primary-gradient);
            border: none;
            color: white;
        }

        .material-section {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 25px;
            margin: 20px 0;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .material-section:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-5px);
        }

        .highlight-text {
            background: var(--warning-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 600;
        }

        .progress-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: rgba(255, 255, 255, 0.3);
            z-index: 1001;
        }

        .progress-bar {
            height: 100%;
            background: var(--success-gradient);
            width: 0%;
            transition: width 0.3s ease;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
            margin: 20px 0;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        img:hover {
            transform: scale(1.05);
        }

        .fade-in {
            animation: slideInUp 0.8s ease-out;
        }
        
        /* Style for the accordion items */
        .accordion-button:not(.collapsed) {
            color: #fff;
            background: var(--primary-gradient);
            box-shadow: none;
        }
        
        .accordion-button:focus {
            box-shadow: none;
        }
        
        .accordion-header {
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 5px;
        }
        
        .accordion-body {
            padding: 20px 15px;
            background-color: #f8f9fa;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            font-size: 0.95rem;
            line-height: 1.5;
        }
        
        .video-in-accordion {
            margin-top: 15px;
            border-top: 1px solid #e0e0e0;
            padding-top: 15px;
        }

        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .hero-section {
                padding: 80px 0;
            }
            
            .card-body, .card-header {
                padding: 20px;
            }
            
            .question-item:hover {
                transform: none;
            }
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-gradient);
            border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--secondary-gradient);
        }
    </style>
</head>
<body>

<!-- Progress Indicator -->
<div class="progress-indicator">
    <div class="progress-bar" id="progressBar"></div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            <i class="bi bi-mortarboard-fill me-2"></i>
            <span>Materi</span><span style="color: #764ba2;">Pembelajaran</span>
        </a>
    </div>
</nav>

<!-- Hero Section -->
<header class="hero-section">
    <div class="container">
        <h1 class="display-4 fw-bold">Tema 1: Kehidupan Sosial dan Kondisi Lingkungan Sekitar</h1>
        <p class="lead mt-3">Mengenal lebih dekat lokasi tempat tinggal, interaksi, dan potensi lingkungan sekitar melalui pembelajaran interaktif yang menarik.</p>
        <div class="mt-4">
            <i class="bi bi-geo-alt-fill me-3 fs-1"></i>
            <i class="bi bi-people-fill me-3 fs-1"></i>
            <i class="bi bi-house-heart-fill me-3 fs-1"></i>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="content-section">
    <div class="container">
        <!-- Tombol Kembali -->
        <button class="btn btn-secondary mb-4 rounded-pill fade-in" onclick="window.history.back()">
            <i class="bi bi-arrow-left me-2"></i> Kembali ke Menu Utama
        </button>

        <div class="row g-4">
            
            <!-- Materi dan Tujuan Pembelajaran -->
            <div class="col-lg-8">
                <div class="card p-0 fade-in">
                    <div class="card-header">
                        <i class="bi bi-book-fill me-2"></i> Materi Pembelajaran Interaktif
                    </div>
                    <div class="card-body">
                        <div class="material-section">
                            <h5 class="highlight-text"><i class="bi bi-pin-map-fill me-2"></i>Mengenal Lokasi Tempat Tinggal</h5>
                            <p>Lokasi adalah letak suatu objek di permukaan bumi. Lokasi dapat dibedakan menjadi dua, yaitu lokasi absolut dan lokasi relatif.</p>
                            <p><strong class="highlight-text">Lokasi absolut</strong> merupakan letak yang tetap terhadap sistem koordinat, seperti garis lintang dan garis bujur. Sifatnya tetap dan tidak berubah.</p>
                            <p><strong class="highlight-text">Lokasi relatif</strong> adalah letak suatu tempat yang dapat berubah-ubah sesuai dengan keadaan sekitarnya. Contohnya, harga tanah yang lebih mahal di dekat jalan raya.</p>
                        </div>

                        <div class="material-section">
                            <h5 class="highlight-text"><i class="bi bi-arrows-move me-2"></i>Konektivitas Antarruang</h5>
                            <p>Setiap tempat memiliki potensi dan kebutuhan yang berbeda. Inilah yang menyebabkan terjadinya interaksi antarwilayah untuk memenuhi kebutuhan. Interaksi ini dipengaruhi oleh tiga faktor:</p>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="text-center p-3 bg-light rounded-3">
                                        <i class="bi bi-puzzle-fill fs-2 text-primary"></i>
                                        <h6 class="mt-2">Saling Melengkapi</h6>
                                        <small>Wilayah yang kelebihan sumber daya berinteraksi dengan wilayah yang kekurangan</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center p-3 bg-light rounded-3">
                                        <i class="bi bi-shield-fill-check fs-2 text-success"></i>
                                        <h6 class="mt-2">Kesempatan Berintervensi</h6>
                                        <small>Adanya perantara yang dapat menghambat interaksi antarwilayah</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center p-3 bg-light rounded-3">
                                        <i class="bi bi-truck fs-2 text-warning"></i>
                                        <h6 class="mt-2">Kemudahan Pemindahan</h6>
                                        <small>Kemudahan transportasi antarwilayah memengaruhi interaksi</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="material-section">
                            <h5 class="highlight-text"><i class="bi bi-cloud-rain-fill me-2"></i>Perubahan Iklim dan Bencana Alam</h5>
                            <p><strong class="highlight-text">Cuaca</strong> adalah kondisi udara pada waktu singkat dan wilayah sempit. Sementara <strong class="highlight-text">iklim</strong> adalah kondisi cuaca rata-rata tahunan pada wilayah yang luas.</p>
                            <div class="alert alert-warning">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                <strong>Tahukah Anda?</strong> Indonesia dilalui dua jalur pegunungan dunia dan pertemuan tiga lempeng tektonik, menyebabkan Indonesia rentan terhadap gempa bumi, tsunami, dan letusan gunung berapi.
                            </div>
                        </div>
                        
                        <!-- KEGIATAN EKONOMI - DENGAN PENJELASAN DAN VIDEO -->
                        <div class="material-section">
                            <h5 class="highlight-text"><i class="bi bi-graph-up-arrow me-2"></i>Kegiatan Ekonomi</h5>
                            <p>Kegiatan ekonomi adalah semua kegiatan yang dilakukan manusia untuk memenuhi kebutuhan hidup. Terdapat tiga kegiatan utama:</p>
                            
                            <div class="accordion accordion-flush" id="accordionEkonomi">
                                <!-- Produksi -->
                                <div class="accordion-item card-modern shadow-sm">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="bi bi-gear-fill me-3 text-primary"></i> 1. Produksi
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionEkonomi">
                                        <div class="accordion-body">
                                            <p class="fw-semibold">Penjelasan:</p>
                                            <p>Kegiatan ini adalah proses menciptakan atau menambah nilai guna suatu barang atau jasa. Tujuannya adalah menghasilkan barang yang dibutuhkan masyarakat. Pelakunya disebut <strong>Produsen</strong>.</p>
                                            <p class="mb-0"><small>Contoh: Pabrik tekstil mengolah kapas menjadi kain, petani menanam padi.</small></p>
                                            
                                            <div class="video-in-accordion">
                                                <p class="fw-semibold text-muted mb-2"><i class="bi bi-youtube me-1"></i> Video: Proses Produksi</p>
                                                <div class="video-container">
                                                    <!-- Contoh video Produksi -->
                                                    <iframe src="https://www.youtube.com/embed/S2qY4_o4vWc" title="Video Produksi" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Distribusi -->
                                <div class="accordion-item card-modern shadow-sm">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="bi bi-truck me-3 text-success"></i> 2. Distribusi
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionEkonomi">
                                        <div class="accordion-body">
                                            <p class="fw-semibold">Penjelasan:</p>
                                            <p>Kegiatan menyalurkan barang atau jasa dari produsen kepada konsumen. Distribusi memastikan barang sampai ke tangan yang membutuhkan. Pelakunya disebut <strong>Distributor</strong>.</p>
                                            <p class="mb-0"><small>Contoh: Jasa pengiriman barang, agen sembako, pedagang besar.</small></p>

                                            <div class="video-in-accordion">
                                                <p class="fw-semibold text-muted mb-2"><i class="bi bi-youtube me-1"></i> Video: Mekanisme Distribusi</p>
                                                <div class="video-container">
                                                    <!-- Contoh video Distribusi -->
                                                    <iframe src="https://www.youtube.com/embed/H0c2Q1t5_uI" title="Video Distribusi" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Konsumsi -->
                                <div class="accordion-item card-modern shadow-sm">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="bi bi-cart-fill me-3 text-warning"></i> 3. Konsumsi
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionEkonomi">
                                        <div class="accordion-body">
                                            <p class="fw-semibold">Penjelasan:</p>
                                            <p>Kegiatan menggunakan atau menghabiskan nilai guna suatu barang atau jasa secara bertahap atau sekaligus untuk memenuhi kebutuhan hidup. Pelakunya disebut <strong>Konsumen</strong>.</p>
                                            <p class="mb-0"><small>Contoh: Membeli makanan di kantin, menggunakan jasa transportasi online, memakai pakaian.</small></p>

                                            <div class="video-in-accordion">
                                                <p class="fw-semibold text-muted mb-2"><i class="bi bi-youtube me-1"></i> Video: Contoh Pola Konsumsi</p>
                                                <div class="video-container">
                                                    <!-- Contoh video Konsumsi -->
                                                    <iframe src="https://www.youtube.com/embed/WJ6Uu2QzXG0" title="Video Konsumsi" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- AKHIR KEGIATAN EKONOMI -->
                        
                        <!-- KONSEP DASAR ILMU SEJARAH - DENGAN PENJELASAN DAN VIDEO -->
                        <div class="material-section">
                            <h5 class="highlight-text"><i class="bi bi-clock-history me-2"></i>Konsep Dasar Ilmu Sejarah</h5>
                            <p>Ilmu sejarah adalah ilmu yang mempelajari peristiwa-peristiwa penting di masa lalu. Unsur-unsur penting dalam sejarah adalah:</p>
                            
                            <div class="accordion accordion-flush" id="accordionSejarah">
                                <!-- Ruang -->
                                <div class="accordion-item card-modern shadow-sm">
                                    <h2 class="accordion-header" id="headingRuang">
                                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRuang" aria-expanded="false" aria-controls="collapseRuang">
                                            <i class="bi bi-geo-alt-fill me-3 text-primary"></i> Ruang (Dimensi Spasial)
                                        </button>
                                    </h2>
                                    <div id="collapseRuang" class="accordion-collapse collapse" aria-labelledby="headingRuang" data-bs-parent="#accordionSejarah">
                                        <div class="accordion-body">
                                            <p class="fw-semibold">Penjelasan:</p>
                                            <p>Unsur ini merujuk pada <strong>tempat terjadinya peristiwa sejarah</strong>. Lokasi (ruang) menjadi fokus karena setiap peristiwa terikat pada kondisi geografis dan lingkungan spesifik yang memengaruhi jalannya peristiwa. Analisis ruang membantu memahami konteks sosial dan fisik suatu kejadian.</p>
                                            <p class="mb-0"><small>Contoh: Revolusi Proklamasi terjadi di Jakarta, Pertempuran 10 November terjadi di Surabaya.</small></p>

                                            <div class="video-in-accordion">
                                                <p class="fw-semibold text-muted mb-2"><i class="bi bi-youtube me-1"></i> Video: Peran Ruang dalam Sejarah</p>
                                                <div class="video-container">
                                                    <!-- Contoh video Ruang -->
                                                    <iframe src="https://www.youtube.com/embed/nU2y1Z_p-fQ" title="Video Ruang dalam Sejarah" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Waktu -->
                                <div class="accordion-item card-modern shadow-sm">
                                    <h2 class="accordion-header" id="headingWaktu">
                                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWaktu" aria-expanded="false" aria-controls="collapseWaktu">
                                            <i class="bi bi-clock-fill me-3 text-success"></i> Waktu (Dimensi Temporal)
                                        </button>
                                    </h2>
                                    <div id="collapseWaktu" class="accordion-collapse collapse" aria-labelledby="headingWaktu" data-bs-parent="#accordionSejarah">
                                        <div class="accordion-body">
                                            <p class="fw-semibold">Penjelasan:</p>
                                            <p>Unsur ini berkaitan dengan <strong>kapan peristiwa itu terjadi</strong> (kronologi). Waktu adalah konsep dasar yang membedakan sejarah dari ilmu lain, memastikan adanya urutan kejadian (sebab-akibat) yang jelas. Sejarah mengenal konsep <strong>perubahan dan keberlanjutan</strong> seiring berjalannya waktu.</p>
                                            <p class="mb-0"><small>Contoh: Kemerdekaan Indonesia pada 17 Agustus 1945.</small></p>

                                            <div class="video-in-accordion">
                                                <p class="fw-semibold text-muted mb-2"><i class="bi bi-youtube me-1"></i> Video: Kronologi dan Periodisasi</p>
                                                <div class="video-container">
                                                    <!-- Contoh video Waktu -->
                                                    <iframe src="https://www.youtube.com/embed/5b-zRk_J32A" title="Video Waktu dalam Sejarah" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Manusia -->
                                <div class="accordion-item card-modern shadow-sm">
                                    <h2 class="accordion-header" id="headingManusia">
                                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseManusia" aria-expanded="false" aria-controls="collapseManusia">
                                            <i class="bi bi-people-fill me-3 text-warning"></i> Manusia (Aktor Sejarah)
                                        </button>
                                    </h2>
                                    <div id="collapseManusia" class="accordion-collapse collapse" aria-labelledby="headingManusia" data-bs-parent="#accordionSejarah">
                                        <div class="accordion-body">
                                            <p class="fw-semibold">Penjelasan:</p>
                                            <p>Manusia adalah <strong>pelaku utama atau subjek sekaligus objek sejarah</strong>. Tanpa manusia, tidak ada peristiwa sejarah. Peran manusia, baik sebagai individu maupun kelompok, sangat menentukan arah perubahan di masa lampau, yang kemudian dipelajari di masa kini.</p>
                                            <p class="mb-0"><small>Contoh: Tokoh proklamator, pahlawan daerah, masyarakat biasa yang berjuang di balik layar.</small></p>

                                            <div class="video-in-accordion">
                                                <p class="fw-semibold text-muted mb-2"><i class="bi bi-youtube me-1"></i> Video: Manusia Sebagai Penggerak Sejarah</p>
                                                <div class="video-container">
                                                    <!-- Contoh video Manusia -->
                                                    <iframe src="https://www.youtube.com/embed/0S4M7ZgK6lY" title="Video Manusia dalam Sejarah" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- AKHIR KONSEP DASAR ILMU SEJARAH -->
                        
                        <!-- Video Pembelajaran Umum -->
                        <div class="material-section">
                            <h5 class="highlight-text"><i class="bi bi-play-circle-fill me-2"></i> Video Pembelajaran Interaktif</h5>
                            <div class="video-container mb-4">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/XWElTXG_h64?si=_DbVMPhEwDcJ5ZBK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                            </div>
                            <div class="text-center">
                                <p class="text-muted mb-3">
                                    <i class="bi bi-info-circle-fill me-2"></i>
                                    Tonton video di atas untuk pemahaman yang lebih mendalam tentang kehidupan sosial dan lingkungan
                                </p>
                                <div class="d-flex justify-content-center gap-3">
                                    <span class="badge bg-primary">Geografi</span>
                                    <span class="badge bg-success">Sejarah</span>
                                    <span class="badge bg-warning">Ekonomi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar (Kearifan Lokal & Kuis) -->
            <div class="col-lg-4">
                <!-- Kearifan Lokal -->
                <div class="card p-0 local-wisdom-card fade-in">
                    <div class="card-header">
                        <i class="bi bi-mortarboard-fill me-2"></i> Kearifan Lokal Nusantara
                    </div>
                    <div class="card-body">
                        <p class="fw-semibold">Kearifan lokal di Indonesia sangat erat kaitannya dengan adaptasi terhadap alam dan kondisi lingkungan. Mari kita pelajari lebih dalam!</p>
                        
                        <div class="material-section">
                            <h6 class="highlight-text"><i class="bi bi-house-heart-fill me-2"></i>Kearifan Lokal Minangkabau</h6>
                            <p>Masyarakat Minangkabau memiliki pengetahuan tradisional dalam menghadapi bencana. Salah satu contohnya adalah arsitektur <strong class="highlight-text">Rumah Gadang</strong> yang tahan gempa.</p>
                            
                            <div class="alert alert-info">
                                <i class="bi bi-lightbulb-fill me-2"></i>
                                <strong>Fakta Menarik:</strong> Tiang-tiang Rumah Gadang tidak ditanam ke tanah, melainkan bertumpu pada batu datar dengan sambungan pasak tanpa paku!
                            </div>
                            
                            <p>Masyarakat juga memelihara hutan pantai dan mangrove sebagai mitigasi tsunami, serta memahami tanda-tanda alam seperti perilaku hewan yang aneh sebagai pertanda bencana.</p>
                        </div>
                        
                        <div class="video-container mt-4 position-relative" style="cursor:pointer;" id="rg-video-wrapper">
                            <img src="{{ asset('homepage/img/rumah gadang.jpg') }}" alt="Thumbnail Rumah Gadang" id="rg-video-thumb" style="width:100%;border-radius:15px;">
                            <button type="button" class="position-absolute top-50 start-50 translate-middle btn btn-light rounded-circle shadow" style="width:60px;height:60px;font-size:2rem;opacity:0.85;" id="rg-video-play">
                                <i class="bi bi-play-fill"></i>
                            </button>
                        </div>
                        <p class="text-center text-muted mt-2">
                            <i class="bi bi-camera-video-fill me-1"></i>
                            Video kearifan lokal: Arsitektur Rumah Gadang yang menawan
                        </p>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const wrapper = document.getElementById('rg-video-wrapper');
                                const playBtn = document.getElementById('rg-video-play');
                                const thumb = document.getElementById('rg-video-thumb');
                                function playVideo() {
                                    wrapper.innerHTML = `<video controls autoplay style="width:100%;border-radius:15px;">
                                        <source src="{{ asset('homepage/video/RG.mp4') }}" type="video/mp4">
                                        Browser Anda tidak mendukung video.
                                    </video>`;
                                }
                                playBtn.addEventListener('click', playVideo);
                                thumb.addEventListener('click', playVideo);
                            });
                        </script>
                    </div>
                </div>
                
                <!-- Kuis Interaktif -->
                <div class="card mt-4 p-0 quiz-card fade-in">
                    <div class="card-header">
                        <i class="bi bi-clipboard2-check-fill me-2"></i> Uji Pemahamanmu! 
                        <span class="badge bg-success float-end" id="questionCounter">1/5</span>
                    </div>
                    <div class="card-body">
                        <div id="quiz-container">
                            <!-- Soal kuis akan dimuat di sini oleh JavaScript -->
                        </div>
                        <div id="quiz-result" class="quiz-result"></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Progress Bar Animation
    window.addEventListener('scroll', () => {
        const scrolled = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
        document.getElementById('progressBar').style.width = scrolled + '%';
    });

    // Fade in animation for elements
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    document.querySelectorAll('.fade-in').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });

    // Data kuis dengan emoji dan penjelasan
    const quizData = [
        {
            question: "🗺️ Apa perbedaan antara lokasi absolut dan lokasi relatif?",
            options: [
                "Lokasi absolut tetap, lokasi relatif berubah-ubah",
                "Lokasi absolut ditentukan oleh GPS, lokasi relatif oleh peta", 
                "Lokasi absolut di darat, lokasi relatif di laut",
                "Tidak ada perbedaan"
            ],
            answer: "Lokasi absolut tetap, lokasi relatif berubah-ubah",
            explanation: "Lokasi absolut menggunakan koordinat tetap (lintang-bujur), sedangkan lokasi relatif dapat berubah tergantung kondisi sekitar."
        },
        {
            question: "🏛️ Mengapa arsitektur Rumah Gadang dianggap tahan gempa?",
            options: [
                "Karena terbuat dari beton",
                "Karena tiangnya ditanam sangat dalam",
                "Karena menggunakan pasak tanpa paku sehingga fleksibel",
                "Karena dibangun di dataran rendah"
            ],
            answer: "Karena menggunakan pasak tanpa paku sehingga fleksibel",
            explanation: "Sistem sambungan pasak tanpa paku membuat struktur bangunan lebih fleksibel saat terjadi guncangan gempa."
        },
        {
            question: "📚 Apa saja unsur-unsur penting dalam sejarah?",
            options: [
                "Ruang, Waktu, dan Manusia",
                "Manusia, Alam, dan Hewan",
                "Buku, Internet, dan Guru",
                "Masa Lalu, Masa Kini, dan Masa Depan"
            ],
            answer: "Ruang, Waktu, dan Manusia",
            explanation: "Ketiga unsur ini saling berkaitan dalam setiap peristiwa sejarah: di mana (ruang), kapan (waktu), dan siapa (manusia)."
        },
        {
            question: "🌊 Bagaimana cara masyarakat Minangkabau melakukan mitigasi tsunami?",
            options: [
                "Membangun tanggul laut",
                "Menanam hutan pantai dan mangrove",
                "Membuat terowongan bawah tanah",
                "Menyiapkan kapal cepat"
            ],
            answer: "Menanam hutan pantai dan mangrove",
            explanation: "Hutan pantai dan mangrove berfungsi sebagai peredam gelombang tsunami dan pelindung alami pantai."
        },
        {
            question: "⚡ Indonesia rentan terhadap bencana gempa bumi, tsunami, dan letusan gunung berapi karena...",
            options: [
                "Curah hujan yang tinggi",
                "Iklim tropis",
                "Dilalui dua jalur pegunungan dan pertemuan lempeng tektonik",
                "Wilayahnya yang luas"
            ],
            answer: "Dilalui dua jalur pegunungan dan pertemuan lempeng tektonik",
            explanation: "Indonesia berada di pertemuan tiga lempeng tektonik dan dilalui Ring of Fire, menjadikannya sangat aktif secara geologis."
        }
    ];

    let currentQuestionIndex = 0;
    let score = 0;
    let quizCompleted = false;
    let quizResultDiv = document.getElementById('quiz-result');
    let quizContainer = document.getElementById('quiz-container');
    let questionCounter = document.getElementById('questionCounter');

    function updateQuestionCounter() {
        questionCounter.textContent = `${currentQuestionIndex + 1}/${quizData.length}`;
        if (currentQuestionIndex === quizData.length) {
            questionCounter.textContent = `Selesai!`;
            questionCounter.className = 'badge bg-success float-end';
        }
    }

    function loadQuestion() {
        if (currentQuestionIndex < quizData.length) {
            const currentQuiz = quizData[currentQuestionIndex];
            quizContainer.innerHTML = `
                <div class="question-header mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="mb-0 text-primary">Pertanyaan ${currentQuestionIndex + 1}</h6>
                        <div class="progress" style="width: 100px; height: 8px;">
                            <div class="progress-bar bg-primary" style="width: ${((currentQuestionIndex + 1) / quizData.length) * 100}%"></div>
                        </div>
                    </div>
                    <p class="fw-bold fs-5 mb-4">${currentQuiz.question}</p>
                </div>
                <div class="options-container mb-4">
                    ${currentQuiz.options.map((option, index) => `
                        <div class="question-item" data-index="${index}" onclick="checkAnswer(this, '${currentQuiz.answer}', '${currentQuiz.explanation}')">
                            <div class="d-flex align-items-center">
                                <span class="badge bg-light text-dark me-3 fw-bold">${String.fromCharCode(65 + index)}</span>
                                <span>${option}</span>
                            </div>
                        </div>
                    `).join('')}
                </div>
            `;
            updateQuestionCounter();
            quizResultDiv.style.display = 'none';
        } else {
            showFinalResults();
        }
    }

    function checkAnswer(selectedElement, correctAnswer, explanation) {
        const selectedOption = selectedElement.textContent.trim();
        const options = document.querySelectorAll('.question-item');
        
        // Disable all options
        options.forEach(option => {
            option.style.pointerEvents = 'none';
            const optionText = option.textContent.trim();
            if (optionText.includes(correctAnswer)) {
                option.classList.add('correct-answer');
                option.innerHTML += ' <i class="bi bi-check-circle-fill text-success float-end"></i>';
            }
        });

        let isCorrect = selectedOption.includes(correctAnswer);
        
        if (isCorrect) {
            selectedElement.classList.add('correct-answer');
            score++;
            quizResultDiv.innerHTML = `
                <div class="alert alert-success">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    <strong>Benar! 🎉</strong>
                    <p class="mb-0 mt-2"><small>${explanation}</small></p>
                </div>
            `;
        } else {
            selectedElement.classList.add('wrong-answer');
            selectedElement.innerHTML += ' <i class="bi bi-x-circle-fill text-danger float-end"></i>';
            quizResultDiv.innerHTML = `
                <div class="alert alert-danger">
                    <i class="bi bi-x-circle-fill me-2"></i>
                    <strong>Kurang tepat! 😅</strong>
                    <p class="mb-1 mt-2">Jawaban yang benar: <strong>${correctAnswer}</strong></p>
                    <p class="mb-0"><small>${explanation}</small></p>
                </div>
            `;
        }
        
        quizResultDiv.style.display = 'block';
        
        // Show next button after a delay
        setTimeout(() => {
            const nextButton = document.createElement('button');
            nextButton.className = 'btn btn-check-answer d-block mt-3 w-100';
            nextButton.innerHTML = currentQuestionIndex < quizData.length - 1 ? 
                '<i class="bi bi-arrow-right me-2"></i>Soal Berikutnya' : 
                '<i class="bi bi-trophy-fill me-2"></i>Lihat Hasil Akhir';
            nextButton.onclick = nextQuestion;
            quizResultDiv.appendChild(nextButton);
        }, 1500);
    }

    function nextQuestion() {
        currentQuestionIndex++;
        loadQuestion();
    }

    function showFinalResults() {
        const percentage = Math.round((score / quizData.length) * 100);
        let resultMessage, resultClass, resultIcon, resultEmoji;
        
        if (percentage >= 80) {
            resultMessage = "Luar biasa! Anda telah menguasai materi dengan sangat baik!";
            resultClass = "alert-success";
            resultIcon = "bi-trophy-fill";
            resultEmoji = "🏆";
        } else if (percentage >= 60) {
            resultMessage = "Bagus! Anda sudah cukup memahami materi, terus belajar!";
            resultClass = "alert-info";
            resultIcon = "bi-award-fill";
            resultEmoji = "🎖️";
        } else {
            resultMessage = "Jangan menyerah! Mari pelajari materi sekali lagi.";
            resultClass = "alert-warning";
            resultIcon = "bi-arrow-repeat";
            resultEmoji = "💪";
        }

        quizContainer.innerHTML = `
            <div class="text-center">
                <div class="display-1 mb-3">${resultEmoji}</div>
                <h4 class="mb-4">Kuis Selesai!</h4>
                
                <div class="row mb-4">
                    <div class="col-4">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-3">
                            <h3 class="text-primary mb-1">${score}</h3>
                            <small class="text-muted">Benar</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="bg-danger bg-opacity-10 p-3 rounded-3">
                            <h3 class="text-danger mb-1">${quizData.length - score}</h3>
                            <small class="text-muted">Salah</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3">
                            <h3 class="text-success mb-1">${percentage}%</h3>
                            <small class="text-muted">Skor</small>
                        </div>
                    </div>
                </div>
                
                <div class="alert ${resultClass}">
                    <i class="${resultIcon} me-2"></i>
                    ${resultMessage}
                </div>
                
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" onclick="restartQuiz()">
                        <i class="bi bi-arrow-clockwise me-2"></i>Ulangi Kuis
                    </button>
                    <button class="btn btn-outline-secondary" onclick="scrollToTop()">
                        <i class="bi bi-arrow-up me-2"></i>Kembali ke Atas
                    </button>
                </div>
            </div>
        `;
        
        // Update question counter
        questionCounter.textContent = `${score}/${quizData.length}`;
        questionCounter.className = `badge ${percentage >= 60 ? 'bg-success' : 'bg-warning'} float-end`;
        
        // Hide quiz result div
        quizResultDiv.style.display = 'none';
        
        // Celebration animation
        setTimeout(() => {
            if (percentage >= 80) {
                createConfetti();
            }
        }, 500);
    }

    function restartQuiz() {
        currentQuestionIndex = 0;
        score = 0;
        quizCompleted = false;
        loadQuestion();
    }

    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function createConfetti() {
        // Simple confetti effect
        for (let i = 0; i < 50; i++) {
            setTimeout(() => {
                const confetti = document.createElement('div');
                confetti.style.position = 'fixed';
                confetti.style.left = Math.random() * 100 + 'vw';
                confetti.style.top = '-10px';
                confetti.style.width = '10px';
                confetti.style.height = '10px';
                confetti.style.backgroundColor = ['#ff6b6b', '#4ecdc4', '#45b7d1', '#96ceb4', '#ffeaa7'][Math.floor(Math.random() * 5)];
                confetti.style.zIndex = '10000';
                confetti.style.borderRadius = '50%';
                confetti.style.pointerEvents = 'none';
                confetti.style.animation = 'confetti-fall 3s linear forwards';
                document.body.appendChild(confetti);
                
                setTimeout(() => confetti.remove(), 3000);
            }, i * 50);
        }
    }

    // Add confetti animation CSS
    const style = document.createElement('style');
    style.textContent = `
        @keyframes confetti-fall {
            to {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);

    // Load first question on page load
    document.addEventListener('DOMContentLoaded', () => {
        loadQuestion();
        
        // Add smooth scroll behavior to all internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    });

    // Add some interactive animations
    document.addEventListener('mousemove', (e) => {
        const cursor = document.querySelector('.cursor');
        if (!cursor) {
            const newCursor = document.createElement('div');
            newCursor.className = 'cursor';
            newCursor.style.cssText = `
                position: fixed;
                width: 20px;
                height: 20px;
                background: radial-gradient(circle, rgba(102,126,234,0.3) 0%, transparent 70%);
                border-radius: 50%;
                pointer-events: none;
                z-index: 9999;
                transition: transform 0.1s ease;
            `;
            document.body.appendChild(newCursor);
        }
        
        const cursor2 = document.querySelector('.cursor');
        if (cursor2) {
            cursor2.style.left = e.clientX - 10 + 'px';
            cursor2.style.top = e.clientY - 10 + 'px';
        }
    });
</script>

</body>
</html>
