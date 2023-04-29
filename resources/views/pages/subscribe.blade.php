<x-auth-layout>
  <!-- Page content -->
  <main class="grow">
    <section class="bg-gradient-to-b from-gray-100 to-white">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="pt-32 pb-12 md:pt-40 md:pb-20">
          <!-- Page header -->
          <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
            <h1 class="h1">
              Selamat datang. Kami siap untuk mempermudah pencatatan keuangan toko Anda.
            </h1>
          </div>

          <!-- Form -->
          <div class="max-w-sm mx-auto">
            <form>
              <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label
                    class="block text-gray-800 text-sm font-medium mb-1"
                    for="name"
                    >Nama Lengkap <span class="text-red-600">*</span></label
                  >
                  <input
                    id="name"
                    type="text"
                    class="form-input w-full text-gray-800"
                    placeholder="Enter your name"
                    required
                  />
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label
                    class="block text-gray-800 text-sm font-medium mb-1"
                    for="email"
                    >Email <span class="text-red-600">*</span></label
                  >
                  <input
                    id="email"
                    type="email"
                    class="form-input w-full text-gray-800"
                    placeholder="Enter your email address"
                    required
                  />
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label
                    class="block text-gray-800 text-sm font-medium mb-1"
                    for="email"
                    >Nomor HP/WA <span class="text-red-600">*</span></label
                  >
                  <input
                    id="email"
                    type="number"
                    class="form-input w-full text-gray-800"
                    placeholder="Enter your phone number"
                    required
                  />
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label
                    class="block text-gray-800 text-sm font-medium mb-1"
                    for="name"
                    >Nama Toko <span class="text-red-600">*</span></label
                  >
                  <input
                    id="name"
                    type="text"
                    class="form-input w-full text-gray-800"
                    placeholder="Enter your store name"
                    required
                  />
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label
                    class="block text-gray-800 text-sm font-medium mb-1"
                    for="name"
                    >Pilihan Paket
                    <span class="text-red-600">*</span></label
                  >
                  <select
                    name=""
                    id=""
                    class="form-select w-full text-gray-800"
                    required
                  >
                    <option value="Paket Premium">Paket Premium</option>
                    <option value="Paket Basic">Paket Basic</option>
                  </select>
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mt-6">
                <div class="w-full px-3">
                  <button
                    class="btn text-white bg-blue-600 hover:bg-blue-700 w-full"
                  >
                    Daftar
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script src="{{ asset('js/myscript.js') }}"></script>
</x-auth-layout>