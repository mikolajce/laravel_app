<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?= $head ?? 'no head set' ?>
  </head>
  <body>
    <? if(!isset($content)) foreach ($posts as $content) : ?>
      <article>
        <?= $content ?>
      </article>
    <? endforeach; ?>
    <article>
      <a href="/">Home</a>
    </article>
  </body>
</html>
