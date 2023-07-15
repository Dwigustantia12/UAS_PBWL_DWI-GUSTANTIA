
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>DATA PRODUK DWI BAKRY</h3>
        <?php if(session()->has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session ('success')); ?>

        </div>
        <?php endif; ?>
        <a class="btn btn-primary btn-sm float-end" href="<?php echo e(url('produk/create')); ?>">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <td>ID PRODUK</td>
                <td>NAMA PRODUK</td>
                <td>DESKRIPSI</td>
                <td>HARGA</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row->id_produk); ?></td>
                <td><?php echo e($row->nama_produk); ?></td>
                <td><?php echo e($row->deskripsi); ?></td>
                <td><?php echo e($row->harga); ?></td>
                <td><a class="btn btn-info btn-sm float" href="<?php echo e(url('produk/' .$row->id_produk. '/edit')); ?>">Edit</a></td>
                <td>
                    <form action="<?php echo e(url('produk/' .$row->id_produk)); ?>" method="post">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\XAMPP\htdocs\PBWL-UAS-DWIGUSTANTIA\resources\views/produk/index.blade.php ENDPATH**/ ?>