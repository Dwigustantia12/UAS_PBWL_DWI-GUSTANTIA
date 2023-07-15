
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>TAMBAH DATA USERS</h3>
        <form action="<?php echo e(url('/users')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="text" name="user_email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="user_password" class="form-control" placeholder="Password">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="user_nama" class="form-control" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="user_alamat" class="form-control" placeholder="Alamat">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" name="user_hp" class="form-control" placeholder="Nomor Hp">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-laravel-quiz-juar\resources\views/users/create.blade.php ENDPATH**/ ?>