@extends('guru.guru_master')
@section('guru')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guru Dashboard</title>
    <!-- Material Design Icons -->
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary: #2563eb;
            --primary-light: #3b82f6;
            --secondary: #1e40af;
            --accent: #f59e0b;
            --accent-light: #fbbf24;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --dark: #1f2937;
            --light: #f8fafc;
            --minang-red: #dc2626;
            --minang-gold: #d97706;
        }
        
        body {
            font-family: 'Plus Jakarta Sans', 'Inter', sans-serif;
            background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
            min-height: 100vh;
        }

        .header-wrapper {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 50%, var(--minang-red) 100%);
            position: relative;
            overflow: hidden;
        }

        .header-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.3'%3E%3Ccircle cx='30' cy='30' r='4'/%3E%3Ccircle cx='0' cy='0' r='2'/%3E%3Ccircle cx='60' cy='0' r='2'/%3E%3Ccircle cx='0' cy='60' r='2'/%3E%3Ccircle cx='60' cy='60' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .glass-effect {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .card-modern {
            background: white;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(226, 232, 240, 0.8);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .card-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--minang-red));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card-modern:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .card-modern:hover::before {
            opacity: 1;
        }

        .menu-icon {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .menu-item:hover .menu-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .gradient-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
        }

        .gradient-success {
            background: linear-gradient(135deg, #10b981, #059669);
        }

        .gradient-warning {
            background: linear-gradient(135deg, var(--accent), var(--minang-gold));
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--primary), var(--minang-red));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        .pulse-gentle {
            animation: pulseGentle 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        @keyframes pulseGentle {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }

        .wave-divider {
            display: none;
        }

        .wave-divider svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 80px;
        }

        .wave-divider .shape-fill {
            fill: #f8fafc;
        }

        .status-indicator {
            position: relative;
        }

        .status-indicator::after {
            content: '';
            position: absolute;
            top: -2px;
            right: -2px;
            width: 8px;
            height: 8px;
            background: #10b981;
            border-radius: 50%;
            border: 2px solid white;
        }

        .content-section {
            background: white;
            border-radius: 24px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .minang-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23f59e0b' fill-opacity='0.05'%3E%3Cpath d='M20 0L30 10L20 20L10 10z'/%3E%3Cpath d='M20 20L30 30L20 40L10 30z'/%3E%3Cpath d='M0 20L10 30L20 20L10 10z'/%3E%3Cpath d='M20 20L30 10L40 20L30 30z'/%3E%3C/g%3E%3C/svg%3E");
        }

        /* Capaian Pembelajaran Styles */
        .capaian-dropdown {
            background: linear-gradient(135deg, #1e3a8a 0%, #3730a3 100%);
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .capaian-header {
            padding: 1.5rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .capaian-title {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .capaian-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .capaian-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-out;
            background: white;
        }

        .capaian-content.open {
            max-height: 500px;
        }

        .capaian-list {
            padding: 1.5rem;
            list-style: none;
        }

        .capaian-item {
            padding: 1rem 0;
            border-bottom: 1px solid #f1f5f9;
            display: flex;
            gap: 1rem;
        }

        .capaian-item:last-child {
            border-bottom: none;
        }

        .capaian-number {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #eff6ff;
            color: #3b82f6;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            flex-shrink: 0;
        }

        .capaian-text {
            color: #4b5563;
            line-height: 1.6;
        }

        .capaian-toggle {
            transition: transform 0.3s ease;
        }

        .capaian-toggle.open {
            transform: rotate(180deg);
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">

    <!-- HEADER SECTION -->
    <div class="relative w-full py-12 lg:py-16 header-wrapper">
        <div class="header-pattern"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col items-center text-center">
                <!-- Welcome Text -->
                <div class="mb-6">
                    <h1 class="font-semibold text-white text-lg sm:text-xl mb-2 opacity-90">Selamat Datang,</h1>
                    <h2 class="font-bold text-3xl sm:text-4xl text-white mb-1">{{ Auth::user()->name }}!</h2>
                    <div class="w-20 h-1 bg-white/30 mx-auto rounded-full mt-3"></div>
                </div>
                
                <!-- Course Info Card -->
                <div class="glass-effect rounded-2xl px-8 py-4 mb-6 max-w-md">
                    <div class="flex items-center justify-center space-x-3">
                        <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="mdi mdi-school text-amber-600 text-xl"></i>
                        </div>
                        <div class="text-left">
                            <p class="text-gray-800 text-base font-bold">Budaya Minangkabau</p>
                            <p class="text-gray-600 text-sm font-medium">Kelas VII • SMP Semester Genap</p>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <p class="text-white/90 text-sm sm:text-base max-w-2xl mb-6 leading-relaxed font-medium">
                    Jelajahi kekayaan budaya, tradisi, dan kearifan lokal Minangkabau dengan metode pembelajaran yang menyenangkan dan interaktif
                </p>

                <!-- Date & Time Info -->
                <div class="flex flex-wrap gap-3 justify-center">
                    <div class="glass-effect px-4 py-3 rounded-xl flex items-center space-x-2">
                        <i class="mdi mdi-calendar-today text-amber-500 text-lg"></i>
                        <span id="current-date" class="text-gray-800 font-semibold text-sm"></span>
                    </div>
                    <div class="glass-effect px-4 py-3 rounded-xl flex items-center space-x-2">
                        <i class="mdi mdi-clock-outline text-amber-500 text-lg"></i>
                        <span id="current-time" class="text-gray-800 font-semibold text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Enhanced Wave Divider -->
        <div class="wave-divider">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <!-- MAIN CONTENT CONTAINER -->
    <div class="container mx-auto py-8 px-4 sm:px-6 lg:px-8 flex-grow -mt-4">
        
        <!-- CAPAIAN PEMBELAJARAN SECTION -->
        <div class="capaian-dropdown" data-aos="fade-up">
            <div class="capaian-header" id="capaian-toggle">
                <div class="capaian-title">
                    <div class="capaian-icon">
                        <i class="mdi mdi-target text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl">Capaian Pembelajaran</h3>
                        <p class="text-blue-100 text-sm mt-1">Klik untuk melihat detail capaian pembelajaran</p>
                    </div>
                </div>
                <div class="capaian-toggle">
                    <i class="mdi mdi-chevron-down text-white text-2xl"></i>
                </div>
            </div>
            <div class="capaian-content" id="capaian-content">
                <ul class="capaian-list">
                    <li class="capaian-item">
                        <div class="capaian-number">1</div>
                        <p class="capaian-text">Peserta didik memahami keberagaman kondisi geografis Indonesia, konektivitas antarruang terhadap upaya pemanfaatan dan pelestarian potensi sumber daya alam, faktor aktivitas manusia terhadap perubahan iklim dan potensi bencana alam.</p>
                    </li>
                    <li class="capaian-item">
                        <div class="capaian-number">2</div>
                        <p class="capaian-text">Peserta didik memahami dampak perubahan iklim terhadap kehidupan ekonomi, sosial, budaya masyarakat serta merefleksikan pola adaptasi terhadap perubahan iklim dan upaya mitigasi bencana untuk menunjang sustainable development goals (SDGs) dalam konteks lokal, regional, dan global.</p>
                    </li>
                    <li class="capaian-item">
                        <div class="capaian-number">3</div>
                        <p class="capaian-text">Peserta didik memahami upaya masyarakat dalam memenuhi kebutuhannya melalui kegiatan ekonomi, harga, pasar, lembaga keuangan, perdagangan internasional, peran masyarakat dan negara dalam mendorong pertumbuhan ekonomi di era digital, serta potensi Indonesia menjadi negara maju.</p>
                    </li>
                    <li class="capaian-item">
                        <div class="capaian-number">4</div>
                        <p class="capaian-text">Peserta didik memahami proses interaksi sosial, lembaga sosial, dinamika sosial dan perubahan sistem sosial budaya dalam masyarakat yang majemuk untuk mewujudkan integrasi bangsa dengan prinsip kebinekaan.</p>
                    </li>
                    <li class="capaian-item">
                        <div class="capaian-number">5</div>
                        <p class="capaian-text">Peserta didik mengenali konsep dasar ilmu sejarah yaitu manusia, ruang, waktu, kronologi, perubahan, dalam menganalisis keterhubungan antara masa lampau, masa kini, dan masa yang akan datang ketika mempelajari sejarah lokal dan toponimi wilayah serta berbagai peristiwa atau kejadian penting dalam lingkup lokal, nasional dan global terkait asal-usul nenek moyang bangsa Indonesia dan jalur rempah nusantara.</p>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- MAIN MENU SECTION -->
        <div class="content-section p-8 mb-8 minang-pattern">
            <div class="text-center mb-10" data-aos="fade-up">
                <div class="inline-flex items-center space-x-3 mb-4">
                    <div class="w-8 h-1 bg-gradient-to-r from-blue-500 to-red-500 rounded-full"></div>
                    <h3 class="font-bold text-2xl sm:text-3xl text-gray-800">Menu Pembelajaran</h3>
                    <div class="w-8 h-1 bg-gradient-to-r from-red-500 to-blue-500 rounded-full"></div>
                </div>
                <p class="text-gray-600 text-base max-w-lg mx-auto leading-relaxed">Pilih menu pembelajaran yang sesuai untuk memahami budaya Minangkabau dengan lebih mendalam</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Materi Card -->
                <a href="{{ route('guru.materi.index')}}" class="block menu-item group" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-modern p-8 text-center h-full">
                        <div class="absolute top-0 right-0 w-24 h-24 rounded-bl-3xl bg-blue-50/70"></div>
                        <div class="w-20 h-20 rounded-2xl flex items-center justify-center mb-6 mx-auto gradient-primary menu-icon shadow-lg">
                            <i class="mdi mdi-book-open-page-variant text-white text-3xl"></i>
                        </div>
                        <h5 class="font-bold text-xl text-gray-900 mb-3">Materi Pembelajaran</h5>
                        <p class="text-gray-600 text-sm mb-6 leading-relaxed">Pelajari konsep dasar dan materi lengkap tentang budaya Minangkabau yang disajikan secara menarik</p>
                        <div class="inline-flex items-center space-x-2 text-blue-600 font-semibold group-hover:text-blue-700 transition-colors">
                            <span>Mulai Belajar</span>
                            <i class="mdi mdi-arrow-right text-lg group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </a>

                <!-- Kearifan Lokal Card -->
                <a href="{{ route('guru.tugas.index')}}" class="block menu-item group" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-modern p-8 text-center h-full">
                        <div class="absolute top-0 right-0 w-24 h-24 rounded-bl-3xl bg-green-50/70"></div>
                        <div class="w-20 h-20 rounded-2xl flex items-center justify-center mb-6 mx-auto gradient-success menu-icon shadow-lg">
                            <i class="mdi mdi-leaf text-white text-3xl"></i>
                        </div>
                        <h5 class="font-bold text-xl text-gray-900 mb-3">Kearifan Lokal</h5>
                        <p class="text-gray-600 text-sm mb-6 leading-relaxed">Eksplorasi nilai-nilai kehidupan dan kearifan lokal masyarakat Minangkabau yang masih lestari</p>
                        <div class="inline-flex items-center space-x-2 text-green-600 font-semibold group-hover:text-green-700 transition-colors">
                            <span>Eksplorasi</span>
                            <i class="mdi mdi-arrow-right text-lg group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </a>

                <!-- Pepatah Petitih Card -->
                <a href="{{ route('guru.quiz.index')}}" class="block menu-item group" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-modern p-8 text-center h-full">
                        <div class="absolute top-0 right-0 w-24 h-24 rounded-bl-3xl bg-amber-50/70"></div>
                        <div class="w-20 h-20 rounded-2xl flex items-center justify-center mb-6 mx-auto gradient-warning menu-icon shadow-lg">
                            <i class="mdi mdi-format-quote-open text-white text-3xl"></i>
                        </div>
                        <h5 class="font-bold text-xl text-gray-900 mb-3">Pepatah Petitih</h5>
                        <p class="text-gray-600 text-sm mb-6 leading-relaxed">Pahami filosofi dan makna mendalam dari pepatah-petitih tradisional Minangkabau</p>
                        <div class="inline-flex items-center space-x-2 text-amber-600 font-semibold group-hover:text-amber-700 transition-colors">
                            <span>Pelajari</span>
                            <i class="mdi mdi-arrow-right text-lg group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- TIPS SECTION -->
        <div class="mt-8" data-aos="fade-up" data-aos-delay="400">
            <div class="relative bg-gradient-to-br from-amber-50 via-orange-50 to-red-50 rounded-3xl p-8 mx-auto max-w-4xl shadow-lg border border-amber-200/50 overflow-hidden">
                <!-- Decorative Elements -->
                <div class="absolute -top-6 -right-6 w-32 h-32 bg-amber-200/20 rounded-full pulse-gentle"></div>
                <div class="absolute -bottom-6 -left-6 w-28 h-28 bg-red-200/20 rounded-full pulse-gentle" style="animation-delay: 1.5s;"></div>
                <div class="absolute top-4 right-4 w-4 h-4 bg-amber-300/40 rounded-full"></div>
                <div class="absolute bottom-4 left-4 w-6 h-6 bg-red-300/40 rounded-full"></div>
                
                <div class="relative z-10 text-center">
                    <div class="mb-6">
                        <div class="w-16 h-16 rounded-2xl gradient-warning flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="mdi mdi-lightbulb-on text-white text-2xl"></i>
                        </div>
                        <h6 class="font-bold text-2xl text-gray-800 mb-2">Tips Pembelajaran</h6>
                        <div class="w-16 h-1 bg-gradient-to-r from-amber-400 to-red-400 mx-auto rounded-full"></div>
                    </div>
                    
                    <div class="max-w-2xl mx-auto">
                        <p class="text-gray-700 text-base leading-relaxed mb-4">
                            Untuk hasil pembelajaran yang optimal, ikuti urutan pembelajaran berikut:
                        </p>
                        <div class="flex flex-wrap justify-center gap-2 text-sm">
                            <span class="px-4 py-2 bg-blue-100 text-blue-700 rounded-full font-semibold">1. Materi</span>
                            <i class="mdi mdi-arrow-right text-gray-400 self-center"></i>
                            <span class="px-4 py-2 bg-green-100 text-green-700 rounded-full font-semibold">2. Kearifan Lokal</span>
                            <i class="mdi mdi-arrow-right text-gray-400 self-center"></i>
                            <span class="px-4 py-2 bg-amber-100 text-amber-700 rounded-full font-semibold">3. Pepatah Petitih</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-white border-t border-gray-100 mt-16 py-8">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <div class="flex items-center justify-center space-x-3 mb-3">
                    <div class="w-8 h-8 rounded-full gradient-warning flex items-center justify-center">
                        <i class="mdi mdi-school text-white text-sm"></i>
                    </div>
                    <span class="text-gray-700 font-semibold">Budaya Minangkabau</span>
                </div>
                <p class="text-gray-500 text-sm">
                    &copy; 2025 Pembelajaran Budaya Minangkabau • Kelas VII SMP
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({ 
            duration: 1000, 
            once: true,
            easing: 'ease-out-cubic'
        });
        
        // Update Date & Time
        function updateDateTime() {
            const now = new Date();
            const dateOptions = {
                weekday: 'long',
                year: 'numeric', 
                month: 'long', 
                day: 'numeric'
            };
            const timeOptions = {
                hour: '2-digit', 
                minute: '2-digit', 
                second: '2-digit', 
                hour12: false
            };
            
            document.getElementById('current-date').textContent = now.toLocaleDateString('id-ID', dateOptions);
            document.getElementById('current-time').textContent = now.toLocaleTimeString('id-ID', timeOptions);
        }
        
        // Update every second
        setInterval(updateDateTime, 1000);
        updateDateTime();
        
        // Enhanced menu interactions
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                const icon = this.querySelector('.menu-icon');
                if (icon) {
                    icon.style.transform = 'scale(1.15) rotate(8deg)';
                }
            });
            
            item.addEventListener('mouseleave', function() {
                const icon = this.querySelector('.menu-icon');
                if (icon) {
                    icon.style.transform = 'scale(1) rotate(0deg)';
                }
            });
        });

        // Add subtle parallax effect to header
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const pattern = document.querySelector('.header-pattern');
            if (pattern) {
                pattern.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Capaian Pembelajaran Dropdown Functionality
        document.getElementById('capaian-toggle').addEventListener('click', function() {
            const content = document.getElementById('capaian-content');
            const toggle = this.querySelector('.capaian-toggle');
            
            content.classList.toggle('open');
            toggle.classList.toggle('open');
            
            // Adjust max-height for smooth animation
            if (content.classList.contains('open')) {
                content.style.maxHeight = content.scrollHeight + 'px';
            } else {
                content.style.maxHeight = '0';
            }
        });
    </script>
</body>
</html>
@endsection