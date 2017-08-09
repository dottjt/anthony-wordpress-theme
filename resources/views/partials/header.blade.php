<header class="banner__container">
  <div class="container">
  <img src="app/themes/sage-9.0.0-beta.3/uploads/2017/08/header.jpg" />
   

  <div class="banner__card">
    <div class="banner__card__titles">
       <h1><a class="banner__card__main__title" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a></h1>
       <div class="banner__card__line"></div>
       <h2 class="banner__card__secondary__title">{{ get_bloginfo('tagline', 'display') }}</h2>
       <img class="banner__card__logo" src="app/uploads/2017/08/logo.png"/>
    </div>

   <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div> <!-- banner__card  -->

  </div>
</header>
