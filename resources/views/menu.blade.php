<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Our Menu | GOPI</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    :root {
      --accent-green: #00e08a;
      --deep-green: #007a4f;
      --card-radius: 22px;
    }

    body {
      font-family: "Montserrat", "Poppins", system-ui, sans-serif;
      color: #fff;
      background: #000;
    }

    /* 🌌 Background */
    .bg-photo {
      background-image: url('{{ asset('images/img_0862-1.png') }}');
      background-size: cover;
      background-position: center;
      position: relative;
      min-height: 100vh;
    }

    .bg-photo::after {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.55);
      backdrop-filter: blur(6px);
      -webkit-backdrop-filter: blur(6px);
    }

    .on-top { position: relative; z-index: 20; }

    /* 🧭 Navbar */
    .pill-account {
      background: linear-gradient(90deg, #07eaa1, #00c07a);
      color: #01220f;
      padding: 6px 14px;
      border-radius: 9999px;
      font-weight: 700;
      box-shadow: 0 6px 18px rgba(0, 200, 130, 0.18);
      transition: all 0.3s ease;
    }

    .pill-account:hover {
      transform: scale(1.05);
      box-shadow: 0 0 15px rgba(0, 255, 160, 0.3);
    }

    .see-all {
      color: var(--accent-green);
      font-weight: 600;
    }

    /* ☕ Card Styling */
    .card-muted {
      background: rgba(20, 20, 20, 0.65);
      border-radius: var(--card-radius);
      box-shadow: 0 24px 40px rgba(0, 0, 0, 0.65);
      border: 1px solid transparent;
      padding: 1.25rem 1.25rem 1.75rem;
      text-align: center;
      transition: all 0.3s ease;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      min-height: 380px;
      opacity: 0;
      animation: fadeIn 0.8s forwards;
    }

    .card-muted:hover {
      background: radial-gradient(circle at center, rgba(0, 255, 160, 0.25) 0%, rgba(0, 0, 0, 0.85) 100%);
      box-shadow: 0 0 30px #00ffae55, inset 0 0 20px #00ffae22;
      border-color: #00e08a;
      transform: scale(1.03);
    }

    @keyframes fadeIn {
      to { opacity: 1; transform: translateY(0); }
      from { opacity: 0; transform: translateY(20px); }
    }

    /* 🧃 Button */
    .btn-basket {
      margin-top: 1rem;
      background: #fff;
      color: var(--deep-green);
      padding: 0.5rem 1.5rem;
      border-radius: 9999px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-basket:hover {
      background: var(--accent-green);
      color: #01220f;
      transform: translateY(-2px);
      box-shadow: 0 8px 16px rgba(0,255,160,0.25);
    }
  </style>
</head>

<body>
  <div class="bg-photo">
    <!-- 🔝 Navbar -->
    <header class="on-top relative z-50">
      <nav class="max-w-[1200px] mx-auto px-8 py-6 flex items-center justify-between relative">
        <img 
          src="{{ asset('images/whatsapp_image_2025-03-19_at_21.12.13_70023828-removebg-preview-3.png') }}" 
          alt="GOPI Logo" 
          class="w-[96px] h-[96px] object-contain"
        >

        <ul class="flex items-center gap-10 text-white/90 text-lg font-medium relative">
          <li><a href="/about" class="hover:text-white transition">About</a></li>  
          <li><a href="/menu" class="text-[#02f69f] font-semibold hover:text-[#02f69f] transition">Order</a></li>

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

    <!-- 🌿 Main Section -->
    <main class="on-top max-w-[1200px] mx-auto px-8 pt-12 pb-24">
      <div class="flex items-center justify-between mb-8 flex-wrap gap-4">
        <h2 class="text-4xl font-extrabold">Our Menu</h2>
        <a href="#" class="see-all">See All</a>
      </div>

      <!-- 🍵 Menu Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 justify-items-center">
        <!-- Card 1 -->
        <div class="card-muted">
          <img src="{{ asset('images/gopi-susu.png') }}" alt="Gopi Susu" class="w-[160px] h-[160px] object-contain mt-2">
          <div>
            <h3 class="text-lg font-extrabold text-gray-100">GOPI SUSU</h3>
            <p class="text-sm text-gray-300 mt-1">Espresso, milk, and creamer</p>
          </div>
          <button class="btn-basket">Add to Basket</button>
        </div>

        <!-- Card 2 -->
        <div class="card-muted">
          <img src="{{ asset('images/go-matcha.png') }}" alt="Go Matcha" class="w-[160px] h-[160px] object-contain mt-2">
          <div>
            <h3 class="text-lg font-extrabold text-gray-100">GO MATCHA</h3>
            <p class="text-sm text-gray-300 mt-1">Pure matcha, milk, and creamer</p>
          </div>
          <button class="btn-basket">Add to Basket</button>
        </div>

        <!-- Card 3 -->
        <div class="card-muted">
          <img src="{{ asset('images/gopi-aren.png') }}" alt="Gopi Aren" class="w-[160px] h-[160px] object-contain mt-2">
          <div>
            <h3 class="text-lg font-extrabold text-gray-100">GOPI AREN</h3>
            <p class="text-sm text-gray-300 mt-1">Espresso, brown sugar, and milk</p>
          </div>
          <button class="btn-basket">Add to Basket</button>
        </div>

        <!-- Card 4 -->
        <div class="card-muted">
          <img src="{{ asset('images/go-choco.png') }}" alt="Go Choco" class="w-[160px] h-[160px] object-contain mt-2">
          <div>
            <h3 class="text-lg font-extrabold text-gray-100">GO CHOCO</h3>
            <p class="text-sm text-gray-300 mt-1">Dark chocolate, milk, and creamer</p>
          </div>
          <button class="btn-basket">Add to Basket</button>
        </div>
      </div>
    </main>
  </div>

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
