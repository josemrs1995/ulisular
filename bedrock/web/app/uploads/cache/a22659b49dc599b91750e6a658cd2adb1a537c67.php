<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="info-servicios">
    <h3>
        <?php echo e(get_field('info_servicios_titulo', 11)); ?>

    </h3>
    <p><?php echo e(get_field('info_servicios_parrafo', 11)); ?></p>
</div>
<div class="servicios columns is-7 is-multiline" style="top: unset;">
        <?php $__currentLoopData = $servicios_loop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="servicio-item-interno column is-4">
            <img src="<?php echo e($servicios['thumbnail']); ?>')">
            <div class="orden-items-servicios">    
                <h2><?php echo e($servicios['title']); ?></h2>
                <div class="raya"></div>
                <p><?php echo $servicios['resumen']; ?></p>
                <a class="boton-1" href="<?php echo e($servicios['link']); ?>">Ir Al Servicio</a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<div class="registrarse-servicios">
<h5>
    <?php echo e(get_field('info_resgistrarse_servicios', 11)); ?>

</h5>
<div class="boton-div-4">
    <a class="btn-beneficios" href="#">REGISTRATE</a>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>