@extends('siswa.siswa_master')

@section('siswa')

<style>
    :root {
        --accent-color: #4F46E5;
        --bg-color: #F9FAFB;
    }

    .hero-section {
        background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%);
        border-radius: 24px;
        padding: 2.5rem;
        color: white;
        margin-bottom: 2rem;
    }

    .video-card-siswa {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        border: 1px solid #E5E7EB;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .video-card-siswa:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }

    .badge-tema {
        background: #EEF2FF;
        color: var(--accent-color);
        padding: 4px 12px;
        border-radius: 8px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .empty-state-siswa {
        text-align: center;
        padding: 4rem 2rem;
        background: #fff;
        border-radius: 20px;
        border: 2px dashed #E5E7EB;
    }
</style>

<div class="container-fluid py-4">
    {{-- Header Khusus Siswa --}}
    <div class="hero-section">
        <h1 class="fw-bold mb-2">Video Pembelajaran</h1>
        <p class="mb-0 opacity-90">Jelajahi video materi seru untuk membantumu belajar lebih mudah.</p>
    </div>

    {{-- Filter/Konten --}}
    <h5 class="fw-bold mb-4 text-dark">Daftar Video Terbaru</h5>

    @if($videos->isEmpty())
        <div class="empty-state-siswa">
            <i class="fas fa-book-reader fa-3x mb-3 text-muted"></i>
            <h5 class="text-secondary">Belum ada video tersedia</h5>
            <p class="text-muted">Tunggu guru mengunggah materi baru ya!</p>
        </div>
    @else
        <div class="row g-4">
            @foreach($videos as $video)
            @php
                preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([^&]+)/', $video->link, $matches);
                $youtubeId = $matches[1] ?? null;
            @endphp
            <div class="col-lg-4 col-md-6">
                <div class="video-card-siswa h-100">
                    @if($youtubeId)
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/{{ $youtubeId }}" allowfullscreen style="border:none;"></iframe>
                    </div>
                    @endif
                    <div class="p-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge-tema">{{ $video->tema }}</span>
                            <small class="text-muted"><i class="far fa-clock me-1"></i> 5 min</small>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">{{ $video->judul }}</h5>
                        <p class="text-muted small mb-0">{{ Str::limit($video->deskripsi, 100) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endif
</div>

@endsection