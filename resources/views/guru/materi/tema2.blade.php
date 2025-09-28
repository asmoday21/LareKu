<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 02: Keberagaman Lingkungan Sekitar</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2c786c;
            --secondary: #ff9800;
            --accent: #004445;
            --light: #f8f9fa;
            --dark: #343a40;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
            color: #334155;
            padding-top: 20px;
        }
        
        .navbar {
            background: var(--primary);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: white !important;
        }
        
        .header-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 12px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            color: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .header-title {
            font-weight: 700;
            font-size: 2.2rem;
            margin-bottom: 0.5rem;
        }
        
        .subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .card-header {
            background: white;
            border-bottom: 2px solid rgba(44, 120, 108, 0.1);
            font-weight: 600;
            color: var(--primary);
            border-radius: 12px 12px 0 0 !important;
        }
        
        .nav-pills .nav-link {
            border-radius: 6px;
            margin: 0 5px;
            color: var(--dark);
            font-weight: 500;
        }
        
        .nav-pills .nav-link.active {
            background: var(--primary);
            color: white;
        }
        
        .topic-item {
            border-left: 4px solid var(--primary);
            padding-left: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 12px;
        }
        
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 12px;
        }
        
        .local-wisdom {
            background: rgba(44, 120, 108, 0.05);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            border-left: 4px solid var(--secondary);
        }
        
        .quiz-container {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 1.5rem;
        }
        
        .btn-primary {
            background: var(--primary);
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 500;
        }
        
        .btn-primary:hover {
            background: var(--accent);
        }
        
        .btn-outline-primary {
            color: var(--primary);
            border-color: var(--primary);
        }
        
        .btn-outline-primary:hover {
            background: var(--primary);
            color: white;
        }
        
        .progress {
            height: 10px;
            border-radius: 5px;
        }
        
        .progress-bar {
            background: var(--primary);
        }
        
        .sidebar {
            position: sticky;
            top: 20px;
        }
        
        .sidebar .list-group-item {
            border: none;
            border-left: 3px solid transparent;
            border-radius: 0;
            padding: 0.75rem 1.25rem;
            font-weight: 500;
        }
        
        .sidebar .list-group-item.active {
            background: transparent;
            color: var(--primary);
            border-left-color: var(--primary);
        }
        
        .sidebar .list-group-item:hover {
            background: rgba(44, 120, 108, 0.05);
        }
        
        .badge-primary {
            background: var(--primary);
        }
        
        footer {
            background: var(--dark);
            color: white;
            padding: 2rem 0;
            margin-top: 3rem;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark mb-4 rounded">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-graduation-cap me-2"></i>Materi Pembelajaran
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('guru.materi.index')}}"><i class="fas fa-home me-1"></i> Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-book me-1"></i> Materi</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-tasks me-1"></i> Tugas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-chart-line me-1"></i> Progress</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- Header Section -->
        <div class="header-section">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="header-title">Tema 02: Keberagaman Lingkungan Sekitar</h1>
                    <p class="subtitle">Mempelajari dinamika sosial, perubahan budaya, dan pelestarian lingkungan</p>
                </div>
                {{-- <div class="col-md-4 text-md-end">
                    <div class="d-flex justify-content-md-end">
                        <div class="bg-white rounded p-2 text-center me-2">
                            <div class="text-primary fw-bold">25%</div>
                            <small class="text-muted">Progress</small>
                        </div>
                        <div class="bg-white rounded p-2 text-center">
                            <div class="text-primary fw-bold">120</div>
                            <small class="text-muted">Menit</small>
                        </div>
                    </div>
                    <div class="progress mt-2 bg-white">
                        <div class="progress-bar" style="width: 25%"></div>
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="row">
            <!-- Sidebar Navigation -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                            <i class="fas fa-book me-2"></i>Materi Pembelajaran
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-film me-2"></i>Video Pembelajaran
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-seedling me-2"></i>Kearifan Lokal
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-question-circle me-2"></i>Kuis
                        </a>
                        {{-- <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-file-download me-2"></i>Unduh Materi
                        </a> --}}
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-header">
                            <i class="fas fa-info-circle me-2"></i>Informasi Materi
                        </div>
                        <div class="card-body">
                            <p><i class="fas fa-clock me-2 text-primary"></i><strong>Durasi:</strong> 120 menit</p>
                            <p><i class="fas fa-book me-2 text-primary"></i><strong>Topik:</strong> 3 bagian</p>
                            <p><i class="fas fa-question me-2 text-primary"></i><strong>Kuis:</strong> 10 soal</p>
                            <p><i class="fas fa-film me-2 text-primary"></i><strong>Video:</strong> 2 materi</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9">
                <ul class="nav nav-pills mb-4">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="pill" href="#materi">Materi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#video">Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#kearifan">Kearifan Lokal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#kuis">Kuis</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <!-- Materi Tab -->
                    <div id="materi" class="tab-pane active">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span>A. Berkenalan dengan Lingkungan Sekitar</span>
                                <span class="badge bg-primary">30 menit</span>
                            </div>
                            <div class="card-body">
                                <div class="topic-item">
                                    <h5>1. Berkenalan dengan Alam</h5>
                                    <p>Setelah bumi terbentuk dan dapat dihuni manusia, berbagai perubahan pada bumi masih terjadi. Kini, bumi sedang mengalami pemanasan global (global warming) akibat efek rumah kaca, polusi udara, polusi air, dan polusi tanah.</p>
                                    
                                    <h6>a. Pencemaran Udara</h6>
                                    <p>Pencemaran udara terjadi karena emisi gas yang dihasilkan selama proses pembakaran, menghasilkan gas karbon dioksida (CO₂). Kandungan CO₂ yang berlebih di atmosfer menyebabkan efek rumah kaca.</p>
                                    
                                    <h6>b. Pencemaran Air</h6>
                                    <p>Pencemaran air disebabkan oleh konsentrasi zat berbahaya di dalam air yang berlangsung lama. Penggunaan bahan peledak dalam penangkapan ikan dan pembuangan limbah industri ke sungai/laut merupakan contoh pencemaran air.</p>
                                    
                                    <h6>c. Pencemaran Tanah</h6>
                                    <p>Pencemaran tanah terjadi karena tanah kehilangan komponen penting sebagai daya dukungnya. Penggunaan pestisida berlebihan dan pembuangan limbah industri ke tanah merupakan contoh pencemaran tanah.</p>
                                </div>
                                
                                <div class="topic-item">
                                    <h5>2. Berkenalan dengan Masyarakat</h5>
                                    <p>Kondisi masyarakat mengalami perubahan dari waktu ke waktu berupa perubahan cara berpikir, perubahan perilaku, dan perubahan dalam alat-alat kehidupan.</p>
                                    
                                    <h6>a. Perubahan Sosial dan Dinamika Sosial</h6>
                                    <p>Dinamika sosial adalah perubahan sosial dalam masyarakat yang dapat terjadi pada perorangan atau kelompok. Dinamika sosial terjadi karena faktor internal dan faktor eksternal.</p>
                                    
                                    <h6>b. Pembentukan Karakteristik Budaya</h6>
                                    <p>Budaya terdiri atas semua ide, keyakinan, perilaku, dan produk umum yang mendefinisikan cara hidup kelompok. Budaya membentuk cara individu dalam memandang dunia.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span>B. Pembiasaan Diri untuk Melestarikan Lingkungan</span>
                                <span class="badge bg-primary">45 menit</span>
                            </div>
                            <div class="card-body">
                                <div class="topic-item">
                                    <h5>1. Pembiasaan Melestarikan Sumber Daya Udara</h5>
                                    <p>Beberapa cara melestarikan sumber daya udara antara lain mengurangi penggunaan kendaraan bermotor, menanam pohon, dan menggunakan energi terbarukan.</p>
                                </div>
                                
                                <div class="topic-item">
                                    <h5>2. Pembiasaan Melestarikan Sumber Daya Air</h5>
                                    <p>Upaya pelestarian sumber daya air dapat dilakukan dengan tidak membuang sampah ke sungai, menggunakan air secara efisien, dan menjaga daerah resapan air.</p>
                                </div>
                                
                                <div class="topic-item">
                                    <h5>3. Pembiasaan Melestarikan Sumber Daya Tanah</h5>
                                    <p>Pelestarian sumber daya tanah dapat dilakukan dengan mengurangi penggunaan pestisida, melakukan rotasi tanaman, dan mencegah erosi.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span>C. Pembiasaan Diri dalam Kebutuhan</span>
                                <span class="badge bg-primary">45 menit</span>
                            </div>
                            <div class="card-body">
                                <div class="topic-item">
                                    <h5>1. Pembangunan Berkelanjutan</h5>
                                    <p>Pembangunan berkelanjutan merupakan upaya untuk memenuhi kebutuhan masa kini dengan meminimalkan dampak buruk terhadap lingkungan, sehingga kualitas kehidupan saat ini tidak terganggu dan sumber daya alam tetap terjaga untuk generasi mendatang.</p>
                                </div>
                                
                                <div class="topic-item">
                                    <h5>2. Karakteristik Pembangunan Berkelanjutan</h5>
                                    <p>Karakteristik pembangunan berkelanjutan antara lain: memperkirakan dampak terhadap kesehatan dan kelestarian lingkungan, mendorong perilaku manusia yang mendukung pengelolaan sumber daya alam berkelanjutan, dan menjunjung tinggi tanggung jawab terhadap alam.</p>
                                </div>
                                
                                <div class="topic-item">
                                    <h5>3. Tujuan Pembangunan Berkelanjutan</h5>
                                    <p>Berdasarkan Deklarasi SDGs, terdapat 17 tujuan pembangunan berkelanjutan yang dikelompokkan menjadi 4 pilar: sosial, ekonomi, lingkungan hidup, dan tata kelola.</p>
                                </div>
                                
                                <div class="topic-item">
                                    <h5>4. Masalah Pokok Ekonomi</h5>
                                    <p>Masalah pokok ekonomi meliputi: apa barang yang akan diproduksi, bagaimana cara memproduksi barang tersebut, dan untuk siapa barang dan jasa diproduksi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Video Tab -->
                    <div id="video" class="tab-pane fade">
                        <div class="card">
                            <div class="card-header">
                                Video Pembelajaran - Dinamika Sosial dan Perubahan Lingkungan
                            </div>
                            <div class="card-body">
                                <div class="video-container mb-4">
                                    <iframe src="https://www.youtube.com/embed/5M2uO6Uny_c" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <h5>Deskripsi Video</h5>
                                <p>Video ini menjelaskan tentang dinamika sosial masyarakat dan perubahan lingkungan yang terjadi di sekitar kita. Materi mencakup perubahan sosial, pencemaran lingkungan, dan upaya pelestarian lingkungan.</p>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                Video Pembelajaran - Kearifan Lokal dalam Pelestarian Lingkungan
                            </div>
                            <div class="card-body">
                                <div class="video-container mb-4">
                                    <iframe src="https://www.youtube.com/embed/9MhOPoOo8QQ" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <h5>Deskripsi Video</h5>
                                <p>Video ini menampilkan berbagai kearifan lokal masyarakat Indonesia dalam melestarikan lingkungan, termasuk praktik-praktik tradisional yang ramah lingkungan.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Kearifan Lokal Tab -->
                    <div id="kearifan" class="tab-pane fade">
                        <div class="card">
                            <div class="card-header">
                                Kearifan Lokal Sumatera Barat dalam Pelestarian Lingkungan
                            </div>
                            <div class="card-body">
                                <div class="local-wisdom">
                                    <h5><i class="fas fa-leaf me-2 text-success"></i>Larangan Membuka Lahan dengan Membakar</h5>
                                    <p>Masyarakat Minangkabau memiliki kearifan lokal berupa larangan membuka lahan dengan cara membakar. Hal ini ditujukan untuk mencegah pencemaran udara dan kerusakan tanah.</p>
                                    <div class="video-container mt-3">
                                        <iframe src="https://www.youtube.com/embed/3n9uIe2xW_c" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                
                                <div class="local-wisdom">
                                    <h5><i class="fas fa-water me-2 text-info"></i>Pelestarian Sungai dan Sumber Air</h5>
                                    <p>Masyarakat Minangkabau memiliki tradisi "mandoa aia" atau berdoa untuk air yang merupakan bentuk penghormatan terhadap sumber air. Mereka juga memiliki sanksi adat bagi yang mencemari sungai.</p>
                                    <div class="video-container mt-3">
                                        <iframe src="https://www.youtube.com/embed/7R9e_1N6Hxc" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                
                                <div class="local-wisdom">
                                    <h5><i class="fas fa-tree me-2 text-success"></i>Sistem Pertanian Berkelanjutan</h5>
                                    <p>Masyarakat Minangkabau menerapkan sistem pertanian berkelanjutan dengan rotasi tanaman dan penggunaan pupuk alami untuk menjaga kesuburan tanah.</p>
                                    <div class="video-container mt-3">
                                        <iframe src="https://www.youtube.com/embed/4Hq8VhnM-ec" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                
                                <div class="local-wisdom">
                                    <h5><i class="fas fa-users me-2 text-primary"></i>Nilai Kearifan Lokal dalam Kehidupan Sehari-hari</h5>
                                    <p>Nilai-nilai kearifan lokal Minangkabau dalam kehidupan sehari-hari seperti "adat basandi syarak, syarak basandi Kitabullah" menjadi pedoman dalam berinteraksi dengan lingkungan.</p>
                                    <ul>
                                        <li>Berbelanja: Prioritaskan produk lokal dan ramah lingkungan</li>
                                        <li>Pernikahan: Menggunakan sirih sebagai simbol yang lebih alamiah daripada permen</li>
                                        <li>Mendidik anak: Menanamkan nilai cinta lingkungan sejak dini</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Kuis Tab -->
                    <div id="kuis" class="tab-pane fade">
                        <div class="card">
                            <div class="card-header">
                                Kuis Tema 02: Keberagaman Lingkungan Sekitar
                            </div>
                            <div class="card-body">
                                <div class="quiz-container">
                                    <p>Uji pemahaman Anda tentang materi Keberagaman Lingkungan Sekitar dengan mengerjakan kuis berikut. Kuis terdiri dari 10 soal pilihan ganda.</p>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#quizModal">
                                            <i class="fas fa-play me-2"></i>Mulai Kuis
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="mt-4">
                                    <h5>Hasil Kuis Terakhir</h5>
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <p class="mb-1">Anda belum mengerjakan kuis untuk tema ini</p>
                                            <div class="progress mt-2">
                                                <div class="progress-bar" style="width: 0%">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Materi Pembelajaran IPS</h5>
                    <p>Platform pembelajaran interaktif untuk siswa kelas VII</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>&copy; 2023 Sekolah Indonesia. All rights reserved.</p>
                    <div class="social-links">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Quiz Modal -->
    <div class="modal fade" id="quizModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kuis Tema 02: Keberagaman Lingkungan Sekitar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="quiz-progress mb-3">
                        <div class="d-flex justify-content-between">
                            <span>Soal 1 dari 10</span>
                            <span>Waktu: 15:00</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 10%"></div>
                        </div>
                    </div>
                    
                    <div class="quiz-question">
                        <h5>1. Apa penyebab utama pemanasan global menurut materi?</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="quizQuestion1" id="q1Option1">
                            <label class="form-check-label" for="q1Option1">A. Efek rumah kaca, polusi udara, polusi air, dan polusi tanah</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="quizQuestion1" id="q1Option2">
                            <label class="form-check-label" for="q1Option2">B. Penggunaan kendaraan bermotor saja</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="quizQuestion1" id="q1Option3">
                            <label class="form-check-label" for="q1Option3">C. Pembuangan sampah plastik</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="quizQuestion1" id="q1Option4">
                            <label class="form-check-label" for="q1Option4">D. Penebangan hutan secara liar</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Soal Selanjutnya <i class="fas fa-arrow-right ms-2"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab functionality
            const triggerTabList = document.querySelectorAll('#myTab button')
            triggerTabList.forEach(triggerEl => {
                new bootstrap.Tab(triggerEl)
            })
            
            // Quiz timer simulation
            const quizModal = document.getElementById('quizModal')
            quizModal.addEventListener('show.bs.modal', function () {
                // Simulate timer
                let timeLeft = 900; // 15 minutes in seconds
                const timerElement = document.querySelector('.quiz-progress span:last-child');
                
                const timerInterval = setInterval(function() {
                    if (timeLeft <= 0) {
                        clearInterval(timerInterval);
                        timerElement.textContent = "Waktu: 00:00";
                    } else {
                        const minutes = Math.floor(timeLeft / 60);
                        const seconds = timeLeft % 60;
                        timerElement.textContent = `Waktu: ${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
                        timeLeft--;
                    }
                }, 1000);
            });
        });
    </script>
</body>
</html>