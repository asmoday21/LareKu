<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Materi Pembelajaran - Tema 4 (Guru)</title>
    
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
            /* PALET WARNA TEMA 4 - Empowerment (Deep Indigo/Soft Green) */
            --bg-primary: #EEF2FF; 
            --bg-secondary: #FFFFFF;
            --bg-gradient-start: #4338CA;
            --bg-gradient-end: #3730A3;
            --bg-gradient-light: linear-gradient(135deg, #EEF2FF 0%, #F5F3FF 100%);
            
            --text-primary: #1E1B4B;
            --text-secondary: #4B5563;
            --text-muted: #9CA3AF;
            
            --color-brand: #4338CA; 
            --color-brand-light: #818CF8;
            --color-brand-dark: #312E81;
            --color-accent: #10B981; 
            --color-accent-light: #34D399;
            --color-pink: #EC4899;
            --color-teal: #14B8A6;
            --color-red: #EF4444;
            --color-green: #10B981;
            
            --surface-white: #FFFFFF;
            --surface-glass: rgba(255, 255, 255, 0.7);
            --border-color: #E5E7EB;
            
            --shadow-sm: 0 1px 3px rgba(67, 56, 202, 0.06);
            --shadow-md: 0 4px 20px rgba(67, 56, 202, 0.08);
            --shadow-lg: 0 10px 40px rgba(67, 56, 202, 0.12);
            --shadow-xl: 0 20px 60px rgba(67, 56, 202, 0.15);
            
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
            border-bottom: 1px solid rgba(67, 56, 202, 0.08);
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
            background: linear-gradient(135deg, #4338CA 0%, #3730A3 50%, #10B981 100%);
            padding: 5rem 0 4rem; position: relative; overflow: hidden; margin-bottom: 2.5rem;
        }
        .page-header::before {
            content: ''; position: absolute; top: -50%; right: -10%; width: 600px; height: 600px;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
            border-radius: 50%; animation: float 20s ease-in-out infinite;
        }
        .page-header::after {
            content: ''; position: absolute; bottom: -30%; left: -5%; width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.15) 0%, transparent 70%);
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
            box-shadow: var(--shadow-md); margin-bottom: 2.5rem; border: 1px solid rgba(67, 56, 202, 0.06); transition: all 0.3s ease;
        }
        .admin-controls-card:hover { box-shadow: var(--shadow-lg); transform: translateY(-2px); }
        
        .admin-title { font-weight: 800; font-size: 1.25rem; color: var(--text-primary); display: flex; align-items: center; gap: 0.75rem; }
        .admin-title .badge-admin {
            background: linear-gradient(135deg, var(--color-brand), var(--color-accent));
            color: white; font-size: 0.65rem; padding: 0.25rem 0.75rem; border-radius: 50px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em;
        }

        .btn-add-materi-sm { background: var(--bg-primary); color: var(--color-brand); border: 1px solid var(--color-brand-light); padding: 0.4rem 1rem; border-radius: 50px; font-weight: 600; font-size: 0.85rem; transition: all 0.2s ease; display: inline-flex; align-items: center; gap: 0.4rem; text-decoration: none; }
        .btn-add-materi-sm:hover { background: var(--color-brand); color: white; }

        /* ====== CONTENT CARD & NESTED CARD ====== */
        .content-card {
            background: var(--surface-white); border-radius: var(--radius-lg); padding: 2.5rem;
            box-shadow: var(--shadow-md); margin-bottom: 2rem; border: 1px solid rgba(67, 56, 202, 0.04);
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
        
        .nested-card-title { 
            font-size: 1.15rem; font-weight: 800; color: var(--text-primary); 
            display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0; 
        }
        .nested-card-title i { color: var(--color-brand); font-size: 1.25rem; }
        
        .nested-actions { display: flex; gap: 0.4rem; align-items: center; }

        .dynamic-content-title { font-size: 1.5rem; font-weight: 800; color: var(--text-primary); display: flex; align-items: center; gap: 0.75rem; margin: 0; }
        .dynamic-content-title i { color: var(--color-brand); font-size: 1.75rem; }

        .section-title { font-size: 1.5rem; font-weight: 800; margin-bottom: 1.5rem; padding-bottom: 0.75rem; border-bottom: 3px solid var(--bg-primary); display: flex; align-items: center; gap: 0.75rem; color: var(--text-primary); }
        .section-title i { color: var(--color-brand); font-size: 1.75rem; }

        /* ====== TOPIC BLOCK & ACCORDION ====== */
        .topic-block { margin-bottom: 3rem; padding: 1.5rem; background: var(--bg-primary); border-radius: var(--radius-md); border-left: 4px solid var(--color-brand); }
        .topic-block:last-child { margin-bottom: 0; }
        .topic-header { display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem; }
        .topic-icon { width: 56px; height: 56px; border-radius: var(--radius-md); background: linear-gradient(135deg, rgba(67, 56, 202, 0.1), rgba(16, 185, 129, 0.1)); color: var(--color-brand); display: flex; align-items: center; justify-content: center; font-size: 1.75rem; flex-shrink: 0; }
        .topic-title { font-size: 1.35rem; font-weight: 800; margin: 0; color: var(--text-primary); }

        .highlight-box { background: linear-gradient(135deg, #FEF3C7, #FDE68A); border-radius: var(--radius-md); padding: 1.5rem 2rem; margin: 1.5rem 0; border-left: 5px solid var(--color-accent); position: relative; }
        .highlight-box p { color: #78350F; font-family: 'Inter', sans-serif; font-weight: 600; margin: 0; }
        .highlight-box i { color: var(--color-accent); }

        /* ====== EMPTY STATE ====== */
        .empty-state-card {
            background: rgba(255, 255, 255, 0.6); border: 2px dashed var(--border-color);
            border-radius: var(--radius-md); padding: 3rem 2rem; text-align: center;
            transition: all 0.3s ease; margin-top: 1rem;
        }
        .empty-state-card:hover { background: white; border-color: var(--color-brand-light); }
        .empty-state-icon { font-size: 2.5rem; color: var(--border-color); margin-bottom: 1rem; display: block; }

        .custom-accordion { margin-top: 1.5rem; }
        .custom-accordion .accordion-item { border: none; border-radius: var(--radius-md) !important; margin-bottom: 0.75rem; overflow: hidden; box-shadow: var(--shadow-sm); background: white; }
        .custom-accordion .accordion-button { background: white; color: var(--text-primary); font-weight: 700; padding: 1.25rem 1.5rem; font-family: 'Inter', sans-serif; border: none; transition: all 0.3s ease; }
        .custom-accordion .accordion-button:not(.collapsed) { background: linear-gradient(135deg, rgba(67, 56, 202, 0.05), rgba(16, 185, 129, 0.05)); color: var(--color-brand); box-shadow: none; }
        .custom-accordion .accordion-button:focus { box-shadow: none; border-color: transparent; }
        .custom-accordion .accordion-button:hover { background: var(--bg-primary); }
        .custom-accordion .accordion-body { background: white; padding: 1.5rem; border-top: 1px solid var(--border-color); }

        .media-wrapper { border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md); margin: 1.5rem 0; background: #000; position: relative; }
        .ratio-16x9 { position: relative; width: 100%; padding-top: 56.25%; }
        .ratio-16x9 iframe, .ratio-16x9 video, .ratio-16x9 img { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0; object-fit: cover; }

        .attachment-box { background: var(--bg-primary); border: 1px solid rgba(0,0,0,0.05); border-radius: var(--radius-md); padding: 1rem; transition: all 0.3s ease; display: flex; flex-direction: column; }
        .attachment-box:hover { border-color: var(--color-brand); box-shadow: var(--shadow-md); }
        .document-iframe-container { border-radius: var(--radius-md); overflow: hidden; border: 1px solid var(--border-color); background: #f8fafc; width: 100%; }

        .transition-icon { display: inline-block; transition: transform 0.3s ease; }
        button[aria-expanded="true"] .transition-icon { transform: rotate(180deg); }

        .sidebar-widget { background: var(--surface-white); border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-md); margin-bottom: 2rem; border: 1px solid rgba(67, 56, 202, 0.04); transition: all 0.3s ease; }
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
            <i class="bi bi-people-fill me-2"></i>Materi Inti • Tema 4
        </span>
        <h1>Pemberdayaan Masyarakat</h1>
        <p class="lead">Mempelajari keragaman sosial budaya, cara menghadapi permasalahan masyarakat, serta mengelola keuangan dasar demi kemandirian komunitas.</p>
        
        <div class="d-flex flex-wrap gap-3 mt-4">
            <span class="badge-tag-white"><i class="bi bi-heart me-1"></i> Sosial Budaya</span>
            <span class="badge-tag-white"><i class="bi bi-wallet2 me-1"></i> Literasi Finansial</span>
        </div>
    </div>
</header>

<div class="content-wrapper" style="padding-bottom: 4rem;">
    <div class="app-container">
        
        <div class="admin-controls-card fade-in-up delay-1">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <div class="admin-title font-inter">
                        Tema 4
                        <span class="badge-admin">Mode Kelola</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 g-lg-5">
            <!-- Kolom Kiri: Materi -->
            <div class="col-lg-8">
                
                @php
                    $materiSosialBudaya = $materi->filter(function($item) { return \Illuminate\Support\Str::slug($item->subtema) == 'sosial-budaya' || \Illuminate\Support\Str::slug($item->subtema) == 'keragaman'; });
                    $materiPermasalahan = $materi->filter(function($item) { return \Illuminate\Support\Str::slug($item->subtema) == 'permasalahan'; });
                    $materiPemberdayaan = $materi->filter(function($item) { return \Illuminate\Support\Str::slug($item->subtema) == 'pemberdayaan' || \Illuminate\Support\Str::slug($item->subtema) == 'kewirausahaan'; });
                    $materiKomunitas = $materi->filter(function($item) { return \Illuminate\Support\Str::slug($item->subtema) == 'komunitas' || \Illuminate\Support\Str::slug($item->subtema) == 'gotong-royong'; });

                    $materiUmum = $materi->filter(function($item) {
                        $slug = \Illuminate\Support\Str::slug($item->subtema);
                        return !in_array($slug, ['sosial-budaya', 'keragaman', 'permasalahan', 'pemberdayaan', 'kewirausahaan', 'komunitas', 'gotong-royong']);
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
                                <a href="{{ route('guru.materi.edit', $item->id) }}#lampiran" class="btn btn-primary btn-sm rounded-pill px-3 fw-bold d-flex align-items-center gap-1">
                                    <i class="bi bi-paperclip"></i> Kelola Lampiran
                                </a>
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
                        
                        {{-- Logika Penampil Media (Banyak Lampiran) --}}
                        @if($item->mediaPendukung && $item->mediaPendukung->count() > 0)
                            @php
                                $pdfCount = $item->mediaPendukung->where('jenis', 'pdf')->count();
                                $wordCount = $item->mediaPendukung->where('jenis', 'word')->count();
                                $pptCount = $item->mediaPendukung->where('jenis', 'ppt')->count();
                                $videoCount = $item->mediaPendukung->whereIn('jenis', ['video_upload', 'video_youtube'])->count();
                                $linkCount = $item->mediaPendukung->where('jenis', 'link')->count();
                            @endphp

                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 p-3 mt-4 rounded-3 border shadow-sm" style="background: linear-gradient(to right, #F8FAFC, #FFFFFF);">
                                <div class="d-flex flex-wrap gap-2 align-items-center">
                                    <span class="badge bg-primary rounded-pill font-inter px-3 py-2"><i class="bi bi-paperclip me-1"></i> {{ $item->mediaPendukung->count() }} Lampiran</span>
                                    @if($pdfCount > 0) <span class="badge bg-white text-danger border border-danger-subtle rounded-pill font-inter"><i class="bi bi-filetype-pdf"></i> PDF ({{ $pdfCount }})</span> @endif
                                    @if($wordCount > 0) <span class="badge bg-white text-primary border border-primary-subtle rounded-pill font-inter"><i class="bi bi-filetype-doc"></i> Word ({{ $wordCount }})</span> @endif
                                    @if($pptCount > 0) <span class="badge bg-white text-warning border border-warning-subtle rounded-pill font-inter"><i class="bi bi-filetype-ppt"></i> PPT ({{ $pptCount }})</span> @endif
                                    @if($videoCount > 0) <span class="badge bg-white text-success border border-success-subtle rounded-pill font-inter"><i class="bi bi-play-btn"></i> Video ({{ $videoCount }})</span> @endif
                                    @if($linkCount > 0) <span class="badge bg-white text-info border border-info-subtle rounded-pill font-inter"><i class="bi bi-link-45deg"></i> Link ({{ $linkCount }})</span> @endif
                                </div>
                                <button class="btn btn-outline-primary btn-sm rounded-pill fw-bold font-inter px-4 flex-shrink-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMedia{{ $item->id }}" aria-expanded="false">
                                    Lihat Lampiran <i class="bi bi-chevron-down ms-1 transition-icon"></i>
                                </button>
                            </div>

                            <div class="collapse mt-3" id="collapseMedia{{ $item->id }}">
                                <div class="d-flex flex-column gap-3 p-3 border rounded-3 bg-white shadow-sm">
                                    @foreach($item->mediaPendukung as $index => $media)
                                        <div class="attachment-box m-0 border-0 bg-light rounded-3 shadow-sm p-3">
                                            <div class="d-flex w-100 justify-content-between align-items-center flex-wrap gap-3">
                                                <div class="d-flex align-items-center gap-3">
                                                    <span class="fw-bold fs-5 text-brand opacity-50">{{ $loop->parent->iteration ?? 1 }}.{{ strtolower(chr(96 + $loop->iteration)) }}</span>
                                                    <div class="bg-white p-2 rounded-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                                        @if($media->jenis == 'pdf') <i class="bi bi-file-earmark-pdf-fill fs-4 text-danger"></i>
                                                        @elseif($media->jenis == 'word') <i class="bi bi-file-earmark-word-fill fs-4 text-primary"></i>
                                                        @elseif($media->jenis == 'ppt') <i class="bi bi-file-earmark-slides-fill fs-4 text-warning"></i>
                                                        @elseif($media->jenis == 'video_upload') <i class="bi bi-play-circle-fill fs-4 text-success"></i>
                                                        @elseif($media->jenis == 'video_youtube') <i class="bi bi-youtube fs-4 text-danger"></i>
                                                        @elseif($media->jenis == 'link') <i class="bi bi-link-45deg fs-4 text-info"></i>
                                                        @else <i class="bi bi-file-earmark-fill fs-4 text-secondary"></i> @endif
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 fw-bold font-inter text-dark" style="font-size: 0.95rem;">{{ $media->judul }}</h6>
                                                        <span class="badge bg-white text-secondary border mt-1 font-inter" style="font-size: 0.65rem;">
                                                            {{ $media->jenis == 'video_youtube' ? 'YouTube' : ($media->jenis == 'link' ? 'Link Eksternal' : strtoupper(str_replace('_', ' ', $media->jenis))) }}
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2">
                                                    @if($media->jenis == 'link')
                                                        <a href="{{ $media->external_link }}" target="_blank" class="btn btn-info btn-sm rounded-pill px-3 fw-bold font-inter text-white" style="font-size: 0.8rem;"><i class="bi bi-box-arrow-up-right me-1"></i> Buka Link</a>
                                                    @elseif($media->jenis == 'video_youtube')
                                                        <button class="btn btn-danger btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem;"><i class="bi bi-play-circle me-1"></i> Tonton Video</button>
                                                    @else
                                                        <button class="btn btn-primary btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem;"><i class="bi bi-eye me-1"></i> Buka File</button>
                                                        @if($media->file)
                                                            <a href="{{ asset('storage/'.$media->file) }}" target="_blank" download class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center bg-white" style="width: 32px; height: 32px;" title="Unduh File"><i class="bi bi-cloud-arrow-down-fill"></i></a>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>

                                            @if($media->jenis != 'link')
                                            <div id="preview{{ $media->id }}" class="collapse mt-3 w-100 border-top pt-3">
                                                @if($media->jenis == 'pdf')
                                                    <div class="document-iframe-container shadow-sm" style="height: 400px;"><iframe src="{{ asset('storage/'.$media->file) }}" width="100%" height="100%" style="border: none;" allowfullscreen></iframe></div>
                                                @elseif($media->jenis == 'word')
                                                    <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/'.$media->file)) }}&embedded=true" allowfullscreen style="border: none;"></iframe></div>
                                                    <div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau Google Docs Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                @elseif($media->jenis == 'ppt')
                                                    <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe></div>
                                                    <div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau Microsoft Office Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                @elseif($media->jenis == 'video_upload')
                                                    <div class="document-iframe-container ratio ratio-16x9 bg-black shadow-sm"><video controls class="w-100 h-100 rounded-3"><source src="{{ asset('storage/'.$media->file) }}"></video></div>
                                                @elseif($media->jenis == 'video_youtube')
                                                    @php 
                                                        $youtubeId = null;
                                                        if ($media->video_url) {
                                                            preg_match('/(?:youtube\.com.*v=|youtu\.be\/)([^&]+)/', $media->video_url, $match);
                                                            $youtubeId = $match[1] ?? null;
                                                        }
                                                    @endphp
                                                    @if($youtubeId) <div class="document-iframe-container ratio ratio-16x9 shadow-sm"><iframe src="https://www.youtube.com/embed/{{ $youtubeId }}" allowfullscreen style="border: none;"></iframe></div>
                                                    @else <div class="alert alert-warning font-inter"><i class="bi bi-exclamation-triangle me-2"></i> Link YouTube tidak valid.</div> @endif
                                                @endif
                                            </div>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
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
                    <!-- TOPIK 1: Keragaman Sosial Budaya               -->
                    <!-- ============================================== -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h3 class="topic-title">Keragaman Sosial Budaya</h3>
                        </div>
                        <p>Indonesia lahir dari kekayaan suku, ras, bahasa, dan agama yang sangat beragam. Dalam konteks Sumatera Barat, kebudayaan Minangkabau dengan sistem <strong>Matrilineal</strong> (menarik garis keturunan dari pihak ibu) merupakan salah satu identitas budaya yang sangat khas dan paling unik di dunia.</p>
                        
                        <div class="row g-3 mt-2 mb-4">
                            <div class="col-md-6">
                                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100">
                                    <h6 class="fw-bold text-brand mb-3 font-inter"><i class="bi bi-diagram-3 me-2"></i>Tungku Tigo Sajarangan</h6>
                                    <p class="small text-secondary mb-0">Sistem sosial komunal Minangkabau dijaga oleh tiga pilar kepemimpinan: <strong>Niniak Mamak</strong> (pemimpin kaum/adat), <strong>Alim Ulama</strong> (tokoh agama), dan <strong>Cadiak Pandai</strong> (kaum intelektual). Harmoni ketiganya memastikan keputusan nagari diambil secara adil dan komprehensif.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100">
                                    <h6 class="fw-bold text-warning mb-3 font-inter"><i class="bi bi-house-heart me-2"></i>Harta Pusako Tinggi</h6>
                                    <p class="small text-secondary mb-0">Dalam sistem matrilineal, harta leluhur (tanah, sawah, rumah gadang) diturunkan ke garis kekerabatan perempuan. Ini berfungsi strategis sebagai <em>social safety net</em> (jaring pengaman sosial) komunal agar perempuan dan keturunannya terlindungi dari ancaman kemiskinan mutlak.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion custom-accordion mb-4" id="accordionSosial">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAdat">
                                        <i class="bi bi-stars me-2 text-warning"></i> Adat Basandi Syarak
                                    </button>
                                </h2>
                                <div id="collapseAdat" class="accordion-collapse collapse" data-bs-parent="#accordionSosial">
                                    <div class="accordion-body">
                                        <p class="mb-0 text-dark font-inter" style="font-size: 0.95rem;">Filosofi <em>"Adat Basandi Syarak, Syarak Basandi Kitabullah" (ABSSBK)</em> menjadikan adat istiadat Minangkabau bersinergi penuh dengan ajaran agama Islam. Syariat agama menjadi rujukan mutlak (fondasi utama), sementara adat istiadat lokal menjadi wadah aplikasinya dalam kehidupan sehari-hari (karakter masyarakat yang religius dan menjunjung tata krama).</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cek Pemahaman Topik 1 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic1">
                            <h6 class="fw-bold text-brand mb-3 d-flex align-items-center gap-2 font-inter">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="text-dark fw-semibold mb-3 font-inter">Kebudayaan Minangkabau yang menarik garis keturunan dari pihak ibu disebut sistem kekerabatan...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic1', 0, 1, this)">Patrilineal</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic1', 1, 1, this)">Matrilineal</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic1', 2, 1, this)">Bilateral</button>
                            </div>
                            <div id="mini-result-topic1" class="mt-3 p-3 rounded-3 bg-light border border-light font-inter" style="display: none; font-size: 0.9rem;"></div>
                        </div>

                        <!-- RUANG TAMBAHAN MATERI GURU -->
                        <div class="mt-4 pt-3 border-top border-light">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="fw-bold text-secondary mb-0" style="font-size:0.85rem; letter-spacing:0.5px; text-transform:uppercase;"><i class="bi bi-journal-plus me-1"></i> Catatan Tambahan Topik 1</h6>
                                <a href="{{ route('guru.materi.create',['tema'=>'tema4', 'subtema'=>'keragaman']) }}" class="btn-add-materi-sm">
                                    <i class="fas fa-plus"></i> Tambah Catatan
                                </a>
                            </div>

                            @forelse($materiSosialBudaya as $item)
                            <div class="nested-card">
                                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center mb-3 pb-3 border-bottom border-light gap-3">
                                    <h5 class="nested-card-title mb-0 border-0 pb-0"><i class="bi bi-bookmark-star"></i> {{ $item->judul }}</h5>
                                    
                                    <div class="nested-actions d-flex gap-2 align-items-center flex-wrap">
                                        <a href="{{ route('guru.materi.edit', $item->id) }}#lampiran" class="btn btn-primary btn-sm px-2 py-1 d-flex align-items-center gap-1 font-inter shadow-sm" style="font-size: 0.75rem;" title="Kelola Lampiran">
                                            <i class="bi bi-paperclip"></i> Kelola Lampiran
                                        </a>
                                        <div class="d-flex gap-1 border-start ps-2 border-light">
                                            <a href="{{ route('guru.materi.edit',$item->id) }}" class="btn btn-warning text-dark btn-sm px-2 py-1 shadow-sm" title="Edit Materi"><i class="fas fa-edit fs-7"></i></a>
                                            <form action="{{ route('guru.materi.destroy',$item->id) }}" method="POST" class="d-inline">
                                                @csrf @method('DELETE')
                                                <button type="button" class="btn btn-danger btn-sm px-2 py-1 shadow-sm" title="Hapus Materi" onclick="showDeleteModal(this)"><i class="fas fa-trash fs-7"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-text text-dark prose fs-6">{!! $item->konten !!}</div>

                                {{-- Logika Penampil Media (Banyak Lampiran) --}}
                                @if($item->mediaPendukung && $item->mediaPendukung->count() > 0)
                                    @php
                                        $pdfCount = $item->mediaPendukung->where('jenis', 'pdf')->count();
                                        $wordCount = $item->mediaPendukung->where('jenis', 'word')->count();
                                        $pptCount = $item->mediaPendukung->where('jenis', 'ppt')->count();
                                        $videoCount = $item->mediaPendukung->whereIn('jenis', ['video_upload', 'video_youtube'])->count();
                                        $linkCount = $item->mediaPendukung->where('jenis', 'link')->count();
                                    @endphp

                                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 p-3 mt-4 rounded-3 border shadow-sm" style="background: linear-gradient(to right, #F8FAFC, #FFFFFF);">
                                        <div class="d-flex flex-wrap gap-2 align-items-center">
                                            <span class="badge bg-primary rounded-pill font-inter px-3 py-2"><i class="bi bi-paperclip me-1"></i> {{ $item->mediaPendukung->count() }} Lampiran</span>
                                            @if($pdfCount > 0) <span class="badge bg-white text-danger border border-danger-subtle rounded-pill font-inter"><i class="bi bi-filetype-pdf"></i> PDF ({{ $pdfCount }})</span> @endif
                                            @if($wordCount > 0) <span class="badge bg-white text-primary border border-primary-subtle rounded-pill font-inter"><i class="bi bi-filetype-doc"></i> Word ({{ $wordCount }})</span> @endif
                                            @if($pptCount > 0) <span class="badge bg-white text-warning border border-warning-subtle rounded-pill font-inter"><i class="bi bi-filetype-ppt"></i> PPT ({{ $pptCount }})</span> @endif
                                            @if($videoCount > 0) <span class="badge bg-white text-success border border-success-subtle rounded-pill font-inter"><i class="bi bi-play-btn"></i> Video ({{ $videoCount }})</span> @endif
                                            @if($linkCount > 0) <span class="badge bg-white text-info border border-info-subtle rounded-pill font-inter"><i class="bi bi-link-45deg"></i> Link ({{ $linkCount }})</span> @endif
                                        </div>
                                        <button class="btn btn-outline-primary btn-sm rounded-pill fw-bold font-inter px-4 flex-shrink-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMedia{{ $item->id }}" aria-expanded="false">
                                            Lihat Lampiran <i class="bi bi-chevron-down ms-1 transition-icon"></i>
                                        </button>
                                    </div>

                                    <div class="collapse mt-3" id="collapseMedia{{ $item->id }}">
                                        <div class="d-flex flex-column gap-3 p-3 border rounded-3 bg-white shadow-sm">
                                            @foreach($item->mediaPendukung as $index => $media)
                                                <div class="attachment-box m-0 border-0 bg-light rounded-3 shadow-sm p-3">
                                                    <div class="d-flex w-100 justify-content-between align-items-center flex-wrap gap-3">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <span class="fw-bold fs-5 text-brand opacity-50">{{ $loop->parent->iteration ?? 1 }}.{{ strtolower(chr(96 + $loop->iteration)) }}</span>
                                                            <div class="bg-white p-2 rounded-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                                                @if($media->jenis == 'pdf') <i class="bi bi-file-earmark-pdf-fill fs-4 text-danger"></i>
                                                                @elseif($media->jenis == 'word') <i class="bi bi-file-earmark-word-fill fs-4 text-primary"></i>
                                                                @elseif($media->jenis == 'ppt') <i class="bi bi-file-earmark-slides-fill fs-4 text-warning"></i>
                                                                @elseif($media->jenis == 'video_upload') <i class="bi bi-play-circle-fill fs-4 text-success"></i>
                                                                @elseif($media->jenis == 'video_youtube') <i class="bi bi-youtube fs-4 text-danger"></i>
                                                                @elseif($media->jenis == 'link') <i class="bi bi-link-45deg fs-4 text-info"></i>
                                                                @else <i class="bi bi-file-earmark-fill fs-4 text-secondary"></i> @endif
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0 fw-bold font-inter text-dark" style="font-size: 0.95rem;">{{ $media->judul }}</h6>
                                                                <span class="badge bg-white text-secondary border mt-1 font-inter" style="font-size: 0.65rem;">
                                                                    {{ $media->jenis == 'video_youtube' ? 'YouTube' : ($media->jenis == 'link' ? 'Link Eksternal' : strtoupper(str_replace('_', ' ', $media->jenis))) }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex gap-2">
                                                            @if($media->jenis == 'link') <a href="{{ $media->external_link }}" target="_blank" class="btn btn-info btn-sm rounded-pill px-3 fw-bold font-inter text-white" style="font-size: 0.8rem;"><i class="bi bi-box-arrow-up-right me-1"></i> Buka</a>
                                                            @elseif($media->jenis == 'video_youtube') <button class="btn btn-danger btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem;"><i class="bi bi-play-circle me-1"></i> Tonton</button>
                                                            @else <button class="btn btn-primary btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem;"><i class="bi bi-eye me-1"></i> Buka</button>
                                                                @if($media->file) <a href="{{ asset('storage/'.$media->file) }}" target="_blank" download class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center bg-white" style="width: 32px; height: 32px;" title="Unduh File"><i class="bi bi-cloud-arrow-down-fill"></i></a> @endif
                                                            @endif
                                                        </div>
                                                    </div>

                                                    @if($media->jenis != 'link')
                                                    <div id="preview{{ $media->id }}" class="collapse mt-3 w-100 border-top pt-3">
                                                        @if($media->jenis == 'pdf') <div class="document-iframe-container shadow-sm" style="height: 400px;"><iframe src="{{ asset('storage/'.$media->file) }}" width="100%" height="100%" style="border: none;" allowfullscreen></iframe></div>
                                                        @elseif($media->jenis == 'word') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/'.$media->file)) }}&embedded=true" allowfullscreen style="border: none;"></iframe></div><div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau Google Docs Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                        @elseif($media->jenis == 'ppt') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe></div><div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau Microsoft Office Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                        @elseif($media->jenis == 'video_upload') <div class="document-iframe-container ratio ratio-16x9 bg-black shadow-sm"><video controls class="w-100 h-100 rounded-3"><source src="{{ asset('storage/'.$media->file) }}"></video></div>
                                                        @elseif($media->jenis == 'video_youtube')
                                                            @php 
                                                                $youtubeId = null;
                                                                if ($media->video_url) {
                                                                    preg_match('/(?:youtube\.com.*v=|youtu\.be\/)([^&]+)/', $media->video_url, $match);
                                                                    $youtubeId = $match[1] ?? null;
                                                                }
                                                            @endphp
                                                            @if($youtubeId) <div class="document-iframe-container ratio ratio-16x9 shadow-sm"><iframe src="https://www.youtube.com/embed/{{ $youtubeId }}" allowfullscreen style="border: none;"></iframe></div>
                                                            @else <div class="alert alert-warning font-inter"><i class="bi bi-exclamation-triangle me-2"></i> Link YouTube tidak valid.</div> @endif
                                                        @endif
                                                    </div>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                            @empty
                            <div class="empty-state-card">
                                <i class="bi bi-folder-plus empty-state-icon"></i>
                                <h6 class="fw-bold text-dark font-inter">Belum Ada Materi Tambahan</h6>
                                <p class="text-muted font-inter small mb-3">Klik tombol "Tambah Catatan" untuk mulai menyusun lampiran pertama pada topik ini.</p>
                            </div>
                            @endforelse
                        </div>
                    </div>

                    <!-- ============================================== -->
                    <!-- TOPIK 2: Permasalahan Kehidupan                -->
                    <!-- ============================================== -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon" style="background: rgba(239, 68, 68, 0.15); color: var(--color-red);">
                                <i class="bi bi-exclamation-triangle-fill"></i>
                            </div>
                            <h3 class="topic-title">Permasalahan Kehidupan</h3>
                        </div>
                        <p>Dinamika sosial akibat modernisasi, globalisasi, dan dominasi ruang digital seringkali memicu permasalahan dalam kehidupan bermasyarakat. Tanpa saringan budaya yang kuat, masyarakat rentan mengalami <strong>Gegar Budaya (Culture Shock)</strong>.</p>
                        
                        <div class="accordion custom-accordion mb-4" id="accordionPermasalahan">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSumbang">
                                        <i class="bi bi-shield-exclamation me-2 text-danger"></i> Degradasi Moral & Sumbang Duo Baleh
                                    </button>
                                </h2>
                                <div id="collapseSumbang" class="accordion-collapse collapse" data-bs-parent="#accordionPermasalahan">
                                    <div class="accordion-body">
                                        <p class="mb-0 text-dark font-inter" style="font-size: 0.95rem;">Penyimpangan moral dan kenakalan remaja modern sering bermula dari lunturnya tata krama. Budaya Minang sebenarnya memiliki benteng pencegahan berupa <strong>Sumbang Duo Baleh</strong> (12 larangan kesopanan/pantangan), seperti <em>Sumbang Bagaua</em> (etika bergaul antar lawan jenis) dan <em>Sumbang Kurenah</em> (etika bertingkah laku yang menjangkau ruang media sosial). Merevitalisasi pemahaman aturan ini adalah solusi mendasar mencegah krisis moral generasi muda.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAgraria">
                                        <i class="bi bi-map me-2 text-warning"></i> Sengketa Agraria (Tanah Ulayat)
                                    </button>
                                </h2>
                                <div id="collapseAgraria" class="accordion-collapse collapse" data-bs-parent="#accordionPermasalahan">
                                    <div class="accordion-body">
                                        <p class="mb-0 text-dark font-inter" style="font-size: 0.95rem;">Permasalahan sosial ekonomi modern lainnya di Sumatera Barat adalah seringnya terjadi benturan antara hukum positif (pembangunan investasi, perkebunan sawit, proyek pemerintah) dengan status kepemilikan <strong>Tanah Ulayat</strong> (tanah komunal adat milik kaum). Penyelesaian sengketa agraria ini membutuhkan peran diplomasi tingkat tinggi dari kelembagaan adat seperti <em>Kerapatan Adat Nagari (KAN)</em> agar roda perekonomian berjalan namun hak ulayat warga tetap terjaga.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cek Pemahaman Topik 2 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic2">
                            <h6 class="fw-bold text-red mb-3 d-flex align-items-center gap-2 font-inter" style="color: var(--color-red);">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="text-dark fw-semibold mb-3 font-inter">Aturan etika bagi perempuan/remaja Minang untuk menjaga tata krama dan mencegah penyimpangan sosial disebut...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic2', 0, 0, this)">Sumbang Duo Baleh</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic2', 1, 0, this)">Alam Takambang Jadi Guru</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic2', 2, 0, this)">Makan Bajamba</button>
                            </div>
                            <div id="mini-result-topic2" class="mt-3 p-3 rounded-3 bg-light border border-light font-inter" style="display: none; font-size: 0.9rem;"></div>
                        </div>

                        <!-- RUANG TAMBAHAN MATERI GURU -->
                        <div class="mt-4 pt-3 border-top border-light">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="fw-bold text-secondary mb-0" style="font-size:0.85rem; letter-spacing:0.5px; text-transform:uppercase;"><i class="bi bi-journal-plus me-1"></i> Catatan Tambahan Topik 2</h6>
                                <a href="{{ route('guru.materi.create',['tema'=>'tema4', 'subtema'=>'permasalahan']) }}" class="btn-add-materi-sm">
                                    <i class="fas fa-plus"></i> Tambah Catatan
                                </a>
                            </div>

                            @forelse($materiPermasalahan as $item)
                            <div class="nested-card">
                                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center mb-3 pb-3 border-bottom border-light gap-3">
                                    <h5 class="nested-card-title mb-0 border-0 pb-0"><i class="bi bi-bookmark-star"></i> {{ $item->judul }}</h5>
                                    
                                    <div class="nested-actions d-flex gap-2 align-items-center flex-wrap">
                                        <a href="{{ route('guru.materi.edit', $item->id) }}#lampiran" class="btn btn-primary btn-sm px-2 py-1 d-flex align-items-center gap-1 font-inter shadow-sm" style="font-size: 0.75rem;" title="Kelola Lampiran">
                                            <i class="bi bi-paperclip"></i> Kelola Lampiran
                                        </a>
                                        <div class="d-flex gap-1 border-start ps-2 border-light">
                                            <a href="{{ route('guru.materi.edit',$item->id) }}" class="btn btn-warning text-dark btn-sm px-2 py-1 shadow-sm" title="Edit Materi"><i class="fas fa-edit fs-7"></i></a>
                                            <form action="{{ route('guru.materi.destroy',$item->id) }}" method="POST" class="d-inline">
                                                @csrf @method('DELETE')
                                                <button type="button" class="btn btn-danger btn-sm px-2 py-1 shadow-sm" title="Hapus Materi" onclick="showDeleteModal(this)"><i class="fas fa-trash fs-7"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-text text-dark prose fs-6">{!! $item->konten !!}</div>

                                {{-- Logika Penampil Media --}}
                                @if($item->mediaPendukung && $item->mediaPendukung->count() > 0)
                                    @php
                                        $pdfCount = $item->mediaPendukung->where('jenis', 'pdf')->count();
                                        $wordCount = $item->mediaPendukung->where('jenis', 'word')->count();
                                        $pptCount = $item->mediaPendukung->where('jenis', 'ppt')->count();
                                        $videoCount = $item->mediaPendukung->whereIn('jenis', ['video_upload', 'video_youtube'])->count();
                                        $linkCount = $item->mediaPendukung->where('jenis', 'link')->count();
                                    @endphp
                                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 p-3 mt-4 rounded-3 border shadow-sm" style="background: linear-gradient(to right, #F8FAFC, #FFFFFF);">
                                        <div class="d-flex flex-wrap gap-2 align-items-center">
                                            <span class="badge bg-primary rounded-pill font-inter px-3 py-2"><i class="bi bi-paperclip me-1"></i> {{ $item->mediaPendukung->count() }} Lampiran</span>
                                            @if($pdfCount > 0) <span class="badge bg-white text-danger border border-danger-subtle rounded-pill font-inter"><i class="bi bi-filetype-pdf"></i> PDF ({{ $pdfCount }})</span> @endif
                                            @if($wordCount > 0) <span class="badge bg-white text-primary border border-primary-subtle rounded-pill font-inter"><i class="bi bi-filetype-doc"></i> Word ({{ $wordCount }})</span> @endif
                                            @if($pptCount > 0) <span class="badge bg-white text-warning border border-warning-subtle rounded-pill font-inter"><i class="bi bi-filetype-ppt"></i> PPT ({{ $pptCount }})</span> @endif
                                            @if($videoCount > 0) <span class="badge bg-white text-success border border-success-subtle rounded-pill font-inter"><i class="bi bi-play-btn"></i> Video ({{ $videoCount }})</span> @endif
                                            @if($linkCount > 0) <span class="badge bg-white text-info border border-info-subtle rounded-pill font-inter"><i class="bi bi-link-45deg"></i> Link ({{ $linkCount }})</span> @endif
                                        </div>
                                        <button class="btn btn-outline-primary btn-sm rounded-pill fw-bold font-inter px-4 flex-shrink-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMedia{{ $item->id }}" aria-expanded="false">
                                            Lihat Lampiran <i class="bi bi-chevron-down ms-1 transition-icon"></i>
                                        </button>
                                    </div>
                                    <div class="collapse mt-3" id="collapseMedia{{ $item->id }}">
                                        <div class="d-flex flex-column gap-3 p-3 border rounded-3 bg-white shadow-sm">
                                            @foreach($item->mediaPendukung as $index => $media)
                                                <div class="attachment-box m-0 border-0 bg-light rounded-3 shadow-sm p-3">
                                                    <div class="d-flex w-100 justify-content-between align-items-center flex-wrap gap-3">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <span class="fw-bold fs-5 text-brand opacity-50">{{ $loop->parent->iteration ?? 1 }}.{{ strtolower(chr(96 + $loop->iteration)) }}</span>
                                                            <div class="bg-white p-2 rounded-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                                                @if($media->jenis == 'pdf') <i class="bi bi-file-earmark-pdf-fill fs-4 text-danger"></i>
                                                                @elseif($media->jenis == 'word') <i class="bi bi-file-earmark-word-fill fs-4 text-primary"></i>
                                                                @elseif($media->jenis == 'ppt') <i class="bi bi-file-earmark-slides-fill fs-4 text-warning"></i>
                                                                @elseif($media->jenis == 'video_upload') <i class="bi bi-play-circle-fill fs-4 text-success"></i>
                                                                @elseif($media->jenis == 'video_youtube') <i class="bi bi-youtube fs-4 text-danger"></i>
                                                                @elseif($media->jenis == 'link') <i class="bi bi-link-45deg fs-4 text-info"></i>
                                                                @else <i class="bi bi-file-earmark-fill fs-4 text-secondary"></i> @endif
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0 fw-bold font-inter text-dark" style="font-size: 0.95rem;">{{ $media->judul }}</h6>
                                                                <span class="badge bg-white text-secondary border mt-1 font-inter" style="font-size: 0.65rem;">
                                                                    {{ $media->jenis == 'video_youtube' ? 'YouTube' : ($media->jenis == 'link' ? 'Link Eksternal' : strtoupper(str_replace('_', ' ', $media->jenis))) }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex gap-2">
                                                            @if($media->jenis == 'link') <a href="{{ $media->external_link }}" target="_blank" class="btn btn-info btn-sm rounded-pill px-3 fw-bold font-inter text-white" style="font-size: 0.8rem;"><i class="bi bi-box-arrow-up-right me-1"></i> Buka</a>
                                                            @elseif($media->jenis == 'video_youtube') <button class="btn btn-danger btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem;"><i class="bi bi-play-circle me-1"></i> Tonton</button>
                                                            @else <button class="btn btn-primary btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem;"><i class="bi bi-eye me-1"></i> Buka</button>
                                                                @if($media->file) <a href="{{ asset('storage/'.$media->file) }}" target="_blank" download class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center bg-white" style="width: 32px; height: 32px;" title="Unduh File"><i class="bi bi-cloud-arrow-down-fill"></i></a> @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                    @if($media->jenis != 'link')
                                                    <div id="preview{{ $media->id }}" class="collapse mt-3 w-100 border-top pt-3">
                                                        @if($media->jenis == 'pdf') <div class="document-iframe-container shadow-sm" style="height: 400px;"><iframe src="{{ asset('storage/'.$media->file) }}" width="100%" height="100%" style="border: none;" allowfullscreen></iframe></div>
                                                        @elseif($media->jenis == 'word') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/'.$media->file)) }}&embedded=true" allowfullscreen style="border: none;"></iframe></div><div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau Google Docs Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                        @elseif($media->jenis == 'ppt') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe></div><div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau Microsoft Office Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                        @elseif($media->jenis == 'video_upload') <div class="document-iframe-container ratio ratio-16x9 bg-black shadow-sm"><video controls class="w-100 h-100 rounded-3"><source src="{{ asset('storage/'.$media->file) }}"></video></div>
                                                        @elseif($media->jenis == 'video_youtube')
                                                            @php 
                                                                $youtubeId = null;
                                                                if ($media->video_url) {
                                                                    preg_match('/(?:youtube\.com.*v=|youtu\.be\/)([^&]+)/', $media->video_url, $match);
                                                                    $youtubeId = $match[1] ?? null;
                                                                }
                                                            @endphp
                                                            @if($youtubeId) <div class="document-iframe-container ratio ratio-16x9 shadow-sm"><iframe src="https://www.youtube.com/embed/{{ $youtubeId }}" allowfullscreen style="border: none;"></iframe></div>
                                                            @else <div class="alert alert-warning font-inter"><i class="bi bi-exclamation-triangle me-2"></i> Link YouTube tidak valid.</div> @endif
                                                        @endif
                                                    </div>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                            @empty
                            <div class="empty-state-card">
                                <i class="bi bi-folder-plus empty-state-icon"></i>
                                <h6 class="fw-bold text-dark font-inter">Belum Ada Materi Tambahan</h6>
                                <p class="text-muted font-inter small mb-3">Klik tombol "Tambah Catatan" untuk mulai menyusun lampiran pertama pada topik ini.</p>
                            </div>
                            @endforelse
                        </div>
                    </div>

                    <!-- ============================================== -->
                    <!-- TOPIK 3: Pemberdayaan Warga (Kewirausahaan)    -->
                    <!-- ============================================== -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon" style="background: rgba(16, 185, 129, 0.15); color: var(--color-green);">
                                <i class="bi bi-wallet-fill"></i>
                            </div>
                            <h3 class="topic-title">Pemberdayaan Warga (Kewirausahaan)</h3>
                        </div>
                        <p>Pemberdayaan komunitas sejatinya bertujuan untuk menciptakan kemandirian warga agar mereka mampu memecahkan masalahnya sendiri, khususnya di bidang ekonomi. Masyarakat Minang secara historis terkenal dengan etos kerja dan jiwa kewirausahaannya melalui tradisi <strong>Marantau</strong>.</p>
                        
                        <div class="highlight-box mb-3" style="background: linear-gradient(135deg, #D1FAE5, #A7F3D0); border-left-color: var(--color-green);">
                            <p style="color: #065F46;"><i class="bi bi-rocket-takeoff-fill me-2 fs-5"></i><strong>Badan Usaha Milik Nagari (BUMNag)</strong><br><span class="mt-2 d-block text-secondary" style="font-family: 'Merriweather', serif; font-weight: normal; font-size: 0.95rem;">Model pemberdayaan warga kekinian tidak lagi hanya bergantung pada individu perantau, melainkan melembagakan potensi ekonomi komunal melalui <strong>BUMNag</strong>. Organisasi modern ini dapat mengelola aset desa seperti agrowisata alam, sentra industri kuliner olahan (seperti pengalengan Rendang berskala ekspor), hingga penyewaan alsintan secara profesional. Hasil akhirnya murni dikembalikan untuk perluasan lapangan kerja dan perbaikan fasilitas nagari.</span></p>
                        </div>

                        <div class="row g-3 mt-3 mb-4">
                            <div class="col-md-6">
                                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100">
                                    <h6 class="fw-bold text-brand mb-3 font-inter"><i class="bi bi-shop me-2"></i>Ekonomi Kreatif Lokal</h6>
                                    <p class="small text-secondary mb-0">Memberdayakan warga desa dengan mengembangkan potensi kriya dan budaya lokal. Contohnya, merevitalisasi pengrajin Tenun Songket Silungkang dengan bekal pelatihan desain modern dan <em>digital marketing</em>, sehingga pasarnya mampu menembus skala nasional bahkan masuk ke ajang <em>fashion show</em> internasional.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100">
                                    <h6 class="fw-bold text-accent mb-3 font-inter"><i class="bi bi-graph-up-arrow me-2"></i>Filosofi Saudagar & Literasi</h6>
                                    <p class="small text-secondary mb-0">Mengajarkan fondasi kemandirian ala saudagar Minang: <em>Jan takuik rugi</em> (Berani mengambil kalkulasi risiko). Prinsip ini kemudian dipadukan dengan kecerdasan literasi membedakan aset produktif vs konsumtif (kebutuhan vs keinginan) yang sangat esensial dijadikan materi edukasi finansial wajib bagi para remaja di pedesaan.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Cek Pemahaman Topik 3 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic3">
                            <h6 class="fw-bold text-green mb-3 d-flex align-items-center gap-2 font-inter" style="color: var(--color-green);">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="text-dark fw-semibold mb-3 font-inter">Mengembangkan kerajinan kain Tenun Songket Silungkang sebagai usaha mandiri merupakan bentuk pemberdayaan warga melalui...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic3', 0, 1, this)">Bantuan Sosial Tunai</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic3', 1, 1, this)">Ekonomi Kreatif Lokal</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic3', 2, 1, this)">Impor Barang</button>
                            </div>
                            <div id="mini-result-topic3" class="mt-3 p-3 rounded-3 bg-light border border-light font-inter" style="display: none; font-size: 0.9rem;"></div>
                        </div>

                        <!-- RUANG TAMBAHAN MATERI GURU -->
                        <div class="mt-4 pt-3 border-top border-light">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="fw-bold text-secondary mb-0" style="font-size:0.85rem; letter-spacing:0.5px; text-transform:uppercase;"><i class="bi bi-journal-plus me-1"></i> Catatan Tambahan Topik 3</h6>
                                <a href="{{ route('guru.materi.create',['tema'=>'tema4', 'subtema'=>'pemberdayaan']) }}" class="btn-add-materi-sm">
                                    <i class="fas fa-plus"></i> Tambah Catatan
                                </a>
                            </div>

                            @forelse($materiPemberdayaan as $item)
                            <div class="nested-card">
                                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center mb-3 pb-3 border-bottom border-light gap-3">
                                    <h5 class="nested-card-title mb-0 border-0 pb-0"><i class="bi bi-bookmark-star"></i> {{ $item->judul }}</h5>
                                    
                                    <div class="nested-actions d-flex gap-2 align-items-center flex-wrap">
                                        <a href="{{ route('guru.materi.edit', $item->id) }}#lampiran" class="btn btn-primary btn-sm px-2 py-1 d-flex align-items-center gap-1 font-inter shadow-sm" style="font-size: 0.75rem;" title="Kelola Lampiran">
                                            <i class="bi bi-paperclip"></i> Kelola Lampiran
                                        </a>
                                        <div class="d-flex gap-1 border-start ps-2 border-light">
                                            <a href="{{ route('guru.materi.edit',$item->id) }}" class="btn btn-warning text-dark btn-sm px-2 py-1 shadow-sm" title="Edit Materi"><i class="fas fa-edit fs-7"></i></a>
                                            <form action="{{ route('guru.materi.destroy',$item->id) }}" method="POST" class="d-inline">
                                                @csrf @method('DELETE')
                                                <button type="button" class="btn btn-danger btn-sm px-2 py-1 shadow-sm" title="Hapus Materi" onclick="showDeleteModal(this)"><i class="fas fa-trash fs-7"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-text text-dark prose fs-6">{!! $item->konten !!}</div>

                                {{-- Logika Penampil Media --}}
                                @if($item->mediaPendukung && $item->mediaPendukung->count() > 0)
                                    @php
                                        $pdfCount = $item->mediaPendukung->where('jenis', 'pdf')->count();
                                        $wordCount = $item->mediaPendukung->where('jenis', 'word')->count();
                                        $pptCount = $item->mediaPendukung->where('jenis', 'ppt')->count();
                                        $videoCount = $item->mediaPendukung->whereIn('jenis', ['video_upload', 'video_youtube'])->count();
                                        $linkCount = $item->mediaPendukung->where('jenis', 'link')->count();
                                    @endphp
                                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 p-3 mt-4 rounded-3 border shadow-sm" style="background: linear-gradient(to right, #F8FAFC, #FFFFFF);">
                                        <div class="d-flex flex-wrap gap-2 align-items-center">
                                            <span class="badge bg-primary rounded-pill font-inter px-3 py-2"><i class="bi bi-paperclip me-1"></i> {{ $item->mediaPendukung->count() }} Lampiran</span>
                                            @if($pdfCount > 0) <span class="badge bg-white text-danger border border-danger-subtle rounded-pill font-inter"><i class="bi bi-filetype-pdf"></i> PDF ({{ $pdfCount }})</span> @endif
                                            @if($wordCount > 0) <span class="badge bg-white text-primary border border-primary-subtle rounded-pill font-inter"><i class="bi bi-filetype-doc"></i> Word ({{ $wordCount }})</span> @endif
                                            @if($pptCount > 0) <span class="badge bg-white text-warning border border-warning-subtle rounded-pill font-inter"><i class="bi bi-filetype-ppt"></i> PPT ({{ $pptCount }})</span> @endif
                                            @if($videoCount > 0) <span class="badge bg-white text-success border border-success-subtle rounded-pill font-inter"><i class="bi bi-play-btn"></i> Video ({{ $videoCount }})</span> @endif
                                            @if($linkCount > 0) <span class="badge bg-white text-info border border-info-subtle rounded-pill font-inter"><i class="bi bi-link-45deg"></i> Link ({{ $linkCount }})</span> @endif
                                        </div>
                                        <button class="btn btn-outline-primary btn-sm rounded-pill fw-bold font-inter px-4 flex-shrink-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMedia{{ $item->id }}" aria-expanded="false">
                                            Lihat Lampiran <i class="bi bi-chevron-down ms-1 transition-icon"></i>
                                        </button>
                                    </div>
                                    <div class="collapse mt-3" id="collapseMedia{{ $item->id }}">
                                        <div class="d-flex flex-column gap-3 p-3 border rounded-3 bg-white shadow-sm">
                                            @foreach($item->mediaPendukung as $index => $media)
                                                <div class="attachment-box m-0 border-0 bg-light rounded-3 shadow-sm p-3">
                                                    <div class="d-flex w-100 justify-content-between align-items-center flex-wrap gap-3">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <span class="fw-bold fs-5 text-brand opacity-50">{{ $loop->parent->iteration ?? 1 }}.{{ strtolower(chr(96 + $loop->iteration)) }}</span>
                                                            <div class="bg-white p-2 rounded-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                                                @if($media->jenis == 'pdf') <i class="bi bi-file-earmark-pdf-fill fs-4 text-danger"></i>
                                                                @elseif($media->jenis == 'word') <i class="bi bi-file-earmark-word-fill fs-4 text-primary"></i>
                                                                @elseif($media->jenis == 'ppt') <i class="bi bi-file-earmark-slides-fill fs-4 text-warning"></i>
                                                                @elseif($media->jenis == 'video_upload') <i class="bi bi-play-circle-fill fs-4 text-success"></i>
                                                                @elseif($media->jenis == 'video_youtube') <i class="bi bi-youtube fs-4 text-danger"></i>
                                                                @elseif($media->jenis == 'link') <i class="bi bi-link-45deg fs-4 text-info"></i>
                                                                @else <i class="bi bi-file-earmark-fill fs-4 text-secondary"></i> @endif
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0 fw-bold font-inter text-dark" style="font-size: 0.95rem;">{{ $media->judul }}</h6>
                                                                <span class="badge bg-white text-secondary border mt-1 font-inter" style="font-size: 0.65rem;">
                                                                    {{ $media->jenis == 'video_youtube' ? 'YouTube' : ($media->jenis == 'link' ? 'Link Eksternal' : strtoupper(str_replace('_', ' ', $media->jenis))) }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex gap-2">
                                                            @if($media->jenis == 'link') <a href="{{ $media->external_link }}" target="_blank" class="btn btn-info btn-sm rounded-pill px-3 fw-bold font-inter text-white" style="font-size: 0.8rem;"><i class="bi bi-box-arrow-up-right me-1"></i> Buka</a>
                                                            @elseif($media->jenis == 'video_youtube') <button class="btn btn-danger btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem;"><i class="bi bi-play-circle me-1"></i> Tonton</button>
                                                            @else <button class="btn btn-primary btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem;"><i class="bi bi-eye me-1"></i> Buka</button>
                                                                @if($media->file) <a href="{{ asset('storage/'.$media->file) }}" target="_blank" download class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center bg-white" style="width: 32px; height: 32px;" title="Unduh File"><i class="bi bi-cloud-arrow-down-fill"></i></a> @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                    @if($media->jenis != 'link')
                                                    <div id="preview{{ $media->id }}" class="collapse mt-3 w-100 border-top pt-3">
                                                        @if($media->jenis == 'pdf') <div class="document-iframe-container shadow-sm" style="height: 400px;"><iframe src="{{ asset('storage/'.$media->file) }}" width="100%" height="100%" style="border: none;" allowfullscreen></iframe></div>
                                                        @elseif($media->jenis == 'word') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/'.$media->file)) }}&embedded=true" allowfullscreen style="border: none;"></iframe></div><div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau Google Docs Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                        @elseif($media->jenis == 'ppt') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe></div><div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau Microsoft Office Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                        @elseif($media->jenis == 'video_upload') <div class="document-iframe-container ratio ratio-16x9 bg-black shadow-sm"><video controls class="w-100 h-100 rounded-3"><source src="{{ asset('storage/'.$media->file) }}"></video></div>
                                                        @elseif($media->jenis == 'video_youtube')
                                                            @php 
                                                                $youtubeId = null;
                                                                if ($media->video_url) {
                                                                    preg_match('/(?:youtube\.com.*v=|youtu\.be\/)([^&]+)/', $media->video_url, $match);
                                                                    $youtubeId = $match[1] ?? null;
                                                                }
                                                            @endphp
                                                            @if($youtubeId) <div class="document-iframe-container ratio ratio-16x9 shadow-sm"><iframe src="https://www.youtube.com/embed/{{ $youtubeId }}" allowfullscreen style="border: none;"></iframe></div>
                                                            @else <div class="alert alert-warning font-inter"><i class="bi bi-exclamation-triangle me-2"></i> Link YouTube tidak valid.</div> @endif
                                                        @endif
                                                    </div>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                            @empty
                            <div class="empty-state-card">
                                <i class="bi bi-folder-plus empty-state-icon"></i>
                                <h6 class="fw-bold text-dark font-inter">Belum Ada Materi Tambahan</h6>
                                <p class="text-muted font-inter small mb-3">Klik tombol "Tambah Catatan" untuk mulai menyusun lampiran pertama pada topik ini.</p>
                            </div>
                            @endforelse
                        </div>
                    </div>

                    <!-- ============================================== -->
                    <!-- TOPIK 4: Peranan Komunitas                     -->
                    <!-- ============================================== -->
                    <div class="topic-block">
                        <div class="topic-header">
                            <div class="topic-icon" style="background: rgba(236, 72, 153, 0.15); color: var(--color-pink);">
                                <i class="bi bi-diagram-3-fill"></i>
                            </div>
                            <h3 class="topic-title">Peranan Komunitas (Gotong Royong)</h3>
                        </div>
                        <p>Permasalahan kompleks di tingkat nagari dapat diselesaikan lebih masif dan adaptif jika komunitas (masyarakat) berperan aktif, responsif, dan konsisten mengedepankan prinsip musyawarah mufakat. Di Tanah Minangkabau, ruh kebersamaan komunal ini direpresentasikan lewat pepatah bijak: <em>"Barek samo dipikua, ringan samo dijinjiang"</em> (Berat sama dipikul, ringan sama dijinjing).</p>
                        
                        <div class="accordion custom-accordion mb-4" id="accordionKomunitas">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBajamba">
                                        <i class="bi bi-cup-hot-fill me-2 text-pink" style="color: var(--color-pink);"></i> Filosofi Makan Bajamba
                                    </button>
                                </h2>
                                <div id="collapseBajamba" class="accordion-collapse collapse" data-bs-parent="#accordionKomunitas">
                                    <div class="accordion-body">
                                        <p class="mb-0 text-dark font-inter" style="font-size: 0.95rem;">Tradisi ini sejatinya melampaui sekadar kumpul dan makan bersama. Di balik <em>Makan Bajamba</em> (makan barapak), tersimpan manifestasi peranan komunitas yang solid. Semua warga duduk bersila melingkar dan mencicipi hidangan dari nampan yang sama, mengukuhkan asas kesetaraan tak bersyarat tanpa membedakan label sosial. Seringkali, forum ini dijadikan ruang kultural untuk menjembatani resolusi meredam sengketa ringan antar sesama warga nagari.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBatagak">
                                        <i class="bi bi-house-up-fill me-2 text-primary"></i> Aksi Kolektif "Batagak"
                                    </button>
                                </h2>
                                <div id="collapseBatagak" class="accordion-collapse collapse" data-bs-parent="#accordionKomunitas">
                                    <div class="accordion-body">
                                        <p class="mb-0 text-dark font-inter" style="font-size: 0.95rem;">Solidaritas pengabdian sosial dan peran serta ekonomi dari masyarakat terlihat sangat progresif ketika suatu kaum ingin mendirikan sebuah properti (<em>Batagak Rumah Gadang</em>) ataupun saat harus meresmikan dan mengangkat perwakilan pemimpin kaum (<em>Batagak Pangulu</em>). Seluruh anak kemenakan, dunsanak, dan jaringan warga di perantauan akan turun tangan menyumbang logistik, iuran uang, maupun tenaga otot demi memastikan perhelatan akbar komunal tersebut sukses sepenuhnya dan tidak membebani salah satu individu secara ekonomi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cek Pemahaman Topik 4 -->
                        <div class="mt-4 p-4 bg-white rounded-4 border border-light shadow-sm" id="mini-quiz-topic4">
                            <h6 class="fw-bold text-pink mb-3 d-flex align-items-center gap-2 font-inter" style="color: var(--color-pink);">
                                <i class="bi bi-patch-question-fill fs-5"></i> Cek Pemahaman Singkat
                            </h6>
                            <p class="text-dark fw-semibold mb-3 font-inter">Tradisi Makan Bajamba di Minangkabau memiliki nilai-nilai peranan komunitas berupa...</p>
                            <div class="d-flex flex-column gap-2">
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic4', 0, 1, this)">Ajang pamer kekayaan warga desa</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic4', 1, 1, this)">Kesetaraan dan perekat tali persaudaraan antar warga</button>
                                <button class="quiz-option shadow-sm mini-option py-2 font-inter" onclick="checkMiniQuiz('topic4', 2, 1, this)">Kewajiban menyumbang makanan mahal</button>
                            </div>
                            <div id="mini-result-topic4" class="mt-3 p-3 rounded-3 bg-light border border-light font-inter" style="display: none; font-size: 0.9rem;"></div>
                        </div>

                        <!-- RUANG TAMBAHAN MATERI GURU -->
                        <div class="mt-4 pt-3 border-top border-light">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="fw-bold text-secondary mb-0" style="font-size:0.85rem; letter-spacing:0.5px; text-transform:uppercase;"><i class="bi bi-journal-plus me-1"></i> Catatan Tambahan Topik 4</h6>
                                <a href="{{ route('guru.materi.create',['tema'=>'tema4', 'subtema'=>'peranan-komunitas']) }}" class="btn-add-materi-sm">
                                    <i class="fas fa-plus"></i> Tambah Catatan
                                </a>
                            </div>

                            @forelse($materiKomunitas as $item)
                            <div class="nested-card">
                                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center mb-3 pb-3 border-bottom border-light gap-3">
                                    <h5 class="nested-card-title mb-0 border-0 pb-0"><i class="bi bi-bookmark-star"></i> {{ $item->judul }}</h5>
                                    
                                    <div class="nested-actions d-flex gap-2 align-items-center flex-wrap">
                                        <a href="{{ route('guru.materi.edit', $item->id) }}#lampiran" class="btn btn-primary btn-sm px-2 py-1 d-flex align-items-center gap-1 font-inter shadow-sm" style="font-size: 0.75rem;" title="Kelola Lampiran">
                                            <i class="bi bi-paperclip"></i> Kelola Lampiran
                                        </a>
                                        <div class="d-flex gap-1 border-start ps-2 border-light">
                                            <a href="{{ route('guru.materi.edit',$item->id) }}" class="btn btn-warning text-dark btn-sm px-2 py-1 shadow-sm" title="Edit Materi"><i class="fas fa-edit fs-7"></i></a>
                                            <form action="{{ route('guru.materi.destroy',$item->id) }}" method="POST" class="d-inline">
                                                @csrf @method('DELETE')
                                                <button type="button" class="btn btn-danger btn-sm px-2 py-1 shadow-sm" title="Hapus Materi" onclick="showDeleteModal(this)"><i class="fas fa-trash fs-7"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-text text-dark prose fs-6">{!! $item->konten !!}</div>

                                {{-- Logika Penampil Media --}}
                                @if($item->mediaPendukung && $item->mediaPendukung->count() > 0)
                                    @php
                                        $pdfCount = $item->mediaPendukung->where('jenis', 'pdf')->count();
                                        $wordCount = $item->mediaPendukung->where('jenis', 'word')->count();
                                        $pptCount = $item->mediaPendukung->where('jenis', 'ppt')->count();
                                        $videoCount = $item->mediaPendukung->whereIn('jenis', ['video_upload', 'video_youtube'])->count();
                                        $linkCount = $item->mediaPendukung->where('jenis', 'link')->count();
                                    @endphp
                                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 p-3 mt-4 rounded-3 border shadow-sm" style="background: linear-gradient(to right, #F8FAFC, #FFFFFF);">
                                        <div class="d-flex flex-wrap gap-2 align-items-center">
                                            <span class="badge bg-primary rounded-pill font-inter px-3 py-2"><i class="bi bi-paperclip me-1"></i> {{ $item->mediaPendukung->count() }} Lampiran</span>
                                            @if($pdfCount > 0) <span class="badge bg-white text-danger border border-danger-subtle rounded-pill font-inter"><i class="bi bi-filetype-pdf"></i> PDF ({{ $pdfCount }})</span> @endif
                                            @if($wordCount > 0) <span class="badge bg-white text-primary border border-primary-subtle rounded-pill font-inter"><i class="bi bi-filetype-doc"></i> Word ({{ $wordCount }})</span> @endif
                                            @if($pptCount > 0) <span class="badge bg-white text-warning border border-warning-subtle rounded-pill font-inter"><i class="bi bi-filetype-ppt"></i> PPT ({{ $pptCount }})</span> @endif
                                            @if($videoCount > 0) <span class="badge bg-white text-success border border-success-subtle rounded-pill font-inter"><i class="bi bi-play-btn"></i> Video ({{ $videoCount }})</span> @endif
                                            @if($linkCount > 0) <span class="badge bg-white text-info border border-info-subtle rounded-pill font-inter"><i class="bi bi-link-45deg"></i> Link ({{ $linkCount }})</span> @endif
                                        </div>
                                        <button class="btn btn-outline-primary btn-sm rounded-pill fw-bold font-inter px-4 flex-shrink-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMedia{{ $item->id }}" aria-expanded="false">
                                            Lihat Lampiran <i class="bi bi-chevron-down ms-1 transition-icon"></i>
                                        </button>
                                    </div>
                                    <div class="collapse mt-3" id="collapseMedia{{ $item->id }}">
                                        <div class="d-flex flex-column gap-3 p-3 border rounded-3 bg-white shadow-sm">
                                            @foreach($item->mediaPendukung as $index => $media)
                                                <div class="attachment-box m-0 border-0 bg-light rounded-3 shadow-sm p-3">
                                                    <div class="d-flex w-100 justify-content-between align-items-center flex-wrap gap-3">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <span class="fw-bold fs-5 text-brand opacity-50">{{ $loop->parent->iteration ?? 1 }}.{{ strtolower(chr(96 + $loop->iteration)) }}</span>
                                                            <div class="bg-white p-2 rounded-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                                                @if($media->jenis == 'pdf') <i class="bi bi-file-earmark-pdf-fill fs-4 text-danger"></i>
                                                                @elseif($media->jenis == 'word') <i class="bi bi-file-earmark-word-fill fs-4 text-primary"></i>
                                                                @elseif($media->jenis == 'ppt') <i class="bi bi-file-earmark-slides-fill fs-4 text-warning"></i>
                                                                @elseif($media->jenis == 'video_upload') <i class="bi bi-play-circle-fill fs-4 text-success"></i>
                                                                @elseif($media->jenis == 'video_youtube') <i class="bi bi-youtube fs-4 text-danger"></i>
                                                                @elseif($media->jenis == 'link') <i class="bi bi-link-45deg fs-4 text-info"></i>
                                                                @else <i class="bi bi-file-earmark-fill fs-4 text-secondary"></i> @endif
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0 fw-bold font-inter text-dark" style="font-size: 0.95rem;">{{ $media->judul }}</h6>
                                                                <span class="badge bg-white text-secondary border mt-1 font-inter" style="font-size: 0.65rem;">
                                                                    {{ $media->jenis == 'video_youtube' ? 'YouTube' : ($media->jenis == 'link' ? 'Link Eksternal' : strtoupper(str_replace('_', ' ', $media->jenis))) }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex gap-2">
                                                            @if($media->jenis == 'link') <a href="{{ $media->external_link }}" target="_blank" class="btn btn-info btn-sm rounded-pill px-3 fw-bold font-inter text-white" style="font-size: 0.8rem;"><i class="bi bi-box-arrow-up-right me-1"></i> Buka</a>
                                                            @elseif($media->jenis == 'video_youtube') <button class="btn btn-danger btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem;"><i class="bi bi-play-circle me-1"></i> Tonton</button>
                                                            @else <button class="btn btn-primary btn-sm rounded-pill px-3 fw-bold font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#preview{{ $media->id }}" style="font-size: 0.8rem;"><i class="bi bi-eye me-1"></i> Buka</button>
                                                                @if($media->file) <a href="{{ asset('storage/'.$media->file) }}" target="_blank" download class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center bg-white" style="width: 32px; height: 32px;" title="Unduh File"><i class="bi bi-cloud-arrow-down-fill"></i></a> @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                    @if($media->jenis != 'link')
                                                    <div id="preview{{ $media->id }}" class="collapse mt-3 w-100 border-top pt-3">
                                                        @if($media->jenis == 'pdf') <div class="document-iframe-container shadow-sm" style="height: 400px;"><iframe src="{{ asset('storage/'.$media->file) }}" width="100%" height="100%" style="border: none;" allowfullscreen></iframe></div>
                                                        @elseif($media->jenis == 'word') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/'.$media->file)) }}&embedded=true" allowfullscreen style="border: none;"></iframe></div><div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau Google Docs Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                        @elseif($media->jenis == 'ppt') <div class="document-iframe-container ratio ratio-16x9 shadow-sm mb-2"><iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode(asset('storage/'.$media->file)) }}" allowfullscreen style="border: none;"></iframe></div><div class="text-center font-inter text-muted mt-2" style="font-size: 0.85rem;"><i class="bi bi-info-circle text-primary"></i> Pratinjau Microsoft Office Viewer.<br>Jika tidak tampil, <a href="{{ asset('storage/'.$media->file) }}" class="text-decoration-none" download>klik di sini untuk mengunduh</a>.</div>
                                                        @elseif($media->jenis == 'video_upload') <div class="document-iframe-container ratio ratio-16x9 bg-black shadow-sm"><video controls class="w-100 h-100 rounded-3"><source src="{{ asset('storage/'.$media->file) }}"></video></div>
                                                        @elseif($media->jenis == 'video_youtube')
                                                            @php 
                                                                $youtubeId = null;
                                                                if ($media->video_url) {
                                                                    preg_match('/(?:youtube\.com.*v=|youtu\.be\/)([^&]+)/', $media->video_url, $match);
                                                                    $youtubeId = $match[1] ?? null;
                                                                }
                                                            @endphp
                                                            @if($youtubeId) <div class="document-iframe-container ratio ratio-16x9 shadow-sm"><iframe src="https://www.youtube.com/embed/{{ $youtubeId }}" allowfullscreen style="border: none;"></iframe></div>
                                                            @else <div class="alert alert-warning font-inter"><i class="bi bi-exclamation-triangle me-2"></i> Link YouTube tidak valid.</div> @endif
                                                        @endif
                                                    </div>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                            @empty
                            <div class="empty-state-card">
                                <i class="bi bi-folder-plus empty-state-icon"></i>
                                <h6 class="fw-bold text-dark font-inter">Belum Ada Materi Tambahan</h6>
                                <p class="text-muted font-inter small mb-3">Klik tombol "Tambah Catatan" untuk mulai menyusun lampiran pertama pada topik ini.</p>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Sidebar -->
            <div class="col-lg-4">
                
                <!-- Widget Kearifan Lokal -->
                <div class="sidebar-widget fade-in-up delay-2">
                    <h5 class="widget-title font-inter">
                        <i class="bi bi-shield-check" style="color: var(--color-teal);"></i> Adat Nan Sabana Adat
                    </h5>
                    <p class="small text-secondary mb-3 font-inter">Pemberdayaan sosial dimulai dari perbaikan etika individu. Budaya Minangkabau memiliki aturan tata krama yang spesifik bagi generasi mudanya.</p>
                    
                    <div class="accordion custom-accordion mb-4" id="accordionKearifan">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-2 font-inter" type="button" data-bs-toggle="collapse" data-bs-target="#kLokal1" style="font-size: 0.9rem;">
                                    Sumbang Duo Baleh
                                </button>
                            </h2>
                            <div id="kLokal1" class="accordion-collapse collapse" data-bs-parent="#accordionKearifan">
                                <div class="accordion-body small text-muted font-inter">
                                    Merupakan 12 aturan moral berupa larangan atas sikap atau hal-hal yang dianggap "sumbang" (janggal/tidak pantas). Aturan ini dikhususkan bagi perempuan Minang (<em>Bundo Kanduang</em>) untuk mendidik akhlak, meliputi <em>Sumbang Duduak</em> (cara duduk), <em>Sumbang Tagak</em> (cara berdiri), hingga <em>Sumbang Bicaro</em> (cara berbicara).
                                </div>
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
                    <iframe src="https://www.youtube.com/embed/O8wPqgZfX0Y?autoplay=1" allow="autoplay; encrypted-media" class="rounded-4 bg-black" allowfullscreen></iframe>
                </div>`;
        }
        
        if(playBtn) playBtn.addEventListener('click', playVideo);
        if(thumb) thumb.addEventListener('click', playVideo);
    });

    // 3. Mini Quiz Cek Pemahaman Khusus TEMA 4
    const miniQuizExplanations = {
        'topic1': 'Tepat! Sistem Matrilineal merupakan ciri khas budaya Minangkabau di mana garis keturunan dan perwalian harta pusaka ditarik dari pihak ibu.',
        'topic2': 'Benar! Sumbang Duo Baleh mengatur 12 hal yang janggal atau tidak pantas dilakukan perempuan Minang untuk menjaga moral.',
        'topic3': 'Tepat sekali! Ekonomi kreatif memanfaatkan keterampilan lokal (seperti menenun) menjadi produk bernilai jual tinggi untuk kemandirian ekonomi.',
        'topic4': 'Betul! Dalam Makan Bajamba, semua warga duduk sama rendah menikmati hidangan bersama, tanpa membedakan status sosial mereka.'
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

    // 4. Quiz Evaluasi Akhir (Tema 4)
    const quizData = [
        {
            question: "Tradisi berkumpul dan makan bersama di suatu ruangan yang dilakukan masyarakat Minangkabau sebagai wujud kesetaraan dan sarana musyawarah mufakat dinamakan...",
            options: [
                "Sumbang Duo Baleh",
                "Makan Bajamba",
                "Mandi Balimau",
                "Batagak Pangulu"
            ],
            answer: 1, 
            explanation: "Makan Bajamba (atau makan barapak) adalah tradisi makan bersama di mana semua orang duduk sama rendah, menyimbolkan peranan komunitas yang solid tanpa membedakan status sosial."
        },
        {
            question: "Berikut ini yang merupakan contoh penerapan literasi keuangan (kewirausahaan) dalam konteks pemberdayaan masyarakat nagari (desa) di Minangkabau adalah...",
            options: [
                "Mengabaikan pencatatan pengeluaran usaha toko/kedai",
                "Membiarkan generasi muda meninggalkan desa dan tidak pernah kembali membangun nagari",
                "Mengembangkan kerajinan kain Tenun Songket Silungkang sebagai ekonomi kreatif lokal",
                "Menolak masuknya teknologi alat komunikasi dalam perdagangan"
            ],
            answer: 2,
            explanation: "Menciptakan ekonomi kreatif dari potensi lokal seperti Tenun Songket adalah inti dari pemberdayaan warga agar mandiri secara ekonomi (mengentaskan kemiskinan)."
        },
        {
            question: "Sebagai upaya mengantisipasi permasalahan degradasi moral akibat modernisasi, masyarakat Minangkabau memiliki aturan tata krama (sopan santun) bagi perempuan yang disebut...",
            options: [
                "Alam Takambang Jadi Guru",
                "Sumbang Duo Baleh",
                "Raso jo Pareso",
                "Adat Nan Sabana Adat"
            ],
            answer: 1,
            explanation: "Sumbang Duo Baleh merupakan dua belas aturan larangan perilaku agar perempuan (remaja) menjaga kehormatan dan etika pergaulannya."
        },
        {
            question: "Dalam kajian keragaman sosial budaya di Indonesia, salah satu identitas unik suku Minangkabau adalah menganut sistem kekerabatan...",
            options: [
                "Patrilineal (menarik garis keturunan dari ayah)",
                "Bilateral (dari ayah dan ibu seimbang)",
                "Matrilineal (menarik garis keturunan dari pihak ibu)",
                "Parental"
            ],
            answer: 2,
            explanation: "Sistem matrilineal menempatkan pihak ibu dan garis keturunannya pada posisi penting secara adat, harta pusaka, dan kekerabatan."
        },
        {
            question: "Filosofi atau pedoman hidup masyarakat Minangkabau yang berupaya menyelaraskan antara tradisi (budaya) lokal dengan hukum agama (Islam) dirumuskan dalam pepatah...",
            options: [
                "Alam takambang jadi guru",
                "Dima bumi dipijak disinan langik dijunjuang",
                "Adat basandi syarak, syarak basandi Kitabullah",
                "Barek samo dipikua, ringan samo dijinjiang"
            ],
            answer: 2,
            explanation: "Pepatah 'Adat basandi syarak, syarak basandi Kitabullah' (ABSSBK) menjadi pondasi kerukunan dan pencegahan konflik budaya."
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