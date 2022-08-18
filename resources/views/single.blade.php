<x-main>
<x-slot name="body">

<article class="post">
  <header>
    <div class="title">
      <h2>{{ $content->title }}</a></h2>
      <p>{{ $content->excerpt }}</p>
    </div>
    <div class="meta">
      <time class="published">{{ $content->created_at->diffForHumans() }}</time>
      <p><a href="/authors/{{ $content->user->username }}">
        {{ $content->user->name}}
      </a></p>
    </div>
  </header>
  <span class="image featured"><img src="resources/images/pic01.jpg" alt="" /></span>
  <p>{{ $content->body }}</p>
  <footer>
    <ul class="stats">
      <li><a href="/?category={{ $content->category->slug }}">{{ $content->category->name }}</a></li>
      <li><a href="#" class="icon solid fa-heart">?</a></li>
      <li><a href="#" class="icon solid fa-comment">?</a></li>
    </ul>
  </footer>
</article>

</x-slot>
</x-main>
