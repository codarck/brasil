<x-app-layout>
  <div class="max-w-7xl mx-auto p-6">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
      <!-- Contactos (columna izquierda) -->
      <aside class="lg:col-span-1 bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-center justify-between mb-4">
          <h3 class="text-lg font-semibold text-white">Conversas</h3>
          <span class="text-sm text-white/70">status</span>
        </div>

        <div class="mb-3">
          <input id="contact-search" type="search" placeholder="Buscar contacto..."
            class="w-full px-3 py-2 rounded bg-white/3 placeholder-white/70  outline-none" />
        </div>

        <ul id="contactsList" class="space-y-3">
          <!-- Removed legacy contacts: Dr. Eduardo, Enfermería, Coordenación -->
            <li data-id="7" class="contact-item cursor-pointer flex flex-col md:flex-row md:items-center gap-3 p-2 rounded hover:bg-white/6">
            <img src="{{asset('storage/lucas.png')}}" class="w-10 h-10 rounded-full mx-auto md:mx-0" alt="">
            <div class="flex-1 min-w-0">
              <div class="flex flex-col md:flex-row md:justify-between md:items-center w-full">
                <span class="font-medium text-white text-center md:text-left">Dr Lucas Rinaldi</span>
                <span class="text-xs text-emerald-300 mt-1 md:mt-0 md:ml-2 text-center md:text-right">conectado</span>
              </div>
              <div class="text-sm text-white/70 truncate mt-1">Clínica, Tatuapé, São Paulo</div>
            </div>
          </li>
          <li data-id="4" class="contact-item cursor-pointer flex flex-col md:flex-row md:items-center gap-3 p-2 rounded hover:bg-white/6">
            <img src="{{asset('storage/Clínica_plastique.png')}}" class="w-10 h-10 rounded-full mx-auto md:mx-0" alt="">
            <div class="flex-1 min-w-0">
              <div class="flex flex-col md:flex-row md:justify-between md:items-center w-full">
                <span class="font-medium text-white text-center md:text-left">Clínica Plastiquè</span>
                <span class="text-xs text-white/60 mt-1 md:mt-0 md:ml-2 text-center md:text-right">desconectado</span>
              </div>
              <div class="text-sm text-white/70 truncate mt-1">Clínica, Tatuapé, São Paulo</div>
            </div>
          </li>
          <li data-id="6" class="contact-item cursor-pointer flex flex-col md:flex-row md:items-center gap-3 p-2 rounded hover:bg-white/6">
            <img src="{{asset('storage/aline.png')}}" class="w-10 h-10 rounded-full mx-auto md:mx-0" alt="">
            <div class="flex-1 min-w-0">
              <div class="flex flex-col md:flex-row md:justify-between md:items-center w-full">
                <span class="font-medium text-white text-center md:text-left">Dra Aline Campos</span>
                <span class="text-xs text-emerald-300 mt-1 md:mt-0 md:ml-2 text-center md:text-right">conectado</span>
              </div>
              <div class="text-sm text-white/70 truncate mt-1">Cirurgiã plástica credenciada, Moema, <br> São Paulo</div>
            </div>
          </li>
          <li data-id="8" class="contact-item cursor-pointer flex flex-col md:flex-row md:items-center gap-3 p-2 rounded hover:bg-white/6">
            <img src="{{asset('storage/sony.png')}}" class="w-10 h-10 rounded-full mx-auto md:mx-0" alt="">
            <div class="flex-1 min-w-0">
              <div class="flex flex-col md:flex-row md:justify-between md:items-center w-full">
                <span class="font-medium text-white text-center md:text-left">Dr Sonny Chen</span>
                <span class="text-xs text-white/60 mt-1 md:mt-0 md:ml-2 text-center md:text-right">desconectado</span>
              </div>
              <div class="text-sm text-white/70 truncate mt-1">Residente de 1• ano, Serviço de Cirurgia <br> Plástica Dr. Oswaldo de Castro, Moema, <br> São Paulo</div>
            </div>
          </li>



        </ul>
      </aside>

      <!-- Chat (columna derecha grande) -->
      <section class="lg:col-span-2 bg-white/5 rounded border border-white/10 flex flex-col overflow-hidden">
        <!-- header -->
        <header class="flex items-center justify-between p-4 border-b border-white/10">
          <div class="flex items-center gap-3">
            <img id="chatAvatar" src="https://cdn-icons-png.flaticon.com/512/11306/11306137.png" class="w-12 h-12 rounded-full" alt="">
            <div>
              <div id="chatName" class="font-semibold text-white">Selecciona un contacto</div>
              <div id="chatStatus" class="text-sm text-white/70">Última vez: --</div>
            </div>
          </div>

          <div class="text-sm text-white/70">
            <button id="endChatBtn" class="px-3 py-1 bg-white/10 rounded hidden">Finalizar</button>
          </div>
        </header>

        <!-- mensajes -->
        <div id="messages" class="flex-1 p-4 space-y-4 overflow-y-auto">
          <div class="text-center text-white/50">Seleccione un contacto para empezar a chatear</div>
        </div>

        <!-- input -->
        <form id="chatForm" class="p-4 border-t border-white/10 bg-white/3 hidden" onsubmit="return sendMessage();">
          <div class="flex gap-3 items-center">
            <textarea id="chatInput" required rows="1"
              class="flex-1 resize-none px-3 py-2 rounded bg-white/5 text-white placeholder-white/70 outline-none"
              placeholder="escreva uma mensagem..."></textarea>

            <div class="flex flex-col gap-2">
              <!-- attach image -->
              <button type="button" id="attachImageBtn" title="Adjuntar imagen" class="w-10 h-10 flex items-center justify-center bg-white/6 rounded text-white hover:bg-white/10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7M3 7l9 6 9-6M3 7l9 6"/></svg>
              </button>
              <!-- attach file (uses hidden input) -->
              <input id="attachFileInput" type="file" class="hidden" />
              <!-- attach image (hidden input, accepts images) -->
              <input id="attachImageInput" type="file" accept="image/*" class="hidden" />
              <button type="button" id="attachFileBtn" title="Adjuntar archivo" class="w-10 h-10 flex items-center justify-center bg-white/6 rounded text-white hover:bg-white/10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.5 7.5l4 4a3 3 0 11-4.243 4.243L6.5 9.985a5 5 0 117.071-7.071L19 5.343"/></svg>
              </button>
            </div>

            <button type="submit" class="px-4 py-2 bg-emerald-600 text-white rounded">Enviar</button>
          </div>
        </form>
      </section>
    </div>
  </div>

  <script>
    // Datos de ejemplo (puedes reemplazarlos por la data real del backend)
     const CONTACTS = {
    4: { id:4, name: 'Clínica, Tatuapé, São Paulo', avatar: 'https://cdn-icons-png.flaticon.com/512/2922/2922510.png', last: 'Agora', online: true, messages:[
      { from:'them', text:'Dr Eduardo gostamos do seu perfil e estamos avaliando os documentos encaminhados, assim que aprovados pode acompanhar o processso seletivo na plataforma', time:'08:00' }
    ]},
    5: { id:5, name: 'Dr Kaue Sucena', avatar: 'https://cdn-icons-png.flaticon.com/512/2922/2922510.png', last: 'Hace 2h', online: false, messages:[
      { from:'them', text:'Enviaré los documentos mañana', time:'Hace 2h' }
    ]},
    8: { id:8, name: 'Dr Sonny Chen', avatar: '{{asset("storage/sony.png")}}', last: 'Agora', online: true, messages:[
      { from:'them', text:'Gracias por la confirmación', time:'Agora' }
    ]},
    7: { id:7, name: 'Dr Lucas Rinaldi', avatar: '{{asset("storage/lucas.png")}}', last: 'Agora', online: true, messages:[
      { from:'them', text:'Dr Eduardo gostamos do seu perfil e estamos avaliando os documentos encaminhados, assim que aprovados pode acompanhar o processso seletivo na plataforma', time:'Agora' }
    ]}
  };

    let activeContact = null;

    function escapeHtml(s){ return (s||'').toString().replace(/[&<>'"]/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','\"':'&quot;',"'":"&#39;"}[c]) || c); }

    function renderMessages(contact) {
      const container = document.getElementById('messages');
      container.innerHTML = '';
      contact.messages.forEach(m => {
        const bubble = document.createElement('div');
        bubble.className = m.from === 'me' ? 'self-end max-w-[75%] bg-emerald-600 text-white p-3 rounded-xl' : 'self-start max-w-[75%] bg-white/6 text-white p-3 rounded-xl';

        // build message content: either text or file link
        if (m.fileName) {
          // file message
          const fileHtml = `<div><a href="${escapeHtml(m.fileUrl)}" target="_blank" rel="noopener noreferrer" class="underline text-emerald-200">${escapeHtml(m.fileName)}</a></div>`;
          bubble.innerHTML = fileHtml + `<div class="text-xs text-white/60 mt-1">${escapeHtml(m.time)}</div>`;
        } else {
          bubble.innerHTML = `<div>${escapeHtml(m.text)}</div><div class="text-xs text-white/60 mt-1">${escapeHtml(m.time)}</div>`;
        }

        container.appendChild(bubble);
      });
      container.scrollTop = container.scrollHeight;
    }

    function selectContact(id) {
      activeContact = CONTACTS[id];
      if (!activeContact) return;
      document.getElementById('chatName').textContent = activeContact.name;
          document.getElementById('chatAvatar').src = activeContact.avatar || '{{ asset("images/avatar-placeholder.png") }}';
      const statusEl = document.getElementById('chatStatus');
      if (activeContact.online) {
        statusEl.innerHTML = '<span class="inline-block w-2 h-2 rounded-full bg-emerald-400 mr-2 align-middle"></span>Conectado';
      } else {
        statusEl.innerHTML = '<span class="inline-block w-2 h-2 rounded-full bg-white/40 mr-2 align-middle"></span>Última vez: ' + activeContact.last;
      }
      document.getElementById('chatForm').classList.remove('hidden');
      renderMessages(activeContact);
      // highlight selected li
      document.querySelectorAll('.contact-item').forEach(li => li.classList.remove('bg-white/6'));
      const sel = document.querySelector('.contact-item[data-id="'+id+'"]');
      if (sel) sel.classList.add('bg-white/6');
    }

    // attach click handlers
    document.querySelectorAll('.contact-item').forEach(li => {
      li.addEventListener('click', () => selectContact(li.dataset.id));
    });

    // file attach handling
    document.getElementById('attachFileBtn')?.addEventListener('click', function(){
      const input = document.getElementById('attachFileInput');
      if (input) input.click();
    });

    document.getElementById('attachFileInput')?.addEventListener('change', function(e){
      const files = e.target.files;
      if (!files || !files.length) return;
      const f = files[0];
      if (!activeContact) { alert('Selecciona un contacto primero'); e.target.value = ''; return; }
      const time = new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
      const url = URL.createObjectURL(f);
      // push a file message
      activeContact.messages.push({ from: 'me', fileName: f.name, fileUrl: url, time });
      renderMessages(activeContact);
      // clear the input so same file can be selected again later
      e.target.value = '';
    });

    // image attach handling (same behavior but displays inline)
    document.getElementById('attachImageBtn')?.addEventListener('click', function(){
      const input = document.getElementById('attachImageInput');
      if (input) input.click();
    });

    document.getElementById('attachImageInput')?.addEventListener('change', function(e){
      const files = e.target.files;
      if (!files || !files.length) return;
      const f = files[0];
      if (!activeContact) { alert('Selecciona un contacto primero'); e.target.value = ''; return; }
      const time = new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
      const url = URL.createObjectURL(f);
      // push an image message (flag fileIsImage)
      activeContact.messages.push({ from: 'me', fileName: f.name, fileUrl: url, fileIsImage: true, time });
      renderMessages(activeContact);
      e.target.value = '';
    });

    function sendMessage() {
      const txt = document.getElementById('chatInput').value.trim();
      if (!txt || !activeContact) return false;
      const time = new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
      activeContact.messages.push({ from: 'me', text: txt, time});
      renderMessages(activeContact);
      document.getElementById('chatInput').value = '';
      return false; // prevent reload
    }

    // search filter
    document.getElementById('contact-search').addEventListener('input', function(e){
      const q = e.target.value.toLowerCase();
      document.querySelectorAll('#contactsList li').forEach(li=>{
        const text = li.textContent.toLowerCase();
        li.style.display = text.includes(q) ? '' : 'none';
      });
    });
  </script>





















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


    /* Contenedor general */
    .chat-container {
      position: fixed;
      right: 20px;
      bottom: 20px;
      width: 320px;

      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.5);
      background: #161b22;


      border-radius: 10px;
      display: flex;

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
      padding: 10px;
      border-radius: 12px;
      font-size: 14px;
      line-height: 1.4;


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

<div  id="chatWidget" class="chat-widget ">


  <div class="chat-container ">
    <div class="chat-header ">💬 Chat IASBCP</div>
   <div class="chat-body " id="chatBody">
      <div class="bubble bot">  Ola 🤚  sou a inteligência artificial da SBCP. Percebi que está procurando vagas de estágio. Qual tipo de estágio seria para ajudá-lo?</div>
      <div class="bubble me">  Optativo, Cirurgia Estética</div>
      <div class="bubble bot">  Muito obrigado</div>
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

      appendMessage("hola", 'me');

      const typing = appendTyping();

  </script>

</x-app-layout>
