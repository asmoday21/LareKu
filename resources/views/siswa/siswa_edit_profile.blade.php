@extends('siswa.siswa_master')

@section('siswa')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil Siswa</title>
    
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
            --accent-purple: #7c3aed;
            --text-primary: #1e293b;
            --text-secondary: #64748b;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f0f4ff 0%, #e8edf5 100%);
            min-height: 100vh;
        }

        /* Full Width Container */
        .edit-profile-wrapper {
            min-height: 100vh;
            padding: 1.5rem;
            display: flex;
            align-items: flex-start;
            justify-content: center;
        }

        /* Glass Card - Full Width */
        .glass-card {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            border-radius: 24px;
            overflow: hidden;
            width: 100%;
            max-width: 1400px;
        }

        /* Header Gradient */
        .header-gradient {
            background: linear-gradient(135deg, #1a56db 0%, #7c3aed 100%);
            position: relative;
            overflow: hidden;
            padding: 1.5rem 2rem;
        }

        .header-gradient::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 60%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
            pointer-events: none;
        }

        /* Profile Image Upload */
        .avatar-wrapper {
            position: relative;
            width: 120px;
            height: 120px;
            flex-shrink: 0;
        }

        .avatar-ring {
            position: absolute;
            inset: -3px;
            border-radius: 50%;
            padding: 3px;
            background: conic-gradient(from 0deg, #60a5fa, #a855f7, #60a5fa);
            -webkit-mask: radial-gradient(farthest-side, transparent calc(100% - 3px), #fff calc(100% - 2px));
            mask: radial-gradient(farthest-side, transparent calc(100% - 3px), #fff calc(100% - 2px));
            animation: spin 4s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        .avatar-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            position: relative;
            z-index: 1;
        }

        .avatar-overlay {
            position: absolute;
            inset: 0;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
            cursor: pointer;
            z-index: 2;
            color: white;
            gap: 4px;
        }

        .avatar-wrapper:hover .avatar-overlay {
            opacity: 1;
        }

        .avatar-overlay i {
            font-size: 1.5rem;
        }

        .avatar-overlay span {
            font-size: 0.65rem;
            font-weight: 500;
        }

        /* Input Field */
        .input-group-custom {
            position: relative;
        }

        .input-group-custom .input-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            pointer-events: none;
        }

        .input-group-custom .form-input {
            width: 100%;
            padding: 0.75rem 1rem 0.75rem 2.8rem;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 0.95rem;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s ease;
            background: white;
            color: var(--text-primary);
        }

        .input-group-custom .form-input:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 4px rgba(26, 86, 219, 0.1);
        }

        .input-group-custom .form-input.is-invalid {
            border-color: #ef4444;
        }

        .input-group-custom .form-input:focus ~ .input-icon {
            color: var(--primary-blue);
        }

        .input-group-custom .form-input:disabled {
            background: #f1f5f9;
            cursor: not-allowed;
        }

        /* Error Message */
        .error-text {
            color: #ef4444;
            font-size: 0.8rem;
            margin-top: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        /* Buttons */
        .btn-primary-gradient {
            background: linear-gradient(135deg, #1a56db 0%, #7c3aed 100%);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.95rem;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(26, 86, 219, 0.3);
        }

        .btn-primary-gradient:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
        }

        .btn-outline {
            background: transparent;
            color: var(--text-secondary);
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.95rem;
            border: 2px solid #e2e8f0;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }

        .btn-outline:hover {
            background: #f8fafc;
            border-color: #cbd5e0;
            transform: translateY(-2px);
        }

        .btn-remove {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-size: 0.8rem;
            font-weight: 500;
            border: 1px solid rgba(239, 68, 68, 0.2);
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
        }

        .btn-remove:hover {
            background: rgba(239, 68, 68, 0.2);
        }

        /* Success Alert */
        .alert-success-custom {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(16, 185, 129, 0.05));
            border: 1px solid rgba(16, 185, 129, 0.2);
            border-radius: 12px;
            padding: 1rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .alert-success-custom i {
            color: #10b981;
            font-size: 1.25rem;
        }

        /* Hide file input */
        #profileImage {
            display: none;
        }

        /* Form Body */
        .form-body {
            padding: 2rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .edit-profile-wrapper {
                padding: 0.75rem;
            }
            
            .header-gradient {
                padding: 1.25rem 1.5rem;
            }
            
            .form-body {
                padding: 1.25rem;
            }
            
            .avatar-wrapper {
                width: 100px;
                height: 100px;
            }
        }

        @media (max-width: 640px) {
            .edit-profile-wrapper {
                padding: 0.5rem;
            }
            
            .header-gradient {
                padding: 1rem 1.25rem;
            }
            
            .form-body {
                padding: 1rem;
            }
            
            .glass-card {
                border-radius: 16px;
            }
        }
    </style>
</head>
<body>

<div class="edit-profile-wrapper">
    <div class="glass-card" data-aos="fade-up" data-aos-duration="600">
        
        <!-- Header -->
        <div class="header-gradient text-white">
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-white/20 backdrop-blur flex items-center justify-center flex-shrink-0">
                    <i class="mdi mdi-account-edit text-2xl"></i>
                </div>
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-extrabold tracking-tight">Edit Profil</h3>
                    <p class="text-white/80 text-sm">Perbarui informasi pribadi Anda</p>
                </div>
                <div class="text-white/60 text-xs hidden md:block">
                    <i class="mdi mdi-information-outline"></i>
                    Pastikan data akurat
                </div>
            </div>
        </div>

        <!-- Body -->
        <div class="form-body">
            
            <!-- Success Alert -->
            @if(session('success'))
                <div class="alert-success-custom mb-6" data-aos="fade-down">
                    <i class="mdi mdi-check-circle"></i>
                    <div class="flex-1">
                        <div class="font-semibold text-green-700 text-sm">Berhasil!</div>
                        <div class="text-green-600 text-sm">{{ session('success') }}</div>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-green-400 hover:text-green-600 transition text-xl leading-none">
                        <i class="mdi mdi-close"></i>
                    </button>
                </div>
            @endif

            <form id="profileForm" action="{{ route('siswa.store_profile') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Profile Image -->
                <div class="mb-8">
                    <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-4 mb-4">
                        <div class="flex items-center gap-2">
                            <i class="mdi mdi-image text-blue-600 text-lg"></i>
                            <h6 class="font-bold text-slate-800 text-sm">Foto Profil</h6>
                        </div>
                        <span class="text-xs text-slate-400">• Format: JPG, PNG • Maks: 2MB • Rasio 1:1</span>
                    </div>
                    
                    <div class="flex flex-col md:flex-row items-center gap-6">
                        <!-- Avatar -->
                        <div class="avatar-wrapper">
                            <div class="avatar-ring"></div>
                            <img src="{{ $editData->profile_image ? asset('upload/siswa_images/' . $editData->profile_image) : asset('upload/default_profile.jpg') }}" 
                                 onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name='+encodeURIComponent('{{ $editData->name ?? 'Siswa' }}')+'&background=1a56db&color=fff&size=120';"
                                 alt="Profile" 
                                 class="avatar-img"
                                 id="avatarPreview">
                            <label for="profileImage" class="avatar-overlay">
                                <i class="mdi mdi-camera"></i>
                                <span>Ubah Foto</span>
                            </label>
                        </div>

                        <!-- Controls -->
                        <div class="flex-1 flex flex-wrap items-center gap-3 w-full">
                            <input type="file" 
                                   name="profile_image" 
                                   id="profileImage" 
                                   accept=".jpg,.jpeg,.png"
                                   onchange="previewImage(event)">
                            
                            <label for="profileImage" class="btn-primary-gradient text-sm px-4 py-2.5 cursor-pointer">
                                <i class="mdi mdi-cloud-upload"></i>
                                Pilih Foto
                            </label>
                            
                            @if($editData->profile_image)
                                <button type="button" class="btn-remove" onclick="removeImage()">
                                    <i class="mdi mdi-delete"></i>
                                    Hapus
                                </button>
                            @endif

                            <span class="text-xs text-slate-400 ml-auto hidden sm:inline">Klik avatar untuk mengubah</span>
                        </div>
                    </div>

                    @error('profile_image')
                        <div class="error-text mt-2">
                            <i class="mdi mdi-alert-circle"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Form Fields - Full Width Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <!-- Nama - Full Width -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-slate-700 mb-1.5">
                            <i class="mdi mdi-account text-blue-600 mr-1"></i>
                            Nama Lengkap
                            <span class="text-red-500">*</span>
                        </label>
                        <div class="input-group-custom">
                            <i class="mdi mdi-account-circle input-icon"></i>
                            <input type="text" 
                                   name="name" 
                                   id="name"
                                   class="form-input @error('name') is-invalid @enderror" 
                                   value="{{ old('name', $editData->name) }}" 
                                   placeholder="Masukkan nama lengkap"
                                   required>
                        </div>
                        @error('name')
                            <div class="error-text"><i class="mdi mdi-alert-circle"></i> {{ $message }}</div>
                        @enderror
                    </div>

                    <!-- NIS -->
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1.5">
                            <i class="mdi mdi-card-account-details text-blue-600 mr-1"></i>
                            NIS
                            <span class="text-red-500">*</span>
                        </label>
                        <div class="input-group-custom">
                            <i class="mdi mdi-id-card input-icon"></i>
                            <input type="text" 
                                   name="nis" 
                                   id="nis"
                                   class="form-input @error('nis') is-invalid @enderror" 
                                   value="{{ old('nis', $editData->nis) }}" 
                                   placeholder="Nomor Induk Siswa"
                                   required>
                        </div>
                        @error('nis')
                            <div class="error-text"><i class="mdi mdi-alert-circle"></i> {{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1.5">
                            <i class="mdi mdi-email text-blue-600 mr-1"></i>
                            Alamat Email
                            <span class="text-red-500">*</span>
                        </label>
                        <div class="input-group-custom">
                            <i class="mdi mdi-email-outline input-icon"></i>
                            <input type="email" 
                                   name="email" 
                                   id="email"
                                   class="form-input @error('email') is-invalid @enderror" 
                                   value="{{ old('email', $editData->email) }}" 
                                   placeholder="contoh@email.com"
                                   required>
                        </div>
                        @error('email')
                            <div class="error-text"><i class="mdi mdi-alert-circle"></i> {{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password - Optional -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-slate-700 mb-1.5">
                            <i class="mdi mdi-lock text-blue-600 mr-1"></i>
                            Password Baru
                            <span class="text-xs font-normal text-slate-400">(Opsional - kosongkan jika tidak diubah)</span>
                        </label>
                        <div class="input-group-custom">
                            <i class="mdi mdi-lock-outline input-icon"></i>
                            <input type="password" 
                                   name="password" 
                                   id="password"
                                   class="form-input @error('password') is-invalid @enderror" 
                                   placeholder="Masukkan password baru (min 8 karakter)"
                                   autocomplete="new-password">
                        </div>
                        @error('password')
                            <div class="error-text"><i class="mdi mdi-alert-circle"></i> {{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Actions -->
                <div class="mt-8 pt-6 border-t border-slate-200 flex flex-col sm:flex-row justify-between items-center gap-4">
                    <a href="{{ route('siswa.siswa_profile') }}" class="btn-outline text-sm w-full sm:w-auto justify-center">
                        <i class="mdi mdi-arrow-left"></i>
                        Kembali ke Profil
                    </a>
                    
                    <div class="flex flex-wrap gap-3 w-full sm:w-auto">
                        <button type="button" class="btn-outline text-sm flex-1 sm:flex-none justify-center" onclick="previewChanges()">
                            <i class="mdi mdi-eye"></i>
                            Preview
                        </button>
                        
                        <button type="submit" class="btn-primary-gradient text-sm flex-1 sm:flex-none justify-center" id="submitBtn">
                            <span class="flex items-center gap-2" id="btnContent">
                                <i class="mdi mdi-content-save"></i>
                                Simpan Perubahan
                            </span>
                            <span class="flex items-center gap-2 hidden" id="btnLoading">
                                <i class="mdi mdi-loading mdi-spin"></i>
                                Menyimpan...
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Preview Modal -->
<div id="previewModal" class="fixed inset-0 z-50 flex items-center justify-center px-4" style="display:none;">
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm" onclick="closePreview()"></div>
    <div class="relative bg-white rounded-2xl max-w-sm w-full p-6 shadow-2xl" data-aos="zoom-in">
        <div class="text-center">
            <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-blue-200 mx-auto mb-4">
                <img id="modalAvatar" src="" alt="Preview" class="w-full h-full object-cover">
            </div>
            <h5 id="modalName" class="font-bold text-slate-800 text-lg">-</h5>
            <p id="modalNis" class="text-slate-500 text-sm">NIS: -</p>
            <p id="modalEmail" class="text-slate-500 text-sm">-</p>
        </div>
        <div class="flex gap-3 mt-6">
            <button onclick="closePreview()" class="btn-outline flex-1 justify-center text-sm">
                <i class="mdi mdi-close"></i>
                Tutup
            </button>
            <button onclick="submitForm()" class="btn-primary-gradient flex-1 justify-center text-sm">
                <i class="mdi mdi-content-save"></i>
                Simpan
            </button>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 600, once: true, easing: 'ease-out-cubic' });

    // Image Preview
    function previewImage(event) {
        const file = event.target.files[0];
        if (!file) return;
        
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('avatarPreview').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }

    // Remove Image
    function removeImage() {
        if (!confirm('Hapus foto profil?')) return;
        
        const input = document.getElementById('profileImage');
        input.value = '';
        document.getElementById('avatarPreview').src = "{{ asset('upload/default_profile.jpg') }}";
        
        // Sembunyikan tombol hapus
        const btn = document.querySelector('.btn-remove');
        if (btn) btn.style.display = 'none';
    }

    // Preview Changes
    function previewChanges() {
        const name = document.getElementById('name').value || 'Nama belum diisi';
        const nis = document.getElementById('nis').value || '-';
        const email = document.getElementById('email').value || '-';
        const avatar = document.getElementById('avatarPreview').src;
        
        document.getElementById('modalAvatar').src = avatar;
        document.getElementById('modalName').textContent = name;
        document.getElementById('modalNis').textContent = 'NIS: ' + nis;
        document.getElementById('modalEmail').textContent = email;
        
        document.getElementById('previewModal').style.display = 'flex';
    }

    function closePreview() {
        document.getElementById('previewModal').style.display = 'none';
    }

    function submitForm() {
        closePreview();
        document.getElementById('profileForm').submit();
    }

    // Form Submit Loading
    document.getElementById('profileForm').addEventListener('submit', function(e) {
        const btn = document.getElementById('submitBtn');
        const content = document.getElementById('btnContent');
        const loading = document.getElementById('btnLoading');
        
        content.classList.add('hidden');
        loading.classList.remove('hidden');
        btn.disabled = true;
    });

    // Auto-close alert after 5s
    document.querySelectorAll('.alert-success-custom').forEach(el => {
        setTimeout(() => {
            el.style.transition = 'all 0.5s ease';
            el.style.opacity = '0';
            el.style.transform = 'translateY(-10px)';
            setTimeout(() => el.remove(), 500);
        }, 5000);
    });

    // Close modal on ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closePreview();
    });

    // Close modal on outside click
    document.getElementById('previewModal').addEventListener('click', function(e) {
        if (e.target === this) closePreview();
    });
</script>

</body>
</html>
@endsection