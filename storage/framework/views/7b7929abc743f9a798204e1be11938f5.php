
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>EDIT DATA KONTAK DWI BAKERY</h3>
        <form action="<?php echo e(url('/kontak/' .$row->id_kontak)); ?>" method="post">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="nama" class="form-control" value="<?php echo e($row->nama); ?>">
            </div>
            <div class="mb-3">
                <label for="">EMAIL</label>
                <input type="text" name="email" class="form-control" value="<?php echo e($row->email); ?>">
            </div>
            <div class="mb-3">
                <label for="">NOMOR TELEPON</label>
                <input type="text" name="nomor_telepon" class="form-control" value="<?php echo e($row->nomor_kontak); ?>">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\XAMPP\htdocs\PBWL-UAS-DWIGUSTANTIA\resources\views/kontak/edit.blade.php ENDPATH**/ ?>