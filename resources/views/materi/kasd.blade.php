<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/alpinejs" defer></script> 
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>       
    @vite('resources/css/app.css')
    <title>Kaltim Cerdas Digital</title>
    <style>
      @keyframes jalanKanan {
        0% { transform: translateX(0); }
        100% { transform: translateX(100vw); }
      }
      
      .video-container {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 aspect ratio */
        height: 0;
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      }
      
      .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
      }
      
      .btn-primary {
        background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        color: white;
        padding: 12px 28px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
      }
      
      .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
      }
      
      .btn-primary:active {
        transform: translateY(1px);
      }
      
      .card {
        background: white;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
      }
      
      .card:hover {
        transform: translateY(-5px);
      }
      
      .fade-in {
        animation: fadeIn 0.8s ease-out;
      }
      
      @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
      }
      
      .animate-delay-100 {
        animation-delay: 0.1s;
      }
      
      .animate-delay-200 {
        animation-delay: 0.2s;
      }
      
      .section-title {
        position: relative;
        display: inline-block;
        margin-bottom: 2rem;
      }
      
      .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 60%;
        height: 4px;
        background: linear-gradient(90deg, #3b82f6, #8b5cf6);
        border-radius: 2px;
      }
    </style>
  </head>
  <body class="bg-gray-50">
    <div class="min-h-full">
      <nav class="relative bg-gray-800">
        <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
          <div class="flex h-25 items-center justify-between">
            <div class="flex items-center">
              <div class="shrink-0"></div>
              <div class="hidden md:block">
                <div class="absolute top-2 left-0 w-[50px] h-[50px] animate-[jalanKanan_15s_linear_infinite]">
                  <lottie-player
                    src="/joywalking.json"
                    background="transparent"
                    speed="1"
                    style="width: 100px; height: 100px;"
                    loop
                    autoplay>
                  </lottie-player>
                </div>
              </div>
            </div>

            <div class="-mr-2 flex md:hidden">
              <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
        </div>

        <div class="md:hidden" id="mobile-menu">
          <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
            <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Dashboard</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Article</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
          </div>
          <div class="border-t border-gray-700 pt-4 pb-3">
            <div class="flex items-center px-5">
              <div class="shrink-0">
                <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
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
      
      <main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <!-- Video Section -->
        <section class="mb-16">
          <h2 class="text-2xl font-bold text-gray-800 mb-6 section-title">Video Pembelajaran</h2>
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 card fade-in">
              <div class="video-container">
                <!-- Embed YouTube Video -->
                <iframe src="https://youtu.be/ttIOdAdQaUE?si=xzhYCv5mUYFubSmI" 
                        title="Video Pembelajaran Kaltim Cerdas" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                </iframe>
              </div>
              <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Pembelajaran Digital untuk Masa Depan</h3>
                <p class="text-gray-600 mb-4">Pelajari konsep dasar kecerdasan buatan</p>
                <div class="flex items-center text-gray-500 text-sm">
                  <i class="fas fa-clock mr-2"></i>
                  <span>15:30 menit</span>
                  <i class="fas fa-eye ml-4 mr-2"></i>
                  <span>1,245 views</span>
                </div>
              </div>
            </div>
            
            <div class="space-y-6 fade-in animate-delay-100">
              <div class="card p-6 bg-gradient-to-br from-blue-50 to-indigo-50">
                <h3 class="font-semibold text-lg text-gray-800 mb-3">Video Lainnya</h3>
                <div class="space-y-4">
                  <a href="#" class="flex items-start group">
                    <div class="flex-shrink-0 w-16 h-16 bg-gray-200 rounded-md overflow-hidden">
                      <img src="https://img.youtube.com/vi/Tn6-PIqc4UM/mqdefault.jpg" alt="Thumbnail" class="w-full h-full object-cover">
                    </div>
                    <div class="ml-3">
                      <h4 class="text-sm font-medium text-gray-800 group-hover:text-blue-600">Belajar dasar ReactJS</h4>
                      <p class="text-xs text-gray-500 mt-1">12:45 menit</p>
                    </div>
                  </a>
                  
                  <a href="#" class="flex items-start group">
                    <div class="flex-shrink-0 w-16 h-16 bg-gray-200 rounded-md overflow-hidden">
                      <img src="https://img.youtube.com/vi/9YffrCViTVk/mqdefault.jpg" alt="Thumbnail" class="w-full h-full object-cover">
                    </div>
                    <div class="ml-3">
                      <h4 class="text-sm font-medium text-gray-800 group-hover:text-blue-600">Belajar dasar HTML</h4>
                      <p class="text-xs text-gray-500 mt-1">18:20 menit</p>
                    </div>
                  </a>
                  
                  <a href="#" class="flex items-start group">
                    <div class="flex-shrink-0 w-16 h-16 bg-gray-200 rounded-md overflow-hidden">
                      <img src="https://img.youtube.com/vi/jNQXAC9IVRw/mqdefault.jpg" alt="Thumbnail" class="w-full h-full object-cover">
                    </div>
                    <div class="ml-3">
                      <h4 class="text-sm font-medium text-gray-800 group-hover:text-blue-600">Teknologi untuk Pendidikan</h4>
                      <p class="text-xs text-gray-500 mt-1">22:10 menit</p>
                    </div>
                  </a>
                </div>
                <button class="mt-4 w-full py-2 text-center text-sm font-medium text-blue-600 hover:text-blue-800">
                  Lihat Semua Video <i class="fas fa-arrow-right ml-1"></i>
                </button>
              </div>
              
              <!-- Tombol Soal -->
              <div class="card p-6 bg-gradient-to-br from-indigo-50 to-purple-50 text-center fade-in animate-delay-200">
                <div class="mb-4">
                  <div class="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto">
                    <i class="fas fa-file-alt text-indigo-600 text-2xl"></i>
                  </div>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Uji Pemahaman Anda</h3>
                <p class="text-gray-600 mb-5">Setelah menonton video, uji pemahaman Anda dengan mengerjakan soal-soal berikut.</p>
                <a href="/kasdsoal" class="btn-primary inline-block">
                  <i class="fas fa-pencil-alt mr-2"></i> Kerjakan Soal
                </a>
              </div>
            </div>
          </div>
        </section>
        
        <!-- Fitur Tambahan -->
        <section class="mb-16">
          <h2 class="text-2xl font-bold text-gray-800 mb-8 section-title">Fitur Unggulan</h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="card p-6 text-center hover:shadow-lg">
              <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-book text-blue-600 text-xl"></i>
              </div>
              <h3 class="text-lg font-semibold text-gray-800 mb-2">Materi Pembelajaran</h3>
              <p class="text-gray-600">Akses berbagai materi pembelajaran digital yang disusun oleh ahli pendidikan.</p>
            </div>
            
            <div class="card p-6 text-center hover:shadow-lg">
              <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-chart-line text-green-600 text-xl"></i>
              </div>
              <h3 class="text-lg font-semibold text-gray-800 mb-2">Evaluasi Pembelajaran</h3>
              <p class="text-gray-600">Pantau perkembangan belajar melalui sistem evaluasi yang komprehensif.</p>
            </div>
            
            <div class="card p-6 text-center hover:shadow-lg">
              <div class="w-14 h-14 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-users text-purple-600 text-xl"></i>
              </div>
              <h3 class="text-lg font-semibold text-gray-800 mb-2">Forum Diskusi</h3>
              <p class="text-gray-600">Berdiskusi dengan peserta lain dan tenaga pengajar dalam forum interaktif.</p>
            </div>
          </div>
        </section>
      </main>
      
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
    </div>
  </body>
</html>