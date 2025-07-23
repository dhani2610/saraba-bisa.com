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
              Selamat datang. Kami siap untuk mempermudah pencatatan keuangan toko Anda.
            </h1>
          </div>

          <!-- Form -->
          <div class="max-w-sm mx-auto">
            <form method="POST" action="<?php echo e(route('submit-subscribe')); ?>">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="status" value="Belum Diproses">
              <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label
                    class="block text-gray-800 text-sm font-medium mb-1"
                    for="name"
                    >Nama Lengkap <span class="text-red-600">*</span></label
                  >
                  <input
                    id="name"
                    name="name"
                    type="text"
                    class="form-input w-full text-gray-800"
                    placeholder="Masukkan nama anda"
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
                    name="email"
                    type="email"
                    class="form-input w-full text-gray-800"
                    placeholder="Masukkan alamat email anda"
                    required
                  />
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label
                    class="block text-gray-800 text-sm font-medium mb-1"
                    for="phone_number"
                    >Nomor HP/WA <span class="text-red-600">*</span></label
                  >
                  <input
                    id="phone_number"
                    name="phone_number"
                    type="number"
                    class="form-input w-full text-gray-800"
                    placeholder="Masukkan nomor HP anda"
                    required
                  />
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label
                    class="block text-gray-800 text-sm font-medium mb-1"
                    for="store_name"
                    >Nama Toko <span class="text-red-600">*</span></label
                  >
                  <input
                    id="store_name"
                    name="store_name"
                    type="text"
                    class="form-input w-full text-gray-800"
                    placeholder="Masukkan nama toko anda"
                    required
                  />
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label
                    class="block text-gray-800 text-sm font-medium mb-1"
                    for="location"
                    >Asal Kota <span class="text-red-600">*</span></label
                  >
                  <input
                    id="location"
                    name="location"
                    type="text"
                    class="form-input w-full text-gray-800"
                    placeholder="Masukkan nama kota anda"
                    required
                  />
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label
                    class="block text-gray-800 text-sm font-medium mb-1"
                    for="packets_id"
                    >Pilihan Paket
                    <span class="text-red-600">*</span></label
                  >
                  <select
                    name="packets_id"
                    id="packets_id"
                    class="form-select w-full text-gray-800"
                    required
                  >
                  <?php $__currentLoopData = $packets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($item->id); ?>">Paket <?php echo e($item->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3)): ?>
<?php $component = $__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3; ?>
<?php unset($__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3); ?>
<?php endif; ?><?php /**PATH /var/www/saraba-bisa.com/resources/views/pages/subscribe.blade.php ENDPATH**/ ?>