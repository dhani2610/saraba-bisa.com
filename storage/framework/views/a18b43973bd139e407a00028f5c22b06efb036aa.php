<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Table -->
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('member', [])->html();
} elseif ($_instance->childHasBeenRendered('Bx9Jc3s')) {
    $componentId = $_instance->getRenderedChildComponentId('Bx9Jc3s');
    $componentTag = $_instance->getRenderedChildComponentTagName('Bx9Jc3s');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Bx9Jc3s');
} else {
    $response = \Livewire\Livewire::mount('member', []);
    $html = $response->html();
    $_instance->logRenderedChild('Bx9Jc3s', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\main-saraba-bisa\resources\views/pages/member/member.blade.php ENDPATH**/ ?>