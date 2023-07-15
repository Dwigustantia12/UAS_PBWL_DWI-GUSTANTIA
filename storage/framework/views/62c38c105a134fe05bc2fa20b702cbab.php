
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>DATA PESANAN</h3>
        <?php if(session()->has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session ('success')); ?>

        </div>
        <?php endif; ?>
        <a class="btn btn-primary btn-sm float-end" href="<?php echo e(url('pesanan/create')); ?>">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <td>ID PESANAN</td>
                <td>TANGGAL PESANAN</td>
                <td>TOTAL HARGA</td>
                <td>NAMA KONTAK</td>
                <td>NAMA PRODUK</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row->id_pesanan); ?></td>
                <td><?php echo e($row->tanggal_pesanan); ?></td>
                <td><?php echo e($row->total_harga); ?></td>
                <td><?php echo e($row->kontak->nama); ?></td>
                <td><?php echo e($row->produk->nama_produk); ?></td>
                <td><a class="btn btn-info btn-sm float" href="<?php echo e(url('pesanan/' .$row->id_pesanan. '/edit')); ?>">Edit</a></td>
                <td>
                    <form action="<?php echo e(url('pesanan/' .$row->id_pesanan)); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-rudiriyandi\resources\views/pesanan/index.blade.php ENDPATH**/ ?>