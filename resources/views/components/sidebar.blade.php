<!DOCTYPE html>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="en" dir="ltr">
  <x-meta-head/>
  <body>
    <div id="wrapper">
      <header id="header">
        <h1><a href="/">Praktyka 2022</a></h1>
        <nav class="links">
          <ul x-data="{ open: false }">
            <li><a href="#">???</a></li>
            <li><a href="#" @click="open = !open">Kategorie</a></li>
            {{-- variable not passed --}}
            {{-- <?php foreach($categories as $c) : ?>
              <li x-show="open" x-transition><a href="/?category={{ $c->slug }}">{{ $c->name }}</a></li>
            <?php endforeach; ?> --}}
            {{-- todo --}}
            <li x-show="open" x-transition><p><a href="/?category=personal">Personal</a></p></li>
            <li x-show="open" x-transition><p><a href="/?category=tests">Tests</a></p></li>
            <li><a href="/about">Autor</a></li>
          </ul>
        </nav>
        <nav class="main">
          <ul>
            <li class="search">
              <section>
                <form class="search" method="get" action="/">
                  <input type="text" name="search" placeholder="Szukaj" value="{{ request('search') }}" />
                </form>
              </section>
            </li>
            <li class="login">
              <a class="fa-bars" href="/login">Logowanie</a>
            </li>
          </ul>
        </nav>
      </header>

      <section id="menu">

      </section>

      <div id='main'>
        <x-sidebar-intro/>
      </div>

      <section id="sidebar">
        {{ $login }}
        <section id="footer">
          <x-meta-footer/>
        </section>
      </section>

    </div>
  </body>
</html>
