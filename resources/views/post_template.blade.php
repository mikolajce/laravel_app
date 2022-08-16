<x-template>
<x-slot name="body">

<h1>{{ $content->title }}</h1>
<h2>Autorstwa <a href="/authors/{{ $content->user->name }}">{{ $content->user->name }}</a></h2>
<h2>w kategorii <a href="/categories/{{ $content->category->slug }}">
  {{ $content->category->name }}
</a></h2>
<h2>
  {{ $content->excerpt }}
</h2>
<article>
  {{ $content->body }}
</article>
<p><a href="/">
  Home
</a></p>

</x-slot>
</x-template>
