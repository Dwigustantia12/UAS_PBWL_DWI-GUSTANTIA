
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>TAMBAH DATA GOLONGAN</h3>
        <form action="<?php echo e(url('/golongan')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">KODE</label>
                <input type="text" name="gol_kode" class="form-control" placeholder="Kode Golongan">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="gol_nama" class="form-control" placeholder="Nama Golongan">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-quiz-rudiriyandi\resources\views/golongan/create.blade.php ENDPATH**/ ?>