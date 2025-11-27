<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up - Gopers</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      body {
        background-color: #000;
        font-family: 'Inter', sans-serif;
        color: white;
      }

      .signup-card {
        position: relative;
        overflow: hidden;
        border: 1px solid #02f69f33;
        box-shadow: 0 0 40px #02f69f55;
        border-radius: 1.5rem;
        max-width: 1400px;
        width: 95%;
        height: auto;
        min-height: 800px;
      }

      .signup-bg {
        background-image: url("{{ asset('images/img_0862-1.png') }}");
        background-size: cover;
        background-position: center;
        filter: blur(15px) brightness(0.7);
        position: absolute;
        inset: 0;
        z-index: 0;
      }

      input::placeholder {
        color: #02f69f;
        opacity: 0.7;
      }
    </style>
  </head>

  <body class="flex items-center justify-center min-h-screen px-4">
    <div class="signup-card relative flex flex-col md:flex-row items-stretch justify-between">
      <!-- 🌌 Background blur -->
      <div class="signup-bg"></div>

      <!-- 🍃 Sisi kiri: gambar produk -->
      <div class="hidden md:flex md:w-1/2 items-center justify-center relative z-10 p-6">
        <div class="relative w-full flex justify-center translate-x-8">
          <img
            src="{{ asset('images/group-64-1.png') }}"
            class="absolute w-[500px] left-10 top-1/2 -translate-y-1/2 opacity-100 drop-shadow-[0_0_20px_#02f69f55]"
            alt="Gopi"
          />
        </div>
      </div>

      <!-- ✍️ Sisi kanan: form signup -->
      <div class="flex flex-col justify-center md:w-1/2 w-full p-10 md:p-16 text-white relative z-10 bg-black/60 backdrop-blur-md">
        <img
          src="{{ asset('images/whatsapp_image_2025-03-19_at_21.12.13_70023828-removebg-preview-1.png') }}"
          class="w-52 sm:w-60 mb-6 mx-auto"
          alt="Logo Gopers"
        />

        <h2 class="text-4xl sm:text-5xl font-bold text-center mb-10 text-[#02f69f]">
          Hai, Gopers!
        </h2>

        <form action="#" method="POST" class="space-y-8">
          <div>
            <label for="fullname" class="block text-[#02f69f] text-lg font-semibold mb-1">Full Name</label>
            <input
              type="text"
              id="fullname"
              placeholder="Enter your full name"
              class="w-full px-5 py-3.5 rounded-lg bg-[#013A27]/80 text-[#02f69f] focus:outline-none focus:ring-2 focus:ring-[#02f69f]"
            />
          </div>

          <div>
            <label for="email" class="block text-[#02f69f] text-lg font-semibold mb-1">Email</label>
            <input
              type="email"
              id="email"
              placeholder="Enter your email"
              class="w-full px-5 py-3.5 rounded-lg bg-[#013A27]/80 text-[#02f69f] focus:outline-none focus:ring-2 focus:ring-[#02f69f]"
            />
          </div>

          <div>
            <label for="username" class="block text-[#02f69f] text-lg font-semibold mb-1">Username</label>
            <input
              type="text"
              id="username"
              placeholder="Create a username"
              class="w-full px-5 py-3.5 rounded-lg bg-[#013A27]/80 text-[#02f69f] focus:outline-none focus:ring-2 focus:ring-[#02f69f]"
            />
          </div>

          <div>
            <label for="password" class="block text-[#02f69f] text-lg font-semibold mb-1">Password</label>
            <input
              type="password"
              id="password"
              placeholder="Create your password"
              class="w-full px-5 py-3.5 rounded-lg bg-[#013A27]/80 text-[#02f69f] focus:outline-none focus:ring-2 focus:ring-[#02f69f]"
            />
          </div>

          <div>
            <label for="confirm_password" class="block text-[#02f69f] text-lg font-semibold mb-1">Confirm Password</label>
            <input
              type="password"
              id="confirm_password"
              placeholder="Re-enter your password"
              class="w-full px-5 py-3.5 rounded-lg bg-[#013A27]/80 text-[#02f69f] focus:outline-none focus:ring-2 focus:ring-[#02f69f]"
            />
          </div>

          <!-- Tombol daftar -->
          <button
            type="submit"
            class="w-full bg-[#02f69f] hover:bg-[#02c87f] text-black font-bold py-3 rounded-lg shadow-lg transition duration-300"
          >
            Sign Up
          </button>
        </form>

        <p class="text-center mt-8 text-base">
          Already have an account?
          <a href="/login" class="text-[#0af] font-semibold hover:underline">Login</a>
        </p>
      </div>
    </div>
  </body>
</html>
