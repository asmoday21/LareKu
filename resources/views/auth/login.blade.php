<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Budaya Minangkabau</title>
    
    <!-- Material Design Icons -->
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        :root {
            --primary-blue: #1a56db;
            --primary-blue-dark: #1e3a8a;
            --accent-purple: #7c3aed;
            --accent-teal: #0d9488;
            --bg-gradient-start: #f0f4ff;
            --bg-gradient-end: #e8edf5;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--bg-gradient-start) 0%, var(--bg-gradient-end) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            position: relative;
            overflow: hidden;
        }

        /* Animated Background */
        .bg-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(26, 86, 219, 0.05);
            animation: float 8s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 20%;
            right: 10%;
            animation-delay: 2s;
            background: rgba(124, 58, 237, 0.04);
        }

        .shape:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 30%;
            left: 15%;
            animation-delay: 4s;
            background: rgba(13, 148, 136, 0.04);
        }

        .shape:nth-child(4) {
            width: 100px;
            height: 100px;
            bottom: 10%;
            right: 20%;
            animation-delay: 1s;
            background: rgba(26, 86, 219, 0.03);
        }

        .shape:nth-child(5) {
            width: 40px;
            height: 40px;
            top: 50%;
            left: 5%;
            animation-delay: 3s;
            background: rgba(124, 58, 237, 0.05);
        }

        .shape:nth-child(even) {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        }

        .shape:nth-child(odd) {
            clip-path: polygon(50% 0%, 80% 10%, 100% 35%, 100% 70%, 80% 90%, 50% 100%, 20% 90%, 0% 70%, 0% 35%, 20% 10%);
            border-radius: 0;
        }

        @keyframes float {
            0%, 100% { 
                transform: translateY(0px) translateX(0px) rotate(0deg); 
                opacity: 0.7;
            }
            33% { 
                transform: translateY(-40px) translateX(15px) rotate(120deg); 
                opacity: 0.4;
            }
            66% { 
                transform: translateY(-15px) translateX(-15px) rotate(240deg); 
                opacity: 0.9;
            }
        }

        /* Main Container */
        .main-container {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 1000px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
        }

        .main-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-blue), var(--accent-purple), var(--accent-teal), var(--primary-blue));
            background-size: 200% 100%;
            animation: borderGlow 3s ease-in-out infinite;
        }

        @keyframes borderGlow {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        /* Left Side - Illustration */
        .login-illustration {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-blue-dark) 50%, var(--accent-purple) 100%);
            padding: 3rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .login-illustration::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: 
                radial-gradient(circle at 30% 40%, rgba(255,255,255,0.08) 0%, transparent 50%),
                radial-gradient(circle at 70% 60%, rgba(255,255,255,0.05) 0%, transparent 50%);
            animation: rotate 25s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .illustration-content {
            position: relative;
            z-index: 2;
        }

        .illustration-icon {
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.12);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            border: 2px solid rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
        }

        .illustration-icon i {
            font-size: 3rem;
            color: white;
        }

        .illustration-title {
            font-size: 2rem;
            font-weight: 800;
            color: white;
            margin-bottom: 0.75rem;
            line-height: 1.2;
        }

        .illustration-text {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.6;
            max-width: 300px;
            margin: 0 auto;
        }

        .illustration-features {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            margin-top: 1.5rem;
            text-align: left;
        }

        .illustration-features .feature-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: rgba(255, 255, 255, 0.85);
            font-size: 0.9rem;
        }

        .illustration-features .feature-item i {
            color: rgba(255, 255, 255, 0.6);
            font-size: 1.1rem;
        }

        /* Right Side - Form */
        .login-form-section {
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: rgba(255, 255, 255, 0.95);
            position: relative;
        }

        .brand-section {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 2rem;
        }

        .brand-logo {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-purple));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
        }

        .brand-name {
            font-size: 1.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-purple));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .form-header {
            margin-bottom: 2rem;
        }

        .form-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.25rem;
        }

        .form-subtitle {
            color: #64748b;
            font-size: 0.95rem;
        }

        /* Form Styling */
        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }

        .input-wrapper {
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem 1rem 0.75rem 2.8rem;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 0.95rem;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s ease;
            background: white;
            color: #1e293b;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 4px rgba(26, 86, 219, 0.08);
        }

        .form-input.is-invalid {
            border-color: #ef4444;
        }

        .form-input.is-valid {
            border-color: #10b981;
        }

        .input-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            pointer-events: none;
        }

        .form-input:focus ~ .input-icon {
            color: var(--primary-blue);
        }

        .password-toggle {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #94a3b8;
            cursor: pointer;
            padding: 0.25rem;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .password-toggle:hover {
            color: var(--primary-blue);
            background: rgba(26, 86, 219, 0.05);
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .checkbox-wrapper {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .checkbox-wrapper input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: var(--primary-blue);
            border-radius: 4px;
            cursor: pointer;
        }

        .checkbox-label {
            font-size: 0.85rem;
            color: #64748b;
            cursor: pointer;
        }

        .forgot-link {
            color: var(--primary-blue);
            font-size: 0.85rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .forgot-link:hover {
            color: var(--accent-purple);
            text-decoration: underline;
        }

        /* Login Button */
        .login-button {
            width: 100%;
            padding: 0.85rem 1.5rem;
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--accent-purple) 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(26, 86, 219, 0.25);
            position: relative;
            overflow: hidden;
        }

        .login-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.15), transparent);
            transition: left 0.5s;
        }

        .login-button:hover::before {
            left: 100%;
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(26, 86, 219, 0.35);
        }

        .login-button:active {
            transform: translateY(0);
        }

        .register-text {
            text-align: center;
            color: #64748b;
            font-size: 0.85rem;
            margin-top: 1.25rem;
        }

        .register-link {
            color: var(--primary-blue);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .register-link:hover {
            color: var(--accent-purple);
            text-decoration: underline;
        }

        .error-message {
            color: #ef4444;
            font-size: 0.8rem;
            margin-top: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        /* Animation */
        .main-container {
            animation: scaleIn 0.5s cubic-bezier(0.4, 0, 0.2, 1) forwards;
            opacity: 0;
            transform: scale(0.95);
        }

        @keyframes scaleIn {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .form-group {
            animation: slideInUp 0.5s ease-out forwards;
            opacity: 0;
            transform: translateY(20px);
        }

        .form-group:nth-child(1) { animation-delay: 0.1s; }
        .form-group:nth-child(2) { animation-delay: 0.2s; }

        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 968px) {
            .main-container {
                grid-template-columns: 1fr;
                max-width: 500px;
            }
            
            .login-illustration {
                display: none;
            }
        }

        @media (max-width: 640px) {
            body {
                padding: 0.5rem;
            }
            
            .main-container {
                border-radius: 20px;
                margin: 0;
            }
            
            .login-form-section {
                padding: 2rem 1.5rem;
            }
            
            .form-title {
                font-size: 1.5rem;
            }
            
            .form-input {
                padding: 0.7rem 1rem 0.7rem 2.6rem;
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .login-form-section {
                padding: 1.5rem 1rem;
            }
            
            .brand-name {
                font-size: 1.25rem;
            }
            
            .brand-logo {
                width: 38px;
                height: 38px;
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Animated Background -->
    <div class="bg-animation">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="main-container">
        <!-- Left Side - Illustration -->
        <div class="login-illustration">
            <div class="illustration-content">
                <div class="illustration-icon">
                    <i class="mdi mdi-school"></i>
                </div>
                <h2 class="illustration-title">Selamat Datang</h2>
                <p class="illustration-text">Platform pembelajaran budaya Minangkabau yang interaktif dan menyenangkan</p>
                
                <div class="illustration-features">
                    <div class="feature-item">
                        <i class="mdi mdi-check-circle"></i>
                        <span>Materi pembelajaran lengkap</span>
                    </div>
                    <div class="feature-item">
                        <i class="mdi mdi-check-circle"></i>
                        <span>Kearifan lokal Minangkabau</span>
                    </div>
                    <div class="feature-item">
                        <i class="mdi mdi-check-circle"></i>
                        <span>Belajar interaktif & menyenangkan</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side - Form -->
        <div class="login-form-section">
            <div class="brand-section">
                <div class="brand-logo">
                    <i class="mdi mdi-school"></i>
                </div>
                <span class="brand-name">Lareku</span>
            </div>

            <div class="form-header">
                <h2 class="form-title">Masuk ke Akun</h2>
                <p class="form-subtitle">Silakan masukkan email dan kata sandi Anda</p>
            </div>

            <!-- Laravel Authentication Form -->
            <form method="POST" action="{{ route('login') }}" novalidate>
                @csrf
                
                <!-- Email -->
                <div class="form-group">
                    <label for="email" class="form-label">Alamat Email</label>
                    <div class="input-wrapper">
                        <i class="mdi mdi-email-outline input-icon"></i>
                        <input type="email" 
                               id="email" 
                               class="form-input {{ $errors->has('email') ? 'is-invalid' : '' }}" 
                               name="email" 
                               value="{{ old('email') }}" 
                               required 
                               autofocus 
                               placeholder="contoh@email.com">
                    </div>
                    @error('email')
                        <div class="error-message">
                            <i class="mdi mdi-alert-circle"></i>
                            <span>Email atau kata sandi yang Anda masukkan tidak sesuai</span>
                        </div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <div class="input-wrapper">
                        <i class="mdi mdi-lock-outline input-icon"></i>
                        <input type="password" 
                               id="password" 
                               class="form-input {{ $errors->has('password') ? 'is-invalid' : '' }}" 
                               name="password" 
                               required 
                               placeholder="Masukkan kata sandi Anda">
                        <button type="button" class="password-toggle" onclick="togglePassword()">
                            <i id="eye-icon" class="mdi mdi-eye"></i>
                        </button>
                    </div>
                    @error('password')
                        <div class="error-message">
                            <i class="mdi mdi-alert-circle"></i>
                            <span>Kata sandi yang Anda masukkan salah</span>
                        </div>
                    @enderror
                </div>
                
                <!-- Options -->
                <div class="form-options">
                    <div class="checkbox-wrapper">
                        <input type="checkbox" name="remember" id="remember_me">
                        <label class="checkbox-label" for="remember_me">Ingat saya</label>
                    </div>
                    {{-- @if (Route::has('password.request'))
                        <a class="forgot-link" href="{{ route('password.request') }}">Lupa kata sandi?</a>
                    @endif --}}
                </div>
                
                <!-- Submit -->
                <button class="login-button" type="submit">
                    <i class="mdi mdi-login"></i>
                    Masuk
                </button>
                
                <div class="register-text">
                    Belum punya akun? <a href="{{ route('register') }}" class="register-link">Daftar sekarang</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.className = 'mdi mdi-eye-off';
            } else {
                passwordInput.type = 'password';
                eyeIcon.className = 'mdi mdi-eye';
            }
        }

        // Form validation enhancement
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const inputs = form.querySelectorAll('input[required]');
            
            inputs.forEach(input => {
                input.addEventListener('blur', function() {
                    if (this.value.trim() === '') {
                        this.classList.remove('is-valid');
                        this.classList.add('is-invalid');
                    } else if (!this.classList.contains('is-invalid')) {
                        this.classList.remove('is-invalid');
                        this.classList.add('is-valid');
                    }
                });
                
                input.addEventListener('focus', function() {
                    this.style.borderColor = 'var(--primary-blue)';
                    this.style.boxShadow = '0 0 0 4px rgba(26, 86, 219, 0.08)';
                });
            });
        });
    </script>
</body>
</html>