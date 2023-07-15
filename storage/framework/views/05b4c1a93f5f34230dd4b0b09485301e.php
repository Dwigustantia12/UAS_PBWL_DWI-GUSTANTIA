
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>TAMBAH DATA PESANAN DWI BAKERY</h3>
        <form action="<?php echo e(url('/pesanan')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">Tanggal Pesanan</label>
                <input type="date" name="tanggal_pesanan" class="form-control" placeholder="Tanggal Pesanan">
            </div>
            <div class="mb-3">
                <label for="">Total Harga</label>
                <input type="text" name="total_harga" class="form-control" placeholder="Total Harga">
            </div>
            <div class="mb-3">
                <label for="">NAMA KONTAK</label>
                <select name="id_kontak" id="" class="form-control">
                    <?php $__currentLoopData = $kontak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ktk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($ktk->id_kontak); ?>"><?php echo e($ktk->nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>    
            </div>
            <div class="mb-3">
                <label for="">PRODUK</label>
                <select name="id_produk" id="" class="form-control">
                    <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($prd->id_produk); ?>"><?php echo e($prd->nama_produk); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>    
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-rudiriyandi\resources\views/pesanan/create.blade.php ENDPATH**/ ?>