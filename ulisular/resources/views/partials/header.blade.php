@include('partials.mobilemenu')
<header class="banner">
    <nav class="nav-primary">
      <a href="{{home_url('/')}}"><img class="logo" src="@asset('images/logo-02.png')"></a>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
</header>
<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
  </a>
