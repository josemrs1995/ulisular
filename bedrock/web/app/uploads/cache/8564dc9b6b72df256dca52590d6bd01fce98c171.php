
<div class="fondo" style="background:url('<?php echo e(App::thumbnail()); ?>'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
    <div class="page-header">
        <div class="contenido-page-header">
          <h1 class="page-header-h1"><?php echo App::title(); ?></h1>
          <p class="page-header-p"><?php echo e(get_field('descripcion_header', 'option')); ?></p>
        </div>
        <img class="svg-interno" src="<?= App\asset_path('images/svg/vector-3-01.svg'); ?>" style="width:100%; height:auto; " >
        </div>
</div>