<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About - Gopers</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      body {
        background-color: black;
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden;
        margin: 0;
        padding: 0;
      }

      /* 🌫️ Efek blur pada gambar besar */
      .bg-blur::before {
        content: "";
        position: absolute;
        inset: 0;
        background: url('{{ asset('images/img_0863-1.jpeg') }}') center/cover no-repeat;
        filter: blur(8px) brightness(0.6);
        z-index: 0;
      }

      /* Tombol Account (pill) */
      .pill-account {
        background-color: #02f69f;
        color: black;
        font-weight: 600;
        padding: 0.5rem 1.25rem;
        border-radius: 9999px;
        box-shadow: 0 0 15px #02f69f55;
        transition: all 0.3s ease;
        border: 1px solid #acffe1;
        cursor: pointer;
      }

      .pill-account:hover {
        background-color: #02c87f;
        transform: scale(1.05);
      }

      .on-top {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 20;
      }

      /* 🌿 Dropdown Styles */
      .dropdown {
        position: absolute;
        right: 0;
        top: 110%;
        background: rgba(15, 15, 15, 0.95);
        border: 1px solid #02f69f55;
        border-radius: 0.75rem;
        box-shadow: 0 0 15px #02f69f33;
        width: 160px;
        opacity: 0;
        transform: translateY(-10px);
        pointer-events: none;
        transition: all 0.25s ease;
      }

      .dropdown.show {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto;
      }

      .dropdown a {
        display: block;
        padding: 0.75rem 1rem;
        color: #f0fff9;
        font-weight: 500;
        text-align: left;
        text-decoration: none;
        transition: background 0.25s ease;
      }

      .dropdown a:hover {
        background: #02f69f22;
        color: #02f69f;
      }
    </style>
  </head>a

  <body class="relative min-h-screen flex flex-col items-center justify-center bg-black text-white">
    <!-- 🔝 NAVBAR -->
    <header class="on-top">
      <nav class="max-w-[1200px] mx-auto px-8 py-6 flex items-center justify-between relative">
        <div class="flex items-center gap-4">
          <img
            src="{{ asset('images/whatsapp_image_2025-03-19_at_21.12.13_70023828-removebg-preview-3.png') }}"
            alt="Gopers Logo"
            class="w-[96px] h-[96px] object-contain"
          />
        </div>

        <ul class="flex items-center gap-10 text-white/90 text-lg font-medium relative">
          <li><a href="/about" class="text-[#02f69f] font-semibold hover:text-[#02f69f] transition">About</a></li>  
          <li><a href="/menu" class="hover:text-white transition">Order</a></li>

          <!-- 🧭 Account Dropdown -->
          <li class="relative">
            <button id="accountBtn" class="pill-account flex items-center gap-1">
              Account
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>

            <!-- 🧩 Dropdown Menu -->
            <div 
              id="accountMenu" 
              class="hidden absolute right-0 mt-2 w-40 bg-white text-black rounded-lg shadow-xl overflow-hidden z-[9999] transform opacity-0 translate-y-2 transition-all duration-200"
            >
              <a href="#" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
              <a href="/login" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
            </div>
          </li>
        </ul>
      </nav>
    </header>

    <!-- 🌌 Background blur -->
    <div class="absolute inset-0 bg-blur"></div>

    <!-- 🌱 Konten utama -->
    <section class="relative z-10 flex flex-col items-center text-center px-6 mt-32">
      <h1 class="text-5xl font-bold mb-4">Our Community</h1>
      <p class="text-[#02f69f] text-2xl font-semibold mb-12 cursor-pointer hover:underline">
        See All →
      </p>

      <!-- 🖼️ Gambar utama -->
      <div class="w-[900px] max-w-full rounded-2xl overflow-hidden shadow-2xl border border-[#02f69f]/30">
        <img
          src="{{ asset('images/image-13.png') }}"
          alt="Community"
          class="w-full h-auto object-cover"
        />
      </div>
    </section>

 <!-- ⚙️ Script Dropdown -->
  <script>
    const btn = document.getElementById('accountBtn');
    const menu = document.getElementById('accountMenu');

    btn.addEventListener('click', (e) => {
      e.stopPropagation();
      const isHidden = menu.classList.contains('hidden');

      // Tutup semua dropdown lain
      document.querySelectorAll('#accountMenu').forEach(m => {
        m.classList.add('hidden', 'opacity-0', 'translate-y-2');
        m.classList.remove('opacity-100', 'translate-y-0');
      });

      // Toggle tampilan dropdown
      if (isHidden) {
        menu.classList.remove('hidden');
        setTimeout(() => {
          menu.classList.add('opacity-100', 'translate-y-0');
          menu.classList.remove('opacity-0', 'translate-y-2');
        }, 10);
      }
    });

    // Tutup dropdown kalau klik di luar
    window.addEventListener('click', (e) => {
      if (!btn.contains(e.target) && !menu.contains(e.target)) {
        menu.classList.add('opacity-0', 'translate-y-2');
        menu.classList.remove('opacity-100', 'translate-y-0');
        setTimeout(() => menu.classList.add('hidden'), 150);
      }
    });
  </script>
  </body>
</html>
