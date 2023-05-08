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
            <div class="flex justify-center mb-8">
              <img src="<?php echo e(asset('images/register-success.png')); ?>" alt="">
            </div>
            <h4 class="h4">
              Pendaftaran anda sudah berhasil 👏🏻 <br> Silahkan tunggu admin kami menghubungi lewat Whatsapp ke nomor yang anda daftarkan.
            </h4>
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
<?php endif; ?><?php /**PATH C:\laragon\www\main-saraba-bisa\resources\views/pages/register-success.blade.php ENDPATH**/ ?>