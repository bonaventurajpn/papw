

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('peminjam.keranjang', [])->html();
} elseif ($_instance->childHasBeenRendered('zGzRWUe')) {
    $componentId = $_instance->getRenderedChildComponentId('zGzRWUe');
    $componentTag = $_instance->getRenderedChildComponentTagName('zGzRWUe');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('zGzRWUe');
} else {
    $response = \Livewire\Livewire::mount('peminjam.keranjang', []);
    $html = $response->html();
    $_instance->logRenderedChild('zGzRWUe', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:peminjam.keranjang>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Projek-Akhir-PAW\resources\views/peminjam/keranjang/index.blade.php ENDPATH**/ ?>