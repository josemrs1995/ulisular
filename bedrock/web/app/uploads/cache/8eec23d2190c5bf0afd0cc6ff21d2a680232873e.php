<div class="menu-responsive">
    <div class="menu-container">
    <nav class="nav-mobile">
        <a href="<?php echo e(home_url('/')); ?>"><img class="img-menu" src="<?= App\asset_path('images/logo-02.png'); ?>"></a>
        <?php if(has_nav_menu('primary_navigation')): ?>
          <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

        <?php endif; ?>
    </nav>
    </div>
    
</div>