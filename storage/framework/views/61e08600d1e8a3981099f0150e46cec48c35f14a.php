
<?php $__env->startSection('title', 'Penerbit'); ?>
<?php $__env->startSection('active-penerbit', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.penerbit', [])->html();
} elseif ($_instance->childHasBeenRendered('jmqsyW2')) {
    $componentId = $_instance->getRenderedChildComponentId('jmqsyW2');
    $componentTag = $_instance->getRenderedChildComponentTagName('jmqsyW2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jmqsyW2');
} else {
    $response = \Livewire\Livewire::mount('petugas.penerbit', []);
    $html = $response->html();
    $_instance->logRenderedChild('jmqsyW2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.penerbit>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Projek-Akhir-PAW\resources\views/petugas/penerbit/index.blade.php ENDPATH**/ ?>