@extends ('temp')

@section ('body')

<form class="" action="/hello" method="post">
  <p>Wprowadź login:</p>
  <br>
  <input type="text" name="" value="" placeholder="siemanokolano">
  <br>
  <p>Wprowadź hasło:</p>
  <br>
  <input type="password" name="" value="" placeholder="pijemypiwo">
  <br>
  <!--<input type="submit" name="" value="Zaloguj">-->
  <p><a href="/">Zaloguj</a></p>
</form>

@endsection
