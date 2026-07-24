@extends('guru.guru_master')

@section('guru')
<!-- Font Google modern -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    :root {
        /* Skema Warna Global - Vibrant EdTech */
        --bg-main: #F7F9FC;
        --surface: #FFFFFF;
        
        --text-dark: #1E293B;
        --text-gray: #64748B;
        
        --border-color: rgba(0,0,0,0.06); 
        
        --brand-primary: #4F46E5;
        --brand-secondary: #818CF8;
        --brand-bg: #EEF2FF;
        --brand-success: #10B981;
        --brand-success-bg: #D1FAE5;
        
        /* Shadows & Border Radius (Squircle) */
        --shadow-sm: 0 2px 8px rgba(0,0,0,0.04);
        --shadow-md: 0 10px 25px rgba(0,0,0,0.06);
        --shadow-lg: 0 20px 40px rgba(0,0,0,0.08);
        
        --radius-sm: 8px;
        --radius-md: 16px;
        --radius-lg: 24px;
        --radius-xl: 32px;
    }

    body {
        font-family: 'Nunito', sans-serif;
        background-color: var(--bg-main);
        color: var(--text-dark);
        -webkit-font-smoothing: antialiased;
    }

    /* Typography */
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Outfit', sans-serif;
        font-weight: 700;
        letter-spacing: -0.02em;
    }

    .app-container {
        width: 100%;
        max-width: 100%;
        margin: 0 auto;
        padding: 1.5rem 1.5rem 4rem;
    }

    /* Penyesuaian jarak sisi kiri-kanan khusus untuk layar PC/Laptop agar tidak terlalu menempel ke ujung layar */
    @media (min-width: 1200px) {
        .app-container {
            padding: 2rem 4rem 4rem;
        }
    }

    /* ====== PAGE HEADER ====== */
    .page-title-box {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        margin-bottom: 1.5rem;
        position: relative;
    }

    .page-title {
        font-size: 2.25rem;
        font-weight: 800;
        color: var(--text-dark);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .page-title i {
        color: var(--brand-primary);
        font-size: 2.5rem;
    }

    .breadcrumb-custom {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--text-gray);
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .breadcrumb-custom a {
        color: var(--brand-primary);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .breadcrumb-custom a:hover {
        color: var(--text-dark);
    }

    .breadcrumb-separator {
        color: #CBD5E1;
        font-size: 0.8rem;
    }

    /* ====== FILTER SECTION ====== */
    .filter-card {
        background: var(--surface);
        border-radius: var(--radius-md);
        padding: 1.25rem;
        box-shadow: var(--shadow-sm);
        border: 1px solid var(--border-color);
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .filter-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: var(--brand-bg);
        color: var(--brand-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        flex-shrink: 0;
    }

    .form-control-custom, .form-select-custom {
        font-family: 'Nunito', sans-serif;
        border: 1px solid var(--border-color);
        padding: 0.75rem 1.25rem;
        border-radius: 12px;
        font-size: 0.95rem;
        color: var(--text-dark);
        background-color: #F8FAFC;
        transition: all 0.3s ease;
    }

    .form-control-custom::placeholder {
        color: #94A3B8;
    }

    .form-control-custom:focus, .form-select-custom:focus {
        background-color: #FFFFFF;
        border-color: var(--brand-primary);
        box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.15);
        outline: none;
    }

    .btn-search {
        background: linear-gradient(135deg, var(--brand-primary), #3730A3);
        border: none;
        color: white;
        font-weight: 700;
        font-family: 'Outfit', sans-serif;
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        box-shadow: 0 4px 10px rgba(79, 70, 229, 0.2);
    }

    .btn-search:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(79, 70, 229, 0.3);
        color: white;
    }

    .btn-reset {
        background: transparent;
        border: 1px solid var(--border-color);
        color: var(--text-gray);
        font-weight: 700;
        font-family: 'Outfit', sans-serif;
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        text-decoration: none;
    }

    .btn-reset:hover {
        background: var(--bg-main);
        color: var(--text-dark);
        border-color: #CBD5E1;
    }

    /* ====== TABLE SECTION ====== */
    .table-card {
        background: var(--surface);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-md);
        border: 1px solid var(--border-color);
        overflow: hidden;
    }

    .table-responsive {
        margin: 0;
        padding: 0;
    }

    .custom-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        margin: 0;
    }

    .custom-table thead th {
        font-family: 'Outfit', sans-serif;
        font-weight: 700;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: var(--text-gray);
        background-color: #F8FAFC;
        padding: 1rem 1.25rem;
        border-bottom: 2px solid var(--border-color);
        border-top: none;
    }

    .custom-table tbody td {
        padding: 1rem 1.25rem;
        vertical-align: middle;
        border-bottom: 1px solid var(--border-color);
        color: var(--text-dark);
        font-size: 0.95rem;
        transition: background-color 0.2s ease;
    }

    .custom-table tbody tr:last-child td {
        border-bottom: none;
    }

    .custom-table tbody tr:hover td {
        background-color: var(--bg-main);
    }

    /* Styling Elemen Dalam Tabel */
    .student-info {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .student-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--brand-secondary), var(--brand-primary));
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-family: 'Outfit', sans-serif;
        font-size: 1rem;
        flex-shrink: 0;
    }

    .student-name {
        font-weight: 700;
        margin-bottom: 0.2rem;
        display: block;
        color: var(--text-dark);
    }

    .student-nis {
        font-size: 0.8rem;
        color: var(--text-gray);
        display: block;
    }

    .email-text {
        color: var(--text-gray);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .badge-kelas {
        background-color: var(--brand-bg);
        color: var(--brand-primary);
        font-weight: 700;
        font-size: 0.8rem;
        padding: 0.4rem 0.8rem;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
    }

    .badge-kelas.empty {
        background-color: #FEE2E2;
        color: #DC2626;
    }

    .date-text {
        font-size: 0.9rem;
        color: var(--text-gray);
        font-weight: 600;
    }

    /* ====== PAGINATION ====== */
    .pagination-container {
        padding: 1rem 1.5rem;
        border-top: 1px solid var(--border-color);
        display: flex;
        justify-content: center;
        background-color: var(--surface);
    }

    /* Override Bootstrap Pagination to match theme */
    .pagination {
        margin: 0;
        gap: 0.25rem;
    }
    
    .page-item .page-link {
        border-radius: 8px;
        border: none;
        color: var(--text-gray);
        font-weight: 600;
        padding: 0.5rem 0.75rem;
        min-width: 38px;
        text-align: center;
        transition: all 0.2s ease;
    }
    
    .page-item.active .page-link {
        background-color: var(--brand-primary);
        color: white;
        box-shadow: 0 4px 10px rgba(79, 70, 229, 0.3);
    }
    
    .page-item .page-link:hover:not(.active) {
        background-color: var(--brand-bg);
        color: var(--brand-primary);
    }

    /* Animasi */
    .fade-in-up { animation: fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) both; }
    .delay-1 { animation-delay: 0.1s; }
    .delay-2 { animation-delay: 0.2s; }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .filter-card {
            flex-direction: column;
            align-items: stretch;
        }
        
        .filter-form {
            flex-direction: column;
            width: 100%;
        }
        
        .filter-form .form-control-custom,
        .filter-form .form-select-custom,
        .filter-form .btn-search,
        .filter-form .btn-reset {
            width: 100%;
        }
    }
</style>

<div class="app-container">
    
    <!-- Title & Breadcrumb -->
    <div class="page-title-box fade-in-up">
        <h1 class="page-title">
            <i class="bi bi-people-fill"></i> Manajemen Siswa
        </h1>
        <ul class="breadcrumb-custom">
            <li><a href="{{ route('guru.guru_master') }}">Dashboard</a></li>
            <li class="breadcrumb-separator"><i class="bi bi-chevron-right"></i></li>
            <li>Semua Siswa</li>
        </ul>
    </div>

    <!-- Alert Success -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 rounded-4 shadow-sm mb-4 d-flex align-items-center fade-in-up delay-1" role="alert" style="background-color: var(--brand-success-bg); color: var(--brand-success);">
            <i class="bi bi-check-circle-fill fs-4 me-3"></i>
            <div>
                <strong>Berhasil!</strong> {{ session('success') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Filter Section -->
    <div class="filter-card fade-in-up delay-1">
        <div class="filter-icon d-none d-md-flex">
            <i class="bi bi-funnel-fill"></i>
        </div>
        <div class="flex-grow-1">
            <form action="{{ route('guru.siswa.index') }}" method="GET" class="d-flex flex-column flex-md-row gap-3 filter-form">
                
                <div class="position-relative flex-grow-1">
                    <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                    <input type="text" name="search" placeholder="Cari nama atau NIS siswa..." value="{{ request('search') }}" class="form-control-custom w-100 ps-5">
                </div>
                
                <div class="flex-shrink-0" style="min-width: 200px;">
                    <select name="kelas" id="kelas" class="form-select-custom w-100">
                        <option value="">Semua Kelas</option>
                        @foreach($daftarKelas as $kelas)
                            <option value="{{ $kelas->id }}" {{ request('kelas') == $kelas->id ? 'selected' : '' }}>
                                {{ $kelas->nama_kelas }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="d-flex gap-2 flex-shrink-0">
                    <button type="submit" class="btn-search w-100 justify-content-center">
                        <i class="bi bi-search"></i> Cari
                    </button>
                    
                    @if(request('search') || request('kelas'))
                        <a href="{{ route('guru.siswa.index') }}" class="btn-reset w-100 justify-content-center">
                            <i class="bi bi-arrow-counterclockwise"></i> Reset
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>

    <!-- Table Section -->
    <div class="table-card fade-in-up delay-2">
        <div class="table-responsive">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th width="5%" class="text-center">No</th>
                        <th width="35%">Informasi Siswa</th>
                        <th width="30%">Email / Kontak</th>
                        <th width="15%">Kelas</th>
                        <th width="15%">Tanggal Daftar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($semuaSiswa as $index => $siswa)
                        <tr>
                            <td class="text-center fw-bold text-muted">{{ $semuaSiswa->firstItem() + $index }}</td>
                            <td>
                                <div class="student-info">
                                    <div class="student-avatar">
                                        <!-- Mengambil huruf pertama dari nama -->
                                        {{ strtoupper(substr($siswa->name, 0, 1)) }}
                                    </div>
                                    <div>
                                        <span class="student-name">{{ $siswa->name }}</span>
                                        <span class="student-nis"><i class="bi bi-person-badge me-1"></i>NIS: {{ $siswa->nis ?? '-' }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="email-text">
                                    <i class="bi bi-envelope-at"></i> {{ $siswa->email }}
                                </div>
                            </td>
                            <td>
                                @if($siswa->kelas)
                                    <span class="badge-kelas">
                                        <i class="bi bi-bookmark-fill"></i> {{ $siswa->kelas->nama_kelas }}
                                    </span>
                                @else
                                    <span class="badge-kelas empty">
                                        <i class="bi bi-exclamation-circle-fill"></i> Belum ada Kelas
                                    </span>
                                @endif
                            </td>
                            <td>
                                <span class="date-text">
                                    {{ $siswa->created_at->format('d M Y') }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-5">
                                <div class="d-flex flex-column align-items-center justify-content-center text-muted">
                                    <i class="bi bi-inbox fs-1 mb-2" style="color: var(--border-color);"></i>
                                    <h5 class="fw-bold m-0 font-outfit">Data Tidak Ditemukan</h5>
                                    <p class="small mt-1">Tidak ada data siswa yang cocok dengan kriteria pencarian Anda.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        @if($semuaSiswa->hasPages())
        <div class="pagination-container">
            {{ $semuaSiswa->links('pagination::bootstrap-5') }}
        </div>
        @endif
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection