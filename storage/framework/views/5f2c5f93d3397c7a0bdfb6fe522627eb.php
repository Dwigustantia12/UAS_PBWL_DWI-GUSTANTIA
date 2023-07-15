
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>EDIT DATA PRODUK</h3>
        <form action="<?php echo e(url('/produk/' .$row->id_produk)); ?>" method="post">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">NAMA PRODUK</label>
                <input type="text" name="nama_produk" class="form-control" value="<?php echo e($row->nama_produk); ?>">
            </div>
            <div class="mb-3">
                <label for="">DESKRIPSI</label>
                <input type="text" name="deskripsi" class="form-control" value="<?php echo e($row->deskripsi); ?>">
            </div>
            <div class="mb-3">
                <label for="">HARGA</label>
                <input type="text" name="harga" class="form-control" value="<?php echo e($row->harga); ?>">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-rudiriyandi\resources\views/produk/edit.blade.php ENDPATH**/ ?>