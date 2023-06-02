
<?php $__env->startSection('title', 'User'); ?>
<?php $__env->startSection('active-user', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.user', [])->html();
} elseif ($_instance->childHasBeenRendered('1CoEL2I')) {
    $componentId = $_instance->getRenderedChildComponentId('1CoEL2I');
    $componentTag = $_instance->getRenderedChildComponentTagName('1CoEL2I');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1CoEL2I');
} else {
    $response = \Livewire\Livewire::mount('admin.user', []);
    $html = $response->html();
    $_instance->logRenderedChild('1CoEL2I', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:admin.user>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Projek-Akhir-PAW\resources\views/admin/user/index.blade.php ENDPATH**/ ?>