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
              Selesaikan pendaftaran dan mulai manajemen toko servis anda dengan mudah!
            </h1>
          </div>

          <!-- Form -->
          <div class="relative px-4 sm:px-6 lg:px-8 pb-8 max-w-lg mx-auto" x-data="{ card: true }">
            <div class="bg-white px-8 pb-6 rounded-b shadow-lg">
                <form action="https://wa.me/6281938960028">
                  <!-- Card header -->
                  <div class="text-center mb-6">
                      <div class="mb-2">
                          <img class="-mt-8 inline-flex" src="<?php echo e(asset('images/payment.svg')); ?>" width="64" height="64" alt="User" />
                      </div>
                      <h1 class="text-xl leading-snug text-slate-800 font-semibold mb-2">Pilih Metode Pembayaran</h1>
                  </div>

                  <!-- Toggle -->
                  <div class="flex justify-center mb-6">
                      <div class="relative flex w-full p-1 bg-slate-50 rounded">
                          <span class="absolute inset-0 m-1 pointer-events-none" aria-hidden="true">
                              <span class="absolute inset-0 w-1/2 bg-white rounded border border-slate-200 shadow-sm transition duration-150 ease-in-out" :class="card ? 'translate-x-0' : 'translate-x-full'"></span>
                          </span>
                          <button class="relative flex-1 text-sm font-medium p-1 duration-150 ease-in-out" @click.prevent="card = true">Bayar Transfer Bank</button>
                          <button class="relative flex-1 text-sm font-medium p-1 duration-150 ease-in-out" @click.prevent="card = false">Bayar E-Wallet</button>
                      </div>
                  </div>

                  <!-- Card form -->
                  <div x-show="card">
                      <div class="space-y-4">
                          <!-- Name on Card -->
                          <div>
                              <label class="block text-sm font-medium mb-1" for="card-name">Nama Bank</label>
                              <input id="card-name" class="form-input w-full" type="text" value="Bank Central Asia (BCA)" disabled />
                          </div>
                          <!-- Card Number -->
                          <div>
                              <label class="block text-sm font-medium mb-1" for="card-nr">Nomor Rekening</label>
                              <input id="card-nr" class="form-input w-full" type="text" value="1284383888" disabled />
                          </div>
                          <!-- Name on Card -->
                          <div>
                              <label class="block text-sm font-medium mb-1" for="card-name">Nama Pemilik Rekening</label>
                              <input id="card-name" class="form-input w-full" type="text" value="M Hairil Hidayat" disabled />
                          </div>
                      </div>
                      <!-- Form footer -->
                      <div class="mt-6">
                          <button class="btn w-full bg-indigo-500 hover:bg-indigo-600 text-white">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                              </svg>
                              <span class="ml-2">Konfirmasi Pembayaran</span>
                          </button>
                      </div>
                  </div>

                  <!-- PayPal form -->
                  <div x-show="!card" x-cloak>
                      <div class="space-y-4">
                          <!-- Name on Card -->
                          <div>
                              <label class="block text-sm font-medium mb-1" for="card-name">Nama E-Wallet</label>
                              <input id="card-name" class="form-input w-full" type="text" value="DANA" disabled />
                          </div>
                          <!-- Card Number -->
                          <div>
                              <label class="block text-sm font-medium mb-1" for="card-nr">Nomor Akun</label>
                              <input id="card-nr" class="form-input w-full" type="text" value="0819 3896 0028" disabled />
                          </div>
                          <!-- Name on Card -->
                          <div>
                              <label class="block text-sm font-medium mb-1" for="card-name">Nama Pemilik Akun</label>
                              <input id="card-name" class="form-input w-full" type="text" value="Muhammad Khaidir" disabled />
                          </div>
                      </div>
                      <!-- Form footer -->
                      <div class="mt-6">
                          <button class="btn w-full bg-indigo-500 hover:bg-indigo-600 text-white">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                              </svg>
                              <span class="ml-2">Konfirmasi Pembayaran</span>
                          </button>
                      </div>
                  </div>
                </form>
            </div>
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
<?php endif; ?><?php /**PATH C:\laragon\www\main-saraba-bisa\resources\views/pages/checkout.blade.php ENDPATH**/ ?>