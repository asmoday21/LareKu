@extends('siswa.siswa_master')
@section('siswa')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa Profile</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        .profile-container {
            background: linear-gradient(135deg, #60a5fa 0%, #a855f7 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.1);
        }
        .detail-card {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
        .detail-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
        }
        .copy-btn {
            transition: all 0.2s ease-in-out;
        }
        .copy-btn:hover {
            transform: scale(1.1);
            color: #60a5fa;
        }
        .btn-action {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
        .btn-action:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- This is a simplified version of the profile page, removing excessive animations -->
    <div class="profile-container">
        <div class="w-full max-w-5xl mx-auto rounded-3xl overflow-hidden glass-effect">
            
            <!-- Hero Section -->
            <div class="relative p-8 text-white bg-gradient-to-br from-blue-500 to-purple-600">
                <div class="flex flex-col md:flex-row items-center md:items-start space-y-6 md:space-y-0 md:space-x-8">
                    <!-- Profile Image and Info -->
                    <div class="flex-shrink-0 text-center">
                        <div class="relative w-40 h-40 mx-auto rounded-full overflow-hidden border-4 border-white shadow-xl">
                            <!-- Backend functionality preserved here -->
                            <img src="{{ !empty(Auth::user()->profile_image) ? url('upload/siswa_images/' . Auth::user()->profile_image) : url('upload/default_profile.jpg') }}"
                                class="w-full h-full object-cover" alt="Foto Profil">
                            <div class="absolute bottom-2 right-2 w-8 h-8 bg-green-500 rounded-full border-2 border-white flex items-center justify-center text-white text-sm shadow-md">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <h2 class="mt-4 text-2xl font-bold">{{ Auth::user()->name }}</h2>
                        {{-- <span class="inline-flex items-center mt-2 px-3 py-1 bg-white bg-opacity-20 rounded-full text-xs font-semibold">
                            <i class="fas fa-graduation-cap mr-2"></i>
                            <span>Siswa Aktif</span>
                        </span> --}}
                        <div class="mt-4 flex justify-center space-x-6 text-sm">
                            <div class="text-center">
                                <div class="font-bold text-lg">{{ Auth::user()->created_at->diffInDays(now()) }}</div>
                                <div>Hari Bergabung</div>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Details Grid -->
                    <div class="w-full grid gap-4">
                        <div class="detail-card bg-white p-4 rounded-xl flex items-center space-x-4 shadow-sm">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center text-white text-xl flex-shrink-0">
                                <i class="fas fa-user-tag"></i>
                            </div>
                            <div class="flex-grow">
                                <div class="text-sm text-gray-500 font-medium">Nama Lengkap</div>
                                <div class="text-base font-semibold text-gray-800">{{ Auth::user()->name }}</div>
                            </div>
                            <div class="flex-shrink-0">
                                <i class="fas fa-copy text-gray-400 copy-btn cursor-pointer" data-copy="{{ Auth::user()->name }}"></i>
                            </div>
                        </div>

                        <div class="detail-card bg-white p-4 rounded-xl flex items-center space-x-4 shadow-sm">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center text-white text-xl flex-shrink-0">
                                <i class="fas fa-id-card"></i>
                            </div>
                            <div class="flex-grow">
                                <div class="text-sm text-gray-500 font-medium">Nomor Induk Siswa (NIS)</div>
                                <div class="text-base font-semibold text-gray-800">{{ Auth::user()->nis ?? '-' }}</div>
                            </div>
                            <div class="flex-shrink-0">
                                <i class="fas fa-copy text-gray-400 copy-btn cursor-pointer" data-copy="{{ Auth::user()->nis }}"></i>
                            </div>
                        </div>

                        <div class="detail-card bg-white p-4 rounded-xl flex items-center space-x-4 shadow-sm">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center text-white text-xl flex-shrink-0">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="flex-grow">
                                <div class="text-sm text-gray-500 font-medium">Email Address</div>
                                <div class="text-base font-semibold text-gray-800">{{ Auth::user()->email }}</div>
                            </div>
                            <div class="flex-shrink-0">
                                <i class="fas fa-copy text-gray-400 copy-btn cursor-pointer" data-copy="{{ Auth::user()->email }}"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Section -->
            <div class="p-6 bg-gray-50 rounded-b-3xl">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <div class="text-sm text-gray-500 flex items-center space-x-2">
                        <i class="fas fa-lightbulb"></i>
                        <span>Pastikan data profil Anda selalu terkini untuk pengalaman terbaik.</span>
                    </div>
                    <div class="flex space-x-4">
                        <button onclick="refreshProfile()" class="btn-action px-6 py-3 rounded-xl border border-gray-300 bg-white text-gray-800 font-medium flex items-center space-x-2">
                            <i class="fas fa-sync-alt"></i>
                            <span>Refresh</span>
                        </button>
                        <a href="{{ route('siswa.siswa_edit_profile') }}" class="btn-action px-6 py-3 rounded-xl bg-gradient-to-br from-blue-500 to-purple-600 text-white font-medium flex items-center space-x-2">
                            <i class="fas fa-edit"></i>
                            <span>Edit Profil</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Message Box for copy status -->
    <div id="status-message" class="fixed bottom-8 left-1/2 -translate-x-1/2 p-4 rounded-lg shadow-lg text-white bg-green-500 transition-opacity duration-300 opacity-0 hidden">
        Berhasil disalin!
    </div>

    <script>
        // Function to show the status message
        function showStatusMessage(message) {
            const messageBox = document.getElementById('status-message');
            messageBox.textContent = message;
            messageBox.classList.remove('hidden');
            messageBox.classList.add('opacity-100');

            setTimeout(() => {
                messageBox.classList.remove('opacity-100');
                messageBox.classList.add('opacity-0');
                messageBox.addEventListener('transitionend', () => {
                    messageBox.classList.add('hidden');
                }, { once: true });
            }, 2000);
        }

        // Copy to clipboard functionality
        document.querySelectorAll('.copy-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const textToCopy = this.getAttribute('data-copy');
                
                // Use a temporary textarea to handle copying
                const tempInput = document.createElement('textarea');
                tempInput.value = textToCopy;
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand('copy');
                document.body.removeChild(tempInput);

                showStatusMessage('Berhasil disalin!');

                // Visual feedback on the icon
                const originalIcon = btn.innerHTML;
                btn.innerHTML = '<i class="fas fa-check text-green-500"></i>';
                setTimeout(() => {
                    btn.innerHTML = originalIcon;
                }, 2000);
            });
        });

        // Refresh profile function
        function refreshProfile() {
            const refreshBtn = event.target.closest('.btn-action');
            const originalContent = refreshBtn.innerHTML;
            refreshBtn.innerHTML = '<i class="fas fa-spinner fa-spin text-gray-800 mr-2"></i><span class="text-gray-800">Refreshing...</span>';
            
            // This reloads the page to get the latest data from the backend
            setTimeout(() => {
                location.reload();
            }, 1000);
        }
    </script>
</body>
</html>
@endsection