<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  
<?php while(have_posts()): ?> <?php the_post() ?>
<div class="info-servicios-beneficios  animate fadeInUp">
        <?php echo $__env->make('partials.content-single-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endwhile; ?>
</div>
<div class="beneficio-del-servicio columns  animate fadeInUp">
    <?php if(have_rows('seccion_2_servicios')): ?>
  
  <?php while(have_rows('seccion_2_servicios')): ?><?php (the_row()); ?>
    <div class="column contenido-beneficios-servicios">
        <h1><?php echo e(get_sub_field('titulo')); ?></h1>
        <h4><?php echo e(get_sub_field('subtitulo')); ?></h4>
        <p><?php echo e(get_sub_field('contenido')); ?></p>
    </div>
    <div class="column imagen-beneficios-servicios">
       <img class="img-beneficios" src="<?php echo e(get_sub_field('imagen')); ?>"> 
    </div>
  <?php endwhile; ?>
<?php else: ?>      
<?php endif; ?>
</div>
<div class="caracteristicas-servicios  animate fadeInUp">
    <?php if(have_rows('seccion_3_servicios')): ?>
    <?php while(have_rows('seccion_3_servicios')): ?><?php (the_row()); ?>
    <h3><?php echo e(get_sub_field('titulo_caracteristicas')); ?></h3>
    <div class="numero-beneficios column is-8">
            <div class="contain-num-beneficios columns is-multiline" style="padding: 0 20px;">
                <?php if(have_rows('contenido')): ?>
                    <?php while(have_rows('contenido')): ?><?php (the_row()); ?>
                        <div class="items-beneficios column is-4">
                            <img src="<?php echo e(get_sub_field('imagen')); ?>">
                            <h5><?php echo e(get_sub_field('titulo')); ?></h5>
                            <p><?php echo e(get_sub_field('contenido')); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>