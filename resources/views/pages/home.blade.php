<x-guest-layout>
  <!-- Page content -->
  <main class="grow">
    <!-- Hero -->
    <section class="relative">
      <!-- Illustration behind hero content -->
      <div
        class="absolute left-1/2 transform -translate-x-1/2 bottom-0 pointer-events-none -z-1"
        aria-hidden="true"
      >
        <svg
          width="1360"
          height="578"
          viewBox="0 0 1360 578"
          xmlns="http://www.w3.org/2000/svg"
        >
          <defs>
            <linearGradient
              x1="50%"
              y1="0%"
              x2="50%"
              y2="100%"
              id="illustration-01"
            >
              <stop stop-color="#FFF" offset="0%" />
              <stop stop-color="#EAEAEA" offset="77.402%" />
              <stop stop-color="#DFDFDF" offset="100%" />
            </linearGradient>
          </defs>
          <g fill="url(#illustration-01)" fill-rule="evenodd">
            <circle cx="1232" cy="128" r="128" />
            <circle cx="155" cy="443" r="64" />
          </g>
        </svg>
      </div>

      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <!-- Hero content -->
        <div class="pt-32 pb-12 md:pt-40 md:pb-20">
          <!-- Section header -->
          <div class="text-center pb-12 md:pb-16">
            <h1
              class="text-4xl md:text-5xl font-extrabold leading-tighter tracking-tighter mb-4"
            >
              Optimalkan Layanan Servis & Penjualan dengan
              <span
                class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-teal-400"
                >Platform Manajemen Toko Terbaik</span
              >
            </h1>
            <div class="max-w-3xl mx-auto">
              <p
                class="text-xl text-gray-600 mb-8"
              >
                Mempunyai fitur lengkap sesuai kebutuhan toko dan dirancang
                dengan antarmuka pengguna yang mudah digunakan, sehingga
                Anda dapat mengelola toko dengan mudah tanpa perlu
                pengetahuan teknis yang mendalam.
              </p>
              <div
                class="max-w-xs mx-auto sm:max-w-none sm:flex sm:justify-center"
              >
                <div>
                  <a
                    class="btn-custom text-white bg-blue-600 hover:bg-blue-700 w-full mb-4 sm:w-auto sm:mb-0"
                    href="{{ route('subscribe') }}"
                    >Mulai Uji Coba Gratis</a
                  >
                </div>
                <div>
                  <a
                    class="btn-custom text-white bg-gray-900 hover:bg-gray-800 w-full sm:w-auto sm:ml-4"
                    href="https://demo.saraba-bisa.com/login"
                    target="_blank"
                    >Coba Demo</a
                  >
                </div>
              </div>
            </div>
          </div>

          <!-- Hero image -->
          <div x-data="{ modalExpanded: false }">
            <div
              class="relative flex justify-center mb-8"
            >
              <div class="flex flex-col justify-center">
                <img
                  class="mx-auto rounded shadow-xl"
                  src="{{ asset('images/hero-image.png') }}"
                  width="768"
                  height="432"
                  alt="Hero"
                />
              </div>
              <button
                class="absolute top-full flex items-center transform -translate-y-1/2 bg-white rounded-full font-medium group p-4 shadow-lg"
                @click.prevent="modalExpanded = true"
                aria-controls="modal"
              >
                <svg
                  class="w-6 h-6 fill-current text-gray-400 group-hover:text-blue-600 shrink-0"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm0 2C5.373 24 0 18.627 0 12S5.373 0 12 0s12 5.373 12 12-5.373 12-12 12z"
                  />
                  <path d="M10 17l6-5-6-5z" />
                </svg>
                <span class="ml-3"
                  >Tonton video penjelasan fitur utama (9 menit)</span
                >
              </button>
            </div>

            <!-- Modal backdrop -->
            <div
              class="fixed inset-0 z-50 bg-white bg-opacity-75 transition-opacity backdrop-blur-sm"
              x-show="modalExpanded"
              x-transition:enter="transition ease-out duration-200"
              x-transition:enter-start="opacity-0"
              x-transition:enter-end="opacity-100"
              x-transition:leave="transition ease-out duration-100"
              x-transition:leave-start="opacity-100"
              x-transition:leave-end="opacity-0"
              aria-hidden="true"
              x-cloak
            ></div>

            <!-- Modal dialog -->
            <div
              id="modal"
              class="fixed inset-0 z-50 overflow-hidden flex items-center justify-center transform px-4 sm:px-6"
              role="dialog"
              aria-modal="true"
              aria-labelledby="modal-headline"
              x-show="modalExpanded"
              x-transition:enter="transition ease-out duration-200"
              x-transition:enter-start="opacity-0 scale-95"
              x-transition:enter-end="opacity-100 scale-100"
              x-transition:leave="transition ease-out duration-200"
              x-transition:leave-start="opacity-100 scale-100"
              x-transition:leave-end="opacity-0 scale-95"
              x-cloak
            >
              <div
                class="bg-white overflow-auto max-w-6xl w-full max-h-full"
                @click.outside="modalExpanded = false"
                @keydown.escape.window="modalExpanded = false"
              >
                <div class="pb-9/16">
                  <iframe
                    height="315"
                    class="w-full"
                    src="https://www.youtube.com/embed/lx3-PgSZtuk"
                    title="Video"
                    webkitAllowFullScreen
                    mozallowfullscreen
                    allowfullscreen
                  ></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Features -->
    <section class="relative">
      <!-- Section background (needs .relative class on parent and next sibling elements) -->
      <div
        class="absolute inset-0 bg-gray-100 pointer-events-none mb-16"
        aria-hidden="true"
      ></div>
      <div
        class="absolute left-0 right-0 m-auto w-px p-px h-20 bg-gray-200 transform -translate-y-1/2"
      ></div>

      <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
        <div class="pt-12 md:pt-20">
          <!-- Section header -->
          <div class="max-w-3xl mx-auto text-center pb-12 md:pb-16">
            <h1 class="h2 mb-4">Mengapa harus menggunakan platform ini?</h1>
            <p class="text-xl text-gray-600">
              Perkembangan teknologi digital semakin maju, pemilik usaha
              kecil maupun besar sangat memerlukan pencatatan keuangan yang
              mudah dioperasikan dan tidak ribet. Sehingga kami membantu
              solusi tersebut untuk memenuhi kebutuhan Anda.
            </p>
          </div>

          <!-- Section content -->
          <div
            class="md:grid md:grid-cols-12 md:gap-6"
            x-data="{ tab: '1' }"
          >
            <!-- Content -->
            <div
              class="max-w-xl md:max-w-none md:w-full mx-auto md:col-span-7 lg:col-span-6 md:mt-6"
            >
              <!-- Tabs buttons -->
              <div class="mb-8 md:mb-0">
                <button
                  :class="tab !== '1' ? 'bg-white shadow-md border-gray-200 hover:shadow-lg' : 'bg-gray-200 border-transparent'"
                  class="text-left flex items-center text-lg p-5 rounded border transition duration-300 ease-in-out mb-3"
                  @click.prevent
                  @click="tab = '1'"
                >
                  <div>
                    <div class="font-bold leading-snug tracking-tight mb-1">
                      Untuk pelaku usaha individu
                    </div>
                    <div class="text-gray-600">
                      Memudahkan perekapan data secara rapi dan terstruktur.
                    </div>
                  </div>
                  <div
                    class="flex justify-center items-center w-8 h-8 bg-white rounded-full shadow shrink-0 ml-3"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-user-circle"
                      width="16"
                      height="16"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="#000000"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <circle cx="12" cy="12" r="9" />
                      <circle cx="12" cy="10" r="3" />
                      <path
                        d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"
                      />
                    </svg>
                  </div>
                </button>
                <button
                  :class="tab !== '2' ? 'bg-white shadow-md border-gray-200 hover:shadow-lg' : 'bg-gray-200 border-transparent'"
                  class="text-left flex items-center text-lg p-5 rounded border transition duration-300 ease-in-out mb-3"
                  @click.prevent
                  @click="tab = '2'"
                >
                  <div>
                    <div class="font-bold leading-snug tracking-tight mb-1">
                      Untuk pemilik bisnis
                    </div>
                    <div class="text-gray-600">
                      Memudahkan pengelolaan bisnis, karena semua informasi
                      penting tentang bisnis tersedia dalam satu tempat. Hal
                      ini memudahkan pemilik bisnis untuk mengakses
                      informasi tersebut dan membuat keputusan bisnis yang
                      tepat.
                    </div>
                  </div>
                  <div
                    class="flex justify-center items-center w-8 h-8 bg-white rounded-full shadow shrink-0 ml-3"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-chart-infographic"
                      width="16"
                      height="16"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="#000000"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <circle cx="7" cy="7" r="4" />
                      <path d="M7 3v4h4" />
                      <line x1="9" y1="17" x2="9" y2="21" />
                      <line x1="17" y1="14" x2="17" y2="21" />
                      <line x1="13" y1="13" x2="13" y2="21" />
                      <line x1="21" y1="12" x2="21" y2="21" />
                    </svg>
                  </div>
                </button>
                <button
                  :class="tab !== '3' ? 'bg-white shadow-md border-gray-200 hover:shadow-lg' : 'bg-gray-200 border-transparent'"
                  class="text-left flex items-center text-lg p-5 rounded border transition duration-300 ease-in-out"
                  @click.prevent
                  @click="tab = '3'"
                >
                  <div>
                    <div class="font-bold leading-snug tracking-tight mb-1">
                      Untuk pelanggan
                    </div>
                    <div class="text-gray-600">
                      Pelanggan Anda dapat dengan mudah melakukan tracking servis melalui web secara mandiri tanpa harus menghubungi Anda.
                    </div>
                  </div>
                  <div
                    class="flex justify-center items-center w-8 h-8 bg-white rounded-full shadow shrink-0 ml-3"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-crown"
                      width="16"
                      height="16"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="#000000"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M12 6l4 6l5 -4l-2 10h-14l-2 -10l5 4z" />
                    </svg>
                  </div>
                </button>
              </div>
            </div>

            <!-- Tabs items -->
            <div
              class="max-w-xl md:max-w-none md:w-full mx-auto md:col-span-5 lg:col-span-6 mb-8 md:mb-0 md:order-1"
            >
              <div class="relative flex flex-col text-center lg:text-right">
                <!-- Item 1 -->
                <div
                  class="w-full"
                  x-show="tab === '1'"
                  x-transition:enter="transition ease-in-out duration-700 transform order-first"
                  x-transition:enter-start="opacity-0 translate-y-16"
                  x-transition:enter-end="opacity-100 translate-y-0"
                  x-transition:leave="transition ease-in-out duration-300 transform absolute"
                  x-transition:leave-start="opacity-100 translate-y-0"
                  x-transition:leave-end="opacity-0 -translate-y-16"
                >
                  <div class="relative inline-flex flex-col">
                    <img
                      class="md:max-w-none mx-auto rounded"
                      src="{{ asset('images/why-1.png') }}"
                      width="500"
                      height="375"
                      alt="Features bg"
                    />
                  </div>
                </div>
                <!-- Item 2 -->
                <div
                  class="w-full"
                  x-show="tab === '2'"
                  x-transition:enter="transition ease-in-out duration-700 transform order-first"
                  x-transition:enter-start="opacity-0 translate-y-16"
                  x-transition:enter-end="opacity-100 translate-y-0"
                  x-transition:leave="transition ease-in-out duration-300 transform absolute"
                  x-transition:leave-start="opacity-100 translate-y-0"
                  x-transition:leave-end="opacity-0 -translate-y-16"
                >
                  <div class="relative inline-flex flex-col">
                    <img
                      class="md:max-w-none mx-auto rounded"
                      src="{{ asset('images/why-2.png') }}"
                      width="500"
                      height="375"
                      alt="Features bg"
                    />
                  </div>
                </div>
                <!-- Item 3 -->
                <div
                  class="w-full"
                  x-show="tab === '3'"
                  x-transition:enter="transition ease-in-out duration-700 transform order-first"
                  x-transition:enter-start="opacity-0 translate-y-16"
                  x-transition:enter-end="opacity-100 translate-y-0"
                  x-transition:leave="transition ease-in-out duration-300 transform absolute"
                  x-transition:leave-start="opacity-100 translate-y-0"
                  x-transition:leave-end="opacity-0 -translate-y-16"
                >
                  <div class="relative inline-flex flex-col">
                    <img
                      class="md:max-w-none mx-auto rounded"
                      src="{{ asset('images/why-3.png') }}"
                      width="500"
                      height="375"
                      alt="Features bg"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Features -->
    <section>
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="py-12 md:py-20">
          <!-- Section header -->
          <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
            <h2 class="h2 font-hkgrotesk mb-4">Fitur</h2>
            <div class="max-w-2xl mx-auto">
              <p class="text-xl text-slate-500">
                Optimalkan bisnis dengan banyak fitur yang kami sediakan
                sesuai kebutuhan toko servis dan penjualan dengan penggunaan
                yang mudah.
              </p>
            </div>
          </div>

          <!-- Carousel built with Swiper.js [https://swiperjs.com/] -->
          <!-- * Initialized in src/js/main.js -->
          <!-- * Custom styles in src/css/additional-styles/theme.scss -->
          <div class="carousel swiper-container">
            <div class="swiper-wrapper">
              <!-- Carousel items -->
              <div class="swiper-slide h-auto flex flex-col border-2 border-gray-200 p-6 rounded">
                <img
                  class="mb-3"
                  src="{{ asset('images/fitur-1.svg') }}"
                  width="56"
                  height="56"
                  alt="Icon 01"
                />
                <div class="grow">
                  <div class="font-hkgrotesk font-bold text-xl">
                    Multi Akun
                  </div>
                  <div class="text-slate-500 mb-3">
                    Terdapat 4 hak akses akun yaitu Kepala Toko, Admin Toko,
                    Teknisi, Sales dengan tampilan menu yang sesuai
                    kebutuhan masing-masing akun
                  </div>
                </div>
              </div>
              <div
                class="swiper-slide h-auto flex flex-col border-2 border-gray-200 p-6 rounded"
              >
                <img
                  class="mb-3"
                  src="{{ asset('images/fitur-2.svg') }}"
                  width="56"
                  height="56"
                  alt="Icon 02"
                />
                <div class="grow">
                  <div class="font-hkgrotesk font-bold text-xl">
                    Implementasi bagi hasil
                  </div>
                  <div class="text-slate-500 mb-3">
                    Atur persen akun pegawai anda untuk alokasi bonus dari
                    tiap transaksi
                  </div>
                </div>
              </div>
              <div
                class="swiper-slide h-auto flex flex-col border-2 border-gray-200 p-6 rounded"
              >
                <img
                  class="mb-3"
                  src="{{ asset('images/fitur-3.svg') }}"
                  width="56"
                  height="56"
                  alt="Icon 03"
                />
                <div class="grow">
                  <div class="font-hkgrotesk font-bold text-xl">
                    Persetujuan Kepala Toko
                  </div>
                  <div class="text-slate-500 mb-3">
                    Kepala toko dapat cross check inputan transaksi terlebih
                    dahulu sebelum hitungan profit diproses
                  </div>
                </div>
              </div>
              <div
                class="swiper-slide h-auto flex flex-col border-2 border-gray-200 p-6 rounded"
              >
                <img
                  class="mb-3"
                  src="{{ asset('images/fitur-4.svg') }}"
                  width="56"
                  height="56"
                  alt="Icon 04"
                />
                <div class="grow">
                  <div class="font-hkgrotesk font-bold text-xl">
                    Chat Whatsapp
                  </div>
                  <div class="text-slate-500 mb-3">
                    Dapat menghubungi pelanggan servis melalui Whatsapp
                    secara cepat dengan tersedia template dan tanpa harus
                    menyimpan kontak pelanggan pada perangkat HP
                  </div>
                </div>
              </div>
              <div
                class="swiper-slide h-auto flex flex-col border-2 border-gray-200 p-6 rounded"
              >
                <img
                  class="mb-3"
                  src="{{ asset('images/fitur-5.svg') }}"
                  width="56"
                  height="56"
                  alt="Icon 04"
                />
                <div class="grow">
                  <div class="font-hkgrotesk font-bold text-xl">
                    Cetak nota
                  </div>
                  <div class="text-slate-500 mb-3">
                    Dapat mencetak nota servis dan penjualan dalam format printer thermal serta printer inkjet.
                  </div>
                </div>
              </div>
              <div
                class="swiper-slide h-auto flex flex-col border-2 border-gray-200 p-6 rounded"
              >
                <img
                  class="mb-3"
                  src="{{ asset('images/fitur-14.svg') }}"
                  width="56"
                  height="56"
                  alt="Icon 04"
                />
                <div class="grow">
                  <div class="font-hkgrotesk font-bold text-xl">
                    Point of Sales (POS)
                  </div>
                  <div class="text-slate-500 mb-3">
                    Penjualan produk menggunakan sistem POS dengan fitur diskon, pencetakan satu nota dengan banyak item produk, pengelolaan transaksi pembayaran lunas dan tempo.
                  </div>
                </div>
              </div>
              <div
                class="swiper-slide h-auto flex flex-col border-2 border-gray-200 p-6 rounded"
              >
                <img
                  class="mb-3"
                  src="{{ asset('images/fitur-6.svg') }}"
                  width="56"
                  height="56"
                  alt="Icon 04"
                />
                <div class="grow">
                  <div class="font-hkgrotesk font-bold text-xl">
                    Pelacakan status servis
                  </div>
                  <div class="text-slate-500 mb-3">
                    Pelanggan dapat melihat status servis saat ini dan
                    riwayat servis sebelumnya melalui web, hanya dengan
                    menginputkan nomor HP nya
                  </div>
                </div>
              </div>
              <div
                class="swiper-slide h-auto flex flex-col border-2 border-gray-200 p-6 rounded"
              >
                <img
                  class="mb-3"
                  src="{{ asset('images/fitur-7.svg') }}"
                  width="56"
                  height="56"
                  alt="Icon 04"
                />
                <div class="grow">
                  <div class="font-hkgrotesk font-bold text-xl">
                    Pengecekan status garansi HP
                  </div>
                  <div class="text-slate-500 mb-3">
                    Pelanggan dapat melihat status garansi hp yang pernah
                    dibeli melalui web dengan menginputkan nomor IMEI HP
                  </div>
                </div>
              </div>
              <div
                class="swiper-slide h-auto flex flex-col border-2 border-gray-200 p-6 rounded"
              >
                <img
                  class="mb-3"
                  src="{{ asset('images/fitur-8.svg') }}"
                  width="56"
                  height="56"
                  alt="Icon 04"
                />
                <div class="grow">
                  <div class="font-hkgrotesk font-bold text-xl">
                    Laporan keuangan
                  </div>
                  <div class="text-slate-500 mb-3">
                    Terdapat menu-menu laporan servis, laporan transaksi
                    sparepart, aksesoris, handphone, laporan teknisi,
                    laporan sales, dan laporan admin
                  </div>
                </div>
              </div>
              <div
                class="swiper-slide h-auto flex flex-col border-2 border-gray-200 p-6 rounded"
              >
                <img
                  class="mb-3"
                  src="{{ asset('images/fitur-9.svg') }}"
                  width="56"
                  height="56"
                  alt="Icon 04"
                />
                <div class="grow">
                  <div class="font-hkgrotesk font-bold text-xl">
                    Mengatur anggaran bulanan toko
                  </div>
                  <div class="text-slate-500 mb-3">
                    Dapat menginput anggaran bulanan toko, agar terdapat
                    informasi progres target bulanan pada dashboard
                  </div>
                </div>
              </div>
              <div
                class="swiper-slide h-auto flex flex-col border-2 border-gray-200 p-6 rounded"
              >
                <img
                  class="mb-3"
                  src="{{ asset('images/fitur-10.svg') }}"
                  width="56"
                  height="56"
                  alt="Icon 04"
                />
                <div class="grow">
                  <div class="font-hkgrotesk font-bold text-xl">
                    Rekap kasbon pegawai
                  </div>
                  <div class="text-slate-500 mb-3">
                    Dapat menginput kasbon pegawai, agar dapat otomatis
                    memotong gaji bulanan pegawai
                  </div>
                </div>
              </div>
              <div
                class="swiper-slide h-auto flex flex-col border-2 border-gray-200 p-6 rounded"
              >
                <img
                  class="mb-3"
                  src="{{ asset('images/fitur-11.svg') }}"
                  width="56"
                  height="56"
                  alt="Icon 04"
                />
                <div class="grow">
                  <div class="font-hkgrotesk font-bold text-xl">
                    Alokasi dana backup
                  </div>
                  <div class="text-slate-500 mb-3">
                    Dapat mengalokasikan dana backup hasil dari profit
                    servis, dan dapat menginput insiden yang dilakukan
                    teknisi saat pengerjaan servis
                  </div>
                </div>
              </div>
              <div
                class="swiper-slide h-auto flex flex-col border-2 border-gray-200 p-6 rounded"
              >
                <img
                  class="mb-3"
                  src="{{ asset('images/fitur-12.svg') }}"
                  width="56"
                  height="56"
                  alt="Icon 04"
                />
                <div class="grow">
                  <div class="font-hkgrotesk font-bold text-xl">
                    Cetak slip gaji
                  </div>
                  <div class="text-slate-500 mb-3">
                    Dapat mencetak slip gaji dan mengakumulasi bonus secara
                    otomatis dari hasil inputan transaksi masing-masing
                    admin toko/teknisi/sales
                  </div>
                </div>
              </div>
              <div
                class="swiper-slide h-auto flex flex-col border-2 border-gray-200 p-6 rounded"
              >
                <img
                  class="mb-3"
                  src="{{ asset('images/fitur-13.svg') }}"
                  width="56"
                  height="56"
                  alt="Icon 04"
                />
                <div class="grow">
                  <div class="font-hkgrotesk font-bold text-xl">
                    Impor & ekspor data
                  </div>
                  <div class="text-slate-500 mb-3">
                    Dengan fitur impor data, anda dapat melakukan
                    penambahan/pengubahan data dengan jumlah banyak
                    sekaligus melalui aplikasi Microsoft Excel.
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Arrows -->
          <div class="flex mt-12 space-x-4 justify-end">
            <button
              class="carousel-prev relative z-20 w-14 h-14 rounded-full flex items-center justify-center group border border-gray-700 bg-gray-800 hover:bg-gray-700 transition duration-150 ease-in-out"
            >
              <span class="sr-only">Previous</span>
              <svg
                class="w-4 h-4 fill-slate-400 transition duration-150 ease-in-out"
                viewBox="0 0 16 16"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M6.7 14.7l1.4-1.4L3.8 9H16V7H3.8l4.3-4.3-1.4-1.4L0 8z"
                />
              </svg>
            </button>
            <button
              class="carousel-next relative z-20 w-14 h-14 rounded-full flex items-center justify-center group border border-slate-700 bg-slate-800 hover:bg-slate-700 transition duration-150 ease-in-out"
            >
              <span class="sr-only">Next</span>
              <svg
                class="w-4 h-4 fill-slate-400 transition duration-150 ease-in-out"
                viewBox="0 0 16 16"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.3 14.7l-1.4-1.4L12.2 9H0V7h12.2L7.9 2.7l1.4-1.4L16 8z"
                />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Cta -->
    <section>
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="pb-12 md:pb-20">
          <!-- CTA box -->
          <div
            class="bg-blue-600 rounded py-10 px-8 md:py-16 md:px-12 shadow-2xl"
          >
            <div
              class="flex flex-col lg:flex-row justify-between items-center"
            >
              <!-- CTA content -->
              <div class="mb-6 lg:mr-16 lg:mb-0 text-center lg:text-left">
                <h3 class="h3 text-white mb-2">
                  Sudah siap untuk mulai berlangganan?
                </h3>
                <p class="text-white text-lg opacity-75">
                  Kami menyediakan beberapa pilihan paket yang mungkin
                  sesuai dengan kebutuhan toko anda.
                </p>
              </div>

              <!-- CTA button -->
              <div>
                <a
                  class="btn-custom text-blue-600 bg-gradient-to-r from-blue-100 to-white"
                  href="{{ route('pricing') }}"
                  >Lihat Paket</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
  <script>
    const carouselEl = document.querySelectorAll(".carousel");
    if (carouselEl.length > 0) {
        const carousel = new Swiper(".carousel", {
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
            grabCursor: true,
            loop: false,
            centeredSlides: false,
            initialSlide: 0,
            spaceBetween: 24,
            autoplay: {
                delay: 7000,
            },
            navigation: {
                nextEl: ".carousel-next",
                prevEl: ".carousel-prev",
            },
        });
    }
  </script>
</x-guest-layout>