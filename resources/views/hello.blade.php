<x-main>
<x-slot name="body">

  <section id="intro">
    <header>
      <img src="/resources/images/logo.jpg" alt="">
      <h2>Hello World!</h2>
      <p>Projekt realizowany w ramach praktyki zawodowej</p>
       Rzeczy <strong>działające</strong>:<br>
       + szablonowanie podstron w oparciu o silnik Blade<br>
       + rozwinięty CSS na podstawie darmowego szablonu <a href="https://www.html5up.net">html5up</a><br>
       + routing do podstron z deklaratywnym kodem<br>
       + czerpanie informacji z bazy danych, bez możliwości modyfikacji z poziomu strony<br>
       + zautomatyzowana produkcja funkcjonalnych postów za pomocą fabryk<br>
       <br>
       Rzeczy <strong>do implementacji</strong>:<br>
       - <strong>logowanie oraz rejestracja</strong><br>
       - nieskończenie wiele rzeczy<br>
    </header>
  </section>

@if ($content->count())
  <x-featured :content="$content[0]"/>
  <section>
    <div class="mini-posts">
      <?php $i=0; foreach ($content->skip(1) as $a) : ?>
        <x-post :content="$a"/>
        <?php if($i++>2) break; endforeach; ?>
    </div>
  </section>
@endif

{{-- playground, remove postprod --}}
@if (!env('APP_DEBUG'))
<section class="blurb">
  <h2>Strefa dewelopera</h2><br>
  <article class="">

  </article>
  <p>Tego miało nie być widać...</p>
  <ul class="actions">
    <li><a href="/post_template" class="button">LINK DO TEMPLATKI</a></li>
    <li><a href="/debug" class="button">DEBUG !</a></li>
  </ul>
</section>
@endif

</x-slot>
</x-main>
