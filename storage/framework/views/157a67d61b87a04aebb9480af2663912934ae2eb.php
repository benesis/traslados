<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $__env->yieldContent('titulo-pagina', 'Traslados Empresa X'); ?></title>

  <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

  <link rel="icon" href="<?php echo e(asset('./img/icon.png')); ?>">

</head>
<body class="root">
 
  <!--Navbar-->
  <?php $__env->startSection('navbar'); ?>
        <?php echo $__env->make('componentes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldSection(); ?>
  
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Nuevo Traslado
 </button>

<!-- contenedor -->
  <div class="container">
    <?php echo $__env->yieldContent('content', 'Default Content'); ?>
  </div>

<!--footer-->
<?php $__env->startSection('footer'); ?>
        <?php echo $__env->make('componentes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldSection(); ?>
<!--Modal-->
<?php $__env->startSection('modal'); ?>
        <?php echo $__env->make('componentes.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldSection(); ?>
  <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
</body>
</html>

<?php /* C:\laragon\www\traslados\resources\views/main.blade.php */ ?>