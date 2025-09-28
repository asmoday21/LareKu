@extends('siswa.siswa_master')
@section('siswa')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kearifan Lokal Minangkabau</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            color: #E0E0E0;
            /* Latar belakang gradien yang lebih kaya */
            background-image: linear-gradient(to bottom right, #1a202c, #2d3748);
        }
        .prose h1, .prose h2, .prose h3 {
            color: #FBBF24;
        }
    </style>
</head>
<body class="antialiased">
    <div class="container mx-auto p-6 md:p-12">
        <!-- Bagian Header -->
        <header class="text-center mb-12">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-yellow-400 mb-2">Kearifan Lokal Minangkabau</h1>
            <p class="text-lg md:text-xl text-gray-400">Jelajahi kekayaan budaya dan tradisi yang telah diwariskan secara turun-temurun.</p>
        </header>

        <!-- Video dan Narasi -->
        <main class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center">
            <!-- Kontainer Video -->
            <div class="bg-gray-800 rounded-2xl shadow-2xl overflow-hidden p-4 md:p-6 transform transition-transform duration-500 hover:scale-[1.02] hover:shadow-yellow-500/20">
                <div class="relative w-full aspect-video rounded-xl overflow-hidden">
                    <iframe 
                        id="minangVideo"
                        class="absolute inset-0 w-full h-full" 
                        src="https://www.youtube.com/embed/j_B2jC_QWc0?si=L43L3pW5RjN20f8L" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="mt-4 text-center">
                    <p class="text-sm md:text-base text-gray-400">Video animasi tentang budaya Minangkabau. Klik untuk menonton.</p>
                </div>
            </div>

            <!-- Kontainer Narasi -->
            <div class="bg-gray-800 rounded-2xl shadow-2xl p-6 md:p-10">
                <div class="prose max-w-none text-gray-300">
                    <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-yellow-400">Narasi Budaya</h2>
                    <p id="narration-text" class="text-lg leading-relaxed text-gray-300 transition-opacity duration-500 ease-in-out">
                        Budaya Minangkabau dikenal dengan falsafah "Adat Basandi Syarak, Syarak Basandi Kitabullah," yang berarti adat bersendikan pada agama, dan agama bersendikan pada Al-Qur'an.
                    </p>
                </div>
                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <button id="btn1" data-index="0" class="narration-btn bg-yellow-500 text-gray-900 font-semibold py-3 px-6 rounded-full shadow-lg hover:bg-yellow-400 transition-all duration-300 transform hover:scale-105">
                        Falsafah Hidup
                    </button>
                    <button id="btn2" data-index="1" class="narration-btn bg-gray-700 text-yellow-400 font-semibold py-3 px-6 rounded-full shadow-lg hover:bg-gray-600 transition-all duration-300 transform hover:scale-105">
                        Rumah Gadang
                    </button>
                    <button id="btn3" data-index="2" class="narration-btn bg-gray-700 text-yellow-400 font-semibold py-3 px-6 rounded-full shadow-lg hover:bg-gray-600 transition-all duration-300 transform hover:scale-105">
                        Seni & Tradisi
                    </button>
                </div>
            </div>
        </main>
    </div>

    <script>
        const narrationTextElement = document.getElementById('narration-text');
        const narrationButtons = document.querySelectorAll('.narration-btn');

        const narrations = [
            "Budaya Minangkabau dikenal dengan falsafah \"Adat Basandi Syarak, Syarak Basandi Kitabullah,\" yang berarti adat bersendikan pada agama, dan agama bersendikan pada Al-Qur'an.",
            "Rumah Gadang adalah rumah adat yang menjadi simbol kebesaran dan kekuatan budaya Minangkabau. Bentuk atapnya yang melengkung menyerupai tanduk kerbau mencerminkan identitas dan legenda masyarakatnya.",
            "Seni tradisi seperti Tari Piring, Tari Indang, dan Randai merupakan bagian tak terpisahkan dari kehidupan masyarakat. Pertunjukan ini bukan hanya hiburan, tetapi juga sarana menyampaikan pesan moral dan sejarah."
        ];

        narrationButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Hapus kelas aktif dari semua tombol
                narrationButtons.forEach(btn => {
                    btn.classList.remove('bg-yellow-500', 'text-gray-900', 'hover:bg-yellow-400');
                    btn.classList.add('bg-gray-700', 'text-yellow-400', 'hover:bg-gray-600');
                });

                // Tambahkan kelas aktif ke tombol yang diklik
                button.classList.remove('bg-gray-700', 'text-yellow-400', 'hover:bg-gray-600');
                button.classList.add('bg-yellow-500', 'text-gray-900', 'hover:bg-yellow-400');

                // Ubah teks narasi dengan transisi halus
                narrationTextElement.style.opacity = '0';
                setTimeout(() => {
                    const index = parseInt(button.dataset.index);
                    narrationTextElement.textContent = narrations[index];
                    narrationTextElement.style.opacity = '1';
                }, 300); // Tunggu sampai transisi fade-out selesai
            });
        });
    </script>
</body>
</html>
@endsection