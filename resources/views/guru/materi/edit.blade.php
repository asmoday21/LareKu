@extends('guru.guru_master')

@section('guru')

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    :root {
        --bg-main: #F4F7F9;
        --surface: #FFFFFF;
        --text-dark: #1E293B;
        --text-gray: #475569;
        --text-muted: #94A3B8;
        --border-color: #E2E8F0;
        --brand-primary: #2563EB;
        --brand-hover: #1D4ED8;
        --brand-soft: #EFF6FF;
        --danger-soft: #FEF2F2;
        --danger-primary: #DC2626;
        --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
        --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        --radius-sm: 8px;
        --radius-md: 12px;
        --radius-lg: 16px;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: var(--bg-main);
        color: var(--text-dark);
        -webkit-font-smoothing: antialiased;
    }

    .font-outfit { font-family: 'Outfit', sans-serif; }
    .font-inter { font-family: 'Inter', sans-serif; }

    .app-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 1.5rem;
    }

    /* Hero Banner */
    .page-hero-banner {
        background: linear-gradient(135deg, #1E3A5F 0%, #2563EB 50%, #1D4ED8 100%);
        border-radius: var(--radius-md);
        padding: 1.25rem 2rem;
        color: white;
        margin-bottom: 1.5rem;
        box-shadow: var(--shadow-md);
        position: relative;
        overflow: hidden;
    }

    .page-hero-banner::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -5%;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
        border-radius: 50%;
        animation: float 15s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(20px, -20px) scale(1.05); }
    }

    /* Cards */
    .custom-card {
        background: var(--surface);
        border: 1px solid var(--border-color);
        border-radius: var(--radius-md);
        box-shadow: var(--shadow-sm);
        margin-bottom: 1.25rem;
        transition: box-shadow 0.2s ease;
    }

    .custom-card:hover {
        box-shadow: var(--shadow-md);
    }

    .card-title-header {
        padding: 1rem 1.25rem;
        border-bottom: 1px solid var(--border-color);
        background: #FAFAFA;
        border-radius: var(--radius-md) var(--radius-md) 0 0;
    }

    .card-title-header h5 {
        font-weight: 700;
        color: var(--text-dark);
    }

    .card-body {
        padding: 1.25rem;
    }

    /* Form Elements */
    .form-label-custom {
        font-weight: 600;
        color: var(--text-dark);
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.4rem;
    }

    .form-control-custom, .form-select-custom {
        border: 1px solid #CBD5E1;
        padding: 0.6rem 0.8rem;
        border-radius: var(--radius-sm);
        font-size: 0.95rem;
        color: var(--text-dark);
        background-color: var(--surface);
        transition: all 0.2s ease;
        width: 100%;
        box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05) inset;
    }

    .form-control-custom:focus, .form-select-custom:focus {
        border-color: var(--brand-primary);
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
        outline: none;
    }

    .form-control-custom.bg-light {
        background-color: #F8FAFC !important;
        color: var(--text-gray);
    }

    .icon-badge {
        width: 28px;
        height: 28px;
        border-radius: 6px;
        background: var(--brand-soft);
        color: var(--brand-primary);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
    }

    /* Media Repeater Items */
    .media-item-card {
        background: var(--surface);
        border: 1px solid var(--border-color);
        border-radius: var(--radius-sm);
        margin-bottom: 1rem;
        overflow: hidden;
        transition: all 0.2s ease;
    }

    .media-item-card:focus-within, .media-item-card:hover {
        border-color: #93C5FD;
        box-shadow: var(--shadow-sm);
    }

    .media-item-card .item-header {
        background: var(--brand-soft);
        padding: 0.6rem 1rem;
        border-bottom: 1px solid var(--border-color);
    }

    .remove-media-btn {
        width: 32px;
        height: 32px;
        color: var(--danger-primary);
        background: var(--danger-soft);
        border: none;
        transition: all 0.2s ease;
    }

    .remove-media-btn:hover {
        background: var(--danger-primary);
        color: white;
    }

    .current-file-box {
        background: #F8FAFC;
        border: 1px dashed #CBD5E1;
        border-radius: var(--radius-sm);
        padding: 0.75rem;
    }

    /* Buttons */
    .btn-primary-custom {
        background: var(--brand-primary);
        border: none;
        color: white;
        font-weight: 600;
        border-radius: var(--radius-sm);
        padding: 0.75rem 1.25rem;
        transition: all 0.2s ease;
        box-shadow: var(--shadow-sm);
    }

    .btn-primary-custom:hover {
        background: var(--brand-hover);
        transform: translateY(-1px);
        box-shadow: var(--shadow-md);
        color: white;
    }

    .btn-outline-custom {
        border: 1px solid #CBD5E1;
        color: var(--text-gray);
        background: white;
        font-weight: 600;
        border-radius: var(--radius-sm);
        padding: 0.75rem 1.25rem;
        transition: all 0.2s ease;
    }

    .btn-outline-custom:hover {
        background-color: #F1F5F9;
        color: var(--text-dark);
    }

    .btn-add-repeater {
        background-color: var(--surface);
        color: var(--brand-primary);
        border: 2px dashed #93C5FD;
        font-weight: 600;
        border-radius: var(--radius-sm);
        padding: 0.75rem;
        transition: all 0.2s ease;
    }

    .btn-add-repeater:hover {
        background-color: var(--brand-soft);
        border-color: var(--brand-primary);
    }

    .url-input-wrapper {
        position: relative;
    }
    
    .url-input-wrapper .form-control-custom {
        padding-left: 2.5rem;
    }

    .url-input-wrapper .url-icon {
        position: absolute;
        left: 0.8rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-muted);
        font-size: 1.1rem;
    }

    /* Utilities */
    .input-block-bg {
        background: #F8FAFC;
        border: 1px solid var(--border-color);
        border-radius: var(--radius-sm);
        padding: 0.75rem;
        margin-top: 0.75rem;
    }

    @media (max-width: 991.98px) {
        .app-container { padding: 1rem; }
        .page-hero-banner { padding: 1rem; }
    }
</style>

<div class="container-fluid app-container">

    <!-- Hero Banner -->
    <div class="page-hero-banner d-flex align-items-center justify-content-between flex-wrap gap-3">
        <div class="d-flex align-items-center gap-3 z-1">
            <div class="bg-white bg-opacity-25 rounded-circle d-flex justify-content-center align-items-center" style="width: 48px; height: 48px; backdrop-filter: blur(5px);">
                <i class="bi bi-pencil-square fs-4"></i>
            </div>
            <div>
                <h2 class="font-outfit mb-1 fw-bold">Edit Materi Pembelajaran</h2>
                <p class="mb-0 text-white-50 font-inter" style="font-size: 0.95rem;">Perbarui informasi, ringkasan, dan kelola lampiran media pendukung.</p>
            </div>
        </div>
        <a href="{{ route('guru.materi.index') }}" class="btn btn-light bg-white text-dark rounded-pill px-4 fw-semibold shadow-sm z-1 font-inter">
            <i class="bi bi-arrow-left me-2"></i> Kembali
        </a>
    </div>

    <form action="{{ route('guru.materi.update', $materi->id) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate id="materiEditForm">
        @csrf
        @method('PUT')

        <div class="row g-4">
            <!-- Kolom Kiri: Konten Utama -->
            <div class="col-xl-8 col-lg-7">

                <!-- Card 1: Informasi Dasar -->
                <div class="custom-card">
                    <div class="card-title-header d-flex align-items-center gap-2">
                        <div class="icon-badge"><i class="bi bi-info-circle-fill"></i></div>
                        <h5 class="m-0 font-outfit">Informasi Dasar</h5>
                    </div>

                    <div class="card-body">
                        <div class="row g-3 mb-3">
                            <!-- Tema Selection -->
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    Tema <span class="text-danger">*</span>
                                </label>
                                <select name="tema" class="form-select-custom @error('tema') is-invalid @enderror" required>
                                    <option value="" disabled>-- Pilih Tema --</option>
                                    <option value="tema1" {{ old('tema', $materi->tema ?? '') == 'tema1' ? 'selected' : '' }}>Tema 1: Kehidupan Sosial & Lingkungan</option>
                                    <option value="tema2" {{ old('tema', $materi->tema ?? '') == 'tema2' ? 'selected' : '' }}>Tema 2: Keberagaman Lingkungan</option>
                                    <option value="tema3" {{ old('tema', $materi->tema ?? '') == 'tema3' ? 'selected' : '' }}>Tema 3: Potensi Ekonomi Lingkungan</option>
                                    <option value="tema4" {{ old('tema', $materi->tema ?? '') == 'tema4' ? 'selected' : '' }}>Tema 4: Pemberdayaan Masyarakat</option>
                                </select>
                                @error('tema')
                                    <div class="invalid-feedback font-inter mt-1"><i class="bi bi-exclamation-circle-fill me-1"></i> {{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Subtema -->
                            <div class="col-md-6">
                                <label for="subtema" class="form-label-custom">
                                    Subtema <span class="text-muted fw-normal ms-1 fs-6">(Opsional)</span>
                                </label>
                                @php
                                    $slugSubtema = \Illuminate\Support\Str::slug($materi->subtema ?? '');
                                    $isSystemSubtema = in_array($slugSubtema, [
                                        'lokasi-tinggal', 'konektivitas', 'iklim', 'bencana', 'ekonomi', 'sosial',
                                        'alam-guru', 'dinamika-sosial', 'pembangunan',
                                        'sda', 'potensi-sda', 'negara-maju', 'toponimi', 'ekonomi-sekitar', 'interaksi-sosial',
                                        'keragaman', 'sosial-budaya', 'permasalahan', 'pemberdayaan', 'kewirausahaan', 'komunitas', 'gotong-royong'
                                    ]);
                                @endphp
                                <input type="text" class="form-control-custom @error('subtema') is-invalid @enderror {{ $isSystemSubtema ? 'bg-light text-primary fw-medium' : '' }}" id="subtema" name="subtema" value="{{ old('subtema', $materi->subtema ?? '') }}" placeholder="Ketik atau pilih subtema..." {{ $isSystemSubtema ? 'readonly' : '' }}>
                                @if($isSystemSubtema)
                                    <div class="form-text text-primary font-inter mt-1" style="font-size: 0.8rem;"><i class="bi bi-shield-lock-fill me-1"></i> Terhubung dengan sistem blok materi.</div>
                                @endif
                                @error('subtema')
                                    <div class="invalid-feedback font-inter mt-1"><i class="bi bi-exclamation-circle-fill me-1"></i> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Judul Utama Materi -->
                        <div>
                            <label for="judul" class="form-label-custom">
                                Judul Utama <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control-custom @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul', $materi->judul) }}" placeholder="Contoh: Mengenal Ekosistem Hutan Hujan Tropis (Maks. 255 karakter)" required maxlength="255">
                            @error('judul')
                                <div class="invalid-feedback font-inter mt-1"><i class="bi bi-exclamation-circle-fill me-1"></i> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Card 2: Isi Konten & Rincian -->
                <div class="custom-card">
                    <div class="card-title-header d-flex align-items-center gap-2">
                        <div class="icon-badge"><i class="bi bi-card-text"></i></div>
                        <h5 class="m-0 font-outfit">Detail & Penjelasan</h5>
                    </div>

                    <div class="card-body">
                        <!-- Deskripsi Singkat -->
                        <div class="mb-4">
                            <label for="deskripsi" class="form-label-custom">
                                Ringkasan Singkat <span class="text-muted fw-normal ms-1 fs-6">(Opsional)</span>
                            </label>
                            <textarea class="form-control-custom @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="3" placeholder="Tulis ringkasan singkat tentang materi ini (1-3 kalimat)...">{{ old('deskripsi', $materi->deskripsi) }}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback font-inter mt-1"><i class="bi bi-exclamation-circle-fill me-1"></i> {{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Konten Utama -->
                        <div>
                            <label for="konten" class="form-label-custom">
                                Konten Lengkap <span class="text-muted fw-normal ms-1 fs-6">(Opsional)</span>
                            </label>
                            <textarea class="form-control-custom @error('konten') is-invalid @enderror" id="konten" name="konten" rows="8" placeholder="Tulis penjelasan lengkap materi di sini...">{{ old('konten', $materi->konten) }}</textarea>
                            @error('konten')
                                <div class="invalid-feedback font-inter mt-1"><i class="bi bi-exclamation-circle-fill me-1"></i> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>

            <!-- Kolom Kanan: Pengaturan Media & Panel Aksi -->
            <div class="col-xl-4 col-lg-5" id="lampiran">

                <!-- Action Panel (Sticky Top) -->
                <div class="custom-card sticky-top" style="top: 20px; z-index: 10;">
                    <div class="card-body">
                        <h6 class="font-outfit fw-bold mb-3 d-flex align-items-center gap-2">
                            <i class="bi bi-floppy text-primary"></i> Aksi Tersimpan
                        </h6>
                        <button type="submit" class="btn btn-primary-custom w-100 mb-2 d-flex justify-content-center align-items-center gap-2">
                            <i class="bi bi-check-circle"></i> Simpan Perubahan
                        </button>
                        <a href="{{ route('guru.materi.index') }}" class="btn btn-outline-custom w-100 d-flex justify-content-center align-items-center gap-2">
                            <i class="bi bi-x-circle"></i> Batalkan Edit
                        </a>
                        <div class="mt-3 text-center text-muted font-inter" style="font-size: 0.8rem;">
                            Pastikan semua kolom bertanda <span class="text-danger">*</span> sudah terisi.
                        </div>
                    </div>
                </div>

                <!-- Card Multi-Lampiran Media -->
                <div class="custom-card">
                    <div class="card-title-header d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-2">
                            <div class="icon-badge"><i class="bi bi-paperclip"></i></div>
                            <h5 class="m-0 font-outfit">Media Lampiran</h5>
                        </div>
                        <span class="badge bg-brand-soft text-primary border border-primary-subtle rounded-pill" id="total_attachment_badge">
                            {{ $materi->mediaPendukung->count() }} File
                        </span>
                    </div>

                    <div class="card-body p-3">
                        <!-- Repeater Container -->
                        <div id="media_repeater_container">
                            @foreach($materi->mediaPendukung as $idx => $mediaItem)
                                <div class="media-item-card" id="media_item_existing_{{ $mediaItem->id }}">
                                    <!-- Hidden ID lampiran yang sudah ada -->
                                    <input type="hidden" name="media_id[]" value="{{ $mediaItem->id }}">

                                    <div class="item-header d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold text-primary item-number-title font-inter" style="font-size: 0.9rem;">
                                            Lampiran #{{ $idx + 1 }}
                                        </span>
                                        <button type="button" class="btn btn-sm rounded-circle remove-media-btn d-flex align-items-center justify-content-center" title="Hapus Lampiran">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </div>

                                    <div class="p-3">
                                        <!-- Judul Lampiran -->
                                        <div class="mb-3">
                                            <label class="form-label-custom" style="font-size: 0.85rem;">Judul Media</label>
                                            <input type="text" name="media_judul[]" class="form-control-custom media-judul-input" placeholder="Contoh: Modul PDF" value="{{ old('media_judul.'.$idx, $mediaItem->judul) }}">
                                        </div>

                                        <!-- Jenis Media -->
                                        <div class="mb-3">
                                            <label class="form-label-custom" style="font-size: 0.85rem;">Format Media</label>
                                            <select name="jenis[]" class="form-select-custom jenis-media-select">
                                                <option value="">-- Pilih Format --</option>
                                                <option value="pdf" {{ old('jenis.'.$idx, $mediaItem->jenis) == 'pdf' ? 'selected' : '' }}>📄 Document (PDF)</option>
                                                <option value="word" {{ old('jenis.'.$idx, $mediaItem->jenis) == 'word' ? 'selected' : '' }}>📝 Document (Word)</option>
                                                <option value="ppt" {{ old('jenis.'.$idx, $mediaItem->jenis) == 'ppt' ? 'selected' : '' }}>📊 Presentation (PPT)</option>
                                                <option value="video_upload" {{ old('jenis.'.$idx, $mediaItem->jenis) == 'video_upload' ? 'selected' : '' }}>🎬 Video (MP4)</option>
                                                <option value="video_youtube" {{ old('jenis.'.$idx, $mediaItem->jenis) == 'video_youtube' ? 'selected' : '' }}>▶️ Video (YouTube)</option>
                                                <option value="link" {{ old('jenis.'.$idx, $mediaItem->jenis) == 'link' ? 'selected' : '' }}>🔗 Link Website</option>
                                            </select>
                                        </div>

                                        <!-- File Lama (Pratinjau) -->
                                        @if(in_array($mediaItem->jenis, ['pdf', 'word', 'ppt', 'video_upload']) && $mediaItem->file)
                                            <div class="current-file-box mb-2 d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2 text-truncate me-2">
                                                    <i class="bi bi-file-earmark-check-fill text-success fs-5"></i>
                                                    <span class="font-inter fw-medium" style="font-size: 0.85rem;">File Tersimpan</span>
                                                </div>
                                                <a href="{{ asset('storage/'.$mediaItem->file) }}" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1 font-inter" style="font-size: 0.8rem;">
                                                    Buka
                                                </a>
                                            </div>
                                        @endif

                                        <!-- Input File Lokal -->
                                        <div class="input-file-block input-block-bg" style="display: none;">
                                            <label class="form-label-custom text-primary" style="font-size: 0.85rem;"><i class="bi bi-cloud-arrow-up"></i> Ganti File Baru</label>
                                            <input type="file" name="file[]" class="form-control-custom bg-white" accept=".pdf,.doc,.docx,.ppt,.pptx,.mp4">
                                            <div class="form-text mt-2" style="font-size: 0.8rem;">Biarkan kosong jika tidak ingin mengubah file saat ini.</div>
                                        </div>

                                        <!-- Input YouTube URL -->
                                        <div class="input-youtube-block input-block-bg" style="display: none;">
                                            <label class="form-label-custom text-danger" style="font-size: 0.85rem;"><i class="bi bi-youtube"></i> Tautan YouTube</label>
                                            <div class="url-input-wrapper">
                                                <span class="url-icon"><i class="bi bi-link-45deg"></i></span>
                                                <input type="url" name="video_url[]" class="form-control-custom bg-white" placeholder="https://youtube.com/watch?v=..." value="{{ old('video_url.'.$idx, $mediaItem->video_url ?? '') }}">
                                            </div>
                                        </div>

                                        <!-- Input Link Eksternal -->
                                        <div class="input-link-block input-block-bg" style="display: none;">
                                            <label class="form-label-custom text-primary" style="font-size: 0.85rem;"><i class="bi bi-globe"></i> Link Website Luar</label>
                                            <div class="url-input-wrapper">
                                                <span class="url-icon"><i class="bi bi-globe2"></i></span>
                                                <input type="url" name="external_link[]" class="form-control-custom bg-white" placeholder="https://example.com" value="{{ old('external_link.'.$idx, $mediaItem->external_link ?? '') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Tombol Tambah Lampiran -->
                        <button type="button" class="btn btn-add-repeater w-100 d-flex align-items-center justify-content-center gap-2 mt-2" id="add_media_btn">
                            <i class="bi bi-plus-lg"></i>
                            <span>Tambah Lampiran Baru</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    // Bootstrap Form Validation
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });

    const repeaterContainer = document.getElementById('media_repeater_container');
    const addMediaBtn = document.getElementById('add_media_btn');
    const totalBadge = document.getElementById('total_attachment_badge');
    let itemIndex = repeaterContainer.querySelectorAll('.media-item-card').length;

    // Bind existing media cards loaded from server
    repeaterContainer.querySelectorAll('.media-item-card').forEach((card) => {
        bindMediaCardEvents(card);
    });

    function addMediaBlock(defaultJudul = '', defaultJenis = '', defaultUrl = '') {
        itemIndex++;
        const currentIdx = itemIndex;

        const mediaCard = document.createElement('div');
        mediaCard.className = 'media-item-card';
        mediaCard.id = `media_item_new_${currentIdx}`;

        // Match exactly the HTML structure of the repeater above
        mediaCard.innerHTML = `
            <input type="hidden" name="media_id[]" value="">

            <div class="item-header d-flex justify-content-between align-items-center">
                <span class="fw-semibold text-primary item-number-title font-inter" style="font-size: 0.9rem;">
                    Lampiran Baru
                </span>
                <button type="button" class="btn btn-sm rounded-circle remove-media-btn d-flex align-items-center justify-content-center" title="Hapus Lampiran">
                    <i class="bi bi-trash3"></i>
                </button>
            </div>

            <div class="p-3">
                <div class="mb-3">
                    <label class="form-label-custom" style="font-size: 0.85rem;">Judul Media</label>
                    <input type="text" name="media_judul[]" class="form-control-custom media-judul-input" placeholder="Contoh: Modul Tambahan" value="${defaultJudul}">
                </div>

                <div class="mb-3">
                    <label class="form-label-custom" style="font-size: 0.85rem;">Format Media</label>
                    <select name="jenis[]" class="form-select-custom jenis-media-select">
                        <option value="">-- Pilih Format --</option>
                        <option value="pdf" ${defaultJenis === 'pdf' ? 'selected' : ''}>📄 Document (PDF)</option>
                        <option value="word" ${defaultJenis === 'word' ? 'selected' : ''}>📝 Document (Word)</option>
                        <option value="ppt" ${defaultJenis === 'ppt' ? 'selected' : ''}>📊 Presentation (PPT)</option>
                        <option value="video_upload" ${defaultJenis === 'video_upload' ? 'selected' : ''}>🎬 Video (MP4)</option>
                        <option value="video_youtube" ${defaultJenis === 'video_youtube' ? 'selected' : ''}>▶️ Video (YouTube)</option>
                        <option value="link" ${defaultJenis === 'link' ? 'selected' : ''}>🔗 Link Website</option>
                    </select>
                </div>

                <div class="input-file-block input-block-bg" style="display: none;">
                    <label class="form-label-custom text-primary" style="font-size: 0.85rem;"><i class="bi bi-cloud-arrow-up"></i> Unggah File</label>
                    <input type="file" name="file[]" class="form-control-custom bg-white" accept=".pdf,.doc,.docx,.ppt,.pptx,.mp4">
                </div>

                <div class="input-youtube-block input-block-bg" style="display: none;">
                    <label class="form-label-custom text-danger" style="font-size: 0.85rem;"><i class="bi bi-youtube"></i> Tautan YouTube</label>
                    <div class="url-input-wrapper">
                        <span class="url-icon"><i class="bi bi-link-45deg"></i></span>
                        <input type="url" name="video_url[]" class="form-control-custom bg-white" placeholder="https://youtube.com/watch?v=..." value="${defaultJenis === 'video_youtube' ? defaultUrl : ''}">
                    </div>
                </div>

                <div class="input-link-block input-block-bg" style="display: none;">
                    <label class="form-label-custom text-primary" style="font-size: 0.85rem;"><i class="bi bi-globe"></i> Link Website Luar</label>
                    <div class="url-input-wrapper">
                        <span class="url-icon"><i class="bi bi-globe2"></i></span>
                        <input type="url" name="external_link[]" class="form-control-custom bg-white" placeholder="https://example.com" value="${defaultJenis === 'link' ? defaultUrl : ''}">
                    </div>
                </div>
            </div>
        `;

        repeaterContainer.appendChild(mediaCard);
        bindMediaCardEvents(mediaCard);
        updateIndexesAndBadges();
    }

    function bindMediaCardEvents(mediaCard) {
        const jenisSelect = mediaCard.querySelector('.jenis-media-select');
        const fileBlock = mediaCard.querySelector('.input-file-block');
        const youtubeBlock = mediaCard.querySelector('.input-youtube-block');
        const linkBlock = mediaCard.querySelector('.input-link-block');

        function toggleBlocks() {
            const val = jenisSelect.value;
            fileBlock.style.display = 'none';
            youtubeBlock.style.display = 'none';
            linkBlock.style.display = 'none';

            if (['pdf', 'word', 'ppt', 'video_upload'].includes(val)) {
                fileBlock.style.display = 'block';
            } else if (val === 'video_youtube') {
                youtubeBlock.style.display = 'block';
            } else if (val === 'link') {
                linkBlock.style.display = 'block';
            }
        }

        jenisSelect.addEventListener('change', toggleBlocks);
        toggleBlocks();

        const removeBtn = mediaCard.querySelector('.remove-media-btn');
        if (removeBtn) {
            removeBtn.addEventListener('click', function() {
                // Tambahkan animasi fade out sebelum remove
                mediaCard.style.opacity = '0';
                setTimeout(() => {
                    mediaCard.remove();
                    updateIndexesAndBadges();
                }, 200);
            });
        }
    }

    function updateIndexesAndBadges() {
        const items = repeaterContainer.querySelectorAll('.media-item-card');
        totalBadge.textContent = `${items.length} File`;

        items.forEach((item, idx) => {
            const numTitle = item.querySelector('.item-number-title');
            if (numTitle) {
                const isNew = item.id && item.id.startsWith('media_item_new_');
                numTitle.textContent = `Lampiran ${isNew ? 'Baru' : '#' + (idx + 1)}`;
            }
        });
    }

    addMediaBtn.addEventListener('click', function() {
        addMediaBlock();
    });

    // Auto-fill media titles based on main title
    const judulInput = document.getElementById('judul');
    if (judulInput) {
        judulInput.addEventListener('input', function() {
            const val = this.value.trim();
            repeaterContainer.querySelectorAll('.media-judul-input').forEach((inp, idx) => {
                if (!inp.value) {
                    inp.placeholder = val ? `${val} - Lampiran ${idx + 1}` : 'Contoh: Modul PDF';
                }
            });
        });
    }
});
</script>
@endsection