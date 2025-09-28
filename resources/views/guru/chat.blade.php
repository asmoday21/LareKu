@extends('guru.guru_master')
@section('guru')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chat dengan Datuak</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <style>
        /* Animasi */
        @keyframes fadeInUp { from{opacity:0;transform:translateY(20px);} to{opacity:1;transform:translateY(0);} }
        .animate-fade-in { animation: fadeInUp 0.3s ease-out; }

        /* Scrollbar */
        #chat-box::-webkit-scrollbar { width: 6px; }
        #chat-box::-webkit-scrollbar-thumb { background: linear-gradient(135deg,#667eea,#764ba2); border-radius: 3px; }

        /* Markdown Styling */
        .chat-markdown { max-width: none !important; font-size:0.95rem; line-height:1.6; }

        .chat-markdown h1 { font-size:1.5rem;font-weight:700;margin:1rem 0;color:#1e3a8a; }
        .chat-markdown h2 { font-size:1.3rem;font-weight:600;margin:0.75rem 0;color:#1e40af; }
        .chat-markdown h3 { font-size:1.1rem;font-weight:600;margin:0.5rem 0;color:#4338ca; }

        .chat-markdown p { margin:0.5rem 0;color:#1f2937; }
        .chat-markdown strong { font-weight:700;color:#111827; }
        .chat-markdown em { font-style:italic;color:#374151; }

        .chat-markdown code { background:#e0f2fe;color:#0369a1;padding:2px 4px;border-radius:4px;font-size:0.875rem; }
        .chat-markdown pre { background:#f4f4f4;padding:1rem;border-radius:0.5rem;overflow-x:auto;border:1px solid #e0e0e0;font-family:'Courier New', monospace; }

        /* List multi-level */
        .chat-markdown ol { counter-reset: li; margin:0.5rem 0 0.5rem 1.5rem; padding-left:0; }
        .chat-markdown ol li { list-style: decimal; margin:0.25rem 0; }
        .chat-markdown ol li ol { margin-top:0; margin-bottom:0; }
        .chat-markdown ul { margin:0.5rem 0 0.5rem 1.5rem; padding-left:0; }
        .chat-markdown ul li { list-style: disc; margin:0.25rem 0; }
        .chat-markdown ul li ul { margin-top:0; margin-bottom:0; }

        .chat-markdown blockquote {
            border-left:4px solid #3b82f6;
            background:#eff6ff;
            padding:0.5rem 1rem;
            margin:0.5rem 0;
            border-radius:0.25rem;
            color:#1e3a8a;
            font-style:italic;
        }

        .chat-markdown table { border-collapse:collapse;margin:0.75rem 0;width:100%; }
        .chat-markdown th, .chat-markdown td { border:1px solid #d1d5db;padding:0.5rem;text-align:left; }
        .chat-markdown th { background:#f3f4f6;font-weight:600; }
        .chat-markdown tr:nth-child(even) { background:#f9fafb; }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-100 flex flex-col h-screen">

    <!-- Header -->
    <div class="bg-gradient-to-r from-blue-500 via-indigo-600 to-purple-600 text-white p-4">
        <h1 class="text-xl font-bold">🤖 Chat dengan Datuak</h1>
        <p class="text-sm opacity-80">Asisten Budaya & Pembelajaran</p>
    </div>

    <!-- Chat Area -->
    <div class="flex-1 overflow-y-auto p-6 space-y-4" id="chat-box">
        <div class="text-gray-500 text-center" id="welcome-state">
            💬 Mulai percakapan, Datuak siap menjawab pertanyaanmu!
        </div>
    </div>

    <!-- Input Area -->
    <div class="p-4 bg-white border-t border-gray-200 flex space-x-2">
        <input id="question" type="text"
               class="flex-1 border-2 border-blue-200 rounded-full px-4 py-2 focus:outline-none"
               placeholder="Tanyakan sesuatu ke Datuak..."
               onkeydown="if(event.key==='Enter') sendMessage()">
        <button onclick="sendMessage()"
                class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-6 py-2 rounded-full shadow">
            Kirim 🚀
        </button>
    </div>

<script>
const renderer = new marked.Renderer();

// List multi-level otomatis
renderer.list = (body, ordered) => {
    return `<${ordered ? 'ol' : 'ul'} class="ml-6 space-y-1 ${ordered ? 'list-decimal' : 'list-disc'}">${body}</${ordered ? 'ol' : 'ul'}>`;
};

// Heading
renderer.heading = (text, level) => {
    const sizes = {1:'text-2xl font-bold my-2',2:'text-xl font-semibold my-1.5',3:'text-lg font-semibold my-1'};
    return `<h${level} class="${sizes[level] || 'text-base font-medium'}">${text}</h${level}>`;
};

// Set marked
marked.setOptions({ renderer });

document.addEventListener('DOMContentLoaded', async function() {
    document.getElementById('question').focus();
    let chatBox = document.getElementById('chat-box');

    let response = await fetch("/chatbot/history");
    let history = await response.json();

    if (history.length > 0) document.getElementById('welcome-state')?.remove();

    history.forEach(chat => {
        if (chat.role === 'user') {
            chatBox.innerHTML += `
                <div class="flex justify-end animate-fade-in">
                    <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-4 py-2 rounded-2xl rounded-tr-sm max-w-lg shadow">
                        ${chat.message}
                    </div>
                </div>
            `;
        } else {
            chatBox.innerHTML += `
                <div class="flex items-start space-x-3 animate-fade-in">
                    <div class="w-8 h-8 bg-gradient-to-r from-blue-400 to-indigo-500 rounded-full flex items-center justify-center text-white text-sm">D</div>
                    <div class="bg-white px-4 py-2 rounded-2xl shadow border max-w-lg chat-markdown">
                        ${marked.parse(chat.message)}
                    </div>
                </div>
            `;
        }
    });
    chatBox.scrollTo({ top: chatBox.scrollHeight, behavior: 'smooth' });
});

async function sendMessage() {
    let input = document.getElementById('question');
    let question = input.value.trim();
    if (!question) return;

    let chatBox = document.getElementById('chat-box');
    document.getElementById('welcome-state')?.remove();

    chatBox.innerHTML += `
        <div class="flex justify-end animate-fade-in">
            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-4 py-2 rounded-2xl rounded-tr-sm max-w-lg shadow">
                ${question}
            </div>
        </div>
    `;
    input.value = "";
    chatBox.scrollTo({ top: chatBox.scrollHeight, behavior: 'smooth' });

    let botId = "bot-" + Date.now();
    chatBox.innerHTML += `
        <div id="${botId}" class="flex items-start space-x-3 animate-fade-in">
            <div class="w-8 h-8 bg-gradient-to-r from-blue-400 to-indigo-500 rounded-full flex items-center justify-center text-white text-sm">D</div>
            <div class="bg-white px-4 py-2 rounded-2xl shadow border max-w-lg chat-markdown">
                <p class="text-gray-400">Sedang mengetik...</p>
            </div>
        </div>
    `;
    chatBox.scrollTo({ top: chatBox.scrollHeight, behavior: 'smooth' });

    try {
        let response = await fetch("/chatbot/ask", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ question })
        });

        let data = await response.json();
        const replyElement = document.querySelector(`#${botId} .chat-markdown`);
        replyElement.innerHTML = marked.parse(data.reply || "⚠️ Tidak ada respon.");
        chatBox.scrollTo({ top: chatBox.scrollHeight, behavior: 'smooth' });
    } catch (err) {
        const replyElement = document.querySelector(`#${botId} .chat-markdown`);
        replyElement.innerHTML = `<p class="text-red-500">⚠️ Error: ${err.message}</p>`;
    }
}
</script>
</body>
</html>
@endsection
