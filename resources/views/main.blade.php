<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Perfil — Painel</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0b3b50] text-gray-900 min-h-screen">
  <div class="max-w-7xl mx-auto p-6">

    <!-- Cabecalho / Header -->
    <header class="mb-6">
      <div class="flex items-center justify-between gap-4">
        <div class="flex items-center gap-4">
          <a href="#" class="flex items-center gap-3">
            <img src="{{ asset('images/logo-placeholder.png') }}" alt="Logo" class="h-10 w-auto">
            <span class="text-white text-xl font-bold">Nome do Site</span>
          </a>
          <nav class="hidden md:flex items-center gap-4 text-sm text-white/90">
            <a class="hover:underline" href="#">Início</a>
            <a class="hover:underline" href="#">Perfil</a>
            <a class="hover:underline" href="#">Mensagens</a>
            <a class="hover:underline" href="#">Notificações</a>
            <a class="hover:underline" href="#">Vagas</a>
          </nav>
        </div>

        <div class="flex items-center gap-4">
          <div class="hidden md:flex items-center bg-white/10 rounded-md px-3 py-1">
            <svg class="w-4 h-4 text-white/60 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M16.65 16.65A7 7 0 1110 3a7 7 0 016.65 13.65z"></path></svg>
            <input type="search" placeholder="Pesquisar" class="bg-transparent outline-none text-white text-sm w-48">
          </div>

          <a href="#" class="text-white/90 text-sm hidden sm:inline">Criar conta</a>

          <div class="relative">
            <button class="flex items-center gap-2 bg-white/10 hover:bg-white/15 rounded-full px-3 py-1 text-white text-sm">
              <img src="{{ asset('images/avatar-placeholder.png') }}" alt="Avatar" class="w-7 h-7 rounded-full object-cover">
              <span class="hidden sm:inline">Você</span>
            </button>
            <!-- dropdown placeholder -->
          </div>
        </div>
      </div>
    </header>

    <!-- Grid: main (2/3) + sidebar (1/3) -->
    <main class="grid grid-cols-1 lg:grid-cols-3 gap-6">
      <!-- Coluna principal -->
      <section class="lg:col-span-2 space-y-6">
        <!-- Cartão de cabeçalho do perfil -->
        <div class="relative rounded-lg overflow-hidden bg-gradient-to-r from-[#083a4b] to-[#0f4b5e] shadow-lg">
          <div class="h-40 bg-[url('/images/cover-placeholder.jpg')] bg-cover bg-center"></div>
          <div class="p-6 flex gap-6 items-center">
            <img src="{{ asset('images/avatar-placeholder.png') }}" alt="avatar" class="w-28 h-28 rounded-full ring-4 ring-white/90 object-cover shadow-md -mt-16">
            <div class="flex-1">
              <h2 class="text-2xl font-semibold text-white">Lauren Bowen</h2>
              <p class="text-sm text-white/80">Design é a minha arte de vida — San Francisco, CA</p>
              <div class="mt-3 flex gap-3">
                <button class="px-4 py-2 bg-emerald-500 text-white rounded-full text-sm">Conectar</button>
                <button class="px-4 py-2 bg-white/10 text-white rounded-full text-sm">Mensagem</button>
              </div>
            </div>
            <div class="text-right">
              <div class="text-white/90 text-sm">500+ conexões</div>
            </div>
          </div>
        </div>

        <!-- Atividade / Publicações -->
        <div class="bg-white rounded-lg shadow p-5">
          <h3 class="text-lg font-semibold mb-3">Atividade</h3>
          <div class="space-y-4">
            <div class="p-4 border rounded">
              <div class="text-sm text-gray-700">Como influenciar a cultura da sua empresa — <span class="text-xs text-gray-500">1 hora atrás</span></div>
              <p class="mt-2 text-sm text-gray-600">Benefícios, vantagens e remuneração podem criar uma imagem atraente para recrutamento...</p>
              <div class="mt-3 flex gap-4 text-sm text-gray-500">
                <button>Curtir</button><button>Comentar</button><button>Compartilhar</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Resumo e experiência -->
        <div class="bg-white rounded-lg shadow p-5 grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <h4 class="font-semibold mb-2">Resumo</h4>
            <p class="text-sm text-gray-600">Minha paixão por criar e construir serviu como fundamento pivotal na minha carreira como engenheira e designer...</p>
          </div>
          <div>
            <h4 class="font-semibold mb-2">Resumo profissional</h4>
            <ul class="text-sm text-gray-600 list-disc list-inside space-y-2">
              <li>LinkedIn, Napkin Sketches</li>
              <li>Advent Software — Product Designer</li>
            </ul>
          </div>
        </div>

        <!-- Habilidades / especialidades -->
        <div class="bg-white rounded-lg shadow p-5">
          <h4 class="font-semibold mb-3">Habilidades & Especialidades</h4>
          <div class="flex flex-wrap gap-2">
            <span class="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-full text-sm">UX Design</span>
            <span class="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-full text-sm">Ilustração</span>
            <span class="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-full text-sm">Design de Produto</span>
          </div>
        </div>
      </section>

      <!-- Barra lateral -->
      <aside class="space-y-6">
        <div class="bg-white rounded-lg shadow p-5 text-center">
          <div class="w-24 h-24 mx-auto rounded-full bg-emerald-500/10 flex items-center justify-center text-2xl font-bold text-emerald-600">A</div>
          <p class="mt-3 text-sm text-gray-600">Força do perfil</p>
          <div class="mt-4">
            <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
              <div class="h-full w-3/4 bg-emerald-500"></div>
            </div>
            <div class="mt-2 text-sm text-gray-500">All-Star</div>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow p-4">
          <h5 class="font-semibold mb-3">Pessoas que você talvez conheça</h5>
          <ul class="space-y-3">
            <li class="flex items-center gap-3">
              <img src="{{ asset('images/avatar-placeholder.png') }}" class="w-10 h-10 rounded-full" alt="">
              <div class="text-sm">
                <div class="font-medium">Juliana Williams</div>
                <div class="text-xs text-gray-500">Diretora de Design</div>
              </div>
            </li>
            <li class="flex items-center gap-3">
              <img src="{{ asset('images/avatar-placeholder.png') }}" class="w-10 h-10 rounded-full" alt="">
              <div class="text-sm">
                <div class="font-medium">Carlos Silva</div>
                <div class="text-xs text-gray-500">Gerente de Produto</div>
              </div>
            </li>
          </ul>
        </div>

        <div class="bg-white rounded-lg shadow p-4 text-sm text-gray-600">
          <div class="mb-2 font-semibold">Sua rede</div>
          <div class="text-3xl font-bold text-emerald-600">230</div>
          <div class="mt-2">Conexões</div>
        </div>
      </aside>
    </main>
  </div>



















<style>
    body {
      margin: 0;
      background: #0d1117;
      color: #fff;
      font-family: system-ui, sans-serif;
    }
    .chat-widget{
        position:fixed;
        bottom:20px;
        right: 20px;
        widows: 350px;
        transition: all .3d ease;
        font-family: Arial, sans-serif;
    }
    .chat-widget.minimized{
        height:50px;
        width: 180px;
        cursor:pointer;
        overflow: hidden;
    }
    .chat-widget:not(.minimized) .chat-toggle{
        display: none;
    }


    .chat-toggle{
        background: #007Bff;
        color: white;
        padding:10px;
        border-radius:10px;
        text-align:center;
        font-weight: bold;
        user-select: none;

    }
    /* Contenedor general */
    .chat-container {
      /*position: fixed;*/
      /*right: 20px;
      bottom: 20px;
      width: 320px;

      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.5);*/
      background: #161b22;
      bottom: 20px;
      width: 320px;
      border-radius: 10px;
      display: flex;
      overflow: hidden;
      flex-direction: column;
      animation: slide-up 0.4s ease;
    }

    .chat-header {
      background: #1f6feb;
      padding: 10px 14px;
      font-weight: bold;
      font-size: 15px;
    }

    .chat-body {
      padding: 10px;
      height: 260px;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .chat-footer {
      display: flex;
      border-top: 1px solid #2d333b;
      background: #0d1117;
    }

    .chat-footer input {
      flex: 1;
      border: none;
      background: transparent;
      padding: 10px;
      color: #fff;
      font-size: 14px;
      outline: none;
    }

    .chat-footer button {
      background: #1f6feb;
      border: none;
      color: #fff;
      padding: 10px 14px;
      cursor: pointer;
      transition: background 0.2s;
      font-weight: bold;
    }

    .chat-footer button:hover {
      background: #2b7cff;
    }

    /* Burbujas */
    .bubble {
      max-width: 80%;
      padding: 10px 12px;
      border-radius: 12px;
      font-size: 14px;
      line-height: 1.4;
      word-wrap: break-word;
      animation: fade-in 0.3s ease;
    }

    .me {
      background: linear-gradient(180deg,#2b7cff,#1b5fd3);
      align-self: flex-end;
    }

    .bot {
      background: #30363d;
      align-self: flex-start;
    }

    /* Efecto escribiendo */
    .typing {
      display: flex;
      align-items: center;
      gap: 4px;
      height: 16px;
      background: #30363d;
      border-radius: 12px;
      padding: 8px 10px;
      align-self: flex-start;
    }

    .dot {
      width: 6px;
      height: 6px;
      background-color: #fff;
      border-radius: 50%;
      opacity: 0.3;
      animation: blink 1.4s infinite;
    }

    .dot:nth-child(2) { animation-delay: 0.2s; }
    .dot:nth-child(3) { animation-delay: 0.4s; }

    @keyframes blink {
      0%, 80%, 100% { opacity: 0.3; transform: translateY(0); }
      40% { opacity: 1; transform: translateY(-2px); }
    }

    @keyframes slide-up {
      from { transform: translateY(10px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    @keyframes fade-in {
      from { opacity: 0; transform: scale(0.98); }
      to { opacity: 1; transform: scale(1); }
    }
  </style>

<div id="chatWidget" class="chat-widget minimized">
    <div class="chat-toggle" >
        💬 Chat IASBCP
    </div>

  <div class="chat-container ">
    <div class="chat-header ">💬 Chat IASBCP</div>
    <div class="chat-body " id="chatBody">
      <div class="bubble bot">  Olá 👋, sou a inteligência artificial da SBCP, me diga como posso te ajudar hoje?</div>
    </div>

    <div class="chat-footer">
      <input type="text" id="chatInput" placeholder="Escribe un mensaje..." autocomplete="off">
      <button id="sendBtn">Enviar</button>
    </div>
  </div>
</div>
  <script>
    const chatWidget = document.getElementById('chatWidget');
    const toggleBtn = chatWidget.querySelector('.chat-toggle');
    const chatBody = document.getElementById('chatBody');
    const chatInput = document.getElementById('chatInput');
    const sendBtn = document.getElementById('sendBtn');

    toggleBtn.addEventListener('click', ()=>{
        chatWidget.classList.toggle('minimized');

    });


    function appendMessage(text, type = 'me') {
      const div = document.createElement('div');
      div.classList.add('bubble', type);
      div.textContent = text;
      chatBody.appendChild(div);
      chatBody.scrollTop = chatBody.scrollHeight;
    }

    function appendTyping() {
      const typing = document.createElement('div');
      typing.classList.add('typing');
      typing.innerHTML = '<div class="dot"></div><div class="dot"></div><div class="dot"></div>';
      chatBody.appendChild(typing);
      chatBody.scrollTop = chatBody.scrollHeight;
      return typing;
    }

    sendBtn.addEventListener('click', () => {
      const text = chatInput.value.trim();
      if (!text) return;
      appendMessage(text, 'me');
      chatInput.value = '';

      const typing = appendTyping();

      setTimeout(() => {
        typing.remove();
        appendMessage('Claro. Dr Eduardo Cano. Se já completou todas as informações do seu perfil. É só entrar na aba Solicitações, ali consegue fazer a busca do estágio da sua preferência. 👍', 'bot');
      }, 1500);
    });

    chatInput.addEventListener('keypress', e => {
      if (e.key === 'Enter') sendBtn.click();
    });
  </script>
</body>
</html>
