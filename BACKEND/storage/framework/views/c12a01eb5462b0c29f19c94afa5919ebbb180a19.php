

<?php $__env->startSection('title', 'Halaman | Himed'); ?>

<?php $__env->startSection('container'); ?>

<div class="container-fluid mt-5">
  <h1>Halaman</h1>
  <hr>
  <a href="<?php echo e(route('logout')); ?>">Logout</a>
</div>

 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1_HIMED\BACKEND\resources\views/page/halaman.blade.php ENDPATH**/ ?>