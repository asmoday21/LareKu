<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Materi Pembelajaran - Tema 1</title>
    
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

        html {
            scroll-behavior: smooth;
        }

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

        /* ====== TOPBAR BARU ====== */
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

        /* ====== HEADER BARU ====== */
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

        /* ====== ADMIN CONTROLS BARU ====== */
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
        }

        .btn-add-materi:hover {
            transform: translateY(-2px) scale(1.02);
            box-shadow: var(--shadow-lg);
            color: white;
        }

        /* ====== CONTENT CARD BARU ====== */
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

        .content-card:hover::before {
            opacity: 1;
        }

        .content-card:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(-4px);
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

        .dynamic-content-title i {
            color: var(--color-brand);
            font-size: 1.75rem;
        }

        /* ====== SECTION TITLE ====== */
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

        .section-title i {
            color: var(--color-brand);
            font-size: 1.75rem;
        }

        /* ====== TOPIC BLOCK ====== */
        .topic-block {
            margin-bottom: 3rem;
            padding: 1.5rem;
            background: var(--bg-primary);
            border-radius: var(--radius-md);
            border-left: 4px solid var(--color-brand);
        }

        .topic-block:last-child {
            margin-bottom: 0;
        }

        .topic-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .topic-icon {
            width: 56px;
            height: 56px;
            border-radius: var(--radius-md);
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(236, 72, 153, 0.1));
            color: var(--color-brand);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            flex-shrink: 0;
        }

        .topic-title {
            font-size: 1.35rem;
            font-weight: 800;
            margin: 0;
            color: var(--text-primary);
        }

        /* ====== HIGHLIGHT BOX ====== */
        .highlight-box {
            background: linear-gradient(135deg, #FEF3C7, #FDE68A);
            border-radius: var(--radius-md);
            padding: 1.5rem 2rem;
            margin: 1.5rem 0;
            border-left: 5px solid var(--color-accent);
            position: relative;
        }

        .highlight-box p {
            color: #78350F;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            margin: 0;
        }

        .highlight-box i {
            color: var(--color-accent);
        }

        /* ====== ACCORDION BARU ====== */
        .custom-accordion {
            margin-top: 1.5rem;
        }
        
        .custom-accordion .accordion-item {
            border: none;
            border-radius: var(--radius-md) !important;
            margin-bottom: 0.75rem;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            background: white;
        }

        .custom-accordion .accordion-button {
            background: white;
            color: var(--text-primary);
            font-weight: 700;
            padding: 1.25rem 1.5rem;
            font-family: 'Inter', sans-serif;
            border: none;
            transition: all 0.3s ease;
        }

        .custom-accordion .accordion-button:not(.collapsed) {
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.05), rgba(236, 72, 153, 0.05));
            color: var(--color-brand);
            box-shadow: none;
        }

        .custom-accordion .accordion-button:focus {
            box-shadow: none;
            border-color: transparent;
        }

        .custom-accordion .accordion-button:hover {
            background: var(--bg-primary);
        }

        .custom-accordion .accordion-body {
            background: white;
            padding: 1.5rem;
            border-top: 1px solid var(--border-color);
        }

        /* ====== MEDIA WRAPPER ====== */
        .media-wrapper {
            border-radius: var(--radius-md);
            overflow: hidden;
            box-shadow: var(--shadow-md);
            margin: 1.5rem 0;
            background: #000;
            position: relative;
        }

        .ratio-16x9 {
            position: relative;
            width: 100%;
            padding-top: 56.25%;
        }

        .ratio-16x9 iframe,
        .ratio-16x9 video,
        .ratio-16x9 img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
            object-fit: cover;
        }

        /* ====== SIDEBAR WIDGET BARU ====== */
        .sidebar-widget {
            background: var(--surface-white);
            border-radius: var(--radius-lg);
            padding: 2rem;
            box-shadow: var(--shadow-md);
            margin-bottom: 2rem;
            border: 1px solid rgba(79, 70, 229, 0.04);
            transition: all 0.3s ease;
        }

        .sidebar-widget:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(-2px);
        }

        .sidebar-widget.widget-quiz {
            background: linear-gradient(135deg, #FFFBEB, #FEF3C7);
            border: 2px solid rgba(245, 158, 11, 0.2);
        }

        .widget-title {
            font-size: 1.25rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: var(--text-primary);
        }

        .widget-title i {
            color: var(--color-brand);
        }

        .widget-quiz .widget-title i {
            color: var(--color-accent);
        }

        /* ====== QUIZ BARU ====== */
        .quiz-option {
            display: block;
            width: 100%;
            text-align: left;
            padding: 1rem 1.25rem;
            background: white;
            border: 2px solid var(--border-color);
            border-radius: var(--radius-md);
            margin-bottom: 0.75rem;
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-primary);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .quiz-option:hover {
            border-color: var(--color-brand);
            background: var(--bg-primary);
            transform: translateX(6px);
            box-shadow: var(--shadow-sm);
        }

        .quiz-option.correct {
            background: #D1FAE5;
            border-color: var(--color-green);
            color: #065F46;
        }

        .quiz-option.wrong {
            background: #FEE2E2;
            border-color: var(--color-red);
            color: #991B1B;
        }

        .quiz-result-box {
            padding: 1.5rem;
            border-radius: var(--radius-md);
            margin-top: 1.5rem;
            font-family: 'Inter', sans-serif;
        }

        .btn-action {
            background: linear-gradient(135deg, var(--color-brand), var(--color-brand-dark));
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-weight: 700;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
        }

        .btn-action:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            color: white;
        }

        /* ====== PROGRESS BAR ====== */
        .reading-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: transparent;
            z-index: 1040;
        }
        
        .reading-progress-bar {
            height: 100%;
            background: linear-gradient(90deg, var(--color-brand), var(--color-accent), var(--color-pink));
            width: 0%;
            border-radius: 0 2px 2px 0;
            transition: width 0.1s ease;
        }

        /* ====== ATTACHMENT / PREVIEW ====== */
        .attachment-box {
            background: var(--bg-primary);
            border: 2px solid var(--border-color);
            border-radius: var(--radius-md);
            padding: 1.25rem;
            transition: all 0.3s ease;
            margin-bottom: 1rem;
            display: flex;
            flex-direction: column;
        }
        
        .attachment-box:hover {
            border-color: var(--color-brand);
            box-shadow: var(--shadow-md);
        }

        .document-iframe-container {
            border-radius: var(--radius-md);
            overflow: hidden;
            border: 1px solid var(--border-color);
            background: #f8fafc;
            width: 100%;
        }

        /* ====== BADGE ====== */
        .badge-tag {
            background: var(--bg-primary);
            color: var(--text-secondary);
            border: 1px solid var(--border-color);
            padding: 0.3rem 1rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            display: inline-block;
        }

        /* ====== ANIMATIONS ====== */
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        @keyframes fadeInUp {
            to { opacity: 1; transform: translateY(0); }
        }

        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }

        /* ====== INFO BOX KEARIFAN LOKAL ====== */
        .wisdom-box {
            background: var(--bg-primary);
            padding: 1rem 1.25rem;
            border-radius: var(--radius-md);
            border-left: 4px solid var(--color-teal);
            margin: 1rem 0;
        }

        /* ====== RESPONSIVE ====== */
        @media (max-width: 991.98px) {
            .app-container { padding: 0 1.25rem; }
            .content-card { padding: 1.5rem; }
            .page-header { padding: 3rem 0; }
            .header-content h1 { font-size: 2.25rem; }
            .admin-controls-card { padding: 1.25rem; }
        }

        @media (max-width: 767.98px) {
            .header-content h1 { font-size: 1.75rem; }
            .topic-block { padding: 1rem; }
            .sidebar-widget { padding: 1.25rem; }
            .dynamic-content-title { font-size: 1.15rem; flex-direction: column; align-items: flex-start; }
            .admin-title { font-size: 1.1rem; }
        }

        /* ====== SCROLLBAR ====== */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-primary);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, var(--color-brand), var(--color-pink));
            border-radius: 50px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--color-brand-dark);
        }
    </style>
</head>
<body>

<!-- Progress Bar -->
<div class="reading-progress">
    <div class="reading-progress-bar" id="progressBar"></div>
</div>

<!-- Navbar Baru -->
<nav class="topbar">
    <div class="app-container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="topbar-brand">
                <i class="bi bi-book-half"></i> LareKu
            </div>
            <a href="{{ route('siswa.materi.index') }}" class="btn-back" style="text-decoration: none;">
                <i class="bi bi-arrow-left"></i> Kembali ke Modul
            </a>
        </div>
    </div>
</nav>

<!-- Page Header Baru -->
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
        
        <!-- Admin Controls Area -->
        {{-- <div class="admin-controls-card fade-in-up delay-1">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <div class="admin-title">
                        Tema 1
                        <span class="badge-admin">Mode Kelola</span>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="d-flex flex-column flex-md-row justify-content-md-end gap-3 align-items-md-center">
                        <div class="d-flex align-items-center gap-2">
                            <label class="fw-semibold text-secondary mb-0" style="font-size:0.9rem; white-space: nowrap;">Filter Tema:</label>
                            <form action="{{ route('guru.materi.index') }}" method="GET" id="temaForm" class="m-0">
                                <select class="filter-select" name="tema" onchange="this.form.submit()">
                                    <option value="tema1" {{ request('tema')=='tema1' ? 'selected' : '' }}>Tema 1</option>
                                    <option value="tema2" {{ request('tema')=='tema2' ? 'selected' : '' }}>Tema 2</option>
                                    <option value="tema3" {{ request('tema')=='tema3' ? 'selected' : '' }}>Tema 3</option>
                                    <option value="tema4" {{ request('tema')=='tema4' ? 'selected' : '' }}>Tema 4</option>
                                </select>
                            </form>
                        </div>
                        <a href="{{ route('guru.materi.create') }}" class="btn-add-materi" style="text-decoration: none;">
                            <i class="fas fa-plus"></i> Tambah Materi
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="row g-4 g-lg-5">
            <!-- Kolom Kiri: Materi -->
            <div class="col-lg-8">
                
                <!-- Looping Materi dari Database -->
                @forelse($materi as $item)
                <div class="content-card fade-in-up delay-2">
                    {{-- <div class="d-flex justify-content-between align-items-start border-bottom pb-3 mb-4 flex-wrap gap-3">
                        <h4 class="dynamic-content-title">
                            <i class="bi bi-journal-text"></i>
                            {{ $item->judul }}
                        </h4>
                        <div class="d-flex gap-2 flex-shrink-0">
                            <a href="{{ route('guru.materi.edit', $item->id) }}" class="btn btn-outline-warning btn-sm rounded-pill px-3 fw-bold d-flex align-items-center gap-1">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('guru.materi.destroy', $item->id) }}" method="POST" class="d-inline m-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill px-3 fw-bold d-flex align-items-center gap-1" onclick="return confirm('Hapus materi ini selamanya?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div> --}}

                    @if($item->deskripsi)
                        <p class="fw-bold p-3 mb-4 rounded-3" style="background: var(--bg-primary); border-left: 4px solid var(--color-brand); font-family: 'Inter', sans-serif;">
                            {{ $item->deskripsi }}
                        </p>
                    @endif

                    <div class="content-text text-dark prose">
                        {!! $item->konten !!}
                    </div>

                    @if($item->mediaPendukung->count() > 0)
                        {{-- <h5 class="fw-bold mb-4 mt-5" style="color: var(--text-primary);"> --}}
                            <i class="bi bi-paperclip me-2 text-primary"></i>Media Pendukung
                        </h5>

                        @foreach($item->mediaPendukung as $media)
                        <div class="attachment-box">
                            <div class="d-flex w-100 justify-content-between align-items-center flex-wrap gap-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-white p-2 rounded-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                        @if($media->jenis == 'pdf')
                                            <i class="bi bi-file-earmark-pdf-fill fs-3 text-danger"></i>
                                        @elseif($media->jenis == 'word')
                                            <i class="bi bi-file-earmark-word-fill fs-3 text-primary"></i>
                                        @elseif($media->jenis == 'ppt')
                                            <i class="bi bi-file-earmark-slides-fill fs-3 text-warning"></i>
                                        @elseif($media->jenis == 'video_upload' || $media->jenis == 'video_youtube')
                                            <i class="bi bi-play-circle-fill fs-3 text-success"></i>
                                        @else
                                            <i class="bi bi-file-earmark-fill fs-3 text-secondary"></i>
                                        @endif
                                    </div>
                                    
                                    <div>
                                        <h6 class="mb-1 fw-bold" style="font-family: 'Inter', sans-serif;">{{ $media->judul }}</h6>
                                        <span class="badge bg-white text-secondary border border-secondary-subtle text-uppercase" style="font-size: 0.7rem; letter-spacing: 0.5px;">{{ str_replace('_', ' ', $media->jenis) }}</span>
                                    </div>
                                </div>

                                <div class="d-flex gap-2">
                                    <button class="btn btn-primary btn-sm rounded-pill px-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="background: var(--color-brand); border: none;">
                                        <i class="bi bi-eye me-1"></i> Lihat
                                    </button>
                                    
                                    @if($media->jenis != 'video_youtube')
                                    <a href="{{ asset('storage/'.$media->file) }}" target="_blank" download class="btn btn-outline-secondary rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;" title="Download">
                                        <i class="bi bi-cloud-arrow-down-fill"></i>
                                    </a>
                                    @endif
                                </div>
                            </div>

                            <div id="preview{{ $media->id }}" class="collapse mt-4 w-100">
                                @if($media->jenis == 'pdf')
                                    <div class="document-iframe-container shadow-sm" style="height: 600px;">
                                        <iframe src="{{ asset('storage/'.$media->file) }}" width="100%" height="100%" style="border: none;" allowfullscreen></iframe>
                                    </div>
                                @elseif($media->jenis == 'word')
                                    <div class="document-iframe-container ratio ratio-16x9 shadow-sm">
                                        <iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/'.$media->file)) }}&embedded=true" allowfullscreen style="border: none;"></iframe>
                                    </div>
                                    <div class="text-center small text-muted mt-2 fw-bold">
                                        <i class="bi bi-info-circle text-primary"></i> Render menggunakan Google Docs Viewer (File harus online).
                                    </div>
                                @elseif($media->jenis == 'ppt')
                                    <div class="document-iframe-container ratio ratio-16x9 shadow-sm">
                                        <iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe>
                                    </div>
                                    <div class="text-center small text-muted mt-2 fw-bold">
                                        <i class="bi bi-info-circle text-primary"></i> Render menggunakan Microsoft Office Viewer (File harus online).
                                    </div>
                                @elseif($media->jenis == 'video_upload')
                                    <div class="document-iframe-container ratio ratio-16x9 bg-black shadow-sm">
                                        <video controls class="w-100 h-100 rounded-3">
                                            <source src="{{ asset('storage/'.$media->file) }}">
                                            Browser Anda tidak mendukung tag video.
                                        </video>
                                    </div>
                                @elseif($media->jenis == 'video_youtube')
                                    @php
                                        preg_match('/(?:youtube\.com.*v=|youtu\.be\/)([^&]+)/', $media->video_url, $match);
                                    @endphp
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
                @empty
                <div class="content-card text-center p-5">
                    <div class="alert alert-info border-0 rounded-4 bg-primary-subtle text-primary mb-0 p-4">
                        <i class="bi bi-inbox fs-1 d-block mb-3"></i>
                        <h5 class="fw-bold font-inter">Belum ada materi pembelajaran</h5>
                        <p class="mb-0 small">Klik tombol "Tambah Materi" di atas untuk mulai membuat.</p>
                    </div>
                </div>
                @endforelse
                
                <!-- Konten Bawaan (Statis) yang Telah Diperdalam -->
                <div class="content-card fade-in-up delay-3">
                    <h4 class="section-title">
                        <i class="bi bi-stars"></i> Pembelajaran Interaktif
                    </h4>

                    <!-- Topik 1: Mengenal Lokasi Tinggal -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon">
                                <i class="bi bi-house-door-fill"></i>
                            </div>
                            <h3 class="topic-title">Mengenal Lokasi Tinggal</h3>
                        </div>
                        <p>Lokasi bukan sekadar alamat rumah kita. Dalam konteks <em>Alam Minangkabau</em> (Sumatera Barat), lokasi geografi sangat menentukan bagaimana masyarakat beradaptasi dengan bentang alam yang berbukit-bukit dan pesisir pantainya yang luas.</p>
                        
                        <p class="mb-4">Letak wilayah Minangkabau dapat dipelajari dari dua sisi. Secara astronomis (Letak Absolut), wilayah ini dilalui garis khatulistiwa (ekuator), memberikan iklim tropis yang subur untuk bertani. Secara geografis (Letak Relatif), Sumatera Barat berhadapan langsung dengan Samudera Hindia dan dihiasi deretan pegunungan Bukit Barisan.</p>
                        
                        <div class="row g-4 mt-2 mb-4">
                            <div class="col-md-6">
                                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100">
                                    <h6 class="fw-bold text-brand mb-3"><i class="bi bi-pin-map-fill me-2"></i>Lokasi Absolut</h6>
                                    <p class="small text-secondary mb-0">Lokasi mutlak berdasarkan garis lintang dan bujur. Contohnya, wilayah Bonjol (Pasaman) berada tepat di titik 0° (Khatulistiwa), menjadikannya daerah tropis dengan curah hujan tinggi yang sangat mendukung kegiatan bercocok tanam.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100">
                                    <h6 class="fw-bold text-accent mb-3"><i class="bi bi-signpost-split-fill me-2"></i>Lokasi Relatif</h6>
                                    <p class="small text-secondary mb-0">Lokasi dinamis berdasarkan daerah di sekitarnya. Letak pesisir barat Sumatera yang menghadap Samudera Hindia membuat kota Padang dan Pariaman berkembang pesat menjadi pelabuhan dagang internasional sejak abad ke-16.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Cek Pemahaman Topik 1 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic1">
                            <h6 class="fw-bold text-brand mb-3 d-flex align-items-center gap-2">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="small text-dark fw-semibold mb-3">Karena letaknya yang dilewati oleh garis khatulistiwa (0°), wilayah Sumatera Barat memiliki keuntungan secara Lokasi Absolut yaitu...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2" onclick="checkMiniQuiz('topic1', 0, 0, this)">Memiliki iklim tropis yang subur untuk bertani</button>
                                <button class="quiz-option shadow-sm mini-option py-2" onclick="checkMiniQuiz('topic1', 1, 0, this)">Berhadapan langsung dengan Samudera Hindia</button>
                                <button class="quiz-option shadow-sm mini-option py-2" onclick="checkMiniQuiz('topic1', 2, 0, this)">Banyaknya jalur patahan tektonik</button>
                            </div>
                            <div id="mini-result-topic1" class="mt-3 p-3 rounded-3 bg-light border border-light" style="display: none; font-size: 0.9rem;"></div>
                        </div>
                    </div>

                    <!-- Topik 2: Konektivitas Antarruang -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon" style="background: rgba(20, 184, 166, 0.15); color: var(--color-teal);">
                                <i class="bi bi-share-fill"></i>
                            </div>
                            <h3 class="topic-title">Konektivitas Antarruang</h3>
                        </div>
                        <p>Tidak ada satu pun wilayah yang bisa memenuhi seluruh kebutuhannya sendiri. Di Minangkabau, pembagian wilayah budaya secara tradisional dibedakan antara kawasan pegunungan pedalaman (<strong>Darek / Luhak</strong>) dan kawasan pesisir (<strong>Pasisia / Rantau</strong>).</p>
                        
                        <p class="mb-4">Masyarakat <em>Darek</em> (seperti Agam dan Tanah Datar) unggul dalam menghasilkan beras dan sayur-mayur. Sebaliknya, masyarakat <em>Pasisia</em> (seperti Pariaman dan Pesisir Selatan) unggul menghasilkan ikan laut dan kelapa. Perbedaan sumber daya alam inilah yang memicu kuatnya jaringan perdagangan dan interaksi antarruang di Sumatera Barat.</p>
                        
                        <div class="highlight-box mb-4">
                            <p><i class="bi bi-lightbulb-fill me-2 fs-5"></i><strong>Syarat Terjadinya Interaksi Ruang Minangkabau:</strong><br>
                            <span class="mt-2 d-block text-secondary" style="font-family: 'Merriweather', serif; font-weight: normal; font-size: 0.95rem;">
                                <ul class="mb-0">
                                    <li><strong>Saling Melengkapi (Complementarity):</strong> Daerah <em>Darek</em> butuh ikan dan garam, daerah <em>Pasisia</em> butuh beras. Keduanya saling mencukupi.</li>
                                    <li><strong>Kesempatan Antara (Intervening Opportunity):</strong> Jika hasil panen cabai di daerah A gagal, pedagang pesisir akan mencari pasokan cabai dari daerah B (alternatif).</li>
                                    <li><strong>Kemudahan Transfer (Transferability):</strong> Zaman dulu masyarakat berjalan kaki atau memakai pedati. Kini, interaksi ekonomi makin mudah berkat jalan raya lintas Lembah Anai maupun Sitinjau Lauik.</li>
                                </ul>
                            </span></p>
                        </div>

                        <!-- Cek Pemahaman Topik 2 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic2">
                            <h6 class="fw-bold text-teal mb-3 d-flex align-items-center gap-2" style="color: var(--color-teal);">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="small text-dark fw-semibold mb-3">Interaksi dagang tradisional di mana wilayah <em>Darek</em> (pegunungan) mensuplai beras, sedangkan wilayah <em>Pasisia</em> (pesisir) mensuplai ikan laut, merupakan penerapan syarat interaksi...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2" onclick="checkMiniQuiz('topic2', 0, 1, this)">Intervening Opportunity (Kesempatan Antara)</button>
                                <button class="quiz-option shadow-sm mini-option py-2" onclick="checkMiniQuiz('topic2', 1, 1, this)">Complementarity (Saling Melengkapi)</button>
                                <button class="quiz-option shadow-sm mini-option py-2" onclick="checkMiniQuiz('topic2', 2, 1, this)">Transferability (Kemudahan Pemindahan)</button>
                            </div>
                            <div id="mini-result-topic2" class="mt-3 p-3 rounded-3 bg-light border border-light" style="display: none; font-size: 0.9rem;"></div>
                        </div>
                    </div>

                    <!-- Topik 3: Perubahan Iklim & Bencana Alam -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon" style="background: rgba(239, 68, 68, 0.15); color: var(--color-red);">
                                <i class="bi bi-cloud-lightning-rain-fill"></i>
                            </div>
                            <h3 class="topic-title">Perubahan Iklim & Bencana Alam</h3>
                        </div>
                        <p>Masyarakat Minangkabau dituntut untuk pandai beradaptasi, selaras dengan falsafah <em>"Alam Takambang Jadi Guru"</em>. Secara geologis, daratan Sumatera Barat tepat dilewati oleh Sesar Sumatera (Patahan Semangko) dan ancaman Megathrust Mentawai di wilayah lautannya.</p>
                        
                        <p class="mb-4">Ditambah lagi, isu perubahan iklim global sering memicu anomali cuaca ekstrem (curah hujan tinggi). Di kawasan perbukitan dan lereng gunung aktif (seperti Gunung Marapi), cuaca ekstrem ini meningkatkan risiko tanah longsor dan bencana khas yang disebut masyarakat lokal sebagai <em>Galodo</em> (banjir bandang lahar dingin).</p>
                        
                        <div class="accordion custom-accordion mb-4" id="accordionBencana">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIklim">
                                        <i class="bi bi-thermometer-sun me-2"></i> Dampak Hidrometeorologi (Iklim)
                                    </button>
                                </h2>
                                <div id="collapseIklim" class="accordion-collapse collapse" data-bs-parent="#accordionBencana">
                                    <div class="accordion-body">
                                        <p class="mb-2 text-dark">Perubahan iklim memicu curah hujan tak menentu yang berbahaya bagi bentang alam berbukit.</p>
                                        <p class="text-muted small m-0">Kombinasi antara curah hujan ekstrem, penebangan hutan, dan penumpukan material vulkanik di lereng gunung api kerap melahirkan <em>Galodo</em> (banjir bandang besar) yang menyapu desa-desa di bawahnya.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGeologi">
                                        <i class="bi bi-tsunami me-2"></i> Bencana Geologi (Tektonik)
                                    </button>
                                </h2>
                                <div id="collapseGeologi" class="accordion-collapse collapse" data-bs-parent="#accordionBencana">
                                    <div class="accordion-body">
                                        <p class="mb-2 text-dark">Bencana murni dari dalam bumi yang tidak bisa dicegah.</p>
                                        <p class="text-muted small m-0">Sumatera Barat terhimpit aktivitas patahan Semangko di darat (rawan gempa dangkal merusak seperti Gempa Padang 2009) dan tumpukan energi lempeng Indo-Australia di laut Mentawai (potensi Megathrust yang bisa memicu Tsunami).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMitigasi">
                                        <i class="bi bi-shield-check me-2"></i> Adaptasi & Mitigasi Kultural
                                    </button>
                                </h2>
                                <div id="collapseMitigasi" class="accordion-collapse collapse" data-bs-parent="#accordionBencana">
                                    <div class="accordion-body">
                                        <p class="mb-2 text-dark">Langkah masyarakat bertahan hidup dan meminimalkan risiko kerugian.</p>
                                        <p class="text-muted small m-0">Nenek moyang Minang merespons ancaman gempa dengan merancang Rumah Gadang bersistem struktur pasak kayu tanpa paku. Konstruksi lentur ini terbukti tahan guncangan gempa (mitigasi struktural masa lampau).</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cek Pemahaman Topik 3 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic3">
                            <h6 class="fw-bold text-red mb-3 d-flex align-items-center gap-2" style="color: var(--color-red);">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="small text-dark fw-semibold mb-3">Bencana alam hidrometeorologi berupa banjir bandang besar bercampur lumpur atau lahar dingin yang sering merusak pemukiman di kawasan lereng gunung Sumatera Barat disebut...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2" onclick="checkMiniQuiz('topic3', 0, 1, this)">Tsunami Pesisir</button>
                                <button class="quiz-option shadow-sm mini-option py-2" onclick="checkMiniQuiz('topic3', 1, 1, this)">Galodo (Banjir Bandang)</button>
                                <button class="quiz-option shadow-sm mini-option py-2" onclick="checkMiniQuiz('topic3', 2, 1, this)">Patahan Semangko</button>
                            </div>
                            <div id="mini-result-topic3" class="mt-3 p-3 rounded-3 bg-light border border-light" style="display: none; font-size: 0.9rem;"></div>
                        </div>
                    </div>

                    <!-- Topik 4: Kegiatan Ekonomi & Interaksi Sosial -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon" style="background: rgba(245, 158, 11, 0.15); color: var(--color-accent);">
                                <i class="bi bi-diagram-3-fill"></i>
                            </div>
                            <h3 class="topic-title">Kegiatan Ekonomi & Interaksi Sosial</h3>
                        </div>
                        <p>Untuk bertahan hidup, masyarakat menjalin interaksi sosial dan kegiatan ekonomi. Di Minangkabau, interaksi sosial diatur kuat oleh sistem kekerabatan kekerabatan <em>Matrilineal</em> (garis keturunan ibu). Harta pusaka (tanah, sawah, Rumah Gadang) dikuasai dan diwariskan melalui jalur perempuan.</p>
                        
                        <p class="mb-4">Karena kaum laki-laki (pemuda) tidak mewarisi harta pusaka milik kaumnya, lahirlah tradisi <strong>Marantau</strong>. Mereka merantau ke luar daerah untuk berdagang, menuntut ilmu, dan membangun kemandirian ekonomi. Tradisi <em>Marantau</em> dan <em>Manjua-Mambali</em> (berdagang) ini menjadi motor penggerak ekonomi (distribusi) masyarakat Minang di penjuru nusantara.</p>

                        <div class="row g-3 mt-3 mb-4">
                            <div class="col-md-4">
                                <div class="p-4 rounded-4 bg-white shadow-sm h-100 border-2 border-start border-primary" style="border-left-width: 4px !important; text-align: center;">
                                    <i class="bi bi-box-seam fs-2 text-primary mb-2 d-block"></i>
                                    <h6 class="fw-bold font-inter">Produksi (Batani/Bakarajo)</h6>
                                    <p class="small mb-0 text-muted">Mengolah sawah pusaka peninggalan kaum untuk menghasilkan padi, atau membuat kerajinan lokal (seperti tenun Pandai Sikek & Sulam Silungkang).</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-4 rounded-4 bg-white shadow-sm h-100 border-2 border-start border-success" style="border-left-width: 4px !important; text-align: center;">
                                    <i class="bi bi-truck fs-2 text-success mb-2 d-block"></i>
                                    <h6 class="fw-bold font-inter">Distribusi (Marantau/Berdagang)</h6>
                                    <p class="small mb-0 text-muted">Menyalurkan komoditas. Perantau Minang membuka jaringan rumah makan atau toko kain dagangan hingga ke luar pulau Sumatera.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-4 rounded-4 bg-white shadow-sm h-100 border-2 border-start border-warning" style="border-left-width: 4px !important; text-align: center;">
                                    <i class="bi bi-cart-check fs-2 text-warning mb-2 d-block"></i>
                                    <h6 class="fw-bold font-inter">Konsumsi (Mamakai)</h6>
                                    <p class="small mb-0 text-muted">Memanfaatkan pendapatan hasil berdagang untuk menghidupi keluarga dan berkontribusi membangun kampung halaman (<em>bangun nagari</em>).</p>
                                </div>
                            </div>
                        </div>
                        
                        <p class="mt-4 mb-3 text-secondary">Interaksi sosial dalam menjalankan roda ekonomi ini terbagi menjadi dua proses dasar yang senantiasa diatur melalui <strong>Musyawarah Mufakat</strong> (<em>Bulek aia dek pambuluah, Bulek kato dek mufakat</em>):</p>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="p-3 bg-white rounded-3 border border-light shadow-sm h-100">
                                    <h6 class="fw-bold" style="color: var(--color-teal);"><i class="bi bi-people-fill me-2"></i>Proses Asosiatif (Bersatu)</h6>
                                    <p class="small text-muted mb-0">Kerja sama dan musyawarah. <em>Contoh:</em> Tradisi gotong royong <em>Mambangkik Batang Tarandam</em> (mengangkat martabat keluarga) atau kerja sama warga merenovasi Rumah Gadang.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 bg-white rounded-3 border border-light shadow-sm h-100">
                                    <h6 class="fw-bold" style="color: var(--color-red);"><i class="bi bi-lightning-fill me-2"></i>Proses Disosiatif (Bersaing)</h6>
                                    <p class="small text-muted mb-0">Kompetisi dan konflik. <em>Contoh:</em> Persaingan bisnis antar pedagang perantau, atau sengketa batas <em>tanah ulayat</em> (harta kaum) yang biasanya diselesaikan lewat Sidang Adat.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Cek Pemahaman Topik 4 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic4">
                            <h6 class="fw-bold text-accent mb-3 d-flex align-items-center gap-2" style="color: var(--color-accent);">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="small text-dark fw-semibold mb-3">Sistem kekerabatan masyarakat Minangkabau yang mengatur kepemilikan harta pusaka berdasarkan garis keturunan ibu disebut dengan sistem...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2" onclick="checkMiniQuiz('topic4', 0, 0, this)">Matrilineal</button>
                                <button class="quiz-option shadow-sm mini-option py-2" onclick="checkMiniQuiz('topic4', 1, 0, this)">Patrilineal</button>
                                <button class="quiz-option shadow-sm mini-option py-2" onclick="checkMiniQuiz('topic4', 2, 0, this)">Bilateral</button>
                            </div>
                            <div id="mini-result-topic4" class="mt-3 p-3 rounded-3 bg-light border border-light" style="display: none; font-size: 0.9rem;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Sidebar -->
            <div class="col-lg-4">
                
                <!-- Widget Kearifan Lokal -->
                <div class="sidebar-widget fade-in-up delay-2">
                    <h5 class="widget-title">
                        <i class="bi bi-flower1" style="color: var(--color-teal);"></i> Kearifan Lokal
                    </h5>
                    <p class="small text-secondary mb-3">Adaptasi masyarakat tradisional terhadap kondisi alam dan potensi bencana di lingkungannya.</p>
                    
                    <h6 class="fw-bold fs-6 font-inter mt-4">Arsitektur Rumah Gadang</h6>
                    <p class="small text-secondary">Masyarakat Minangkabau membangun Rumah Gadang dengan struktur adaptif terhadap gempa bumi. Tiang utama tidak ditanam ke tanah, melainkan dialaskan pada batu datar.</p>
                    
                    <div class="wisdom-box">
                        <p class="small mb-0 fw-semibold" style="color: #0F766E;">
                            <i class="bi bi-info-circle me-2"></i>
                            Sistem konstruksinya menggunakan pasak kayu tanpa paku, membuatnya lentur dan berayun mengikuti guncangan gempa tanpa roboh.
                        </p>
                    </div>

                    <!-- Video Thumbnail -->
                    <div class="position-relative rounded-4 overflow-hidden shadow-sm mt-3 border border-light" id="rg-video-wrapper" style="cursor: pointer;">
                        <img src="{{ asset('homepage/img/rumah gadang.jpg') }}" alt="Rumah Gadang" id="rg-video-thumb" class="img-fluid w-100" style="min-height: 180px; object-fit: cover;" onerror="this.src='https://placehold.co/600x400/4F46E5/FFFFFF?text=Rumah+Gadang'">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.2);"></div>
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <div class="bg-white text-primary rounded-circle d-flex align-items-center justify-content-center shadow-lg" style="width: 56px; height: 56px; transition: transform 0.2s;" id="rg-video-play" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                                <i class="bi bi-play-fill fs-2 ms-1"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Widget Kuis -->
                <div class="sidebar-widget widget-quiz fade-in-up delay-3 sticky-top" style="top: 100px;">
                    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom border-warning-subtle pb-3">
                        <h5 class="widget-title m-0">
                            <i class="bi bi-lightning-charge-fill"></i> Kuis Evaluasi
                        </h5>
                        <span class="badge bg-white text-dark border border-warning-subtle rounded-pill px-3 py-2 fw-bold shadow-sm" id="quizCounter">1 / 5</span>
                    </div>
                    
                    <div id="quiz-area"></div>
                    <div id="quiz-result-area" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
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

    // --- TAMBAHAN: Logika untuk Mini Kuis (Cek Pemahaman) di setiap Sub Materi ---
    const miniQuizExplanations = {
        'topic1': 'Benar sekali! Letak absolut di lintang khatulistiwa membuat daerah Minangkabau beriklim tropis sehingga curah hujannya memadai untuk kesuburan tanah.',
        'topic2': 'Tepat! Complementarity (saling melengkapi) terjadi karena wilayah Darek dan Pasisia memiliki potensi alam yang berbeda namun sama-sama dibutuhkan.',
        'topic3': 'Tepat! Galodo adalah sebutan khas masyarakat lokal untuk bencana banjir bandang dahsyat yang menyertakan lumpur dan material vulkanik atau bebatuan dari atas perbukitan.',
        'topic4': 'Tepat! Minangkabau adalah penganut sistem Matrilineal terbesar di dunia, di mana garis keturunan dan harta peninggalan diwariskan dari pihak ibu ke anak perempuan.'
    };

    function checkMiniQuiz(topicId, selectedIndex, correctIndex, btnElement) {
        const container = document.getElementById(`mini-quiz-${topicId}`);
        const allBtns = container.querySelectorAll('.mini-option');
        const resultDiv = document.getElementById(`mini-result-${topicId}`);

        // Disable semua tombol di mini kuis ini agar tidak bisa diklik dua kali
        allBtns.forEach(btn => btn.style.pointerEvents = 'none');

        const isCorrect = selectedIndex === correctIndex;

        if (isCorrect) {
            btnElement.classList.add('correct');
            resultDiv.innerHTML = `<span class="text-success fw-bold d-block mb-1"><i class="bi bi-check-circle-fill me-1"></i> Tepat Sekali!</span> <span class="text-secondary fw-normal">${miniQuizExplanations[topicId]}</span>`;
        } else {
            btnElement.classList.add('wrong');
            // Highlight jawaban yang benar
            allBtns[correctIndex].classList.add('correct');
            allBtns[correctIndex].style.opacity = '0.7';
            resultDiv.innerHTML = `<span class="text-danger fw-bold d-block mb-1"><i class="bi bi-x-circle-fill me-1"></i> Kurang Tepat.</span> <span class="text-secondary fw-normal">Coba perhatikan lagi materinya. ${miniQuizExplanations[topicId]}</span>`;
        }

        resultDiv.style.display = 'block';
        resultDiv.classList.add('fade-in-up');
    }

    // 3. Quiz Logic (Kuis Evaluasi Akhir di Sidebar)
    const quizData = [
        {
            question: "Apa keuntungan utama dari lokasi absolut Sumatera Barat (Minangkabau) yang dilewati oleh garis khatulistiwa?",
            options: [
                "Memiliki iklim tropis yang subur untuk kegiatan agraris",
                "Sangat aman dari ancaman gempa tektonik",
                "Memiliki empat musim sepanjang tahun",
                "Tidak memiliki perbukitan atau gunung berapi"
            ],
            answer: 0,
            explanation: "Lokasi absolut di garis khatulistiwa memberikan iklim tropis dengan sinar matahari dan curah hujan cukup, sangat cocok untuk budaya bertani masyarakat pedesaan Minangkabau."
        },
        {
            question: "Mengapa arsitektur Rumah Gadang dianggap adaptif terhadap bencana geologis di Sumatera Barat?",
            options: [
                "Dibangun murni menggunakan beton cor",
                "Dibangun jauh dari zona dataran tinggi",
                "Menggunakan sistem pasak kayu tanpa paku",
                "Atapnya sengaja dibuat sangat berat dan tebal"
            ],
            answer: 2,
            explanation: "Sistem konstruksi pasak kayu membuat tiang bangunan Rumah Gadang bersifat lentur, sehingga dapat berayun menahan guncangan gempa tektonik."
        },
        {
            question: "Interaksi dagang antara kawasan pegunungan (Darek) dan pesisir (Pasisia) di Minangkabau didorong oleh prinsip keruangan, yaitu...",
            options: [
                "Saling melengkapi (Complementarity)",
                "Pemisahan kebudayaan murni",
                "Kesamaan hasil pertanian mutlak",
                "Isolasi geografis karena lembah"
            ],
            answer: 0,
            explanation: "Interaksi antarruang sangat kuat jika terjadi asas Saling Melengkapi, di mana Darek menghasilkan sayur/beras dan Pasisia menghasilkan hasil tangkapan laut/garam."
        },
        {
            question: "Sistem pewarisan harta pusaka Minangkabau yang jatuh pada garis ibu (Matrilineal) ikut mendorong tradisi ekonomi interaksi bagi kaum laki-lakinya yang dikenal dengan sebutan...",
            options: [
                "Marantau",
                "Maanta Marapulai",
                "Turun Mandi",
                "Batagak Pangulu"
            ],
            answer: 0,
            explanation: "Karena laki-laki tidak mendapatkan warisan harta pusaka utama kaum (tanah ulayat), mereka didorong untuk merantau mencari kesuksesan finansial, ilmu, dan pengalaman hidup di luar kampung."
        },
        {
            question: "Bencana akibat cuaca ekstrem (perubahan iklim) di lereng gunung Minangkabau sering memicu banjir bandang lahar dingin yang masyarakat lokal sebut sebagai...",
            options: [
                "Abrasi",
                "Tsunami",
                "Galodo",
                "Likuifaksi"
            ],
            answer: 2,
            explanation: "Galodo adalah bahasa lokal untuk menyebut banjir bandang besar yang menyapu material dari lereng pegunungan, sering terjadi saat intensitas curah hujan ekstrem turun di kawasan dataran tinggi Sumatera Barat."
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
            html += `<button class="quiz-option shadow-sm" onclick="checkAnswer(${index}, this)">${opt}</button>`;
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
                    <p class="small mb-4 mt-2" style="opacity: 0.95; line-height: 1.6;">${q.explanation}</p>
                    <button class="btn btn-light btn-sm w-100 fw-bold text-dark rounded-pill py-2 font-inter shadow-sm" onclick="nextQuestion()">Lanjut Soal <i class="bi bi-arrow-right ms-1"></i></button>
                </div>
            `;
            resultArea.style.display = 'block';
        }, 900);
    }

    function nextQuestion() {
        currentQ++;
        renderQuestion();
    }

    function showResult() {
        quizArea.style.display = 'none';
        counterDisplay.textContent = "Selesai";
        counterDisplay.className = 'badge bg-success text-white rounded-pill px-3 py-2 fw-bold shadow-sm';
        
        const percentage = Math.round((score / quizData.length) * 100);
        let msg = percentage >= 80 ? "Sangat Baik! 🏆" : (percentage >= 60 ? "Cukup Baik 👍" : "Perlu Belajar Lagi 📚");
        
        resultArea.innerHTML = `
            <div class="text-center py-4">
                <div class="display-3 fw-bold mb-2" style="color: var(--color-brand); font-family: 'Inter', sans-serif;">${score}<span class="fs-3 text-muted">/${quizData.length}</span></div>
                <h5 class="fw-bold font-inter text-dark">${msg}</h5>
                <div class="progress my-3 mx-auto" style="height: 8px; width: 80%; border-radius: 50px;">
                  <div class="progress-bar ${percentage >= 80 ? 'bg-success' : (percentage >= 60 ? 'bg-warning' : 'bg-danger')}" role="progressbar" style="width: ${percentage}%"></div>
                </div>
                <p class="small text-secondary mb-4">Nilai ketuntasan kamu: <span class="fw-bold text-dark">${percentage}%</span></p>
                <button class="btn-action w-100 rounded-pill shadow-sm d-flex justify-content-center align-items-center gap-2" onclick="resetQuiz()">
                    <i class="bi bi-arrow-counterclockwise"></i> Ulangi Kuis
                </button>
            </div>
        `;
        resultArea.style.display = 'block';
    }

    function resetQuiz() {
        currentQ = 0;
        score = 0;
        counterDisplay.className = 'badge bg-white text-dark border border-warning-subtle rounded-pill px-3 py-2 fw-bold shadow-sm';
        renderQuestion();
    }

    // Init Quiz
    renderQuestion();

</script>
</body>
</html>