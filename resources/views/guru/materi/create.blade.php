@extends('guru.guru_master')

@section('guru')
<!-- Menggunakan font Google modern untuk konsistensi desain -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style>
    :root {
        /* Skema Warna Global - Vibrant EdTech */
        --bg-main: #F8FAFC;
        --surface: #FFFFFF;
        
        --text-dark: #1E293B;
        --text-gray: #64748B;
        
        --border-color: #E2E8F0; 
        
        /* Primary Brand Color (Indigo) */
        --brand-primary: #4F46E5;
        --brand-hover: #3730A3;
        --brand-soft: #EEF2FF;
        
        /* Shadows & Border Radius */
        --shadow-sm: 0 2px 8px rgba(0,0,0,0.04);
        --shadow-md: 0 10px 25px rgba(0,0,0,0.06);
        --shadow-lg: 0 20px 40px rgba(0,0,0,0.08);
        
        --radius-sm: 8px;
        --radius-md: 16px;
        --radius-lg: 24px;
    }

    body {
        font-family: 'Nunito', sans-serif;
        background-color: var(--bg-main);
        color: var(--text-dark);
        -webkit-font-smoothing: antialiased;
    }

    h1, h2, h3, h4, h5, h6, .form-label {
        font-family: 'Outfit', sans-serif;
        font-weight: 700;
        letter-spacing: -0.02em;
    }

    /* Memaksimalkan lebar ruang layar */
    .app-container {
        max-width: 1400px;
        margin: 0 auto;
        padding-top: 3rem;
        padding-bottom: 5rem;
    }

    .custom-card {
        background: var(--surface);
        border: 1px solid var(--border-color);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-sm);
        overflow: hidden;
        height: 100%;
        transition: box-shadow 0.3s ease;
    }
    
    .custom-card:hover {
        box-shadow: var(--shadow-md);
    }

    .card-header-custom {
        background: linear-gradient(135deg, #FFFFFF 0%, var(--brand-soft) 100%);
        padding: 2rem 2.5rem;
        border-bottom: 1px solid var(--border-color);
    }

    .header-icon-wrapper {
        width: 48px;
        height: 48px;
        border-radius: 14px;
        background: var(--brand-primary);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-right: 1rem;
        box-shadow: 0 4px 15px rgba(79, 70, 229, 0.3);
    }

    /* Form Controls */
    .form-label {
        color: var(--text-dark);
        margin-bottom: 0.6rem;
        display: flex;
        align-items: center;
        font-size: 1rem;
    }

    .form-control, .form-select {
        font-family: 'Nunito', sans-serif;
        border: 1px solid var(--border-color);
        padding: 0.8rem 1.25rem;
        border-radius: 12px;
        font-size: 0.95rem;
        color: var(--text-dark);
        background-color: #F8FAFC;
        transition: all 0.3s ease;
    }

    .form-control::placeholder {
        color: #94A3B8;
    }

    .form-control:focus, .form-select:focus {
        background-color: #FFFFFF;
        border-color: var(--brand-primary);
        box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.15);
        outline: none;
    }

    /* Style khusus untuk input URL agar link tidak keluar dari kotak */
    .form-control-url {
        word-break: break-all;
        overflow-wrap: break-word;
        white-space: normal;
        min-height: 48px;
        height: auto;
        line-height: 1.5;
    }

    .form-control-url:focus {
        min-height: 48px;
        height: auto;
    }

    .icon-wrapper {
        width: 28px;
        height: 28px;
        border-radius: 8px;
        background: var(--brand-soft);
        color: var(--brand-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 0.6rem;
        font-size: 0.9rem;
    }

    /* Buttons */
    .btn-primary-custom {
        font-family: 'Outfit', sans-serif;
        background: linear-gradient(135deg, var(--brand-primary), #3730A3);
        border: none;
        color: white;
        font-weight: 700;
        border-radius: 14px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 15px rgba(79, 70, 229, 0.3);
    }

    .btn-primary-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(79, 70, 229, 0.4);
        color: white;
    }

    .btn-outline-custom {
        font-family: 'Outfit', sans-serif;
        border: 2px solid var(--border-color);
        color: var(--text-gray);
        background: transparent;
        font-weight: 700;
        border-radius: 14px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .btn-outline-custom:hover {
        background-color: var(--bg-main);
        color: var(--text-dark);
        border-color: #CBD5E1;
    }

    /* Validation Hints */
    .invalid-feedback {
        font-family: 'Nunito', sans-serif;
        font-size: 0.85rem;
        margin-top: 0.5rem;
        display: flex;
        align-items: center;
    }
    
    .form-text {
        font-family: 'Nunito', sans-serif;
        font-size: 0.85rem;
        color: var(--text-gray);
        font-weight: 500;
    }

    /* Animasi */
    .fade-in-up {
        animation: fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) both;
    }
    .delay-1 { animation-delay: 0.1s; }
    
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Alert styling */
    .alert-info-custom {
        background-color: var(--brand-soft);
        border: 1px solid var(--brand-primary);
        color: var(--brand-primary);
        border-radius: var(--radius-md);
        padding: 0.75rem 1.25rem;
        font-family: 'Nunito', sans-serif;
        font-size: 0.9rem;
    }

    /* Style untuk container media agar responsif */
    .media-input-container {
        max-width: 100%;
        overflow: hidden;
        word-wrap: break-word;
    }

    .media-input-container .form-control {
        max-width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* Preview link container */
    .link-preview-box {
        background: #f8f9fa;
        border: 1px solid var(--border-color);
        border-radius: var(--radius-sm);
        padding: 0.5rem 0.75rem;
        margin-top: 0.5rem;
        max-width: 100%;
        overflow: hidden;
        word-wrap: break-word;
        font-size: 0.85rem;
    }

    .link-preview-box .link-text {
        color: var(--brand-primary);
        word-break: break-all;
        overflow-wrap: break-word;
    }

    /* Styling untuk input URL agar lebih rapi */
    .url-input-wrapper {
        position: relative;
        width: 100%;
    }

    .url-input-wrapper .form-control {
        padding-right: 40px;
        width: 100%;
        box-sizing: border-box;
    }

    .url-input-wrapper .url-icon {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-gray);
        font-size: 1.1rem;
    }

    /* Responsive fix untuk card */
    @media (max-width: 768px) {
        .card-header-custom {
            padding: 1.25rem;
        }
        .card-body {
            padding: 1.25rem !important;
        }
        .app-container {
            padding-top: 1.5rem;
            padding-bottom: 2rem;
        }
    }
</style>

<div class="container-fluid px-4 px-md-5 app-container">
  
    <form action="{{ route('guru.materi.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
        @csrf
        
        <div class="row g-4">
            <!-- Kolom Kiri: Konten Utama -->
            <div class="col-xl-8 col-lg-7 fade-in-up">
                <div class="custom-card">
                    <!-- Header -->
                    <div class="card-header-custom">
                        <div class="d-flex align-items-center">
                            <div class="header-icon-wrapper">
                                <i class="bi bi-journal-plus"></i>
                            </div>
                            <div>
                                <h2 class="m-0" style="color: var(--brand-primary); font-size: 1.75rem;">Tambah Materi Baru</h2>
                                <p class="text-muted mt-1 mb-0" style="font-size: 0.95rem;">Lengkapi formulir di bawah ini untuk menambahkan materi ke dalam modul.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Body Konten Utama -->
                    <div class="card-body p-4 p-md-5">
                        <!-- Tema Selection -->
                        <div class="mb-4 pb-2">
                            <label class="form-label">
                                <div class="icon-wrapper"><i class="bi bi-grid-fill"></i></div> 
                                Tema Pembelajaran <span class="text-danger ms-1">*</span>
                            </label>
                            
                            <select name="tema" class="form-select @error('tema') is-invalid @enderror" required>
                                <option value="" disabled selected>-- Pilih Tema Pembelajaran --</option>
                                <option value="tema1" {{ old('tema', request('tema')) == 'tema1' ? 'selected' : '' }}>Tema 1: Kehidupan Sosial dan Kondisi Lingkungan Sekitar</option>
                                <option value="tema2" {{ old('tema', request('tema')) == 'tema2' ? 'selected' : '' }}>Tema 2: Keberagaman Lingkungan Sekitar</option>
                                <option value="tema3" {{ old('tema', request('tema')) == 'tema3' ? 'selected' : '' }}>Tema 3: Potensi Ekonomi Lingkungan</option>
                                <option value="tema4" {{ old('tema', request('tema')) == 'tema4' ? 'selected' : '' }}>Tema 4: Pemberdayaan Masyarakat</option>
                            </select>
                            @error('tema')
                                <div class="invalid-feedback"><i class="bi bi-exclamation-circle-fill me-2"></i> {{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Subtema -->
                        <div class="mb-4 pb-2">
                            <label for="subtema" class="form-label">
                                <div class="icon-wrapper"><i class="bi bi-list-task"></i></div> 
                                Subtema <span class="text-muted">(Opsional)</span>
                            </label>
                            <input type="text" class="form-control @error('subtema') is-invalid @enderror {{ request('subtema') ? 'bg-light text-primary fw-bold' : '' }}" id="subtema" name="subtema" value="{{ old('subtema', request('subtema')) }}" placeholder="Maks. 255 karakter" {{ request('subtema') ? 'readonly' : '' }}>
                            
                            @if(request('subtema'))
                                <div class="form-text text-primary mt-2"><i class="bi bi-info-circle me-1"></i> Subtema terisi otomatis sesuai blok materi yang Anda pilih.</div>
                            @endif
                            
                            @error('subtema')
                                <div class="invalid-feedback"><i class="bi bi-exclamation-circle-fill me-2"></i> {{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Judul Materi -->
                        <div class="mb-4 pb-2">
                            <label for="judul" class="form-label">
                                <div class="icon-wrapper"><i class="bi bi-type"></i></div> 
                                Judul Materi <span class="text-danger ms-1">*</span>
                            </label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}" placeholder="Maks. 255 karakter (contoh: Konsep Dasar Sejarah)" required maxlength="255">
                            @error('judul')
                                <div class="invalid-feedback"><i class="bi bi-exclamation-circle-fill me-2"></i> {{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-4 pb-2">
                            <label for="deskripsi" class="form-label">
                                <div class="icon-wrapper"><i class="bi bi-card-text"></i></div> 
                                Deskripsi Singkat <span class="text-muted">(Opsional)</span>
                            </label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="3" placeholder="Tuliskan deskripsi singkat tentang materi ini...">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback"><i class="bi bi-exclamation-circle-fill me-2"></i> {{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Konten Materi -->
                        <div class="mb-2">
                            <label for="konten" class="form-label">
                                <div class="icon-wrapper"><i class="bi bi-file-text-fill"></i></div> 
                                Konten Materi <span class="text-muted">(Opsional)</span>
                            </label>
                            <textarea class="form-control @error('konten') is-invalid @enderror" id="konten" name="konten" rows="12" placeholder="Tuliskan penjelasan detail materi atau sisipkan materi HTML editor di sini...">{{ old('konten') }}</textarea>
                            @error('konten')
                                <div class="invalid-feedback"><i class="bi bi-exclamation-circle-fill me-2"></i> {{ $message }}</div>
                            @enderror
                            <div class="form-text mt-2"><i class="bi bi-info-circle me-1"></i> Anda dapat menggunakan HTML untuk format teks yang lebih kaya.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Pengaturan Media & Aksi -->
            <div class="col-xl-4 col-lg-5 fade-in-up delay-1">
                
                <!-- Card Media Pendukung -->
                <div class="custom-card mb-4" style="height: auto;">
                    <div class="card-header bg-transparent border-bottom p-4">
                        <h5 class="m-0 d-flex align-items-center" style="font-size: 1.1rem;">
                            <i class="bi bi-collection-play-fill me-2 text-primary fs-4"></i> 
                            Lampiran Media
                            <span class="badge bg-secondary ms-auto fw-normal font-nunito" style="font-size: 0.75rem;">Opsional</span>
                        </h5>
                    </div>
                    <div class="card-body p-4 bg-light">
                        <!-- Informasi: Hanya 1 media per materi -->
                        <div class="alert alert-info-custom mb-3">
                            <i class="bi bi-info-circle me-2"></i> 
                            Anda dapat menambahkan <strong>satu</strong> lampiran media per materi.
                        </div>

                        <!-- Judul Media -->
                        <div class="mb-3">
                            <label for="media_judul" class="form-label text-muted" style="font-size: 0.9rem;">
                                <i class="bi bi-tag me-1"></i> Judul Lampiran
                            </label>
                            <input type="text" name="media_judul" id="media_judul" class="form-control bg-white" placeholder="Contoh: Modul PDF Pendukung" value="{{ old('media_judul') }}">
                            <div class="form-text mt-1">Kosongkan untuk menggunakan judul materi sebagai nama lampiran.</div>
                        </div>

                        <!-- Jenis Media -->
                        <div class="mb-3">
                            <label for="jenis_media" class="form-label text-muted" style="font-size: 0.9rem;">
                                <i class="bi bi-tag me-1"></i> Jenis Media
                            </label>
                            <select name="jenis" id="jenis_media" class="form-select bg-white @error('jenis') is-invalid @enderror">
                                <option value="">Tidak Ada Lampiran</option>
                                <option value="pdf" {{ old('jenis') == 'pdf' ? 'selected' : '' }}>📄 PDF Document</option>
                                <option value="word" {{ old('jenis') == 'word' ? 'selected' : '' }}>📝 Word Document</option>
                                <option value="ppt" {{ old('jenis') == 'ppt' ? 'selected' : '' }}>📊 PowerPoint</option>
                                <option value="video_upload" {{ old('jenis') == 'video_upload' ? 'selected' : '' }}>🎬 Video Lokal (MP4)</option>
                                <option value="video_youtube" {{ old('jenis') == 'video_youtube' ? 'selected' : '' }}>▶️ Video YouTube</option>
                                <option value="link" {{ old('jenis') == 'link' ? 'selected' : '' }}>🔗 Link Eksternal</option>
                            </select>
                            @error('jenis')
                                <div class="invalid-feedback"><i class="bi bi-exclamation-circle-fill me-2"></i> {{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Input File Lokal -->
                        <div id="input_file_container" style="display: none;" class="mt-3 p-3 bg-white border rounded-3 media-input-container">
                            <label for="file" class="form-label" style="font-size: 0.9rem;">
                                <i class="bi bi-cloud-upload-fill me-1 text-primary"></i> Upload File
                            </label>
                            <input type="file" name="file" id="file" class="form-control form-control-sm @error('file') is-invalid @enderror" accept=".pdf,.doc,.docx,.ppt,.pptx,.mp4">
                            <div class="form-text mt-2"><i class="bi bi-info-circle me-1"></i> Maks. 50MB. Format: PDF, Word, PPT, MP4</div>
                            @error('file')
                                <div class="invalid-feedback"><i class="bi bi-exclamation-circle-fill me-2"></i> {{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Input URL YouTube -->
                        <div id="input_url_container" style="display: none;" class="mt-3 p-3 bg-white border rounded-3 media-input-container">
                            <label for="video_url" class="form-label" style="font-size: 0.9rem;">
                                <i class="bi bi-youtube me-1 text-danger"></i> URL YouTube
                            </label>
                            <div class="url-input-wrapper">
                                <input type="url" name="video_url" id="video_url" class="form-control form-control-sm form-control-url @error('video_url') is-invalid @enderror" placeholder="https://www.youtube.com/watch?v=..." value="{{ old('video_url') }}">
                                <span class="url-icon"><i class="bi bi-link-45deg"></i></span>
                            </div>
                            <div class="form-text mt-2"><i class="bi bi-info-circle me-1"></i> Masukkan link video YouTube (contoh: https://www.youtube.com/watch?v=abc123)</div>
                            @error('video_url')
                                <div class="invalid-feedback"><i class="bi bi-exclamation-circle-fill me-2"></i> {{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Input Link Eksternal -->
                        <div id="input_link_container" style="display: none;" class="mt-3 p-3 bg-white border rounded-3 media-input-container">
                            <label for="external_link" class="form-label" style="font-size: 0.9rem;">
                                <i class="bi bi-link-45deg me-1 text-primary"></i> URL Link Eksternal
                            </label>
                            <div class="url-input-wrapper">
                                <input type="url" name="external_link" id="external_link" class="form-control form-control-sm form-control-url @error('external_link') is-invalid @enderror" placeholder="https://example.com" value="{{ old('external_link') }}">
                                <span class="url-icon"><i class="bi bi-box-arrow-up-right"></i></span>
                            </div>
                            <div class="form-text mt-2">
                                <i class="bi bi-info-circle me-1"></i> 
                                <strong>Contoh:</strong> Google Form, Google Drive, Quizizz, Kahoot, Wordwall, Liveworksheet, Canva, Website referensi, dll.
                            </div>
                            @error('external_link')
                                <div class="invalid-feedback"><i class="bi bi-exclamation-circle-fill me-2"></i> {{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Preview link untuk membantu pengguna -->
                        <div id="link_preview" style="display: none;" class="link-preview-box">
                            <i class="bi bi-eye me-1 text-primary"></i> 
                            <span class="text-muted">Preview:</span> 
                            <span id="link_preview_text" class="link-text"></span>
                        </div>
                    </div>
                </div>

                <!-- Card Tombol Aksi -->
                <div class="custom-card sticky-top" style="top: 100px; height: auto; z-index: 10;">
                    <div class="card-body p-4 d-flex flex-column gap-3">
                        <button type="submit" class="btn btn-primary-custom w-100 py-3" style="font-size: 1.1rem;">
                            <i class="bi bi-send-fill me-2"></i> Simpan Materi Baru
                        </button>
                        <a href="{{ route('guru.materi.index') }}" class="btn btn-outline-custom w-100 py-2">
                            <i class="bi bi-arrow-left me-2"></i> Batal & Kembali
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // 1. Validasi Bootstrap Bawaan
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    });

    // 2. Logika Interaktif Media Pendukung
    const jenisMediaSelect = document.getElementById('jenis_media');
    const fileContainer = document.getElementById('input_file_container');
    const urlContainer = document.getElementById('input_url_container');
    const linkContainer = document.getElementById('input_link_container');
    const linkPreview = document.getElementById('link_preview');
    const linkPreviewText = document.getElementById('link_preview_text');
    const externalLinkInput = document.getElementById('external_link');
    const videoUrlInput = document.getElementById('video_url');
    
    function updateMediaInput() {
        const selected = jenisMediaSelect.value;
        
        // Sembunyikan semua container
        fileContainer.style.display = 'none';
        urlContainer.style.display = 'none';
        linkContainer.style.display = 'none';
        linkPreview.style.display = 'none';
        
        // Tampilkan container sesuai jenis yang dipilih
        if (selected === '') {
            return;
        } else if (selected === 'video_youtube') {
            urlContainer.style.display = 'block';
            // Auto-fill video_url jika ada external_link dari sebelumnya
            if (externalLinkInput.value && !videoUrlInput.value) {
                videoUrlInput.value = externalLinkInput.value;
            }
        } else if (selected === 'link') {
            linkContainer.style.display = 'block';
            // Auto-fill external_link jika ada video_url dari sebelumnya
            if (videoUrlInput.value && !externalLinkInput.value) {
                externalLinkInput.value = videoUrlInput.value;
            }
            // Update preview jika ada nilai
            if (externalLinkInput.value) {
                updateLinkPreview(externalLinkInput.value);
            }
        } else {
            fileContainer.style.display = 'block';
        }
    }

    // Fungsi untuk update preview link
    function updateLinkPreview(url) {
        if (url && url.trim() !== '') {
            linkPreviewText.textContent = url;
            linkPreview.style.display = 'block';
        } else {
            linkPreview.style.display = 'none';
        }
    }

    // Event listener untuk perubahan jenis media
    jenisMediaSelect.addEventListener('change', updateMediaInput);

    // Event listener untuk input external link (preview real-time)
    externalLinkInput.addEventListener('input', function() {
        updateLinkPreview(this.value);
    });

    // Event listener untuk input video URL (sinkronisasi dengan link jika diperlukan)
    videoUrlInput.addEventListener('input', function() {
        if (jenisMediaSelect.value === 'link' && !externalLinkInput.value) {
            externalLinkInput.value = this.value;
            updateLinkPreview(this.value);
        }
    });

    // Panggil saat halaman diload untuk menampilkan state yang benar
    updateMediaInput();

    // 3. Auto-fill judul media dari judul materi
    const judulInput = document.getElementById('judul');
    const mediaJudulInput = document.getElementById('media_judul');
    
    judulInput.addEventListener('input', function() {
        if (!mediaJudulInput.value || mediaJudulInput.value === '') {
            mediaJudulInput.placeholder = this.value ? this.value + ' - Media Pendukung' : 'Contoh: Modul PDF Pendukung';
        }
    });

    // 4. Validasi tambahan untuk link eksternal
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        const jenis = jenisMediaSelect.value;
        const fileInput = document.getElementById('file');
        const videoUrl = videoUrlInput.value;
        const externalLink = externalLinkInput.value;

        // Validasi: jika jenis video_youtube, pastikan URL valid
        if (jenis === 'video_youtube' && videoUrl) {
            const youtubePattern = /(?:youtube\.com.*v=|youtu\.be\/)([^&]+)/;
            if (!youtubePattern.test(videoUrl)) {
                e.preventDefault();
                videoUrlInput.classList.add('is-invalid');
                let feedback = videoUrlInput.parentElement.querySelector('.invalid-feedback');
                if (!feedback) {
                    feedback = document.createElement('div');
                    feedback.className = 'invalid-feedback';
                    feedback.innerHTML = '<i class="bi bi-exclamation-circle-fill me-2"></i> URL YouTube tidak valid. Pastikan URL benar.';
                    videoUrlInput.parentElement.appendChild(feedback);
                }
                feedback.style.display = 'block';
                return false;
            }
        }

        // Validasi: jika jenis link, pastikan URL valid
        if (jenis === 'link' && externalLink) {
            try {
                new URL(externalLink);
            } catch (_) {
                e.preventDefault();
                externalLinkInput.classList.add('is-invalid');
                let feedback = externalLinkInput.parentElement.querySelector('.invalid-feedback');
                if (!feedback) {
                    feedback = document.createElement('div');
                    feedback.className = 'invalid-feedback';
                    feedback.innerHTML = '<i class="bi bi-exclamation-circle-fill me-2"></i> URL tidak valid. Pastikan URL dimulai dengan http:// atau https://';
                    externalLinkInput.parentElement.appendChild(feedback);
                }
                feedback.style.display = 'block';
                return false;
            }
        }

        // Validasi: jika jenis membutuhkan file, pastikan file diupload
        if (['pdf', 'word', 'ppt', 'video_upload'].includes(jenis) && !fileInput.files.length) {
            e.preventDefault();
            fileInput.classList.add('is-invalid');
            let feedback = fileInput.parentElement.querySelector('.invalid-feedback');
            if (!feedback) {
                feedback = document.createElement('div');
                feedback.className = 'invalid-feedback';
                feedback.innerHTML = '<i class="bi bi-exclamation-circle-fill me-2"></i> Silakan pilih file untuk diupload.';
                fileInput.parentElement.appendChild(feedback);
            }
            feedback.style.display = 'block';
            return false;
        }
    });

    // 5. Reset error state saat input berubah
    document.querySelectorAll('input, select, textarea').forEach(el => {
        el.addEventListener('input', function() {
            this.classList.remove('is-invalid');
            const feedback = this.parentElement.querySelector('.invalid-feedback');
            if (feedback) {
                feedback.style.display = 'none';
            }
        });
    });

  });
</script>
@endsection