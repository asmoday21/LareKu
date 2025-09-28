<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 03: Potensi Ekonomi Lingkungan</title>
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
        
        .resource-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-right: 15px;
            background: rgba(44, 120, 108, 0.1);
            color: var(--primary);
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
                    <h1 class="header-title">Tema 03: Potensi Ekonomi Lingkungan</h1>
                    <p class="subtitle">Mempelajari pemanfaatan sumber daya alam, potensi ekonomi, dan interaksi sosial</p>
                </div>
                {{-- <div class="col-md-4 text-md-end">
                    <div class="d-flex justify-content-md-end">
                        <div class="bg-white rounded p-2 text-center me-2">
                            <div class="text-primary fw-bold">0%</div>
                            <small class="text-muted">Progress</small>
                        </div>
                        <div class="bg-white rounded p-2 text-center">
                            <div class="text-primary fw-bold">150</div>
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
                            <p><i class="fas fa-clock me-2 text-primary"></i><strong>Durasi:</strong> 150 menit</p>
                            <p><i class="fas fa-book me-2 text-primary"></i><strong>Topik:</strong> 5 bagian</p>
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
                                <span>A. Pemanfaatan dan Pelestarian Potensi Sumber Daya Alam</span>
                                <span class="badge bg-primary">40 menit</span>
                            </div>
                            <div class="card-body">
                                <div class="topic-item">
                                    <h5>1. Potensi Sumber Daya Alam di Indonesia</h5>
                                    <p>Sumber daya alam dapat diartikan sebagai segala sesuatu yang ada di permukaan bumi dan dapat dimanfaatkan untuk memenuhi kebutuhan manusia. Berdasarkan kelestariannya, sumber daya alam dibedakan menjadi dua macam:</p>
                                    
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="resource-icon">
                                            <i class="fas fa-tree"></i>
                                        </div>
                                        <div>
                                            <h6>Sumber Daya Alam yang Dapat Diperbarui</h6>
                                            <p class="mb-0">Contoh: air, tanah, dan hutan</p>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="resource-icon">
                                            <i class="fas fa-cube"></i>
                                        </div>
                                        <div>
                                            <h6>Sumber Daya Alam yang Tidak Dapat Diperbarui</h6>
                                            <p class="mb-0">Contoh: minyak bumi dan batu bara</p>
                                        </div>
                                    </div>
                                    
                                    <h6>a. Sumber Daya Alam Hutan</h6>
                                    <p>Berdasarkan fungsinya, kawasan hutan Indonesia diklasifikasikan menjadi tiga macam: hutan produksi, hutan lindung, dan hutan konservasi.</p>
                                    
                                    <h6>b. Sumber Daya Alam Tambang</h6>
                                    <p>Pertambangan adalah kegiatan pengambilan endapan bahan galian berharga dan bernilai ekonomis dari dalam kulit bumi. Barang tambang digolongkan menjadi tiga: golongan A (strategis), golongan B (vital), dan golongan C (industri).</p>
                                    
                                    <h6>c. Sumber Daya Alam Kemaritiman</h6>
                                    <p>Laut Indonesia menyimpan potensi kekayaan yang besar seperti perikanan, energi kelautan, dan wisata bahari.</p>
                                </div>
                                
                                <div class="topic-item">
                                    <h5>2. Penyebab Perubahan Potensi Sumber Daya Alam</h5>
                                    <p>Pemanfaatan sumber daya alam secara terus-menerus dapat membuat daya dukung lingkungan terhadap kehidupan menurun. Populasi manusia yang kian bertambah membuat konsumsi semakin bertambah dan tingkat eksploitasi sumber daya alam juga mengalami peningkatan.</p>
                                </div>
                                
                                <div class="topic-item">
                                    <h5>3. Pengaruh Sumber Daya Alam terhadap Kehidupan Penduduk</h5>
                                    <p>Manusia banyak melakukan kegiatan yang bergantung pada sumber daya alam, seperti untuk makan, minum, tempat tinggal, sumber energi, dan pembangkit listrik. Sumber daya alam yang dilestarikan dengan baik akan memberikan kehidupan yang baik bagi manusia.</p>
                                </div>
                                
                                <div class="topic-item">
                                    <h5>4. Perbedaan Sumber Daya Alam dalam Perdagangan Internasional</h5>
                                    <p>Setiap negara memiliki sumber daya yang berbeda-beda akibat perbedaan letak geografisnya. Perbedaan ini mendorong terjadinya perdagangan internasional melalui ekspor dan impor.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span>B. Potensi Indonesia Menjadi Negara Maju</span>
                                <span class="badge bg-primary">30 menit</span>
                            </div>
                            <div class="card-body">
                                <div class="topic-item">
                                    <h5>1. Potensi Sumber Daya Alam</h5>
                                    <p>Indonesia memiliki sumber daya alam yang melimpah, termasuk pertanian, tambang, dan energi. Pemanfaatan sumber daya alam secara berkelanjutan dapat menjadi sumber pendapatan negara yang signifikan.</p>
                                    <ul>
                                        <li>Keanekaragaman Hayati</li>
                                        <li>Pertanian dan Perkebunan</li>
                                        <li>Tambang dan Energi</li>
                                        <li>Energi Terbarukan</li>
                                        <li>Perikanan dan Kelautan</li>
                                        <li>Kehutanan dan Industri Kayu</li>
                                        <li>Industri Pangan dan Bioteknologi</li>
                                        <li>Bahan Baku Industri</li>
                                        <li>Industri Sawit dan Bioenergi</li>
                                    </ul>
                                </div>
                                
                                <div class="topic-item">
                                    <h5>2. Potensi Bonus Demografi</h5>
                                    <p>Bonus demografi merupakan suatu kondisi ketika sebagian besar penduduk Indonesia berada pada usia produktif (usia kerja). Hal ini membuka peluang besar bagi Indonesia sebagai salah satu pasar terbesar di dunia.</p>
                                    <p>Manfaat bonus demografi:</p>
                                    <ul>
                                        <li>Peningkatan Produktivitas Ekonomi</li>
                                        <li>Peningkatan Jumlah Konsumsi</li>
                                        <li>Peningkatan Inovasi dan Teknologi</li>
                                        <li>Peluang Investasi</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span>C. Toponimi</span>
                                <span class="badge bg-primary">20 menit</span>
                            </div>
                            <div class="card-body">
                                <div class="topic-item">
                                    <h5>Pengertian dan Fungsi Toponimi</h5>
                                    <p>Toponimi merupakan studi tentang nama-nama tempat yang disematkan melalui penamaan pada penampakan fisik dan kultural. Contohnya adalah nama-nama kota, sungai, gunung, teluk, pulau, kampung, tanjung, danau, dan sebagainya. Selain mengidentifikasi suatu tempat, toponimi juga berfungsi untuk merekam dan mencatat sejarah serta budaya masyarakat setempat.  Toponimi bisa berasal dari bahasa asli, cerita rakyat, atau peristiwa penting yang terjadi di tempat tersebut. Oleh karena itu, toponimi dapat menjadi sumber sejarah yang penting untuk memahami masa lalu.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span>D. Konsep Dasar Ilmu Sejarah</span>
                                <span class="badge bg-primary">40 menit</span>
                            </div>
                            <div class="card-body">
                                <div class="topic-item">
                                    <h5>1. Pengertian dan Unsur-unsur Sejarah</h5>
                                    <p>Sejarah adalah ilmu yang mempelajari peristiwa-peristiwa penting di masa lalu. Tiga unsur penting dalam sejarah, yaitu: <strong>ruang</strong>, <strong>waktu</strong>, dan <strong>manusia</strong>. Ruang merujuk pada tempat kejadian, waktu adalah kapan peristiwa itu terjadi, dan manusia sebagai subjek serta objek dari peristiwa tersebut.</p>
                                </div>
                                <div class="topic-item">
                                    <h5>2. Sumber-sumber Sejarah</h5>
                                    <p>Untuk menuliskan sejarah, seorang sejarawan harus menggunakan sumber sejarah. Sumber sejarah dibagi menjadi beberapa jenis:</p>
                                    <h6>a. Sumber Tertulis</h6>
                                    <p>Sumber tertulis adalah informasi sejarah yang berasal dari catatan, tulisan, atau dokumen. Contohnya: prasasti, silsilah keluarga, piagam, babad, kronik, biografi, buku harian, surat kabar, laporan, dan notula. </p>
                                    <h6>b. Sumber Benda (Artefak)</h6>
                                    <p>Sumber benda adalah benda-benda peninggalan masa lalu yang dapat memberikan informasi sejarah. Contohnya: monumen (candi, masjid, gereja, makam), patung, lukisan, ornamen, peta, dan foto.</p>
                                    <h6>c. Sumber Lisan</h6>
                                    <p>Sumber lisan berasal dari kesaksian langsung seseorang yang terlibat atau menyaksikan peristiwa sejarah. Contohnya: wawancara dengan pelaku atau saksi sejarah (disebut <strong>oral history</strong>) dan tradisi lisan (cerita rakyat seperti mitos, legenda, dan dongeng).</p>
                                </div>
                                <div class="topic-item">
                                    <h5>3. Cerita Rakyat sebagai Sumber Sejarah Lisan</h5>
                                    <p>Cerita rakyat adalah bagian dari tradisi lisan yang bisa menjadi sumber sejarah, meskipun harus dianalisis dengan hati-hati. Cerita rakyat dibagi menjadi tiga jenis:</p>
                                    <ul>
                                        <li><strong>Mitos:</strong> Cerita yang dianggap suci dan benar-benar terjadi oleh masyarakat pemilik cerita. Contoh: mitos tentang Nyi Roro Kidul.</li>
                                        <li><strong>Legenda:</strong> Cerita yang dianggap benar-benar terjadi oleh masyarakat, tetapi tidak suci. Contoh: legenda Danau Toba.</li>
                                        <li><strong>Dongeng:</strong> Cerita fiksi yang tidak dianggap benar-benar terjadi dan penuh dengan khayalan. Contoh: dongeng Si Kancil.</li>
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
                                    <!-- Ganti dengan URL video YouTube yang relevan -->
                                    <iframe src="https://www.youtube.com/embed/oG_B9M6_HkY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <p class="text-center text-muted">Tonton video di atas untuk pemahaman yang lebih mendalam tentang materi.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End of Video Tab -->
                    
                    <!-- Kearifan Lokal Tab -->
                    <div id="kearifan" class="tab-pane fade">
                        <div class="card p-4 local-wisdom-card">
                            <div class="card-header fw-bold mb-3">
                                <i class="fas fa-seedling me-2"></i> Kearifan Lokal
                            </div>
                            <div class="card-body">
                                <p>Kearifan lokal di Indonesia sangat erat kaitannya dengan adaptasi terhadap alam dan kondisi lingkungan. Berikut beberapa contoh:</p>
                                
                                <h6 class="fw-bold mt-4">Kearifan Lokal Minangkabau dalam Menghadapi Bencana</h6>
                                <p>Masyarakat Minangkabau memiliki pengetahuan tradisional dalam menghadapi bencana. Salah satu contohnya adalah arsitektur <strong>Rumah Gadang</strong> yang tahan gempa. Tiang-tiang rumah ini tidak ditanam ke tanah, melainkan bertumpu pada batu datar, dan sambungan kayunya menggunakan pasak tanpa paku, membuatnya fleksibel saat gempa terjadi.</p>
                                <p>Selain itu, masyarakat juga memelihara hutan pantai dan mangrove sebagai mitigasi tsunami. Mereka juga memiliki pemahaman terhadap tanda-tanda alam, seperti perilaku hewan yang aneh atau surutnya air laut secara tiba-tiba sebagai pertanda tsunami. </p>
                                
                                <div class="video-container mt-4">
                                    <!-- Ganti dengan URL video kearifan lokal yang relevan -->
                                    <iframe src="https://www.youtube.com/embed/HqD22m6rF0I" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <p class="text-center text-muted mt-2">Video kearifan lokal: Arsitektur Rumah Gadang.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End of Kearifan Lokal Tab -->
                    
                    <!-- Kuis Tab -->
                    <div id="kuis" class="tab-pane fade">
                        <div class="card p-4 quiz-card">
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
                question: "Apa perbedaan antara lokasi absolut dan lokasi relatif?",
                options: [
                    "Lokasi absolut tetap, lokasi relatif berubah-ubah",
                    "Lokasi absolut ditentukan oleh GPS, lokasi relatif oleh peta",
                    "Lokasi absolut di darat, lokasi relatif di laut",
                    "Tidak ada perbedaan"
                ],
                answer: "Lokasi absolut tetap, lokasi relatif berubah-ubah"
            },
            {
                question: "Mengapa arsitektur Rumah Gadang dianggap tahan gempa?",
                options: [
                    "Karena terbuat dari beton",
                    "Karena tiangnya ditanam sangat dalam",
                    "Karena menggunakan pasak tanpa paku sehingga fleksibel",
                    "Karena dibangun di dataran rendah"
                ],
                answer: "Karena menggunakan pasak tanpa paku sehingga fleksibel"
            },
            {
                question: "Apa saja unsur-unsur penting dalam sejarah?",
                options: [
                    "Ruang, Waktu, dan Manusia",
                    "Manusia, Alam, dan Hewan",
                    "Buku, Internet, dan Guru",
                    "Masa Lalu, Masa Kini, dan Masa Depan"
                ],
                answer: "Ruang, Waktu, dan Manusia"
            },
            {
                question: "Bagaimana cara masyarakat Minangkabau melakukan mitigasi tsunami?",
                options: [
                    "Membangun tanggul laut",
                    "Menanam hutan pantai dan mangrove",
                    "Membuat terowongan bawah tanah",
                    "Menyiapkan kapal cepat"
                ],
                answer: "Menanam hutan pantai dan mangrove"
            },
            {
                question: "Indonesia rentan terhadap bencana gempa bumi, tsunami, dan letusan gunung berapi karena...",
                options: [
                    "Curah hujan yang tinggi",
                    "Iklim tropis",
                    "Dilalui dua jalur pegunungan dan pertemuan lempeng tektonik",
                    "Wilayahnya yang luas"
                ],
                answer: "Dilalui dua jalur pegunungan dan pertemuan lempeng tektonik"
            },
            {
                question: "Yang termasuk sumber sejarah tertulis adalah...",
                options: [
                    "Prasasti, biografi, dan buku harian",
                    "Candi, patung, dan lukisan",
                    "Wawancara dengan saksi sejarah",
                    "Legenda, mitos, dan dongeng"
                ],
                answer: "Prasasti, biografi, dan buku harian"
            },
            {
                question: "Contoh dari sumber sejarah benda (artefak) adalah...",
                options: [
                    "Kronik dan babad",
                    "Silsilah keluarga",
                    "Monumen dan ornamen",
                    "Cerita rakyat"
                ],
                answer: "Monumen dan ornamen"
            },
            {
                question: "Studi tentang nama-nama tempat disebut...",
                options: [
                    "Kartografi",
                    "Topografi",
                    "Toponimi",
                    "Geologi"
                ],
                answer: "Toponimi"
            },
            {
                question: "Kegiatan ekonomi yang meliputi produksi, distribusi, dan konsumsi adalah...",
                options: [
                    "Industri",
                    "Perekonomian",
                    "Perdagangan",
                    "Interaksi sosial"
                ],
                answer: "Perekonomian"
            },
            {
                question: "Kondisi ketika sebagian besar penduduk berada pada usia produktif disebut...",
                options: [
                    "Bencana demografi",
                    "Bonus demografi",
                    "Ledakan populasi",
                    "Migrasi"
                ],
                answer: "Bonus demografi"
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
