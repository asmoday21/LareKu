<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petunjuk Penggunaan - LareKu</title>
    
    <!-- Font Google modern -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Merriweather:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        :root {
            /* PALET WARNA BAWAAN LAREKU (Konsisten dengan Materi) */
            --bg-primary: #F0F4FF;
            --bg-secondary: #FFFFFF;
            --bg-gradient-start: #4F46E5;
            --bg-gradient-end: #7C3AED;
            --bg-gradient-light: linear-gradient(135deg, #EEF2FF 0%, #F5F3FF 100%);
            
            --text-primary: #1E1B4B;
            --text-secondary: #4B5563;
            --text-muted: #9CA3AF;
            
            --color-brand: #4F46E5;
            --color-brand-light: #818CF8;
            --color-brand-dark: #3730A3;
            --color-accent: #F59E0B;
            --color-accent-light: #FBBF24;
            --color-pink: #EC4899;
            --color-teal: #14B8A6;
            --color-green: #10B981;
            
            --surface-white: #FFFFFF;
            --border-color: #E5E7EB;
            
            --shadow-sm: 0 1px 3px rgba(79, 70, 229, 0.06);
            --shadow-md: 0 4px 20px rgba(79, 70, 229, 0.08);
            --shadow-lg: 0 10px 40px rgba(79, 70, 229, 0.12);
            
            --radius-sm: 8px;
            --radius-md: 16px;
            --radius-lg: 24px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg-gradient-light);
            color: var(--text-primary);
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
        }

        /* Tipografi Konsisten */
        h1, h2, h3, h4, h5, h6, .font-inter {
            font-family: 'Inter', sans-serif;
            font-weight: 800;
            letter-spacing: -0.03em;
            color: var(--text-primary);
        }

        p, li, .content-text {
            font-family: 'Merriweather', serif;
            font-size: 1.05rem;
            color: var(--text-secondary);
            line-height: 1.8;
        }

        .app-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* ====== TOPBAR ====== */
        .topbar {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(79, 70, 229, 0.08);
            padding: 0.75rem 0;
            position: sticky;
            top: 0;
            z-index: 1030;
        }

        .topbar-brand {
            font-weight: 900;
            font-size: 1.25rem;
            color: var(--color-brand);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .topbar-brand i {
            font-size: 1.5rem;
            background: linear-gradient(135deg, var(--color-brand), var(--color-pink));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-back {
            background: var(--bg-primary);
            border: none;
            padding: 0.5rem 1.25rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.875rem;
            color: var(--text-secondary);
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-back:hover {
            background: var(--color-brand);
            color: white;
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        /* ====== HEADER ====== */
        .page-header {
            background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 50%, #EC4899 100%); /* Tema Ungu-Pink */
            padding: 5rem 0 4rem;
            position: relative;
            overflow: hidden;
            margin-bottom: 2.5rem;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
            border-radius: 50%;
            animation: float 20s ease-in-out infinite;
        }

        .page-header::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -5%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(236, 72, 153, 0.15) 0%, transparent 70%);
            border-radius: 50%;
            animation: float 25s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(30px, -30px) scale(1.1); }
        }

        .header-content {
            position: relative;
            z-index: 2;
            color: white;
        }

        .header-content h1 {
            color: white;
            font-size: 3rem;
            font-weight: 900;
            line-height: 1.2;
            margin-bottom: 1rem;
            text-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }

        .header-content .lead {
            font-family: 'Merriweather', serif;
            color: rgba(255,255,255,0.9);
            font-size: 1.15rem;
            max-width: 700px;
        }

        /* ====== CONTENT CARD ====== */
        .content-card {
            background: var(--surface-white);
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            box-shadow: var(--shadow-md);
            margin-bottom: 2rem;
            border: 1px solid rgba(79, 70, 229, 0.04);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .content-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--color-brand), var(--color-accent), var(--color-pink));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .content-card:hover::before { opacity: 1; }
        .content-card:hover { box-shadow: var(--shadow-lg); transform: translateY(-4px); }

        .section-title {
            font-size: 1.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            padding-bottom: 0.75rem;
            border-bottom: 3px solid var(--bg-primary);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .section-title i { font-size: 1.75rem; color: var(--color-brand); }

        /* ====== CUSTOM LIST (Diganti ke Biru/Indigo) ====== */
        .step-list {
            counter-reset: step-counter;
            list-style: none;
            padding: 0;
        }

        .step-list > li {
            position: relative;
            padding-left: 3rem;
            margin-bottom: 1.5rem;
        }

        .step-list > li::before {
            counter-increment: step-counter;
            content: counter(step-counter);
            position: absolute;
            left: 0;
            top: 0.2rem;
            width: 2rem;
            height: 2rem;
            background: linear-gradient(135deg, var(--color-brand), var(--color-brand-dark)); /* Indigo */
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-family: 'Inter', sans-serif;
            font-size: 0.9rem;
            box-shadow: var(--shadow-sm);
        }

        .step-list h4 {
            font-size: 1.15rem;
            margin-bottom: 0.25rem;
            color: var(--text-primary);
        }

        .step-list p, .step-list ul {
            font-size: 0.95rem;
            color: var(--text-secondary);
        }

        /* Check List */
        .check-list { list-style: none; padding: 0; }
        .check-list li {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 0.75rem;
        }
        .check-list li::before {
            content: '\F26E'; /* Bootstrap Icon Check-circle-fill */
            font-family: 'bootstrap-icons';
            position: absolute;
            left: 0;
            top: 0.2rem;
            color: var(--color-green);
            font-size: 1.2rem;
        }

        /* Support Table */
        .support-table th {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            color: var(--text-secondary);
            border-bottom: 2px solid var(--border-color);
            padding: 1rem;
        }
        
        .support-table td {
            font-family: 'Merriweather', serif;
            font-size: 0.95rem;
            padding: 1rem;
            vertical-align: middle;
            border-bottom: 1px solid var(--bg-primary);
        }

        .badge-status {
            background: #D1FAE5;
            color: #065F46;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            font-size: 0.8rem;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
        }

        /* Mini Badges for UI elements */
        .ui-badge {
            background: var(--bg-primary);
            border: 1px solid var(--border-color);
            padding: 0.15rem 0.5rem;
            border-radius: 4px;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 0.85rem;
            color: var(--text-primary);
        }

        /* Footer Info Cards */
        .info-card {
            border-radius: var(--radius-md);
            padding: 1.5rem;
            height: 100%;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .info-card h5 {
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .info-card p, .info-card li { font-size: 0.9rem; }
        
        .ic-blue { background: #EFF6FF; border-color: #BFDBFE; }
        .ic-blue h5 i { color: #2563EB; }
        
        .ic-yellow { background: #FEFCE8; border-color: #FEF08A; }
        .ic-yellow h5 i { color: #CA8A04; }
        
        .ic-green { background: #F0FDF4; border-color: #BBF7D0; }
        .ic-green h5 i { color: #16A34A; }

        /* Animations */
        .fade-in-up { opacity: 0; transform: translateY(30px); animation: fadeInUp 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        @keyframes fadeInUp { to { opacity: 1; transform: translateY(0); } }
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }

        @media (max-width: 767.98px) {
            .header-content h1 { font-size: 2.2rem; }
            .content-card { padding: 1.5rem; }
        }
    </style>
</head>
<body>

<nav class="topbar">
    <div class="app-container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="topbar-brand">
                <i class="bi bi-book-half"></i> LareKu
            </div>
            <a href="javascript:history.back()" class="btn-back">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
</nav>

<header class="page-header">
    <div class="app-container header-content text-center">
        <h1>Petunjuk Penggunaan</h1>
        <p class="lead mx-auto">Panduan lengkap menggunakan sistem Media Pembelajaran Budaya Minangkabau untuk Guru dan Siswa.</p>
    </div>
</header>

<div class="app-container pb-5">

    <!-- INTRO -->
    <div class="content-card fade-in-up">
        <h2 class="section-title"><i class="bi bi-info-circle text-primary"></i> Selamat Datang</h2>
        <p>Selamat datang di <strong>Website Media Pembelajaran Budaya Minangkabau (LareKu)</strong>.</p>
        <p class="mb-4">Sistem ini dirancang sebagai media digital interaktif yang membantu guru dalam mengelola materi pembelajaran, dan mempermudah siswa mempelajari kearifan lokal Minangkabau melalui artikel, media dokumen, video, serta kuis terintegrasi.</p>
        
        <h4 class="font-inter mt-5 mb-3" style="font-size: 1.15rem;">Tujuan Platform</h4>
        <ul class="check-list">
            <li>Mempermudah proses penyampaian materi budaya Minangkabau.</li>
            <li>Menyediakan konten pembelajaran yang terstruktur dan interaktif.</li>
            <li>Memberikan hak akses khusus bagi guru untuk menambah catatan digital kapan saja.</li>
            <li>Membantu siswa belajar secara mandiri, terukur, dan menyenangkan.</li>
        </ul>
    </div>

    <!-- PANDUAN -->
    <div class="row g-4 mb-4">
        <!-- PANDUAN GURU -->
        <div class="col-md-6 fade-in-up delay-1">
            <div class="content-card h-100">
                <!-- Ikon diubah ke warna brand (Indigo) -->
                <h2 class="section-title"><i class="bi bi-person-video3" style="color: var(--color-brand);"></i> Panduan Guru</h2>
                
                <ol class="step-list">
                    <li>
                        <h4>Akses Kelola Materi</h4>
                        <p>Setelah login sebagai guru, masuk ke menu <span class="ui-badge">Materi Pembelajaran</span>, lalu pilih Tema yang ingin Anda kelola.</p>
                    </li>
                    <li>
                        <h4>Menambahkan Materi/Catatan</h4>
                        <p>Klik tombol <span class="ui-badge bg-primary text-white border-0"><i class="bi bi-plus"></i> Tambah Materi</span> atau tombol <span class="ui-badge text-primary"><i class="bi bi-plus"></i> Tambah Catatan</span> yang tersedia di setiap akhir blok topik pembelajaran siswa.</p>
                        <p class="mt-2 text-muted" style="font-size: 0.85rem;">Isi formulir seperti Judul, Deskripsi, dan Konten teks materi Anda.</p>
                    </li>
                    <li>
                        <h4>Mengunggah Media Pendukung</h4>
                        <p>Saat menambah/mengedit materi, Anda bisa melampirkan media pendukung dengan memilih "Jenis Media" di kolom kanan. File yang diunggah maksimal 10MB.</p>
                    </li>
                    <li>
                        <h4>Edit dan Hapus</h4>
                        <p>Materi yang telah Anda buat dapat diubah kapanpun menggunakan tombol <span class="ui-badge text-warning border-warning"><i class="bi bi-pencil"></i> Edit</span>, atau dihapus secara permanen menggunakan tombol <span class="ui-badge text-secondary border-secondary"><i class="bi bi-trash"></i> Hapus</span>.</p>
                    </li>
                </ol>
            </div>
        </div>

        <!-- PANDUAN SISWA -->
        <div class="col-md-6 fade-in-up delay-1">
            <div class="content-card h-100">
                <!-- Ikon diubah ke warna hijau -->
                <h2 class="section-title"><i class="bi bi-mortarboard-fill text-success"></i> Panduan Siswa</h2>
                
                <ol class="step-list">
                    <li>
                        <h4>Memilih Ruang Belajar</h4>
                        <p>Setelah login, navigasikan ke menu <span class="ui-badge">Materi Pembelajaran</span>. Pilih Tema yang ditugaskan oleh guru untuk mulai membaca.</p>
                    </li>
                    <li>
                        <h4>Mengeksplorasi Topik</h4>
                        <p>Materi disajikan secara berurutan. Baca narasi utama, perhatikan ilustrasi, dan baca catatan tambahan (jika guru merilis materi ekstensi).</p>
                    </li>
                    <li>
                        <h4>Akses File & Video</h4>
                        <p>Jika terdapat lampiran, klik tombol <span class="ui-badge bg-primary text-white border-0"><i class="bi bi-eye"></i> Lihat</span>. Dokumen (PDF/Word/PPT) dan Video akan langsung terbuka di dalam halaman tanpa perlu pindah tab.</p>
                    </li>
                    <li>
                        <h4>Mengerjakan Kuis</h4>
                        <p>Di setiap akhir sub-topik, kerjakan "Kuis Pemahaman Singkat" dengan mengklik salah satu jawaban. Pada bagian kanan layar (Sidebar), selesaikan "Kuis Evaluasi" untuk mengukur ketuntasan belajar Anda di tema tersebut.</p>
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <!-- TABEL SUPPORT -->
    <div class="content-card fade-in-up delay-2">
        <h2 class="section-title"><i class="bi bi-cloud-arrow-up-fill text-info"></i> Dukungan Format Media</h2>
        <div class="table-responsive mt-4">
            <table class="table support-table">
                <thead>
                    <tr>
                        <th width="50%">Format / Jenis File</th>
                        <th width="50%" class="text-center">Status Pemutar Langsung (Preview)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!-- Ikon diubah ke warna Pink -->
                        <td><i class="bi bi-file-earmark-pdf-fill me-2 fs-5" style="color: var(--color-pink);"></i> Dokumen PDF (.pdf)</td>
                        <td class="text-center"><span class="badge-status"><i class="bi bi-check-circle-fill"></i> Didukung Penuh</span></td>
                    </tr>
                    <tr>
                        <!-- Ikon diubah ke warna Primary/Biru -->
                        <td><i class="bi bi-file-earmark-word-fill text-primary me-2 fs-5"></i> Microsoft Word (.doc, .docx)</td>
                        <td class="text-center"><span class="badge-status"><i class="bi bi-check-circle-fill"></i> Via Google Docs Viewer</span></td>
                    </tr>
                    <tr>
                        <!-- Ikon diubah ke warna Accent/Kuning -->
                        <td><i class="bi bi-file-earmark-slides-fill me-2 fs-5" style="color: var(--color-accent);"></i> PowerPoint (.ppt, .pptx)</td>
                        <td class="text-center"><span class="badge-status"><i class="bi bi-check-circle-fill"></i> Via MS Office Viewer</span></td>
                    </tr>
                    <tr>
                        <!-- Ikon diubah ke warna Teal -->
                        <td><i class="bi bi-play-circle-fill me-2 fs-5" style="color: var(--color-teal);"></i> Video Lokal (.mp4)</td>
                        <td class="text-center"><span class="badge-status"><i class="bi bi-check-circle-fill"></i> Didukung Penuh</span></td>
                    </tr>
                    <tr>
                        <!-- Ikon diubah ke warna Ungu Gelap -->
                        <td><i class="bi bi-youtube me-2 fs-5" style="color: var(--color-brand-dark);"></i> Tautan YouTube (URL)</td>
                        <td class="text-center"><span class="badge-status"><i class="bi bi-check-circle-fill"></i> Didukung Penuh</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="text-muted small mt-3 font-inter"><i class="bi bi-info-circle me-1 text-primary"></i> Catatan: Preview dokumen Word dan PowerPoint membutuhkan perangkat yang terhubung ke jaringan internet publik agar server Google/Microsoft dapat me-render tampilan file tersebut.</p>
    </div>

    <!-- INFO CARDS -->
    <div class="row g-4 fade-in-up delay-2">
        <div class="col-md-4">
            <div class="info-card ic-blue">
                <h5 class="font-inter"><i class="bi bi-lightbulb-fill"></i> Tips Optimal</h5>
                <ul class="ps-3 mb-0 text-secondary">
                    <li>Gunakan browser Google Chrome / MS Edge terbaru.</li>
                    <li>Jangan <em>refresh</em> halaman saat proses unggah berputar.</li>
                    <li>Pastikan ukuran file media Anda tidak melebihi 10MB.</li>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-card ic-yellow">
                <h5 class="font-inter"><i class="bi bi-exclamation-triangle-fill"></i> Ketentuan</h5>
                <ul class="ps-3 mb-0 text-secondary">
                    <li>Guru bertanggung jawab penuh atas materi & kebenaran budaya yang diunggah.</li>
                    <li>Dilarang keras mengunggah file yang tidak berkaitan dengan pembelajaran.</li>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-card ic-green">
                <h5 class="font-inter"><i class="bi bi-headset"></i> Bantuan Sistem</h5>
                <p class="text-secondary mb-3">Jika mengalami <b>bug</b> atau kendala teknis (video tidak terputar, gagal upload), silakan laporkan ke admin.</p>
                <a href="#" class="btn btn-success btn-sm w-100 rounded-pill font-inter fw-bold" style="background-color: var(--color-green); border:none;">Hubungi Administrator</a>
            </div>
        </div>
    </div>

</div>

<footer class="text-center py-4 mt-5 border-top border-light">
    <p class="text-muted small font-inter mb-0">&copy; 2026 LareKu - Media Pembelajaran Budaya Minangkabau.</p>
</footer>

</body>
</html>