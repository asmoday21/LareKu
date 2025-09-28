@extends('siswa.siswa_master')
@section('siswa')
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Chat dengan Datuak</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    /* Custom animations */
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes slideInLeft {
      from { opacity: 0; transform: translateX(-20px); }
      to { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes slideInRight {
      from { opacity: 0; transform: translateX(20px); }
      to { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes pulse {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.5; }
    }
    
    @keyframes typing {
      0%, 60%, 100% { transform: translateY(0); }
      30% { transform: translateY(-10px); }
    }
    
    .animate-fade-in { animation: fadeInUp 0.5s ease-out; }
    .animate-slide-left { animation: slideInLeft 0.4s ease-out; }
    .animate-slide-right { animation: slideInRight 0.4s ease-out; }
    .animate-pulse { animation: pulse 1.5s infinite; }
    .typing-indicator::before {
      content: '⋯';
      animation: typing 1.4s infinite;
      font-size: 1.2em;
    }

    /* Enhanced scrollbar */
    #chat-box::-webkit-scrollbar { width: 8px; }
    #chat-box::-webkit-scrollbar-track { background: rgba(156, 163, 175, 0.1); border-radius: 4px; }
    #chat-box::-webkit-scrollbar-thumb { 
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
      border-radius: 4px; 
      transition: all 0.3s ease;
    }
    #chat-box::-webkit-scrollbar-thumb:hover { 
      background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%); 
    }

    /* Enhanced Markdown styling */
    .chat-markdown { font-family: 'Inter', system-ui, sans-serif; }
    .chat-markdown h1 { 
      font-size: 1.5rem; font-weight: 700; margin: 0.75rem 0; 
      color: #1e3a8a; border-bottom: 2px solid #3b82f6; padding-bottom: 0.25rem;
    }
    .chat-markdown h2 { 
      font-size: 1.25rem; font-weight: 600; margin: 0.5rem 0; 
      color: #1e40af; border-left: 3px solid #3b82f6; padding-left: 0.5rem;
    }
    .chat-markdown h3 { font-size: 1.1rem; font-weight: 600; margin: 0.25rem 0; color: #4338ca; }
    .chat-markdown p { margin: 0.5rem 0; line-height: 1.7; color: #1f2937; }

    .chat-markdown strong { font-weight: 700; color: #111827; }
    .chat-markdown em { font-style: italic; color: #374151; }
    .chat-markdown code { 
      background: linear-gradient(135deg, #e0f2fe 0%, #f0f9ff 100%); 
      color: #0369a1; padding: 3px 6px; border-radius: 6px; 
      font-size: 0.875rem; border: 1px solid #bae6fd;
    }

    .chat-markdown ol { 
      list-style-type: decimal; margin: 0.5rem 0 0.5rem 1.5rem; 
      color: #1d4ed8; counter-reset: item;
    }
    .chat-markdown ul { list-style: none; margin: 0.5rem 0 0.5rem 1rem; padding: 0; }
    .chat-markdown ul li::before { 
      content: "▸"; margin-right: 0.75rem; color: #0ea5e9; 
      font-weight: bold; font-size: 1.1em;
    }

    .chat-markdown blockquote {
      border-left: 4px solid #3b82f6;
      background: linear-gradient(135deg, #eff6ff 0%, #f8fafc 100%);
      padding: 0.75rem 1rem; margin: 0.75rem 0; border-radius: 0.5rem;
      color: #1e3a8a; font-style: italic; box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }

    .chat-markdown table { 
      border-collapse: collapse; margin: 0.75rem 0; width: 100%; 
      box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-radius: 0.5rem; overflow: hidden;
    }
    .chat-markdown th, .chat-markdown td {
      border: 1px solid #e5e7eb; padding: 0.75rem; text-align: left;
    }
    .chat-markdown th { 
      background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%); 
      font-weight: 600; color: #374151;
    }
    .chat-markdown tr:nth-child(even) { background: #f9fafb; }
    .chat-markdown tr:hover { background: #f3f4f6; transition: background-color 0.2s; }

    /* Message bubble enhancements */
    .user-message {
      background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 50%, #7c3aed 100%);
      box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
    }
    
    .bot-message {
      background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      border: 1px solid #e2e8f0;
    }
    
    .bot-avatar {
      background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 50%, #7c3aed 100%);
      box-shadow: 0 2px 8px rgba(59, 130, 246, 0.4);
    }

    /* Input enhancements */
    .chat-input {
      background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
      border: 2px solid #e2e8f0;
      transition: all 0.3s ease;
    }
    .chat-input:focus {
      border-color: #3b82f6;
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
      background: #ffffff;
    }

    .send-button {
      background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 50%, #7c3aed 100%);
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
    }
    .send-button:hover {
      transform: translateY(-1px);
      box-shadow: 0 6px 16px rgba(59, 130, 246, 0.4);
    }
    .send-button:active { transform: translateY(0); }

    /* Mobile responsiveness */
    @media (max-width: 768px) {
      .chat-markdown h1 { font-size: 1.25rem; }
      .chat-markdown h2 { font-size: 1.1rem; }
      .user-message, .bot-message { max-width: 85%; }
    }
  </style>
</head>
<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 flex flex-col h-screen">

  <!-- Enhanced Header -->
  <div class="bg-gradient-to-r from-blue-600 via-indigo-700 to-purple-700 text-white p-4 shadow-lg">
    <div class="flex items-center space-x-3">
      <div class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
        <i class="fas fa-robot text-lg"></i>
      </div>
      <div>
        <h1 class="text-xl font-bold">Chat dengan Datuak</h1>
        <p class="text-sm opacity-80 flex items-center">
          <i class="fas fa-circle text-green-400 text-xs mr-2"></i>
          Asisten Budaya & Pembelajaran Online
        </p>
      </div>
    </div>
  </div>

  <!-- Enhanced Chat Area -->
  <div class="flex-1 overflow-y-auto p-4 md:p-6 space-y-4" id="chat-box">
    <div class="text-center py-8" id="welcome-state">
      <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full mb-4 animate-pulse">
        <i class="fas fa-comments text-white text-xl"></i>
      </div>
      <p class="text-gray-600 text-lg font-medium mb-2">Selamat datang! 👋</p>
      <p class="text-gray-500">Mulai percakapan dengan Datuak, asisten budaya dan pembelajaran yang siap membantu Anda</p>
    </div>
  </div>

  <!-- Enhanced Input Area -->
  <div class="p-4 bg-white bg-opacity-60 backdrop-blur-sm border-t border-gray-200">
    <div class="flex space-x-3 max-w-4xl mx-auto">
      <div class="flex-1 relative">
        <input id="question" type="text"
               class="chat-input w-full rounded-full px-6 py-3 focus:outline-none text-gray-800 placeholder-gray-500"
               placeholder="Ketik pesan Anda di sini..."
               onkeydown="if(event.key==='Enter') sendMessage()">
        <div class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400">
          <i class="fas fa-keyboard"></i>
        </div>
      </div>
      <button onclick="sendMessage()"
              class="send-button text-white px-6 py-3 rounded-full font-medium flex items-center space-x-2">
        <span>Kirim</span>
        <i class="fas fa-paper-plane"></i>
      </button>
    </div>
    <div class="text-center mt-2 pb-0">
      <p class="text-xs text-gray-500">Tekan Enter atau klik tombol Kirim untuk mengirim pesan</p>
    </div>
  </div>

<script>
// --- Enhanced Markdown Parser ---
function parseMarkdown(text) {
  let html = text;

  // Headers with enhanced styling
  html = html.replace(/^### (.*$)/gim, '<h3>$1</h3>');
  html = html.replace(/^## (.*$)/gim, '<h2>$1</h2>');
  html = html.replace(/^# (.*$)/gim, '<h1>$1</h1>');
  html = html.replace(/^> (.*$)/gim, '<blockquote>$1</blockquote>');
  html = html.replace(/\*\*(.*?)\*\*/gim, '<strong>$1</strong>');
  html = html.replace(/\*(.*?)\*/gim, '<em>$1</em>');
  html = html.replace(/`(.*?)`/gim, '<code>$1</code>');

  // Enhanced lists
  html = html.replace(/((?:^\d+\..+\n?)+)/gm, match => {
    let items = match.trim().split(/\n/).map(line => {
      return '<li>' + line.replace(/^\d+\.\s?/, '') + '</li>';
    }).join('');
    return '<ol>' + items + '</ol>';
  });

  html = html.replace(/((?:^- .+\n?)+)/gm, match => {
    let items = match.trim().split(/\n/).map(line => {
      return '<li>' + line.replace(/^-+\s?/, '') + '</li>';
    }).join('');
    return '<ul>' + items + '</ul>';
  });

  // Enhanced tables
  if (/\|(.+)\|/.test(html)) {
    html = html.replace(/^\|(.+)\|\n\|([-:\s|]+)\|\n((?:\|.*\|\n?)*)/gm, (match, header, align, body) => {
      let headers = header.split("|").map(h => `<th>${h.trim()}</th>`).join("");
      let rows = body.trim().split("\n").map(row => {
        let cols = row.split("|").map(c => `<td>${c.trim()}</td>`).join("");
        return `<tr>${cols}</tr>`;
      }).join("");
      return `<table><thead><tr>${headers}</tr></thead><tbody>${rows}</tbody></table>`;
    });
  }

  // Paragraph handling
  html = html.replace(/\n{2,}/g, '</p><p>');
  html = '<p>' + html + '</p>';

  return html;
}

// --- Enhanced Load History ---
document.addEventListener('DOMContentLoaded', async function() {
  document.getElementById('question').focus();

  let chatBox = document.getElementById('chat-box');
  let response = await fetch("{{ route('chatbot.history') }}");
  let history = await response.json();

  if (history.length > 0) {
    document.getElementById('welcome-state')?.remove();
  }

  history.forEach((chat, index) => {
    setTimeout(() => {
      if (chat.role === 'user') {
        chatBox.innerHTML += `
          <div class="flex justify-end animate-slide-right">
            <div class="user-message text-white px-5 py-3 rounded-2xl rounded-tr-md max-w-md md:max-w-lg">
              ${chat.message}
            </div>
          </div>
        `;
      } else {
        chatBox.innerHTML += `
          <div class="flex items-start space-x-3 animate-slide-left">
            <div class="bot-avatar w-10 h-10 rounded-full flex items-center justify-center text-white text-sm font-bold flex-shrink-0">
              <i class="fas fa-robot"></i>
            </div>
            <div class="bot-message px-5 py-3 rounded-2xl rounded-tl-md max-w-md md:max-w-lg chat-markdown">
              ${parseMarkdown(chat.message)}
            </div>
          </div>
        `;
      }
      chatBox.scrollTo({ top: chatBox.scrollHeight, behavior: 'smooth' });
    }, index * 100);
  });
});

// --- Enhanced Send Message ---
async function sendMessage() {
  let input = document.getElementById('question');
  let question = input.value.trim();
  if (!question) return;

  let chatBox = document.getElementById('chat-box');
  let welcomeState = document.getElementById('welcome-state');
  if (welcomeState) welcomeState.remove();

  // Add user message with enhanced animation
  chatBox.innerHTML += `
    <div class="flex justify-end animate-slide-right">
      <div class="user-message text-white px-5 py-3 rounded-2xl rounded-tr-md max-w-md md:max-w-lg">
        ${question}
      </div>
    </div>
  `;
  input.value = "";
  chatBox.scrollTo({ top: chatBox.scrollHeight, behavior: 'smooth' });

  // Add typing indicator
  let botId = "bot-" + Date.now();
  chatBox.innerHTML += `
    <div id="${botId}" class="flex items-start space-x-3 animate-slide-left">
      <div class="bot-avatar w-10 h-10 rounded-full flex items-center justify-center text-white text-sm font-bold animate-pulse">
        <i class="fas fa-robot"></i>
      </div>
      <div class="bot-message px-5 py-3 rounded-2xl rounded-tl-md max-w-md md:max-w-lg chat-markdown">
        <div class="flex items-center space-x-2 text-gray-500">
          <div class="typing-indicator"></div>
          <span>Datuak sedang mengetik</span>
        </div>
      </div>
    </div>
  `;
  chatBox.scrollTo({ top: chatBox.scrollHeight, behavior: 'smooth' });

  try {
    let response = await fetch("{{ route('chatbot.ask') }}", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
      },
      body: JSON.stringify({ question })
    });

    let data = await response.json();
    const replyElement = document.querySelector(`#${botId} .chat-markdown`);
    replyElement.innerHTML = parseMarkdown(data.reply || "⚠️ Tidak ada respon.");
    chatBox.scrollTo({ top: chatBox.scrollHeight, behavior: 'smooth' });
  } catch (err) {
    const replyElement = document.querySelector(`#${botId} .chat-markdown`);
    replyElement.innerHTML = `
      <div class="flex items-center space-x-2 text-red-500">
        <i class="fas fa-exclamation-triangle"></i>
        <span>Error: ${err.message}</span>
      </div>
    `;
  }
}

// Enhanced input focus management
document.getElementById('question').addEventListener('focus', function() {
  this.parentElement.style.transform = 'scale(1.02)';
});

document.getElementById('question').addEventListener('blur', function() {
  this.parentElement.style.transform = 'scale(1)';
});
</script>
</body>
</html>
@endsection