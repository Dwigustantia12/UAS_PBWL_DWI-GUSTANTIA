
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>TAMBAH DATA DWI BAKERY</h3>
        <form action="<?php echo e(url('/produk')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">NAMA PRODUK</label>
                <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk">
            </div>
            <div class="mb-3">
                <label for="">DESKRIPSI</label>
                <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi">
            </div>
            <div class="mb-3">
                <label for="">HARGA</label>
                <input type="text" name="harga" class="form-control" placeholder="Harga">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-rudiriyandi\resources\views/produk/create.blade.php ENDPATH**/ ?>