@extends ('temp')

@section ('body')

<div>
  <h1>Hello World!</h1>
  <article>
    <p>
      Projekt strony internetowej zaprojektowany w oparciu o framework Laravel w ramach praktyki zawodowej w sierpniu 2022. Dokumentację projektu z historią commitów można znaleźć na <a href="https://www.github.com/mikolajce/praktyka_2022">moim GitHubie</a>.
    </p>
    <p>
      Rzeczy <strong>działające</strong>:<br>
      + szablonowanie z dziedziczeniem<br>
      + routing do podstron z deklaratywnym kodem<br>
      + CSS na poziomie gimnazjum<br>
    </p>
    <p>
      Rzeczy <strong>do implementacji</strong>:<br>
      - <strong>logowanie oraz rejestracja</strong><br>
      - cała masa innych bzdetów<br>
    </p>
  </article>
</div>
<div id="login" class="">
  <h2><a href="/login">Zaloguj</a></h2>
</div>
<div>
  <?php foreach ($content as $element) : ?>
    <br>
    <article>
      <h2>
        <a href="/userposts/<?= $element->slug; ?>">
          <?= $element->title; ?>
        </a>
      </h2>
      <p><?= $element->excerpt; ?></p>
    </article>
  <?php endforeach; ?>
</div>
<div class="debug">
  <h2>Strefa deweloperska/testowa/debug/nie ruszać!</h2><br>
  <p><a href="/post_template">LINK DO TEMPLATKI</a></p>
  <p><a href="/debug">DEBUG !</a></p>
</div>

@endsection ('body')
