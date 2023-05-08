<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
    <title><?php echo e(config('app.name', 'Saraba Bisa')); ?></title>
    
    <!-- Styles -->
    <?php echo \Livewire\Livewire::styles(); ?>


    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
  </head>

  <body class="font-inter antialiased bg-white text-gray-900 tracking-tight">
    <!-- Page wrapper -->
    <div class="flex flex-col min-h-screen overflow-hidden">
      <!-- Site header -->
      <header
        class="fixed w-full z-30 md:bg-opacity-90 transition duration-300 ease-in-out"
        x-data="{ top: true }"
        @scroll.window="top = window.pageYOffset > 10 ? false : true"
        :class="{ 'bg-white backdrop-blur-sm shadow-lg' : !top }"
      >
        <div class="max-w-6xl mx-auto px-5 sm:px-6">
          <div class="flex items-center justify-between h-16 md:h-20">
            <!-- Site branding -->
            <div class="shrink-0 mr-4">
              <!-- Logo -->
              <a class="block" href="<?php echo e(route('home')); ?>" aria-label="Cruip">
                <img
                  src="images/logo-saraba-bisa-text.png"
                  alt=""
                  class="h-6"
                />
              </a>
            </div>

            <!-- Desktop navigation -->
            <nav class="hidden md:flex md:grow">
              <!-- Desktop menu links -->
              <ul class="flex grow justify-end flex-wrap items-center">
                <li>
                  <a
                    class="text-gray-600 hover:text-gray-900 px-3 lg:px-5 py-2 flex items-center transition duration-150 ease-in-out"
                    href="<?php echo e(route('pricing')); ?>"
                    >Harga</a
                  >
                </li>
                <li>
                  <a
                    class="text-gray-600 hover:text-gray-900 px-3 lg:px-5 py-2 flex items-center transition duration-150 ease-in-out"
                    href="#"
                    >Tentang Kami</a
                  >
                </li>
                <li>
                  <a
                    class="text-gray-600 hover:text-gray-900 px-3 lg:px-5 py-2 flex items-center transition duration-150 ease-in-out"
                    href="#"
                    >Tutorial</a
                  >
                </li>
                <li>
                  <a
                    class="text-gray-600 hover:text-gray-900 px-3 lg:px-5 py-2 flex items-center transition duration-150 ease-in-out"
                    href="<?php echo e(route('contact')); ?>"
                    >Kontak</a
                  >
                </li>
              </ul>

              <!-- Desktop sign in links -->
              <ul class="flex grow justify-end flex-wrap items-center">
                <li>
                  <a
                    class="btn-sm text-gray-200 bg-gray-900 hover:bg-gray-800 ml-3"
                    href="<?php echo e(route('subscribe')); ?>"
                  >
                    <span>Daftar</span>
                    <svg
                      class="w-3 h-3 fill-current text-gray-400 shrink-0 ml-2 -mr-1"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M11.707 5.293L7 .586 5.586 2l3 3H0v2h8.586l-3 3L7 11.414l4.707-4.707a1 1 0 000-1.414z"
                        fill-rule="nonzero"
                      />
                    </svg>
                  </a>
                </li>
              </ul>
            </nav>

            <!-- Mobile menu -->
            <div class="flex md:hidden" x-data="{ expanded: false }">
              <!-- Hamburger button -->
              <button
                class="hamburger"
                :class="{ 'active': expanded }"
                @click.stop="expanded = !expanded"
                aria-controls="mobile-nav"
                :aria-expanded="expanded"
              >
                <span class="sr-only">Menu</span>
                <svg
                  class="w-6 h-6 fill-current text-gray-900"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect y="4" width="24" height="2" />
                  <rect y="11" width="24" height="2" />
                  <rect y="18" width="24" height="2" />
                </svg>
              </button>

              <!-- Mobile navigation -->
              <nav
                id="mobile-nav"
                class="absolute top-full h-screen pb-16 z-20 left-0 w-full overflow-scroll bg-white"
                @click.outside="expanded = false"
                @keydown.escape.window="expanded = false"
                x-show="expanded"
                x-transition:enter="transition ease-out duration-200 transform"
                x-transition:enter-start="opacity-0 -translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-out duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                x-cloak
              >
                <ul class="px-5 py-2">
                  <li>
                    <a
                      class="flex text-gray-600 hover:text-gray-900 py-2"
                      href="<?php echo e(route('pricing')); ?>"
                      >Harga</a
                    >
                  </li>
                  <li>
                    <a
                      class="flex text-gray-600 hover:text-gray-900 py-2"
                      href="#"
                      >Tentang Kami</a
                    >
                  </li>
                  <li>
                    <a
                      class="flex text-gray-600 hover:text-gray-900 py-2"
                      href="#"
                      >Tutorial</a
                    >
                  </li>
                  <li>
                    <a
                      class="flex text-gray-600 hover:text-gray-900 py-2"
                      href="<?php echo e(route('contact')); ?>"
                      >Kontak</a
                    >
                  </li>
                  <li>
                    <a
                      class="btn-sm text-gray-200 bg-gray-900 hover:bg-gray-800 w-full my-2"
                      href="<?php echo e(route('subscribe')); ?>"
                    >
                      <span>Daftar</span>
                      <svg
                        class="w-3 h-3 fill-current text-gray-400 shrink-0 ml-2 -mr-1"
                        viewBox="0 0 12 12"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M11.707 5.293L7 .586 5.586 2l3 3H0v2h8.586l-3 3L7 11.414l4.707-4.707a1 1 0 000-1.414z"
                          fill="#999"
                          fill-rule="nonzero"
                        />
                      </svg>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>

        <main>
            <?php echo e($slot); ?>

        </main>

      <!-- Site footer -->
      <footer>
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
          <!-- Top area: Blocks -->
          <div
            class="grid sm:grid-cols-12 gap-8 py-8 md:py-12 border-t border-gray-200"
          >
            <!-- 1st block -->
            <div class="sm:col-span-12 lg:col-span-3">
              <div class="mb-2">
                <!-- Logo -->
                <a class="inline-block" href="<?php echo e(route('home')); ?>" aria-label="Cruip">
                  <img src="images/logo-saraba-bisa.png" alt="" class="h-8" />
                </a>
              </div>
              <div class="text-sm text-gray-600">
                <a
                  class="text-gray-600 hover:text-gray-900 transition duration-150 ease-in-out"
                  href="#0"
                  >Terms</a
                >
                ·
                <a
                  class="text-gray-600 hover:text-gray-900 transition duration-150 ease-in-out"
                  href="#0"
                  >Privacy Policy</a
                >
              </div>
            </div>

            <!-- 2nd block -->
            <div class="sm:col-span-6 md:col-span-3">
              <h6 class="text-gray-800 font-medium mb-2">Demo</h6>
              <ul class="text-sm">
                <li class="mb-2">
                  <a
                    class="text-gray-600 hover:text-gray-900 transition duration-150 ease-in-out"
                    href="https://demo-basic.saraba-bisa.com/login"
                    target="_blank"
                    >Paket Basic</a
                  >
                </li>
                <li class="mb-2">
                  <a
                    class="text-gray-600 hover:text-gray-900 transition duration-150 ease-in-out"
                    href="https://demo.saraba-bisa.com/login"
                    target="_blank"
                    >Paket Premium</a
                  >
                </li>
              </ul>
            </div>

            <!-- 3rd block -->
            <div class="sm:col-span-6 md:col-span-3">
              <h6 class="text-gray-800 font-medium mb-2">Bantuan</h6>
              <ul class="text-sm">
                <li class="mb-2">
                  <a
                    class="text-gray-600 hover:text-gray-900 transition duration-150 ease-in-out"
                    href="#0"
                    >Tutorial Penggunaan</a
                  >
                </li>
                <li class="mb-2">
                  <a
                    class="text-gray-600 hover:text-gray-900 transition duration-150 ease-in-out"
                    href="#0"
                    >Blog</a
                  >
                </li>
                <li class="mb-2">
                  <a
                    class="text-gray-600 hover:text-gray-900 transition duration-150 ease-in-out"
                    href="#0"
                    >Support Center</a
                  >
                </li>
              </ul>
            </div>

            <!-- 5th block -->
            <div class="sm:col-span-6 md:col-span-3">
              <h6 class="text-gray-800 font-medium mb-2">Hubungi Kami</h6>
              <p class="text-sm text-gray-600 mb-4">
                Jl. Negara Dipa Kec. Amuntai Tengah, Kab. Hulu Sungai Utara,
                Prov. Kalimantan Selatan
              </p>
            </div>
          </div>

          <!-- Bottom area -->
          <div
            class="md:flex md:items-center md:justify-between py-4 md:py-8 border-t border-gray-200"
          >
            <!-- Social links -->
            <ul class="flex mb-4 md:order-1 md:ml-4 md:mb-0">
              <li>
                <a
                  class="flex justify-center items-center text-gray-600 hover:text-gray-900 bg-white hover:bg-white-100 rounded-full shadow transition duration-150 ease-in-out"
                  href="#0"
                  aria-label="Instagram"
                >
                  <svg
                    class="w-8 h-8 fill-current"
                    viewBox="0 0 32 32"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="20.145" cy="11.892" r="1" />
                    <path
                      d="M16 20c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm0-6c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2z"
                    />
                    <path
                      d="M20 24h-8c-2.056 0-4-1.944-4-4v-8c0-2.056 1.944-4 4-4h8c2.056 0 4 1.944 4 4v8c0 2.056-1.944 4-4 4zm-8-14c-.935 0-2 1.065-2 2v8c0 .953 1.047 2 2 2h8c.935 0 2-1.065 2-2v-8c0-.935-1.065-2-2-2h-8z"
                    />
                  </svg>
                </a>
              </li>
              <li class="ml-4">
                <a
                  class="flex justify-center items-center text-gray-600 hover:text-gray-900 bg-white hover:bg-white-100 rounded-full shadow transition duration-150 ease-in-out"
                  href="https://web.facebook.com/groups/742804304240831/"
                  aria-label="Facebook"
                  target="_blank"
                >
                  <svg
                    class="w-8 h-8 fill-current"
                    viewBox="0 0 32 32"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M14.023 24L14 17h-3v-3h3v-2c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V14H21l-1 3h-2.72v7h-3.257z"
                    />
                  </svg>
                </a>
              </li>
            </ul>

            <!-- Copyrights note -->
            <div class="text-sm text-gray-600 mr-4">
              &copy; Saraba Bisa. All rights reserved.
            </div>
          </div>
        </div>
      </footer>
    </div>

    <?php echo \Livewire\Livewire::scripts(); ?>

  </body>
</html><?php /**PATH C:\laragon\www\main-saraba-bisa\resources\views/layouts/guest.blade.php ENDPATH**/ ?>