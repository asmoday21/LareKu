@extends('guru.guru_master')

@section('guru')

<style>
    /* Modern Aesthetic Overhaul */
    :root {
        --warm-primary: #D97706;
        --warm-bg: #FFFBF5;
        --card-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
    }

    .page-title-icon {
        width: 50px; height: 50px;
        border-radius: 14px;
        background: #FEF3C7;
        display: flex; align-items: center; justify-content: center;
        box-shadow: 0 2px 4px rgba(217, 119, 6, 0.1);
    }
    .page-title-icon i { font-size: 22px; color: var(--warm-primary); }

    .btn-tambah-video {
        display: inline-flex; align-items: center; gap: 8px;
        padding: 10px 22px;
        background: #059669; color: #fff;
        border-radius: 12px; font-size: 14px; font-weight: 600;
        text-decoration: none;
        transition: all 0.2s ease;
        box-shadow: 0 4px 6px -1px rgba(5, 150, 105, 0.2);
    }
    .btn-tambah-video:hover { background: #047857; color: #fff; transform: translateY(-1px); }

    .stat-card-warm {
        background: #fff;
        border: 1px solid #F3F4F6;
        border-radius: 16px;
        padding: 1.5rem;
        text-align: center;
        transition: transform 0.2s;
        box-shadow: var(--card-shadow);
    }
    .stat-num { font-size: 32px; font-weight: 700; color: #111827; margin-bottom: 2px; }
    .stat-label { font-size: 12px; font-weight: 600; color: #6B7280; text-transform: uppercase; letter-spacing: 0.5px; }

    .main-card {
        background: #fff;
        border: 1px solid #E5E7EB;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--card-shadow);
        margin-bottom: 2rem;
    }
    .card-header-custom {
        display: flex; align-items: center; gap: 12px;
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid #F3F4F6;
        background: #FAFAFA;
    }
    .card-header-custom i { font-size: 18px; color: var(--warm-primary); }
    .card-header-custom h5 { font-size: 16px; font-weight: 600; margin: 0; color: #1F2937; }

    .video-card-item {
        border: 1px solid #F3F4F6;
        border-radius: 16px;
        transition: all 0.3s ease;
    }
    .video-card-item:hover { box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); }
    
    .table-guru { width: 100%; border-collapse: separate; border-spacing: 0; }
    .table-guru th { background: #F9FAFB; padding: 1rem; border-bottom: 1px solid #E5E7EB !important; }
    .table-guru td { padding: 1rem; border-bottom: 1px solid #F3F4F6 !important; }

    .btn-action { padding: 6px 12px; border-radius: 8px; font-size: 12px; font-weight: 500; transition: 0.2s; }
    .btn-edit { background: #FEF3C7; color: #92400E; border: none; }
    .btn-edit:hover { background: #FDE68A; }
    .btn-hapus { background: #FEE2E2; color: #B91C1C; border: none; }
    .btn-hapus:hover { background: #FECACA; }
    
    .empty-state { padding: 3rem; text-align: center; color: #6B7280; }
    .empty-state i { font-size: 48px; color: #E5E7EB; margin-bottom: 1rem; }
</style>

<div class="container-fluid py-4">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="d-flex align-items-center gap-3">
            <div class="page-title-icon">
                <i class="fas fa-video"></i>
            </div>
            <div>
                <h2 class="fw-bold mb-0" style="font-size:20px; color: #111827;">Video Pembelajaran</h2>
                <p class="mb-0 text-muted" style="font-size:13px;">Kelola materi visual untuk siswa Anda</p>
            </div>
        </div>
        <a href="{{ route('guru.video.create') }}" class="btn-tambah-video">
            <i class="fas fa-plus"></i> Tambah Video
        </a>
    </div>

    {{-- Statistik --}}
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="stat-card-warm">
                <div class="stat-num">{{ $videos->count() }}</div>
                <div class="stat-label">Total Video</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card-warm">
                <div class="stat-num">{{ $videos->where('tema','tema1')->count() }}</div>
                <div class="stat-label">Video Tema 1</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card-warm">
                <div class="stat-num">
                    {{ $videos->whereIn('tema', ['tema2', 'tema3', 'tema4'])->count() }}
                </div>
                <div class="stat-label">Video Tema Lain</div>
            </div>
        </div>
    </div>

    {{-- Preview Video --}}
    <div class="main-card">
        <div class="card-header-custom">
            <i class="fas fa-play-circle"></i>
            <h5>Preview Video</h5>
        </div>
        <div class="p-4">
            @if($videos->isEmpty())
                <div class="empty-state">
                    <i class="fas fa-video-slash"></i>
                    <p>Belum ada video yang ditambahkan.</p>
                </div>
            @else
                <div class="row g-4">
                    @foreach($videos as $video)
                    @php
                        preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([^&]+)/', $video->link, $matches);
                        $youtubeId = $matches[1] ?? null;
                    @endphp
                    <div class="col-lg-4 col-md-6">
                        <div class="video-card-item h-100 overflow-hidden">
                            @if($youtubeId)
                            <iframe width="100%" height="180" src="https://www.youtube.com/embed/{{ $youtubeId }}" style="border:none;"></iframe>
                            @endif
                            <div class="p-3">
                                <span class="badge" style="background:#FFF7ED; color:#C2410C; padding:4px 10px; border-radius:6px; font-size:10px; font-weight:700;">{{ strtoupper($video->tema) }}</span>
                                <h6 class="fw-semibold mt-2 mb-1" style="font-size:14px; color:#1F2937;">{{ $video->judul }}</h6>
                                <p class="text-muted" style="font-size:12px;">{{ Str::limit($video->deskripsi, 60) }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    {{-- Tabel CRUD --}}
    <div class="main-card">
        <div class="card-header-custom">
            <i class="fas fa-list"></i>
            <h5>Daftar Video</h5>
        </div>
        @if($videos->isEmpty())
            <div class="empty-state">
                <p>Data video belum tersedia.</p>
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-guru align-middle mb-0">
                    <thead>
                        <tr>
                            <th class="ps-4">No</th>
                            <th>Judul</th>
                            <th>Tema</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($videos as $video)
                        <tr>
                            <td class="ps-4 fw-semibold text-muted">{{ $loop->iteration }}</td>
                            <td class="fw-medium text-dark">{{ $video->judul }}</td>
                            <td>
                                <span class="badge" style="background:#EFF6FF; color:#1E40AF; padding:5px 12px; border-radius:20px; font-size:11px;">
                                    {{ strtoupper($video->tema) }}
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="d-inline-flex gap-2">
                                    <a href="{{ route('guru.video.edit', $video->id) }}" class="btn btn-action btn-edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('guru.video.destroy', $video->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" onclick="return confirm('Hapus video ini?')" class="btn btn-action btn-hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>

@endsection