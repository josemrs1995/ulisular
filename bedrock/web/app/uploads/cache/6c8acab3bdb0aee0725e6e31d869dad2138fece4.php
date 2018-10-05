<div class="noticias container ">
    <h5>Procesos</h5>
    <div class="columns timeline-container is-multiline" style="position:relative">

        
        <div class="barra-vertical"></div>
        
        <?php $__currentLoopData = array_slice($procesos_loop,0,4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $procesos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="column timeline-item is-half  animate fadeInUp">
                <div class="diamante">
                            <div class="rombo"></div>
                    </div>
                <div class="caja-procesos columns animate fadeInUp">
                    <div class="img-noticias column is-5" style="background:url('<?php echo e($procesos['thumbnail']); ?>'); background-size:cover;"></div>
                    <div class="content-procesos column is-6">
                        <h5 class="h5"><?php echo e($procesos['title']); ?></h5>
                        <span><?php echo e(get_field('subtitulo_procesos', '61')); ?></span>
                        <p class="resumen"><?php echo $procesos['resumen']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    </div>
<!--<a class="boton-1" style="margin: auto">Ultimas Noticias</a>-->
    <div class="boton-div-3">
        <?php ($boton = get_field('boton_procesos', 'options')); ?>
        <a class="boton-4" href="<?php echo e($boton['url']); ?>"><?php echo e($boton['title']); ?></a>
    </div>
</div>