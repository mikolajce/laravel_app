@if(Request::is('/') && !(request('search') || request('category')))
  <section id="intro">
    <header>
      <img src="/resources/images/logo.jpg" alt="">
      <h2>Hello World!</h2>
      <h3>Projekt realizowany w ramach praktyki zawodowej</h3>
      <p>&nbsp;</p>
      <p>Aktualny priorytet:</p>
      + wprowadzenie kontrolerów <br>
      + rozwinięcie szaty graficznej <br>
      + logowanie i rejestracja <br>
      <p>&nbsp;</p>
      <p>Więcej o projekcie przeczytasz <a href="/about">tutaj</a>!</p>
  </section>
  <br>
@endif
