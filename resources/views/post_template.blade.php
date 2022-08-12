@extends ('temp')

@section ('body')

<h1>{{ $content->title }}</h1>
<h2>{{ $content->excerpt }}</h2>
<article>
  {{ $content->body }}
</article>
<p><a href="/">Home</a></p>

@endsection
