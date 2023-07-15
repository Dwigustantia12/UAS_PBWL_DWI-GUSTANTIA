
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>TAMBAH DATA KONTAK DWI BAKERY</h3>
        <form action="<?php echo e(url('/kontak')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Kontak">
            </div>
            <div class="mb-3">
                <label for="">EMAIL</label>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="">NOMOR TELEPON</label>
                <input type="text" name="nomor_telepon" class="form-control" placeholder="Nomor Telepon">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-rudiriyandi\resources\views/kontak/create.blade.php ENDPATH**/ ?>