<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/alpinejs" defer></script> 
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>       
    @vite('resources/css/app.css')
    <title>Home</title>
  </head>
  <body>
      <div class="min-h-full">
  <nav class="relative bg-gray-800">
    <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
      <div class="flex h-25 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
          </div>
          <div class="hidden md:block">

<div class="absolute top-2 left-0 w-[50px] h-[50px] animate-[jalanKanan_15s_linear_infinite]">
  <lottie-player
    src="/joywalking.json"
    background="transparent"
    speed="1"
    style="width: 100px; height: 100px;"
    loop
    autoplay>
    <style>
@keyframes jalanKanan {
  0% { transform: translateX(0); }
  100% { transform: translateX(100vw); }
}
</style>
  </lottie-player>
</div>
          </div>
        </div>

        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Dashboard</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Article</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
      </div>
      <div class="border-t border-gray-700 pt-4 pb-3">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-medium text-white">Tom Cook</div>
            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
          </div>
          <button type="button" class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
          </button>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
        </div>
      </div>
    </div>
  </nav>

  <header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Kaltim Cerdas Digital</h1>
    </div>
  </header>
  <body class="bg-white shadow-sm">
    <section class="bg-gray-50 py-12">
  <div class="max-w-6xl mx-auto px-4 md:flex md:items-center md:gap-10">
    <div class="md:w-1/2">
      <img src="img/koding.png" alt="koding" class="rounded-xl shadow-lg">
    </div>
    <div class="md:w-1/2 mt-8 md:mt-0">
      <h2 class="text-3xl font-bold text-gray-800 mb-4">APA ITU <span class="text-blue-700">KODING?</span></h2>
      <p class="text-gray-700 text-lg leading-relaxed">
        <strong>Koding</strong> adalah cara kita memberi perintah kepada komputer supaya bisa melakukan sesuatu, seperti menjalankan game, menyalakan lampu, atau membuka aplikasi. Koding bisa diibaratkan seperti memberi petunjuk langkah demi langkah kepada robot agar ia tahu apa yang harus dilakukan. Dengan koding, kita bisa membuat game, aplikasi, dan situs web. Koding itu seperti menulis resep atau panduan, tapi khusus untuk komputer supaya dia bisa mengerti dan bekerja sesuai keinginan kita.</p>
      <p class="text-gray-700 text-lg leading-relaxed mt-4">
        Nah, Ayo kita sama-sama pelajari tentang koding. Pastikan ambil kelas sesuai tingkatanmu ya, agar kamu mudah memahami materinya dan bisa menjawab soal dengan benar. Semangat!</p>
    </div>
  </div>
</section>
<section class="bg-white py-16 px-4 md:px-8"
  <!-- Grid Program -->
  <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">
    <!-- Program Item -->
    <a href="/kbkoding" class="text-center p-6 bg-blue-50 rounded-xl shadow hover:shadow-md transition">
      <img src="/img/ksd.png" alt="SD" class="h-16 mx-auto mb-4">
      <h4 class="text-lg font-semibold text-blue-800 mb-2">SD</h4>
      <p class="text-gray-700 text-sm">Program pembelajaran koding tingkat SD</p>
    </a>

    <a href="/kbka" class="text-center p-6 bg-blue-50 rounded-xl shadow hover:shadow-md transition">
      <img src="/img/ksmp.png" alt="SMP" class="h-16 mx-auto mb-4">
      <h4 class="text-lg font-semibold text-blue-800 mb-2">SMP</h4>
      <p class="text-gray-700 text-sm">Program pembelajaran koding tingkat SMP</p>
    </a>

    <a href="/kbkeamanan" class="text-center p-6 bg-blue-50 rounded-xl shadow hover:shadow-md transition">
      <img src="/img/ksma.png" alt="SMA" class="h-16 mx-auto mb-4">
      <h4 class="text-lg font-semibold text-blue-800 mb-2">SMA</h4>
      <p class="text-gray-700 text-sm">Program pembelajaran koding tingkat SMA</p>
    </a>

    <a href="/kbkeamanan" class="text-center p-6 bg-blue-50 rounded-xl shadow hover:shadow-md transition">
      <img src="/img/ksmk.png" alt="SMK" class="h-16 mx-auto mb-4">
      <h4 class="text-lg font-semibold text-blue-800 mb-2">SMK</h4>
      <p class="text-gray-700 text-sm">Program pembelajaran koding tingkat SMK</p>
    </a>
  </div>
</section>
  </body>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
    </div>
  </main>
</div>
  </body>
<footer class="bg-gray-900 text-white py-6 mt-12">
  <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
    <p class="text-sm mb-4 md:mb-0">&copy; 2025 Kaltim Cerdas Digital. Semua hak dilindungi.</p>
    <div class="flex space-x-5 text-white text-xl">
      <a href="https://facebook.com/tekkominfodikaltim" target="_blank" aria-label="Facebook" class="hover:text-blue-300 transition">
        <svg fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5">
          <path d="M22 12.07C22 6.48 17.52 2 12 2S2 6.48 2 12.07c0 5 3.66 9.13 8.44 9.88v-6.99H8v-2.89h2.44V9.83c0-2.4 1.43-3.73 3.63-3.73 1.05 0 2.15.19 2.15.19v2.37h-1.21c-1.19 0-1.56.74-1.56 1.5v1.8h2.66l-.43 2.89h-2.23v6.99C18.34 21.2 22 17.07 22 12.07z"/>
        </svg>
      </a>
      <a href="https://www.instagram.com/tekkominfodikaltim" target="_blank" aria-label="Instagram" class="hover:text-pink-400 transition">
        <svg fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5">
          <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2c1.7 0 3 1.3 3 3v10c0 1.7-1.3 3-3 3H7c-1.7 0-3-1.3-3-3V7c0-1.7 1.3-3 3-3h10zm-5 3c-2.2 0-4 1.8-4 4s1.8 4 4 4c2.2 0 4-1.8 4-4s-1.8-4-4-4zm0 6.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 8.5 12 8.5s2.5 1.1 2.5 2.5S13.4 13.5 12 13.5zm4.8-6.9a1 1 0 110-2 1 1 0 010 2z"/>
        </svg>
      </a>
      <a href="https://youtube.com/@disdikbudkaltim" target="_blank" aria-label="YouTube" class="hover:text-red-400 transition">
        <svg fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5">
          <path d="M19.615 3.184A2.994 2.994 0 0017.337 3H6.663A2.994 2.994 0 004.385 3.184 2.996 2.996 0 003 5.463v13.074a2.996 2.996 0 001.385 2.278A2.994 2.994 0 006.663 21h10.674a2.994 2.994 0 002.278-1.185A2.996 2.996 0 0021 18.537V5.463a2.996 2.996 0 00-1.385-2.279zM10 15.5v-7l6 3.5-6 3.5z"/>
        </svg>
      </a>
      <a href="https://eberadio.kaltimprov.go.id" target="_blank" aria-label="Radio" class="hover:text-yellow-300 transition">
        <svg fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5">
          <path d="M12 3C7 3 2 7.6 2 12s5 9 10 9 10-4.6 10-9-5-9-10-9zm0 16c-4.1 0-8-3.3-8-7s3.9-7 8-7 8 3.3 8 7-3.9 7-8 7zm-.5-11v6l5-3-5-3z"/>
        </svg>
      </a>
    </div>
  </div>
</footer>

</html>