@extends('guru.guru_master')

@section('guru')

<style>
    /* Konsistensi dengan Halaman Index */
    :root {
        --warm-primary: #D97706;
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

    .main-card {
        background: #fff;
        border: 1px solid #E5E7EB;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--card-shadow);
    }

    .card-header-custom {
        display: flex; align-items: center; gap: 12px;
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid #F3F4F6;
        background: #FAFAFA;
    }
    .card-header-custom i { font-size: 18px; color: var(--warm-primary); }
    .card-header-custom h5 { font-size: 16px; font-weight: 600; margin: 0; color: #1F2937; }

    /* Form Styling */
    .form-label {
        font-size: 14px;
        font-weight: 600;
        color: #374151;
        margin-bottom: 8px;
    }

    .form-control, .form-select {
        border-radius: 10px;
        padding: 10px 15px;
        border: 1px solid #D1D5DB;
        font-size: 14px;
        transition: all 0.2s;
    }

    .form-control:focus, .form-select:focus {
        border-color: var(--warm-primary);
        box-shadow: 0 0 0 3px rgba(217, 119, 6, 0.1);
    }

    .btn-save {
        padding: 10px 25px;
        background: #059669;
        color: #fff;
        border: none;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.2s;
        box-shadow: 0 4px 6px -1px rgba(5, 150, 105, 0.2);
    }

    .btn-save:hover {
        background: #047857;
        transform: translateY(-1px);
    }

    .btn-back {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #6B7280;
        text-decoration: none;
        font-weight: 500;
        font-size: 14px;
        transition: color 0.2s;
    }

    .btn-back:hover {
        color: #111827;
    }
</style>

<div class="container-fluid py-4">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="d-flex align-items-center gap-3">
            <div class="page-title-icon">
                <i class="fas fa-edit"></i>
            </div>
            <div>
                <h2 class="fw-bold mb-0" style="font-size:20px; color: #111827;">Edit Video</h2>
                <p class="mb-0 text-muted" style="font-size:13px;">Perbarui informasi video materi pembelajaran</p>
            </div>
        </div>
        <a href="{{ route('guru.video.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="main-card">
                <div class="card-header-custom">
                    <i class="fas fa-file-video"></i>
                    <h5>Formulir Perubahan Data</h5>
                </div>
                
                <div class="p-4">
                    <form action="{{ route('guru.video.update', $video->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Judul Video</label>
                            <input 
                                type="text"
                                value="{{ $video->judul }}" 
                                name="judul" 
                                class="form-control" 
                                placeholder="Masukkan judul video..."
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi Materi</label>
                            <textarea 
                                name="deskripsi" 
                                class="form-control" 
                                rows="4" 
                                placeholder="Tuliskan penjelasan singkat mengenai isi video...">{{ $video->deskripsi }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Pilih Tema</label>
                                <select name="tema" class="form-select">
                                    <option value="tema1" {{ $video->tema == 'tema1' ? 'selected' : '' }}>Tema 1</option>
                                    <option value="tema2" {{ $video->tema == 'tema2' ? 'selected' : '' }}>Tema 2</option>
                                    <option value="tema3" {{ $video->tema == 'tema3' ? 'selected' : '' }}>Tema 3</option>
                                    <option value="tema4" {{ $video->tema == 'tema4' ? 'selected' : '' }}>Tema 4</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Link YouTube</label>
                                <input 
                                    type="text" 
                                    name="link" 
                                    value="{{ $video->link }}" 
                                    class="form-control" 
                                    placeholder="https://www.youtube.com/watch?v=...">
                            </div>
                        </div>

                        <hr class="my-4" style="border-top: 1px solid #F3F4F6;">

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn-save">
                                <i class="fas fa-save me-2"></i> Simpan Perubahan
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection