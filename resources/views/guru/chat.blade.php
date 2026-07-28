@extends('guru.guru_master')

@section('guru')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    :root {
        --bg-body: #F0F2F8;
        --text-main: #1A1A2E;
        --text-muted: #6B7280;
        
        --brand-primary: #6C5CE7;
        --brand-secondary: #A29BFE;
        --brand-accent: #FD79A8;
        --brand-gold: #FDCB6E;
        --brand-success: #00B894;
        --brand-warning: #FDCB6E;
        --brand-danger: #E17055;
        
        --surface-white: #FFFFFF;
        --surface-glass: rgba(255, 255, 255, 0.7);
        --border-light: rgba(108, 92, 231, 0.15);
        
        --shadow-sm: 0 2px 8px rgba(108, 92, 231, 0.08);
        --shadow-md: 0 8px 30px rgba(108, 92, 231, 0.12);
        --shadow-lg: 0 20px 60px rgba(108, 92, 231, 0.15);
        --shadow-glow: 0 0 40px rgba(108, 92, 231, 0.1);
        
        --radius-md: 16px;
        --radius-lg: 24px;
        --radius-xl: 32px;
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        background: var(--bg-body);
        color: var(--text-main);
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        background-image: 
            radial-gradient(ellipse at 10% 20%, rgba(108, 92, 231, 0.05) 0%, transparent 50%),
            radial-gradient(ellipse at 90% 80%, rgba(253, 121, 168, 0.05) 0%, transparent 50%);
    }

    /* ===== TOPBAR ===== */
    .topbar {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-bottom: 1px solid var(--border-light);
        padding: 0.75rem 2rem;
        position: sticky;
        top: 0;
        z-index: 1020;
        box-shadow: var(--shadow-sm);
    }

    .brand-text {
        font-family: 'Playfair Display', serif;
        font-size: 1.5rem;
        font-weight: 700;
        background: linear-gradient(135deg, var(--brand-primary), var(--brand-accent));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-decoration: none;
        letter-spacing: -0.5px;
    }

    .brand-text span {
        background: none;
        -webkit-text-fill-color: var(--text-main);
        color: var(--text-main);
    }

    .btn-back {
        background: rgba(108, 92, 231, 0.08);
        border: 1px solid var(--border-light);
        border-radius: 50px;
        padding: 0.5rem 1.25rem;
        font-weight: 600;
        font-size: 0.85rem;
        color: var(--brand-primary);
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .btn-back:hover {
        background: var(--brand-primary);
        color: white;
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
        border-color: var(--brand-primary);
    }

    /* ===== PAGE CONTAINER ===== */
    .student-chat-page {
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        padding: 1.5rem;
        min-height: calc(100vh - 80px);
        display: flex;
        flex-direction: column;
    }

    /* ===== CHAT WRAPPER ===== */
    .student-chat {
        width: 100%;
        flex: 1;
        height: calc(100vh - 120px);
        background: var(--surface-white);
        border-radius: var(--radius-xl);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        box-shadow: var(--shadow-lg);
        border: 1px solid var(--border-light);
        position: relative;
    }

    .student-chat::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(108, 92, 231, 0.03) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
        z-index: 0;
    }

    /* ===== HEADER CHAT ===== */
    .student-header {
        background: linear-gradient(135deg, var(--brand-primary), #8B7CF0, var(--brand-accent));
        padding: 1.5rem 2.5rem;
        color: white;
        display: flex;
        align-items: center;
        gap: 1.5rem;
        border-bottom: none;
        flex-shrink: 0;
        position: relative;
        z-index: 1;
        overflow: hidden;
    }

    .student-header::after {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        pointer-events: none;
    }

    .student-datuak-avatar {
        width: 56px;
        height: 56px;
        flex-shrink: 0;
        border-radius: 18px;
        background: rgba(255, 255, 255, 0.2);
        border: 2px solid rgba(255, 255, 255, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: 800;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
        position: relative;
        z-index: 1;
    }

    .student-header h1 {
        margin: 0;
        font-size: 1.4rem;
        font-weight: 800;
        letter-spacing: -0.02em;
        position: relative;
        z-index: 1;
    }

    .student-header p {
        margin: 2px 0 0;
        font-size: 0.9rem;
        opacity: 0.9;
        font-weight: 500;
        position: relative;
        z-index: 1;
    }

    .header-status {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.8rem;
        opacity: 0.9;
        position: relative;
        z-index: 1;
        margin-left: auto;
    }

    .status-dot {
        width: 8px;
        height: 8px;
        background: #00E676;
        border-radius: 50%;
        animation: pulse-dot 2s infinite;
    }

    @keyframes pulse-dot {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.5; transform: scale(0.8); }
    }

    .btn-close-mobile {
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: white;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: none;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        cursor: pointer;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .btn-close-mobile:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: rotate(90deg);
    }

    /* ===== CHAT BOX ===== */
    #chat-box {
        flex: 1;
        overflow-y: auto;
        padding: 2.5rem 3rem;
        background: linear-gradient(180deg, #FAFAFE 0%, #F5F6FC 100%);
        display: flex;
        flex-direction: column;
        position: relative;
        z-index: 1;
    }

    #chat-box::-webkit-scrollbar {
        width: 6px;
    }

    #chat-box::-webkit-scrollbar-track {
        background: transparent;
    }

    #chat-box::-webkit-scrollbar-thumb {
        background: linear-gradient(180deg, var(--brand-primary), var(--brand-accent));
        border-radius: 10px;
    }

    #chat-box::-webkit-scrollbar-thumb:hover {
        background: var(--brand-primary);
    }

    /* ===== WELCOME STATE ===== */
    .student-welcome {
        width: 100%;
        max-width: 700px;
        margin: auto;
        text-align: center;
        padding: 2rem 1rem;
        animation: fadeInUp 0.6s ease;
    }

    .welcome-badge {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, rgba(108, 92, 231, 0.12), rgba(253, 121, 168, 0.08));
        color: var(--brand-primary);
        border-radius: var(--radius-lg);
        margin: 0 auto 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.2rem;
        font-weight: 800;
        border: 2px solid var(--border-light);
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-8px); }
    }

    .student-welcome h2 {
        font-size: 2rem;
        font-weight: 800;
        color: var(--text-main);
        margin-bottom: 0.5rem;
        letter-spacing: -0.02em;
        background: linear-gradient(135deg, var(--brand-primary), var(--brand-accent));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .student-welcome > p {
        color: var(--text-muted);
        font-size: 1.05rem;
        line-height: 1.7;
        max-width: 550px;
        margin: 0 auto;
        -webkit-text-fill-color: var(--text-muted);
    }

    .quick-title {
        margin: 2.5rem 0 1rem;
        font-size: 0.7rem;
        color: var(--text-muted);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.15em;
        opacity: 0.6;
    }

    .quick-questions {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 0.75rem;
        max-width: 700px;
        margin: 0 auto;
    }

    .quick-question {
        border: 1px solid var(--border-light);
        background: var(--surface-white);
        color: var(--brand-primary);
        border-radius: 50px;
        padding: 0.7rem 1.5rem;
        font-size: 0.85rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        box-shadow: var(--shadow-sm);
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .quick-question i {
        font-size: 0.8rem;
        opacity: 0.6;
    }

    .quick-question:hover {
        background: var(--brand-primary);
        color: white;
        transform: translateY(-3px);
        box-shadow: var(--shadow-md);
        border-color: var(--brand-primary);
    }

    .quick-question:hover i {
        opacity: 1;
    }

    /* ===== MESSAGES ===== */
    .message {
        display: flex;
        margin-bottom: 1.5rem;
        animation: messageIn 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        width: 100%;
    }

    @keyframes messageIn {
        from { opacity: 0; transform: translateY(15px) scale(0.98); }
        to { opacity: 1; transform: translateY(0) scale(1); }
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .message-user {
        justify-content: flex-end;
    }

    .message-bot {
        justify-content: flex-start;
        align-items: flex-start;
        gap: 0.85rem;
    }

    .student-user-bubble {
        max-width: 65%;
        padding: 0.9rem 1.5rem;
        background: linear-gradient(135deg, var(--brand-primary), #8B7CF0);
        color: white;
        border-radius: 20px 20px 4px 20px;
        line-height: 1.6;
        font-size: 0.95rem;
        word-break: break-word;
        box-shadow: 0 4px 15px rgba(108, 92, 231, 0.25);
        position: relative;
    }

    .student-user-bubble::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: -8px;
        width: 16px;
        height: 16px;
        background: linear-gradient(135deg, var(--brand-primary), #8B7CF0);
        clip-path: polygon(0 0, 100% 0, 100% 100%);
        border-radius: 0 0 4px 0;
    }

    .student-user-avatar {
        width: 38px;
        height: 38px;
        flex-shrink: 0;
        border-radius: 12px;
        background: linear-gradient(135deg, #A29BFE, #6C5CE7);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 0.9rem;
        margin-left: 0.5rem;
        box-shadow: var(--shadow-sm);
        border: 2px solid rgba(108, 92, 231, 0.15);
    }

    .message-user .student-user-avatar {
        order: 1;
        margin-left: 0;
        margin-right: 0.5rem;
    }

    .message-user .student-user-bubble {
        order: 2;
    }

    .student-bot-avatar {
        width: 42px;
        height: 42px;
        flex-shrink: 0;
        border-radius: 14px;
        background: linear-gradient(135deg, rgba(108, 92, 231, 0.12), rgba(253, 121, 168, 0.08));
        color: var(--brand-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 1.1rem;
        margin-top: 2px;
        border: 2px solid var(--border-light);
        box-shadow: var(--shadow-sm);
    }

    .student-bot-content {
        max-width: 80%;
    }

    .student-bot-name {
        color: var(--text-muted);
        font-size: 0.7rem;
        margin: 0 0 4px 6px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .student-bot-bubble {
        background: var(--surface-white);
        border: 1px solid var(--border-light);
        padding: 1.1rem 1.6rem;
        border-radius: 4px 20px 20px 20px;
        color: var(--text-main);
        line-height: 1.8;
        font-size: 0.95rem;
        word-break: break-word;
        box-shadow: var(--shadow-sm);
        position: relative;
    }

    .student-bot-bubble::before {
        content: '';
        position: absolute;
        top: 0;
        left: -8px;
        width: 16px;
        height: 16px;
        background: var(--surface-white);
        border-left: 1px solid var(--border-light);
        border-top: 1px solid var(--border-light);
        clip-path: polygon(0 0, 100% 0, 100% 100%);
        border-radius: 4px 0 0 0;
    }

    /* ===== MARKDOWN ===== */
    .chat-markdown p { margin: 0.5rem 0; font-size: 0.95rem; }
    .chat-markdown p:first-child { margin-top: 0; }
    .chat-markdown p:last-child { margin-bottom: 0; }
    
    .chat-markdown h1, .chat-markdown h2, .chat-markdown h3 {
        background: linear-gradient(135deg, var(--brand-primary), var(--brand-accent));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 800;
        margin: 1rem 0 0.5rem;
    }

    .chat-markdown h1 { font-size: 1.3rem; }
    .chat-markdown h2 { font-size: 1.15rem; }
    .chat-markdown h3 { font-size: 1.05rem; }

    .chat-markdown ul, .chat-markdown ol {
        padding-left: 1.5rem;
        margin: 0.5rem 0;
    }

    .chat-markdown li {
        margin-bottom: 0.25rem;
    }

    .chat-markdown strong { font-weight: 700; color: #1A1A2E; -webkit-text-fill-color: #1A1A2E; }

    .chat-markdown blockquote {
        background: linear-gradient(135deg, rgba(108, 92, 231, 0.05), rgba(253, 121, 168, 0.03));
        border-left: 4px solid var(--brand-primary);
        margin: 0.75rem 0;
        padding: 0.75rem 1.25rem;
        border-radius: 0 12px 12px 0;
        font-style: italic;
        color: var(--text-muted);
    }

    .chat-markdown code {
        background: rgba(108, 92, 231, 0.08);
        color: var(--brand-accent);
        padding: 0.15rem 0.5rem;
        border-radius: 6px;
        font-size: 0.85em;
        font-family: 'Courier New', monospace;
        border: 1px solid var(--border-light);
    }

    .chat-markdown pre {
        background: #1A1A2E;
        color: #F0F2F8;
        padding: 1rem 1.25rem;
        border-radius: 12px;
        overflow-x: auto;
        margin: 0.75rem 0;
    }

    .chat-markdown pre code {
        background: transparent;
        color: #F0F2F8;
        padding: 0;
        border: none;
        font-size: 0.85rem;
    }

    .chat-markdown img {
        max-width: 100%;
        border-radius: 12px;
        margin: 0.5rem 0;
        box-shadow: var(--shadow-sm);
    }

    .chat-markdown a {
        color: var(--brand-primary);
        text-decoration: none;
        font-weight: 600;
        border-bottom: 2px solid var(--border-light);
        transition: all 0.2s ease;
    }

    .chat-markdown a:hover {
        border-bottom-color: var(--brand-primary);
    }

    .typing {
        color: var(--text-muted);
        margin: 0 !important;
        font-style: italic;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .typing::after {
        content: '';
        width: 8px;
        height: 8px;
        background: var(--brand-primary);
        border-radius: 50%;
        animation: typingDot 1.2s infinite;
    }

    @keyframes typingDot {
        0%, 60%, 100% { opacity: 0.2; transform: scale(0.8); }
        30% { opacity: 1; transform: scale(1.2); }
    }

    .error-message {
        color: var(--brand-danger) !important;
        margin: 0 !important;
        font-weight: 600;
        -webkit-text-fill-color: var(--brand-danger);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    /* ===== INPUT AREA ===== */
    .student-input-area {
        background: var(--surface-white);
        border-top: 1px solid var(--border-light);
        padding: 1.25rem 2.5rem 1.5rem;
        flex-shrink: 0;
        position: relative;
        z-index: 1;
        border-radius: 0 0 var(--radius-xl) var(--radius-xl);
    }

    .student-input {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        background: var(--bg-body);
        border: 2px solid transparent;
        border-radius: 60px;
        padding: 0.3rem 0.5rem 0.3rem 1.75rem;
        transition: all 0.3s ease;
        width: 100%;
        box-shadow: var(--shadow-sm);
    }

    .student-input:focus-within {
        border-color: var(--brand-primary);
        box-shadow: 0 0 0 4px rgba(108, 92, 231, 0.08), var(--shadow-md);
        background: var(--surface-white);
    }

    #question {
        flex: 1;
        border: 0;
        outline: 0;
        background: transparent;
        padding: 0.7rem 0;
        font-size: 0.95rem;
        color: var(--text-main);
        font-weight: 500;
    }

    #question::placeholder {
        color: var(--text-muted);
        font-weight: 400;
        opacity: 0.6;
    }

    #send-button {
        width: 48px;
        height: 48px;
        flex-shrink: 0;
        border: 0;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--brand-primary), #8B7CF0);
        color: white;
        cursor: pointer;
        font-size: 1.3rem;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        font-weight: bold;
        box-shadow: 0 4px 15px rgba(108, 92, 231, 0.3);
    }
    
    #send-button:hover:not(:disabled) {
        background: linear-gradient(135deg, #5A4BD1, var(--brand-primary));
        transform: scale(1.05) rotate(-5deg);
        box-shadow: 0 6px 25px rgba(108, 92, 231, 0.4);
    }

    #send-button:active:not(:disabled) {
        transform: scale(0.95);
    }

    #send-button:disabled {
        background: var(--text-muted);
        cursor: not-allowed;
        box-shadow: none;
        opacity: 0.5;
    }

    .student-input-info {
        text-align: center;
        font-size: 0.7rem;
        color: var(--text-muted);
        margin-top: 0.7rem;
        font-weight: 500;
        opacity: 0.6;
        letter-spacing: 0.02em;
    }

    .student-input-info i {
        margin-right: 0.3rem;
    }

    /* ===== RESPONSIVE ===== */
    @media(max-width: 991.98px) {
        .student-chat-page {
            padding: 0.75rem;
        }
        #chat-box {
            padding: 1.5rem 1.75rem;
        }
        .student-user-bubble {
            max-width: 80%;
        }
        .student-header {
            padding: 1.25rem 1.75rem;
        }
    }

    @media(max-width: 768px) {
        .student-chat-page {
            padding: 0;
            min-height: calc(100vh - 60px);
        }

        .student-chat {
            height: calc(100vh - 60px);
            border-radius: 0;
            border: none;
            box-shadow: none;
        }

        .student-chat::before {
            display: none;
        }

        .student-header {
            padding: 1rem 1.25rem;
            border-radius: 0;
            gap: 1rem;
        }

        .student-datuak-avatar {
            width: 44px;
            height: 44px;
            font-size: 1.2rem;
            border-radius: 14px;
        }

        .student-header h1 {
            font-size: 1.1rem;
        }
        .student-header p {
            font-size: 0.75rem;
        }

        .header-status {
            display: none;
        }

        .btn-close-mobile {
            display: flex;
        }

        .student-user-bubble, .student-bot-content {
            max-width: 90%;
        }

        #chat-box {
            padding: 1.25rem 1rem;
        }
        
        .student-input-area {
            padding: 0.75rem 1rem 1rem;
            border-radius: 0;
        }

        .student-input {
            padding: 0.2rem 0.3rem 0.2rem 1.25rem;
        }

        #send-button {
            width: 42px;
            height: 42px;
            font-size: 1.1rem;
        }

        .quick-question {
            padding: 0.5rem 1.1rem;
            font-size: 0.78rem;
        }

        .student-welcome h2 {
            font-size: 1.5rem;
        }

        .student-welcome > p {
            font-size: 0.9rem;
        }

        .topbar {
            padding: 0.5rem 1rem;
        }

        .brand-text {
            font-size: 1.2rem;
        }

        .btn-back {
            padding: 0.4rem 1rem;
            font-size: 0.75rem;
        }

        .student-user-avatar {
            width: 32px;
            height: 32px;
            font-size: 0.75rem;
        }

        .student-bot-avatar {
            width: 36px;
            height: 36px;
            font-size: 0.9rem;
        }
    }

    @media(max-width: 480px) {
        .student-user-bubble {
            max-width: 95%;
            padding: 0.7rem 1rem;
            font-size: 0.88rem;
        }

        .student-bot-bubble {
            padding: 0.8rem 1rem;
            font-size: 0.88rem;
        }

        #chat-box {
            padding: 1rem 0.75rem;
        }

        .student-input-area {
            padding: 0.6rem 0.75rem 0.85rem;
        }

        .student-input {
            padding: 0.1rem 0.2rem 0.1rem 1rem;
            border-radius: 40px;
        }

        #question {
            font-size: 0.85rem;
            padding: 0.5rem 0;
        }

        #send-button {
            width: 36px;
            height: 36px;
            font-size: 1rem;
        }

        .quick-questions {
            gap: 0.5rem;
        }

        .quick-question {
            font-size: 0.7rem;
            padding: 0.4rem 0.9rem;
        }
    }
</style>

<!-- Page Container -->
<div class="student-chat-page">
    <div class="student-chat">

        <!-- Header Chat -->
        <div class="student-header">
            <div class="student-datuak-avatar">
                <i class="fas fa-user-graduate"></i>
            </div>
            <div>
                <h1>Halo, Datuak di sini!</h1>
                <p>Teman belajarmu tentang Budaya Minangkabau</p>
            </div>
            <div class="header-status">
                <span class="status-dot"></span>
                <span>Online</span>
            </div>
            <button class="btn-close-mobile" onclick="window.history.back()">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <!-- Chat Area -->
        <div id="chat-box">

            <div class="student-welcome" id="welcome-state">
                <div class="welcome-badge">
                    <i class="fas fa-robot"></i>
                </div>
                <h2>Tanya Datuak, yuk!</h2>
                <p>Ada yang belum kamu pahami tentang materi budaya Minangkabau? Jangan ragu, tanyakan saja langsung ke Datuak.</p>

                <div class="quick-title">
                    <i class="fas fa-bolt" style="margin-right: 0.5rem;"></i> Coba tanyakan
                </div>

                <div class="quick-questions">
                    <button class="quick-question" onclick="quickQuestion('Apa itu Rumah Gadang?')">
                        <i class="fas fa-home"></i> Rumah Gadang
                    </button>
                    <button class="quick-question" onclick="quickQuestion('Apa itu Randai?')">
                        <i class="fas fa-theater-masks"></i> Randai
                    </button>
                    <button class="quick-question" onclick="quickQuestion('Apa fungsi Rangkiang?')">
                        <i class="fas fa-warehouse"></i> Rangkiang
                    </button>
                    <button class="quick-question" onclick="quickQuestion('Jelaskan tentang pakaian adat Minangkabau.')">
                        <i class="fas fa-tshirt"></i> Pakaian Adat
                    </button>
                </div>
            </div>

        </div>

        <!-- Input Area -->
        <div class="student-input-area">
            <div class="student-input">
                <input id="question" type="text" placeholder="Mau tanya apa ke Datuak?" autocomplete="off">
                <button id="send-button" type="button" onclick="sendMessage()" title="Kirim">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
            <div class="student-input-info">
                <i class="fas fa-lightbulb"></i> Tanya apa saja tentang materi Budaya Minangkabau
            </div>
        </div>

    </div>
</div>

<!-- Library Markdown -->
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>

<!-- Skrip Logika Chatbot -->
<script>
    const ASK_URL = @json(route('chatbot.ask'));
    const HISTORY_URL = @json(route('chatbot.history'));
    const CSRF_TOKEN = @json(csrf_token());

    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('question');
        input.focus();

        input.addEventListener('keydown', function (event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                sendMessage();
            }
        });

        loadHistory();
    });

    function quickQuestion(question) {
        const input = document.getElementById('question');
        input.value = question;
        sendMessage();
    }

    function scrollBottom() {
        const chatBox = document.getElementById('chat-box');
        chatBox.scrollTo({
            top: chatBox.scrollHeight,
            behavior: 'smooth'
        });
    }

    function addUserMessage(message) {
        const chatBox = document.getElementById('chat-box');
        const wrapper = document.createElement('div');
        wrapper.className = 'message message-user';

        const avatar = document.createElement('div');
        avatar.className = 'student-user-avatar';
        avatar.innerHTML = '<i class="fas fa-user"></i>';

        const bubble = document.createElement('div');
        bubble.className = 'student-user-bubble';
        bubble.textContent = message;

        wrapper.appendChild(avatar);
        wrapper.appendChild(bubble);
        chatBox.appendChild(wrapper);
    }

    function createBotMessage() {
        const chatBox = document.getElementById('chat-box');
        const wrapper = document.createElement('div');
        wrapper.className = 'message message-bot';

        const avatar = document.createElement('div');
        avatar.className = 'student-bot-avatar';
        avatar.innerHTML = '<i class="fas fa-user-graduate"></i>';

        const content = document.createElement('div');
        content.className = 'student-bot-content';

        const name = document.createElement('div');
        name.className = 'student-bot-name';
        name.textContent = 'Datuak';

        const bubble = document.createElement('div');
        bubble.className = 'student-bot-bubble chat-markdown';

        content.appendChild(name);
        content.appendChild(bubble);
        wrapper.appendChild(avatar);
        wrapper.appendChild(content);
        chatBox.appendChild(wrapper);

        return bubble;
    }

    function addBotMessage(message) {
        const bubble = createBotMessage();
        bubble.innerHTML = marked.parse(message ?? '');
        return bubble;
    }

    async function loadHistory() {
        try {
            const response = await fetch(HISTORY_URL, {
                headers: {
                    'Accept': 'application/json'
                }
            });

            if (!response.ok) {
                throw new Error('Gagal mengambil riwayat chat.');
            }

            const result = await response.json();
            const history = result.data ?? [];

            if (history.length > 0) {
                document.getElementById('welcome-state')?.remove();
            }

            history.forEach(chat => {
                if (chat.role === 'user') {
                    addUserMessage(chat.message);
                } else {
                    addBotMessage(chat.message);
                }
            });

            scrollBottom();

        } catch (error) {
            console.error('History error:', error);
        }
    }

    async function sendMessage() {
        const input = document.getElementById('question');
        const button = document.getElementById('send-button');
        const question = input.value.trim();

        if (!question || button.disabled) {
            return;
        }

        document.getElementById('welcome-state')?.remove();
        addUserMessage(question);

        input.value = '';
        button.disabled = true;
        button.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';

        const botBubble = createBotMessage();
        botBubble.innerHTML = '<p class="typing">Datuak sedang berpikir</p>';
        scrollBottom();

        try {
            const response = await fetch(ASK_URL, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': CSRF_TOKEN
                },
                body: JSON.stringify({ question: question })
            });

            const data = await response.json();

            if (!response.ok) {
                console.error('Chatbot error:', data);
                const message = data.details?.error?.message ?? data.error ?? data.message ?? 'Terjadi kesalahan pada server.';
                botBubble.innerHTML = '';
                
                const error = document.createElement('p');
                error.className = 'error-message';
                error.textContent = 'Perhatian: ' + message;
                botBubble.appendChild(error);
                return;
            }

            if (!data.reply) {
                botBubble.innerHTML = '<p class="error-message">Datuak belum bisa memberikan jawaban.</p>';
                return;
            }

            botBubble.innerHTML = marked.parse(data.reply);

        } catch (error) {
            console.error(error);
            botBubble.innerHTML = '';
            
            const errorElement = document.createElement('p');
            errorElement.className = 'error-message';
            errorElement.textContent = 'Gagal menghubungi Datuak: ' + error.message;
            botBubble.appendChild(errorElement);

        } finally {
            button.disabled = false;
            button.innerHTML = '<i class="fas fa-paper-plane"></i>';
            input.focus();
            scrollBottom();
        }
    }
</script>
@endsection