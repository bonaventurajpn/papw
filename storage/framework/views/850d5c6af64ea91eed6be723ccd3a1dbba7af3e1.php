
<?php $__env->startSection('title', 'Grafik'); ?>
<?php $__env->startSection('active-chart', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.chart', [])->html();
} elseif ($_instance->childHasBeenRendered('T8TEFTJ')) {
    $componentId = $_instance->getRenderedChildComponentId('T8TEFTJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('T8TEFTJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('T8TEFTJ');
} else {
    $response = \Livewire\Livewire::mount('petugas.chart', []);
    $html = $response->html();
    $_instance->logRenderedChild('T8TEFTJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.chart>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('admin-lte/script/chart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('chart-script'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.chart-script', [])->html();
} elseif ($_instance->childHasBeenRendered('uIOk6TJ')) {
    $componentId = $_instance->getRenderedChildComponentId('uIOk6TJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('uIOk6TJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('uIOk6TJ');
} else {
    $response = \Livewire\Livewire::mount('petugas.chart-script', []);
    $html = $response->html();
    $_instance->logRenderedChild('uIOk6TJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.chart-script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Projek-Akhir-PAW\resources\views/petugas/chart/index.blade.php ENDPATH**/ ?>