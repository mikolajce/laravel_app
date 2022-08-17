<x-main>
<x-slot name="body">

<section>
  <div class="mini-posts">
    <?php foreach ($content as $a) : ?>
      <x-post :content="$a"/>
    <?php endforeach; ?>
  </div>
</section>

</x-slot>
</x-main>
