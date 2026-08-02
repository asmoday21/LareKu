<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Materi Pembelajaran - Tema 3 (Guru)</title>
    
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
            --bg-primary: #F0F9FF; 
            --bg-secondary: #FFFFFF;
            --bg-gradient-start: #0284C7;
            --bg-gradient-end: #0369A1;
            --bg-gradient-light: linear-gradient(135deg, #F0F9FF 0%, #FFF7ED 100%);
            
            --text-primary: #1E1B4B;
            --text-secondary: #4B5563;
            --text-muted: #9CA3AF;
            
            --color-brand: #0284C7; 
            --color-brand-light: #7DD3FC;
            --color-brand-dark: #0369A1;
            --color-accent: #EA580C; 
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

        .app-container { max-width: 1400px; margin: 0 auto; padding: 0 2rem; }

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

        .topbar-brand { font-weight: 900; font-size: 1.25rem; color: var(--color-brand); display: flex; align-items: center; gap: 0.5rem; }
        .topbar-brand i { font-size: 1.5rem; background: linear-gradient(135deg, var(--color-brand), var(--color-accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }

        .btn-back {
            background: var(--bg-primary); border: none; padding: 0.5rem 1.25rem;
            border-radius: 50px; font-weight: 600; font-size: 0.875rem;
            color: var(--text-secondary); transition: all 0.3s ease; display: flex; align-items: center; gap: 0.5rem;
        }
        .btn-back:hover { background: var(--color-brand); color: white; transform: translateY(-2px); box-shadow: var(--shadow-md); }

        /* ====== HEADER ====== */
        .page-header {
            background: linear-gradient(135deg, #0284C7 0%, #0369A1 50%, #EA580C 100%);
            padding: 5rem 0 4rem; position: relative; overflow: hidden; margin-bottom: 2.5rem;
        }
        .page-header::before {
            content: ''; position: absolute; top: -50%; right: -10%; width: 600px; height: 600px;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
            border-radius: 50%; animation: float 20s ease-in-out infinite;
        }
        .page-header::after {
            content: ''; position: absolute; bottom: -30%; left: -5%; width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(234, 88, 12, 0.15) 0%, transparent 70%);
            border-radius: 50%; animation: float 25s ease-in-out infinite reverse;
        }
        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(30px, -30px) scale(1.1); }
        }

        .header-content { position: relative; z-index: 2; color: white; }
        .header-content h1 { color: white; font-size: 3.5rem; font-weight: 900; line-height: 1.15; margin-bottom: 1rem; text-shadow: 0 2px 20px rgba(0,0,0,0.1); }
        .header-content .lead { font-family: 'Merriweather', serif; color: rgba(255,255,255,0.85); font-size: 1.2rem; max-width: 700px; line-height: 1.8; }
        
        .header-badge {
            display: inline-block; padding: 0.4rem 1.25rem; background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2); border-radius: 50px;
            font-size: 0.8rem; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase; color: white; margin-bottom: 1.5rem;
        }
        .badge-tag-white {
            background: rgba(255,255,255,0.12); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.15);
            color: rgba(255,255,255,0.9); padding: 0.3rem 1rem; border-radius: 50px; font-size: 0.8rem; font-weight: 500; display: inline-block;
        }

        /* ====== ADMIN CONTROLS ====== */
        .admin-controls-card {
            background: var(--surface-white); border-radius: var(--radius-lg); padding: 1.5rem 2rem;
            box-shadow: var(--shadow-md); margin-bottom: 2.5rem; border: 1px solid rgba(2, 132, 199, 0.06); transition: all 0.3s ease;
        }
        .admin-controls-card:hover { box-shadow: var(--shadow-lg); transform: translateY(-2px); }
        
        .admin-title { font-weight: 800; font-size: 1.25rem; color: var(--text-primary); display: flex; align-items: center; gap: 0.75rem; }
        .admin-title .badge-admin {
            background: linear-gradient(135deg, var(--color-brand), var(--color-accent));
            color: white; font-size: 0.65rem; padding: 0.25rem 0.75rem; border-radius: 50px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em;
        }

        .filter-select { border: 2px solid var(--border-color); border-radius: 50px; padding: 0.4rem 2rem 0.4rem 1.25rem; background-color: var(--bg-primary); color: var(--text-primary); font-weight: 600; font-size: 0.9rem; transition: all 0.3s ease; cursor: pointer; }
        .filter-select:focus { border-color: var(--color-brand); box-shadow: 0 0 0 4px rgba(2, 132, 199, 0.1); outline: none; }

        .btn-add-materi { background: linear-gradient(135deg, var(--color-brand), var(--color-brand-dark)); border: none; padding: 0.6rem 1.5rem; border-radius: 50px; font-weight: 700; color: white; transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 0.5rem; text-decoration: none; }
        .btn-add-materi:hover { transform: translateY(-2px) scale(1.02); box-shadow: var(--shadow-lg); color: white; }

        .btn-add-materi-sm { background: var(--bg-primary); color: var(--color-brand); border: 1px solid var(--color-brand-light); padding: 0.4rem 1rem; border-radius: 50px; font-weight: 600; font-size: 0.85rem; transition: all 0.2s ease; display: inline-flex; align-items: center; gap: 0.4rem; text-decoration: none; }
        .btn-add-materi-sm:hover { background: var(--color-brand); color: white; }

        /* ====== CONTENT CARD & NESTED CARD ====== */
        .content-card {
            background: var(--surface-white); border-radius: var(--radius-lg); padding: 2.5rem;
            box-shadow: var(--shadow-md); margin-bottom: 2rem; border: 1px solid rgba(2, 132, 199, 0.04);
            transition: all 0.3s ease; position: relative; overflow: hidden; word-wrap: break-word;
        }
        .content-card::before {
            content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px;
            background: linear-gradient(90deg, var(--color-brand), var(--color-accent), var(--color-pink)); opacity: 0; transition: opacity 0.3s ease;
        }
        .content-card:hover::before { opacity: 1; }
        .content-card:hover { box-shadow: var(--shadow-lg); transform: translateY(-4px); }

        .nested-card {
            background: #FFFFFF; border: 1px solid rgba(0,0,0,0.08); border-radius: var(--radius-md);
            padding: 1.5rem; margin-top: 1.25rem; position: relative; transition: all 0.2s ease; box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        }
        .nested-card:hover { border-color: var(--color-brand-light); box-shadow: var(--shadow-md); }
        .nested-card-title { font-size: 1.15rem; font-weight: 800; color: var(--text-primary); display: flex; align-items: center; gap: 0.5rem; margin-bottom: 1rem; border-bottom: 1px dashed var(--border-color); padding-bottom: 0.75rem; }
        .nested-card-title i { color: var(--color-brand); font-size: 1.25rem; }
        .nested-actions { position: absolute; top: 1.25rem; right: 1.5rem; display: flex; gap: 0.4rem; }

        .dynamic-content-title { font-size: 1.5rem; font-weight: 800; color: var(--text-primary); display: flex; align-items: center; gap: 0.75rem; margin: 0; }
        .dynamic-content-title i { color: var(--color-brand); font-size: 1.75rem; }

        .section-title { font-size: 1.5rem; font-weight: 800; margin-bottom: 1.5rem; padding-bottom: 0.75rem; border-bottom: 3px solid var(--bg-primary); display: flex; align-items: center; gap: 0.75rem; color: var(--text-primary); }
        .section-title i { color: var(--color-brand); font-size: 1.75rem; }

        /* ====== TOPIC BLOCK & ACCORDION ====== */
        .topic-block { margin-bottom: 3rem; padding: 1.5rem; background: var(--bg-primary); border-radius: var(--radius-md); border-left: 4px solid var(--color-brand); }
        .topic-block:last-child { margin-bottom: 0; }
        .topic-header { display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem; }
        .topic-icon { width: 56px; height: 56px; border-radius: var(--radius-md); background: linear-gradient(135deg, rgba(2, 132, 199, 0.1), rgba(234, 88, 12, 0.1)); color: var(--color-brand); display: flex; align-items: center; justify-content: center; font-size: 1.75rem; flex-shrink: 0; }
        .topic-title { font-size: 1.35rem; font-weight: 800; margin: 0; color: var(--text-primary); }

        .highlight-box { background: linear-gradient(135deg, #FEF3C7, #FDE68A); border-radius: var(--radius-md); padding: 1.5rem 2rem; margin: 1.5rem 0; border-left: 5px solid var(--color-accent); position: relative; }
        .highlight-box p { color: #78350F; font-family: 'Inter', sans-serif; font-weight: 600; margin: 0; }
        .highlight-box i { color: var(--color-accent); }

        .custom-accordion { margin-top: 1.5rem; }
        .custom-accordion .accordion-item { border: none; border-radius: var(--radius-md) !important; margin-bottom: 0.75rem; overflow: hidden; box-shadow: var(--shadow-sm); background: white; }
        .custom-accordion .accordion-button { background: white; color: var(--text-primary); font-weight: 700; padding: 1.25rem 1.5rem; font-family: 'Inter', sans-serif; border: none; transition: all 0.3s ease; }
        .custom-accordion .accordion-button:not(.collapsed) { background: linear-gradient(135deg, rgba(2, 132, 199, 0.05), rgba(234, 88, 12, 0.05)); color: var(--color-brand); box-shadow: none; }
        .custom-accordion .accordion-button:focus { box-shadow: none; border-color: transparent; }
        .custom-accordion .accordion-button:hover { background: var(--bg-primary); }
        .custom-accordion .accordion-body { background: white; padding: 1.5rem; border-top: 1px solid var(--border-color); }

        .media-wrapper { border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md); margin: 1.5rem 0; background: #000; position: relative; }
        .ratio-16x9 { position: relative; width: 100%; padding-top: 56.25%; }
        .ratio-16x9 iframe, .ratio-16x9 video, .ratio-16x9 img { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0; object-fit: cover; }

        .attachment-box { background: var(--bg-primary); border: 1px solid rgba(0,0,0,0.05); border-radius: var(--radius-md); padding: 1rem; transition: all 0.3s ease; margin-bottom: 1rem; margin-top: 1rem; display: flex; flex-direction: column; }
        .attachment-box:hover { border-color: var(--color-brand); box-shadow: var(--shadow-md); }
        .document-iframe-container { border-radius: var(--radius-md); overflow: hidden; border: 1px solid var(--border-color); background: #f8fafc; width: 100%; }

        .sidebar-widget { background: var(--surface-white); border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-md); margin-bottom: 2rem; border: 1px solid rgba(2, 132, 199, 0.04); transition: all 0.3s ease; }
        .sidebar-widget:hover { box-shadow: var(--shadow-lg); transform: translateY(-2px); }
        .sidebar-widget.widget-quiz { background: linear-gradient(135deg, #FFFBEB, #FEF3C7); border: 2px solid rgba(245, 158, 11, 0.2); }
        .widget-title { font-size: 1.25rem; font-weight: 800; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.75rem; color: var(--text-primary); }
        .widget-title i { color: var(--color-brand); }
        .widget-quiz .widget-title i { color: var(--color-accent); }

        .quiz-option { display: block; width: 100%; text-align: left; padding: 1rem 1.25rem; background: white; border: 2px solid var(--border-color); border-radius: var(--radius-md); margin-bottom: 0.75rem; font-family: 'Inter', sans-serif; font-size: 0.95rem; font-weight: 600; color: var(--text-primary); transition: all 0.3s ease; cursor: pointer; }
        .quiz-option:hover { border-color: var(--color-brand); background: var(--bg-primary); transform: translateX(6px); box-shadow: var(--shadow-sm); }
        .quiz-option.correct { background: #D1FAE5; border-color: var(--color-green); color: #065F46; }
        .quiz-option.wrong { background: #FEE2E2; border-color: var(--color-red); color: #991B1B; }

        .quiz-result-box { padding: 1.5rem; border-radius: var(--radius-md); margin-top: 1.5rem; font-family: 'Inter', sans-serif; }
        .btn-action { background: linear-gradient(135deg, var(--color-brand), var(--color-brand-dark)); color: white; border: none; padding: 0.75rem 1.5rem; border-radius: 50px; font-weight: 700; transition: all 0.3s ease; font-family: 'Inter', sans-serif; }
        .btn-action:hover { transform: translateY(-2px); box-shadow: var(--shadow-lg); color: white; }

        .reading-progress { position: fixed; top: 0; left: 0; width: 100%; height: 4px; background: transparent; z-index: 1040; }
        .reading-progress-bar { height: 100%; background: linear-gradient(90deg, var(--color-brand), var(--color-accent), var(--color-pink)); width: 0%; border-radius: 0 2px 2px 0; transition: width 0.1s ease; }

        .font-inter { font-family: 'Inter', sans-serif !important; }
        .fade-in-up { opacity: 0; transform: translateY(30px); animation: fadeInUp 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        @keyframes fadeInUp { to { opacity: 1; transform: translateY(0); } }
        .delay-1 { animation-delay: 0.1s; } .delay-2 { animation-delay: 0.2s; } .delay-3 { animation-delay: 0.3s; }

        .wisdom-box { background: var(--bg-primary); padding: 1rem 1.25rem; border-radius: var(--radius-md); border-left: 4px solid var(--color-teal); margin: 1rem 0; }

        @media (max-width: 991.98px) { .app-container { padding: 0 1.25rem; } .content-card { padding: 1.5rem; } .page-header { padding: 3rem 0; } .header-content h1 { font-size: 2.25rem; } }
        @media (max-width: 767.98px) { .header-content h1 { font-size: 1.75rem; } .topic-block { padding: 1rem; } .sidebar-widget { padding: 1.25rem; } .admin-title { font-size: 1.1rem; } }

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
            <a href="{{ route('guru.materi.index') }}" class="btn-back text-decoration-none">
                <i class="bi bi-arrow-left"></i> Kembali ke Modul
            </a>
        </div>
    </div>
</nav>

<header class="page-header">
    <div class="app-container header-content">
        <span class="header-badge">
            <i class="bi bi-bar-chart-line-fill me-2"></i>Materi Inti • Tema 3
        </span>
        <h1>Potensi Ekonomi Lingkungan</h1>
        <p class="lead">Mempelajari pemanfaatan sumber daya alam yang berkelanjutan, potensi ekonomi menuju negara maju, dan interaksi sosial masyarakat.</p>
        
        <div class="d-flex flex-wrap gap-3 mt-4">
            <span class="badge-tag-white"><i class="bi bi-cash-coin me-1"></i> Ekonomi</span>
            <span class="badge-tag-white"><i class="bi bi-tree me-1"></i> Sumber Daya Alam</span>
        </div>
    </div>
</header>

<div class="content-wrapper" style="padding-bottom: 4rem;">
    <div class="app-container">
        
        <div class="admin-controls-card fade-in-up delay-1">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <div class="admin-title font-inter">
                        Tema 3
                        <span class="badge-admin">Mode Kelola</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 g-lg-5">
            <!-- Kolom Kiri: Materi -->
            <div class="col-lg-8">
                
                @php
                    // Logika pemilahan data berdasarkan subtema
                    $materiSda = $materi->filter(function($item) { return \Illuminate\Support\Str::slug($item->subtema) == 'sda' || \Illuminate\Support\Str::slug($item->subtema) == 'potensi-sda'; });
                    $materiMaju = $materi->filter(function($item) { return \Illuminate\Support\Str::slug($item->subtema) == 'negara-maju'; });
                    $materiToponimi = $materi->filter(function($item) { return \Illuminate\Support\Str::slug($item->subtema) == 'toponimi'; });
                    $materiEkonomi = $materi->filter(function($item) { return \Illuminate\Support\Str::slug($item->subtema) == 'ekonomi-sekitar'; });
                    $materiSosial = $materi->filter(function($item) { return \Illuminate\Support\Str::slug($item->subtema) == 'interaksi-sosial'; });

                    $materiUmum = $materi->filter(function($item) {
                        $slug = \Illuminate\Support\Str::slug($item->subtema);
                        return !in_array($slug, ['sda', 'potensi-sda', 'negara-maju', 'toponimi', 'ekonomi-sekitar', 'interaksi-sosial']);
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
                                    @csrf @method('DELETE')
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
                                            <button class="btn btn-primary btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem; background: var(--color-brand); border:none;">
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
                                                <i class="bi bi-info-circle text-primary"></i> Pratinjau dokumen Google Docs Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.
                                            </div>
                                        @elseif($media->jenis == 'ppt')
                                            <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2">
                                                <iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe>
                                            </div>
                                            <div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;">
                                                <i class="bi bi-info-circle text-primary"></i> Pratinjau dokumen Microsoft Office Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.
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
                        <i class="bi bi-stars"></i> Pembelajaran Interaktif (Integrasi Minangkabau)
                    </h4>

                    <!-- ============================================== -->
                    <!-- TOPIK 1: Pemanfaatan Potensi SDA               -->
                    <!-- ============================================== -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon" style="background: rgba(2, 132, 199, 0.15); color: var(--color-brand);">
                                <i class="bi bi-tree-fill"></i>
                            </div>
                            <h3 class="topic-title">Pemanfaatan Potensi SDA</h3>
                        </div>
                        <p>Sumber daya alam (SDA) adalah segala sesuatu di permukaan bumi yang dimanfaatkan untuk memenuhi kebutuhan manusia. Sumatera Barat dianugerahi SDA melimpah, dari pegunungan hingga lautan. Pelestariannya sangat penting agar dapat dinikmati hingga anak cucu.</p>
                        
                        <div class="accordion custom-accordion mb-4" id="accordionSDA">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRenew">
                                        <i class="bi bi-arrow-repeat me-2 text-success"></i> SDA Dapat Diperbarui
                                    </button>
                                </h2>
                                <div id="collapseRenew" class="accordion-collapse collapse" data-bs-parent="#accordionSDA">
                                    <div class="accordion-body">
                                        <p class="mb-0 text-dark font-inter" style="font-size: 0.95rem;">Adalah SDA yang dapat pulih kembali secara alami atau dengan campur tangan manusia. Contohnya luasnya hutan tropis, hasil pertanian sawah bertingkat, dan sungai-sungai bersih di Minangkabau yang senantiasa dijaga ekosistemnya melalui hukum-hukum adat (seperti <em>Rimbo Larangan</em>).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNonRenew">
                                        <i class="bi bi-slash-circle me-2 text-danger"></i> SDA Tidak Dapat Diperbarui
                                    </button>
                                </h2>
                                <div id="collapseNonRenew" class="accordion-collapse collapse" data-bs-parent="#accordionSDA">
                                    <div class="accordion-body">
                                        <p class="mb-0 text-dark font-inter" style="font-size: 0.95rem;">SDA ini jumlahnya sangat terbatas dan akan habis karena proses pembentukannya butuh waktu jutaan tahun. Contoh nyatanya adalah Tambang Batu Bara di Ombilin, Sawahlunto. Dulu berjaya menggerakkan kereta api (Mak Itam), namun kini tambangnya habis dan beralih menjadi situs warisan sejarah dunia UNESCO.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cek Pemahaman Topik 1 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic1">
                            <h6 class="fw-bold text-brand mb-3 d-flex align-items-center gap-2 font-inter">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="text-dark fw-semibold mb-3 font-inter">Kawasan Tambang Batu Bara Ombilin di Sawahlunto kini telah berhenti beroperasi dan menjadi situs sejarah karena batu bara termasuk dalam kategori...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic1', 0, 1, this)">SDA yang dapat diperbarui dengan cepat</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic1', 1, 1, this)">SDA yang tidak dapat diperbarui (akan habis)</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic1', 2, 1, this)">SDA hayati dari tumbuhan purba</button>
                            </div>
                            <div id="mini-result-topic1" class="mt-3 p-3 rounded-3 bg-light border border-light font-inter" style="display: none; font-size: 0.9rem;"></div>
                        </div>

                        <!-- RUANG TAMBAHAN MATERI GURU -->
                        <div class="mt-4 pt-3 border-top border-light">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="fw-bold text-secondary mb-0" style="font-size:0.85rem; letter-spacing:0.5px; text-transform:uppercase;"><i class="bi bi-journal-plus me-1"></i> Catatan Tambahan Topik 1</h6>
                                <a href="{{ route('guru.materi.create',['tema'=>'tema3', 'subtema'=>'sda']) }}" class="btn-add-materi-sm">
                                    <i class="fas fa-plus"></i> Tambah Catatan
                                </a>
                            </div>

                            @foreach($materiSda as $item)
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
                                                    <div><h6 class="mb-0 fw-bold font-inter" style="font-size: 0.9rem;">{{ $media->judul }}</h6></div>
                                                </div>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-primary btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem; background: var(--color-brand); border:none;"><i class="bi bi-eye me-1"></i> Buka File</button>
                                                    @if($media->jenis != 'video_youtube')
                                                    <a href="{{ asset('storage/'.$media->file) }}" target="_blank" download class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Unduh File"><i class="bi bi-cloud-arrow-down-fill"></i></a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div id="preview{{ $media->id }}" class="collapse mt-3 w-100">
                                                @if($media->jenis == 'pdf') <div class="document-iframe-container shadow-sm" style="height: 400px;"><iframe src="{{ asset('storage/'.$media->file) }}" width="100%" height="100%" style="border: none;" allowfullscreen></iframe></div>
                                                @elseif($media->jenis == 'word') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/'.$media->file)) }}&embedded=true" allowfullscreen style="border: none;"></iframe></div>
                                                @elseif($media->jenis == 'ppt') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe></div>
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
                    <!-- TOPIK 2: Potensi Negara Maju                   -->
                    <!-- ============================================== -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon" style="background: rgba(245, 158, 11, 0.15); color: var(--color-accent);">
                                <i class="bi bi-building-up"></i>
                            </div>
                            <h3 class="topic-title">Potensi Negara Maju</h3>
                        </div>
                        <p>Indonesia sedang menapaki jalan untuk menjadi negara maju pada tahun 2045. Salah satu motor penggerak utamanya adalah <strong>Bonus Demografi</strong>, yakni suatu kondisi menguntungkan ketika jumlah penduduk usia produktif (usia pekerja) jauh lebih banyak dibandingkan usia non-produktif (anak-anak dan lansia).</p>
                        
                        <div class="highlight-box mb-4">
                            <p><i class="bi bi-lightbulb-fill me-2 fs-5"></i><strong>Modal Sosial Pemuda Minang:</strong><br><span class="mt-2 d-block text-secondary" style="font-family: 'Merriweather', serif; font-weight: normal; font-size: 0.95rem;">Budaya <em>Marantau</em> (merantau) memupuk kemandirian. Pemuda Minang pergi ke berbagai penjuru nusantara untuk berdagang atau menempuh pendidikan. Etos kerja keras ini merupakan wujud nyata kontribusi usia produktif (Bonus Demografi) dalam memutar roda ekonomi Indonesia secara nasional, sekaligus mengirimkan modal kembali untuk membangun nagari asal mereka.</span></p>
                        </div>

                        <!-- Cek Pemahaman Topik 2 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic2">
                            <h6 class="fw-bold text-accent mb-3 d-flex align-items-center gap-2 font-inter" style="color: var(--color-accent);">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="text-dark fw-semibold mb-3 font-inter">Kondisi menguntungkan bagi suatu negara karena memiliki penduduk usia kerja (produktif) yang sangat melimpah untuk memutar roda ekonomi disebut...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic2', 0, 1, this)">Ledakan Penduduk</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic2', 1, 1, this)">Bonus Demografi</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic2', 2, 1, this)">Migrasi Massal</button>
                            </div>
                            <div id="mini-result-topic2" class="mt-3 p-3 rounded-3 bg-light border border-light font-inter" style="display: none; font-size: 0.9rem;"></div>
                        </div>

                        <!-- RUANG TAMBAHAN MATERI GURU -->
                        <div class="mt-4 pt-3 border-top border-light">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="fw-bold text-secondary mb-0" style="font-size:0.85rem; letter-spacing:0.5px; text-transform:uppercase;"><i class="bi bi-journal-plus me-1"></i> Catatan Tambahan Topik 2</h6>
                                <a href="{{ route('guru.materi.create',['tema'=>'tema3', 'subtema'=>'negara-maju']) }}" class="btn-add-materi-sm">
                                    <i class="fas fa-plus"></i> Tambah Catatan
                                </a>
                            </div>

                            @foreach($materiMaju as $item)
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
                                                    <div><h6 class="mb-0 fw-bold font-inter" style="font-size: 0.9rem;">{{ $media->judul }}</h6></div>
                                                </div>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-primary btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem; background: var(--color-brand); border:none;"><i class="bi bi-eye me-1"></i> Buka File</button>
                                                    @if($media->jenis != 'video_youtube')
                                                    <a href="{{ asset('storage/'.$media->file) }}" target="_blank" download class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Unduh File"><i class="bi bi-cloud-arrow-down-fill"></i></a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div id="preview{{ $media->id }}" class="collapse mt-3 w-100">
                                                @if($media->jenis == 'pdf') <div class="document-iframe-container shadow-sm" style="height: 400px;"><iframe src="{{ asset('storage/'.$media->file) }}" width="100%" height="100%" style="border: none;" allowfullscreen></iframe></div>
                                                @elseif($media->jenis == 'word') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/'.$media->file)) }}&embedded=true" allowfullscreen style="border: none;"></iframe></div>
                                                @elseif($media->jenis == 'ppt') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe></div>
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
                    <!-- TOPIK 3: Toponimi Daerah                       -->
                    <!-- ============================================== -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon" style="background: rgba(13, 148, 136, 0.15); color: var(--color-teal);">
                                <i class="bi bi-map-fill"></i>
                            </div>
                            <h3 class="topic-title">Toponimi Daerah</h3>
                        </div>
                        <p><strong>Toponimi</strong> adalah cabang keilmuan yang mempelajari asal-usul penamaan sebuah tempat atau daerah geografis. Di Ranah Minangkabau, penamaan nagari atau desa biasanya memiliki arti yang merekam sejarah bentuk bentang alam (geomorfologi) dan sejarah aktivitas nenek moyang kita di masa lalu.</p>
                        
                        <p class="mb-3">Berikut adalah beberapa contoh toponimi wilayah Sumatera Barat:</p>
                        <ul class="mb-4">
                            <li><strong>"Batang" (Sungai):</strong> Daerah dengan awalan ini membuktikan bahwa pemukiman kuno tersebut berpusat di tepi sungai karena sungai menjadi sumber air bersih dan jalur transportasi utama. Contoh: <em>Batang Arau, Batang Anai, Batang Agam</em>.</li>
                            <li><strong>"Koto" / "Kubu" (Benteng):</strong> Menandakan bahwa di masa lalu, wilayah tersebut adalah sebuah pemukiman yang diperkuat dengan benteng pertahanan (biasanya dari bambu berduri) untuk melindungi diri dari konflik/binatang buas. Contoh: <em>Koto Tangah, Kubu Dalam</em>.</li>
                            <li><strong>"Bukik" / "Ngarai":</strong> Mengindikasikan kondisi fisik tanah yang bergelombang tinggi atau lembah patahan yang curam. Contoh: <em>Bukiktinggi, Ngarai Sianok</em>.</li>
                        </ul>

                        <!-- Cek Pemahaman Topik 3 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic3">
                            <h6 class="fw-bold text-teal mb-3 d-flex align-items-center gap-2 font-inter" style="color: var(--color-teal);">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="text-dark fw-semibold mb-3 font-inter">Banyaknya nama wilayah di Sumatera Barat yang menggunakan kata "Batang" mengindikasikan bahwa secara sejarah toponimi...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic3', 0, 1, this)">Banyak pepohonan besar yang batangnya dipotong</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic3', 1, 1, this)">Sungai menjadi pusat peradaban dan jalur transportasi masyarakat masa lampau</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic3', 2, 1, this)">Masyarakat dulunya berprofesi khusus sebagai pembuat jembatan</button>
                            </div>
                            <div id="mini-result-topic3" class="mt-3 p-3 rounded-3 bg-light border border-light font-inter" style="display: none; font-size: 0.9rem;"></div>
                        </div>

                        <!-- RUANG TAMBAHAN MATERI GURU -->
                        <div class="mt-4 pt-3 border-top border-light">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="fw-bold text-secondary mb-0" style="font-size:0.85rem; letter-spacing:0.5px; text-transform:uppercase;"><i class="bi bi-journal-plus me-1"></i> Catatan Tambahan Topik 3</h6>
                                <a href="{{ route('guru.materi.create',['tema'=>'tema3', 'subtema'=>'toponimi']) }}" class="btn-add-materi-sm">
                                    <i class="fas fa-plus"></i> Tambah Catatan
                                </a>
                            </div>

                            @foreach($materiToponimi as $item)
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
                                                    <div><h6 class="mb-0 fw-bold font-inter" style="font-size: 0.9rem;">{{ $media->judul }}</h6></div>
                                                </div>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-primary btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem; background: var(--color-brand); border:none;"><i class="bi bi-eye me-1"></i> Buka File</button>
                                                    @if($media->jenis != 'video_youtube')
                                                    <a href="{{ asset('storage/'.$media->file) }}" target="_blank" download class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Unduh File"><i class="bi bi-cloud-arrow-down-fill"></i></a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div id="preview{{ $media->id }}" class="collapse mt-3 w-100">
                                                @if($media->jenis == 'pdf') <div class="document-iframe-container shadow-sm" style="height: 400px;"><iframe src="{{ asset('storage/'.$media->file) }}" width="100%" height="100%" style="border: none;" allowfullscreen></iframe></div>
                                                @elseif($media->jenis == 'word') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/'.$media->file)) }}&embedded=true" allowfullscreen style="border: none;"></iframe></div>
                                                @elseif($media->jenis == 'ppt') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe></div>
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
                    <!-- TOPIK 4: Ekonomi Sekitar                       -->
                    <!-- ============================================== -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon" style="background: rgba(16, 185, 129, 0.15); color: var(--color-green);">
                                <i class="bi bi-shop"></i>
                            </div>
                            <h3 class="topic-title">Ekonomi Sekitar</h3>
                        </div>
                        <p>Setiap daerah memiliki potensi ekonomi unik yang menggerakkan roda kehidupan warganya. Kegiatan ekonomi mencakup tiga hal utama: <strong>Produksi</strong> (menghasilkan barang), <strong>Distribusi</strong> (menyalurkan barang), dan <strong>Konsumsi</strong> (menggunakan barang).</p>
                        
                        <div class="row g-3 mt-3 mb-4">
                            <div class="col-md-6">
                                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100">
                                    <h6 class="fw-bold text-green mb-3 font-inter" style="color: var(--color-green);"><i class="bi bi-hammer me-2"></i>Produksi Kreatif Lokal</h6>
                                    <p class="small text-secondary mb-0">Masyarakat Minangkabau sangat ahli memproduksi kerajinan tangan bernilai tinggi seperti <em>Tenun Songket Pandai Sikek</em> atau <em>Ukiran Kayu Pandai Sikek</em>. Kegiatan ini membuka lapangan kerja dan memutar ekonomi desa secara mandiri.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100">
                                    <h6 class="fw-bold text-accent mb-3 font-inter"><i class="bi bi-truck me-2"></i>Pusat Distribusi</h6>
                                    <p class="small text-secondary mb-0">Pasar tradisional (<em>Pasa</em>) di Sumatera Barat, seperti Pasa Ateh Bukittinggi, menjadi pusat distribusi utama tempat bertemunya hasil tani dari pegunungan dan hasil laut dari pesisir untuk disalurkan ke konsumen.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Cek Pemahaman Topik 4 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic4">
                            <h6 class="fw-bold text-green mb-3 d-flex align-items-center gap-2 font-inter" style="color: var(--color-green);">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="text-dark fw-semibold mb-3 font-inter">Kegiatan warga yang menenun benang menjadi kain Songket Pandai Sikek yang indah untuk dijual kepada wisatawan termasuk ke dalam kegiatan ekonomi di bidang...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic4', 0, 1, this)">Konsumsi</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic4', 1, 1, this)">Produksi</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic4', 2, 1, this)">Distribusi</button>
                            </div>
                            <div id="mini-result-topic4" class="mt-3 p-3 rounded-3 bg-light border border-light font-inter" style="display: none; font-size: 0.9rem;"></div>
                        </div>

                        <!-- RUANG TAMBAHAN MATERI GURU (Nested Card) -->
                        <div class="mt-4 pt-3 border-top border-light">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="fw-bold text-secondary mb-0" style="font-size:0.85rem; letter-spacing:0.5px; text-transform:uppercase;"><i class="bi bi-journal-plus me-1"></i> Catatan Tambahan Topik 4</h6>
                                <a href="{{ route('guru.materi.create',['tema'=>'tema3', 'subtema'=>'ekonomi-sekitar']) }}" class="btn-add-materi-sm">
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
                                                    <div><h6 class="mb-0 fw-bold font-inter" style="font-size: 0.9rem;">{{ $media->judul }}</h6></div>
                                                </div>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-primary btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem; background: var(--color-brand); border:none;"><i class="bi bi-eye me-1"></i> Buka File</button>
                                                    @if($media->jenis != 'video_youtube')
                                                    <a href="{{ asset('storage/'.$media->file) }}" target="_blank" download class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Unduh File"><i class="bi bi-cloud-arrow-down-fill"></i></a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div id="preview{{ $media->id }}" class="collapse mt-3 w-100">
                                                @if($media->jenis == 'pdf') <div class="document-iframe-container shadow-sm" style="height: 400px;"><iframe src="{{ asset('storage/'.$media->file) }}" width="100%" height="100%" style="border: none;" allowfullscreen></iframe></div>
                                                @elseif($media->jenis == 'word') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/'.$media->file)) }}&embedded=true" allowfullscreen style="border: none;"></iframe></div>
                                                @elseif($media->jenis == 'ppt') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe></div>
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
                    <!-- TOPIK 5: Interaksi Sosial                      -->
                    <!-- ============================================== -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon" style="background: rgba(139, 92, 246, 0.15); color: #8B5CF6;">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h3 class="topic-title">Interaksi Sosial</h3>
                        </div>
                        <p>Kegiatan ekonomi yang intens selalu diiringi oleh interaksi sosial antar manusia. Interaksi ini bisa bersifat <strong>Asosiatif</strong> (menuju persatuan/kerjasama) atau <strong>Disosiatif</strong> (menuju konflik/persaingan).</p>
                        <p class="mb-4">Masyarakat Minangkabau mengedepankan prinsip musyawarah untuk menyelesaikan segala urusan agar tetap asosiatif. Di pasar tradisional, budaya <em>tawar-menawar</em> bukan sekadar transaksi angka, melainkan proses interaksi sosial untuk mencari kesepakatan harga yang rela sama rela.</p>
                        
                        <div class="highlight-box mb-4">
                            <p><i class="bi bi-chat-quote-fill me-2 fs-5"></i><strong>Musyawarah Mufakat di Balai Adat:</strong><br><span class="mt-2 d-block text-secondary" style="font-family: 'Merriweather', serif; font-weight: normal; font-size: 0.95rem;">Ketika ada penentuan harga jual komoditas tani atau penyelesaian perselisihan, masyarakat tidak langsung bertindak sendiri. Mereka akan membawa persoalan ke <em>Balai Adat</em> untuk dimusyawarahkan bersama <em>Niniak Mamak</em>. Proses <em>bulek kato dek mufakat</em> (kebulatan kata karena mufakat) ini adalah contoh nyata interaksi asosiatif tingkat tinggi.</span></p>
                        </div>

                        <!-- Cek Pemahaman Topik 5 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic5">
                            <h6 class="fw-bold mb-3 d-flex align-items-center gap-2 font-inter" style="color: #8B5CF6;">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="text-dark fw-semibold mb-3 font-inter">Proses tawar-menawar di pasar tradisional untuk mencapai kesepakatan harga merupakan bentuk proses interaksi sosial yang...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic5', 0, 1, this)">Disosiatif (Menyebabkan Konflik)</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic5', 1, 1, this)">Asosiatif (Menciptakan Kerja Sama)</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic5', 2, 1, this)">Akomodatif</button>
                            </div>
                            <div id="mini-result-topic5" class="mt-3 p-3 rounded-3 bg-light border border-light font-inter" style="display: none; font-size: 0.9rem;"></div>
                        </div>

                        <!-- RUANG TAMBAHAN MATERI GURU (Nested Card) -->
                        <div class="mt-4 pt-3 border-top border-light">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="fw-bold text-secondary mb-0" style="font-size:0.85rem; letter-spacing:0.5px; text-transform:uppercase;"><i class="bi bi-journal-plus me-1"></i> Catatan Tambahan Topik 5</h6>
                                <a href="{{ route('guru.materi.create',['tema'=>'tema3', 'subtema'=>'interaksi-sosial']) }}" class="btn-add-materi-sm">
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
                                                    <div><h6 class="mb-0 fw-bold font-inter" style="font-size: 0.9rem;">{{ $media->judul }}</h6></div>
                                                </div>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-primary btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem; background: var(--color-brand); border:none;"><i class="bi bi-eye me-1"></i> Buka File</button>
                                                    @if($media->jenis != 'video_youtube')
                                                    <a href="{{ asset('storage/'.$media->file) }}" target="_blank" download class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Unduh File"><i class="bi bi-cloud-arrow-down-fill"></i></a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div id="preview{{ $media->id }}" class="collapse mt-3 w-100">
                                                @if($media->jenis == 'pdf') <div class="document-iframe-container shadow-sm" style="height: 400px;"><iframe src="{{ asset('storage/'.$media->file) }}" width="100%" height="100%" style="border: none;" allowfullscreen></iframe></div>
                                                @elseif($media->jenis == 'word') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/'.$media->file)) }}&embedded=true" allowfullscreen style="border: none;"></iframe></div>
                                                @elseif($media->jenis == 'ppt') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe></div>
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
                        <i class="bi bi-flower1" style="color: var(--color-teal);"></i> Kearifan Ekologi
                    </h5>
                    <p class="small text-secondary mb-3 font-inter">Masyarakat adat Minangkabau memiliki cara tradisional yang terbukti ampuh secara ilmiah untuk mengelola potensi alam tanpa mengeksploitasinya.</p>
                    
                    <h6 class="fw-bold fs-6 font-inter mt-4">Tradisi Ikan Larangan</h6>
                    
                    <div class="wisdom-box mb-3">
                        <p class="small mb-2 text-dark font-inter"><strong>Konservasi Sungai:</strong> Suatu kawasan sungai disepakati oleh pemuka adat (Niniak Mamak) dan pemuka agama untuk dilarang diambil ikannya selama periode tertentu (misal 6 bulan - 1 tahun).</p>
                        <p class="small mb-0 text-dark font-inter"><strong>Manfaat Ekonomi:</strong> Larangan ini memberi kesempatan ekosistem sungai pulih dan ikan berkembang biak. Saat larangan dibuka (panen raya), masyarakat memancing dan hasilnya dilelang. Hasilnya murni untuk kas pembangunan Masjid atau fasilitas desa.</p>
                    </div>
                </div>

                <!-- Widget Kuis Evaluasi -->
                <div class="sidebar-widget widget-quiz fade-in-up delay-3 sticky-top" style="top: 100px;">
                    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom border-warning-subtle pb-3">
                        <h5 class="widget-title m-0 font-inter">
                            <i class="bi bi-lightning-charge-fill"></i> Kuis Tema 03
                        </h5>
                        <span class="badge bg-white text-dark border border-warning-subtle rounded-pill px-3 py-2 fw-bold shadow-sm font-inter" id="quizCounter">1 / 5</span>
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
    // 0. Modal Logic
    let formToSubmit = null;
    function showDeleteModal(buttonElement) {
        formToSubmit = buttonElement.closest('form');
        const deleteModal = new bootstrap.Modal(document.getElementById('deleteConfirmModal'));
        deleteModal.show();
    }
    document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
        if (formToSubmit) formToSubmit.submit();
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
        const wrapper = document.getElementById('kl-video-wrapper');
        const playBtn = document.getElementById('kl-video-play');
        const thumb = document.getElementById('kl-video-thumb');
        
        function playVideo() {
            wrapper.innerHTML = `
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/HqD22m6rF0I?autoplay=1" allow="autoplay; encrypted-media" class="rounded-4 bg-black" allowfullscreen></iframe>
                </div>`;
        }
        
        if(playBtn) playBtn.addEventListener('click', playVideo);
        if(thumb) thumb.addEventListener('click', playVideo);
    });

    // 3. Mini Quiz Cek Pemahaman Khusus TEMA 3
    const miniQuizExplanations = {
        'topic1': 'Tepat! Tambang batu bara membutuhkan waktu jutaan tahun untuk terbentuk, sehingga masuk kategori SDA yang tidak dapat diperbarui dan akan habis jika dieksploitasi terus-menerus.',
        'topic2': 'Benar! Bonus Demografi adalah keadaan menguntungkan di mana penduduk produktif lebih banyak, sehingga bisa memacu produktivitas dan pertumbuhan ekonomi negara.',
        'topic3': 'Tepat Sekali! Kata "Batang" berarti sungai, yang menjadi urat nadi peradaban masa lalu untuk air minum dan transportasi.',
        'topic4': 'Tepat! Memproduksi dan menghasilkan kerajinan Songket Pandai Sikek adalah bentuk kegiatan ekonomi di bidang Produksi yang meningkatkan nilai bahan baku.',
        'topic5': 'Tepat! Tawar menawar adalah bentuk interaksi asosiatif karena bertujuan mencari jalan tengah dan kesepakatan yang saling menguntungkan (kerja sama) antara pembeli dan penjual.'
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

    // 4. Quiz Evaluasi Akhir (Tema 3)
    const quizData = [
        {
            question: "Berikut ini yang merupakan contoh sumber daya alam yang TIDAK DAPAT diperbarui di Sumatera Barat adalah...",
            options: [
                "Air sungai Batang Anai dan hutan tropis",
                "Tambang Batu Bara di Ombilin, Sawahlunto",
                "Energi ombak laut di pesisir Mentawai",
                "Hamparan lahan pertanian sawah padi"
            ],
            answer: 1, 
            explanation: "Barang tambang seperti batu bara tidak bisa diperbarui karena proses pembentukannya di dalam bumi membutuhkan waktu jutaan tahun secara geologis."
        },
        {
            question: "Hutan yang memiliki fungsi pokok perlindungan sistem penyangga kehidupan, seperti mencegah banjir dan menjaga tata air di hulu sungai (seperti konsep Rimbo Larangan) adalah...",
            options: [
                "Hutan Produksi",
                "Hutan Konservasi",
                "Hutan Lindung",
                "Hutan Wisata"
            ],
            answer: 2,
            explanation: "Hutan lindung secara spesifik ditetapkan dengan tujuan utama menjaga kualitas dan ketahanan tanah, mencegah erosi/longsor, dan memastikan cadangan air tanah tidak mengering."
        },
        {
            question: "Kondisi di mana mayoritas penduduk suatu negara berada pada usia produktif (15-64 tahun) sehingga berpeluang besar menjadi negara maju disebut...",
            options: [
                "Ledakan Penduduk",
                "Migrasi Demografi",
                "Transmigrasi Terpusat",
                "Bonus Demografi"
            ],
            answer: 3,
            explanation: "Bonus demografi adalah keuntungan di mana rasio ketergantungan menurun drastis. Jumlah usia pekerja/produktif yang besar akan mendorong produktivitas dan pertumbuhan ekonomi negara."
        },
        {
            question: "Banyak nama daerah/nagari di Sumatera Barat yang berawalan kata 'Batang' (contoh: Batang Arau, Batang Anai). Berdasarkan ilmu Toponimi, hal ini merekam jejak sejarah bahwa...",
            options: [
                "Masyarakat masa lampau mayoritas berprofesi sebagai tukang tebang kayu",
                "Daerah tersebut memiliki bentuk lahan berupa perbukitan karang yang tajam",
                "Sungai (Batang) pernah menjadi pusat awal berdirinya peradaban dan urat nadi transportasi/ekonomi",
                "Penduduk aslinya merupakan keturunan campuran dari Suku Batang"
            ],
            answer: 2,
            explanation: "Ilmu toponimi (asal usul nama tempat) 'Batang' yang artinya sungai, menjadi bukti valid sejarah bahwa sungai adalah pusat utama pemukiman, sumber air, dan jalur ekonomi nenek moyang di masa lalu."
        },
        {
            question: "Tradisi adat Minangkabau melarang keras masyarakat menangkap ikan di aliran sungai tertentu demi menjaga ekosistem. Saat panen raya, hasilnya dilelang untuk membangun kas desa. Tradisi ini dinamakan...",
            options: [
                "Mandi Balimau",
                "Ikan Larangan",
                "Turun Mandi",
                "Makan Bajamba"
            ],
            answer: 1,
            explanation: "Tradisi Ikan Larangan adalah bentuk cerdas dari kearifan ekologi (mencegah kepunahan ikan & eksploitasi sungai) yang sekaligus diintegrasikan dengan nilai pemberdayaan ekonomi umat (pembangunan fasilitas Nagari)."
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
                    <p class="small mb-4 mt-2 font-inter" style="opacity: 0.95; line-height: 1.6;">${q.explanation}</p>
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
        let msg = percentage >= 80 ? "Sangat Baik! 🏆" : (percentage >= 60 ? "Cukup Baik 👍" : "Perlu Belajar Lagi 📚");
        
        resultArea.innerHTML = `
            <div class="text-center py-4 font-inter">
                <div class="display-3 fw-bold mb-2" style="color: var(--color-brand);">${score}<span class="fs-3 text-muted">/${quizData.length}</span></div>
                <h5 class="fw-bold font-inter text-dark">${msg}</h5>
                <div class="progress my-3 mx-auto" style="height: 8px; width: 80%; border-radius: 50px;">
                  <div class="progress-bar ${percentage >= 80 ? 'bg-success' : (percentage >= 60 ? 'bg-warning' : 'bg-danger')}" role="progressbar" style="width: ${percentage}%"></div>
                </div>
                <p class="small text-secondary mb-4">Nilai ketuntasan kamu: <span class="fw-bold text-dark">${percentage}%</span></p>
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

    // Init Quiz
    renderQuestion();

</script>
</body>
</html>