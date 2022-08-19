<x-main>
<x-slot name="body">

<x-intro/>

@if (!(request('search') || request('category')))

  @if ($content->count())
    @if (!request('page'))
      <x-featured :content="$content->random()"/>
    @endif
    <section>
      <div class="mini-posts">
        <?php foreach ($content as $a) : ?>
          <x-post :content="$a"/>
        <?php endforeach; ?>
      </div>
    </section>
  @else
    <h1>Nie ma tu jeszcze nic ciekawego... pracuję nad tym.</h1>
    <p>Sprawdź później, czy coś się nie pojawiło!</p>
  @endif

@else
  @if ($content->count())
    @if (request('category'))
      <h1>Wpisy w kategorii "{{ request('category') }}":</h1>
    @else
      <h1>Wyniki dla frazy "{{ request('search') }}":</h1>
    @endif
    <section>
      <div class="mini-posts">
        <?php foreach ($content as $a) : ?>
          <x-post :content="$a"/>
        <?php endforeach; ?>
      </div>
    </section>
  @else
    <h1>Brak wyników dla frazy "{{ request('search') }}"...</h1>
    <p>Na pewno dobrze wpisałeś?</p>
  @endif

@endif

<div class="pagination">
  {{ $content->links() }}
</div>

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

<section class="blurb" x-data="{ show: false }">
  <button @click="show = ! show">TEST</button>
  <div x-show="show">
    <h2>Przeglądaj kategorie</h2>
  </div>
</section>
@endif

</x-slot>
</x-main>
