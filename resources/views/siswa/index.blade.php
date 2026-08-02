@extends('siswa.siswa_master')
@section('siswa')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa Dashboard</title>
    
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
            --accent-orange: #f59e0b;
            --bg-gradient-start: #f0f4ff;
            --bg-gradient-end: #e8edf5;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--bg-gradient-start) 0%, var(--bg-gradient-end) 100%);
            min-height: 100vh;
        }

        /* Gradient Glassmorphism Header */
        .glass-header {
            background: linear-gradient(135deg, #1a56db 0%, #1e3a8a 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 8px 32px rgba(26, 86, 219, 0.2);
        }

        /* Decorative background pattern */
        .header-pattern {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 20% 50%, rgba(255,255,255,0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255,255,255,0.08) 0%, transparent 40%),
                radial-gradient(circle at 60% 80%, rgba(255,255,255,0.03) 0%, transparent 30%);
            pointer-events: none;
        }

        /* Profile Image Styling */
        .profile-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        /* Modern Card Design */
        .modern-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.7);
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

        .modern-card:hover {
            transform: translateY(-6px) scale(1.01);
            box-shadow: 0 20px 40px -12px rgba(26, 86, 219, 0.25);
            background: rgba(255, 255, 255, 0.95);
            border-color: var(--primary-blue-light);
        }

        /* Menu Item Hover */
        .menu-item {
            transition: all 0.3s ease;
            position: relative;
        }

        .menu-item .icon-wrapper {
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .menu-item:hover .icon-wrapper {
            transform: scale(1.15) rotate(-5deg);
        }

        .menu-item .arrow-icon {
            transition: all 0.3s ease;
        }

        .menu-item:hover .arrow-icon {
            transform: translateX(4px);
            color: var(--primary-blue);
        }

        /* Accordion Styling */
        .capaian-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .capaian-toggle i {
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .capaian-toggle.open i {
            transform: rotate(180deg);
        }

        .capaian-item {
            transition: all 0.2s ease;
            border-left: 3px solid transparent;
        }

        .capaian-item:hover {
            background: var(--primary-blue-light);
            border-left-color: var(--primary-blue);
            padding-left: 1rem;
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

        /* Floating Animation */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-5px); }
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        /* Pulse Animation for badges */
        @keyframes pulse-soft {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }

        .pulse-soft {
            animation: pulse-soft 2s ease-in-out infinite;
        }

        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #1a56db, #0d9488);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Stats Card */
        .stats-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            transition: all 0.3s ease;
        }

        .stats-card:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">

    <!-- MAIN CONTENT CONTAINER -->
    <div class="container mx-auto py-6 px-4 sm:px-6 lg:px-8 flex-grow max-w-7xl">

        <!-- HEADER SECTION -->
        <div class="glass-header rounded-3xl shadow-2xl mb-6 overflow-hidden relative" data-aos="fade-down" data-aos-duration="600">
            <div class="header-pattern"></div>
            
            <div class="relative z-10 flex flex-col md:flex-row justify-between items-center p-6 md:p-8 gap-4">
                <!-- Left: User Info -->
                <div class="flex flex-col md:flex-row items-center md:items-start gap-5 w-full md:w-auto">
                    <!-- Avatar with ring -->
                    <div class="relative">
                        <div class="w-20 h-20 rounded-full border-4 border-white/30 shadow-xl overflow-hidden bg-gradient-to-br from-blue-200 to-purple-200">
                            <img src="{{ !empty(Auth::user()->profile_image) ? url('upload/siswa_images/' . Auth::user()->profile_image) : url('upload/default_profile.jpg') }}" 
                                 onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name='+encodeURIComponent('{{ Auth::user()->name ?? 'Siswa' }}')+'&background=1a56db&color=fff&size=100';"
                                 alt="Foto Profil Siswa" 
                                 class="profile-img">
                        </div>
                        <div class="absolute -bottom-1 -right-1 bg-green-500 w-5 h-5 rounded-full border-2 border-white shadow-md flex items-center justify-center">
                            <i class="mdi mdi-check text-white text-[10px]"></i>
                        </div>
                    </div>
                    
                    <div class="text-center md:text-left">
                        <p class="text-blue-200 text-xs font-medium tracking-wider uppercase mb-1">Selamat Datang,</p>
                        <h2 class="text-2xl md:text-3xl font-extrabold text-white mb-2 tracking-tight">{{ Auth::user()->name ?? 'Siswa' }}! 👋</h2>
                        <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-4 py-1.5">
                            <span class="relative flex h-2 w-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                            </span>
                            <span class="text-white text-xs font-medium">Aktif • Budaya Minangkabau</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Date/Time & Stats -->
                <div class="flex flex-col items-center md:items-end gap-3 w-full md:w-auto">
                    <div class="flex flex-wrap gap-2 justify-center md:justify-end">
                        <div class="stats-card rounded-xl px-4 py-2 flex items-center gap-2">
                            <i class="mdi mdi-calendar-blank text-blue-600 text-sm"></i>
                            <span id="current-date" class="text-slate-700 text-xs font-medium"></span>
                        </div>
                        <div class="stats-card rounded-xl px-4 py-2 flex items-center gap-2">
                            <i class="mdi mdi-clock-outline text-blue-600 text-sm"></i>
                            <span id="current-time" class="text-slate-700 text-xs font-medium"></span>
                        </div>
                    </div>
                    <p class="text-white/70 text-xs max-w-xs text-center md:text-right leading-relaxed hidden sm:block">
                        🌟 Jelajahi kekayaan budaya, tradisi, dan kearifan lokal secara interaktif
                    </p>
                </div>
            </div>
        </div>

        <!-- GRID LAYOUT UTAMA (2 Kolom: Kiri Menu, Kanan Info) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <!-- KOLOM KIRI (MENU UTAMA) -->
            <div class="lg:col-span-2 flex flex-col gap-4">
                
                <div class="flex items-center gap-3 mb-1 px-1">
                    <div class="w-1 h-8 bg-gradient-to-b from-blue-600 to-teal-500 rounded-full"></div>
                    <h3 class="font-extrabold text-xl text-slate-800">Menu Pembelajaran</h3>
                </div>

                <!-- Materi Card -->
                <a href="{{ route('siswa.materi.index')}}" class="modern-card rounded-2xl p-4 sm:p-5 flex items-center gap-4 sm:gap-6 menu-item group" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-blue-500 to-blue-600 text-white flex items-center justify-center flex-shrink-0 icon-wrapper shadow-lg shadow-blue-500/20">
                        <i class="mdi mdi-book-open-page-variant text-3xl"></i>
                    </div>
                    <div class="flex-grow">
                        <h5 class="font-bold text-lg text-slate-800 mb-0.5 group-hover:text-blue-600 transition-colors">Materi Pembelajaran</h5>
                        <p class="text-slate-500 text-sm line-clamp-2 sm:line-clamp-none">Pelajari konsep dasar dan materi lengkap budaya Minangkabau.</p>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 transition-colors arrow-icon">
                        <i class="mdi mdi-chevron-right text-xl text-slate-400"></i>
                    </div>
                </a>

                <!-- Kearifan Lokal Card -->
                <a href="{{ route('siswa.tugas.index')}}" class="modern-card rounded-2xl p-4 sm:p-5 flex items-center gap-4 sm:gap-6 menu-item group" data-aos="fade-up" data-aos-delay="150">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-500 text-white flex items-center justify-center flex-shrink-0 icon-wrapper shadow-lg shadow-emerald-500/20">
                        <i class="mdi mdi-leaf text-3xl"></i>
                    </div>
                    <div class="flex-grow">
                        <h5 class="font-bold text-lg text-slate-800 mb-0.5 group-hover:text-emerald-600 transition-colors">Kearifan Lokal</h5>
                        <p class="text-slate-500 text-sm line-clamp-2 sm:line-clamp-none">Eksplorasi nilai-nilai kehidupan masyarakat Minangkabau yang lestari.</p>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center flex-shrink-0 group-hover:bg-emerald-50 transition-colors arrow-icon">
                        <i class="mdi mdi-chevron-right text-xl text-slate-400"></i>
                    </div>
                </a>

                <!-- Pepatah Petitih Card -->
                <a href="{{ route('siswa.quiz.index')}}" class="modern-card rounded-2xl p-4 sm:p-5 flex items-center gap-4 sm:gap-6 menu-item group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-amber-400 to-orange-500 text-white flex items-center justify-center flex-shrink-0 icon-wrapper shadow-lg shadow-amber-500/20">
                        <i class="mdi mdi-format-quote-open text-3xl"></i>
                    </div>
                    <div class="flex-grow">
                        <h5 class="font-bold text-lg text-slate-800 mb-0.5 group-hover:text-amber-600 transition-colors">Pepatah Petitih</h5>
                        <p class="text-slate-500 text-sm line-clamp-2 sm:line-clamp-none">Pahami filosofi dan makna mendalam pepatah-petitih tradisional.</p>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center flex-shrink-0 group-hover:bg-amber-50 transition-colors arrow-icon">
                        <i class="mdi mdi-chevron-right text-xl text-slate-400"></i>
                    </div>
                </a>
            </div>

            <!-- KOLOM KANAN (TIPS & CAPAIAN) -->
            <div class="flex flex-col gap-6">
                
                <!-- TIPS BANNER -->
                <div class="modern-card rounded-2xl p-5" data-aos="zoom-in" data-aos-delay="250">
                    <div class="flex items-start gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-amber-400 to-orange-500 text-white flex items-center justify-center flex-shrink-0 shadow-lg shadow-amber-500/20">
                            <i class="mdi mdi-lightbulb-on text-xl"></i>
                        </div>
                        <div>
                            <h6 class="font-bold text-slate-800 text-sm">Tips Belajar</h6>
                            <p class="text-slate-500 text-xs mt-0.5">Ikuti urutan ini untuk hasil optimal:</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-2">
                        <div class="text-center p-2 rounded-xl bg-gradient-to-br from-blue-50 to-blue-100 border border-blue-200">
                            <span class="block text-xs font-bold text-blue-700">1</span>
                            <span class="text-[10px] text-blue-600 font-medium">Materi</span>
                        </div>
                        <div class="text-center p-2 rounded-xl bg-gradient-to-br from-emerald-50 to-emerald-100 border border-emerald-200">
                            <span class="block text-xs font-bold text-emerald-700">2</span>
                            <span class="text-[10px] text-emerald-600 font-medium">Kearifan</span>
                        </div>
                        <div class="text-center p-2 rounded-xl bg-gradient-to-br from-amber-50 to-amber-100 border border-amber-200">
                            <span class="block text-xs font-bold text-amber-700">3</span>
                            <span class="text-[10px] text-amber-600 font-medium">Pepatah</span>
                        </div>
                    </div>
                </div>

                <!-- CAPAIAN PEMBELAJARAN (Accordion) -->
                <div class="modern-card rounded-2xl overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                    <!-- Header Accordion -->
                    <div class="p-4 cursor-pointer flex justify-between items-center hover:bg-blue-50/50 transition-colors" id="capaian-toggle">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-purple-500 to-purple-600 text-white flex items-center justify-center shadow-lg shadow-purple-500/20">
                                <i class="mdi mdi-target text-lg"></i>
                            </div>
                            <h3 class="font-bold text-sm text-slate-800">Capaian Pembelajaran</h3>
                        </div>
                        <div class="capaian-toggle w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center hover:bg-slate-200 transition-colors">
                            <i class="mdi mdi-chevron-down text-slate-600 text-xl"></i>
                        </div>
                    </div>
                    
                    <!-- Content Accordion -->
                    <div class="capaian-content" id="capaian-content">
                        <div class="p-0">
                            <ul class="divide-y divide-slate-100 text-xs">
                                <li class="capaian-item p-3.5 flex gap-3 items-start">
                                    <span class="font-extrabold text-blue-600 text-sm flex-shrink-0 mt-0.5">01</span>
                                    <p class="text-slate-600 leading-relaxed">Memahami keberagaman geografis Indonesia, konektivitas antarruang, pelestarian SDA, dan potensi bencana alam.</p>
                                </li>
                                <li class="capaian-item p-3.5 flex gap-3 items-start">
                                    <span class="font-extrabold text-teal-600 text-sm flex-shrink-0 mt-0.5">02</span>
                                    <p class="text-slate-600 leading-relaxed">Memahami dampak perubahan iklim terhadap kehidupan ekonomi/sosial, serta upaya mitigasi bencana (SDGs).</p>
                                </li>
                                <li class="capaian-item p-3.5 flex gap-3 items-start">
                                    <span class="font-extrabold text-amber-600 text-sm flex-shrink-0 mt-0.5">03</span>
                                    <p class="text-slate-600 leading-relaxed">Memahami pemenuhan kebutuhan via kegiatan ekonomi, lembaga keuangan, dan potensi negara maju.</p>
                                </li>
                                <li class="capaian-item p-3.5 flex gap-3 items-start">
                                    <span class="font-extrabold text-purple-600 text-sm flex-shrink-0 mt-0.5">04</span>
                                    <p class="text-slate-600 leading-relaxed">Memahami interaksi sosial, dinamika dan perubahan sistem sosial budaya untuk mewujudkan integrasi bangsa.</p>
                                </li>
                                <li class="capaian-item p-3.5 flex gap-3 items-start rounded-b-2xl">
                                    <span class="font-extrabold text-rose-600 text-sm flex-shrink-0 mt-0.5">05</span>
                                    <p class="text-slate-600 leading-relaxed">Mengenali konsep ilmu sejarah dalam lingkup lokal terkait asal-usul nenek moyang & jalur rempah.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- JavaScript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS
        AOS.init({ 
            duration: 800, 
            once: true,
            offset: 50,
            easing: 'ease-out-cubic'
        });
        
        // Update Waktu Real-time
        function updateDateTime() {
            const now = new Date();
            const dateOptions = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const timeOptions = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false };
            
            document.getElementById('current-date').textContent = now.toLocaleDateString('id-ID', dateOptions);
            document.getElementById('current-time').textContent = now.toLocaleTimeString('id-ID', timeOptions);
        }
        
        setInterval(updateDateTime, 1000);
        updateDateTime();

        // Accordion Capaian Pembelajaran
        const toggleBtn = document.getElementById('capaian-toggle');
        if(toggleBtn) {
            toggleBtn.addEventListener('click', function() {
                const content = document.getElementById('capaian-content');
                const toggleIcon = this.querySelector('.capaian-toggle');
                
                const isOpen = content.classList.contains('open');
                
                if (isOpen) {
                    content.classList.remove('open');
                    toggleIcon.classList.remove('open');
                    content.style.maxHeight = '0';
                } else {
                    content.classList.add('open');
                    toggleIcon.classList.add('open');
                    content.style.maxHeight = content.scrollHeight + 'px';
                }
            });
        }
    </script>
</body>
</html>
@endsection