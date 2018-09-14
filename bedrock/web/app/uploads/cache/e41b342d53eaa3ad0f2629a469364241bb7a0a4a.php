<?php $__env->startSection('content'); ?>
    <div class="fondo"  style="background: url(<?php echo e(get_field('imagen_header', 'options')); ?>); background-position: center center; background-size: cover; background-repeat: no-repeat;" >  
        <img class="svg" src="<?= App\asset_path('images/svg/vector-01.svg'); ?>" style="width:100%; height:auto; " >     
        <div class="portada">
            <h3><?php echo e(get_field('frase_header', 'option')); ?></h3>
            <H1><?php echo e(get_field('titulo_header', 'option')); ?></H1>
            <p><?php echo e(get_field('descripcion_header', 'option')); ?></p>
            <?php ($boton = get_field('boton_header', 'options')); ?>
            <a class="boton-1" href="<?php echo e($boton['url']); ?>"><?php echo e($boton['title']); ?></a>
        </div>
    </div>
    
    <div class="servicios columns">
            <?php $__currentLoopData = array_slice($servicios_loop,0,4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="servicio-item column is-3">
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
    <div class="boton-div">
        <?php ($boton = get_field('boton_servicio', 'options')); ?>
        <a class="boton-2" href="<?php echo e($boton['url']); ?>"><?php echo e($boton['title']); ?></a>
    </div>
<?php echo $__env->make('partials.nosotros', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partials.procesos-contrataciones', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>