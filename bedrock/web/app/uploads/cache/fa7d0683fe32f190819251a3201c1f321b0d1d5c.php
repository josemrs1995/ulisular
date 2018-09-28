
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