
<?php $__env->startSection('title', 'Kategori'); ?>
<?php $__env->startSection('active-kategori', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.kategori', [])->html();
} elseif ($_instance->childHasBeenRendered('Wlvm65m')) {
    $componentId = $_instance->getRenderedChildComponentId('Wlvm65m');
    $componentTag = $_instance->getRenderedChildComponentTagName('Wlvm65m');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Wlvm65m');
} else {
    $response = \Livewire\Livewire::mount('petugas.kategori', []);
    $html = $response->html();
    $_instance->logRenderedChild('Wlvm65m', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.kategori>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Projek-Akhir-PAW\resources\views/petugas/kategori/index.blade.php ENDPATH**/ ?>