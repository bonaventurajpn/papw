<?php if(session('sukses')): ?>
    <div class="alert alert-success">
        <?php echo e(session('sukses')); ?>

    </div>
<?php endif; ?>
<?php if(session('gagal')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('gagal')); ?>

    </div>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\Projek-Akhir-PAW\resources\views/admin-lte/flash.blade.php ENDPATH**/ ?>