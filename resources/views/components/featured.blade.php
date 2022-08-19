@props(['content'])

<article class="post">
  <header>
    <div class="title">
      <h1>Polecany artykuł</h1>
      <h2><a href="/posts/{{ $content->slug }}">
        {{ $content->title }}
      </a></h2>
      <p>{{ $content->excerpt }}</p>
    </div>
    <div class="meta">
      <time class="published">{{ $content->created_at->diffForHumans() }}</time>
      <p><a href="/authors/{{ $content->user->username }}">
        {{ $content->user->name}}
      </a></p>
    </div>
  </header>
  <a href="{{ $content->slug }}" class="image featured"><img src="../../resources/images/pic03.jpg" alt=""></a>
  <footer>
    <ul class="actions">
      <li><a href="/posts/{{ $content->slug }}" class="button large">
        Czytaj dalej</a>
      </li>
    </ul>
    <ul class="stats">
      <li><a href="/?category={{ $content->category->slug}}">
        {{ $content->category->name }}
      </a></li>
      <li><a href="#" class="icon solid fa-heart"></a>?</li>
    </ul>
  </footer>
</article>
