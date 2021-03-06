<?php echo $__env->make('partials.mobilemenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<header class="banner">
    <nav class="nav-primary">
      <a href="<?php echo e(home_url('/')); ?>"><img class="logo" src="<?= App\asset_path('images/logo-02.png'); ?>"></a>
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
    </nav>
</header>
<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
  </a>
