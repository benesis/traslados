<?php $__env->startSection('titulo-pagina', 'Traslados'); ?>

<?php $__env->startSection('content'); ?>
  <?php $__env->startComponent('componentes.grid.grid_12'); ?>
    <?php $__env->slot('sideA'); ?>
      <?php $__env->startComponent('componentes.card'); ?>
        <?php $__env->slot('head', 'Entrantes'); ?>
        <?php $__env->slot('body'); ?>
          <?php $__env->startComponent('componentes.tablaTraslado'); ?>
            <?php $__env->slot('tablaTrasladoCuerpo'); ?>
            <?php $__env->endSlot(); ?>
          <?php echo $__env->renderComponent(); ?>
        <?php $__env->endSlot(); ?>
      <?php echo $__env->renderComponent(); ?>

      <?php $__env->startComponent('componentes.card'); ?>
        <?php $__env->slot('head', 'Salientes'); ?>
        <?php $__env->slot('body'); ?>
          <?php $__env->startComponent('componentes.tablaTraslado'); ?>
            <?php $__env->slot('tablaTrasladoCuerpo'); ?>
            <?php $__env->endSlot(); ?>
          <?php echo $__env->renderComponent(); ?>
        <?php $__env->endSlot(); ?>
      <?php echo $__env->renderComponent(); ?>
    <?php $__env->endSlot(); ?>
  <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\laragon\www\traslados\resources\views/Traslados/index.blade.php */ ?>