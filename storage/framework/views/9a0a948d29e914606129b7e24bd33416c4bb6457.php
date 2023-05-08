<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <!-- Page content -->
  <main class="grow">
    <!-- Pricing Tables -->
    <section class="bg-gradient-to-b from-white to-gray-100">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="pt-32 pb-12 md:pt-40 md:pb-20">
          <!-- Section header -->
          <div class="max-w-3xl mx-auto text-center pb-12">
            <h1 class="h1 mb-4" data-aos="zoom-y-out">
              Pilih paket yang cocok dengan kebutuhan Anda
            </h1>
            <p
              class="text-xl text-gray-600"
              data-aos="zoom-y-out"
              data-aos-delay="150"
            >
              Penetapan harga kami sederhana, transparan, dan menyesuaikan
              dengan ukuran usaha Anda.
            </p>
          </div>

          <!-- Pricing tables -->
          <div
            class="max-w-sm md:max-w-2xl xl:max-w-none mx-auto grid gap-8 md:grid-cols-2 xl:gap-6 items-start"
          >
            <!-- Pricing table 1 -->
            <div
              class="relative flex flex-col h-full py-8 px-6 rounded bg-white shadow-xl"
              data-aos="zoom-y-out"
              data-aos-delay="450"
            >
              <div class="mb-4">
                <div class="flex justify-between items-center mb-1">
                  <div class="text-lg font-bold mb-1">Basic <span class="line-through text-red-600">Rp. 365.000 / tahun</span></div>
                  <div class="inline-flex px-3 py-1 text-xs font-medium text-green-600 bg-green-200 rounded-full">-20%</div>
                </div>
                <div class="inline-flex items-baseline mb-2">
                  <span class="text-3xl font-bold">Rp</span>
                  <span class="text-4xl font-bold">292.000</span>
                  <span class="text-gray-600 pl-2">/ tahun</span>
                </div>
                <div class="text-lg text-gray-800">
                  Cocok untuk toko servis/penjualan yang bekerja sendiri.
                </div>
              </div>
              <ul class="text-gray-600 -mb-2 grow">
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span
                    >Dapat menghubungi pelanggan dengan isi pesan
                    otomatis</span
                  >
                </li>
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span>Cetak nota</span>
                </li>
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span>Pelacakan status servis</span>
                </li>
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span>Pengecekan status garansi</span>
                </li>
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span>Laporan keuangan</span>
                </li>
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span>Dapat mengatur anggaran toko</span>
                </li>
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span>Impor/ekspor data</span>
                </li>
              </ul>
              <div class="border-t border-gray-200 pt-5 mt-6">
                <a
                  class="btn-sm text-white bg-blue-600 hover:bg-blue-700 w-full"
                  href="<?php echo e(route('subscribe')); ?>"
                  >Mulai Uji Coba Gratis</a
                >
              </div>
              <div class="pt-5">
                <a
                  class="btn-sm text-white bg-gray-900 hover:bg-gray-800 w-full"
                  href="https://demo-basic.saraba-bisa.com/login"
                  target="_blank"
                  >Coba Demo Basic</a
                >
              </div>
            </div>

            <!-- Pricing table 2 -->
            <div
              class="relative flex flex-col h-full py-8 px-6 rounded bg-blue-100 shadow-xl border-2 border-blue-500"
              data-aos="zoom-y-out"
              data-aos-delay="450"
            >
              <div
                class="absolute top-0 right-0 mr-5 p-3 -mt-5 bg-yellow-500 rounded-full"
              >
                <svg
                  class="w-4 h-4 fill-current text-white"
                  viewBox="0 0 16 16"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M15.145 5.05l-4.316-.627L8.898.513c-.338-.684-1.456-.684-1.794 0l-1.93 3.91-4.317.627a1.002 1.002 0 00-.554 1.707l3.124 3.044-.737 4.3a1 1 0 001.45 1.053L8 13.125l3.862 2.03c.728.381 1.59-.234 1.45-1.054l-.736-4.299L15.7 6.758a1.003 1.003 0 00-.555-1.708z"
                  />
                </svg>
              </div>
              <div class="mb-4">
                <div class="flex justify-between items-center mb-1">
                  <div class="text-lg font-bold mb-1">Premium <span class="line-through text-red-600">Rp. 730.000 / tahun</span></div>
                  <div class="inline-flex px-3 py-1 text-xs font-medium text-green-600 bg-green-200 rounded-full">-20%</div>
                </div>
                <div class="inline-flex items-baseline mb-2">
                  <span class="text-3xl font-bold">Rp</span>
                  <span class="text-4xl font-bold">584.000</span>
                  <span class="text-gray-600 pl-2">/ tahun</span>
                </div>
                <div class="text-lg text-gray-800">
                  Cocok untuk toko servis/penjualan yang memiliki beberapa
                  pegawai.
                </div>
              </div>
              <ul class="text-gray-600 -mb-2 grow">
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span
                    >Multi akun (Kepala Toko,Admin Toko,Teknisi,Sales)</span
                  >
                </li>
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span>Dapat implementasi bagi hasil</span>
                </li>
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span
                    >Dapat menghubungi pelanggan dengan isi pesan
                    otomatis</span
                  >
                </li>
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span>Cetak nota</span>
                </li>
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span>Pelacakan status servis</span>
                </li>
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span>Pengecekan status garansi</span>
                </li>
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span>Laporan keuangan</span>
                </li>
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span>Dapat mengatur anggaran toko</span>
                </li>
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span>Rekap kasbon pegawai</span>
                </li>
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span>Dapat mengalokasikan dana backup</span>
                </li>
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span>Cetak slip gaji</span>
                </li>
                <li class="flex items-center mb-2">
                  <svg
                    class="w-3 h-3 fill-current text-green-500 mr-3 shrink-0"
                    viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                    />
                  </svg>
                  <span>Impor/ekspor data</span>
                </li>
              </ul>
              <div class="border-t border-gray-200 pt-5 mt-6">
                <a
                  class="btn-sm text-white bg-blue-600 hover:bg-blue-700 w-full"
                  href="<?php echo e(route('subscribe')); ?>"
                  >Mulai Uji Coba Gratis</a
                >
              </div>
              <div class="pt-5">
                <a
                  class="btn-sm text-white bg-gray-900 hover:bg-gray-800 w-full"
                  href="https://demo.saraba-bisa.com/login"
                  target="_blank"
                  >Coba Demo Premium</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Features -->
    <section>
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="pt-12 md:pt-20">
          <!-- Section header -->
          <div class="pb-12">
            <h2 class="h2">Fitur</h2>
          </div>

          <!-- Table -->
          <div class="overflow-x-auto">
            <table class="table-auto w-full border-b border-gray-200">
              <!-- Table header -->
              <thead>
                <tr class="text-base sm:text-lg border-t border-gray-200">
                  <th class="text-bold text-left pr-2 py-4 min-w-48">
                    Perincian fitur
                  </th>
                  <th class="text-bold text-center px-2 py-4">Basic</th>
                  <th class="text-bold text-center px-2 py-4">Premium</th>
                </tr>
              </thead>
              <!-- Table body -->
              <tbody>
                <!-- Row -->
                <tr class="border-t border-gray-200">
                  <td class="text-sm sm:text-base pr-2 py-4">
                    <div class="font-medium underline">Multi akun</div>
                    <div class="text-gray-600">
                      Terdapat 4 hak akses akun yaitu Kepala Toko, Admin
                      Toko, Teknisi, Sales dengan tampilan menu yang sesuai
                      kebutuhan masing-masing akun
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-gray-400 opacity-75 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.72 1.293a1 1 0 00-1.415 0L6.012 4.586 2.72 1.293a1 1 0 00-1.414 1.414L4.598 6 1.305 9.293a1 1 0 101.414 1.414l3.293-3.293 3.293 3.293a1 1 0 001.414-1.414L7.426 6l3.293-3.293a1 1 0 000-1.414z"
                      />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-green-500 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                      />
                    </svg>
                  </td>
                </tr>
                <!-- Row -->
                <tr class="border-t border-gray-200">
                  <td class="text-sm sm:text-base pr-2 py-4">
                    <div class="font-medium underline">
                      Dapat impelementasi bagi hasil
                    </div>
                    <div class="text-gray-600">
                      Anda dapat mengatur persennya pada akun pegawai Anda,
                      nantinya setiap transaksi yang melibatkan akun pegawai
                      tersebut akan mendapatkan bonus sesuai persen yang
                      dimilikinya
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-gray-400 opacity-75 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.72 1.293a1 1 0 00-1.415 0L6.012 4.586 2.72 1.293a1 1 0 00-1.414 1.414L4.598 6 1.305 9.293a1 1 0 101.414 1.414l3.293-3.293 3.293 3.293a1 1 0 001.414-1.414L7.426 6l3.293-3.293a1 1 0 000-1.414z"
                      />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-green-500 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                      />
                    </svg>
                  </td>
                </tr>
                <!-- Row -->
                <tr class="border-t border-gray-200">
                  <td class="text-sm sm:text-base pr-2 py-4">
                    <div class="font-medium underline">Chat Whatsapp</div>
                    <div class="text-gray-600">
                      Dapat menghubungi pelanggan servis melalui Whatsapp
                      secara cepat dengan tersedia template dan tanpa harus
                      menyimpan kontak pelanggan pada perangkat HP
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-green-500 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                      />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-green-500 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                      />
                    </svg>
                  </td>
                </tr>
                <!-- Row -->
                <tr class="border-t border-gray-200">
                  <td class="text-sm sm:text-base pr-2 py-4">
                    <div class="font-medium underline">Cetak nota</div>
                    <div class="text-gray-600">
                      Dapat mencetak nota servis dan penjualan dengan format
                      printer termal & inkjet/laser
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-green-500 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                      />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-green-500 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                      />
                    </svg>
                  </td>
                </tr>
                <!-- Row -->
                <tr class="border-t border-gray-200">
                  <td class="text-sm sm:text-base pr-2 py-4">
                    <div class="font-medium underline">
                      Pelacakan status servis
                    </div>
                    <div class="text-gray-600">
                      Pelanggan dapat melihat status servis saat ini dan
                      riwayat servis sebelumnya melalui web, hanya dengan
                      menginputkan nomor HP nya
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-green-500 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                      />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-green-500 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                      />
                    </svg>
                  </td>
                </tr>
                <!-- Row -->
                <tr class="border-t border-gray-200">
                  <td class="text-sm sm:text-base pr-2 py-4">
                    <div class="font-medium underline">
                      Pengecekan status garansi HP
                    </div>
                    <div class="text-gray-600">
                      Pelanggan dapat melihat status garansi hp yang pernah
                      dibeli melalui web dengan menginputkan nomor IMEI HP
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-green-500 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                      />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-green-500 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                      />
                    </svg>
                  </td>
                </tr>
                <!-- Row -->
                <tr class="border-t border-gray-200">
                  <td class="text-sm sm:text-base pr-2 py-4">
                    <div class="font-medium underline">
                      Dapat melihat laporan keuangan dengan mudah
                    </div>
                    <div class="text-gray-600">
                      Terdapat menu-menu laporan servis, laporan transaksi
                      sparepart, aksesoris, handphone, laporan teknisi,
                      laporan sales, dan laporan admin
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-gray-400 opacity-75 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.72 1.293a1 1 0 00-1.415 0L6.012 4.586 2.72 1.293a1 1 0 00-1.414 1.414L4.598 6 1.305 9.293a1 1 0 101.414 1.414l3.293-3.293 3.293 3.293a1 1 0 001.414-1.414L7.426 6l3.293-3.293a1 1 0 000-1.414z"
                      />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-green-500 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                      />
                    </svg>
                  </td>
                </tr>
                <!-- Row -->
                <tr class="border-t border-gray-200">
                  <td class="text-sm sm:text-base pr-2 py-4">
                    <div class="font-medium underline">
                      Mengatur anggaran bulanan toko
                    </div>
                    <div class="text-gray-600">
                      Dapat menginput anggaran bulanan toko, agar terdapat
                      informasi progres target bulanan pada dashboard
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-gray-400 opacity-75 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.72 1.293a1 1 0 00-1.415 0L6.012 4.586 2.72 1.293a1 1 0 00-1.414 1.414L4.598 6 1.305 9.293a1 1 0 101.414 1.414l3.293-3.293 3.293 3.293a1 1 0 001.414-1.414L7.426 6l3.293-3.293a1 1 0 000-1.414z"
                      />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-green-500 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                      />
                    </svg>
                  </td>
                </tr>
                <!-- Row -->
                <tr class="border-t border-gray-200">
                  <td class="text-sm sm:text-base pr-2 py-4">
                    <div class="font-medium underline">
                      Rekap kasbon pegawai
                    </div>
                    <div class="text-gray-600">
                      Dapat menginput kasbon pegawai, agar dapat otomatis
                      memotong gaji bulanan pegawai
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-gray-400 opacity-75 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.72 1.293a1 1 0 00-1.415 0L6.012 4.586 2.72 1.293a1 1 0 00-1.414 1.414L4.598 6 1.305 9.293a1 1 0 101.414 1.414l3.293-3.293 3.293 3.293a1 1 0 001.414-1.414L7.426 6l3.293-3.293a1 1 0 000-1.414z"
                      />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-green-500 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                      />
                    </svg>
                  </td>
                </tr>
                <!-- Row -->
                <tr class="border-t border-gray-200">
                  <td class="text-sm sm:text-base pr-2 py-4">
                    <div class="font-medium underline">
                      Alokasi Dana Backup
                    </div>
                    <div class="text-gray-600">
                      Dapat mengalokasikan dana backup hasil dari profit
                      servis, dan dapat menginput insiden yang dilakukan
                      teknisi saat pengerjaan servis
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-gray-400 opacity-75 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.72 1.293a1 1 0 00-1.415 0L6.012 4.586 2.72 1.293a1 1 0 00-1.414 1.414L4.598 6 1.305 9.293a1 1 0 101.414 1.414l3.293-3.293 3.293 3.293a1 1 0 001.414-1.414L7.426 6l3.293-3.293a1 1 0 000-1.414z"
                      />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-green-500 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                      />
                    </svg>
                  </td>
                </tr>
                <!-- Row -->
                <tr class="border-t border-gray-200">
                  <td class="text-sm sm:text-base pr-2 py-4">
                    <div class="font-medium underline">Cetak slip gaji</div>
                    <div class="text-gray-600">
                      Dapat mencetak slip gaji dan mengakumulasi bonus
                      secara otomatis dari hasil inputan transaksi
                      masing-masing admin toko/teknisi/sales
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-gray-400 opacity-75 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.72 1.293a1 1 0 00-1.415 0L6.012 4.586 2.72 1.293a1 1 0 00-1.414 1.414L4.598 6 1.305 9.293a1 1 0 101.414 1.414l3.293-3.293 3.293 3.293a1 1 0 001.414-1.414L7.426 6l3.293-3.293a1 1 0 000-1.414z"
                      />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-green-500 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                      />
                    </svg>
                  </td>
                </tr>
                <!-- Row -->
                <tr class="border-t border-gray-200">
                  <td class="text-sm sm:text-base pr-2 py-4">
                    <div class="font-medium underline">
                      Impor & eskpor data
                    </div>
                    <div class="text-gray-600">
                      Dapat melakukan penambahan/pengubahan data dengan
                      jumlah banyak sekaligus melalui aplikasi Microsoft
                      Excel
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-green-500 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                      />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg
                      class="w-3 h-3 fill-current text-green-500 inline-flex"
                      viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"
                      />
                    </svg>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- Faqs -->
    <section>
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="py-12 md:py-20 border-t border-gray-200">
          <!-- Section header -->
          <div class="max-w-3xl mx-auto text-center pb-20">
            <h2 class="h2">Yang Sering Ditanyakan</h2>
          </div>

          <!-- Faqs -->
          <ul class="max-w-3xl mx-auto pl-12">
            <li x-data="{ expanded: false }">
              <button
                class="flex items-center w-full text-lg font-medium text-left py-5 border-t border-gray-200"
                @click="expanded = !expanded"
                :aria-expanded="expanded"
              >
                <svg
                  class="w-4 h-4 fill-current text-blue-500 shrink-0 mr-8 -ml-12"
                  viewBox="0 0 16 16"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect
                    y="7"
                    width="16"
                    height="2"
                    rx="1"
                    class="transform origin-center transition duration-200 ease-out"
                    :class="{'!rotate-180': expanded}"
                  />
                  <rect
                    y="7"
                    width="16"
                    height="2"
                    rx="1"
                    class="transform origin-center rotate-90 transition duration-200 ease-out"
                    :class="{'!rotate-180': expanded}"
                  />
                </svg>
                <span>Apakah terdapat pembaharuan fitur kedepannya?</span>
              </button>
              <div
                x-ref="item"
                class="text-gray-600 overflow-hidden transition-all duration-300 ease-in-out"
                :style="expanded ? 'max-height: ' + $refs.item.scrollHeight + 'px; opacity: 1' : 'max-height: 0; opacity: 0'"
              >
                <p class="pb-5">
                  Kami akan terus menerima saran-saran dari member untuk
                  peningkatan kualitas web, dan akan melakukan pembaharuan
                  tanpa biaya tambahan.
                </p>
              </div>
            </li>
            <li x-data="{ expanded: false }">
              <button
                class="flex items-center w-full text-lg font-medium text-left py-5 border-t border-gray-200"
                @click="expanded = !expanded"
                :aria-expanded="expanded"
              >
                <svg
                  class="w-4 h-4 fill-current text-blue-500 shrink-0 mr-8 -ml-12"
                  viewBox="0 0 16 16"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect
                    y="7"
                    width="16"
                    height="2"
                    rx="1"
                    class="transform origin-center transition duration-200 ease-out"
                    :class="{'!rotate-180': expanded}"
                  />
                  <rect
                    y="7"
                    width="16"
                    height="2"
                    rx="1"
                    class="transform origin-center rotate-90 transition duration-200 ease-out"
                    :class="{'!rotate-180': expanded}"
                  />
                </svg>
                <span
                  >Bagaimana dengan riwayat data yang telah diinput?</span
                >
              </button>
              <div
                x-ref="item"
                class="text-gray-600 overflow-hidden transition-all duration-300 ease-in-out"
                :style="expanded ? 'max-height: ' + $refs.item.scrollHeight + 'px; opacity: 1' : 'max-height: 0; opacity: 0'"
              >
                <p class="pb-5">
                  Kami jamin keamanan data anda tidak akan hilang hingga
                  bertahun-tahun, kami akan melakukan backup data setiap
                  minggunya.
                </p>
              </div>
            </li>
            <li x-data="{ expanded: false }">
              <button
                class="flex items-center w-full text-lg font-medium text-left py-5 border-t border-gray-200"
                @click="expanded = !expanded"
                :aria-expanded="expanded"
              >
                <svg
                  class="w-4 h-4 fill-current text-blue-500 shrink-0 mr-8 -ml-12"
                  viewBox="0 0 16 16"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect
                    y="7"
                    width="16"
                    height="2"
                    rx="1"
                    class="transform origin-center transition duration-200 ease-out"
                    :class="{'!rotate-180': expanded}"
                  />
                  <rect
                    y="7"
                    width="16"
                    height="2"
                    rx="1"
                    class="transform origin-center rotate-90 transition duration-200 ease-out"
                    :class="{'!rotate-180': expanded}"
                  />
                </svg>
                <span
                  >Apakah aplikasinya hanya bisa digunakan pada perangkat PC
                  / Laptop yang telah terinstall?</span
                >
              </button>
              <div
                x-ref="item"
                class="text-gray-600 overflow-hidden transition-all duration-300 ease-in-out"
                :style="expanded ? 'max-height: ' + $refs.item.scrollHeight + 'px; opacity: 1' : 'max-height: 0; opacity: 0'"
              >
                <p class="pb-5">
                  Tidak, aplikasi kami berbasis website, anda dapat
                  mengaksesnya melalui web browser pada perangkat apa saja
                  dengan tampilan yang responsif.
                </p>
              </div>
            </li>
            <span
              class="block border-t border-gray-200"
              aria-hidden="true"
            ></span>
          </ul>
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
            data-aos="zoom-y-out"
          >
            <div
              class="flex flex-col lg:flex-row justify-between items-center"
            >
              <!-- CTA content -->
              <div class="mb-6 lg:mr-16 lg:mb-0 text-center lg:text-left">
                <h3 class="h3 text-white mb-2">
                  Butuh penjelasan secara langsung ?
                </h3>
                <p class="text-white text-lg opacity-75">
                  Kami siap untuk menjelaskan secara langsung ke toko Anda
                  atau melalui pertemuan virtual.
                </p>
              </div>

              <!-- CTA button -->
              <div>
                <a
                  class="btn text-blue-600 bg-gradient-to-r from-blue-100 to-white"
                  href="https://wa.me/6281938960028"
                  target="_blank"
                  >Hubungi Admin</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\main-saraba-bisa\resources\views/pages/pricing.blade.php ENDPATH**/ ?>