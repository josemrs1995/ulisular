<footer class="content-info">
  <img class="svg-footer" src="<?= App\asset_path('images/svg/vector-02r.svg'); ?>" style="width:100%; height:auto; " >
  <div class="content-footer columns">
    <div class="menu-footer column is-3">
      <img class="logo" src="<?= App\asset_path('images/logo-01.png'); ?>" style="width:100px; height:auto; " >
      <?php echo e(wp_nav_menu(array('menu' => 'menu_footer'))); ?>

      <div class="contactanos">
        <p class="p-contactanos">Contactanos</p>
        <div class="img-footer">
          <a href=""><img src="<?= App\asset_path('images/icon-youtube.png'); ?>"></a>
          <a href=""><img src="<?= App\asset_path('images/icon-linkedin.png'); ?>"></a>
          <a href=""><img src="<?= App\asset_path('images/icon-facebook.png'); ?>"></a>
          <a href=""><img src="<?= App\asset_path('images/icon-instagram.png'); ?>"></a>
          <a href=""><img src="<?= App\asset_path('images/icon-twitter.png'); ?>"></a>
        </div>
        <p class="p-contactanos-reserved"> COPYRIGHT - © 2018 ULISULARTOURS.COM</p>
        <p class="p-contactanos-reserved"> ALL RIGHTS RESERVED</p>
      </div>
    </div>
    <div class="contactanos-correo column is-7">
        <h1>PÓNGASE EN CONTACTO CON NOSOTROS.</h1>
        <form action="" method="POST" class="formulario">
          <input type="text" id="nombre" name="nombre" placeholder="Nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'">
          <input type="email" id="correo" name="correo" placeholder="E-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'">
          <textarea name="mensaje" id="mensaje" placeholder="su mensaje" onfocus="this.placeholder = ''" onblur="this.placeholder = 'su mensaje'"></textarea>
          <input class="boton-footer" id="submitemail" type="submit" value="enviar">
        </form>
    </div>
  </div>
</footer>
