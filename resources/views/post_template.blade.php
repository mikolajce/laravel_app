@extends ('temp')

@section ('body')

<h1><?= $content->title; ?></h1>
<p><?= $content->excerpt ?></p>
<?= $content->body; ?>
<p><a href="/">Home</a></p>

@endsection
