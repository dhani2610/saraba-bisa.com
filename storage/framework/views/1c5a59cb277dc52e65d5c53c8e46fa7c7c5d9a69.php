<?php if (isset($component)) { $__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AuthLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('auth-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AuthLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <!-- Page content -->
  <main class="grow">
    <section class="bg-gradient-to-b from-gray-100 to-white">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="pt-32 pb-12 md:pt-40 md:pb-20">
          <!-- Page header -->
          <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
            <h1 class="h1">
              Selamat datang. Kami siap untuk membantu mengoptimalkan bisnis
              Anda.
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
  <script src="<?php echo e(asset('js/myscript.js')); ?>"></script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3)): ?>
<?php $component = $__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3; ?>
<?php unset($__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\main-saraba-bisa\resources\views/pages/subscribe.blade.php ENDPATH**/ ?>