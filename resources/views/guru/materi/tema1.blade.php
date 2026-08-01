<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Materi Pembelajaran - Tema 1 (Guru)</title>
    
    <!-- Font Google modern -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Merriweather:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            /* PALET WARNA BARU - Lebih berani & segar */
            --bg-primary: #F0F4FF;
            --bg-secondary: #FFFFFF;
            --bg-gradient-start: #4F46E5;
            --bg-gradient-end: #7C3AED;
            --bg-gradient-light: linear-gradient(135deg, #EEF2FF 0%, #F5F3FF 100%);
            
            --text-primary: #1E1B4B;
            --text-secondary: #4B5563;
            --text-muted: #9CA3AF;
            
            --color-brand: #4F46E5;
            --color-brand-light: #818CF8;
            --color-brand-dark: #3730A3;
            --color-accent: #F59E0B;
            --color-accent-light: #FBBF24;
            --color-pink: #EC4899;
            --color-teal: #14B8A6;
            --color-red: #EF4444;
            --color-green: #10B981;
            
            --surface-white: #FFFFFF;
            --surface-glass: rgba(255, 255, 255, 0.7);
            --border-color: #E5E7EB;
            
            --shadow-sm: 0 1px 3px rgba(79, 70, 229, 0.06);
            --shadow-md: 0 4px 20px rgba(79, 70, 229, 0.08);
            --shadow-lg: 0 10px 40px rgba(79, 70, 229, 0.12);
            --shadow-xl: 0 20px 60px rgba(79, 70, 229, 0.15);
            
            --radius-sm: 8px;
            --radius-md: 16px;
            --radius-lg: 24px;
            --radius-xl: 32px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--bg-gradient-light);
            color: var(--text-primary);
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        /* Tipografi */
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Inter', sans-serif;
            font-weight: 800;
            letter-spacing: -0.03em;
            color: var(--text-primary);
        }

        p, li, .content-text {
            font-family: 'Merriweather', serif;
            font-size: 1.05rem;
            color: var(--text-secondary);
            line-height: 1.8;
        }

        .app-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* ====== TOPBAR ====== */
        .topbar {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(79, 70, 229, 0.08);
            padding: 0.75rem 0;
            position: sticky;
            top: 0;
            z-index: 1030;
            transition: all 0.3s ease;
        }

        .topbar-brand {
            font-weight: 900;
            font-size: 1.25rem;
            color: var(--color-brand);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .topbar-brand i {
            font-size: 1.5rem;
            background: linear-gradient(135deg, var(--color-brand), var(--color-pink));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-back {
            background: var(--bg-primary);
            border: none;
            padding: 0.5rem 1.25rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.875rem;
            color: var(--text-secondary);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-back:hover {
            background: var(--color-brand);
            color: white;
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        /* ====== HEADER ====== */
        .page-header {
            background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 50%, #EC4899 100%);
            padding: 5rem 0 4rem;
            position: relative;
            overflow: hidden;
            margin-bottom: 2.5rem;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
            border-radius: 50%;
            animation: float 20s ease-in-out infinite;
        }

        .page-header::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -5%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(236, 72, 153, 0.15) 0%, transparent 70%);
            border-radius: 50%;
            animation: float 25s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(30px, -30px) scale(1.1); }
        }

        .header-content {
            position: relative;
            z-index: 2;
            color: white;
        }

        .header-content h1 {
            color: white;
            font-size: 3.5rem;
            font-weight: 900;
            line-height: 1.15;
            margin-bottom: 1rem;
            text-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }

        .header-content .lead {
            font-family: 'Merriweather', serif;
            color: rgba(255,255,255,0.85);
            font-size: 1.2rem;
            max-width: 700px;
            line-height: 1.8;
        }

        .header-badge {
            display: inline-block;
            padding: 0.4rem 1.25rem;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: white;
            margin-bottom: 1.5rem;
        }

        .badge-tag-white {
            background: rgba(255,255,255,0.12);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.15);
            color: rgba(255,255,255,0.9);
            padding: 0.3rem 1rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 500;
            display: inline-block;
        }

        /* ====== ADMIN CONTROLS ====== */
        .admin-controls-card {
            background: var(--surface-white);
            border-radius: var(--radius-lg);
            padding: 1.5rem 2rem;
            box-shadow: var(--shadow-md);
            margin-bottom: 2.5rem;
            border: 1px solid rgba(79, 70, 229, 0.06);
            transition: all 0.3s ease;
        }

        .admin-controls-card:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(-2px);
        }

        .admin-title {
            font-weight: 800;
            font-size: 1.25rem;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .admin-title .badge-admin {
            background: linear-gradient(135deg, var(--color-brand), var(--color-pink));
            color: white;
            font-size: 0.65rem;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .filter-select {
            border: 2px solid var(--border-color);
            border-radius: 50px;
            padding: 0.4rem 2rem 0.4rem 1.25rem;
            background-color: var(--bg-primary);
            color: var(--text-primary);
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .filter-select:focus {
            border-color: var(--color-brand);
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
            outline: none;
        }

        .btn-add-materi {
            background: linear-gradient(135deg, var(--color-brand), var(--color-brand-dark));
            border: none;
            padding: 0.6rem 1.5rem;
            border-radius: 50px;
            font-weight: 700;
            color: white;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }

        .btn-add-materi:hover {
            transform: translateY(-2px) scale(1.02);
            box-shadow: var(--shadow-lg);
            color: white;
        }
        
        .btn-add-materi-sm {
            background: var(--bg-primary);
            color: var(--color-brand);
            border: 1px solid var(--color-brand-light);
            padding: 0.4rem 1rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.85rem;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            text-decoration: none;
        }
        
        .btn-add-materi-sm:hover {
            background: var(--color-brand);
            color: white;
        }

        /* ====== CONTENT CARD & BLOCKS ====== */
        .content-card {
            background: var(--surface-white);
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            box-shadow: var(--shadow-md);
            margin-bottom: 2rem;
            border: 1px solid rgba(79, 70, 229, 0.04);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            word-wrap: break-word;
        }

        .content-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--color-brand), var(--color-accent), var(--color-pink));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .content-card:hover::before { opacity: 1; }
        .content-card:hover { box-shadow: var(--shadow-lg); transform: translateY(-4px); }
        
        /* CSS KHUSUS NESTED CARD (Tambahan Guru) */
        .nested-card {
            background: #FFFFFF;
            border: 1px solid rgba(0,0,0,0.08);
            border-radius: var(--radius-md);
            padding: 1.5rem;
            margin-top: 1.25rem;
            position: relative;
            transition: all 0.2s ease;
            box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        }
        
        .nested-card:hover {
            border-color: var(--color-brand-light);
            box-shadow: var(--shadow-md);
        }
        
        .nested-card-title {
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
            border-bottom: 1px dashed var(--border-color);
            padding-bottom: 0.75rem;
        }
        
        .nested-card-title i { color: var(--color-brand); font-size: 1.25rem; }
        
        .nested-actions {
            position: absolute;
            top: 1.25rem;
            right: 1.5rem;
            display: flex;
            gap: 0.4rem;
        }

        .dynamic-content-title {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin: 0;
        }

        .dynamic-content-title i { color: var(--color-brand); font-size: 1.75rem; }

        .section-title {
            font-size: 1.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            padding-bottom: 0.75rem;
            border-bottom: 3px solid var(--bg-primary);
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: var(--text-primary);
        }

        .section-title i { color: var(--color-brand); font-size: 1.75rem; }

        .topic-block {
            margin-bottom: 3rem;
            padding: 1.5rem;
            background: var(--bg-primary);
            border-radius: var(--radius-md);
            border-left: 4px solid var(--color-brand);
        }

        .topic-block:last-child { margin-bottom: 0; }

        .topic-header { display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem; }

        .topic-icon {
            width: 56px;
            height: 56px;
            border-radius: var(--radius-md);
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(236, 72, 153, 0.1));
            color: var(--color-brand);
            display: flex; align-items: center; justify-content: center;
            font-size: 1.75rem; flex-shrink: 0;
        }

        .topic-title { font-size: 1.35rem; font-weight: 800; margin: 0; color: var(--text-primary); }

        .highlight-box {
            background: linear-gradient(135deg, #FEF3C7, #FDE68A);
            border-radius: var(--radius-md);
            padding: 1.5rem 2rem;
            margin: 1.5rem 0;
            border-left: 5px solid var(--color-accent);
            position: relative;
        }

        .highlight-box p { color: #78350F; font-family: 'Inter', sans-serif; font-weight: 600; margin: 0; }
        .highlight-box i { color: var(--color-accent); }

        /* ====== ACCORDION ====== */
        .custom-accordion { margin-top: 1.5rem; }
        
        .custom-accordion .accordion-item {
            border: none; border-radius: var(--radius-md) !important;
            margin-bottom: 0.75rem; overflow: hidden;
            box-shadow: var(--shadow-sm); background: white;
        }

        .custom-accordion .accordion-button {
            background: white; color: var(--text-primary);
            font-weight: 700; padding: 1.25rem 1.5rem;
            font-family: 'Inter', sans-serif; border: none; transition: all 0.3s ease;
        }

        .custom-accordion .accordion-button:not(.collapsed) {
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.05), rgba(236, 72, 153, 0.05));
            color: var(--color-brand); box-shadow: none;
        }

        .custom-accordion .accordion-button:focus { box-shadow: none; border-color: transparent; }
        .custom-accordion .accordion-button:hover { background: var(--bg-primary); }
        .custom-accordion .accordion-body {
            background: white; padding: 1.5rem; border-top: 1px solid var(--border-color);
        }

        /* ====== MEDIA & ATTACHMENTS ====== */
        .media-wrapper {
            border-radius: var(--radius-md); overflow: hidden;
            box-shadow: var(--shadow-md); margin: 1.5rem 0;
            background: #000; position: relative;
        }

        .ratio-16x9 { position: relative; width: 100%; padding-top: 56.25%; }
        .ratio-16x9 iframe, .ratio-16x9 video, .ratio-16x9 img {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0; object-fit: cover;
        }

        .attachment-box {
            background: var(--bg-primary); border: 1px solid rgba(0,0,0,0.05);
            border-radius: var(--radius-md); padding: 1rem;
            transition: all 0.3s ease; margin-bottom: 1rem; margin-top: 1rem;
            display: flex; flex-direction: column;
        }
        
        .attachment-box:hover { border-color: var(--color-brand); box-shadow: var(--shadow-md); }

        .document-iframe-container {
            border-radius: var(--radius-md); overflow: hidden;
            border: 1px solid var(--border-color); background: #f8fafc; width: 100%;
        }

        /* ====== SIDEBAR & WIDGET ====== */
        .sidebar-widget {
            background: var(--surface-white); border-radius: var(--radius-lg);
            padding: 2rem; box-shadow: var(--shadow-md);
            margin-bottom: 2rem; border: 1px solid rgba(79, 70, 229, 0.04);
            transition: all 0.3s ease;
        }

        .sidebar-widget:hover { box-shadow: var(--shadow-lg); transform: translateY(-2px); }

        .sidebar-widget.widget-quiz {
            background: linear-gradient(135deg, #FFFBEB, #FEF3C7);
            border: 2px solid rgba(245, 158, 11, 0.2);
        }

        .widget-title {
            font-size: 1.25rem; font-weight: 800; margin-bottom: 1.5rem;
            display: flex; align-items: center; gap: 0.75rem; color: var(--text-primary);
        }

        .widget-title i { color: var(--color-brand); }
        .widget-quiz .widget-title i { color: var(--color-accent); }

        .quiz-option {
            display: block; width: 100%; text-align: left;
            padding: 1rem 1.25rem; background: white;
            border: 2px solid var(--border-color); border-radius: var(--radius-md);
            margin-bottom: 0.75rem; font-family: 'Inter', sans-serif;
            font-size: 0.95rem; font-weight: 600; color: var(--text-primary);
            transition: all 0.3s ease; cursor: pointer;
        }

        .quiz-option:hover {
            border-color: var(--color-brand); background: var(--bg-primary);
            transform: translateX(6px); box-shadow: var(--shadow-sm);
        }

        .quiz-option.correct { background: #D1FAE5; border-color: var(--color-green); color: #065F46; }
        .quiz-option.wrong { background: #FEE2E2; border-color: var(--color-red); color: #991B1B; }

        .quiz-result-box {
            padding: 1.5rem; border-radius: var(--radius-md); margin-top: 1.5rem; font-family: 'Inter', sans-serif;
        }

        .btn-action {
            background: linear-gradient(135deg, var(--color-brand), var(--color-brand-dark));
            color: white; border: none; padding: 0.75rem 1.5rem;
            border-radius: 50px; font-weight: 700; transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
        }

        .btn-action:hover { transform: translateY(-2px); box-shadow: var(--shadow-lg); color: white; }

        /* Progress Bar */
        .reading-progress { position: fixed; top: 0; left: 0; width: 100%; height: 4px; background: transparent; z-index: 1040; }
        .reading-progress-bar { height: 100%; background: linear-gradient(90deg, var(--color-brand), var(--color-accent), var(--color-pink)); width: 0%; border-radius: 0 2px 2px 0; transition: width 0.1s ease; }

        /* Animations & Utilities */
        .font-inter { font-family: 'Inter', sans-serif !important; }
        .fade-in-up { opacity: 0; transform: translateY(30px); animation: fadeInUp 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        @keyframes fadeInUp { to { opacity: 1; transform: translateY(0); } }

        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }

        .wisdom-box {
            background: var(--bg-primary); padding: 1rem 1.25rem;
            border-radius: var(--radius-md); border-left: 4px solid var(--color-teal);
            margin: 1rem 0;
        }

        /* Responsive */
        @media (max-width: 991.98px) {
            .app-container { padding: 0 1.25rem; }
            .content-card { padding: 1.5rem; }
            .page-header { padding: 3rem 0; }
            .header-content h1 { font-size: 2.25rem; }
        }

        @media (max-width: 767.98px) {
            .header-content h1 { font-size: 1.75rem; }
            .topic-block { padding: 1rem; }
            .sidebar-widget { padding: 1.25rem; }
            .admin-title { font-size: 1.1rem; }
        }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: var(--bg-primary); }
        ::-webkit-scrollbar-thumb { background: linear-gradient(135deg, var(--color-brand), var(--color-pink)); border-radius: 50px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--color-brand-dark); }
    </style>
</head>
<body>

<div class="reading-progress">
    <div class="reading-progress-bar" id="progressBar"></div>
</div>

<nav class="topbar">
    <div class="app-container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="topbar-brand">
                <i class="bi bi-book-half"></i> LareKu
            </div>
            <!-- Menggunakan route versi guru -->
            <a href="{{ route('guru.materi.index') }}" class="btn-back text-decoration-none">
                <i class="bi bi-arrow-left"></i> Kembali ke Modul
            </a>
        </div>
    </div>
</nav>

<header class="page-header">
    <div class="app-container header-content">
        <span class="header-badge">
            <i class="bi bi-bookmark-star-fill me-2"></i>Materi Inti • Tema 1
        </span>
        <h1>Kehidupan Sosial dan Kondisi Lingkungan Sekitar</h1>
        <p class="lead">Mengenal lebih dekat lokasi tempat tinggal, interaksi antar ruang, dan bagaimana lingkungan membentuk kehidupan sosial masyarakat kita.</p>
        
        <div class="d-flex flex-wrap gap-3 mt-4">
            <span class="badge-tag-white"><i class="bi bi-geo-alt me-1"></i> Geografi</span>
            <span class="badge-tag-white"><i class="bi bi-people me-1"></i> Sosiologi</span>
        </div>
    </div>
</header>

<div class="content-wrapper" style="padding-bottom: 4rem;">
    <div class="app-container">
        
        <div class="admin-controls-card fade-in-up delay-1">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <div class="admin-title font-inter">
                        Tema 1
                        <span class="badge-admin">Mode Kelola</span>
                    </div>
                </div>
                {{-- <div class="col-12 col-md-8">
                    <div class="d-flex flex-column flex-md-row justify-content-md-end gap-3 align-items-md-center">
                        <div class="d-flex align-items-center gap-2">
                            <label class="fw-semibold text-secondary mb-0 font-inter" style="font-size:0.9rem; white-space: nowrap;">Filter Tema:</label>
                            <form action="{{ route('guru.materi.index') }}" method="GET" id="temaForm" class="m-0">
                                <select class="filter-select font-inter" name="tema" onchange="this.form.submit()">
                                    <option value="tema1" {{ request('tema')=='tema1' ? 'selected' : '' }}>Tema 1</option>
                                    <option value="tema2" {{ request('tema')=='tema2' ? 'selected' : '' }}>Tema 2</option>
                                    <option value="tema3" {{ request('tema')=='tema3' ? 'selected' : '' }}>Tema 3</option>
                                    <option value="tema4" {{ request('tema')=='tema4' ? 'selected' : '' }}>Tema 4</option>
                                </select>
                            </form>
                        </div>
                        <a href="{{ route('guru.materi.create') }}" class="btn-add-materi text-decoration-none font-inter">
                            <i class="fas fa-plus"></i> Tambah Bebas
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="row g-4 g-lg-5">
            <!-- Kolom Kiri: Materi Utama -->
            <div class="col-lg-8">
                
                @php
                    $materiLokasi = $materi->filter(function($item) { return \Illuminate\Support\Str::slug($item->subtema) == 'lokasi-tinggal'; });
                    $materiKoneksi = $materi->filter(function($item) { return \Illuminate\Support\Str::slug($item->subtema) == 'konektivitas'; });
                    $materiIklim = $materi->filter(function($item) { return \Illuminate\Support\Str::slug($item->subtema) == 'iklim'; });
                    $materiBencana = $materi->filter(function($item) { return \Illuminate\Support\Str::slug($item->subtema) == 'bencana'; });
                    $materiEkonomi = $materi->filter(function($item) { return \Illuminate\Support\Str::slug($item->subtema) == 'ekonomi'; });
                    $materiSosial = $materi->filter(function($item) { return \Illuminate\Support\Str::slug($item->subtema) == 'sosial'; });

                    $materiUmum = $materi->filter(function($item) {
                        $slug = \Illuminate\Support\Str::slug($item->subtema);
                        return !in_array($slug, ['lokasi-tinggal', 'konektivitas', 'iklim', 'bencana', 'ekonomi', 'sosial']);
                    });
                @endphp

                @if($materiUmum->count() > 0)
                <div class="mb-5 fade-in-up delay-2">
                    <h4 class="section-title text-muted mb-4 font-inter" style="font-size: 1.25rem; border-bottom: 2px dashed var(--border-color);">
                        <i class="bi bi-collection-play me-2"></i> Materi Pengantar Tambahan
                    </h4>
                    
                    @foreach($materiUmum as $item)
                    <div class="content-card mb-4">
                        <div class="d-flex justify-content-between align-items-start border-bottom pb-3 mb-4 flex-wrap gap-3">
                            <h4 class="dynamic-content-title">
                                <i class="bi bi-journal-text"></i> {{ $item->judul }}
                            </h4>
                            <div class="d-flex gap-2 flex-shrink-0">
                                <a href="{{ route('guru.materi.edit', $item->id) }}" class="btn btn-outline-warning btn-sm rounded-pill px-3 fw-bold d-flex align-items-center gap-1">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('guru.materi.destroy', $item->id) }}" method="POST" class="d-inline m-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-outline-danger btn-sm rounded-pill px-3 fw-bold d-flex align-items-center gap-1" onclick="showDeleteModal(this)">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </div>

                        @if($item->deskripsi)
                            <p class="fw-bold p-3 mb-4 rounded-3" style="background: var(--bg-primary); border-left: 4px solid var(--color-brand); font-family: 'Inter', sans-serif;">
                                {{ $item->deskripsi }}
                            </p>
                        @endif

                        <div class="content-text text-dark prose">
                            {!! $item->konten !!}
                        </div>
                        
                        {{-- Logika Penampil Media (Guru: Dengan Download) --}}
                        @if($item->mediaPendukung && $item->mediaPendukung->count() > 0)
                            <h6 class="fw-bold mb-3 mt-4 text-primary font-inter"><i class="bi bi-paperclip me-2"></i>Materi Tambahan (File)</h6>
                            @foreach($item->mediaPendukung as $media)
                                <div class="attachment-box p-3 mt-2">
                                    <div class="d-flex w-100 justify-content-between align-items-center flex-wrap gap-2">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="bg-white p-2 rounded-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                @if($media->jenis == 'pdf') <i class="bi bi-file-earmark-pdf-fill fs-4 text-danger"></i>
                                                @elseif($media->jenis == 'word') <i class="bi bi-file-earmark-word-fill fs-4 text-primary"></i>
                                                @elseif($media->jenis == 'ppt') <i class="bi bi-file-earmark-slides-fill fs-4 text-warning"></i>
                                                @elseif(in_array($media->jenis, ['video_upload', 'video_youtube'])) <i class="bi bi-play-circle-fill fs-4 text-success"></i>
                                                @else <i class="bi bi-file-earmark-fill fs-4 text-secondary"></i> @endif
                                            </div>
                                            <div>
                                                <h6 class="mb-0 fw-bold font-inter" style="font-size: 0.9rem;">{{ $media->judul }}</h6>
                                                <span class="badge bg-light text-secondary border mt-1 font-inter" style="font-size: 0.65rem;">{{ str_replace('_', ' ', $media->jenis) }}</span>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-primary btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem;">
                                                <i class="bi bi-eye me-1"></i> Buka File
                                            </button>
                                            @if($media->jenis != 'video_youtube')
                                            <a href="{{ asset('storage/'.$media->file) }}" target="_blank" download class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Unduh File">
                                                <i class="bi bi-cloud-arrow-down-fill"></i>
                                            </a>
                                            @endif
                                        </div>
                                    </div>

                                    <div id="preview{{ $media->id }}" class="collapse mt-3 w-100">
                                        @if($media->jenis == 'pdf')
                                            <div class="document-iframe-container shadow-sm" style="height: 400px;">
                                                <iframe src="{{ asset('storage/'.$media->file) }}" width="100%" height="100%" style="border: none;" allowfullscreen></iframe>
                                            </div>
                                        @elseif($media->jenis == 'word')
                                            <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2">
                                                <iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/'.$media->file)) }}&embedded=true" allowfullscreen style="border: none;"></iframe>
                                            </div>
                                            <div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;">
                                                <i class="bi bi-info-circle text-primary"></i> Pratinjau dokumen menggunakan Google Docs Viewer.
                                                <br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.
                                            </div>
                                        @elseif($media->jenis == 'ppt')
                                            <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2">
                                                <iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe>
                                            </div>
                                            <div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;">
                                                <i class="bi bi-info-circle text-primary"></i> Pratinjau dokumen menggunakan Microsoft Office Viewer.
                                                <br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.
                                            </div>
                                        @elseif($media->jenis == 'video_upload')
                                            <div class="document-iframe-container ratio ratio-16x9 bg-black shadow-sm">
                                                <video controls class="w-100 h-100 rounded-3"><source src="{{ asset('storage/'.$media->file) }}"></video>
                                            </div>
                                        @elseif($media->jenis == 'video_youtube')
                                            @php preg_match('/(?:youtube\.com.*v=|youtu\.be\/)([^&]+)/', $media->video_url, $match); @endphp
                                            @if(isset($match[1]))
                                                <div class="document-iframe-container ratio ratio-16x9 shadow-sm">
                                                    <iframe src="https://www.youtube.com/embed/{{ $match[1] }}" allowfullscreen style="border: none;"></iframe>
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    @endforeach
                </div>
                @endif
                
                <div class="content-card fade-in-up delay-3 pb-2">
                    <h4 class="section-title font-inter">
                        <i class="bi bi-stars"></i> Pembelajaran Interaktif
                    </h4>

                    <!-- ============================================== -->
                    <!-- TOPIK 1: Mengenal Lokasi Tinggal               -->
                    <!-- ============================================== -->
                    <div class="topic-block">
                        <div class="topic-header mb-3">
                            <div class="topic-icon"><i class="bi bi-house-door-fill"></i></div>
                            <h3 class="topic-title font-inter">Mengenal Lokasi Tinggal</h3>
                        </div>

                        <p>Pernahkah kamu mengirim titik <em>"Share Loc"</em> melalui WhatsApp kepada temanmu? Titik kordinat yang ada di dalam peta tersebut adalah bagian dari konsep lokasi. Dalam konteks budaya kita (Sumatera Barat), letak tempat tinggal kita sangat memengaruhi bagaimana cara kita hidup dan bertahan.</p>
                        
                        <p class="mb-4">Mari kita bedah letak wilayah Sumatera Barat ini dari dua kacamata yang berbeda: Letak Absolut (pasti) dan Letak Relatif (tergantung sekitarnya).</p>
                        
                        <div class="row g-4 mt-2 mb-4">
                            <div class="col-md-6">
                                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100">
                                    <h6 class="fw-bold text-brand mb-3 font-inter"><i class="bi bi-pin-map-fill me-2"></i>Lokasi Absolut</h6>
                                    <p class="text-secondary mb-0" style="font-size: 0.95rem;">Ini adalah alamat tetap bumi berdasarkan garis lintang dan bujur. Coba bayangkan wilayah Bonjol di Pasaman yang dilewati titik 0° (Garis Khatulistiwa). Karena tepat berada di sabuk ini, kampung kita selalu hangat, beriklim tropis, dan curah hujannya sangat bagus untuk bercocok tanam padi.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100">
                                    <h6 class="fw-bold text-accent mb-3 font-inter"><i class="bi bi-signpost-split-fill me-2"></i>Lokasi Relatif</h6>
                                    <p class="text-secondary mb-0" style="font-size: 0.95rem;">Ini adalah lokasi berdasarkan apa yang ada di sekelilingnya. Jika kita lihat peta, pesisir barat Sumatera langsung berhadapan dengan Samudera Hindia yang luas. Posisi "menghadap laut lepas" inilah yang membuat kota-kota seperti Padang dan Pariaman sangat ramai menjadi pelabuhan kapal dagang sejak zaman dahulu.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Mini Quiz Topik 1 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic1">
                            <h6 class="fw-bold text-brand mb-3 d-flex align-items-center gap-2 font-inter">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="text-dark fw-semibold mb-3 font-inter">Karena letaknya yang dilewati oleh garis khatulistiwa (0°), wilayah Sumatera Barat memiliki keuntungan secara Lokasi Absolut yaitu...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic1', 0, 0, this)">Memiliki iklim tropis yang subur untuk bertani</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic1', 1, 0, this)">Berhadapan langsung dengan Samudera Hindia</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic1', 2, 0, this)">Banyaknya jalur patahan tektonik</button>
                            </div>
                            <div id="mini-result-topic1" class="mt-3 p-3 rounded-3 bg-light border border-light font-inter" style="display: none; font-size: 0.9rem;"></div>
                        </div>

                        <!-- RUANG TAMBAHAN MATERI GURU (Nested Card) -->
                        <div class="mt-4 pt-3 border-top border-light">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="fw-bold text-secondary mb-0" style="font-size:0.85rem; letter-spacing:0.5px; text-transform:uppercase;"><i class="bi bi-journal-plus me-1"></i> Catatan Tambahan Topik 1</h6>
                                <a href="{{ route('guru.materi.create',['tema'=>'tema1', 'subtema'=>'lokasi-tinggal']) }}" class="btn-add-materi-sm">
                                    <i class="fas fa-plus"></i> Tambah Catatan
                                </a>
                            </div>

                            @foreach($materiLokasi as $item)
                            <div class="nested-card">
                                <div class="nested-actions">
                                    <a href="{{ route('guru.materi.edit',$item->id) }}" class="btn btn-warning btn-sm px-2 py-1"><i class="fas fa-edit fs-7"></i></a>
                                    <form action="{{ route('guru.materi.destroy',$item->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm px-2 py-1" onclick="showDeleteModal(this)"><i class="fas fa-trash fs-7"></i></button>
                                    </form>
                                </div>
                                <h5 class="nested-card-title"><i class="bi bi-bookmark-star"></i> {{ $item->judul }}</h5>
                                <div class="content-text text-dark prose fs-6">{!! $item->konten !!}</div>

                                {{-- Logika Penampil Media (Guru) --}}
                                @if($item->mediaPendukung && $item->mediaPendukung->count() > 0)
                                    <h6 class="fw-bold mb-3 mt-4 text-primary font-inter" style="font-size: 0.95rem;"><i class="bi bi-paperclip me-2"></i>Media Terlampir</h6>
                                    @foreach($item->mediaPendukung as $media)
                                        <div class="attachment-box p-3 mt-2">
                                            <div class="d-flex w-100 justify-content-between align-items-center flex-wrap gap-2">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="bg-white p-2 rounded-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                        @if($media->jenis == 'pdf') <i class="bi bi-file-earmark-pdf-fill fs-4 text-danger"></i>
                                                        @elseif($media->jenis == 'word') <i class="bi bi-file-earmark-word-fill fs-4 text-primary"></i>
                                                        @elseif($media->jenis == 'ppt') <i class="bi bi-file-earmark-slides-fill fs-4 text-warning"></i>
                                                        @elseif(in_array($media->jenis, ['video_upload', 'video_youtube'])) <i class="bi bi-play-circle-fill fs-4 text-success"></i>
                                                        @else <i class="bi bi-file-earmark-fill fs-4 text-secondary"></i> @endif
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 fw-bold font-inter" style="font-size: 0.9rem;">{{ $media->judul }}</h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-primary btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem;">
                                                        <i class="bi bi-eye me-1"></i> Buka File
                                                    </button>
                                                    @if($media->jenis != 'video_youtube')
                                                    <a href="{{ asset('storage/'.$media->file) }}" target="_blank" download class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Unduh File">
                                                        <i class="bi bi-cloud-arrow-down-fill"></i>
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>

                                            <div id="preview{{ $media->id }}" class="collapse mt-3 w-100">
                                                @if($media->jenis == 'pdf')
                                                    <div class="document-iframe-container shadow-sm" style="height: 400px;">
                                                        <iframe src="{{ asset('storage/'.$media->file) }}" width="100%" height="100%" style="border: none;" allowfullscreen></iframe>
                                                    </div>
                                                @elseif($media->jenis == 'word')
                                                    <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2">
                                                        <iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/'.$media->file)) }}&embedded=true" allowfullscreen style="border: none;"></iframe>
                                                    </div>
                                                    <div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;">
                                                        <i class="bi bi-info-circle text-primary"></i> Pratinjau dokumen menggunakan Google Docs Viewer.
                                                        <br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.
                                                    </div>
                                                @elseif($media->jenis == 'ppt')
                                                    <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2">
                                                        <iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe>
                                                    </div>
                                                    <div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;">
                                                        <i class="bi bi-info-circle text-primary"></i> Pratinjau dokumen menggunakan Microsoft Office Viewer.
                                                        <br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.
                                                    </div>
                                                @elseif($media->jenis == 'video_upload')
                                                    <div class="document-iframe-container ratio ratio-16x9 bg-black shadow-sm">
                                                        <video controls class="w-100 h-100 rounded-3"><source src="{{ asset('storage/'.$media->file) }}"></video>
                                                    </div>
                                                @elseif($media->jenis == 'video_youtube')
                                                    @php preg_match('/(?:youtube\.com.*v=|youtu\.be\/)([^&]+)/', $media->video_url, $match); @endphp
                                                    @if(isset($match[1]))
                                                        <div class="document-iframe-container ratio ratio-16x9 shadow-sm">
                                                            <iframe src="https://www.youtube.com/embed/{{ $match[1] }}" allowfullscreen style="border: none;"></iframe>
                                                        </div>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- ============================================== -->
                    <!-- TOPIK 2: Konektivitas Antarruang               -->
                    <!-- ============================================== -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon" style="background: rgba(20, 184, 166, 0.15); color: var(--color-teal);"><i class="bi bi-share-fill"></i></div>
                            <h3 class="topic-title font-inter">Konektivitas Antarruang</h3>
                        </div>
                        <p>Bayangkan kamu sedang bermain <em>game</em> atau <em>puzzle</em>, kamu butuh kerja sama orang lain untuk menyelesaikannya. Begitu juga dengan sebuah daerah. Tidak ada satu pun desa atau wilayah di dunia ini yang bisa menghasilkan semua kebutuhannya sendiri.</p>
                        
                        <p class="mb-4">Di Sumatera Barat, alam membagi masyarakat menjadi dua daerah yang sangat unik: Kawasan pegunungan yang sejuk (disebut <strong>Darek</strong> atau Luhak) dan kawasan pesisir pantai yang panas (disebut <strong>Pasisia</strong> atau Rantau). Orang gunung ahli bertani sayur dan beras, sedangkan orang pantai ahli mencari ikan laut. Karena saling membutuhkan hasil alam tersebut, maka terjadilah perdagangan dan interaksi (hubungan) di antara keduanya.</p>
                        
                        <div class="highlight-box mb-4">
                            <p><i class="bi bi-lightbulb-fill me-2 fs-5"></i><strong>Kenapa Orang Mau Berinteraksi (Konektivitas Ruang)?</strong><br>
                            <span class="mt-2 d-block text-secondary" style="font-family: 'Merriweather', serif; font-weight: normal; font-size: 0.95rem;">
                                <ul class="mb-0">
                                    <li><strong>Saling Melengkapi (Complementarity):</strong> Daerah gunung punya beras tapi butuh ikan. Daerah laut punya ikan tapi butuh beras. Mereka bertukar barang agar sama-sama kenyang.</li>
                                    <li><strong>Kesempatan Antara (Intervening Opportunity):</strong> Jika hasil panen cabai di daerah A gagal karena hama, maka pedagang otomatis akan mencari pasokan alternatif ke daerah B agar stok cabai di pasar tetap ada.</li>
                                    <li><strong>Kemudahan Transfer (Transferability):</strong> Zaman dulu pedagang ikan harus mendaki gunung berhari-hari. Sekarang, karena ada jalan raya aspal yang mulus (seperti jalan Lembah Anai), ikan segar bisa sampai di pegunungan dalam hitungan jam.</li>
                                </ul>
                            </span></p>
                        </div>

                        <!-- Mini Quiz Topik 2 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic2">
                            <h6 class="fw-bold text-teal mb-3 d-flex align-items-center gap-2 font-inter" style="color: var(--color-teal);">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="text-dark fw-semibold mb-3 font-inter">Interaksi dagang tradisional di mana wilayah <em>Darek</em> (pegunungan) mensuplai beras, sedangkan wilayah <em>Pasisia</em> (pesisir) mensuplai ikan laut, merupakan penerapan alasan interaksi bernama...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic2', 0, 1, this)">Intervening Opportunity (Kesempatan Antara)</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic2', 1, 1, this)">Complementarity (Saling Melengkapi)</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic2', 2, 1, this)">Transferability (Kemudahan Pemindahan)</button>
                            </div>
                            <div id="mini-result-topic2" class="mt-3 p-3 rounded-3 bg-light border border-light font-inter" style="display: none; font-size: 0.9rem;"></div>
                        </div>

                        <!-- RUANG TAMBAHAN MATERI GURU (Nested Card) -->
                        <div class="mt-4 pt-3 border-top border-light">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="fw-bold text-secondary mb-0" style="font-size:0.85rem; letter-spacing:0.5px; text-transform:uppercase;"><i class="bi bi-journal-plus me-1"></i> Catatan Tambahan Topik 2</h6>
                                <a href="{{ route('guru.materi.create',['tema'=>'tema1', 'subtema'=>'konektivitas']) }}" class="btn-add-materi-sm">
                                    <i class="fas fa-plus"></i> Tambah Catatan
                                </a>
                            </div>

                            @foreach($materiKoneksi as $item)
                            <div class="nested-card">
                                <div class="nested-actions">
                                    <a href="{{ route('guru.materi.edit',$item->id) }}" class="btn btn-warning btn-sm px-2 py-1"><i class="fas fa-edit fs-7"></i></a>
                                    <form action="{{ route('guru.materi.destroy',$item->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm px-2 py-1" onclick="showDeleteModal(this)"><i class="fas fa-trash fs-7"></i></button>
                                    </form>
                                </div>
                                <h5 class="nested-card-title"><i class="bi bi-bookmark-star"></i> {{ $item->judul }}</h5>
                                <div class="content-text text-dark prose fs-6">{!! $item->konten !!}</div>
                                
                                {{-- Logika Penampil Media (Guru) --}}
                                @if($item->mediaPendukung && $item->mediaPendukung->count() > 0)
                                    <h6 class="fw-bold mb-3 mt-4 text-primary font-inter" style="font-size: 0.95rem;"><i class="bi bi-paperclip me-2"></i>File & Media</h6>
                                    @foreach($item->mediaPendukung as $media)
                                        <div class="attachment-box p-3 mt-2">
                                            <div class="d-flex w-100 justify-content-between align-items-center flex-wrap gap-2">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="bg-white p-2 rounded-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                        @if($media->jenis == 'pdf') <i class="bi bi-file-earmark-pdf-fill fs-4 text-danger"></i>
                                                        @elseif($media->jenis == 'word') <i class="bi bi-file-earmark-word-fill fs-4 text-primary"></i>
                                                        @elseif($media->jenis == 'ppt') <i class="bi bi-file-earmark-slides-fill fs-4 text-warning"></i>
                                                        @elseif(in_array($media->jenis, ['video_upload', 'video_youtube'])) <i class="bi bi-play-circle-fill fs-4 text-success"></i>
                                                        @else <i class="bi bi-file-earmark-fill fs-4 text-secondary"></i> @endif
                                                    </div>
                                                    <div><h6 class="mb-0 fw-bold font-inter" style="font-size: 0.9rem;">{{ $media->judul }}</h6></div>
                                                </div>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-primary btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem;"><i class="bi bi-eye me-1"></i> Buka File</button>
                                                    @if($media->jenis != 'video_youtube')
                                                    <a href="{{ asset('storage/'.$media->file) }}" target="_blank" download class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Unduh File">
                                                        <i class="bi bi-cloud-arrow-down-fill"></i>
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div id="preview{{ $media->id }}" class="collapse mt-3 w-100">
                                                @if($media->jenis == 'pdf') <div class="document-iframe-container shadow-sm" style="height: 400px;"><iframe src="{{ asset('storage/'.$media->file) }}" width="100%" height="100%" style="border: none;" allowfullscreen></iframe></div>
                                                @elseif($media->jenis == 'word') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/'.$media->file)) }}&embedded=true" allowfullscreen style="border: none;"></iframe></div>
                                                    <div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau dokumen menggunakan Google Docs Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                @elseif($media->jenis == 'ppt') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe></div>
                                                    <div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau dokumen menggunakan Microsoft Office Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                @elseif($media->jenis == 'video_upload') <div class="document-iframe-container ratio ratio-16x9 bg-black shadow-sm"><video controls class="w-100 h-100 rounded-3"><source src="{{ asset('storage/'.$media->file) }}"></video></div>
                                                @elseif($media->jenis == 'video_youtube')
                                                    @php preg_match('/(?:youtube\.com.*v=|youtu\.be\/)([^&]+)/', $media->video_url, $match); @endphp
                                                    @if(isset($match[1])) <div class="document-iframe-container ratio ratio-16x9 shadow-sm"><iframe src="https://www.youtube.com/embed/{{ $match[1] }}" allowfullscreen style="border: none;"></iframe></div> @endif
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- ============================================== -->
                    <!-- TOPIK 3: Perubahan Iklim                       -->
                    <!-- ============================================== -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon" style="background: rgba(239, 68, 68, 0.15); color: var(--color-red);"><i class="bi bi-cloud-lightning-rain-fill"></i></div>
                            <h3 class="topic-title font-inter">Perubahan Iklim</h3>
                        </div>
                        <p>Akhir-akhir ini, apakah kamu merasa cuaca semakin sulit ditebak? Kadang panas terik luar biasa, lalu tiba-tiba turun hujan badai. Inilah yang disebut anomali cuaca akibat perubahan iklim global. Di wilayah yang memiliki banyak bukit dan lereng gunung aktif (seperti Gunung Marapi kita), cuaca esktrem ini menyimpan potensi bahaya besar.</p>
                        
                        <div class="accordion custom-accordion mb-4" id="accordionIklim">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIklim">
                                        <i class="bi bi-thermometer-sun me-2"></i> Dampak Hidrometeorologi (Iklim)
                                    </button>
                                </h2>
                                <div id="collapseIklim" class="accordion-collapse collapse" data-bs-parent="#accordionIklim">
                                    <div class="accordion-body">
                                        <p class="mb-2 text-dark font-inter fw-bold">Ini adalah jenis bencana yang dipicu langsung oleh aktivitas cuaca, air, dan suhu udara.</p>
                                        <p class="text-muted m-0" style="font-size: 0.95rem;">Bayangkan, ketika hujan turun dengan sangat deras tanpa henti di puncak gunung api. Air hujan tersebut akan bercampur dengan tumpukan abu vulkanik atau tanah longsoran dari penebangan liar. Campuran lumpur tebal yang meluncur deras dari atas gunung ini sangat mengerikan, dan masyarakat kita menyebutnya sebagai <strong>Galodo</strong> (banjir bandang/lahar dingin).</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mini Quiz Topik 3 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic3">
                            <h6 class="fw-bold text-red mb-3 d-flex align-items-center gap-2 font-inter" style="color: var(--color-red);">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="text-dark fw-semibold mb-3 font-inter">Bencana alam hidrometeorologi berupa banjir bandang besar bercampur lumpur atau lahar dingin yang sering merusak pemukiman di kawasan lereng gunung Sumatera Barat disebut...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic3', 0, 1, this)">Tsunami Pesisir</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic3', 1, 1, this)">Galodo (Banjir Bandang)</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic3', 2, 1, this)">Likuifaksi</button>
                            </div>
                            <div id="mini-result-topic3" class="mt-3 p-3 rounded-3 bg-light border border-light font-inter" style="display: none; font-size: 0.9rem;"></div>
                        </div>

                        <!-- RUANG TAMBAHAN MATERI GURU (Nested Card) -->
                        <div class="mt-4 pt-3 border-top border-light">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="fw-bold text-secondary mb-0" style="font-size:0.85rem; letter-spacing:0.5px; text-transform:uppercase;"><i class="bi bi-journal-plus me-1"></i> Catatan Tambahan Topik 3</h6>
                                <a href="{{ route('guru.materi.create',['tema'=>'tema1', 'subtema'=>'iklim']) }}" class="btn-add-materi-sm">
                                    <i class="fas fa-plus"></i> Tambah Catatan
                                </a>
                            </div>

                            @foreach($materiIklim as $item)
                            <div class="nested-card">
                                <div class="nested-actions">
                                    <a href="{{ route('guru.materi.edit',$item->id) }}" class="btn btn-warning btn-sm px-2 py-1"><i class="fas fa-edit fs-7"></i></a>
                                    <form action="{{ route('guru.materi.destroy',$item->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm px-2 py-1" onclick="showDeleteModal(this)"><i class="fas fa-trash fs-7"></i></button>
                                    </form>
                                </div>
                                <h5 class="nested-card-title"><i class="bi bi-bookmark-star"></i> {{ $item->judul }}</h5>
                                <div class="content-text text-dark prose fs-6">{!! $item->konten !!}</div>
                                
                                {{-- Logika Penampil Media (Guru) --}}
                                @if($item->mediaPendukung && $item->mediaPendukung->count() > 0)
                                    <h6 class="fw-bold mb-3 mt-4 text-primary font-inter" style="font-size: 0.95rem;"><i class="bi bi-paperclip me-2"></i>File & Media</h6>
                                    @foreach($item->mediaPendukung as $media)
                                        <div class="attachment-box p-3 mt-2">
                                            <div class="d-flex w-100 justify-content-between align-items-center flex-wrap gap-2">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="bg-white p-2 rounded-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                        @if($media->jenis == 'pdf') <i class="bi bi-file-earmark-pdf-fill fs-4 text-danger"></i>
                                                        @elseif($media->jenis == 'word') <i class="bi bi-file-earmark-word-fill fs-4 text-primary"></i>
                                                        @elseif($media->jenis == 'ppt') <i class="bi bi-file-earmark-slides-fill fs-4 text-warning"></i>
                                                        @elseif(in_array($media->jenis, ['video_upload', 'video_youtube'])) <i class="bi bi-play-circle-fill fs-4 text-success"></i>
                                                        @else <i class="bi bi-file-earmark-fill fs-4 text-secondary"></i> @endif
                                                    </div>
                                                    <div><h6 class="mb-0 fw-bold font-inter" style="font-size: 0.9rem;">{{ $media->judul }}</h6></div>
                                                </div>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-primary btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem;"><i class="bi bi-eye me-1"></i> Buka File</button>
                                                    @if($media->jenis != 'video_youtube')
                                                    <a href="{{ asset('storage/'.$media->file) }}" target="_blank" download class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Unduh File">
                                                        <i class="bi bi-cloud-arrow-down-fill"></i>
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div id="preview{{ $media->id }}" class="collapse mt-3 w-100">
                                                @if($media->jenis == 'pdf') <div class="document-iframe-container shadow-sm" style="height: 400px;"><iframe src="{{ asset('storage/'.$media->file) }}" width="100%" height="100%" style="border: none;" allowfullscreen></iframe></div>
                                                @elseif($media->jenis == 'word') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/'.$media->file)) }}&embedded=true" allowfullscreen style="border: none;"></iframe></div>
                                                    <div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau dokumen menggunakan Google Docs Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                @elseif($media->jenis == 'ppt') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe></div>
                                                    <div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau dokumen menggunakan Microsoft Office Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                @elseif($media->jenis == 'video_upload') <div class="document-iframe-container ratio ratio-16x9 bg-black shadow-sm"><video controls class="w-100 h-100 rounded-3"><source src="{{ asset('storage/'.$media->file) }}"></video></div>
                                                @elseif($media->jenis == 'video_youtube')
                                                    @php preg_match('/(?:youtube\.com.*v=|youtu\.be\/)([^&]+)/', $media->video_url, $match); @endphp
                                                    @if(isset($match[1])) <div class="document-iframe-container ratio ratio-16x9 shadow-sm"><iframe src="https://www.youtube.com/embed/{{ $match[1] }}" allowfullscreen style="border: none;"></iframe></div> @endif
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- ============================================== -->
                    <!-- TOPIK 4: Bencana Alam                          -->
                    <!-- ============================================== -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon" style="background: rgba(16, 185, 129, 0.15); color: var(--color-green);"><i class="bi bi-tsunami"></i></div>
                            <h3 class="topic-title font-inter">Bencana Alam (Geologis)</h3>
                        </div>
                        <p>Selain ancaman cuaca, tanah tempat kita berpijak juga menyimpan kejutan. Berdasarkan geologi (ilmu tentang bebatuan bumi), daratan pulau Sumatera ini berdiri tepat di atas zona patahan layaknya retakan pada kaca.</p>
                        
                        <p class="mb-4">Orang-orang Minangkabau zaman dahulu sudah memikirkan hal ini sehingga melahirkan falsafah hidup <em>"Alam Takambang Jadi Guru"</em> (Belajar dari kejadian di alam). Oleh karena itu, kita diajarkan untuk cerdik dan selalu siap siaga.</p>
                        
                        <div class="accordion custom-accordion mb-4" id="accordionBencanaAlam">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGeologi">
                                        <i class="bi bi-activity me-2"></i> Mengenal Sesar Semangko & Megathrust
                                    </button>
                                </h2>
                                <div id="collapseGeologi" class="accordion-collapse collapse" data-bs-parent="#accordionBencanaAlam">
                                    <div class="accordion-body">
                                        <p class="mb-2 text-dark font-inter fw-bold">Ini adalah bahaya yang datang murni dari dorongan dari dalam lapisan bumi.</p>
                                        <p class="text-muted m-0" style="font-size: 0.95rem;">Kulit bumi kita ini seperti potongan-potongan balok raksasa yang saling bergesekan. Di daratan Sumatera, kita diiris oleh patahan tanah raksasa bernama <strong>Sesar Semangko</strong> (jika bergeser akan menyebabkan gempa darat). Sedangkan di lautan lepas pantai barat (daerah Mentawai), terdapat zona tumbukan raksasa bernama <strong>Megathrust</strong> yang menyimpan potensi memicu gelombang tsunami besar.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mini Quiz Topik 4 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic4">
                            <h6 class="fw-bold text-green mb-3 d-flex align-items-center gap-2 font-inter" style="color: var(--color-green);">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="text-dark fw-semibold mb-3 font-inter">Ancaman bencana murni dari dalam bumi di wilayah Sumatera Barat yang berasal dari aktivitas patahan Semangko (di darat) dan Megathrust (di laut) dikategorikan sebagai bencana jenis...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic4', 0, 1, this)">Hidrometeorologi</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic4', 1, 1, this)">Geologis (Tektonik)</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic4', 2, 1, this)">Klimatologis</button>
                            </div>
                            <div id="mini-result-topic4" class="mt-3 p-3 rounded-3 bg-light border border-light font-inter" style="display: none; font-size: 0.9rem;"></div>
                        </div>

                        <!-- RUANG TAMBAHAN MATERI GURU (Nested Card) -->
                        <div class="mt-4 pt-3 border-top border-light">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="fw-bold text-secondary mb-0" style="font-size:0.85rem; letter-spacing:0.5px; text-transform:uppercase;"><i class="bi bi-journal-plus me-1"></i> Catatan Tambahan Topik 4</h6>
                                <a href="{{ route('guru.materi.create',['tema'=>'tema1', 'subtema'=>'bencana']) }}" class="btn-add-materi-sm">
                                    <i class="fas fa-plus"></i> Tambah Catatan
                                </a>
                            </div>

                            @foreach($materiBencana as $item)
                            <div class="nested-card">
                                <div class="nested-actions">
                                    <a href="{{ route('guru.materi.edit',$item->id) }}" class="btn btn-warning btn-sm px-2 py-1"><i class="fas fa-edit fs-7"></i></a>
                                    <form action="{{ route('guru.materi.destroy',$item->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm px-2 py-1" onclick="showDeleteModal(this)"><i class="fas fa-trash fs-7"></i></button>
                                    </form>
                                </div>
                                <h5 class="nested-card-title"><i class="bi bi-bookmark-star"></i> {{ $item->judul }}</h5>
                                <div class="content-text text-dark prose fs-6">{!! $item->konten !!}</div>
                                
                                {{-- Logika Penampil Media (Guru) --}}
                                @if($item->mediaPendukung && $item->mediaPendukung->count() > 0)
                                    <h6 class="fw-bold mb-3 mt-4 text-primary font-inter" style="font-size: 0.95rem;"><i class="bi bi-paperclip me-2"></i>File & Media</h6>
                                    @foreach($item->mediaPendukung as $media)
                                        <div class="attachment-box p-3 mt-2">
                                            <div class="d-flex w-100 justify-content-between align-items-center flex-wrap gap-2">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="bg-white p-2 rounded-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                        @if($media->jenis == 'pdf') <i class="bi bi-file-earmark-pdf-fill fs-4 text-danger"></i>
                                                        @elseif($media->jenis == 'word') <i class="bi bi-file-earmark-word-fill fs-4 text-primary"></i>
                                                        @elseif($media->jenis == 'ppt') <i class="bi bi-file-earmark-slides-fill fs-4 text-warning"></i>
                                                        @elseif(in_array($media->jenis, ['video_upload', 'video_youtube'])) <i class="bi bi-play-circle-fill fs-4 text-success"></i>
                                                        @else <i class="bi bi-file-earmark-fill fs-4 text-secondary"></i> @endif
                                                    </div>
                                                    <div><h6 class="mb-0 fw-bold font-inter" style="font-size: 0.9rem;">{{ $media->judul }}</h6></div>
                                                </div>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-primary btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem;"><i class="bi bi-eye me-1"></i> Buka File</button>
                                                    @if($media->jenis != 'video_youtube')
                                                    <a href="{{ asset('storage/'.$media->file) }}" target="_blank" download class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Unduh File">
                                                        <i class="bi bi-cloud-arrow-down-fill"></i>
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div id="preview{{ $media->id }}" class="collapse mt-3 w-100">
                                                @if($media->jenis == 'pdf') <div class="document-iframe-container shadow-sm" style="height: 400px;"><iframe src="{{ asset('storage/'.$media->file) }}" width="100%" height="100%" style="border: none;" allowfullscreen></iframe></div>
                                                @elseif($media->jenis == 'word') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/'.$media->file)) }}&embedded=true" allowfullscreen style="border: none;"></iframe></div>
                                                    <div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau dokumen menggunakan Google Docs Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                @elseif($media->jenis == 'ppt') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe></div>
                                                    <div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau dokumen menggunakan Microsoft Office Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                @elseif($media->jenis == 'video_upload') <div class="document-iframe-container ratio ratio-16x9 bg-black shadow-sm"><video controls class="w-100 h-100 rounded-3"><source src="{{ asset('storage/'.$media->file) }}"></video></div>
                                                @elseif($media->jenis == 'video_youtube')
                                                    @php preg_match('/(?:youtube\.com.*v=|youtu\.be\/)([^&]+)/', $media->video_url, $match); @endphp
                                                    @if(isset($match[1])) <div class="document-iframe-container ratio ratio-16x9 shadow-sm"><iframe src="https://www.youtube.com/embed/{{ $match[1] }}" allowfullscreen style="border: none;"></iframe></div> @endif
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- ============================================== -->
                    <!-- TOPIK 5: Kegiatan Ekonomi                      -->
                    <!-- ============================================== -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon" style="background: rgba(245, 158, 11, 0.15); color: var(--color-accent);"><i class="bi bi-cash-coin"></i></div>
                            <h3 class="topic-title font-inter">Kegiatan Ekonomi: Tradisi Marantau</h3>
                        </div>
                        <p>Setiap daerah punya cara unik untuk mencari uang. Di daerah kita, ada adat yang mengatur bahwa laki-laki (pemuda) tidak diutamakan untuk mewarisi harta pusaka kaumnya seperti tanah, sawah, atau Rumah Gadang. Warisan tersebut diberikan kepada kaum perempuan.</p>
                        
                        <p class="mb-4">Karena tidak punya "sawah untuk digarap", para pria Minang melahirkan sebuah tradisi mental baja yang luar biasa: <strong>Marantau</strong>. Sejak muda, mereka pergi merantau jauh meninggalkan kampung halamannya (bahkan menyeberangi pulau) untuk berdagang jualan pakaian, membuka restoran Padang, atau bersekolah tinggi hingga sukses sebelum nantinya kembali ke kampung halaman untuk membangun nagari.</p>
                        
                        <div class="row g-3 mt-3 mb-4">
                            <div class="col-md-6">
                                <div class="p-4 rounded-4 bg-white shadow-sm h-100 border-2 border-start border-success" style="border-left-width: 4px !important; text-align: center;">
                                    <i class="bi bi-truck fs-2 text-success mb-2 d-block"></i>
                                    <h6 class="fw-bold font-inter">Peran Distribusi (Menyalurkan Barang)</h6>
                                    <p class="mb-0 text-muted" style="font-size: 0.95rem;">Tradisi Marantau ini membuat orang Minang sangat hebat dalam ilmu distribusi. Mereka membuka jaringan toko perantau Minang yang solid untuk memastikan komoditas dagangan terjual hingga ke pelosok nusantara.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Mini Quiz Topik 5 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic5">
                            <h6 class="fw-bold text-accent mb-3 d-flex align-items-center gap-2 font-inter" style="color: var(--color-accent);">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="text-dark fw-semibold mb-3 font-inter">Tradisi tangguh pergi meninggalkan kampung halaman untuk mencari penghidupan, berdagang, dan menuntut ilmu yang menjadi motor ekonomi bagi pria Minangkabau disebut tradisi...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic5', 0, 1, this)">Turun Mandi</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic5', 1, 1, this)">Marantau</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic5', 2, 1, this)">Batagak Pangulu</button>
                            </div>
                            <div id="mini-result-topic5" class="mt-3 p-3 rounded-3 bg-light border border-light font-inter" style="display: none; font-size: 0.9rem;"></div>
                        </div>

                        <!-- RUANG TAMBAHAN MATERI GURU (Nested Card) -->
                        <div class="mt-4 pt-3 border-top border-light">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="fw-bold text-secondary mb-0" style="font-size:0.85rem; letter-spacing:0.5px; text-transform:uppercase;"><i class="bi bi-journal-plus me-1"></i> Catatan Tambahan Topik 5</h6>
                                <a href="{{ route('guru.materi.create',['tema'=>'tema1', 'subtema'=>'ekonomi']) }}" class="btn-add-materi-sm">
                                    <i class="fas fa-plus"></i> Tambah Catatan
                                </a>
                            </div>

                            @foreach($materiEkonomi as $item)
                            <div class="nested-card">
                                <div class="nested-actions">
                                    <a href="{{ route('guru.materi.edit',$item->id) }}" class="btn btn-warning btn-sm px-2 py-1"><i class="fas fa-edit fs-7"></i></a>
                                    <form action="{{ route('guru.materi.destroy',$item->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm px-2 py-1" onclick="showDeleteModal(this)"><i class="fas fa-trash fs-7"></i></button>
                                    </form>
                                </div>
                                <h5 class="nested-card-title"><i class="bi bi-bookmark-star"></i> {{ $item->judul }}</h5>
                                <div class="content-text text-dark prose fs-6">{!! $item->konten !!}</div>
                                
                                {{-- Logika Penampil Media (Guru) --}}
                                @if($item->mediaPendukung && $item->mediaPendukung->count() > 0)
                                    <h6 class="fw-bold mb-3 mt-4 text-primary font-inter" style="font-size: 0.95rem;"><i class="bi bi-paperclip me-2"></i>File & Media</h6>
                                    @foreach($item->mediaPendukung as $media)
                                        <div class="attachment-box p-3 mt-2">
                                            <div class="d-flex w-100 justify-content-between align-items-center flex-wrap gap-2">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="bg-white p-2 rounded-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                        @if($media->jenis == 'pdf') <i class="bi bi-file-earmark-pdf-fill fs-4 text-danger"></i>
                                                        @elseif($media->jenis == 'word') <i class="bi bi-file-earmark-word-fill fs-4 text-primary"></i>
                                                        @elseif($media->jenis == 'ppt') <i class="bi bi-file-earmark-slides-fill fs-4 text-warning"></i>
                                                        @elseif(in_array($media->jenis, ['video_upload', 'video_youtube'])) <i class="bi bi-play-circle-fill fs-4 text-success"></i>
                                                        @else <i class="bi bi-file-earmark-fill fs-4 text-secondary"></i> @endif
                                                    </div>
                                                    <div><h6 class="mb-0 fw-bold font-inter" style="font-size: 0.9rem;">{{ $media->judul }}</h6></div>
                                                </div>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-primary btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem;"><i class="bi bi-eye me-1"></i> Buka File</button>
                                                    @if($media->jenis != 'video_youtube')
                                                    <a href="{{ asset('storage/'.$media->file) }}" target="_blank" download class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Unduh File">
                                                        <i class="bi bi-cloud-arrow-down-fill"></i>
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div id="preview{{ $media->id }}" class="collapse mt-3 w-100">
                                                @if($media->jenis == 'pdf') <div class="document-iframe-container shadow-sm" style="height: 400px;"><iframe src="{{ asset('storage/'.$media->file) }}" width="100%" height="100%" style="border: none;" allowfullscreen></iframe></div>
                                                @elseif($media->jenis == 'word') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/'.$media->file)) }}&embedded=true" allowfullscreen style="border: none;"></iframe></div>
                                                    <div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau dokumen menggunakan Google Docs Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                @elseif($media->jenis == 'ppt') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe></div>
                                                    <div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau dokumen menggunakan Microsoft Office Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                @elseif($media->jenis == 'video_upload') <div class="document-iframe-container ratio ratio-16x9 bg-black shadow-sm"><video controls class="w-100 h-100 rounded-3"><source src="{{ asset('storage/'.$media->file) }}"></video></div>
                                                @elseif($media->jenis == 'video_youtube')
                                                    @php preg_match('/(?:youtube\.com.*v=|youtu\.be\/)([^&]+)/', $media->video_url, $match); @endphp
                                                    @if(isset($match[1])) <div class="document-iframe-container ratio ratio-16x9 shadow-sm"><iframe src="https://www.youtube.com/embed/{{ $match[1] }}" allowfullscreen style="border: none;"></iframe></div> @endif
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- ============================================== -->
                    <!-- TOPIK 6: Interaksi Sosial                      -->
                    <!-- ============================================== -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon" style="background: rgba(236, 72, 153, 0.15); color: var(--color-pink);"><i class="bi bi-people-fill"></i></div>
                            <h3 class="topic-title font-inter">Interaksi Sosial & Musyawarah</h3>
                        </div>
                        <p>Setiap hari di sekolah, kamu berinteraksi dengan guru dan teman-teman sekelas, baik itu saling menolong (asosiatif) maupun terkadang berselisih paham saat bermain bola (disosiatif).</p>
                        
                        <p class="mb-4 text-secondary">Dalam budaya masyarakat kita, ada dua pondasi utama dalam mengatur cara orang Minangkabau hidup bermasyarakat agar damai:</p>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="p-4 bg-white rounded-4 border border-light shadow-sm h-100">
                                    <h6 class="fw-bold font-inter" style="color: var(--color-pink);"><i class="bi bi-bezier2 me-2"></i>Sistem Matrilineal</h6>
                                    <p class="text-muted mb-0 mt-2" style="font-size: 0.95rem;">Adalah garis keturunan menurut pihak ibu. Jika ibu bersuku Piliang, maka anak otomatis bersuku Piliang. Pengelolaan harta peninggalan nenek moyang juga dikelola oleh para perempuan secara musyawarah.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-4 bg-white rounded-4 border border-light shadow-sm h-100">
                                    <h6 class="fw-bold font-inter" style="color: var(--color-purple);"><i class="bi bi-people-fill me-2"></i>Musyawarah Mufakat</h6>
                                    <p class="text-muted mb-0 mt-2" style="font-size: 0.95rem;">Orang Minang memegang prinsip kesetaraan, tidak ada raja yang mendikte semena-mena. Semua masalah diselesaikan dengan duduk bersama mencari solusi terbaik (<em>Bulek kato dek mufakat</em>).</p>
                                </div>
                            </div>
                        </div>

                        <!-- Mini Quiz Topik 6 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic6">
                            <h6 class="fw-bold text-pink mb-3 d-flex align-items-center gap-2 font-inter" style="color: var(--color-pink);">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="text-dark fw-semibold mb-3 font-inter">Sistem kekerabatan masyarakat Minangkabau yang menarik garis keturunan dan perwalian harta pusaka melalui jalur ibu disebut dengan sistem kekerabatan...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic6', 0, 0, this)">Matrilineal</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic6', 1, 0, this)">Patrilineal</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic6', 2, 0, this)">Bilateral</button>
                            </div>
                            <div id="mini-result-topic6" class="mt-3 p-3 rounded-3 bg-light border border-light font-inter" style="display: none; font-size: 0.9rem;"></div>
                        </div>

                        <!-- RUANG TAMBAHAN MATERI GURU (Nested Card) -->
                        <div class="mt-4 pt-3 border-top border-light">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="fw-bold text-secondary mb-0" style="font-size:0.85rem; letter-spacing:0.5px; text-transform:uppercase;"><i class="bi bi-journal-plus me-1"></i> Catatan Tambahan Topik 6</h6>
                                <a href="{{ route('guru.materi.create',['tema'=>'tema1', 'subtema'=>'sosial']) }}" class="btn-add-materi-sm">
                                    <i class="fas fa-plus"></i> Tambah Catatan
                                </a>
                            </div>

                            @foreach($materiSosial as $item)
                            <div class="nested-card">
                                <div class="nested-actions">
                                    <a href="{{ route('guru.materi.edit',$item->id) }}" class="btn btn-warning btn-sm px-2 py-1"><i class="fas fa-edit fs-7"></i></a>
                                    <form action="{{ route('guru.materi.destroy',$item->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm px-2 py-1" onclick="showDeleteModal(this)"><i class="fas fa-trash fs-7"></i></button>
                                    </form>
                                </div>
                                <h5 class="nested-card-title"><i class="bi bi-bookmark-star"></i> {{ $item->judul }}</h5>
                                <div class="content-text text-dark prose fs-6">{!! $item->konten !!}</div>
                                
                                {{-- Logika Penampil Media (Guru) --}}
                                @if($item->mediaPendukung && $item->mediaPendukung->count() > 0)
                                    <h6 class="fw-bold mb-3 mt-4 text-primary font-inter" style="font-size: 0.95rem;"><i class="bi bi-paperclip me-2"></i>File & Media</h6>
                                    @foreach($item->mediaPendukung as $media)
                                        <div class="attachment-box p-3 mt-2">
                                            <div class="d-flex w-100 justify-content-between align-items-center flex-wrap gap-2">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="bg-white p-2 rounded-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                        @if($media->jenis == 'pdf') <i class="bi bi-file-earmark-pdf-fill fs-4 text-danger"></i>
                                                        @elseif($media->jenis == 'word') <i class="bi bi-file-earmark-word-fill fs-4 text-primary"></i>
                                                        @elseif($media->jenis == 'ppt') <i class="bi bi-file-earmark-slides-fill fs-4 text-warning"></i>
                                                        @elseif(in_array($media->jenis, ['video_upload', 'video_youtube'])) <i class="bi bi-play-circle-fill fs-4 text-success"></i>
                                                        @else <i class="bi bi-file-earmark-fill fs-4 text-secondary"></i> @endif
                                                    </div>
                                                    <div><h6 class="mb-0 fw-bold font-inter" style="font-size: 0.9rem;">{{ $media->judul }}</h6></div>
                                                </div>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-primary btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem;"><i class="bi bi-eye me-1"></i> Buka File</button>
                                                    @if($media->jenis != 'video_youtube')
                                                    <a href="{{ asset('storage/'.$media->file) }}" target="_blank" download class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Unduh File">
                                                        <i class="bi bi-cloud-arrow-down-fill"></i>
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div id="preview{{ $media->id }}" class="collapse mt-3 w-100">
                                                @if($media->jenis == 'pdf') <div class="document-iframe-container shadow-sm" style="height: 400px;"><iframe src="{{ asset('storage/'.$media->file) }}" width="100%" height="100%" style="border: none;" allowfullscreen></iframe></div>
                                                @elseif($media->jenis == 'word') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/'.$media->file)) }}&embedded=true" allowfullscreen style="border: none;"></iframe></div>
                                                    <div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau dokumen menggunakan Google Docs Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                @elseif($media->jenis == 'ppt') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe></div>
                                                    <div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau dokumen menggunakan Microsoft Office Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                @elseif($media->jenis == 'video_upload') <div class="document-iframe-container ratio ratio-16x9 bg-black shadow-sm"><video controls class="w-100 h-100 rounded-3"><source src="{{ asset('storage/'.$media->file) }}"></video></div>
                                                @elseif($media->jenis == 'video_youtube')
                                                    @php preg_match('/(?:youtube\.com.*v=|youtu\.be\/)([^&]+)/', $media->video_url, $match); @endphp
                                                    @if(isset($match[1])) <div class="document-iframe-container ratio ratio-16x9 shadow-sm"><iframe src="https://www.youtube.com/embed/{{ $match[1] }}" allowfullscreen style="border: none;"></iframe></div> @endif
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Sidebar -->
            <div class="col-lg-4">
                
                <!-- Widget Kearifan Lokal -->
                <div class="sidebar-widget fade-in-up delay-2">
                    <h5 class="widget-title font-inter">
                        <i class="bi bi-flower1" style="color: var(--color-teal);"></i> Kearifan Lokal
                    </h5>
                    <p class="text-secondary mb-3 font-inter" style="font-size: 0.95rem;">Adaptasi masyarakat tradisional terhadap kondisi alam dan potensi bencana di lingkungannya.</p>
                    
                    <h6 class="fw-bold fs-6 font-inter mt-4">Arsitektur Rumah Gadang</h6>
                    <p class="text-secondary font-inter" style="font-size: 0.95rem;">Masyarakat Minangkabau membangun Rumah Gadang dengan struktur adaptif terhadap gempa bumi. Tiang utama tidak ditanam ke tanah, melainkan dialaskan pada batu datar agar tahan guncangan.</p>
                    
                    <div class="wisdom-box">
                        <p class="mb-0 fw-semibold font-inter" style="color: #0F766E; font-size: 0.95rem;">
                            <i class="bi bi-info-circle me-2"></i>
                            Tahu kah kamu? Sistem konstruksi ini menggunakan paku berupa pasak kayu asli, membuatnya lentur seperti ayunan saat dilanda gempa darat besar.
                        </p>
                    </div>

                    <div class="position-relative rounded-4 overflow-hidden shadow-sm mt-3 border border-light" id="rg-video-wrapper" style="cursor: pointer;">
                        <img src="{{ asset('homepage/img/rumah gadang.jpg') }}" alt="Rumah Gadang" id="rg-video-thumb" class="img-fluid w-100" style="min-height: 180px; object-fit: cover;" onerror="this.src='https://placehold.co/600x400/4F46E5/FFFFFF?text=Simulasi+Gempa+Rumah+Gadang'">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.2);"></div>
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <div class="bg-white text-primary rounded-circle d-flex align-items-center justify-content-center shadow-lg" style="width: 56px; height: 56px; transition: transform 0.2s;" id="rg-video-play" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                                <i class="bi bi-play-fill fs-2 ms-1"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Widget Kuis Evaluasi -->
                <div class="sidebar-widget widget-quiz fade-in-up delay-3 sticky-top" style="top: 100px;">
                    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom border-warning-subtle pb-3">
                        <h5 class="widget-title m-0 font-inter">
                            <i class="bi bi-lightning-charge-fill"></i> Kuis Evaluasi
                        </h5>
                        <span class="badge bg-white text-dark border border-warning-subtle rounded-pill px-3 py-2 fw-bold shadow-sm font-inter" id="quizCounter">1 / 10</span>
                    </div>
                    
                    <div id="quiz-area"></div>
                    <div id="quiz-result-area" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header border-bottom-0 pb-0">
                <h5 class="modal-title fw-bold text-danger font-inter" id="deleteConfirmModalLabel"><i class="bi bi-exclamation-triangle-fill me-2"></i>Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body font-inter text-secondary py-4">
                Apakah Anda yakin ingin menghapus materi ini secara permanen? Tindakan ini tidak dapat dibatalkan.
            </div>
            <div class="modal-footer border-top-0 pt-0">
                <button type="button" class="btn btn-light rounded-pill px-4 font-inter fw-bold" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger rounded-pill px-4 font-inter fw-bold" id="confirmDeleteBtn">Ya, Hapus</button>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    let formToSubmit = null;
    
    function showDeleteModal(buttonElement) {
        formToSubmit = buttonElement.closest('form');
        const deleteModal = new bootstrap.Modal(document.getElementById('deleteConfirmModal'));
        deleteModal.show();
    }

    document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
        if (formToSubmit) {
            formToSubmit.submit();
        }
    });

    // 1. Reading Progress Bar
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        document.getElementById('progressBar').style.width = scrolled + '%';
    });

    // 2. Video Thumbnail Logic
    document.addEventListener('DOMContentLoaded', function() {
        const wrapper = document.getElementById('rg-video-wrapper');
        const playBtn = document.getElementById('rg-video-play');
        const thumb = document.getElementById('rg-video-thumb');
        
        function playVideo() {
            wrapper.innerHTML = `
                <div class="ratio ratio-16x9">
                    <video controls autoplay class="rounded-4 w-100 h-100 bg-black">
                        <source src="{{ asset('homepage/video/RG.mp4') }}" type="video/mp4">
                        Maaf, browser Anda tidak mendukung pemutar video.
                    </video>
                </div>`;
        }
        
        if(playBtn) playBtn.addEventListener('click', playVideo);
        if(thumb) thumb.addEventListener('click', playVideo);
    });

    // 3. Logika untuk Mini Kuis
    const miniQuizExplanations = {
        'topic1': 'Benar sekali! Letak absolut di lintang khatulistiwa membuat wilayah kita beriklim tropis sehingga sinar matahari melimpah dan tanah sangat subur untuk pertanian.',
        'topic2': 'Tepat! Complementarity (saling melengkapi) terjadi saat daerah pegunungan (punya sayur) berinteraksi dengan daerah pesisir (punya ikan) karena keduanya saling butuh bertukar barang.',
        'topic3': 'Tepat! Galodo adalah sebutan lokal yang menakutkan untuk bencana banjir bandang dahsyat yang menyapu air hujan beserta lumpur dan bebatuan dari puncak gunung.',
        'topic4': 'Tepat! Gempa bumi dari retakan patahan lempeng murni disebut sebagai bencana geologis (berkaitan dengan batuan dari dalam bumi).',
        'topic5': 'Tepat! Marantau adalah tradisi hebat di mana pria pergi ke wilayah lain untuk sukses (seperti buka rumah makan di Pulau Jawa), demi menggerakkan ekonomi keluarganya.',
        'topic6': 'Tepat! Sistem Matrilineal mengatur garis keturunan anak mengikuti garis ibu, berbeda dengan kebanyakan budaya lain yang patrilineal (ikut ayah).'
    };

    function checkMiniQuiz(topicId, selectedIndex, correctIndex, btnElement) {
        const container = document.getElementById(`mini-quiz-${topicId}`);
        const allBtns = container.querySelectorAll('.mini-option');
        const resultDiv = document.getElementById(`mini-result-${topicId}`);

        allBtns.forEach(btn => btn.style.pointerEvents = 'none');

        const isCorrect = selectedIndex === correctIndex;

        if (isCorrect) {
            btnElement.classList.add('correct');
            resultDiv.innerHTML = `<span class="text-success fw-bold d-block mb-1 font-inter"><i class="bi bi-check-circle-fill me-1"></i> Tepat Sekali!</span> <span class="text-secondary fw-normal font-inter">${miniQuizExplanations[topicId]}</span>`;
        } else {
            btnElement.classList.add('wrong');
            allBtns[correctIndex].classList.add('correct');
            allBtns[correctIndex].style.opacity = '0.7';
            resultDiv.innerHTML = `<span class="text-danger fw-bold d-block mb-1 font-inter"><i class="bi bi-x-circle-fill me-1"></i> Kurang Tepat.</span> <span class="text-secondary fw-normal font-inter">Coba baca kembali materinya ya. ${miniQuizExplanations[topicId]}</span>`;
        }

        resultDiv.style.display = 'block';
        resultDiv.classList.add('fade-in-up');
    }

    // 4. Quiz Evaluasi Akhir
    const quizData = [
        {
            question: "Jika kamu membagikan lokasi rumah melalui aplikasi GPS yang memunculkan titik lintang dan bujur 0 derajat (Khatulistiwa), jenis lokasi apa yang kamu tunjukkan?",
            options: [
                "Lokasi Relatif",
                "Lokasi Absolut",
                "Lokasi Administratif",
                "Lokasi Strategis"
            ],
            answer: 1,
            explanation: "Lokasi absolut adalah letak pasti (mutlak) di permukaan bumi berdasarkan koordinat lintang dan bujur."
        },
        {
            question: "Mengapa arsitektur tradisional Rumah Gadang dirancang tidak menggunakan paku melainkan pasak kayu?",
            options: [
                "Karena paku besi sangat mahal di zaman dahulu",
                "Agar kayunya tidak mudah keropos dimakan rayap",
                "Agar bangunan lentur dan dapat berayun menahan guncangan gempa",
                "Agar bangunan mudah dibongkar dan dipindahkan"
            ],
            answer: 2,
            explanation: "Sistem pasak kayu membuat struktur bangunan Rumah Gadang lentur sehingga tidak kaku/patah saat menerima getaran hebat gempa bumi."
        },
        {
            question: "Tradisi bepergian ke luar daerah untuk mencari pengalaman ekonomi, ilmu, dan kekayaan yang diajarkan kepada pemuda di Minangkabau disebut...",
            options: [
                "Marantau",
                "Turun Mandi",
                "Batagak Pangulu",
                "Makan Bajamba"
            ],
            answer: 0,
            explanation: "Marantau merupakan bentuk pendidikan kemandirian bagi pemuda untuk mengadu nasib sebelum nantinya berguna bagi kampung halamannya."
        },
        {
            question: "Jika musim hujan tiba, kawasan lereng pegunungan sering terancam bencana aliran lumpur batu raksasa. Bencana hidrometeorologi ini oleh masyarakat lokal disebut...",
            options: [
                "Likuifaksi",
                "Tsunami",
                "Abrasi Pantai",
                "Galodo"
            ],
            answer: 3,
            explanation: "Galodo adalah istilah untuk banjir bandang besar yang bercampur material sedimen dan vulkanik dari puncak pegunungan akibat cuaca buruk."
        },
        {
            question: "Masyarakat di daerah pegunungan (Darek) butuh asupan garam dan ikan, sedangkan masyarakat pesisir pantai (Pasisia) butuh pasokan beras. Hubungan timbal balik ini didasarkan pada syarat interaksi...",
            options: [
                "Saling Melengkapi (Complementarity)",
                "Kesempatan Antara (Intervening Opportunity)",
                "Kemudahan Pemindahan (Transferability)",
                "Isolasi Geografis"
            ],
            answer: 0,
            explanation: "Terjadinya pertukaran barang karena adanya perbedaan potensi kekayaan alam disebut prinsip saling melengkapi."
        },
        {
            question: "Tiba-tiba jalan raya penghubung Lembah Anai putus karena longsor sehingga sayur tidak bisa sampai ke laut. Kendala ini merusak prinsip interaksi ruang pada bagian...",
            options: [
                "Kesamaan Pendapatan",
                "Kemudahan Transfer (Transferability)",
                "Budaya Asosiatif",
                "Kebutuhan Pangan"
            ],
            answer: 1,
            explanation: "Jalan yang putus menghambat kelancaran perpindahan barang yang kita kenal sebagai aspek kemudahan transfer (Transferability)."
        },
        {
            question: "Perbedaan mendasar antara bahaya patahan darat (Sesar Semangko) dengan bahaya zona lautan (Megathrust) adalah...",
            options: [
                "Sesar darat memicu badai, Megathrust memicu tsunami",
                "Sesar darat memicu longsor es, Megathrust memicu banjir",
                "Sesar darat memicu gempa runtuhan, Megathrust memicu gempa vulkanik",
                "Sesar darat memicu gempa dangkal, Megathrust berpotensi memicu gelombang Tsunami"
            ],
            answer: 3,
            explanation: "Zona subduksi Megathrust yang ada di lautan dapat mendorong jutaan kubik air laut naik ke daratan, yang menyebabkan Tsunami."
        },
        {
            question: "Salah satu penyebab tradisi 'Marantau' mengakar kuat dalam budaya ekonomi kaum pria Minangkabau adalah pengaruh kuat dari sistem kekerabatan...",
            options: [
                "Bilateral",
                "Patrilineal (Garis Ayah)",
                "Matrilineal (Garis Ibu)",
                "Feodalisme"
            ],
            answer: 2,
            explanation: "Sistem Matrilineal mengamanatkan rumah dan aset pusaka kepada garis keturunan anak perempuan, sehingga pemuda dituntut merantau mandiri secara ekonomi."
        },
        {
            question: "Dalam menyelesaikan konflik sengketa lahan, tetua adat biasanya berkumpul di balai balai untuk mencari jalan keluar bersama tanpa memihak secara sepihak. Proses interaksi sosial ini disebut...",
            options: [
                "Proses Disosiatif (Persaingan)",
                "Proses Konsumtif",
                "Proses Produksi",
                "Proses Asosiatif (Musyawarah Mufakat)"
            ],
            answer: 3,
            explanation: "Duduk bersama mencari solusi tanpa pertengkaran (bulek kato dek mufakat) merupakan bentuk positif kerja sama yang disebut Asosiatif."
        },
        {
            question: "Siswa A sering membeli Nasi Padang di Kota Jakarta. Secara ekonomi, rumah makan Padang di Jakarta tersebut menjalankan fungsi ekonomi dalam hal...",
            options: [
                "Distribusi (Menyalurkan masakan khas ke daerah baru)",
                "Monopoli dagang",
                "Eksploitasi bahan baku lokal",
                "Sistem barter tradisional"
            ],
            answer: 0,
            explanation: "Jaringan rumah makan (perantau) membantu menyebarluaskan produk makanan/budaya untuk sampai ke konsumen akhir, alias kegiatan Distribusi."
        }
    ];

    let currentQ = 0;
    let score = 0;
    
    const quizArea = document.getElementById('quiz-area');
    const resultArea = document.getElementById('quiz-result-area');
    const counterDisplay = document.getElementById('quizCounter');

    function renderQuestion() {
        if (currentQ >= quizData.length) {
            showResult();
            return;
        }

        const q = quizData[currentQ];
        counterDisplay.textContent = `${currentQ + 1} / ${quizData.length}`;
        
        let html = `
            <div class="mb-3">
                <p class="fw-bold mb-4 font-inter fs-6 text-dark">${q.question}</p>
                <div class="d-flex flex-column gap-2">
        `;
        
        q.options.forEach((opt, index) => {
            html += `<button class="quiz-option shadow-sm font-inter" onclick="checkAnswer(${index}, this)">${opt}</button>`;
        });
        
        html += `</div></div>`;
        quizArea.innerHTML = html;
        resultArea.style.display = 'none';
        quizArea.style.display = 'block';
    }

    function checkAnswer(selectedIndex, btnElement) {
        const allBtns = quizArea.querySelectorAll('.quiz-option');
        allBtns.forEach(btn => btn.style.pointerEvents = 'none');
        
        const q = quizData[currentQ];
        const isCorrect = selectedIndex === q.answer;
        
        if (isCorrect) {
            btnElement.classList.add('correct');
            score++;
        } else {
            btnElement.classList.add('wrong');
            allBtns[q.answer].classList.add('correct');
            allBtns[q.answer].style.opacity = '0.7';
        }

        setTimeout(() => {
            quizArea.style.display = 'none';
            resultArea.innerHTML = `
                <div class="quiz-result-box ${isCorrect ? 'bg-success text-white' : 'bg-danger text-white'} rounded-4 shadow-sm border border-light">
                    <h6 class="fw-bold font-inter fs-5"><i class="bi ${isCorrect ? 'bi-check-circle-fill' : 'bi-x-circle-fill'} me-2"></i> ${isCorrect ? 'Tepat Sekali! 🎉' : 'Kurang Tepat 💡'}</h6>
                    <p class="mb-4 mt-2 font-inter" style="font-size: 0.95rem; opacity: 0.95; line-height: 1.6;">${q.explanation}</p>
                    <button class="btn btn-light btn-sm w-100 fw-bold text-dark rounded-pill py-2 font-inter shadow-sm" onclick="nextQuestion()">Lanjut Soal <i class="bi bi-arrow-right ms-1"></i></button>
                </div>
            `;
            resultArea.style.display = 'block';
        }, 1100);
    }

    function nextQuestion() {
        currentQ++;
        renderQuestion();
    }

    function showResult() {
        quizArea.style.display = 'none';
        counterDisplay.textContent = "Selesai";
        counterDisplay.className = 'badge bg-success text-white rounded-pill px-3 py-2 fw-bold shadow-sm font-inter';
        
        const percentage = Math.round((score / quizData.length) * 100);
        let msg = percentage >= 80 ? "Luar Biasa! 🏆" : (percentage >= 60 ? "Cukup Baik 👍" : "Ayo Belajar Lagi! 📚");
        
        resultArea.innerHTML = `
            <div class="text-center py-4 font-inter">
                <div class="display-3 fw-bold mb-2" style="color: var(--color-brand);">${score}<span class="fs-3 text-muted">/${quizData.length}</span></div>
                <h5 class="fw-bold text-dark">${msg}</h5>
                <div class="progress my-3 mx-auto" style="height: 8px; width: 80%; border-radius: 50px;">
                  <div class="progress-bar ${percentage >= 80 ? 'bg-success' : (percentage >= 60 ? 'bg-warning' : 'bg-danger')}" role="progressbar" style="width: ${percentage}%"></div>
                </div>
                <p class="text-secondary mb-4" style="font-size: 0.95rem;">Nilai ketuntasan kamu: <span class="fw-bold text-dark">${percentage}%</span></p>
                <button class="btn-action w-100 rounded-pill shadow-sm d-flex justify-content-center align-items-center gap-2 font-inter" onclick="resetQuiz()">
                    <i class="bi bi-arrow-counterclockwise"></i> Ulangi Kuis
                </button>
            </div>
        `;
        resultArea.style.display = 'block';
    }

    function resetQuiz() {
        currentQ = 0;
        score = 0;
        counterDisplay.className = 'badge bg-white text-dark border border-warning-subtle rounded-pill px-3 py-2 fw-bold shadow-sm font-inter';
        renderQuestion();
    }

    renderQuestion();

</script>
</body>
</html>