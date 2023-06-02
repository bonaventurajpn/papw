
<?php $__env->startSection('title', 'Transaksi'); ?>
<?php $__env->startSection('active-transaksi', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.transaksi', [])->html();
} elseif ($_instance->childHasBeenRendered('87mm9lh')) {
    $componentId = $_instance->getRenderedChildComponentId('87mm9lh');
    $componentTag = $_instance->getRenderedChildComponentTagName('87mm9lh');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('87mm9lh');
} else {
    $response = \Livewire\Livewire::mount('petugas.transaksi', []);
    $html = $response->html();
    $_instance->logRenderedChild('87mm9lh', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.transaksi>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Projek-Akhir-PAW\resources\views/petugas/transaksi/index.blade.php ENDPATH**/ ?>