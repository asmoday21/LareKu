@extends('guru.guru_master')

@section('guru')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Siswa</title>
    
    <!-- Material Design Icons -->
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #1a56db;
            --primary-blue-dark: #1e3a8a;
            --primary-blue-light: #dbeafe;
            --accent-teal: #0d9488;
            --accent-purple: #7c3aed;
            --bg-gradient-start: #f0f4ff;
            --bg-gradient-end: #e8edf5;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--bg-gradient-start) 0%, var(--bg-gradient-end) 100%);
            min-height: 100vh;
        }

        /* Modern Card Design */
        .modern-card {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.7);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .modern-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-blue), var(--accent-teal), var(--accent-purple));
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .modern-card:hover::before {
            opacity: 1;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #e2e8f0;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, var(--primary-blue), var(--accent-teal));
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-blue-dark);
        }

        /* Table Styles */
        .table-container {
            overflow-x: auto;
        }

        .custom-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        .custom-table thead th {
            font-weight: 700;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #64748b;
            background: #f8fafc;
            padding: 0.75rem 1rem;
            border-bottom: 2px solid #e2e8f0;
            text-align: left;
        }

        .custom-table tbody td {
            padding: 0.75rem 1rem;
            vertical-align: middle;
            border-bottom: 1px solid #f1f5f9;
            color: #1e293b;
            font-size: 0.9rem;
            transition: background-color 0.2s ease;
        }

        .custom-table tbody tr:last-child td {
            border-bottom: none;
        }

        .custom-table tbody tr:hover td {
            background-color: #f8fafc;
        }

        /* Student Avatar */
        .student-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #1a56db, #7c3aed);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.9rem;
            flex-shrink: 0;
        }

        .student-name {
            font-weight: 700;
            color: #1e293b;
        }

        .student-nis {
            font-size: 0.75rem;
            color: #94a3b8;
        }

        /* Badge */
        .badge-kelas {
            background: #dbeafe;
            color: #1a56db;
            font-weight: 600;
            font-size: 0.7rem;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
        }

        .badge-kelas.empty {
            background: #fee2e2;
            color: #dc2626;
        }

        /* Pagination */
        .pagination-custom {
            display: flex;
            gap: 0.25rem;
            justify-content: center;
            padding: 1rem 0;
        }

        .pagination-custom .page-item .page-link {
            border: none;
            color: #64748b;
            font-weight: 600;
            padding: 0.4rem 0.8rem;
            border-radius: 8px;
            transition: all 0.2s ease;
            background: transparent;
            font-size: 0.85rem;
            text-decoration: none;
        }

        .pagination-custom .page-item.active .page-link {
            background: linear-gradient(135deg, #1a56db, #7c3aed);
            color: white;
            box-shadow: 0 4px 12px rgba(26, 86, 219, 0.3);
        }

        .pagination-custom .page-item .page-link:hover:not(.active) {
            background: #dbeafe;
            color: #1a56db;
        }

        /* Input & Select */
        .form-control-custom {
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 0.6rem 1rem 0.6rem 2.6rem;
            font-size: 0.9rem;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s ease;
            background: white;
            color: #1e293b;
            width: 100%;
        }

        .form-control-custom:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 4px rgba(26, 86, 219, 0.08);
        }

        .form-select-custom {
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 0.6rem 2.5rem 0.6rem 1rem;
            font-size: 0.9rem;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s ease;
            background: white;
            color: #1e293b;
            width: 100%;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%2364748b' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
        }

        .form-select-custom:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 4px rgba(26, 86, 219, 0.08);
        }

        /* Buttons */
        .btn-primary-gradient {
            background: linear-gradient(135deg, #1a56db 0%, #7c3aed 100%);
            color: white;
            padding: 0.6rem 1.25rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.85rem;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }

        .btn-primary-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(26, 86, 219, 0.3);
            color: white;
        }

        .btn-outline {
            background: transparent;
            color: #64748b;
            padding: 0.6rem 1.25rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.85rem;
            border: 2px solid #e2e8f0;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }

        .btn-outline:hover {
            background: #f8fafc;
            border-color: #cbd5e0;
            transform: translateY(-2px);
        }

        /* Alert */
        .alert-success-custom {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(16, 185, 129, 0.05));
            border: 1px solid rgba(16, 185, 129, 0.2);
            border-radius: 12px;
            padding: 0.75rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .alert-success-custom i {
            color: #10b981;
            font-size: 1.2rem;
        }

        /* Empty State */
        .empty-state {
            padding: 3rem 1rem;
            text-align: center;
        }

        .empty-state i {
            font-size: 3rem;
            color: #e2e8f0;
            margin-bottom: 1rem;
        }

        /* Responsive */
        @media (max-width: 640px) {
            .filter-form {
                flex-direction: column;
                gap: 0.75rem;
            }
            
            .filter-form .flex-grow-1,
            .filter-form .flex-shrink-0 {
                width: 100%;
            }
            
            .filter-form .d-flex {
                flex-direction: column;
                width: 100%;
            }
            
            .filter-form .btn-primary-gradient,
            .filter-form .btn-outline {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>

<div class="container mx-auto py-6 px-4 sm:px-6 lg:px-8 max-w-7xl">
    
    <!-- Title & Breadcrumb -->
    <div class="mb-6" data-aos="fade-up">
        <div class="flex items-center gap-3 mb-2">
            <div class="w-1 h-8 bg-gradient-to-b from-blue-600 to-teal-500 rounded-full"></div>
            <h1 class="font-extrabold text-2xl sm:text-3xl text-slate-800">
                <i class="mdi mdi-account-group text-blue-600 mr-2"></i>
                Manajemen Siswa
            </h1>
        </div>
        <div class="flex items-center gap-2 text-sm text-slate-500 ml-4">
            <a href="{{ route('guru.guru_master') }}" class="text-blue-600 hover:text-blue-800 transition">Dashboard</a>
            <i class="mdi mdi-chevron-right text-slate-300"></i>
            <span class="text-slate-400">Semua Siswa</span>
        </div>
    </div>

    <!-- Alert Success -->
    @if(session('success'))
        <div class="alert-success-custom mb-6" data-aos="fade-down">
            <i class="mdi mdi-check-circle"></i>
            <div class="flex-1">
                <div class="font-semibold text-green-700 text-sm">Berhasil!</div>
                <div class="text-green-600 text-xs">{{ session('success') }}</div>
            </div>
            <button onclick="this.parentElement.remove()" class="text-green-400 hover:text-green-600 transition text-xl leading-none">
                <i class="mdi mdi-close"></i>
            </button>
        </div>
    @endif

    <!-- Filter Section -->
    <div class="modern-card rounded-2xl p-5 mb-6" data-aos="fade-up" data-aos-delay="100">
        <form action="{{ route('guru.siswa.index') }}" method="GET" class="filter-form flex flex-col md:flex-row gap-3">
            <div class="flex-1 relative">
                <i class="mdi mdi-magnify absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                <input type="text" 
                       name="search" 
                       placeholder="Cari nama atau NIS siswa..." 
                       value="{{ request('search') }}" 
                       class="form-control-custom pl-10">
            </div>
            
            <div class="flex-shrink-0 md:w-48">
                <select name="kelas" id="kelas" class="form-select-custom">
                    <option value="">Semua Kelas</option>
                    @foreach($daftarKelas as $kelas)
                        <option value="{{ $kelas->id }}" {{ request('kelas') == $kelas->id ? 'selected' : '' }}>
                            {{ $kelas->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-2 flex-shrink-0">
                <button type="submit" class="btn-primary-gradient">
                    <i class="mdi mdi-magnify"></i> Cari
                </button>
                
                @if(request('search') || request('kelas'))
                    <a href="{{ route('guru.siswa.index') }}" class="btn-outline">
                        <i class="mdi mdi-refresh"></i> Reset
                    </a>
                @endif
            </div>
        </form>
    </div>

    <!-- Table Section -->
    <div class="modern-card rounded-2xl overflow-hidden" data-aos="fade-up" data-aos-delay="200">
        <div class="table-container">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th class="text-center w-12">No</th>
                        <th>Informasi Siswa</th>
                        <th>Email</th>
                        <th>Kelas</th>
                        <th>Tanggal Daftar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($semuaSiswa as $index => $siswa)
                        <tr>
                            <td class="text-center text-slate-500 font-semibold text-sm">
                                {{ $semuaSiswa->firstItem() + $index }}
                            </td>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="student-avatar">
                                        {{ strtoupper(substr($siswa->name, 0, 1)) }}
                                    </div>
                                    <div>
                                        <div class="student-name">{{ $siswa->name }}</div>
                                        <div class="student-nis">
                                            <i class="mdi mdi-card-account-details text-[10px]"></i>
                                            NIS: {{ $siswa->nis ?? '-' }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="flex items-center gap-1 text-slate-600 text-sm">
                                    <i class="mdi mdi-email-outline text-slate-400"></i>
                                    {{ $siswa->email }}
                                </div>
                            </td>
                            <td>
                                @if($siswa->kelas)
                                    <span class="badge-kelas">
                                        <i class="mdi mdi-bookmark text-[10px]"></i>
                                        {{ $siswa->kelas->nama_kelas }}
                                    </span>
                                @else
                                    <span class="badge-kelas empty">
                                        <i class="mdi mdi-alert-circle text-[10px]"></i>
                                        Belum ada Kelas
                                    </span>
                                @endif
                            </td>
                            <td>
                                <span class="text-slate-500 text-sm font-medium">
                                    {{ $siswa->created_at ? $siswa->created_at->format('d M Y') : '-' }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <div class="empty-state">
                                    <i class="mdi mdi-account-group-outline"></i>
                                    <h5 class="font-bold text-slate-700 text-lg">Data Tidak Ditemukan</h5>
                                    <p class="text-slate-400 text-sm mt-1">Tidak ada data siswa yang cocok dengan kriteria pencarian Anda.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        @if($semuaSiswa->hasPages())
            <div class="border-t border-slate-100">
                <div class="pagination-custom">
                    {{ $semuaSiswa->links('pagination::bootstrap-5') }}
                </div>
            </div>
        @endif
    </div>

</div>

<!-- JavaScript -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ 
        duration: 600, 
        once: true,
        easing: 'ease-out-cubic'
    });

    // Auto-close alert after 5s
    document.querySelectorAll('.alert-success-custom').forEach(el => {
        setTimeout(() => {
            el.style.transition = 'all 0.5s ease';
            el.style.opacity = '0';
            el.style.transform = 'translateY(-10px)';
            setTimeout(() => el.remove(), 500);
        }, 5000);
    });
</script>

</body>
</html>
@endsection