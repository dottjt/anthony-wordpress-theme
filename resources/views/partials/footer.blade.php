<footer class="footer__container">
  <div class="container">
    <div class="footer__left">
      <a class="footer__title" href="{{ home_url('/') }}">@php(bloginfo('name', 'display'))</a>
      <img src="" />
    </div>

    <div class="footer__right">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </div>

    <!-- @php(dynamic_sidebar('sidebar-footer')) -->

  </div>
</footer>
