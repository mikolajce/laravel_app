@props(['content'])

<article class="mini-post">
  <header>
    <h3><a href="/posts/{{ $content->slug }}">
      {{ $content->title }}
    </a></h3>
    <p><a href="/authors/{{ $content->user->username }}">
      {{ $content->user->name}}
    </a></p>
  </header>
  <a href="/posts/{{ $content->slug }}" class="image"><img src="resources/images/pic04.jpg" alt=""></a>
</article>
