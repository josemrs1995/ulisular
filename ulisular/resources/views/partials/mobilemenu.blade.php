<div class="menu-responsive">
    <div class="menu-container">
    <nav class="nav-mobile">
        <a href="{{home_url('/')}}"><img class="img-menu" src="@asset('images/logo-02.png')"></a>
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
    </nav>
    </div>
    
</div>