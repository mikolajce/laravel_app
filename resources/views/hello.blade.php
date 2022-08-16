<x-template>
<x-slot name="body">

<div>
  <h1>Hello World!</h1>
  <article>
    <h2>
      Projekt strony internetowej zaprojektowany w oparciu o framework Laravel w ramach praktyki zawodowej w sierpniu 2022. Dokumentację projektu z historią commitów można znaleźć na <a href="https://www.github.com/mikolajce/praktyka_2022">moim GitHubie</a>.
    </h2>
    <p>
      Rzeczy <strong>działające</strong>:<br>
      + szablonowanie Blade z dziedziczeniem<br>
      + CSS na poziomie gimnazjum (do poprawy w przyszłości)<br>
      + routing do podstron z deklaratywnym kodem<br>
      + czerpanie informacji z bazy danych, bez możliwości modyfikacji z poziomu strony<br>
      + zautomatyzowana produkcja funkcjonalnych postów za pomocą fabryk<br>
    </p>
    <p>
      Rzeczy <strong>do implementacji</strong>:<br>
      - <strong>logowanie oraz rejestracja</strong><br>
      - nieskończenie wiele rzeczy<br>
    </p>
  </article>
</div>
<div id="login" class="">
  <h2><a href="/login">Zaloguj</a></h2>
</div>
<div>
  <?php foreach ($content as $a) : ?>
    <br>
    <article>
      <h2>
        <a href="/posts/{{ $a->slug }}">
          {{ $a->title; }}
        </a>
      </h2>
      <p>
        Autorstwa
        <a href="/authors/{{ $a->user->username }}">
          {{ $a->user->name }}
        </a>
        w kategorii
        <a href="/categories/{{ $a->category->slug }}">
          {{ $a->category->name }}
        </a>
      </p>
      <p>
        {{ $a->excerpt }}
      </p>
    </article>
  <?php endforeach; ?>
</div>
@if (env('APP_DEBUG'))
  <div class="debug">
    <h2>Strefa dewelopera</h2><br>
    <p><a href="/post_template">LINK DO TEMPLATKI</a></p>
    <p><a href="/debug">DEBUG !</a></p>
  </div>
@endif

</x-slot>
</x-template>
