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
    <!-- Hero section -->
    <section class="bg-gradient-to-b from-gray-100 to-gray-200">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="pt-32 pb-12 md:pt-40 md:pb-20">
          <!-- Section header -->
          <div class="max-w-3xl mx-auto text-center pb-12 md:pb-16">
            <h1 class="h1 mb-4" data-aos="zoom-y-out">Hubungi tim kami</h1>
            <p
              class="text-xl text-gray-600"
              data-aos="zoom-y-out"
              data-aos-delay="150"
            >
              Anda bisa langsung datang ke kantor, menghubungi lewat
              Whatsapp maupun berkomentar pada group Facebook kami.
            </p>
          </div>

          <!-- Items -->
          <div
            class="max-w-sm mx-auto grid gap-6 md:max-w-2xl lg:max-w-none"
            data-aos-id-blocks
          >
            <!-- 1st item -->
            <div
              class="relative flex flex-col p-6 bg-white rounded shadow-xl"
              data-aos="zoom-y-out"
              data-aos-anchor="[data-aos-id-blocks]"
            >
              <svg
                class="w-12 h-12 mb-3"
                viewBox="0 0 48 48"
                xmlns="http://www.w3.org/2000/svg"
              >
                <circle
                  class="fill-current text-blue-600"
                  cx="24"
                  cy="24"
                  r="24"
                />
                <g transform="translate(8 8)" stroke-width="2">
                  <path
                    class="stroke-current text-blue-300"
                    d="M23.778 8.222l-4.242 4.242M23.778 23.778l-4.242-4.242M8.222 23.778l4.242-4.242M8.222 8.222l4.242 4.242"
                  />
                  <circle
                    class="stroke-current text-white"
                    transform="rotate(-45 16 16)"
                    cx="16"
                    cy="16"
                    r="11"
                    fill="none"
                  />
                  <circle
                    class="stroke-current text-blue-300"
                    transform="rotate(-45 16 16)"
                    cx="16"
                    cy="16"
                    r="5"
                    fill="none"
                  />
                </g>
              </svg>
              <h4
                class="text-xl font-bold leading-snug tracking-tight mb-1"
              >
                Alamat Kantor
              </h4>
              <p class="text-gray-600">
                Jl. Negara Dipa RT. 8 No. 6 Kel. Sungai Malang, Kec. Amuntai
                Tengah, Kab. Hulu Sungai Utara, Prov. Kalimantan Selatan
              </p>
            </div>

            <!-- 2nd item -->
            <div
              class="relative flex flex-col p-6 bg-white rounded shadow-xl"
              data-aos="zoom-y-out"
              data-aos-delay="150"
              data-aos-anchor="[data-aos-id-blocks]"
            >
              <svg
                class="w-12 h-12 mb-3"
                viewBox="0 0 48 48"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g fill="none" fill-rule="evenodd">
                  <circle
                    class="fill-current text-blue-600"
                    cx="24"
                    cy="24"
                    r="24"
                  />
                  <g stroke-width="2">
                    <path
                      class="stroke-current text-blue-300"
                      d="M24 19v16M13 25h3M16 17l2.1 2.1M32 17l-2.1 2.1M16 34l2.1-2.1M32 34l-2.1-2.1M32 25h3M21 15l-2-2M27 15l2-2"
                    />
                    <path
                      class="stroke-current text-white"
                      d="M27.9 17.2c2.5 1.6 4.1 4.7 4.1 8.3 0 5.2-3.6 9.5-8 9.5s-8-4.3-8-9.5c0-3.6 1.7-6.7 4.1-8.3"
                    />
                    <path
                      class="stroke-current text-white"
                      d="M24 14c-2 0-3.7 1.5-4 3.5 0 0 2 1.5 4 1.5s4-1.5 4-1.5c-.3-2-2-3.5-4-3.5z"
                      stroke-linecap="square"
                    />
                  </g>
                </g>
              </svg>
              <h4
                class="text-xl font-bold leading-snug tracking-tight mb-1"
              >
                Whatsapp
              </h4>
              <p class="text-gray-600">
                M Hairil Hidayat : 0811801799 <br />
                Muhammad Khaidir : 081938960028
              </p>
            </div>

            <!-- 3rd item -->
            <div
              class="relative flex flex-col p-6 bg-white rounded shadow-xl"
              data-aos="zoom-y-out"
              data-aos-delay="300"
              data-aos-anchor="[data-aos-id-blocks]"
            >
              <svg
                class="w-12 h-12 mb-3"
                viewBox="0 0 48 48"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g fill="none" fill-rule="evenodd">
                  <circle
                    class="fill-current text-blue-600"
                    cx="24"
                    cy="24"
                    r="24"
                  />
                  <g stroke-width="2">
                    <path
                      class="stroke-current text-blue-300"
                      d="M33 16L22 27"
                    />
                    <path
                      class="stroke-current text-white"
                      d="M33 16l-7 19-4-8-8-4z"
                    />
                  </g>
                </g>
              </svg>
              <h4
                class="text-xl font-bold leading-snug tracking-tight mb-1"
              >
                Group Facebook
              </h4>
              <p class="text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>  
  <script src="<?php echo e(asset('js/myscript.js')); ?>"></script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\main-saraba-bisa\resources\views/pages/contact.blade.php ENDPATH**/ ?>