@extends('siswa.siswa_master')
@section('siswa')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Materi Pembelajaran</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #667eea;
            --primary-dark: #5a67d8;
            --secondary: #f093fb;
            --secondary-dark: #e879f9;
            --success: #4facfe;
            --success-dark: #3b82f6;
            --warning: #43e97b;
            --warning-dark: #22c55e;
            --light-bg: #f8fafc;
            --card-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --card-shadow-hover: 0 10px 15px rgba(0, 0, 0, 0.1);
            --border-radius: 12px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f1f5f9;
            color: #334155;
            padding-top: 1rem;
            padding-bottom: 2rem;
        }

        .header-section {
            background: white;
            border-radius: var(--border-radius);
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: var(--card-shadow);
        }

        .header-title {
            color: var(--primary);
            font-weight: 700;
            font-size: 2.2rem;
            text-align: center;
            margin-bottom: 0.5rem;
        }
        
        .subtitle {
            color: #64748b;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        /* Progress Section */
        .progress-section {
            background: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            box-shadow: var(--card-shadow);
            margin-bottom: 2rem;
        }

        .progress-title {
            font-weight: 600;
            color: #334155;
            margin-bottom: 1rem;
        }

        .progress {
            height: 10px;
            border-radius: 5px;
            background: #e2e8f0;
        }

        .progress-bar {
            background: linear-gradient(to right, var(--success), var(--success-dark));
            border-radius: 5px;
        }

        .progress-stats {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
            flex-wrap: wrap;
        }

        .stat-item {
            text-align: center;
            flex: 1;
            min-width: 100px;
            margin: 0.5rem 0;
        }

        .stat-number {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--primary);
        }

        .stat-label {
            color: #64748b;
            font-size: 0.85rem;
        }

        /* Card Styles */
        .card-materi {
            border: none;
            border-radius: var(--border-radius);
            overflow: hidden;
            transition: all 0.3s ease;
            height: 100%;
            box-shadow: var(--card-shadow);
            background: white;
            margin-bottom: 1.5rem;
        }
        
        .card-materi:hover {
            transform: translateY(-5px);
            box-shadow: var(--card-shadow-hover);
        }
        
        .card-theme-1 {
            border-top: 4px solid var(--primary);
        }
        
        .card-theme-2 {
            border-top: 4px solid var(--secondary);
        }
        
        .card-theme-3 {
            border-top: 4px solid var(--success);
        }
        
        .card-theme-4 {
            border-top: 4px solid var(--warning);
        }

        .icon-container {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1.5rem auto;
            font-size: 1.8rem;
        }
        
        .icon-theme-1 {
            background: rgba(102, 126, 234, 0.1);
            color: var(--primary);
        }
        
        .icon-theme-2 {
            background: rgba(240, 147, 251, 0.1);
            color: var(--secondary);
        }
        
        .icon-theme-3 {
            background: rgba(79, 172, 254, 0.1);
            color: var(--success);
        }
        
        .icon-theme-4 {
            background: rgba(67, 233, 123, 0.1);
            color: var(--warning);
        }

        .card-title {
            font-weight: 600;
            color: #334155;
            font-size: 1.2rem;
            text-align: center;
            margin-bottom: 1rem;
        }

        .card-text {
            color: #64748b;
            line-height: 1.5;
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
        }

        .card-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding: 0.8rem;
            background: #f8fafc;
            border-radius: 8px;
        }

        .meta-item {
            display: flex;
            align-items: center;
            font-size: 0.85rem;
            color: #64748b;
            font-weight: 500;
        }

        .meta-item i {
            margin-right: 0.4rem;
        }
        
        .btn-learn {
            border: none;
            border-radius: 6px;
            padding: 10px 20px;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.2s ease;
            display: inline-block;
            text-align: center;
            text-decoration: none;
            color: white;
            width: 100%;
        }
        
        .btn-theme-1 {
            background: var(--primary);
        }
        
        .btn-theme-1:hover {
            background: var(--primary-dark);
            color: white;
        }
        
        .btn-theme-2 {
            background: var(--secondary);
        }
        
        .btn-theme-2:hover {
            background: var(--secondary-dark);
            color: white;
        }
        
        .btn-theme-3 {
            background: var(--success);
        }
        
        .btn-theme-3:hover {
            background: var(--success-dark);
            color: white;
        }
        
        .btn-theme-4 {
            background: var(--warning);
        }
        
        .btn-theme-4:hover {
            background: var(--warning-dark);
            color: white;
        }

        /* Info Badge */
        .info-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 0.75rem;
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: 500;
        }

        .badge-primary { background: var(--primary); color: white; }
        .badge-secondary { background: var(--secondary); color: white; }
        .badge-success { background: var(--success); color: white; }
        .badge-warning { background: var(--warning); color: white; }
        .badge-info { background: #cbd5e1; color: #334155; }
        .badge-light { background: #e2e8f0; color: #475569; }

        /* Quick Actions */
        .quick-actions {
            background: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            margin-top: 2rem;
            box-shadow: var(--card-shadow);
        }

        .action-btn {
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            padding: 8px 15px;
            font-weight: 500;
            transition: all 0.2s ease;
            margin: 0.3rem;
            background: white;
            font-size: 0.9rem;
            color: #475569;
        }

        .action-btn:hover {
            background: #f1f5f9;
            border-color: #94a3b8;
        }
        
        /* Floating Action Button */
        .floating-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            box-shadow: var(--card-shadow-hover);
            z-index: 100;
            background: var(--primary);
            border: none;
            color: white;
        }

        .floating-btn:hover {
            background: var(--primary-dark);
        }
        
        /* Modal Styles */
        .modal-content {
            border-radius: var(--border-radius);
            border: none;
            box-shadow: var(--card-shadow-hover);
        }
        
        .modal-header {
            border-bottom: 1px solid #e2e8f0;
        }
        
        .modal-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin: 0 auto 1rem;
            background: #f1f5f9;
            color: var(--primary);
        }

        .modal-title {
            font-weight: 600;
            color: #334155;
        }

        .modal-btn {
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            padding: 10px 15px;
            font-weight: 500;
            transition: all 0.2s ease;
            background: white;
            margin-bottom: 10px;
            text-align: left;
            width: 100%;
        }

        .modal-btn:hover {
            background: #f8fafc;
            border-color: #94a3b8;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-title {
                font-size: 1.8rem;
            }
            
            .progress-stats {
                flex-direction: column;
                align-items: center;
            }
            
            .stat-item {
                margin: 0.5rem 0;
            }
            
            .action-btn {
                width: 100%;
                margin: 0.3rem 0;
            }
        }

        /* Coming soon cards */
        .coming-soon {
            opacity: 0.7;
        }

        .coming-soon .icon-container {
            background: #e2e8f0;
            color: #94a3b8;
        }

        .coming-soon .btn-learn {
            background: #94a3b8;
            cursor: not-allowed;
        }

        .coming-soon .btn-learn:hover {
            background: #94a3b8;
        }
    </style>
</head>
<body>
    <div class="container py-3">
        <!-- Header Section -->
        <header class="header-section">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h1 class="header-title">Materi Pembelajaran IPS Kelas VII</h1>
                    <p class="subtitle">
                        <i class="fas fa-graduation-cap me-2"></i>
                        Eksplorasi lingkungan dan masyarakat di sekitarmu dengan pembelajaran interaktif
                    </p>
                    
                </div>
            </div>
        </header>

        <!-- Materials Grid -->
        <div class="row">
            <!-- Card 1 -->
            <div class="col-lg-6 mb-4">
                <div class="card card-materi card-theme-1">
                    <div class="card-body p-4 position-relative">
                        <span class="info-badge badge-primary">
                            <i class="fas fa-book me-1"></i> 5 Materi
                        </span>
                        
                        <div class="icon-container icon-theme-1">
                            <i class="fas fa-users"></i>
                        </div>
                        
                        <h3 class="card-title">Tema 01: Kehidupan Sosial dan Kondisi Lingkungan Sekitar</h3>
                        <p class="card-text">Pelajari tentang cara kita berinteraksi dan pengaruh lingkungan terhadap kehidupan sehari-hari.</p>
                        
                        <div class="card-meta">
                            <div class="meta-item">
                                <i class="far fa-clock"></i> 120 menit
                            </div>
                            <span class="badge badge-info">
                                <i class="fas fa-star me-1"></i> Penting
                            </span>
                        </div>
                        
                        <div class="text-center">
                            <a href="{{ route('siswa.materi.tema1', ['id' => 1]) }}" class="btn btn-learn btn-theme-1">
                                <i class="fas fa-play me-2"></i> Mulai Belajar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="col-lg-6 mb-4">
                <div class="card card-materi card-theme-2">
                    <div class="card-body p-4 position-relative">
                        <span class="info-badge badge-secondary">
                            <i class="fas fa-book me-1"></i> 4 Materi
                        </span>
                        
                        <div class="icon-container icon-theme-2">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                        
                        <h3 class="card-title">Tema 02: Keberagaman Lingkungan Sekitar</h3>
                        <p class="card-text">Kenali berbagai budaya, suku, dan kekayaan alam yang ada di sekitar kita.</p>
                        
                        <div class="card-meta">
                            <div class="meta-item">
                                <i class="far fa-clock"></i> 90 menit
                            </div>
                            <span class="badge badge-success">
                                <i class="fas fa-gamepad me-1"></i> Interaktif
                            </span>
                        </div>
                        
                        <div class="text-center">
                            <a href="{{ route('siswa.materi.tema2', ['id' => 2]) }}" class="btn btn-learn btn-theme-2">
                                <i class="fas fa-play me-2"></i> Mulai Belajar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="col-lg-6 mb-4">
                <div class="card card-materi card-theme-3">
                    <div class="card-body p-4 position-relative">
                        <span class="info-badge badge-success">
                            <i class="fas fa-book me-1"></i> 6 Materi
                        </span>
                        
                        <div class="icon-container icon-theme-3">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        
                        <h3 class="card-title">Tema 03: Potensi Ekonomi Lingkungan</h3>
                        <p class="card-text">Cari tahu bagaimana sumber daya alam dan kegiatan masyarakat bisa menciptakan peluang ekonomi.</p>
                        
                        <div class="card-meta">
                            <div class="meta-item">
                                <i class="far fa-clock"></i> 150 menit
                            </div>
                            <span class="badge badge-warning">
                                <i class="fas fa-lightbulb me-1"></i> Kreatif
                            </span>
                        </div>
                        
                        <div class="text-center">
                            <a href="{{ route('siswa.materi.tema3', ['id' => 3]) }}" class="btn btn-learn btn-theme-3">
                                <i class="fas fa-play me-2"></i> Mulai Belajar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="col-lg-6 mb-4">
                <div class="card card-materi card-theme-4">
                    <div class="card-body p-4 position-relative">
                        <span class="info-badge badge-warning">
                            <i class="fas fa-book me-1"></i> 5 Materi
                        </span>
                        
                        <div class="icon-container icon-theme-4">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        
                        <h3 class="card-title">Tema 04: Pemberdayaan Masyarakat</h3>
                        <p class="card-text">Pelajari tentang cara masyarakat bekerja sama untuk membangun komunitas yang lebih baik.</p>
                        
                        <div class="card-meta">
                            <div class="meta-item">
                                <i class="far fa-clock"></i> 110 menit
                            </div>
                            <span class="badge badge-info">
                                <i class="fas fa-users me-1"></i> Kolaboratif
                            </span>
                        </div>
                        
                        <div class="text-center">
                            <a href="{{ route('siswa.materi.tema4', ['id' => 4]) }}" class="btn btn-learn btn-theme-4">
                                <i class="fas fa-play me-2"></i> Mulai Belajar
                            </a>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    
    {{-- <!-- Floating Action Button -->
    <button class="floating-btn" data-bs-toggle="modal" data-bs-target="#helpModal" title="Butuh Bantuan?">
        <i class="fas fa-headset"></i>
    </button> --}}
    
    <!-- Help Modal -->
    <div class="modal fade" id="helpModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pusat Bantuan & Dukungan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-icon mb-3">
                        <i class="fas fa-headset"></i>
                    </div>
                    <p class="text-muted mb-4 text-center">Pilih layanan yang Anda butuhkan:</p>
                    
                    <div class="d-grid gap-2">
                        <button class="btn modal-btn" onclick="openGuide()">
                            <i class="fas fa-book-open me-2"></i> Panduan Lengkap
                        </button>
                        <button class="btn modal-btn" onclick="contactTeacher()">
                            <i class="fas fa-user-tie me-2"></i> Hubungi Guru
                        </button>
                        <button class="btn modal-btn" onclick="watchTutorial()">
                            <i class="fas fa-play-circle me-2"></i> Video Tutorial
                        </button>
                        <button class="btn modal-btn" onclick="reportIssue()">
                            <i class="fas fa-bug me-2"></i> Laporkan Masalah
                        </button>
                    </div>

                    <div class="mt-4 p-3 bg-light rounded">
                        <h6 class="fw-bold mb-2">Kontak Darurat</h6>
                        <p class="mb-1 small"><strong>WhatsApp:</strong> +62 812-3456-7890</p>
                        <p class="mb-1 small"><strong>Email:</strong> support@sekolah.edu</p>
                        <p class="mb-0 small"><strong>Jam Layanan:</strong> 08:00 - 17:00 WIB</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Quick action functions
        function showAchievements() {
            alert('Pencapaian Anda:\n• Pemula Hebat: Menyelesaikan tema pertama\n• Konsisten: Belajar 3 hari berturut\n• Cerdas: Nilai kuis di atas 80%');
        }

        function showHistory() {
            alert('Riwayat pembelajaran Anda:\n• Tema 1: Selesai (85%)\n• Tema 2: Dalam Progress (60%)\n• Total waktu belajar: 3 jam 45 menit');
        }

        function downloadMaterials() {
            alert('Materi PDF siap diunduh! File akan tersimpan di folder Download Anda.');
        }

        function showStats() {
            alert('Statistik Pembelajaran:\n• Rata-rata nilai kuis: 82%\n• Waktu belajar minggu ini: 8 jam\n• Materi diselesaikan: 2/8');
        }

        function showCalendar() {
            alert('Jadwal Pembelajaran Minggu Ini:\n• Senin: Tema 3 (2 jam)\n• Rabu: Review Tema 1-2 (1 jam)\n• Jumat: Kuis Tema 3 (30 menit)');
        }

        // Modal functions
        function openGuide() {
            alert('Panduan lengkap akan dibuka di tab baru.');
            window.open('#', '_blank');
        }

        function contactTeacher() {
            alert('Mengarahkan ke email guru...');
            window.open('mailto:guru@sekolah.edu?subject=Bantuan Pembelajaran IPS', '_blank');
        }

        function watchTutorial() {
            alert('Membuka video tutorial...');
            window.open('https://www.youtube.com', '_blank');
        }

        function reportIssue() {
            alert('Form laporan masalah telah dibuka. Silakan deskripsikan masalah yang Anda alami.');
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            // Show welcome message
            setTimeout(() => {
                console.log('Selamat datang di platform pembelajaran IPS!');
            }, 1000);
        });
    </script>
</body>
</html>
@endsection