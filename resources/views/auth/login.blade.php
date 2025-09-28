<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <title>Login - NetPedia</title>
    
    <!-- Favicons -->
    <link href="{{ asset('admin2/assets/img/NetPedia.png') }}" rel="icon">
    <link href="{{ asset('admin2/assets/img/NetPedia.png') }}" rel="apple-touch-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin2/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin2/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin2/assets/css/style.css') }}" rel="stylesheet">
    
    <style>
        :root {
            --primary: #d4a574; /* Emas Minang */
            --primary-dark: #b8956a;
            --secondary: #2d5016; /* Hijau Daun Sirih */
            --accent: #1e3a5f; /* Biru Laut Minang */
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --dark: #0f172a;
            --light: #f8fafc;
            --white: #ffffff;
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-400: #9ca3af;
            --gray-500: #6b7280;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --gray-800: #1f2937;
            --gray-900: #111827;
            
            /* Minangkabau inspired colors */
            --minang-gold: #d4a574;
            --minang-green: #2d5016;
            --minang-teal: #0d9488;
            --minang-navy: #1e3a5f;
            --songket-pattern: linear-gradient(45deg, #d4a574 25%, transparent 25%), 
                               linear-gradient(-45deg, #d4a574 25%, transparent 25%), 
                               linear-gradient(45deg, transparent 75%, #d4a574 75%), 
                               linear-gradient(-45deg, transparent 75%, #d4a574 75%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(135deg, var(--minang-navy) 0%, var(--minang-teal) 50%, var(--minang-green) 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Animated Background with Minangkabau motifs */
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
            background: rgba(212, 165, 116, 0.1);
            animation: float 8s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
            background: rgba(212, 165, 116, 0.15);
        }

        .shape:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 20%;
            right: 10%;
            animation-delay: 2s;
            background: rgba(45, 80, 22, 0.1);
        }

        .shape:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 30%;
            left: 15%;
            animation-delay: 4s;
            background: rgba(13, 148, 136, 0.12);
        }

        .shape:nth-child(4) {
            width: 100px;
            height: 100px;
            bottom: 10%;
            right: 20%;
            animation-delay: 1s;
            background: rgba(212, 165, 116, 0.08);
        }

        .shape:nth-child(5) {
            width: 40px;
            height: 40px;
            top: 50%;
            left: 5%;
            animation-delay: 3s;
            background: rgba(30, 58, 95, 0.15);
        }

        /* Adding traditional patterns */
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

        /* Traditional ornamental border */
        .ornamental-border {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
            background-image: 
                radial-gradient(circle at 20px 20px, var(--minang-gold) 2px, transparent 2px),
                radial-gradient(circle at 80px 80px, var(--minang-gold) 1px, transparent 1px);
            background-size: 100px 100px, 160px 160px;
            opacity: 0.1;
            animation: patternMove 15s linear infinite;
        }

        @keyframes patternMove {
            0% { background-position: 0 0, 0 0; }
            100% { background-position: 100px 100px, 160px 160px; }
        }

        /* Main Container */
        .main-container {
            position: relative;
            z-index: 1;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        /* Login Card with traditional styling */
        .login-wrapper {
            width: 100%;
            max-width: 1000px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: var(--white);
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 
                0 25px 50px -12px rgba(0, 0, 0, 0.25),
                0 0 0 1px rgba(212, 165, 116, 0.1);
            backdrop-filter: blur(16px);
            border: 2px solid rgba(212, 165, 116, 0.2);
            position: relative;
        }

        .login-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--minang-gold), var(--minang-teal), var(--minang-green), var(--minang-gold));
            background-size: 200% 100%;
            animation: borderGlow 3s ease-in-out infinite;
        }

        @keyframes borderGlow {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        /* Left Side - Illustration with Minangkabau elements */
        .login-illustration {
            background: linear-gradient(135deg, var(--minang-navy) 0%, var(--minang-teal) 50%, var(--minang-green) 100%);
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
                radial-gradient(circle at 30% 40%, rgba(212, 165, 116, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 70% 60%, rgba(13, 148, 136, 0.08) 0%, transparent 50%);
            animation: rotate 25s linear infinite;
        }

        .login-illustration::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            right: 0;
            height: 60px;
            background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0,40 Q100,0 200,20 T400,40 L400,40 L0,40 Z' fill='rgba(212,165,116,0.2)'/%3E%3C/svg%3E") repeat-x;
            background-size: 400px 40px;
            animation: wave 4s ease-in-out infinite;
        }

        @keyframes wave {
            0%, 100% { transform: translateX(0); }
            50% { transform: translateX(-200px); }
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
            width: 120px;
            height: 120px;
            background: rgba(212, 165, 116, 0.2);
            border-radius: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(212, 165, 116, 0.3);
            position: relative;
            overflow: hidden;
        }

        .illustration-icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--songket-pattern);
            background-size: 8px 8px;
            opacity: 0.1;
        }

        .illustration-icon svg {
            width: 60px;
            height: 60px;
            color: var(--white);
            position: relative;
            z-index: 2;
        }

        .illustration-title {
            font-size: 2rem;
            font-weight: 800;
            color: var(--white);
            margin-bottom: 1rem;
            line-height: 1.2;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .illustration-text {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
            max-width: 300px;
        }

        /* Traditional ornamental elements */
        .ornament {
            position: absolute;
            color: rgba(212, 165, 116, 0.2);
            font-size: 2rem;
            animation: pulse 3s ease-in-out infinite;
        }

        .ornament:nth-child(1) {
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .ornament:nth-child(2) {
            top: 15%;
            right: 15%;
            animation-delay: 1s;
        }

        .ornament:nth-child(3) {
            bottom: 20%;
            left: 20%;
            animation-delay: 2s;
        }

        @keyframes pulse {
            0%, 100% { opacity: 0.2; transform: scale(1); }
            50% { opacity: 0.4; transform: scale(1.1); }
        }

        /* Right Side - Form with traditional touches */
        .login-form-section {
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: linear-gradient(145deg, #ffffff 0%, #fefefe 100%);
            position: relative;
        }

        .login-form-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: var(--songket-pattern);
            background-size: 4px 4px;
            opacity: 0.05;
            border-radius: 0 28px 0 100px;
        }

        .brand-section {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
            position: relative;
        }

        .brand-logo {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(212, 165, 116, 0.3);
            border: 2px solid var(--minang-gold);
        }

        .brand-name {
            font-size: 1.75rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--minang-gold), var(--minang-teal));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
        }

        .brand-name::after {
            content: '✦';
            position: absolute;
            right: -20px;
            top: -5px;
            color: var(--minang-gold);
            font-size: 1rem;
            animation: sparkle 2s ease-in-out infinite;
        }

        @keyframes sparkle {
            0%, 100% { opacity: 0.5; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.2); }
        }

        .form-header {
            margin-bottom: 2rem;
            position: relative;
        }

        .form-title {
            font-size: 1.875rem;
            font-weight: 700;
            color: var(--minang-navy);
            margin-bottom: 0.5rem;
            position: relative;
        }

        .form-title::before {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--minang-gold), var(--minang-teal));
            border-radius: 2px;
        }

        .form-subtitle {
            color: var(--gray-600);
            font-size: 1rem;
            font-weight: 400;
        }

        /* Form Styling with traditional elements */
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--minang-navy);
            margin-bottom: 0.5rem;
        }

        .input-wrapper {
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 1rem 1.25rem;
            border: 2px solid var(--gray-200);
            border-radius: 16px;
            font-size: 1rem;
            font-weight: 500;
            background: var(--gray-50);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            outline: none;
            position: relative;
        }

        .form-input:focus {
            border-color: var(--minang-gold);
            background: var(--white);
            box-shadow: 0 0 0 4px rgba(212, 165, 116, 0.1);
            transform: translateY(-1px);
        }

        .form-input::placeholder {
            color: var(--gray-400);
            font-weight: 400;
        }

        .password-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--gray-400);
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .password-toggle:hover {
            color: var(--minang-gold);
            background: rgba(212, 165, 116, 0.1);
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .checkbox-wrapper {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .custom-checkbox {
            width: 20px;
            height: 20px;
            border: 2px solid var(--gray-300);
            border-radius: 6px;
            cursor: pointer;
            position: relative;
            transition: all 0.3s ease;
        }

        .custom-checkbox input {
            opacity: 0;
            position: absolute;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .custom-checkbox input:checked + .checkmark {
            background: var(--minang-gold);
            border-color: var(--minang-gold);
        }

        .custom-checkbox input:checked + .checkmark::after {
            display: block;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .checkmark::after {
            content: "";
            position: absolute;
            display: none;
            left: 6px;
            top: 2px;
            width: 6px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .checkbox-label {
            font-size: 0.875rem;
            color: var(--gray-600);
            cursor: pointer;
        }

        .forgot-link {
            color: var(--minang-teal);
            font-size: 0.875rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .forgot-link:hover {
            color: var(--minang-green);
            text-decoration: underline;
        }

        /* Traditional inspired button */
        .login-button {
            width: 100%;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, var(--minang-gold), var(--minang-teal));
            color: var(--white);
            border: none;
            border-radius: 16px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            margin-bottom: 1.5rem;
            box-shadow: 0 8px 20px rgba(212, 165, 116, 0.3);
        }

        .login-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .login-button::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--songket-pattern);
            background-size: 6px 6px;
            opacity: 0.1;
        }

        .login-button:hover::before {
            left: 100%;
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 40px rgba(212, 165, 116, 0.4);
            background: linear-gradient(135deg, var(--minang-teal), var(--minang-gold));
        }

        .login-button:active {
            transform: translateY(0);
        }

        .register-text {
            text-align: center;
            color: var(--gray-600);
            font-size: 0.875rem;
        }

        .register-link {
            color: var(--minang-gold);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .register-link:hover {
            color: var(--minang-teal);
            text-decoration: underline;
        }

        .error-message {
            color: var(--danger);
            font-size: 0.8125rem;
            margin-top: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.25rem;
            font-weight: 500;
        }

        .credits {
            position: absolute;
            bottom: 1rem;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            font-size: 0.8125rem;
            color: rgba(255, 255, 255, 0.8);
            z-index: 10;
            background: rgba(0, 0, 0, 0.1);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .credits a {
            color: var(--minang-gold);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .credits a:hover {
            color: var(--white);
            text-decoration: underline;
        }

        /* Traditional pattern decorations */
        .traditional-pattern {
            position: absolute;
            width: 60px;
            height: 60px;
            background: var(--songket-pattern);
            background-size: 4px 4px;
            opacity: 0.1;
            border-radius: 50%;
        }

        .pattern-1 {
            top: 20px;
            right: 20px;
            animation: rotatePattern 10s linear infinite;
        }

        .pattern-2 {
            bottom: 20px;
            left: 20px;
            animation: rotatePattern 15s linear infinite reverse;
        }

        @keyframes rotatePattern {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            .login-wrapper {
                grid-template-columns: 1fr;
                max-width: 500px;
            }
            
            .login-illustration {
                display: none;
            }
        }

        @media (max-width: 640px) {
            .main-container {
                padding: 1rem;
            }
            
            .login-wrapper {
                border-radius: 24px;
                margin: 0;
            }
            
            .login-form-section {
                padding: 2rem 1.5rem;
            }
            
            .form-title {
                font-size: 1.5rem;
            }
            
            .illustration-title {
                font-size: 1.75rem;
            }
            
            .form-input {
                padding: 0.875rem 1rem;
                font-size: 16px; /* Prevent zoom on iOS */
            }
        }

        @media (max-width: 480px) {
            .login-form-section {
                padding: 1.5rem 1rem;
            }
            
            .brand-name {
                font-size: 1.5rem;
            }
            
            .brand-logo {
                width: 40px;
                height: 40px;
            }
        }

        /* Animation for form elements */
        .form-group {
            animation: slideInUp 0.6s ease-out forwards;
            opacity: 0;
            transform: translateY(30px);
        }

        .form-group:nth-child(1) { animation-delay: 0.1s; }
        .form-group:nth-child(2) { animation-delay: 0.2s; }
        .form-group:nth-child(3) { animation-delay: 0.3s; }
        .form-group:nth-child(4) { animation-delay: 0.4s; }
        .form-group:nth-child(5) { animation-delay: 0.5s; }

        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-wrapper {
            animation: scaleIn 0.5s cubic-bezier(0.4, 0, 0.2, 1) forwards;
            opacity: 0;
            transform: scale(0.9);
        }

        @keyframes scaleIn {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Success state styling */
        .form-input.is-valid {
            border-color: var(--success) !important;
            box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.1) !important;
        }

        .form-input.is-invalid {
            border-color: var(--danger) !important;
            box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.1) !important;
        }

        /* Minangkabau traditional motifs */
        .motif-decoration {
            position: absolute;
            width: 30px;
            height: 30px;
            background: radial-gradient(circle, var(--minang-gold) 30%, transparent 30%);
            background-size: 6px 6px;
            opacity: 0.1;
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .motif-1 {
            top: 10%;
            right: 5%;
            animation-delay: 0s;
        }

        .motif-2 {
            bottom: 15%;
            right: 10%;
            animation-delay: 2s;
        }

        .motif-3 {
            top: 30%;
            left: 5%;
            animation-delay: 4s;
        }
    </style>
</head>
<body>
    <div class="bg-animation">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="ornamental-border"></div>
    </div>

    <main>
        <div class="main-container">
            <div class="login-wrapper">
                <!-- Left Side - Illustration with Minangkabau theme -->
                <div class="login-illustration d-flex align-items-center justify-content-center">
                    <!-- Traditional ornaments -->
                    <div class="ornament" style="top: 10%; left: 10%;">◈</div>
                    <div class="ornament" style="top: 15%; right: 15%;">❋</div>
                    <div class="ornament" style="bottom: 20%; left: 20%;">✧</div>
                    
                    <div class="illustration-content text-center" style="width: 100%; max-width: 400px;">
                        <div class="illustration-icon mx-auto mb-3">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="width: 100%; height: 100%;">
                                <path d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/>
                            </svg>
                        </div>
                        <h2 class="illustration-title mb-2">Salamaik Datang di NetPedia</h2>
                        <p class="illustration-text mx-auto" style="max-width: 300px;">Platform pembelajaran digital nan menghubungkan Anda dengan pengetahuan tak terbatas, dibangun dengan nilai-nilai budaya Minangkabau</p>
                    </div>
                </div>

                <!-- Right Side - Form -->
                <div class="login-form-section">
                    <!-- Traditional motifs -->
                    <div class="motif-decoration motif-1"></div>
                    <div class="motif-decoration motif-2"></div>
                    <div class="motif-decoration motif-3"></div>
                    <div class="traditional-pattern pattern-1"></div>
                    <div class="traditional-pattern pattern-2"></div>

                    <div class="brand-section">
                        <img src="{{ asset('admin2/assets/img/logo.png') }}" alt="NetPedia" class="brand-logo">
                        <h1 class="brand-name">NetPedia</h1>
                    </div>

                    <div class="form-header">
                        <h2 class="form-title">Masuk ka Akun Awak</h2>
                        <p class="form-subtitle">Silakan masukkan detail Anda untuk melanjutkan perjalanan belajar</p>
                    </div>

                    <!-- Laravel Authentication Form -->
                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
                        @csrf
                        
                        <!-- Email -->
                        <div class="form-group">
                            <label for="email" class="form-label">Alamat Email</label>
                            <div class="input-wrapper">
                                <input type="email" id="email" class="form-input {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Masukkan alamat email Anda">
                            </div>
                            @error('email')
                                <div class="error-message">
                                    <span>Email atau kata sandi yang Anda masukkan tidak sesuai</span>
                                </div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <div class="input-wrapper">
                                <input type="password" id="password" class="form-input {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required placeholder="Masukkan kata sandi Anda">
                                <button type="button" class="password-toggle" onclick="togglePassword()">
                                    <svg id="eye-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                </button>
                            </div>
                            @error('password')
                                <div class="error-message">
                                    <span>Kata sandi yang Anda masukkan salah</span>
                                </div>
                            @enderror
                        </div>
                        
                        <div class="form-options">
                            <!-- Remember Me -->
                            <div class="checkbox-wrapper">
                                <div class="custom-checkbox">
                                    <input type="checkbox" name="remember" id="remember_me">
                                    <span class="checkmark"></span>
                                </div>
                                <label class="checkbox-label" for="remember_me">Ingat saya</label>
                            </div>
{{--                             
                            @if (Route::has('password.request'))
                                <a class="forgot-link" href="{{ route('password.request') }}">Lupa kata sandi?</a>
                            @endif --}}
                        </div>
                        
                        <button class="login-button" type="submit">
                            <span style="position: relative; z-index: 3;">Masuk ka NetPedia</span>
                        </button>
                        
                        <div class="register-text">
                            Belum punya akun? <a href="{{ route('register')}}" class="register-link">Daftar sekarang</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    {{-- <div class="credits">
        Designed with ❤️ by <a href="https://www.instagram.com/ferjuprihamdani/">Ferju Prihamdani</a>
    </div> --}}

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = `
                    <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/>
                    <line x1="1" y1="1" x2="23" y2="23"/>
                `;
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                    <circle cx="12" cy="12" r="3"/>
                `;
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
                    this.style.borderColor = 'var(--minang-gold)';
                    this.style.boxShadow = '0 0 0 4px rgba(212, 165, 116, 0.1)';
                });

                // Add an immediate check on load if there are errors (from Laravel redirect)
                if (input.classList.contains('is-invalid')) {
                    input.style.borderColor = 'var(--danger)';
                    input.style.boxShadow = '0 0 0 4px rgba(239, 68, 68, 0.1)';
                }
            });

            // Add traditional touch: gentle animations on hover
            const loginButton = document.querySelector('.login-button');
            loginButton.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px) scale(1.02)';
            });
            
            loginButton.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });

            // Add subtle interactions for traditional elements
            const shapes = document.querySelectorAll('.shape');
            shapes.forEach((shape, index) => {
                shape.addEventListener('mouseenter', function() {
                    this.style.animationPlayState = 'paused';
                    this.style.opacity = '0.3';
                });
                
                shape.addEventListener('mouseleave', function() {
                    this.style.animationPlayState = 'running';
                    this.style.opacity = '0.7';
                });
            });
        });

        // Traditional welcome animation
        window.addEventListener('load', function() {
            setTimeout(() => {
                const illustration = document.querySelector('.illustration-content');
                illustration.style.animation = 'gentleBounce 2s ease-in-out';
            }, 1000);
        });

        // Add gentle bounce animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes gentleBounce {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-10px); }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>