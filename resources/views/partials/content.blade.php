<article @php(post_class())>

  <header>    
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    
    @include('partials/entry-meta')

  </header>

  <div class="content__thumbnail">
    @php(the_post_thumbnail())
  </div>
  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
