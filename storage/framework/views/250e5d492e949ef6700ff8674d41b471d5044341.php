
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('admin-lte/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <?php echo $__env->make('admin-lte/preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('admin-lte/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('admin-lte/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="content-wrapper">
        <?php echo $__env->make('admin-lte/main-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="content">
      <div class="container-fluid">
            <?php echo $__env->yieldContent('content'); ?>
      </div>
    </section>
  </div>
    <?php echo $__env->make('admin-lte/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<?php echo $__env->make('admin-lte/javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('script'); ?>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php echo $__env->yieldContent('chart-script'); ?>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\Projek-Akhir-PAW\resources\views/admin-lte/app.blade.php ENDPATH**/ ?>