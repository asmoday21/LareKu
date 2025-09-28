@extends('siswa.siswa_master')

@section('siswa')
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepatah Petitih Minangkabau</title>
    <!-- Material Design Icons -->
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#2563eb',
                        'primary-light': '#3b82f6',
                        'secondary': '#1e40af',
                        'accent': '#f59e0b',
                        'accent-light': '#fbbf24',
                        'success': '#10b981',
                        'warning': '#f59e0b',
                        'danger': '#ef4444',
                        'dark': '#1f2937',
                        'light': '#f8fafc',
                        'minang-red': '#dc2626',
                        'minang-gold': '#d97706',
                    },
                    fontFamily: {
                        'sans': ['Plus Jakarta Sans', 'Inter', 'sans-serif'],
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        slideInLeft: {
                            '0%': { opacity: '0', transform: 'translateX(-30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        },
                        slideInRight: {
                            '0%': { opacity: '0', transform: 'translateX(30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        },
                        bounceGentle: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        pulseSoft: {
                            '0%, 100%': { opacity: '0.6' },
                            '50%': { opacity: '1' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-8px)' },
                        },
                        glow: {
                            '0%': { 'box-shadow': '0 0 5px rgba(242, 160, 40, 0.5)' },
                            '100%': { 'box-shadow': '0 0 20px rgba(242, 160, 40, 0.8)' },
                        },
                        scalePulse: {
                            '0%, 100%': { transform: 'scale(1)' },
                            '50%': { transform: 'scale(1.05)' },
                        },
                        pulseGentle: {
                            '0%, 100%': { opacity: '1' },
                            '50%': { opacity: '0.7' },
                        }
                    }
                }
            }
        }
    </script>
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

        .flip-card {
            perspective: 1000px;
        }

        .flip-card-inner {
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
            backface-visibility: hidden;
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .flip-card-back {
            transform: rotateY(180deg);
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

        .minang-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23f59e0b' fill-opacity='0.05'%3E%3Cpath d='M20 0L30 10L20 20L10 10z'/%3E%3Cpath d='M20 20L30 30L20 40L10 30z'/%3E%3Cpath d='M0 20L10 30L20 20L10 10z'/%3E%3Cpath d='M20 20L30 10L40 20L30 30z'/%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">

    <!-- HEADER SECTION -->
    <div class="relative w-full py-12 lg:py-16 header-wrapper">
        <div class="header-pattern"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl sm:text-6xl font-extrabold text-white mb-4 drop-shadow-lg" data-aos="fade-up">
                <span class="text-white/90">Pepatah Petitih</span>
                <span class="text-minang-gold">Minangkabau</span>
            </h1>
            <p class="text-white/80 text-base sm:text-lg max-w-2xl mx-auto mb-8 leading-relaxed font-medium" data-aos="fade-up" data-aos-delay="100">
                Kearifan lokal dalam bentuk ungkapan bijak yang mengandung nilai-nilai moral, etika, dan filosofi hidup masyarakat Minangkabau.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <button onclick="scrollToContent()" class="bg-minang-gold hover:bg-minang-red transition-all text-white font-bold py-3 px-8 rounded-full shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <i class="mdi mdi-book-search-outline me-2"></i> Jelajahi Pepatah
                </button>
                <button onclick="openQuizModal()" class="bg-white hover:bg-gray-100 transition-all text-dark font-bold py-3 px-8 rounded-full shadow-lg" data-aos="fade-up" data-aos-delay="300">
                    <i class="mdi mdi-puzzle-outline me-2"></i> Quiz Interaktif
                </button>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT CONTAINER -->
    <div class="container mx-auto py-8 px-4 sm:px-6 lg:px-8 flex-grow -mt-4">
        
        <!-- Pengantar Section -->
        <section class="content-section p-8 mb-8 text-center minang-pattern" id="content" data-aos="fade-up">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-6 gradient-text">
                Apa itu Pepatah Petitih?
            </h2>
            <div class="max-w-4xl mx-auto bg-white/70 rounded-2xl p-6 shadow-md border border-gray-100">
                <p class="text-base text-gray-600 leading-relaxed mb-6">
                    Pepatah petitih adalah ungkapan tradisional Minangkabau yang berisi nasihat, ajaran moral, dan panduan hidup. 
                    Biasanya disampaikan dalam bentuk kiasan atau perumpamaan yang mudah diingat dan dipahami.
                </p>
                <div class="grid md:grid-cols-3 gap-6 mt-8">
                    <div class="bg-blue-50/70 rounded-xl p-6 transition-all duration-300 hover:scale-105">
                        <div class="text-blue-600 text-4xl mb-4"><i class="mdi mdi-lightbulb-on-outline"></i></div>
                        <h3 class="font-bold text-gray-800 mb-2">Mengandung Hikmah</h3>
                        <p class="text-sm text-gray-600">Setiap pepatah mengandung pelajaran hidup yang mendalam.</p>
                    </div>
                    <div class="bg-green-50/70 rounded-xl p-6 transition-all duration-300 hover:scale-105">
                        <div class="text-green-600 text-4xl mb-4"><i class="mdi mdi-forum-outline"></i></div>
                        <h3 class="font-bold text-gray-800 mb-2">Mudah Diingat</h3>
                        <p class="text-sm text-gray-600">Disampaikan dalam bahasa yang indah dan berima.</p>
                    </div>
                    <div class="bg-yellow-50/70 rounded-xl p-6 transition-all duration-300 hover:scale-105">
                        <div class="text-yellow-600 text-4xl mb-4"><i class="mdi mdi-image-filter-frames"></i></div>
                        <h3 class="font-bold text-gray-800 mb-2">Menggunakan Kiasan</h3>
                        <p class="text-sm text-gray-600">Menyampaikan pesan melalui perumpamaan alam.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pepatah Cards Section -->
        <section class="mb-16">
            <h2 class="text-2xl sm:text-3xl font-bold text-center text-gray-800 mb-10 gradient-text">
                Koleksi Pepatah Petitih
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Pepatah 1 -->
                <div class="flip-card card-modern overflow-hidden h-80" data-aos="fade-up" data-aos-delay="100">
                    <div class="flip-card-inner relative h-full">
                        <div class="flip-card-front absolute inset-0 p-8 flex flex-col justify-center">
                            <div class="text-blue-600 text-4xl mb-4 text-center"><i class="mdi mdi-nature-outline"></i></div>
                            <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Pepatah #1</h3>
                            <p class="text-blue-600 font-semibold text-center italic leading-relaxed">
                                "Alam takambang jadi guru"
                            </p>
                        </div>
                        <div class="flip-card-back absolute inset-0 p-8 bg-blue-600 text-white flex flex-col justify-center">
                            <div class="text-4xl mb-4 text-center"><i class="mdi mdi-school"></i></div>
                            <h3 class="text-xl font-bold mb-4 text-center">Makna & Penjelasan</h3>
                            <p class="text-center leading-relaxed mb-4">
                                Alam semesta menjadi guru bagi kehidupan. Semua yang ada di alam dapat memberikan pelajaran berharga.
                            </p>
                            <div class="text-center">
                                <span class="bg-white/20 px-4 py-2 rounded-full text-sm">
                                    Pendidikan & Pembelajaran
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pepatah 2 -->
                <div class="flip-card card-modern overflow-hidden h-80" data-aos="fade-up" data-aos-delay="200">
                    <div class="flip-card-inner relative h-full">
                        <div class="flip-card-front absolute inset-0 p-8 flex flex-col justify-center">
                            <div class="text-green-600 text-4xl mb-4 text-center"><i class="mdi mdi-account-group-outline"></i></div>
                            <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Pepatah #2</h3>
                            <p class="text-green-600 font-semibold text-center italic leading-relaxed">
                                "Bulek aia dek pambuluah, bulek kato dek mufakat"
                            </p>
                        </div>
                        <div class="flip-card-back absolute inset-0 p-8 bg-green-600 text-white flex flex-col justify-center">
                            <div class="text-4xl mb-4 text-center"><i class="mdi mdi-handshake-outline"></i></div>
                            <h3 class="text-xl font-bold mb-4 text-center">Makna & Penjelasan</h3>
                            <p class="text-center leading-relaxed mb-4">
                                Air menjadi bulat karena bambu, kata menjadi bulat karena mufakat. Pentingnya musyawarah dalam mengambil keputusan.
                            </p>
                            <div class="text-center">
                                <span class="bg-white/20 px-4 py-2 rounded-full text-sm">
                                    Gotong Royong & Musyawarah
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pepatah 3 -->
                <div class="flip-card card-modern overflow-hidden h-80" data-aos="fade-up" data-aos-delay="300">
                    <div class="flip-card-inner relative h-full">
                        <div class="flip-card-front absolute inset-0 p-8 flex flex-col justify-center">
                            <div class="text-purple-600 text-4xl mb-4 text-center"><i class="mdi mdi-scale-balance"></i></div>
                            <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Pepatah #3</h3>
                            <p class="text-purple-600 font-semibold text-center italic leading-relaxed">
                                "Duduak samo randah, tagak samo tinggi"
                            </p>
                        </div>
                        <div class="flip-card-back absolute inset-0 p-8 bg-purple-600 text-white flex flex-col justify-center">
                            <div class="text-4xl mb-4 text-center"><i class="mdi mdi-chess-queen"></i></div>
                            <h3 class="text-xl font-bold mb-4 text-center">Makna & Penjelasan</h3>
                            <p class="text-center leading-relaxed mb-4">
                                Duduk sama rendah, berdiri sama tinggi. Menekankan pentingnya kesetaraan dan keadilan dalam masyarakat.
                            </p>
                            <div class="text-center">
                                <span class="bg-white/20 px-4 py-2 rounded-full text-sm">
                                    Kesetaraan & Keadilan
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pepatah 4 -->
                <div class="flip-card card-modern overflow-hidden h-80" data-aos="fade-up" data-aos-delay="400">
                    <div class="flip-card-inner relative h-full">
                        <div class="flip-card-front absolute inset-0 p-8 flex flex-col justify-center">
                            <div class="text-teal-600 text-4xl mb-4 text-center"><i class="mdi mdi-pine-tree-outline"></i></div>
                            <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Pepatah #4</h3>
                            <p class="text-teal-600 font-semibold text-center italic leading-relaxed">
                                "Batang tarandam akar takuak"
                            </p>
                        </div>
                        <div class="flip-card-back absolute inset-0 p-8 bg-teal-600 text-white flex flex-col justify-center">
                            <div class="text-4xl mb-4 text-center"><i class="mdi mdi-shield-check-outline"></i></div>
                            <h3 class="text-xl font-bold mb-4 text-center">Makna & Penjelasan</h3>
                            <p class="text-center leading-relaxed mb-4">
                                Batang terendam akar terapung. Mengajarkan untuk tetap kuat menghadapi kesulitan dan tidak mudah menyerah.
                            </p>
                            <div class="text-center">
                                <span class="bg-white/20 px-4 py-2 rounded-full text-sm">
                                    Ketahanan & Kegigihan
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pepatah 5 -->
                <div class="flip-card card-modern overflow-hidden h-80" data-aos="fade-up" data-aos-delay="500">
                    <div class="flip-card-inner relative h-full">
                        <div class="flip-card-front absolute inset-0 p-8 flex flex-col justify-center">
                            <div class="text-orange-600 text-4xl mb-4 text-center"><i class="mdi mdi-map-marker-outline"></i></div>
                            <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Pepatah #5</h3>
                            <p class="text-orange-600 font-semibold text-center italic leading-relaxed">
                                "Dimana bumi dipijak, disitu langit dijunjung"
                            </p>
                        </div>
                        <div class="flip-card-back absolute inset-0 p-8 bg-orange-600 text-white flex flex-col justify-center">
                            <div class="text-4xl mb-4 text-center"><i class="mdi mdi-earth"></i></div>
                            <h3 class="text-xl font-bold mb-4 text-center">Makna & Penjelasan</h3>
                            <p class="text-center leading-relaxed mb-4">
                                Di mana kita berada, di situ kita harus menghormati adat dan budaya setempat.
                            </p>
                            <div class="text-center">
                                <span class="bg-white/20 px-4 py-2 rounded-full text-sm">
                                    Adaptasi & Penghormatan
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pepatah 6 -->
                <div class="flip-card card-modern overflow-hidden h-80" data-aos="fade-up" data-aos-delay="600">
                    <div class="flip-card-inner relative h-full">
                        <div class="flip-card-front absolute inset-0 p-8 flex flex-col justify-center">
                            <div class="text-red-600 text-4xl mb-4 text-center"><i class="mdi mdi-diamond-stone"></i></div>
                            <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Pepatah #6</h3>
                            <p class="text-red-600 font-semibold text-center italic leading-relaxed">
                                "Emas tempawan, timah dibuang"
                            </p>
                        </div>
                        <div class="flip-card-back absolute inset-0 p-8 bg-red-600 text-white flex flex-col justify-center">
                            <div class="text-4xl mb-4 text-center"><i class="mdi mdi-star-circle-outline"></i></div>
                            <h3 class="text-xl font-bold mb-4 text-center">Makna & Penjelasan</h3>
                            <p class="text-center leading-relaxed mb-4">
                                Emas disimpan, timah dibuang. Mengajarkan untuk memilih dan mempertahankan yang baik, membuang yang buruk.
                            </p>
                            <div class="text-center">
                                <span class="bg-white/20 px-4 py-2 rounded-full text-sm">
                                    Selektif & Bijaksana
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Interactive Quiz Section -->
        <section class="mt-8" data-aos="fade-up" data-aos-delay="400">
            <div class="relative bg-gradient-to-br from-amber-50 via-orange-50 to-red-50 rounded-3xl p-8 mx-auto max-w-4xl shadow-lg border border-amber-200/50 overflow-hidden">
                <!-- Decorative Elements -->
                <div class="absolute -top-6 -right-6 w-32 h-32 bg-amber-200/20 rounded-full animate-[pulseGentle_3s_ease-in-out_infinite]"></div>
                <div class="absolute -bottom-6 -left-6 w-28 h-28 bg-red-200/20 rounded-full animate-[pulseGentle_3s_ease-in-out_infinite]" style="animation-delay: 1.5s;"></div>
                <div class="absolute top-4 right-4 w-4 h-4 bg-amber-300/40 rounded-full"></div>
                <div class="absolute bottom-4 left-4 w-6 h-6 bg-red-300/40 rounded-full"></div>
                
                <div class="relative z-10 text-center">
                    <div class="mb-6">
                        <div class="w-16 h-16 rounded-2xl gradient-warning flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="mdi mdi-puzzle-outline text-white text-2xl"></i>
                        </div>
                        <h6 class="font-bold text-2xl text-gray-800 mb-2">Uji Pemahamanmu!</h6>
                        <div class="w-16 h-1 bg-gradient-to-r from-amber-400 to-red-400 mx-auto rounded-full"></div>
                    </div>
                    <p class="text-gray-700 text-base leading-relaxed mb-6">
                        Setelah mempelajari pepatah-pepatah di atas, mari uji seberapa baik kalian memahami makna dan penerapannya!
                    </p>
                    <button onclick="openQuizModal()" class="w-full sm:w-auto bg-gradient-to-r from-blue-500 to-red-500 hover:shadow-2xl text-white font-bold py-3 px-8 rounded-full shadow-lg transition-all duration-300 transform hover:scale-105">
                        <i class="mdi mdi-play-circle-outline me-2"></i> Mulai Quiz Sekarang
                    </button>
                </div>
            </div>
        </section>

        <!-- Learning Tips Section -->
        <section class="mt-16">
            <h2 class="text-2xl sm:text-3xl font-bold text-center text-gray-800 mb-10 gradient-text">
                Tips Menghafal Pepatah
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="card-modern p-8 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-blue-600 text-4xl mb-4"><i class="mdi mdi-music-note-eighth-outline"></i></div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Cari Iramanya</h3>
                    <p class="text-gray-600">Pepatah Minang memiliki irama yang indah. Bacalah dengan nada yang tepat untuk mudah diingat.</p>
                </div>
                <div class="card-modern p-8 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-green-600 text-4xl mb-4"><i class="mdi mdi-image-outline"></i></div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Bayangkan Gambarnya</h3>
                    <p class="text-gray-600">Visualisasikan kiasan yang ada dalam pepatah. Bayangkan alam, benda, atau situasi yang digambarkan.</p>
                </div>
                <div class="card-modern p-8 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-yellow-600 text-4xl mb-4"><i class="mdi mdi-lightbulb-multiple-outline"></i></div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Praktikkan dalam Kehidupan</h3>
                    <p class="text-gray-600">Terapkan makna pepatah dalam situasi sehari-hari. Semakin sering digunakan, semakin mudah diingat.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Quiz Modal -->
    <div id="quizModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-xl">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-dark"><i class="mdi mdi-puzzle-outline text-blue-500 me-2"></i>Quiz Pepatah Petitih</h2>
                    <button onclick="closeQuizModal()" class="text-gray-500 hover:text-gray-800 transition-colors">
                        <i class="mdi mdi-close text-2xl"></i>
                    </button>
                </div>
                
                <div id="quizContent">
                    <div class="text-center mb-8">
                        <div class="text-blue-500 text-6xl mb-4"><i class="mdi mdi-play-circle-outline"></i></div>
                        <p class="text-lg text-gray-600 mb-6">Siap menguji pemahamanmu tentang pepatah Minangkabau?</p>
                        <button onclick="startQuiz()" class="bg-gradient-to-r from-blue-500 to-red-500 text-white font-bold py-3 px-8 rounded-full shadow-lg transition-all duration-300 transform hover:scale-105">
                            <i class="mdi mdi-play me-2"></i> Mulai Quiz
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- FOOTER -->
    <footer class="bg-dark text-white py-8 mt-16">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <p class="text-white/60 text-sm">
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

        // Data quiz
        const quizData = [
            {
                question: "Apa makna dari pepatah 'Alam takambang jadi guru'?",
                options: [
                    "Alam semesta adalah tempat belajar terbaik",
                    "Guru harus mengajar di alam terbuka", 
                    "Alam semesta memberikan pelajaran hidup",
                    "Semua pelajaran ada di alam"
                ],
                correct: 2,
                explanation: "Pepatah ini mengajarkan bahwa alam semesta dengan segala isinya dapat memberikan pelajaran berharga bagi kehidupan manusia."
            },
            {
                question: "Pepatah 'Bulek aia dek pambuluah, bulek kato dek mufakat' mengajarkan tentang?",
                options: [
                    "Pentingnya air dalam kehidupan",
                    "Cara membuat bulatan yang sempurna",
                    "Pentingnya musyawarah dalam mengambil keputusan",
                    "Hubungan antara air dan bambu"
                ],
                correct: 2,
                explanation: "Pepatah ini menekankan bahwa seperti air yang berbentuk bulat karena bambu, keputusan yang baik terbentuk melalui musyawarah dan mufakat."
            },
            {
                question: "Apa yang diajarkan oleh pepatah 'Duduak samo randah, tagak samo tinggi'?",
                options: [
                    "Semua orang memiliki tinggi yang sama",
                    "Pentingnya kesetaraan dan keadilan",
                    "Cara duduk dan berdiri yang benar",
                    "Orang tinggi harus membantu yang pendek"
                ],
                correct: 1,
                explanation: "Pepatah ini mengajarkan tentang kesetaraan dan keadilan dalam masyarakat, di mana semua orang memiliki kedudukan yang sama."
            },
            {
                question: "Pepatah 'Dimana bumi dipijak, disitu langit dijunjung' berkaitan dengan?",
                options: [
                    "Ilmu astronomi tentang bumi dan langit",
                    "Cara berdiri yang benar",
                    "Menghormati adat dan budaya setempat",
                    "Pentingnya menjaga lingkungan"
                ],
                correct: 2,
                explanation: "Pepatah ini mengajarkan bahwa di mana pun kita berada, kita harus menghormati dan mengikuti adat serta budaya setempat."
            },
            {
                question: "Makna dari 'Emas tempawan, timah dibuang' adalah?",
                options: [
                    "Emas lebih berharga dari timah",
                    "Cara menyimpan logam mulia",
                    "Memilih dan mempertahankan yang baik, membuang yang buruk",
                    "Perdagangan logam di Minangkabau"
                ],
                correct: 2,
                explanation: "Pepatah ini mengajarkan kebijaksanaan dalam memilih, yaitu menyimpan dan mempertahankan hal-hal yang baik serta membuang hal-hal yang buruk."
            }
        ];

        let currentQuestion = 0;
        let score = 0;
        let quizStarted = false;

        // Fungsi untuk scroll ke konten utama
        function scrollToContent() {
            const content = document.getElementById('content');
            if (content) {
                window.scrollTo({
                    top: content.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        }

        // Fungsi untuk membuka modal quiz
        function openQuizModal() {
            document.getElementById('quizModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        // Fungsi untuk menutup modal quiz
        function closeQuizModal() {
            document.getElementById('quizModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
            resetQuiz();
        }

        // Fungsi untuk mengatur ulang quiz
        function resetQuiz() {
            currentQuestion = 0;
            score = 0;
            quizStarted = false;
            document.getElementById('quizContent').innerHTML = `
                <div class="text-center mb-8">
                    <div class="text-blue-500 text-6xl mb-4"><i class="mdi mdi-play-circle-outline"></i></div>
                    <p class="text-lg text-gray-600 mb-6">Siap menguji pemahamanmu tentang pepatah Minangkabau?</p>
                    <button onclick="startQuiz()" class="bg-gradient-to-r from-blue-500 to-red-500 text-white font-bold py-3 px-8 rounded-full shadow-lg transition-all duration-300 transform hover:scale-105">
                        <i class="mdi mdi-play me-2"></i> Mulai Quiz
                    </button>
                </div>
            `;
        }

        // Fungsi untuk memulai quiz
        function startQuiz() {
            quizStarted = true;
            currentQuestion = 0;
            score = 0;
            showQuestion();
        }

        // Fungsi untuk menampilkan pertanyaan
        function showQuestion() {
            if (currentQuestion >= quizData.length) {
                showFinalScore();
                return;
            }
            const question = quizData[currentQuestion];
            document.getElementById('quizContent').innerHTML = `
                <div class="mb-6">
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-sm text-gray-600"><i class="mdi mdi-help-circle-outline me-1"></i>Pertanyaan ${currentQuestion + 1} dari ${quizData.length}</span>
                        <span class="text-sm text-gray-600"><i class="mdi mdi-trophy-variant-outline me-1"></i>Skor: ${score}/${quizData.length}</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2 mb-6">
                        <div class="bg-gradient-to-r from-blue-500 to-red-500 h-2 rounded-full transition-all duration-300" style="width: ${((currentQuestion + 1) / quizData.length) * 100}%"></div>
                    </div>
                </div>
                
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">${question.question}</h3>
                    <div class="space-y-3">
                        ${question.options.map((option, index) => `
                            <button onclick="selectAnswer(${index})" class="w-full text-left p-4 rounded-xl border-2 border-gray-200 hover:border-blue-500 hover:bg-blue-50 transition-all duration-300 transform hover:scale-[1.02] active:scale-100">
                                <span class="font-semibold text-blue-500 mr-3">${String.fromCharCode(65 + index)}.</span>
                                ${option}
                            </button>
                        `).join('')}
                    </div>
                </div>
            `;
        }

        // Fungsi untuk memeriksa jawaban yang dipilih
        function selectAnswer(selectedIndex) {
            const question = quizData[currentQuestion];
            const correct = selectedIndex === question.correct;
            
            if (correct) {
                score++;
            }

            document.getElementById('quizContent').innerHTML = `
                <div class="text-center mb-8">
                    <div class="text-6xl mb-4 ${correct ? 'text-green-500' : 'text-red-500'}">${correct ? '<i class="mdi mdi-check-circle-outline"></i>' : '<i class="mdi mdi-close-circle-outline"></i>'}</div>
                    <h3 class="text-2xl font-bold ${correct ? 'text-green-500' : 'text-red-500'} mb-4">
                        ${correct ? 'Benar!' : 'Kurang Tepat'}
                    </h3>
                    <div class="bg-gray-100 rounded-2xl p-6 mb-6">
                        <p class="text-gray-800 font-semibold mb-3"><i class="mdi mdi-information-outline me-2"></i>Penjelasan:</p>
                        <p class="text-gray-600 leading-relaxed">${question.explanation}</p>
                    </div>
                    <div class="text-sm text-gray-600 mb-6">
                        <i class="mdi mdi-lightbulb-on-outline me-2"></i>Jawaban yang benar: <strong>${String.fromCharCode(65 + question.correct)}. ${question.options[question.correct]}</strong>
                    </div>
                    ${currentQuestion < quizData.length - 1 
                        ? `<button onclick="nextQuestion()" class="bg-gradient-to-r from-blue-500 to-red-500 text-white font-bold py-3 px-8 rounded-full shadow-lg transition-all duration-300 transform hover:scale-105"><i class="mdi mdi-arrow-right-circle me-2"></i>Pertanyaan Selanjutnya</button>`
                        : `<button onclick="showFinalScore()" class="bg-gradient-to-r from-blue-500 to-red-500 text-white font-bold py-3 px-8 rounded-full shadow-lg transition-all duration-300 transform hover:scale-105"><i class="mdi mdi-chart-bar me-2"></i>Lihat Hasil Akhir</button>`
                    }
                </div>
            `;
        }

        // Fungsi untuk pindah ke pertanyaan selanjutnya
        function nextQuestion() {
            currentQuestion++;
            showQuestion();
        }

        // Fungsi untuk menampilkan skor akhir
        function showFinalScore() {
            const percentage = Math.round((score / quizData.length) * 100);
            let message, emoji, colorClass;
            
            if (percentage >= 80) {
                message = "Luar biasa! Kalian benar-benar memahami pepatah Minangkabau!";
                emoji = '<i class="mdi mdi-trophy-outline"></i>';
                colorClass = 'text-green-500';
            } else if (percentage >= 60) {
                message = "Bagus! Kalian sudah cukup memahami pepatah Minangkabau.";
                emoji = '<i class="mdi mdi-emoticon-happy-outline"></i>';
                colorClass = 'text-yellow-500';
            } else {
                message = "Jangan menyerah! Coba pelajari lagi pepatah-pepatah di atas.";
                emoji = '<i class="mdi mdi-emoticon-sad-outline"></i>';
                colorClass = 'text-red-500';
            }

            document.getElementById('quizContent').innerHTML = `
                <div class="text-center">
                    <div class="text-8xl mb-6 ${colorClass}">${emoji}</div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-4">Quiz Selesai!</h3>
                    <div class="bg-gradient-to-r from-blue-500 to-red-500 text-white rounded-2xl p-8 mb-6">
                        <div class="text-4xl font-bold mb-2">${score}/${quizData.length}</div>
                        <div class="text-xl">${percentage}% Benar</div>
                    </div>
                    <p class="text-lg text-gray-600 mb-8">${message}</p>
                    <div class="space-x-4">
                        <button onclick="startQuiz()" class="bg-blue-500 text-white font-bold py-3 px-6 rounded-full shadow-lg transition-all duration-300 transform hover:scale-105">
                            <i class="mdi mdi-refresh me-2"></i> Coba Lagi
                        </button>
                        <button onclick="closeQuizModal()" class="bg-gray-100 border-2 border-gray-200 text-gray-800 font-bold py-3 px-6 rounded-full shadow-lg transition-all duration-300 transform hover:scale-105">
                            <i class="mdi mdi-check me-2"></i> Selesai
                        </button>
                    </div>
                </div>
            `;
        }

        // Tutup modal saat mengklik di luar area modal
        document.getElementById('quizModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeQuizModal();
            }
        });
    </script>
</body>
</html>

@endsection