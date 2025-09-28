<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budaya Minangkabau - Warisan Leluhur yang Abadi</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHg4/JtU43o5/qQ6xJdF6T6O4Q9D5K9/G5J9pL5X3C6W8p1fB0R6Q9a2kL9l0L2O6Q6+G6Q5Q=" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts - Poppins & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
        }
        .hero-bg {
            position: relative;
            overflow: hidden;
        }
        .hero-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('{{asset('homepage/img/Indonesian house.jpg')}}');
            background-size: cover;
            background-position: center;
            filter: blur(8px);
            transform: scale(1.1);
            z-index: -1;
        }
        .hero-bg::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(45, 80, 22, 0.85), rgba(45, 80, 22, 0.9));
            z-index: -1;
        }
        .text-gradient {
            background-image: linear-gradient(to right, #FFD700, #DAA520, #B8860B);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% auto;
            animation: gradientShift 3s ease-in-out infinite alternate;
        }
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
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
            background: linear-gradient(to right, #2d5016, #8b4513);
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
            border: 3px solid #2d5016;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.2);
        }
        .minang-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M50 0C40 10, 30 0, 20 10C10 20, 0 30, 10 40C20 50, 10 60, 20 70C30 80, 40 90, 50 80C60 90, 70 80, 80 70C90 60, 100 50, 90 40C80 30, 90 20, 80 10C70 0, 60 10, 50 0Z' fill='%2322852255'/%3E%3C/svg%3E");
            background-size: 200px;
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
            background: linear-gradient(to right, #8b4513, #2d5016);
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
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

<body class="bg-gray-50 text-gray-800">

    <!-- Header/Navbar -->
    <header class="sticky top-0 z-50 bg-white shadow-sm transition-all duration-300">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="#" class="flex items-center space-x-3">
                <!-- Fallback logo -->
                <div class="h-11 w-11 rounded-full bg-[#2d5016] flex items-center justify-center text-white font-bold text-lg shadow-md">
                    BM
                </div>
                <h1 class="text-xl font-bold text-[#2d5016]">Budaya Minangkabau</h1>
            </a>
            <nav class="hidden lg:flex items-center space-x-6">
                <a href="#hero" class="nav-link text-gray-600 hover:text-[#8b4513] font-medium transition-colors duration-200">Beranda</a>
                <a href="{{route('materi')}}" class="nav-link text-gray-600 hover:text-[#8b4513] font-medium transition-colors duration-200">Budaya</a>
                <a href="{{route('cp-atp')}}" class="nav-link text-gray-600 hover:text-[#8b4513] font-medium transition-colors duration-200">Materi</a>
                <a href="{{route('login')}}" class="px-5 py-2 rounded-full font-semibold text-[#2d5016] bg-amber-400 hover:bg-amber-500 transition-all duration-300 shadow-md hover:shadow-lg">Masuk</a>
            </nav>
            <button id="menu-toggle" class="lg:hidden p-2 text-gray-600 hover:text-[#8b4513] focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white shadow-lg transition-all duration-300 ease-in-out transform -translate-y-full absolute top-full left-0 w-full">
            <nav class="flex flex-col p-4 space-y-2">
                <a href="#hero" class="py-2 text-gray-600 hover:text-[#8b4513] font-medium transition-colors duration-200">Beranda</a>
                <a href="#capaian" class="py-2 text-gray-600 hover:text-[#8b4513] font-medium transition-colors duration-200">Budaya</a>
                <a href="#materi" class="py-2 text-gray-600 hover:text-[#8b4513] font-medium transition-colors duration-200">Materi</a>
                <a href="{{route('login')}}" class="mt-4 px-4 py-2 text-center rounded-full font-semibold text-[#2d5016] bg-amber-400 hover:bg-amber-500 transition-colors duration-200 shadow-md">Masuk</a>
            </nav>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero-bg py-20 md:py-32 text-white overflow-hidden relative">
            <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-12 relative z-10">
                <div class="flex-1 text-center md:text-left fade-in">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-4 tracking-wide leading-tight">
                        <span class="text-gradient">Budaya Minangkabau</span> <br>
                        <span class="text-white">Jelajahi Warisan Leluhur</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-200 mb-8 leading-relaxed">
                        Selamat datang di petualangan budaya yang luar biasa! Platform pembelajaran ini dirancang khusus untuk siswa SMP yang ingin menyelami kekayaan budaya Minangkabau.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <a href="{{route('register')}}" class="bg-amber-400 text-[#2d5016] font-bold px-8 py-3 rounded-full hover:bg-amber-500 transition-all duration-300 shadow-lg hover:shadow-xl text-center transform hover:-translate-y-1">
                            Mulai Petualangan <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                        <a href="#" id="watch-video-btn" data-video="https://www.youtube.com/embed/4-_obvYZloY" class="bg-white bg-opacity-20 text-white font-semibold px-8 py-3 rounded-full hover:bg-white hover:bg-opacity-30 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center transform hover:-translate-y-1">
                            <i class="fas fa-play-circle mr-2"></i> Tonton Video
                        </a>
                    </div>
                </div>
                <div class="flex-1 relative mt-12 md:mt-0 text-center fade-in">
                    <!-- Gambar utama dengan efek floating -->
                    <div class="floating">
                        <img src="{{asset('homepage/img/Indonesian house.jpg')}}" alt="Budaya Minangkabau" class="img-fluid rounded-xl img-border mx-auto transform hover:scale-105 transition-transform duration-500 shadow-2xl">
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section id="capaian" class="py-16 bg-white minang-pattern">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold text-[#228b22] mb-3 section-title">Apa yang akan kita pelajari?</h2>
                <p class="text-lg text-gray-600 mb-12 max-w-3xl mx-auto">Mari mengenal lebih dalam kekayaan budaya Minangkabau yang membanggakan dan penuh makna kehidupan!</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="p-8 bg-white rounded-2xl shadow-md card-hover">
                        <div class="w-20 h-20 mx-auto mb-4 rounded-full bg-green-100 flex items-center justify-center">
                            <i class="fas fa-handshake fa-2x text-[#228b22]"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 text-[#2d5016]">Adat Istiadat</h3>
                        <p class="text-gray-600">Memahami sistem adat dan tradisi yang mengatur kehidupan masyarakat Minangkabau berdasarkan prinsip "Adat basandi syarak, syarak basandi Kitabullah".</p>
                    </div>
                    <div class="p-8 bg-white rounded-2xl shadow-md card-hover">
                        <div class="w-20 h-20 mx-auto mb-4 rounded-full bg-green-100 flex items-center justify-center">
                            <i class="fas fa-home fa-2x text-[#228b22]"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 text-[#2d5016]">Rumah Gadang</h3>
                        <p class="text-gray-600">Mengenal arsitektur unik rumah tradisional Minangkabau dan filosofi di balik setiap ornamen dan strukturnya yang penuh makna.</p>
                    </div>
                    <div class="p-8 bg-white rounded-2xl shadow-md card-hover">
                        <div class="w-20 h-20 mx-auto mb-4 rounded-full bg-green-100 flex items-center justify-center">
                            <i class="fas fa-paint-brush fa-2x text-[#228b22]"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 text-[#2d5016]">Seni & Budaya</h3>
                        <p class="text-gray-600">Mempelajari tarian, musik, makanan, dan kesenian khas Minangkabau yang telah diwariskan turun-temurun.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-16 bg-gray-50">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold text-[#228b22] mb-3 section-title">Fitur Pembelajaran</h2>
                <p class="text-lg text-gray-600 mb-12 max-w-3xl mx-auto">Platform ini cocok untuk berbagai kalangan yang ingin mendalami budaya Minangkabau</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div class="p-8 order-2 md:order-1">
                        <div class="space-y-6 text-left">
                            <div class="flex items-center space-x-4 p-4 bg-white rounded-lg shadow-sm">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-amber-100 flex items-center justify-center">
                                    <i class="fas fa-check-circle text-[#228b22] text-xl"></i>
                                </div>
                                <span class="text-lg text-gray-700">Siswa SMP kelas VII yang ingin mengenal budaya Minangkabau</span>
                            </div>
                            <div class="flex items-center space-x-4 p-4 bg-white rounded-lg shadow-sm">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-amber-100 flex items-center justify-center">
                                    <i class="fas fa-check-circle text-[#228b22] text-xl"></i>
                                </div>
                                <span class="text-lg text-gray-700">Guru mata pelajaran IPS dan Bahasa Daerah</span>
                            </div>
                            <div class="flex items-center space-x-4 p-4 bg-white rounded-lg shadow-sm">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-amber-100 flex items-center justify-center">
                                    <i class="fas fa-check-circle text-[#228b22] text-xl"></i>
                                </div>
                                <span class="text-lg text-gray-700">Siapa saja yang ingin melestarikan dan memahami budaya Minangkabau</span>
                            </div>
                            <div class="flex items-center space-x-4 p-4 bg-white rounded-lg shadow-sm">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-amber-100 flex items-center justify-center">
                                    <i class="fas fa-check-circle text-[#228b22] text-xl"></i>
                                </div>
                                <span class="text-lg text-gray-700">Pelajar dari daerah lain yang ingin mengenal kebudayaan Sumatera Barat</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 order-1 md:order-2">
                        <!-- Fallback image -->
                        <div class="floating">
                            <img src="{{asset('homepage/img/indonesian house.jpg')}}" alt="Fitur Pembelajaran" class="img-fluid rounded-xl img-border mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio/Gallery Section -->
        <section id="portfolio" class="py-16 bg-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold text-[#228b22] mb-3 section-title">Galeri Budaya Minangkabau</h2>
                <p class="text-lg text-gray-600 mb-12 max-w-3xl mx-auto">Kumpulan foto kebudayaan dan tradisi Minangkabau yang kaya akan nilai sejarah dan filosofi</p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Image 1 -->
                    <div class="relative group rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <img src="{{asset('homepage/img/download.jpg')}}" alt="Rumah Gadang" class="w-full h-64 object-cover object-center transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black bg-opacity-0 flex items-center justify-center opacity-0 group-hover:opacity-100 group-hover:bg-opacity-60 transition-all duration-300">
                            <div class="text-center p-4">
                                <p class="text-white text-xl font-semibold mb-2">Rumah Gadang</p>
                                <p class="text-gray-200">Rumah adat dengan atap bergonjong yang menjadi simbol budaya Minangkabau</p>
                            </div>
                        </div>
                    </div>
                    <!-- Image 2 -->
                    <div class="relative group rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <img src="{{asset('homepage/img/tari piring.jpg')}}" alt="Tari Piring" class="w-full h-64 object-cover object-center transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black bg-opacity-0 flex items-center justify-center opacity-0 group-hover:opacity-100 group-hover:bg-opacity-60 transition-all duration-300">
                            <div class="text-center p-4">
                                <p class="text-white text-xl font-semibold mb-2">Tari Piring</p>
                                <p class="text-gray-200">Tarian tradisional yang menggunakan piring sebagai properti utama</p>
                            </div>
                        </div>
                    </div>
                    <!-- Image 3 -->
                    <div class="relative group rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <img src="{{asset('homepage/img/rendang.jpg')}}" alt="Rendang" class="w-full h-64 object-cover object-center transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black bg-opacity-0 flex items-center justify-center opacity-0 group-hover:opacity-100 group-hover:bg-opacity-60 transition-all duration-300">
                            <div class="text-center p-4">
                                <p class="text-white text-xl font-semibold mb-2">Rendang</p>
                                <p class="text-gray-200">Makanan tradisional yang telah diakui sebagai salah satu makanan terenak di dunia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-[#2d5016] text-white py-12 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-full h-full minang-pattern"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mt-8 pt-6 border-t border-gray-700">
                <p class="text-sm text-gray-300">&copy; 2025 Platform Budaya Minangkabau. Semua Hak Dilindungi.</p>
                <p class="text-xs text-gray-400 mt-1">Dikembangkan dengan ❤️ untuk melestarikan budaya Minangkabau</p>
            </div>
        </div>
    </footer>

    <!-- Video Modal -->
    <div id="videoModal" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-[1000] hidden transition-opacity duration-300">
        <div class="bg-gray-800 rounded-lg overflow-hidden w-11/12 md:w-2/3 lg:w-1/2 relative transform scale-95 transition-transform duration-300">
            <button id="close-modal-btn" class="absolute -top-10 right-0 text-white text-3xl hover:text-gray-400 transition-colors z-10">&times;</button>
            <div class="relative w-full" style="padding-top: 56.25%;">
                <iframe id="youtubeVideo" class="absolute inset-0 w-full h-full" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button -->
    <button id="scroll-to-top" class="fixed bottom-6 right-6 p-3 bg-[#2d5016] text-white rounded-full shadow-lg hover:bg-[#3a602d] transition-all duration-300 z-50 hidden transform hover:scale-110">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Modal and video functionality
        const videoModal = document.getElementById('videoModal');
        const watchVideoBtn = document.getElementById('watch-video-btn');
        const closeModalBtn = document.getElementById('close-modal-btn');
        const youtubeVideo = document.getElementById('youtubeVideo');

        watchVideoBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const videoUrl = watchVideoBtn.getAttribute('data-video');
            youtubeVideo.src = videoUrl + "?autoplay=1";
            videoModal.classList.remove('hidden');
            setTimeout(() => {
                videoModal.querySelector('div').classList.remove('scale-95');
                videoModal.querySelector('div').classList.add('scale-100');
            }, 10);
        });

        closeModalBtn.addEventListener('click', () => {
            videoModal.querySelector('div').classList.remove('scale-100');
            videoModal.querySelector('div').classList.add('scale-95');
            setTimeout(() => {
                youtubeVideo.src = "";
                videoModal.classList.add('hidden');
            }, 300);
        });

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

        // Mobile menu toggle functionality
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('-translate-y-full');
        });

        document.querySelectorAll('#mobile-menu a').forEach(item => {
            item.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.add('-translate-y-full');
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

        // Add slight delay to hero elements for staggered animation
        document.querySelectorAll('.fade-in').forEach((el, index) => {
            el.style.transitionDelay = `${index * 0.2}s`;
        });
    </script>
</body>
</html>