
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>EDIT DATA GOLONGAN</h3>
        <form action="<?php echo e(url('/golongan/' .$row->gol_id)); ?>" method="post">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">KODE</label>
                <input type="text" name="gol_kode" class="form-control" value="<?php echo e($row->gol_kode); ?>">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="gol_nama" class="form-control" value="<?php echo e($row->gol_nama); ?>">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-laravel-quiz-juar\resources\views/golongan/edit.blade.php ENDPATH**/ ?>