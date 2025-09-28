<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 04: Pemberdayaan Masyarakat</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4e73df;
            --secondary: #1cc88a;
            --accent: #36b9cc;
            --light: #f8f9fa;
            --dark: #5a5c69;
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
            background: linear-gradient(135deg, var(--primary) 0%, #224abe 100%);
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
            border-bottom: 2px solid rgba(78, 115, 223, 0.1);
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
            background: rgba(78, 115, 223, 0.05);
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
            background: #224abe;
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
            background: rgba(78, 115, 223, 0.05);
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
        
        .culture-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-right: 15px;
            background: rgba(78, 115, 223, 0.1);
            color: var(--primary);
        }
        
        .community-card {
            border-left: 4px solid var(--secondary);
        }
        
        .finance-card {
            border-left: 4px solid var(--accent);
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
                        <a class="nav-link" href="{{route('siswa.materi.index')}}"><i class="fas fa-home me-1"></i> Beranda</a>
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
                    <h1 class="header-title">Tema 04: Pemberdayaan Masyarakat</h1>
                    <p class="subtitle">Mempelajari keragaman sosial budaya, permasalahan masyarakat, dan pemberdayaan komunitas</p>
                </div>
                {{-- <div class="col-md-4 text-md-end">
                    <div class="d-flex justify-content-md-end">
                        <div class="bg-white rounded p-2 text-center me-2">
                            <div class="text-primary fw-bold">0%</div>
                            <small class="text-muted">Progress</small>
                        </div>
                        <div class="bg-white rounded p-2 text-center">
                            <div class="text-primary fw-bold">110</div>
                            <small class="text-muted">Menit</small>
                        </div>
                    </div>
                    <div class="progress mt-2 bg-white">
                        <div class="progress-bar" style="width: 0%"></div>
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
                            <p><i class="fas fa-clock me-2 text-primary"></i><strong>Durasi:</strong> 110 menit</p>
                            <p><i class="fas fa-book me-2 text-primary"></i><strong>Topik:</strong> 4 bagian</p>
                            <p><i class="fas fa-question me-2 text-primary"></i><strong>Kuis:</strong> 10 soal</p>
                            <p><i class="fas fa-film me-2 text-primary"></i><strong>Video:</strong> 3 materi</p>
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
                                <span>A. Keragaman Sosial Budaya di Masyarakat</span>
                                <span class="badge bg-primary">30 menit</span>
                            </div>
                            <div class="card-body">
                                <div class="topic-item">
                                    <h5>Pengertian Keragaman Sosial Budaya</h5>
                                    <p>Budaya adalah salah satu sifat paling khas dari pergaulan sosial manusia. Keragaman sosial budaya di masyarakat dapat terjadi saat berbagai jenis suku dan agama yang ada di suatu ruang bertemu dan berinteraksi setiap harinya.</p>
                                    
                                    <h5>Faktor yang Memengaruhi Keragaman Budaya</h5>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="culture-icon">
                                            <i class="fas fa-mountain"></i>
                                        </div>
                                        <div>
                                            <h6>Pengaruh Faktor Geografis</h6>
                                            <p class="mb-0">Isolasi geografis, iklim, dan letak geografis memengaruhi keragaman budaya</p>
                                        </div>
                                    </div>
                                    
                                    <h5>Jenis-Jenis Keragaman Budaya</h5>
                                    <p>Menurut Koentjaraningrat, terdapat tujuh unsur kebudayaan universal:</p>
                                    <ul>
                                        <li>Bahasa</li>
                                        <li>Sistem pengetahuan</li>
                                        <li>Sistem organisasi kemasyarakatan</li>
                                        <li>Sistem peralatan hidup dan teknologi</li>
                                        <li>Sistem mata pencaharian dan sistem ekonomi</li>
                                        <li>Sistem religi</li>
                                        <li>Kesenian</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span>B. Permasalahan Kehidupan Sosial Budaya</span>
                                <span class="badge bg-primary">25 menit</span>
                            </div>
                            <div class="card-body">
                                <div class="topic-item">
                                    <h5>Sejarah Lokal</h5>
                                    <p>Sejarah lokal mencakup tokoh-tokoh penting yang berperan dalam membentuk masyarakat, seperti:</p>
                                    <ul>
                                        <li>Sultan Nuku: Pembawa Persatuan Multikultur Maluku dan Papua</li>
                                        <li>Ratu Kalinyamat</li>
                                        <li>Laksamana Malahayati</li>
                                    </ul>
                                </div>
                                
                                <div class="topic-item">
                                    <h5>Permasalahan Sosial Budaya</h5>
                                    <p>Beberapa permasalahan sosial budaya yang sering dihadapi masyarakat:</p>
                                    
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="culture-icon">
                                            <i class="fas fa-hard-hat"></i>
                                        </div>
                                        <div>
                                            <h6>Eksploitasi Pembangunan Berlebihan</h6>
                                            <p class="mb-0">Pembangunan yang tidak memperhatikan kelestarian lingkungan</p>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="culture-icon">
                                            <i class="fas fa-university"></i>
                                        </div>
                                        <div>
                                            <h6>Kesenjangan Sosial dan Kemiskinan</h6>
                                            <p class="mb-0">Ketimpangan antara kelompok masyarakat kaya dan miskin</p>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="culture-icon">
                                            <i class="fas fa-venus-mars"></i>
                                        </div>
                                        <div>
                                            <h6>Ketimpangan Gender</h6>
                                            <p class="mb-0">Ketidaksetaraan perlakuan antara laki-laki dan perempuan</p>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="culture-icon">
                                            <i class="fas fa-user-friends"></i>
                                        </div>
                                        <div>
                                            <h6>Kenakalan Remaja</h6>
                                            <p class="mb-0">Meliputi vandalisme, tawuran antarpelajar, dan penyalahgunaan narkotika</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card finance-card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span>C. Pemberdayaan Masyarakat</span>
                                <span class="badge bg-primary">30 menit</span>
                            </div>
                            <div class="card-body">
                                <div class="topic-item">
                                    <h5>Konsep Dasar Keuangan</h5>
                                    <p>Pemberdayaan masyarakat mencakup pemahaman tentang konsep keuangan:</p>
                                    
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="culture-icon">
                                                    <i class="fas fa-money-bill-wave"></i>
                                                </div>
                                                <div>
                                                    <h6>Uang</h6>
                                                    <p class="mb-0">Alat tukar dalam kegiatan ekonomi</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="culture-icon">
                                                    <i class="fas fa-wallet"></i>
                                                </div>
                                                <div>
                                                    <h6>Pendapatan</h6>
                                                    <p class="mb-0">Penerimaan uang dari hasil kerja</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="culture-icon">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </div>
                                                <div>
                                                    <h6>Pengeluaran</h6>
                                                    <p class="mb-0">Uang yang digunakan untuk memenuhi kebutuhan</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="culture-icon">
                                                    <i class="fas fa-piggy-bank"></i>
                                                </div>
                                                <div>
                                                    <h6>Tabungan</h6>
                                                    <p class="mb-0">Uang yang disisihkan untuk masa depan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card community-card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span>D. Pemberdayaan Komunitas Berkelanjutan</span>
                                <span class="badge bg-primary">25 menit</span>
                            </div>
                            <div class="card-body">
                                <div class="topic-item">
                                    <h5>Tujuan dan Bentuk Pemberdayaan</h5>
                                    <p>Pemberdayaan masyarakat bertujuan untuk meningkatkan kemandirian dan kualitas hidup masyarakat melalui berbagai program. Fokus utamanya adalah memberikan masyarakat pengetahuan, keterampilan, dan akses ke sumber daya agar mereka dapat memecahkan masalahnya sendiri.</p>
                                    <p>Bentuk-bentuk pemberdayaan masyarakat:</p>
                                    <ul>
                                        <li>Pemberdayaan di bidang pendidikan</li>
                                        <li>Pemberdayaan di bidang ekonomi</li>
                                        <li>Pemberdayaan di bidang sosial budaya</li>
                                        <li>Pemberdayaan di bidang lingkungan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End of Materi Tab -->
                    
                    <!-- Video Tab -->
                    <div id="video" class="tab-pane fade">
                        <div class="card">
                            <div class="card-header">Video Pembelajaran</div>
                            <div class="card-body">
                                <div class="video-container mb-4">
                                    <iframe src="https://www.youtube.com/embed/S2pP-5a557A" title="Video Pemberdayaan Masyarakat" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <p class="text-center text-muted">Tonton video di atas untuk pemahaman lebih lanjut tentang pemberdayaan masyarakat.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End of Video Tab -->
                    
                    <!-- Kearifan Lokal Tab -->
                    <div id="kearifan" class="tab-pane fade">
                        <div class="card p-4 local-wisdom">
                            <div class="card-header fw-bold mb-3">
                                <i class="fas fa-seedling me-2"></i> Kearifan Lokal
                            </div>
                            <div class="card-body">
                                <h6 class="fw-bold mt-4">Sistem Subak di Bali sebagai Bentuk Pemberdayaan Komunitas</h6>
                                <p><strong>Subak</strong> adalah organisasi irigasi tradisional di Bali yang mengatur sistem pengairan sawah secara komunal. Sistem ini tidak hanya berfungsi sebagai sistem pertanian, tetapi juga merupakan cerminan filosofi Tri Hita Karana, yang menekankan hubungan harmonis antara manusia, alam, dan Tuhan. </p>
                                <p>Pemberdayaan komunitas dalam Subak terlihat dari bagaimana para petani secara mandiri mengelola air, memelihara saluran irigasi, dan menyelesaikan konflik tanpa intervensi pemerintah. Musyawarah menjadi dasar pengambilan keputusan, memastikan keadilan dan keberlanjutan bagi seluruh anggota komunitas.</p>
                                <div class="video-container mt-4">
                                    <iframe src="https://www.youtube.com/embed/9BqI_4zDq4c" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <p class="text-center text-muted mt-2">Video tentang sistem Subak di Bali.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End of Kearifan Lokal Tab -->
                    
                    <!-- Kuis Tab -->
                    <div id="kuis" class="tab-pane fade">
                        <div class="card p-4 quiz-container">
                            <div class="card-header fw-bold mb-3">
                                <i class="fas fa-question-circle me-2"></i> Uji Pemahamanmu!
                            </div>
                            <div class="card-body">
                                <div id="quiz-container">
                                    <!-- Soal kuis akan dimuat di sini oleh JavaScript -->
                                </div>
                                <div id="quiz-result" class="quiz-result"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Kuis Tab -->
                </div>

            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Data kuis dalam bentuk array of objects
        const quizData = [
            {
                question: "Yang tidak termasuk dalam permasalahan sosial budaya adalah...",
                options: [
                    "Kesenjangan sosial",
                    "Eksploitasi pembangunan",
                    "Bonus demografi",
                    "Kenakalan remaja"
                ],
                answer: "Bonus demografi"
            },
            {
                question: "Tujuan utama dari pemberdayaan masyarakat adalah...",
                options: [
                    "Mengurangi anggaran pemerintah",
                    "Meningkatkan kemandirian dan kualitas hidup",
                    "Membangun infrastruktur baru",
                    "Menciptakan lapangan kerja"
                ],
                answer: "Meningkatkan kemandirian dan kualitas hidup"
            },
            {
                question: "Organisasi irigasi tradisional di Bali yang menjadi contoh pemberdayaan komunitas adalah...",
                options: [
                    "Subak",
                    "Gotong Royong",
                    "Sipakatau",
                    "Tari Kecak"
                ],
                answer: "Subak"
            },
            {
                question: "Uang yang disisihkan untuk masa depan disebut...",
                options: [
                    "Pendapatan",
                    "Pengeluaran",
                    "Tabungan",
                    "Investasi"
                ],
                answer: "Tabungan"
            },
            {
                question: "Sultan Nuku, Ratu Kalinyamat, dan Laksamana Malahayati adalah contoh dari...",
                options: [
                    "Pahlawan Revolusi",
                    "Tokoh Sejarah Lokal",
                    "Pahlawan Proklamasi",
                    "Pedagang Internasional"
                ],
                answer: "Tokoh Sejarah Lokal"
            },
            {
                question: "Menurut Koentjaraningrat, unsur kebudayaan universal salah satunya adalah...",
                options: [
                    "Letak geografis",
                    "Sistem pengetahuan",
                    "Sistem perdagangan",
                    "Sistem transportasi"
                ],
                answer: "Sistem pengetahuan"
            },
            {
                question: "Ketidaksetaraan perlakuan antara laki-laki dan perempuan disebut...",
                options: [
                    "Kesenjangan ekonomi",
                    "Eksploitasi gender",
                    "Ketimpangan gender",
                    "Diskriminasi sosial"
                ],
                answer: "Ketimpangan gender"
            },
            {
                question: "Uang yang digunakan untuk memenuhi kebutuhan disebut...",
                options: [
                    "Pendapatan",
                    "Pengeluaran",
                    "Tabungan",
                    "Modal"
                ],
                answer: "Pengeluaran"
            },
            {
                question: "Sistem Subak mencerminkan filosofi...",
                options: [
                    "Bhinneka Tunggal Ika",
                    "Tut Wuri Handayani",
                    "Tri Hita Karana",
                    "Sapu Jagat"
                ],
                answer: "Tri Hita Karana"
            },
            {
                question: "Permasalahan sosial budaya seperti tawuran dan vandalisme termasuk dalam kategori...",
                options: [
                    "Kemiskinan",
                    "Kesenjangan sosial",
                    "Kenakalan remaja",
                    "Penyalahgunaan narkoba"
                ],
                answer: "Kenakalan remaja"
            }
        ];

        let currentQuestionIndex = 0;
        let quizResultDiv = document.getElementById('quiz-result');
        let quizContainer = document.getElementById('quiz-container');

        function loadQuestion() {
            if (currentQuestionIndex < quizData.length) {
                const currentQuiz = quizData[currentQuestionIndex];
                quizContainer.innerHTML = `
                    <p class="fw-bold">${currentQuestionIndex + 1}. ${currentQuiz.question}</p>
                    <div class="options-container">
                        ${currentQuiz.options.map((option, index) => `
                            <div class="question-item" data-index="${index}" onclick="checkAnswer(this, '${currentQuiz.answer}')">${option}</div>
                        `).join('')}
                    </div>
                    <button class="btn btn-primary d-block mt-3 w-100" onclick="nextQuestion()">Soal Berikutnya</button>
                `;
                quizResultDiv.style.display = 'none';
            } else {
                quizContainer.innerHTML = `<h5 class="text-center text-success">Kuis selesai! Anda telah menyelesaikan semua pertanyaan.</h5>`;
                quizResultDiv.innerHTML = '';
                quizResultDiv.style.display = 'none';
            }
        }

        function checkAnswer(selectedElement, correctAnswer) {
            const selectedOption = selectedElement.textContent;
            const options = document.querySelectorAll('.question-item');
            options.forEach(option => {
                option.style.pointerEvents = 'none'; // Disable other options
                if (option.textContent === correctAnswer) {
                    option.classList.add('correct-answer');
                }
            });

            if (selectedOption === correctAnswer) {
                selectedElement.classList.add('correct-answer');
                quizResultDiv.innerHTML = `<p class="text-success fw-bold">Jawaban Anda benar!</p>`;
            } else {
                selectedElement.classList.add('wrong-answer');
                quizResultDiv.innerHTML = `<p class="text-danger fw-bold">Jawaban Anda salah. Jawaban yang benar adalah: ${correctAnswer}</p>`;
            }
            quizResultDiv.style.display = 'block';
        }

        function nextQuestion() {
            currentQuestionIndex++;
            loadQuestion();
        }

        // Load first question on page load
        document.addEventListener('DOMContentLoaded', loadQuestion);
    </script>
</body>
</html>
