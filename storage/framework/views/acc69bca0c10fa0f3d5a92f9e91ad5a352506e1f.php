
<?php $__env->startSection('title', 'Buku'); ?>
<?php $__env->startSection('active-buku', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.buku', [])->html();
} elseif ($_instance->childHasBeenRendered('StIa1gk')) {
    $componentId = $_instance->getRenderedChildComponentId('StIa1gk');
    $componentTag = $_instance->getRenderedChildComponentTagName('StIa1gk');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('StIa1gk');
} else {
    $response = \Livewire\Livewire::mount('petugas.buku', []);
    $html = $response->html();
    $_instance->logRenderedChild('StIa1gk', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.buku>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Projek-Akhir-PAW\resources\views/petugas/buku/index.blade.php ENDPATH**/ ?>