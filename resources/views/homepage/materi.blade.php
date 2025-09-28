<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Budaya Minangkabau - Warisan Adat dan Tradisi</title>
    <!-- Font Inter dan Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHg4/JtU43o5/qQ6xJdF6T6O4Q9D5K9/G5J9pL5X3C6W8p1fB0R6Q9a2kL9l0L2O6Q6+G6Q5Q=" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'minang-primary': '#F2A028',
                        'minang-secondary': '#E15241',
                        'minang-accent': '#607274',
                        'minang-light': '#F8F9FA',
                        'minang-dark': '#343A40',
                        'minang-bg': '#FFFBF5',
                        'minang-green': '#2d5016',
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.8s ease-out',
                        'slide-in-left': 'slideInLeft 0.8s ease-out',
                        'slide-in-right': 'slideInRight 0.8s ease-out',
                        'pulse-soft': 'pulseSoft 3s infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        slideInLeft: {
                            '0%': { opacity: '0', transform: 'translateX(-20px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        },
                        slideInRight: {
                            '0%': { opacity: '0', transform: 'translateX(20px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        },
                        pulseSoft: {
                            '0%, 100%': { opacity: '0.6' },
                            '50%': { opacity: '1' },
                        },
                        float: {
                            '0%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-15px)' },
                            '100%': { transform: 'translateY(0px)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        .text-minang-gradient {
            background: linear-gradient(90deg, #F2A028, #E15241, #2d5016);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            background-size: 200% auto;
            animation: gradientShift 3s ease-in-out infinite alternate;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }
        
        .minang-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M50 0C40 10, 30 0, 20 10C10 20, 0 30, 10 40C20 50, 10 60, 20 70C30 80, 40 90, 50 80C60 90, 70 80, 80 70C90 60, 100 50, 90 40C80 30, 90 20, 80 10C70 0, 60 10, 50 0Z' fill='%23F2A02822'/%3E%3C/svg%3E");
            background-size: 200px;
        }
        
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, #F2A028, #E15241);
            border-radius: 2px;
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .img-border {
            border: 3px solid #F2A028;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.2);
        }
        
        .nav-link {
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(to right, #F2A028, #E15241);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-minang-bg text-minang-dark overflow-x-hidden">

    <!-- Header & Hero Section -->
    <header class="relative overflow-hidden bg-minang-light py-16 md:py-24 border-b-4 border-minang-primary minang-pattern">
        <!-- Background decoration -->
        <div class="absolute top-0 right-0 w-40 h-40 bg-minang-primary/10 rounded-full blur-xl -z-10 animate-pulse-soft"></div>
        <div class="absolute bottom-0 left-0 w-60 h-60 bg-minang-secondary/10 rounded-full blur-xl -z-10 animate-pulse-soft"></div>
        
        <!-- Tombol "Kembali ke Menu Utama" di kanan atas -->
        <a href="{{url('/')}}" class="absolute top-4 right-4 md:top-8 md:right-8 bg-white p-3 rounded-full shadow-lg transition-all duration-300 transform hover:scale-110 hover:bg-minang-primary hover:text-white z-50 group">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-minang-dark group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12a2 2 0 012 2v1a2 2 0 01-2 2H6a2 2 0 01-2-2v-1a2 2 0 012-2z" />
            </svg>
            <span class="sr-only">Kembali ke Menu Utama</span>
        </a>
        
        <div class="container mx-auto px-6 text-center animate-fade-in-up">
            <h1 class="text-4xl md:text-6xl font-bold text-minang-dark mb-4 drop-shadow-lg">
                Jelajahi Kekayaan <span class="text-minang-gradient">Budaya Minangkabau</span>
            </h1>
            <p class="text-lg md:text-xl text-minang-accent max-w-3xl mx-auto mb-8 font-inter">
                Sebuah perjalanan untuk mengenal lebih dekat adat, sejarah, dan seni dari salah satu suku bangsa terkemuka di Indonesia.
            </p>
            <div class="flex justify-center">
                <button onclick="scrollToContent()" class="bg-minang-primary hover:bg-minang-secondary text-white font-bold py-3 px-8 rounded-full shadow-lg transition-all duration-300 transform hover:scale-105 flex items-center group">
                    Mulai Eksplorasi
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-16 md:py-20" id="content">
        <div class="container mx-auto px-6">
            <!-- Navigation Menu -->
            <div class="flex justify-center mb-12">
                <div class="bg-white rounded-full shadow-lg p-2 flex flex-wrap justify-center">
                    <a href="#sejarah" class="m-1 px-4 py-2 rounded-full text-minang-dark hover:bg-minang-primary hover:text-white transition-all duration-300 nav-link">Sejarah</a>
                    <a href="#adat" class="m-1 px-4 py-2 rounded-full text-minang-dark hover:bg-minang-primary hover:text-white transition-all duration-300 nav-link">Adat</a>
                    <a href="#kesenian" class="m-1 px-4 py-2 rounded-full text-minang-dark hover:bg-minang-primary hover:text-white transition-all duration-300 nav-link">Kesenian</a>
                    <a href="#kuliner" class="m-1 px-4 py-2 rounded-full text-minang-dark hover:bg-minang-primary hover:text-white transition-all duration-300 nav-link">Kuliner</a>
                </div>
            </div>
            
            <!-- Sejarah Section -->
            <section class="mb-16 md:mb-20 animate-slide-in-left" id="sejarah">
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div class="fade-in">
                        <h2 class="text-3xl md:text-4xl font-bold text-minang-dark mb-4 section-title">Sejarah dan Asal-usul</h2>
                        <p class="text-minang-accent leading-relaxed mb-4">
                            Nama "Minangkabau" konon berasal dari legenda kemenangan adu kerbau melawan seekor kerbau milik prajurit Jawa. Kata "manang" (menang) dan "kabau" (kerbau) kemudian disatukan menjadi <strong class="text-minang-primary">Minangkabau</strong>. 
                        </p>
                        <p class="text-minang-accent leading-relaxed">
                            Budaya ini juga dikenal sebagai salah satu budaya yang menyebarkan Islam di nusantara dengan damai, dengan filosofi "Adat basandi syarak, syarak basandi Kitabullah" yang berarti adat bersendikan syariat, dan syariat bersendikan Al-Quran.
                        </p>
                    </div>
                    <div class="relative w-full h-64 md:h-80 rounded-2xl overflow-hidden shadow-xl transform transition-all duration-500 hover:scale-105 group fade-in">
                        <img src="{{asset('homepage/img/kerbau.jpg')}}" alt="Ilustrasi Legenda Adu Kerbau" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end justify-center pb-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="text-white text-lg font-bold">Kisah di Balik Nama Minangkabau</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Adat & Matrilineal Section -->
            <section class="mb-16 md:mb-20 animate-fade-in-up" id="adat">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-minang-dark mb-8 section-title">Sistem Kekerabatan & Adat</h2>
                <div class="grid lg:grid-cols-3 gap-8">
                    <!-- Matrilineal Card -->
                    <div class="bg-white rounded-3xl p-8 shadow-lg border border-minang-primary/20 card-hover fade-in">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 rounded-full bg-minang-primary/10 flex items-center justify-center mr-4">
                                <i class="fas fa-venus-double text-2xl text-minang-secondary"></i>
                            </div>
                            <h3 class="text-2xl font-semibold text-minang-dark">Sistem Matrilineal</h3>
                        </div>
                        <p class="text-minang-accent leading-relaxed">
                            Inti dari budaya Minangkabau adalah sistem <strong class="text-minang-primary">matrilineal</strong>. Garis keturunan ditarik dari pihak ibu, dan kekayaan serta gelar adat diwariskan dari ibu kepada anak perempuan. Pria yang menikah akan tinggal di rumah istri dan anak-anaknya.
                        </p>
                    </div>
                    <!-- 4 Unsur Adat Card -->
                    <div class="lg:col-span-2 bg-white rounded-3xl p-8 shadow-lg border border-minang-primary/20 card-hover fade-in">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 rounded-full bg-minang-primary/10 flex items-center justify-center mr-4">
                                <i class="fas fa-landmark text-2xl text-minang-primary"></i>
                            </div>
                            <h3 class="text-2xl font-semibold text-minang-dark">Empat Pilar Adat</h3>
                        </div>
                        <ul class="list-none space-y-4 text-minang-accent leading-relaxed">
                            <li class="flex items-start p-3 rounded-lg hover:bg-minang-primary/5 transition-colors">
                                <span class="text-minang-primary mr-3 text-xl font-bold">1.</span>
                                <div><strong class="text-minang-dark">Adat nan Sabana Adat:</strong> Aturan adat yang tidak berubah, bersumber dari alam.</div>
                            </li>
                            <li class="flex items-start p-3 rounded-lg hover:bg-minang-primary/5 transition-colors">
                                <span class="text-minang-primary mr-3 text-xl font-bold">2.</span>
                                <div><strong class="text-minang-dark">Adat nan Diadatkan:</strong> Aturan adat yang dibuat berdasarkan kesepakatan nenek moyang.</div>
                            </li>
                            <li class="flex items-start p-3 rounded-lg hover:bg-minang-primary/5 transition-colors">
                                <span class="text-minang-primary mr-3 text-xl font-bold">3.</span>
                                <div><strong class="text-minang-dark">Adat nan Taradat:</strong> Aturan yang dibuat berdasarkan peraturan adat yang berlaku.</div>
                            </li>
                            <li class="flex items-start p-3 rounded-lg hover:bg-minang-primary/5 transition-colors">
                                <span class="text-minang-primary mr-3 text-xl font-bold">4.</span>
                                <div><strong class="text-minang-dark">Adat nan Diperadatkan:</strong> Aturan yang diubah sesuai kebutuhan zaman dengan tetap berpegang pada prinsip adat.</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Kesenian Section -->
            <section class="mb-16 md:mb-20" id="kesenian">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-minang-dark mb-8 section-title">Kesenian dan Arsitektur</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Rumah Gadang Card -->
                    <div class="relative bg-white rounded-3xl overflow-hidden shadow-lg card-hover fade-in">
                        <div class="h-56 overflow-hidden">
                            <img src="{{asset('homepage/img/rumah gadang.jpg')}}" alt="Rumah Gadang" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-minang-dark mb-2">Rumah Gadang</h3>
                            <p class="text-minang-accent text-sm">Rumah tradisional yang khas dengan atap menyerupai tanduk kerbau, melambangkan identitas dan kekerabatan masyarakat Minangkabau.</p>
                        </div>
                    </div>
                    <!-- Pakaian Adat Card -->
                    <div class="relative bg-white rounded-3xl overflow-hidden shadow-lg card-hover fade-in">
                        <div class="h-56 overflow-hidden">
                            <img src="{{asset('homepage/img/bundo kanduang.png')}}" alt="Pakaian Adat Bundo Kanduang" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-minang-dark mb-2">Pakaian Adat Bundo Kanduang</h3>
                            <p class="text-minang-accent text-sm">Pakaian tradisional perempuan yang melambangkan peran perempuan sebagai "Bundo Kanduang" atau ibu sejati yang bijaksana.</p>
                        </div>
                    </div>
                    <!-- Tari Piring Card -->
                    <div class="relative bg-white rounded-3xl overflow-hidden shadow-lg card-hover fade-in">
                        <div class="h-56 overflow-hidden">
                            <img src="{{asset('homepage/img/tari piring.jpg')}}" alt="Tari Piring" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-minang-dark mb-2">Tari Piring</h3>
                            <p class="text-minang-accent text-sm">Tarian tradisional yang menampilkan gerakan lincah dan atraktif dengan piring di tangan penari, melambangkan syukur atas hasil panen.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Makanan Khas Section -->
            <section id="kuliner" class="animate-slide-in-right">
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div class="relative w-full h-64 md:h-80 rounded-2xl overflow-hidden shadow-xl transform transition-all duration-500 hover:scale-105 group fade-in">
                        <img src="{{asset('homepage/img/rendang.jpg')}}" alt="Rendang" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end justify-center pb-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="text-white text-lg font-bold">Rendang, Kelezatan Dunia</p>
                        </div>
                    </div>
                    <div class="fade-in">
                        <h2 class="text-3xl md:text-4xl font-bold text-minang-dark mb-4 section-title">Kuliner Khas: Rendang</h2>
                        <p class="text-minang-accent leading-relaxed mb-4">
                            Kuliner Minangkabau sudah sangat mendunia, dan yang paling terkenal tentu saja <strong class="text-minang-primary">Rendang</strong>. Makanan ini dinobatkan sebagai salah satu makanan terlezat di dunia oleh CNN International pada tahun 2011 dan 2017.
                        </p>
                        <p class="text-minang-accent leading-relaxed">
                            Terbuat dari daging sapi yang dimasak dalam santan dan rempah-rempah khas selama berjam-jam, Rendang memiliki cita rasa yang kaya, otentik, dan tahan lama tanpa pendinginan berkat teknik pengolahannya.
                        </p>
                    </div>
                </div>
            </section>

        </div>
    </main>
    
    <!-- Footer -->
    <footer class="bg-minang-dark text-white py-12 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 minang-pattern"></div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <p class="text-sm">Dibuat dengan ❤️ untuk melestarikan budaya Indonesia. © 2025</p>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scroll-to-top" class="fixed bottom-6 right-6 p-3 bg-minang-primary text-white rounded-full shadow-lg hover:bg-minang-secondary transition-all duration-300 z-50 hidden transform hover:scale-110">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Fungsi untuk scroll ke bagian konten utama
        function scrollToContent() {
            const content = document.getElementById('content');
            if (content) {
                window.scrollTo({
                    top: content.offsetTop - 50,
                    behavior: 'smooth'
                });
            }
        }
        
        // Scroll-to-top button functionality
        const scrollToTopBtn = document.getElementById('scroll-to-top');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                scrollToTopBtn.classList.remove('hidden');
            } else {
                scrollToTopBtn.classList.add('hidden');
            }
        });

        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Fade-in animation on scroll
        const fadeElements = document.querySelectorAll('.fade-in');
        
        const fadeInObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });
        
        fadeElements.forEach(element => {
            fadeInObserver.observe(element);
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>

</body>
</html>