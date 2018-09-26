
<?php
global $post;
$thumbID = get_post_thumbnail_id( $post->ID );
$imgDestacada = wp_get_attachment_url( $thumbID );
?>
<div class="fondo" style="background:url('<?php echo e($imgDestacada); ?>'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
    <div class="portada">
        <h1><?php echo App::title(); ?></h1>
        <div class="raya"></div>
        <p><?php echo e(get_field('descripcion_header', 'option')); ?></p>
    </div>
    <img class="svg-interno" src="<?= App\asset_path('images/svg/vector-3-01.svg'); ?>" style="width:100%; height:auto; " >
</div>


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
<?php if(have_rows('beneficios_nosotros', 9)): ?>

<?php while(have_rows('beneficios_nosotros', 9)): ?><?php (the_row()); ?>
    <?php ( $titulo5 = get_sub_field('titulo_beneficios')); ?>
    <?php ( $sub5 = get_sub_field('subtitulo_beneficios')); ?>
    <?php ( $contenido5 = get_sub_field('contenido_beneficios')); ?>
<?php endwhile; ?>
<?php else: ?>      
<?php endif; ?>
<div class="seccion-1">
    <h1><?php echo e($titulo); ?></h1>
    <p><?php echo e($contenido); ?></p>
</div>
<div class="seccion-2 columns">
    <div class="column content-seccion2">
    <h1><?php echo e($titulo2); ?></h1>
    <p><?php echo e($contenido2); ?></p>
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
    <p><?php echo e($contenido3); ?></p>
    </div>
    
</div>
<div class="seccion-2 columns">  
        <div class="column content-seccion2">
        <h1><?php echo e($titulo4); ?></h1>
        <p><?php echo e($contenido4); ?></p>
        </div>
        <div class="img column">
                <img class="img-1" src="<?php echo e($imagen4); ?>">
        </div>
        
</div>
<div class="seccion-4">
    <h1><?php echo e($titulo5); ?></h1>
    <div class="columns">
    <div class="content-seccion4 column">
        <h2><?php echo e($sub5); ?></h2>
        <p><?php echo e($contenido5); ?></p>
    </div>
    <div class="numero-beneficios column">

    </div>
    </div>
</div>