
<?php if(have_rows('seccion1', 9)): ?>

<?php while(have_rows('seccion1', 9)): ?><?php (the_row()); ?>
    <?php ( $titulo = get_sub_field('titulo_sobre_nosotros')); ?>
    <?php ( $contenido = get_sub_field('descripcion_nosotros')); ?>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
<?php if(have_rows('seccion2', 9)): ?>

<?php while(have_rows('seccion2', 9)): ?><?php (the_row()); ?>
    <?php ( $titulo2 = get_sub_field('titulo')); ?>
    <?php ( $contenido2 = get_sub_field('contenido')); ?>
    <?php ( $imagen2 = get_sub_field('imagen')); ?>
<?php endwhile; ?>
<?php else: ?>      
<?php endif; ?>
<?php if(have_rows('seccion3', 9)): ?>

<?php while(have_rows('seccion3', 9)): ?><?php (the_row()); ?>
    <?php ( $titulo3 = get_sub_field('titulo')); ?>
    <?php ( $contenido3 = get_sub_field('contenido')); ?>
    <?php ( $imagen3 = get_sub_field('imagen')); ?>
<?php endwhile; ?>
<?php else: ?>      
<?php endif; ?>
<?php if(have_rows('seccion4', 9)): ?>

<?php while(have_rows('seccion4', 9)): ?><?php (the_row()); ?>
    <?php ( $titulo4 = get_sub_field('titulo')); ?>
    <?php ( $contenido4 = get_sub_field('contenido')); ?>
    <?php ( $imagen4 = get_sub_field('imagen')); ?>
<?php endwhile; ?>
<?php else: ?>      
<?php endif; ?>




<div class="seccion-1">
    <h5><?php echo e($titulo); ?></h5>
    <p><?php echo e($contenido); ?></p>
</div>
<div class="seccion-2 columns">
    <div class="column content-seccion2">
    <h1><?php echo e($titulo2); ?></h1>
    <p><?php echo $contenido2; ?></p>
    </div>
    
    <div class="img column">
        <img class="img-1" src="<?php echo e($imagen2); ?>">
    </div>  
</div>
<div class="seccion-3 columns">
    <div class="img column">
            <img class="img-1" src="<?php echo e($imagen3); ?>">
    </div>  
    <div class="column content-seccion3">
    <h1><?php echo e($titulo3); ?></h1>
    <p><?php echo $contenido3; ?></p>
    </div>
    
</div>
<div class="seccion-2 columns">  
        <div class="column content-seccion2">
        <h1><?php echo e($titulo4); ?></h1>
        <p><?php echo $contenido4; ?></p>
        </div>
        <div class="img column">
                <img class="img-1" src="<?php echo e($imagen4); ?>">
        </div>
        
</div>


<div class="seccion-4">
        <?php if(have_rows('beneficios_nosotros', 9)): ?>
        
        <?php while(have_rows('beneficios_nosotros', 9)): ?><?php (the_row()); ?>
        <div class="contain-beneficios columns is-multiline is-paddingless">
            <div class="column is-12">
                <h1 style="margin: 50px 0; min-width: 270px;"> <?php echo e(get_sub_field('titulo_beneficios')); ?> </h1>
            </div>
                <div class="content-seccion4 column is-4">
                    <h2><?php echo e(get_sub_field('subtitulo_beneficios')); ?></h2>
                    <p><?php echo e(get_sub_field('contenido_beneficios')); ?></p>
                </div>
                <div class="numero-beneficios column is-8">
                        <div class="contain-num-beneficios columns is-multiline" style="padding: 0 20px;">
                        <?php if(have_rows('numero_beneficios')): ?>
                        <?php while(have_rows('numero_beneficios')): ?><?php (the_row()); ?>
                            <div class="items-beneficios column is-4">
                                <img src="<?php echo e(get_sub_field('beneficios_img')); ?>">
                                <p><?php echo e(get_sub_field('titulo_imagen_beneficios')); ?></p>
                            </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                </div>
        <?php endwhile; ?>
        <?php else: ?>      
        <?php endif; ?>
    </div>
    <div class="boton-div-4">
        <a class="btn-beneficios" href="#">REGISTRATE</a>
    </div>
</div>