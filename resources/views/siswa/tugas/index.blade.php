<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kearifan Lokal Minangkabau</title>
    
    <!-- Font Google Modern -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Merriweather:ital,wght@0,400;0,700;1,400&family=Nunito:wght@400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --bg-body: #F0F4FF;
            --bg-secondary: #FFFFFF;
            --bg-dark: #1a202c;
            --bg-dark-card: #2d3748;
            
            --text-primary: #1E1B4B;
            --text-secondary: #4B5563;
            --text-muted: #9CA3AF;
            --text-light: #E0E0E0;
            --text-gray-300: #D1D5DB;
            --text-gray-400: #9CA3AF;
            
            --color-brand: #4318FF;
            --color-brand-hover: #3311DB;
            --color-accent: #F59E0B;
            --color-gold: #FBBF24;
            --color-gold-dark: #D97706;
            --color-pink: #EC4899;
            --color-teal: #14B8A6;
            --color-coral: #FF7D54;
            --color-mint: #00E396;
            
            --surface-white: #FFFFFF;
            --surface-glass: rgba(255, 255, 255, 0.85);
            --border-color: #E5E7EB;
            
            --shadow-sm: 0 1px 3px rgba(67, 24, 255, 0.06);
            --shadow-md: 0 4px 20px rgba(67, 24, 255, 0.08);
            --shadow-lg: 0 10px 40px rgba(67, 24, 255, 0.12);
            --shadow-xl: 0 20px 60px rgba(67, 24, 255, 0.15);
            --shadow-soft: 0 18px 40px rgba(112, 144, 176, 0.12);
            --shadow-gold: 0 20px 40px rgba(245, 158, 11, 0.2);
            --shadow-dark: 0 20px 60px rgba(0, 0, 0, 0.3);
            
            --radius-sm: 12px;
            --radius-md: 20px;
            --radius-lg: 30px;
            --radius-xl: 40px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background: var(--bg-body);
            color: var(--text-primary);
            line-height: 1.8;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6, .navbar-brand, .widget-title, .topic-title {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            letter-spacing: -0.01em;
            color: var(--text-primary);
        }

        p, .content-text, li {
            font-family: 'Merriweather', serif;
            font-size: 1.05rem;
            color: var(--text-secondary);
            line-height: 1.8;
        }

        .app-container {
            max-width: 1320px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* ====== TOPBAR ====== */
        .topbar {
            background: var(--surface-glass);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(67, 24, 255, 0.08);
            padding: 0.75rem 0;
            position: sticky;
            top: 0;
            z-index: 1030;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.05);
        }

        .topbar-brand {
            font-family: 'Outfit', sans-serif;
            font-weight: 800;
            font-size: 1.35rem;
            color: var(--color-brand);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .topbar-brand i {
            font-size: 1.75rem;
            background: linear-gradient(135deg, var(--color-brand), var(--color-pink));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-back {
            background: var(--bg-body);
            border: 2px solid var(--border-color);
            padding: 0.5rem 1.25rem;
            border-radius: 50px;
            font-weight: 600;
            font-family: 'Outfit', sans-serif;
            font-size: 0.875rem;
            color: var(--text-secondary);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            white-space: nowrap;
        }

        .btn-back:hover {
            background: var(--color-brand);
            border-color: var(--color-brand);
            color: white;
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        /* ====== HEADER ====== */
        .page-header {
            background: linear-gradient(135deg, #4318FF 0%, #865CFF 50%, #EC4899 100%);
            padding: 5rem 0 4.5rem;
            position: relative;
            overflow: hidden;
            border-radius: 0 0 var(--radius-xl) var(--radius-xl);
            box-shadow: 0 20px 40px rgba(67, 24, 255, 0.2);
            margin-bottom: -2.5rem;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            border-radius: 50%;
            animation: float 20s ease-in-out infinite;
        }

        .page-header::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -5%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255, 125, 84, 0.2) 0%, transparent 70%);
            border-radius: 50%;
            animation: float 25s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(30px, -30px) scale(1.1); }
        }

        .header-content {
            position: relative;
            z-index: 2;
            color: white;
        }

        .header-content h1 {
            color: white;
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.15;
            margin-bottom: 1rem;
            text-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }

        .header-content .lead {
            font-family: 'Nunito', sans-serif;
            color: rgba(255,255,255,0.9);
            font-size: 1.2rem;
            max-width: 700px;
            line-height: 1.8;
        }

        .header-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.4rem 1.25rem;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 50px;
            font-family: 'Outfit', sans-serif;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: white;
            margin-bottom: 1.5rem;
        }

        .badge-tag-white {
            background: rgba(255,255,255,0.12);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.15);
            color: rgba(255,255,255,0.9);
            padding: 0.4rem 1rem;
            border-radius: var(--radius-sm);
            font-size: 0.85rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
        }

        /* ====== CONTENT WRAPPER ====== */
        .content-wrapper {
            padding-top: 5rem;
            padding-bottom: 6rem;
            position: relative;
            z-index: 5;
        }

        /* ====== CONTENT CARD ====== */
        .content-card {
            background: var(--surface-white);
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            box-shadow: var(--shadow-soft);
            margin-bottom: 2rem;
            border: 1px solid rgba(67, 24, 255, 0.04);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .content-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--color-brand), var(--color-accent), var(--color-pink));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .content-card:hover::before {
            opacity: 1;
        }

        .content-card:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(-4px);
        }

        .section-title {
            font-family: 'Outfit', sans-serif;
            font-size: 1.75rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            color: var(--text-primary);
            flex-wrap: wrap;
        }

        .icon-box {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: rgba(67, 24, 255, 0.1);
            color: var(--color-brand);
            border-radius: var(--radius-sm);
            font-size: 1.4rem;
            flex-shrink: 0;
        }

        /* ====== SECTION KEARIFAN LOKAL - DARK THEME ====== */
        .wisdom-section {
            background: linear-gradient(145deg, #1a202c, #2d3748);
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            margin-top: 2rem;
            border: 1px solid rgba(251, 191, 36, 0.1);
            box-shadow: var(--shadow-dark);
        }

        .wisdom-section .section-title {
            color: var(--color-gold);
        }

        .wisdom-section .section-title .icon-box {
            background: rgba(251, 191, 36, 0.15);
            color: var(--color-gold);
        }

        .wisdom-section p {
            color: var(--text-gray-300);
        }

        .wisdom-section .lead-text {
            color: var(--text-gray-400);
            font-family: 'Nunito', sans-serif;
        }

        /* ====== VIDEO & NARASI GRID ====== */
        .wisdom-video-card {
            background: rgba(255,255,255,0.05);
            border-radius: var(--radius-md);
            overflow: hidden;
            padding: 1.5rem;
            transition: all 0.4s ease;
            border: 1px solid rgba(251, 191, 36, 0.05);
            height: 100%;
        }

        .wisdom-video-card:hover {
            transform: scale(1.02);
            box-shadow: var(--shadow-gold);
            border-color: rgba(251, 191, 36, 0.2);
        }

        .wisdom-video-card .video-wrapper {
            border-radius: var(--radius-sm);
            overflow: hidden;
            background: #000;
        }

        .wisdom-narration-card {
            background: rgba(255,255,255,0.05);
            border-radius: var(--radius-md);
            padding: 2rem;
            border: 1px solid rgba(251, 191, 36, 0.05);
            height: 100%;
            transition: all 0.3s ease;
        }

        .wisdom-narration-card:hover {
            border-color: rgba(251, 191, 36, 0.2);
            box-shadow: var(--shadow-gold);
        }

        .wisdom-narration-card h5 {
            color: var(--color-gold);
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
        }

        .narration-text {
            color: var(--text-light);
            font-family: 'Merriweather', serif;
            line-height: 1.8;
            min-height: 80px;
            transition: opacity 0.5s ease-in-out;
        }

        .narration-btn {
            transition: all 0.3s ease;
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
            border: none;
            cursor: pointer;
            padding: 0.6rem 1.5rem;
            border-radius: 50px;
            font-size: 0.9rem;
        }

        .narration-btn:hover {
            transform: scale(1.05);
        }

        .narration-btn.active {
            background: var(--color-gold) !important;
            color: #1a202c !important;
            box-shadow: 0 8px 25px rgba(251, 191, 36, 0.3);
        }

        .narration-btn.inactive {
            background: rgba(255,255,255,0.08);
            color: var(--color-gold);
            border: 1px solid rgba(251, 191, 36, 0.15);
        }

        .narration-btn.inactive:hover {
            background: rgba(255,255,255,0.15);
            border-color: rgba(251, 191, 36, 0.3);
        }

        /* ====== WISDOM CARDS (INFO GRID) ====== */
        .wisdom-info-card {
            background: rgba(255,255,255,0.05);
            border-radius: var(--radius-md);
            padding: 1.5rem;
            text-align: center;
            border: 1px solid rgba(251, 191, 36, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }

        .wisdom-info-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-gold);
            border-color: rgba(251, 191, 36, 0.2);
            background: rgba(255,255,255,0.08);
        }

        .wisdom-info-card h6 {
            color: var(--color-gold);
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
        }

        .wisdom-info-card p {
            color: var(--text-gray-400);
            font-family: 'Nunito', sans-serif;
            font-size: 0.95rem;
            margin: 0;
        }

        .wisdom-info-card .icon-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(251, 191, 36, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 0.75rem;
            font-size: 1.5rem;
            color: var(--color-gold);
        }

        /* ====== SIDEBAR WISDOM ====== */
        .sidebar-wisdom {
            background: linear-gradient(145deg, #1a202c, #2d3748);
            border-radius: var(--radius-lg);
            padding: 2rem;
            border: 1px solid rgba(251, 191, 36, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 2rem;
        }

        .sidebar-wisdom:hover {
            box-shadow: var(--shadow-gold);
            transform: translateY(-2px);
        }

        .sidebar-wisdom .widget-title {
            color: var(--color-gold);
            border-bottom-color: rgba(251, 191, 36, 0.2);
        }

        .sidebar-wisdom .widget-title i {
            color: var(--color-gold);
        }

        .sidebar-wisdom .wisdom-box {
            background: rgba(255,255,255,0.05);
            padding: 1.25rem 1.5rem;
            border-radius: var(--radius-sm);
            border-left: 4px solid var(--color-gold);
            margin: 1rem 0;
            transition: all 0.3s ease;
        }

        .sidebar-wisdom .wisdom-box:hover {
            transform: translateX(4px);
            background: rgba(255,255,255,0.08);
        }

        .sidebar-wisdom .wisdom-box p {
            font-family: 'Nunito', sans-serif;
            font-size: 0.95rem;
            margin: 0;
            color: var(--text-light);
            font-weight: 500;
        }

        .sidebar-wisdom .wisdom-box i {
            color: var(--color-gold);
        }

        /* ====== WIDGET QUIZ ====== */
        .sidebar-widget {
            background: var(--surface-white);
            border-radius: var(--radius-lg);
            padding: 2rem;
            box-shadow: var(--shadow-soft);
            margin-bottom: 2rem;
            border: 1px solid rgba(67, 24, 255, 0.04);
            transition: all 0.3s ease;
        }

        .sidebar-widget:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(-2px);
        }

        .sidebar-widget.widget-quiz {
            background: linear-gradient(180deg, #FFFFFF 0%, #F9FAFC 100%);
            border: 1px solid var(--border-color);
        }

        .widget-title {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: var(--text-primary);
            border-bottom: 2px dashed var(--border-color);
            padding-bottom: 1rem;
            flex-wrap: wrap;
        }

        .widget-title i {
            color: var(--color-brand);
        }

        .widget-quiz .widget-title i {
            color: var(--color-accent);
        }

        /* ====== QUIZ ====== */
        .quiz-option {
            display: block;
            width: 100%;
            text-align: left;
            padding: 1rem 1.25rem;
            background: white;
            border: 2px solid var(--border-color);
            border-radius: 16px;
            margin-bottom: 0.75rem;
            font-family: 'Outfit', sans-serif;
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-primary);
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0,0,0,0.02);
            word-break: break-word;
        }

        .quiz-option:hover {
            border-color: var(--color-brand);
            background: rgba(67, 24, 255, 0.03);
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(67, 24, 255, 0.08);
        }

        .quiz-option.correct {
            background: #E6FFFA;
            border-color: var(--color-mint);
            color: #009966;
            box-shadow: 0 4px 15px rgba(0, 227, 150, 0.15);
        }

        .quiz-option.wrong {
            background: #FFF5F5;
            border-color: #EF4444;
            color: #991B1B;
        }

        .quiz-result-box {
            padding: 1.25rem;
            border-radius: 16px;
            margin-top: 1.5rem;
            font-family: 'Outfit', sans-serif;
            text-align: center;
            animation: popIn 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        }

        @keyframes popIn {
            0% { transform: scale(0.9); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }

        .btn-action {
            background: var(--text-primary);
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 12px;
            font-weight: 700;
            font-family: 'Outfit', sans-serif;
            transition: all 0.2s;
            width: 100%;
            margin-top: 1rem;
        }

        .btn-action:hover {
            background: var(--color-brand);
            transform: translateY(-2px);
            color: white;
        }

        /* ====== ACCORDION ====== */
        .custom-accordion {
            margin-top: 1.5rem;
            border-radius: var(--radius-md);
            overflow: hidden;
            background: white;
            border: 1px solid var(--border-color);
        }

        .custom-accordion .accordion-item {
            border: none;
            border-bottom: 1px solid var(--border-color);
        }

        .custom-accordion .accordion-item:last-child {
            border-bottom: none;
        }

        .custom-accordion .accordion-button {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            color: var(--text-primary);
            padding: 1rem 1.25rem;
            background: white;
            font-size: 1rem;
        }

        .custom-accordion .accordion-button:not(.collapsed) {
            background: #F4F7FE;
            color: var(--color-brand);
            box-shadow: none;
        }

        .custom-accordion .accordion-button:focus {
            box-shadow: none;
        }

        .custom-accordion .accordion-body {
            background: white;
            padding: 1.25rem;
            color: var(--text-secondary);
        }

        /* ====== PROGRESS BAR ====== */
        .reading-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: transparent;
            z-index: 1040;
        }
        
        .reading-progress-bar {
            height: 100%;
            background: linear-gradient(90deg, var(--color-coral) 0%, var(--color-brand) 100%);
            width: 0%;
            border-radius: 0 5px 5px 0;
            box-shadow: 0 2px 10px rgba(67, 24, 255, 0.4);
            transition: width 0.1s ease;
        }

        /* ====== ANIMATIONS ====== */
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.7s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
        }

        @keyframes fadeInUp {
            to { opacity: 1; transform: translateY(0); }
        }

        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }

        /* ============================================================ */
        /* ====== RESPONSIVE BREAKPOINTS ====== */
        /* ============================================================ */

        /* Large devices (desktops, less than 1200px) */
        @media (max-width: 1199.98px) {
            .header-content h1 {
                font-size: 3rem;
            }
            .app-container {
                padding: 0 1.5rem;
            }
        }

        /* Medium devices (tablets, less than 992px) */
        @media (max-width: 991.98px) {
            .app-container {
                padding: 0 1.25rem;
            }
            
            .content-card {
                padding: 1.5rem;
            }
            
            .page-header {
                padding: 3.5rem 0;
                border-radius: 0 0 25px 25px;
            }
            
            .header-content h1 {
                font-size: 2.5rem;
            }
            
            .header-content .lead {
                font-size: 1.1rem;
            }
            
            .content-wrapper {
                padding-top: 3rem;
                padding-bottom: 4rem;
            }
            
            .wisdom-section {
                padding: 1.5rem;
            }
            
            .wisdom-narration-card {
                padding: 1.5rem;
            }
            
            .section-title {
                font-size: 1.5rem;
            }
            
            .sidebar-wisdom,
            .sidebar-widget {
                padding: 1.5rem;
            }
            
            .wisdom-info-card {
                padding: 1.25rem;
            }
            
            .wisdom-info-card p {
                font-size: 0.9rem;
            }
            
            .narration-btn {
                padding: 0.5rem 1.2rem;
                font-size: 0.85rem;
            }
            
            .widget-title {
                font-size: 1.15rem;
            }
            
            .quiz-option {
                padding: 0.9rem 1.1rem;
                font-size: 0.9rem;
            }
            
            .topbar-brand {
                font-size: 1.15rem;
            }
            
            .topbar-brand i {
                font-size: 1.4rem;
            }
            
            .btn-back {
                padding: 0.4rem 1rem;
                font-size: 0.8rem;
            }
            
            .badge-tag-white {
                font-size: 0.75rem;
                padding: 0.3rem 0.8rem;
            }
            
            .wisdom-video-card {
                padding: 1rem;
            }
        }

        /* Small devices (landscape phones, less than 768px) */
        @media (max-width: 767.98px) {
            .app-container {
                padding: 0 1rem;
            }
            
            .header-content h1 {
                font-size: 2rem;
            }
            
            .header-content .lead {
                font-size: 1rem;
            }
            
            .header-badge {
                font-size: 0.7rem;
                padding: 0.3rem 1rem;
            }
            
            .page-header {
                padding: 2.5rem 0 2rem;
                border-radius: 0 0 20px 20px;
                margin-bottom: -1.5rem;
            }
            
            .content-card {
                padding: 1.25rem;
                border-radius: var(--radius-md);
            }
            
            .section-title {
                font-size: 1.3rem;
                gap: 0.75rem;
            }
            
            .icon-box {
                width: 38px;
                height: 38px;
                font-size: 1.1rem;
            }
            
            .wisdom-section {
                padding: 1.25rem;
                border-radius: var(--radius-md);
            }
            
            .wisdom-section .section-title {
                font-size: 1.3rem;
            }
            
            .wisdom-video-card {
                padding: 0.75rem;
            }
            
            .wisdom-narration-card {
                padding: 1.25rem;
                margin-top: 1rem;
            }
            
            .wisdom-narration-card h5 {
                font-size: 1.1rem;
            }
            
            .narration-text {
                min-height: 100px;
                font-size: 0.95rem;
            }
            
            .narration-btn {
                padding: 0.4rem 1rem;
                font-size: 0.8rem;
                flex: 1;
                text-align: center;
                min-width: 80px;
            }
            
            .wisdom-info-card {
                padding: 1rem;
            }
            
            .wisdom-info-card .icon-circle {
                width: 40px;
                height: 40px;
                font-size: 1.2rem;
            }
            
            .wisdom-info-card h6 {
                font-size: 0.95rem;
            }
            
            .wisdom-info-card p {
                font-size: 0.85rem;
            }
            
            .sidebar-wisdom,
            .sidebar-widget {
                padding: 1.25rem;
                border-radius: var(--radius-md);
            }
            
            .sidebar-wisdom .wisdom-box {
                padding: 1rem 1.25rem;
            }
            
            .sidebar-wisdom .wisdom-box p {
                font-size: 0.85rem;
            }
            
            .widget-title {
                font-size: 1.1rem;
                margin-bottom: 1rem;
                padding-bottom: 0.75rem;
            }
            
            .quiz-option {
                padding: 0.8rem 1rem;
                font-size: 0.85rem;
                border-radius: 12px;
            }
            
            .quiz-result-box {
                padding: 1rem;
            }
            
            .quiz-result-box h5 {
                font-size: 1rem;
            }
            
            .btn-action {
                padding: 0.7rem 1.2rem;
                font-size: 0.9rem;
            }
            
            .custom-accordion .accordion-button {
                padding: 0.8rem 1rem;
                font-size: 0.9rem;
            }
            
            .custom-accordion .accordion-body {
                padding: 1rem;
                font-size: 0.9rem;
            }
            
            .topbar {
                padding: 0.5rem 0;
            }
            
            .topbar-brand {
                font-size: 1rem;
            }
            
            .topbar-brand i {
                font-size: 1.2rem;
            }
            
            .btn-back {
                padding: 0.35rem 0.8rem;
                font-size: 0.75rem;
            }
            
            .btn-back span {
                display: none;
            }
            
            .badge-tag-white {
                font-size: 0.7rem;
                padding: 0.25rem 0.7rem;
            }
            
            .badge-tag-white i {
                font-size: 0.7rem;
            }
            
            .content-wrapper {
                padding-top: 2rem;
                padding-bottom: 3rem;
            }
            
            p, .content-text, li {
                font-size: 0.95rem;
            }
            
            .wisdom-section .lead-text {
                font-size: 0.95rem;
            }
        }

        /* Extra small devices (phones, less than 576px) */
        @media (max-width: 575.98px) {
            .app-container {
                padding: 0 0.75rem;
            }
            
            .header-content h1 {
                font-size: 1.6rem;
            }
            
            .header-content .lead {
                font-size: 0.9rem;
            }
            
            .page-header {
                padding: 2rem 0 1.5rem;
                border-radius: 0 0 16px 16px;
                margin-bottom: -1rem;
            }
            
            .header-badge {
                font-size: 0.6rem;
                padding: 0.25rem 0.8rem;
                margin-bottom: 1rem;
            }
            
            .content-card {
                padding: 1rem;
                border-radius: var(--radius-sm);
                margin-bottom: 1.25rem;
            }
            
            .section-title {
                font-size: 1.1rem;
                gap: 0.5rem;
                margin-bottom: 1rem;
            }
            
            .icon-box {
                width: 32px;
                height: 32px;
                font-size: 0.9rem;
            }
            
            .wisdom-section {
                padding: 1rem;
                border-radius: var(--radius-sm);
                margin-top: 1rem;
            }
            
            .wisdom-section .section-title {
                font-size: 1.1rem;
            }
            
            .wisdom-video-card {
                padding: 0.5rem;
            }
            
            .wisdom-video-card .mt-3.text-center p {
                font-size: 0.75rem;
            }
            
            .wisdom-narration-card {
                padding: 1rem;
                margin-top: 0.75rem;
            }
            
            .wisdom-narration-card h5 {
                font-size: 1rem;
            }
            
            .narration-text {
                min-height: 120px;
                font-size: 0.85rem;
                line-height: 1.6;
            }
            
            .narration-btn {
                padding: 0.35rem 0.75rem;
                font-size: 0.7rem;
                flex: 1;
                min-width: 60px;
            }
            
            .wisdom-info-card {
                padding: 0.75rem;
            }
            
            .wisdom-info-card .icon-circle {
                width: 35px;
                height: 35px;
                font-size: 1rem;
                margin-bottom: 0.5rem;
            }
            
            .wisdom-info-card h6 {
                font-size: 0.85rem;
            }
            
            .wisdom-info-card p {
                font-size: 0.75rem;
            }
            
            .sidebar-wisdom,
            .sidebar-widget {
                padding: 1rem;
                border-radius: var(--radius-sm);
                margin-bottom: 1.25rem;
            }
            
            .sidebar-wisdom .wisdom-box {
                padding: 0.75rem 1rem;
            }
            
            .sidebar-wisdom .wisdom-box p {
                font-size: 0.8rem;
            }
            
            .sidebar-wisdom .p-3.rounded-3 {
                padding: 0.75rem !important;
            }
            
            .sidebar-wisdom .p-3.rounded-3 h6 {
                font-size: 0.85rem;
            }
            
            .sidebar-wisdom .p-3.rounded-3 p {
                font-size: 0.8rem;
            }
            
            .widget-title {
                font-size: 1rem;
                margin-bottom: 0.75rem;
                padding-bottom: 0.5rem;
            }
            
            .widget-title i {
                font-size: 1.1rem;
            }
            
            .quiz-option {
                padding: 0.7rem 0.9rem;
                font-size: 0.8rem;
                border-radius: 10px;
                margin-bottom: 0.5rem;
            }
            
            .quiz-option:hover {
                transform: translateY(-1px);
            }
            
            .quiz-result-box {
                padding: 0.75rem;
                border-radius: 12px;
            }
            
            .quiz-result-box h5 {
                font-size: 0.9rem;
            }
            
            .quiz-result-box .small {
                font-size: 0.8rem;
            }
            
            .btn-action {
                padding: 0.6rem 1rem;
                font-size: 0.8rem;
                border-radius: 10px;
            }
            
            .custom-accordion .accordion-button {
                padding: 0.7rem 0.9rem;
                font-size: 0.8rem;
            }
            
            .custom-accordion .accordion-button i {
                font-size: 0.9rem;
            }
            
            .custom-accordion .accordion-body {
                padding: 0.8rem;
                font-size: 0.8rem;
            }
            
            .topbar {
                padding: 0.4rem 0;
            }
            
            .topbar-brand {
                font-size: 0.9rem;
                gap: 0.4rem;
            }
            
            .topbar-brand i {
                font-size: 1rem;
            }
            
            .btn-back {
                padding: 0.3rem 0.6rem;
                font-size: 0.7rem;
                gap: 0.3rem;
            }
            
            .btn-back i {
                font-size: 0.8rem;
            }
            
            .badge-tag-white {
                font-size: 0.6rem;
                padding: 0.2rem 0.6rem;
                gap: 0.2rem;
            }
            
            .badge-tag-white i {
                font-size: 0.6rem;
            }
            
            .content-wrapper {
                padding-top: 1.5rem;
                padding-bottom: 2rem;
            }
            
            p, .content-text, li {
                font-size: 0.85rem;
                line-height: 1.6;
            }
            
            .wisdom-section .lead-text {
                font-size: 0.85rem;
            }
            
            .reading-progress {
                height: 3px;
            }
            
            .reading-progress-bar {
                height: 3px;
            }
            
            .display-3 {
                font-size: 2.5rem !important;
            }
            
            .progress {
                height: 8px !important;
            }
        }

        /* ====== SCROLLBAR ====== */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-body);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, var(--color-brand), var(--color-pink));
            border-radius: 50px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--color-brand-hover);
        }
    </style>
</head>
<body>

<!-- Progress Bar -->
<div class="reading-progress">
    <div class="reading-progress-bar" id="progressBar"></div>
</div>

<!-- Topbar -->
<nav class="topbar">
    <div class="app-container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="topbar-brand">
                <i class="bi bi-rocket-takeoff-fill"></i> <span class="d-none d-sm-inline">LareKu</span>
            </div>
            <button class="btn-back" onclick="window.history.back()">
                <i class="bi bi-arrow-left"></i> <span>Kembali</span>
            </button>
        </div>
    </div>
</nav>

<!-- Page Header -->
<header class="page-header">
    <div class="app-container header-content">
        <span class="header-badge">
            <i class="bi bi-star-fill text-warning me-2"></i>Budaya & Kearifan Lokal
        </span>
        <h1>Kearifan Lokal Minangkabau</h1>
        <p class="lead">Jelajahi kekayaan budaya dan tradisi yang telah diwariskan secara turun-temurun dari masyarakat Minangkabau.</p>
        
        <div class="d-flex flex-wrap gap-2 gap-sm-3 mt-3 mt-sm-4">
            <span class="badge-tag-white"><i class="bi bi-clock-history me-1"></i> 10 Menit Baca</span>
            <span class="badge-tag-white"><i class="bi bi-building me-1"></i> Arsitektur</span>
            <span class="badge-tag-white"><i class="bi bi-music-note-beamed me-1"></i> Seni & Budaya</span>
        </div>
    </div>
</header>

<div class="content-wrapper">
    <div class="app-container">
        <div class="row g-3 g-lg-4">
            <!-- Kolom Kiri: Konten Utama -->
            <div class="col-lg-8">
                
                <!-- Pengantar -->
                <div class="content-card fade-in-up delay-1">
                    <h4 class="section-title" style="font-size: 1.5rem; margin-bottom: 1.5rem; border-bottom: 2px solid var(--border-color); padding-bottom: 1rem;">
                        <div class="icon-box"><i class="bi bi-info-circle"></i></div>
                        Mengenal Minangkabau
                    </h4>
                    
                    <div class="content-text">
                        <p>Minangkabau adalah salah satu suku bangsa di Indonesia yang terkenal dengan budaya matrilineal, falsafah hidup yang kuat, serta arsitektur dan seni tradisi yang khas. Masyarakat Minangkabau mendiami wilayah Sumatra Barat dan tersebar di berbagai daerah di Indonesia melalui tradisi merantau.</p>
                        
                        <div class="p-3 mt-3 mb-0 rounded-3" style="background: var(--bg-body); border-left: 4px solid var(--color-brand); font-family: 'Outfit', sans-serif;">
                            <p class="fw-bold mb-0" style="font-family: 'Outfit', sans-serif; font-size: 1rem;">
                                <i class="bi bi-quote me-2"></i> "Adat Basandi Syarak, Syarak Basandi Kitabullah" — Falsafah yang menjadikan adat dan agama sebagai dua pilar yang saling menguatkan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- ====== BAGIAN KEARIFAN LOKAL ====== -->
                <div class="wisdom-section fade-in-up delay-2">
                    <h4 class="section-title">
                        <div class="icon-box"><i class="bi bi-tree-fill"></i></div>
                        Eksplorasi Budaya Minangkabau
                    </h4>
                    <p class="lead-text mb-3 mb-md-4">Jelajahi kekayaan budaya dan tradisi yang telah diwariskan secara turun-temurun dari masyarakat Minangkabau.</p>

                    <!-- Video & Narasi Grid -->
                    <div class="row g-3 g-md-4">
                        <!-- Video Container -->
                        <div class="col-lg-6">
                            <div class="wisdom-video-card">
                                <div class="video-wrapper ratio ratio-16x9 rounded-3">
                                    <iframe 
                                        id="minangVideo"
                                        src="https://www.youtube.com/embed/j_B2jC_QWc0?si=L43L3pW5RjN20f8L" 
                                        title="YouTube video player" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="mt-2 mt-sm-3 text-center">
                                    <p class="text-gray-400 small" style="color: var(--text-gray-400); font-size: 0.8rem;">Video animasi tentang budaya Minangkabau</p>
                                </div>
                            </div>
                        </div>

                        <!-- Narasi Container -->
                        <div class="col-lg-6">
                            <div class="wisdom-narration-card">
                                <h5><i class="bi bi-chat-quote-fill me-2"></i>Narasi Budaya</h5>
                                <p id="narration-text" class="narration-text">
                                    Budaya Minangkabau dikenal dengan falsafah "Adat Basandi Syarak, Syarak Basandi Kitabullah," yang berarti adat bersendikan pada agama, dan agama bersendikan pada Al-Qur'an.
                                </p>
                                <div class="mt-3 mt-md-4 d-flex flex-wrap gap-2">
                                    <button id="btn1" data-index="0" class="narration-btn active">
                                        Falsafah Hidup
                                    </button>
                                    <button id="btn2" data-index="1" class="narration-btn inactive">
                                        Rumah Gadang
                                    </button>
                                    <button id="btn3" data-index="2" class="narration-btn inactive">
                                        Seni & Tradisi
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Info Tambahan Kearifan Lokal -->
                    <div class="row g-2 g-md-3 mt-2 mt-md-3">
                        <div class="col-6 col-md-4">
                            <div class="wisdom-info-card">
                                <div class="icon-circle"><i class="bi bi-building"></i></div>
                                <h6>Rumah Gadang</h6>
                                <p>Simbol kebesaran budaya Minangkabau</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="wisdom-info-card">
                                <div class="icon-circle"><i class="bi bi-music-note-beamed"></i></div>
                                <h6>Seni Tradisi</h6>
                                <p>Tari Piring, Tari Indang, Randai</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="wisdom-info-card">
                                <div class="icon-circle"><i class="bi bi-people"></i></div>
                                <h6>Falsafah</h6>
                                <p>Adat & agama saling bersandaran</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Topik Tambahan: Rumah Gadang -->
                <div class="content-card fade-in-up delay-3">
                    <h4 class="section-title">
                        <div class="icon-box" style="background: rgba(251, 191, 36, 0.15); color: var(--color-gold);">
                            <i class="bi bi-house-fill"></i>
                        </div>
                        Arsitektur Rumah Gadang
                    </h4>
                    <p>Rumah Gadang adalah rumah adat masyarakat Minangkabau yang memiliki keunikan arsitektur dan filosofi mendalam. Bentuk atapnya yang melengkung menyerupai tanduk kerbau (gonjong) memiliki makna simbolis dan adaptif terhadap kondisi geografis Sumatra Barat.</p>
                    
                    <div class="row g-2 g-md-3 mt-2 mt-md-3">
                        <div class="col-md-6">
                            <div class="p-3 rounded-3" style="background: var(--bg-body); border-left: 4px solid var(--color-gold);">
                                <h6 class="fw-bold" style="font-family: 'Outfit', sans-serif; font-size: 1rem;"><i class="bi bi-shield-check me-2 text-gold" style="color: var(--color-gold);"></i>Struktur Adaptif</h6>
                                <p class="small mb-0 text-muted" style="font-size: 0.85rem;">Tiang utama tidak ditanam ke tanah, melainkan dialaskan pada batu datar. Sistem konstruksi menggunakan pasak kayu tanpa paku.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 rounded-3" style="background: var(--bg-body); border-left: 4px solid var(--color-teal);">
                                <h6 class="fw-bold" style="font-family: 'Outfit', sans-serif; font-size: 1rem;"><i class="bi bi-people me-2 text-teal" style="color: var(--color-teal);"></i>Filosofi Sosial</h6>
                                <p class="small mb-0 text-muted" style="font-size: 0.85rem;">Rumah Gadang mencerminkan sistem matrilineal dan kebersamaan. Setiap bagian rumah memiliki makna sosial.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Topik: Seni & Tradisi -->
                <div class="content-card fade-in-up delay-4">
                    <h4 class="section-title">
                        <div class="icon-box" style="background: rgba(236, 72, 153, 0.15); color: var(--color-pink);">
                            <i class="bi bi-music-note-beamed"></i>
                        </div>
                        Seni & Tradisi Minangkabau
                    </h4>
                    <p>Seni tradisi Minangkabau merupakan warisan budaya yang kaya dan beragam. Setiap pertunjukan tidak hanya berfungsi sebagai hiburan, tetapi juga sebagai media penyampaian pesan moral, sejarah, dan nilai-nilai kehidupan.</p>
                    
                    <div class="accordion custom-accordion mt-3" id="accordionSeni">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTariPiring">
                                    <i class="bi bi-arrow-right-circle me-2"></i> Tari Piring
                                </button>
                            </h2>
                            <div id="collapseTariPiring" class="accordion-collapse collapse" data-bs-parent="#accordionSeni">
                                <div class="accordion-body">
                                    <p>Tari Piring adalah tarian tradisional yang berasal dari Solok, Sumatra Barat. Penari menari dengan membawa piring di kedua tangan, menggambarkan rasa syukur dan kegembiraan masyarakat.</p>
                                    <p class="text-muted small m-0"><i class="bi bi-info-circle me-1"></i> Tarian ini melambangkan dinamika kehidupan masyarakat Minangkabau yang penuh dengan semangat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTariIndang">
                                    <i class="bi bi-arrow-right-circle me-2"></i> Tari Indang
                                </button>
                            </h2>
                            <div id="collapseTariIndang" class="accordion-collapse collapse" data-bs-parent="#accordionSeni">
                                <div class="accordion-body">
                                    <p>Tari Indang adalah tarian tradisional yang menggunakan media piring kecil sebagai properti. Tarian ini biasanya dibawakan secara berkelompok dengan gerakan yang dinamis dan harmonis.</p>
                                    <p class="text-muted small m-0"><i class="bi bi-info-circle me-1"></i> Tari Indang sering ditampilkan dalam acara-acara adat dan perayaan masyarakat Minangkabau.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRandai">
                                    <i class="bi bi-arrow-right-circle me-2"></i> Randai
                                </button>
                            </h2>
                            <div id="collapseRandai" class="accordion-collapse collapse" data-bs-parent="#accordionSeni">
                                <div class="accordion-body">
                                    <p>Randai adalah seni pertunjukan teater tradisional yang menggabungkan seni tari, musik, dan drama. Pertunjukan ini biasanya mengisahkan cerita rakyat atau legenda Minangkabau.</p>
                                    <p class="text-muted small m-0"><i class="bi bi-info-circle me-1"></i> Randai menjadi media pendidikan karakter dan penyampaian nilai-nilai moral bagi masyarakat Minangkabau.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Sidebar -->
            <div class="col-lg-4">
                
                <!-- Widget Kearifan Lokal - Dark Theme -->
                <div class="sidebar-wisdom fade-in-up delay-2">
                    <h5 class="widget-title">
                        <i class="bi bi-tree-fill"></i> Kearifan Lokal
                    </h5>
                    <p class="small text-gray-400 mb-3 mb-md-4" style="color: var(--text-gray-400);">Adaptasi masyarakat tradisional terhadap kondisi alam dan potensi bencana di lingkungannya.</p>
                    
                    <div class="wisdom-box">
                        <p><i class="bi bi-info-circle me-2"></i> Arsitektur Rumah Gadang menggunakan konstruksi pasak kayu tanpa paku, membuatnya lentur dan berayun mengikuti guncangan gempa tanpa roboh.</p>
                    </div>

                    <div class="p-3 rounded-3 mb-3" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(251, 191, 36, 0.05);">
                        <h6 style="color: var(--color-gold); font-family: 'Outfit', sans-serif; font-weight: 700; font-size: 0.95rem;">Filosofi Adat</h6>
                        <p class="small text-gray-400 mb-0" style="color: var(--text-gray-400); font-size: 0.85rem;">"Adat Basandi Syarak, Syarak Basandi Kitabullah" — adat dan agama saling bersandaran.</p>
                    </div>

                    <!-- Custom Video Thumbnail -->
                    <div class="position-relative rounded-4 overflow-hidden shadow-lg mt-3" id="rg-video-wrapper" style="cursor: pointer; transition: transform 0.2s; border: 1px solid rgba(251, 191, 36, 0.1);">
                        <img src="{{ asset('homepage/img/rumah gadang.jpg') }}" alt="Rumah Gadang" id="rg-video-thumb" class="img-fluid w-100" style="min-height: 160px; object-fit: cover;" onerror="this.src='https://placehold.co/600x400/4318FF/FFFFFF?text=Rumah+Gadang'">
                        
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.4);">
                            <div class="rounded-circle d-flex align-items-center justify-content-center shadow-lg" style="width: 50px; height: 50px; transition: transform 0.2s; background: var(--color-gold);" id="rg-video-play" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                                <i class="bi bi-play-fill fs-1 text-dark ms-1"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-center small text-gray-400 mt-2" style="color: var(--text-gray-400); font-size: 0.75rem;">Klik untuk melihat video Rumah Gadang</p>
                </div>

                <!-- Widget Kuis -->
                <div class="sidebar-widget widget-quiz fade-in-up delay-3 sticky-top" style="top: 100px;">
                    <div class="d-flex justify-content-between align-items-center mb-3 mb-md-4 pb-2 pb-md-3 border-bottom border-light flex-wrap gap-2">
                        <h5 class="widget-title m-0 border-0 p-0">
                            <i class="bi bi-lightning-charge-fill text-warning"></i> Kuis Evaluasi
                        </h5>
                        <span class="badge bg-white text-dark shadow-sm border py-2 px-3 rounded-pill fw-bold" id="quizCounter" style="font-family: 'Outfit', sans-serif; font-size: 0.8rem;">1 / 5</span>
                    </div>
                    
                    <div id="quiz-area"></div>
                    <div id="quiz-result-area" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // 1. Reading Progress Bar
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        document.getElementById('progressBar').style.width = scrolled + '%';
    });

    // 2. Video Thumbnail Kearifan Lokal
    document.addEventListener('DOMContentLoaded', function() {
        const wrapper = document.getElementById('rg-video-wrapper');
        const playBtn = document.getElementById('rg-video-play');
        const thumb = document.getElementById('rg-video-thumb');
        
        function playVideo() {
            wrapper.innerHTML = `
                <div class="ratio ratio-16x9 rounded-4 overflow-hidden">
                    <video controls autoplay class="w-100 h-100 bg-dark">
                        <source src="{{ asset('homepage/video/RG.mp4') }}" type="video/mp4">
                        Maaf, browser Anda tidak mendukung pemutar video.
                    </video>
                </div>`;
        }
        
        if(playBtn) playBtn.addEventListener('click', playVideo);
        if(thumb) thumb.addEventListener('click', playVideo);
    });

    // 3. Narasi Budaya Minangkabau
    document.addEventListener('DOMContentLoaded', function() {
        const narrationTextElement = document.getElementById('narration-text');
        const narrationButtons = document.querySelectorAll('.narration-btn');

        const narrations = [
            'Budaya Minangkabau dikenal dengan falsafah "Adat Basandi Syarak, Syarak Basandi Kitabullah," yang berarti adat bersendikan pada agama, dan agama bersendikan pada Al-Qur\'an.',
            'Rumah Gadang adalah rumah adat yang menjadi simbol kebesaran dan kekuatan budaya Minangkabau. Bentuk atapnya yang melengkung menyerupai tanduk kerbau mencerminkan identitas dan legenda masyarakatnya.',
            'Seni tradisi seperti Tari Piring, Tari Indang, dan Randai merupakan bagian tak terpisahkan dari kehidupan masyarakat. Pertunjukan ini bukan hanya hiburan, tetapi juga sarana menyampaikan pesan moral dan sejarah.'
        ];

        narrationButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Reset semua tombol
                narrationButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.classList.add('inactive');
                });

                // Aktifkan tombol yang diklik
                button.classList.remove('inactive');
                button.classList.add('active');

                // Ubah teks narasi dengan transisi
                narrationTextElement.style.opacity = '0';
                setTimeout(() => {
                    const index = parseInt(button.dataset.index);
                    narrationTextElement.textContent = narrations[index];
                    narrationTextElement.style.opacity = '1';
                }, 300);
            });
        });
    });

    // 4. Quiz Logic
    const quizData = [
        {
            question: "Apa falsafah hidup yang terkenal dari masyarakat Minangkabau?",
            options: [
                "Adat Basandi Syarak, Syarak Basandi Kitabullah",
                "Bhinneka Tunggal Ika",
                "Gotong Royong",
                "Musyawarah Mufakat"
            ],
            answer: 0,
            explanation: "Falsafah ini mengandung makna bahwa adat Minangkabau bersendikan pada agama Islam, dan agama Islam bersendikan pada Al-Qur'an."
        },
        {
            question: "Apa keunikan arsitektur Rumah Gadang yang membuatnya tahan gempa?",
            options: [
                "Pondasi beton yang kuat",
                "Menggunakan pasak kayu tanpa paku",
                "Dibangun di atas bukit",
                "Atap dari batu"
            ],
            answer: 1,
            explanation: "Konstruksi Rumah Gadang menggunakan sistem pasak kayu yang membuat struktur bangunan lentur dan fleksibel terhadap guncangan gempa."
        },
        {
            question: "Tarian tradisional Minangkabau yang menggunakan piring sebagai properti adalah...",
            options: [
                "Tari Piring",
                "Tari Indang",
                "Tari Payung",
                "Tari Kecak"
            ],
            answer: 0,
            explanation: "Tari Piring adalah tarian khas Minangkabau yang menggunakan piring sebagai properti, berasal dari daerah Solok."
        },
        {
            question: "Apa fungsi utama dari pertunjukan Randai dalam masyarakat Minangkabau?",
            options: [
                "Hiburan semata",
                "Media pendidikan karakter dan penyampaian nilai moral",
                "Upacara keagamaan",
                "Pertunjukan untuk wisatawan"
            ],
            answer: 1,
            explanation: "Randai berfungsi sebagai media pendidikan karakter dan penyampaian nilai-nilai moral, serta cerita rakyat dan legenda Minangkabau."
        },
        {
            question: "Sistem kekerabatan masyarakat Minangkabau menganut pola...",
            options: [
                "Patrilineal",
                "Matrilineal",
                "Parental",
                "Bilateral"
            ],
            answer: 1,
            explanation: "Masyarakat Minangkabau menganut sistem matrilineal, di mana garis keturunan dan warisan diturunkan dari pihak ibu."
        }
    ];

    let currentQ = 0;
    let score = 0;
    
    const quizArea = document.getElementById('quiz-area');
    const resultArea = document.getElementById('quiz-result-area');
    const counterDisplay = document.getElementById('quizCounter');

    function renderQuestion() {
        if (currentQ >= quizData.length) {
            showResult();
            return;
        }

        const q = quizData[currentQ];
        counterDisplay.textContent = `${currentQ + 1} / ${quizData.length}`;
        
        let html = `
            <div class="mb-2">
                <p class="fw-bold mb-3 mb-md-4 fs-6 fs-md-5 text-dark" style="font-family: 'Outfit', sans-serif;">${q.question}</p>
                <div class="d-flex flex-column">
        `;
        
        q.options.forEach((opt, index) => {
            html += `<button class="quiz-option" onclick="checkAnswer(${index}, this)">${opt}</button>`;
        });
        
        html += `</div></div>`;
        quizArea.innerHTML = html;
        resultArea.style.display = 'none';
        quizArea.style.display = 'block';
    }

    function checkAnswer(selectedIndex, btnElement) {
        const allBtns = quizArea.querySelectorAll('.quiz-option');
        allBtns.forEach(btn => btn.style.pointerEvents = 'none');
        
        const q = quizData[currentQ];
        const isCorrect = selectedIndex === q.answer;
        
        if (isCorrect) {
            btnElement.classList.add('correct');
            score++;
        } else {
            btnElement.classList.add('wrong');
            allBtns[q.answer].classList.add('correct');
            allBtns[q.answer].style.opacity = '0.8';
        }

        setTimeout(() => {
            quizArea.style.display = 'none';
            resultArea.innerHTML = `
                <div class="quiz-result-box ${isCorrect ? 'bg-success text-white' : 'bg-danger text-white'} shadow-sm">
                    <h5 class="fw-bold mb-2 mb-md-3"><i class="bi ${isCorrect ? 'bi-check-circle-fill' : 'bi-x-circle-fill'} me-2"></i> ${isCorrect ? 'Tepat Sekali! 🎉' : 'Kurang Tepat 💡'}</h5>
                    <p class="small mb-3 mb-md-4" style="opacity: 0.95; line-height: 1.6;">${q.explanation}</p>
                    <button class="btn btn-light rounded-pill px-4 py-2 fw-bold w-100 text-dark" style="font-family: 'Outfit', sans-serif; font-size: 0.9rem;" onclick="nextQuestion()">Lanjut Soal <i class="bi bi-arrow-right ms-1"></i></button>
                </div>
            `;
            resultArea.style.display = 'block';
        }, 900);
    }

    function nextQuestion() {
        currentQ++;
        renderQuestion();
    }

    function showResult() {
        quizArea.style.display = 'none';
        counterDisplay.textContent = "Selesai";
        counterDisplay.className = 'badge bg-success text-white shadow-sm border py-2 px-3 rounded-pill fw-bold';
        
        const percentage = Math.round((score / quizData.length) * 100);
        let msg = percentage >= 80 ? "Sangat Baik! 🏆" : (percentage >= 60 ? "Cukup Baik 👍" : "Perlu Belajar Lagi 📚");
        
        resultArea.innerHTML = `
            <div class="text-center py-3 py-md-4">
                <div class="display-4 display-md-3 fw-bold mb-2" style="color: var(--color-brand); font-family: 'Outfit', sans-serif;">${score}<span class="fs-4 fs-md-3 text-muted">/${quizData.length}</span></div>
                <h5 class="fw-bold text-dark" style="font-family: 'Outfit', sans-serif;">${msg}</h5>
                <div class="progress my-3 mx-auto" style="height: 8px; width: 80%; border-radius: 5px;">
                  <div class="progress-bar ${percentage >= 80 ? 'bg-success' : (percentage >= 60 ? 'bg-warning' : 'bg-danger')}" role="progressbar" style="width: ${percentage}%" aria-valuenow="${percentage}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="small text-muted mb-3 mb-md-4">Skor Ketuntasan: ${percentage}%</p>
                <button class="btn-action rounded-pill" onclick="resetQuiz()" style="font-size: 0.9rem;"><i class="bi bi-arrow-counterclockwise me-1"></i> Ulangi Kuis</button>
            </div>
        `;
        resultArea.style.display = 'block';
    }

    function resetQuiz() {
        currentQ = 0;
        score = 0;
        counterDisplay.className = 'badge bg-white text-dark shadow-sm border py-2 px-3 rounded-pill fw-bold';
        renderQuestion();
    }

    // Init Quiz
    renderQuestion();
</script>
</body>
</html>