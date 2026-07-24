<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Materi Pembelajaran - Tema 3</title>
    
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
            /* PALET WARNA TEMA 3 - Ocean/Sunset (Teal/Blue/Orange) */
            --bg-primary: #F0F9FF; /* Very light blue */
            --bg-secondary: #FFFFFF;
            --bg-gradient-start: #0284C7;
            --bg-gradient-end: #0369A1;
            --bg-gradient-light: linear-gradient(135deg, #F0F9FF 0%, #FFF7ED 100%);
            
            --text-primary: #1E1B4B;
            --text-secondary: #4B5563;
            --text-muted: #9CA3AF;
            
            --color-brand: #0284C7; /* Ocean Blue */
            --color-brand-light: #7DD3FC;
            --color-brand-dark: #0369A1;
            --color-accent: #EA580C; /* Sunset orange */
            --color-accent-light: #F97316;
            --color-pink: #0891B2;
            --color-teal: #0D9488;
            --color-red: #EF4444;
            --color-green: #10B981;
            
            --surface-white: #FFFFFF;
            --surface-glass: rgba(255, 255, 255, 0.7);
            --border-color: #E5E7EB;
            
            --shadow-sm: 0 1px 3px rgba(2, 132, 199, 0.06);
            --shadow-md: 0 4px 20px rgba(2, 132, 199, 0.08);
            --shadow-lg: 0 10px 40px rgba(2, 132, 199, 0.12);
            --shadow-xl: 0 20px 60px rgba(2, 132, 199, 0.15);
            
            --radius-sm: 8px;
            --radius-md: 16px;
            --radius-lg: 24px;
            --radius-xl: 32px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--bg-gradient-light);
            color: var(--text-primary);
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

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

        /* Layout persis seperti Tema 1 */
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
            border-bottom: 1px solid rgba(2, 132, 199, 0.08);
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
            background: linear-gradient(135deg, var(--color-brand), var(--color-accent));
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
            background: linear-gradient(135deg, #0284C7 0%, #0369A1 50%, #EA580C 100%);
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
            background: radial-gradient(circle, rgba(234, 88, 12, 0.15) 0%, transparent 70%);
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
            border: 1px solid rgba(2, 132, 199, 0.06);
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
            background: linear-gradient(135deg, var(--color-brand), var(--color-accent));
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
            box-shadow: 0 0 0 4px rgba(2, 132, 199, 0.1);
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

        /* ====== CONTENT CARD ====== */
        .content-card {
            background: var(--surface-white);
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            box-shadow: var(--shadow-md);
            margin-bottom: 2rem;
            border: 1px solid rgba(2, 132, 199, 0.04);
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
            background: linear-gradient(135deg, rgba(2, 132, 199, 0.1), rgba(234, 88, 12, 0.1));
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

        /* ====== ACCORDION ====== */
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
            background: linear-gradient(135deg, rgba(2, 132, 199, 0.05), rgba(234, 88, 12, 0.05));
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

        /* ====== SIDEBAR WIDGET ====== */
        .sidebar-widget {
            background: var(--surface-white);
            border-radius: var(--radius-lg);
            padding: 2rem;
            box-shadow: var(--shadow-md);
            margin-bottom: 2rem;
            border: 1px solid rgba(2, 132, 199, 0.04);
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

        .widget-title i { color: var(--color-brand); }
        .widget-quiz .widget-title i { color: var(--color-accent); }

        /* ====== QUIZ ====== */
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

        /* ====== ANIMATIONS ====== */
        .fade-in-up { opacity: 0; transform: translateY(30px); animation: fadeInUp 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        @keyframes fadeInUp { to { opacity: 1; transform: translateY(0); } }
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }

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
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: var(--bg-primary); }
        ::-webkit-scrollbar-thumb { background: linear-gradient(135deg, var(--color-brand), var(--color-pink)); border-radius: 50px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--color-brand-dark); }
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
                <i class="bi bi-arrow-left"></i> Kembali Menu
            </a>
        </div>
    </div>
</nav>

<!-- Page Header Baru -->
<header class="page-header">
    <div class="app-container header-content">
        <span class="header-badge">
            <i class="bi bi-bar-chart-line-fill me-2"></i>Materi Inti • Tema 3
        </span>
        <h1>Potensi Ekonomi Lingkungan</h1>
        <p class="lead">Mempelajari pemanfaatan sumber daya alam yang berkelanjutan, potensi ekonomi menuju negara maju, dan interaksi sosial masyarakat.</p>
        
        <div class="d-flex flex-wrap gap-3 mt-4">
            <span class="badge-tag-white"><i class="bi bi-clock me-1"></i> Estimasi baca: 25 mnt</span>
            <span class="badge-tag-white"><i class="bi bi-cash-coin me-1"></i> Ekonomi</span>
            <span class="badge-tag-white"><i class="bi bi-tree me-1"></i> Sumber Daya Alam</span>
        </div>
    </div>
</header>

<div class="content-wrapper" style="padding-bottom: 4rem;">
    <div class="app-container">
        
        <!-- Admin Controls Area -->
        <div class="admin-controls-card fade-in-up delay-1">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <div class="admin-title">
                        Tema 3
                        <span class="badge-admin">Mode Kelola</span>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="d-flex flex-column flex-md-row justify-content-md-end gap-3 align-items-md-center">
                        <div class="d-flex align-items-center gap-2">
                            <label class="fw-semibold text-secondary mb-0" style="font-size:0.9rem; white-space: nowrap;">Filter Tema:</label>
                            <form action="{{ route('siswa.materi.index') }}" method="GET" id="temaForm" class="m-0">
                                <select class="filter-select" name="tema" onchange="this.form.submit()">
                                    <option value="tema1" {{ request('tema')=='tema1' ? 'selected' : '' }}>Tema 1</option>
                                    <option value="tema2" {{ request('tema')=='tema2' ? 'selected' : '' }}>Tema 2</option>
                                    <option value="tema3" {{ request('tema')=='tema3' ? 'selected' : '' }}>Tema 3</option>
                                    <option value="tema4" {{ request('tema')=='tema4' ? 'selected' : '' }}>Tema 4</option>
                                </select>
                            </form>
                        </div>
                        {{-- <a href="{{ route('guru.materi.create',['tema'=>'tema3']) }}" class="btn-add-materi" style="text-decoration: none;">
                            <i class="fas fa-plus"></i> Tambah Materi
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 g-lg-5">
            <!-- Kolom Kiri: Materi -->
            <div class="col-lg-8">
                
                <!-- Looping Materi dari Database -->
                @forelse($materi as $item)
                <div class="content-card fade-in-up delay-2">
                    <div class="d-flex justify-content-between align-items-start border-bottom pb-3 mb-4 flex-wrap gap-3">
                        <h4 class="dynamic-content-title">
                            <i class="bi bi-journal-text"></i>
                            {{ $item->judul }}
                        </h4>
                        {{-- <div class="d-flex gap-2 flex-shrink-0">
                            <a href="{{ route('guru.materi.edit', $item->id) }}" class="btn btn-outline-warning btn-sm rounded-pill px-3 fw-bold d-flex align-items-center gap-1">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('guru.materi.destroy', $item->id) }}" method="POST" class="d-inline m-0">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm rounded-pill px-3 fw-bold d-flex align-items-center gap-1" onclick="return confirm('Hapus materi ini selamanya?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </div> --}}
                    </div>

                    @if($item->deskripsi)
                        <p class="fw-bold p-3 mb-4 rounded-3" style="background: var(--bg-primary); border-left: 4px solid var(--color-brand); font-family: 'Inter', sans-serif;">
                            {{ $item->deskripsi }}
                        </p>
                    @endif

                    <div class="content-text text-dark">
                        {!! $item->konten !!}
                    </div>

                    @if($item->mediaPendukung->count())
                        {{-- <hr class="my-5 opacity-25" style="border-color: var(--color-brand);"> --}}
                        <h5 class="fw-bold mb-4" style="color: var(--text-primary);">
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
                                    <button class="btn btn-primary btn-sm rounded-pill px-4 fw-bold" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="background: var(--color-brand); border: none;">
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
                        <p class="mb-0 small">Klik tombol "Tambah Materi" di atas untuk mulai membuat konten untuk Tema 3.</p>
                    </div>
                </div>
                @endforelse
                
                <!-- Konten Bawaan (Statis) -->
                <div class="content-card fade-in-up delay-3">
                    <h4 class="section-title">
                        <i class="bi bi-stars"></i> Pembelajaran Interaktif (Integrasi Minangkabau)
                    </h4>

                    <!-- Topik 1 -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon">
                                <i class="bi bi-tree-fill"></i>
                            </div>
                            <h3 class="topic-title">Pemanfaatan & Pelestarian Sumber Daya Alam</h3>
                        </div>
                        <p>Sumber daya alam (SDA) adalah segala sesuatu yang ada di permukaan bumi. Di Sumatera Barat, kearifan lokal memegang peran penting dalam pemanfaatan sungai, hutan, dan tanah agraris agar tidak dieksploitasi berlebihan.</p>
                        
                        <div class="accordion custom-accordion" id="accordionSDA">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRenew">
                                        <i class="bi bi-arrow-repeat me-2 text-success"></i> SDA Dapat Diperbarui
                                    </button>
                                </h2>
                                <div id="collapseRenew" class="accordion-collapse collapse" data-bs-parent="#accordionSDA">
                                    <div class="accordion-body">
                                        <p class="mb-0 text-dark">Contoh: Hutan tropis dan sungai-sungai di Minangkabau yang dijaga melalui tradisi adat agar ekosistemnya tetap pulih.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNonRenew">
                                        <i class="bi bi-slash-circle me-2 text-danger"></i> SDA Tidak Dapat Diperbarui
                                    </button>
                                </h2>
                                <div id="collapseNonRenew" class="accordion-collapse collapse" data-bs-parent="#accordionSDA">
                                    <div class="accordion-body">
                                        <p class="mb-0 text-dark">Contoh: Tambang batu bara (seperti di Ombilin, Sawahlunto masa lampau) dan emas, yang habis jika terus dikeruk.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Topik 2 -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon" style="background: rgba(245, 158, 11, 0.15); color: var(--color-accent);">
                                <i class="bi bi-building-up"></i>
                            </div>
                            <h3 class="topic-title">Potensi Demografi dan Ekonomi Nagari</h3>
                        </div>
                        <p>Indonesia sedang menapaki masa <strong>Bonus Demografi</strong>, di mana usia produktif lebih banyak. Dalam konteks budaya lokal, pemuda Minang memiliki dorongan ekonomi yang kuat melalui tradisi <em>Marantau</em>.</p>
                        
                        <div class="highlight-box">
                            <p><i class="bi bi-people-fill me-2 fs-5"></i><strong>Kemandirian Ekonomi:</strong><br><span class="mt-2 d-block text-secondary" style="font-family: 'Merriweather', serif; font-weight: normal; font-size: 0.95rem;">Merantau mengajarkan etos kerja, kewirausahaan, dan pertukaran pengetahuan antar ruang (migrasi). Pemuda yang sukses di rantau seringkali mengirimkan modal untuk membangun desa asalnya (Nagari), menjadi motor penggerak ekonomi berkelanjutan.</span></p>
                        </div>
                    </div>

                    <!-- Topik 3 -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon" style="background: rgba(236, 72, 153, 0.15); color: var(--color-pink);">
                                <i class="bi bi-map-fill"></i>
                            </div>
                            <h3 class="topic-title">Konsep Toponimi dalam Budaya</h3>
                        </div>
                        <p>Toponimi adalah bidang ilmu linguistik dan geografi yang mempelajari <strong>asal-usul penamaan tempat</strong>. Ini merekam jejak sejarah dan identitas suatu masyarakat.</p>
                        <p>Nama tempat sering merujuk pada bentang alam (geomorfologi). Contohnya di Minangkabau:</p>
                        <ul class="mb-4">
                            <li><strong>"Batang"</strong> (berarti sungai), seperti <em>Batang Arau</em> atau <em>Batang Anai</em>.</li>
                            <li><strong>"Koto" / "Kubu"</strong> (pemukiman berbenteng), seperti <em>Koto Tangah</em>.</li>
                            <li><strong>"Bukik"</strong> (bukit), seperti <em>Bukiktinggi</em>.</li>
                        </ul>
                    </div>

                    <!-- Video Kesimpulan -->
                    <div class="topic-block bg-white border-0 border-top border-light mt-5 pt-5 text-center">
                        <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-2 mb-3 fw-bold border border-primary-subtle"><i class="bi bi-play-btn-fill me-1"></i> Tontonan Pendalaman</span>
                        <h5 class="fw-bold mb-3 font-inter fs-4">Perubahan Potensi Sumber Daya Alam</h5>
                        <p class="mb-4 mx-auto" style="max-width: 600px;">Simak video berikut untuk melihat bagaimana potensi SDA kita berubah seiring waktu dan aktivitas ekonomi.</p>
                        
                        <div class="media-wrapper ratio-16x9 shadow-lg rounded-4 border border-light">
                            <iframe src="https://www.youtube.com/embed/Yph7nGy7nlk" title="YouTube video player" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Sidebar -->
            <div class="col-lg-4">
                
                <!-- Widget Kearifan Lokal -->
                <div class="sidebar-widget fade-in-up delay-2">
                    <h5 class="widget-title">
                        <i class="bi bi-globe-central-south-asia" style="color: var(--color-teal);"></i> Kearifan Ekologi
                    </h5>
                    <p class="small text-secondary mb-3">Masyarakat adat Minangkabau memiliki cara-cara tradisional yang cerdas untuk mengelola potensi alam ekonomi tanpa merusaknya.</p>
                    
                    <div class="accordion custom-accordion mb-4" id="accordionKearifan">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-2" type="button" data-bs-toggle="collapse" data-bs-target="#kLokal1" style="font-size: 0.9rem;">
                                    Tradisi Ikan Larangan
                                </button>
                            </h2>
                            <div id="kLokal1" class="accordion-collapse collapse" data-bs-parent="#accordionKearifan">
                                <div class="accordion-body small text-muted">
                                    <strong>Konservasi Sungai:</strong> Suatu kawasan sungai disepakati oleh pemuka adat (Niniak Mamak) dan ulama untuk dilarang diambil ikannya selama periode tertentu (misal 6 bulan - 1 tahun).<br><br>
                                    <strong>Manfaat Ekonomi:</strong> Larangan ini memberi kesempatan ikan berkembang biak. Saat larangan dibuka (panen raya), masyarakat memancing bersama dan hasilnya dilelang/dijual.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Video Thumbnail -->
                    <div class="position-relative rounded-4 overflow-hidden shadow-sm border border-light" id="kl-video-wrapper" style="cursor: pointer;">
                        <img src="https://placehold.co/600x400/0284C7/FFFFFF?text=Ikan+Larangan" alt="Video Kearifan Lokal" id="kl-video-thumb" class="img-fluid w-100" style="min-height: 180px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.2);"></div>
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <div class="bg-white text-primary rounded-circle d-flex align-items-center justify-content-center shadow-lg" style="width: 56px; height: 56px; transition: transform 0.2s;" id="kl-video-play" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
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

<!-- Footer Minimalis -->
<footer class="bg-white border-top py-4 mt-5">
    <div class="app-container text-center text-muted small fw-bold font-inter">
        <p class="mb-0">&copy; Platform Pembelajaran IPS. Terintegrasi Desain Modern.</p>
    </div>
</footer>

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
        const wrapper = document.getElementById('kl-video-wrapper');
        const playBtn = document.getElementById('kl-video-play');
        const thumb = document.getElementById('kl-video-thumb');
        
        function playVideo() {
            wrapper.innerHTML = `
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/HqD22m6rF0I?autoplay=1" allow="autoplay; encrypted-media" class="rounded-4" allowfullscreen></iframe>
                </div>`;
        }
        
        if(playBtn) playBtn.addEventListener('click', playVideo);
        if(thumb) thumb.addEventListener('click', playVideo);
    });

    // 3. Quiz Logic (Tema 3)
    const quizData = [
        {
            question: "Berikut ini yang merupakan contoh sumber daya alam yang TIDAK DAPAT diperbarui di Sumatera Barat adalah...",
            options: [
                "Air sungai Batang Anai dan hutan lindung",
                "Tambang Batu Bara di Sawahlunto",
                "Energi ombak laut di pesisir Mentawai",
                "Lahan pertanian padi"
            ],
            answer: 1, 
            explanation: "Barang tambang seperti batu bara tidak bisa diperbarui karena proses terbentuknya membutuhkan waktu jutaan tahun secara geologis."
        },
        {
            question: "Hutan yang memiliki fungsi pokok sebagai pelindung sistem penyangga kehidupan, mencegah banjir dan mengatur tata air disebut...",
            options: [
                "Hutan Produksi",
                "Hutan Konservasi",
                "Hutan Lindung",
                "Hutan Wisata"
            ],
            answer: 2,
            explanation: "Hutan lindung secara spesifik ditetapkan untuk fungsi menjaga kualitas tanah, mencegah erosi/longsor, dan memastikan cadangan air tanah."
        },
        {
            question: "Kondisi di mana mayoritas penduduk berada pada usia produktif (15-64 tahun) sehingga berpeluang besar meningkatkan pertumbuhan ekonomi disebut...",
            options: [
                "Ledakan Penduduk",
                "Migrasi Demografi",
                "Transmigrasi",
                "Bonus Demografi"
            ],
            answer: 3,
            explanation: "Bonus demografi adalah keuntungan ekonomis yang disebabkan menurunnya rasio ketergantungan. Usia produktif yang banyak akan mendorong produktivitas."
        },
        {
            question: "Banyak nama daerah di Sumatera Barat berawalan kata 'Batang' (contoh: Batang Arau, Batang Kuranji). Dalam ilmu Toponimi, hal ini menunjukkan identitas historis bahwa...",
            options: [
                "Masyarakat masa lalu banyak berprofesi sebagai tukang kayu",
                "Daerah tersebut memiliki bentuk wilayah berbukit tajam",
                "Sungai menjadi pusat awal peradaban dan jalur ekonomi utama",
                "Penduduknya berasal dari suku Batang"
            ],
            answer: 2,
            explanation: "Toponimi (asal usul nama) 'Batang' yang berarti sungai merekam jejak sejarah bahwa sungai adalah urat nadi pemukiman dan transportasi ekonomi nenek moyang."
        },
        {
            question: "Tradisi adat Minangkabau melarang masyarakat menangkap ikan di aliran sungai tertentu demi menjaga ekosistem. Hasil panen bersama nantinya digunakan untuk membangun desa. Tradisi ini disebut...",
            options: [
                "Mandi Balimau",
                "Ikan Larangan",
                "Turun Mandi",
                "Makan Bajamba"
            ],
            answer: 1,
            explanation: "Ikan Larangan adalah bentuk kearifan ekologi untuk mencegah eksploitasi sungai, sekaligus memiliki nilai pemberdayaan ekonomi."
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