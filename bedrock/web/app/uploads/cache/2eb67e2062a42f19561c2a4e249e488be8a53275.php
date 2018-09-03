<div class="nosotros">
    <div class="nosotros-frase">
            <h3><?php echo e(get_field('frase_nosotros', 'option')); ?></h3>
            <div class="raya"></div>
    </div>
   
    <div class="content-nosotros columns">
        <div class="column">
                <h1><?php echo e(get_field('titulo_nosotros', 'option')); ?></h1>
                <div class="titulos-content" style="margin-top:25px;">
                    <a href="#" class="quehacemos active">Que hacemos</a>
                    <a href="#" style="    margin-left: 10px; margin-right: 10px;" class="porquehacemos">Porque lo hacemos</a>
                    <a href="#" class="quequeremos">Que queremos</a>
                </div>
            <div class="caja-content">
                <div class="quehacemos-content" style="position:absolute;">
                    <p><?php echo e(get_field('que_hacemos_nosotros', 'option')); ?></p>
                </div>
                <div class="porquehacemos-content" style="position:absolute;">
                    <p><?php echo e(get_field('porque_lo_hacemos_nosotros', 'option')); ?></p>
                </div>
                <div class="quequeremos-content" style="position:absolute;">
                    <p><?php echo e(get_field('que_queremos_nosotros', 'option')); ?></p>
                </div>
                
            </div>
            <div class="boton-div-2">
            <?php ($boton = get_field('boton_nosotros', 'options')); ?>
                <a class="boton-3" href="<?php echo e($boton['url']); ?>"><?php echo e($boton['title']); ?></a>
        </div>
        </div>
            <div class="img column">
                <img class="img-1" src="<?php echo the_field('imagen_nosotros', 'options'); ?>">
        </div>
    </div>
</div>