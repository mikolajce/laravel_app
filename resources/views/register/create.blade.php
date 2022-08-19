<x-sidebar>
  <x-slot name="login">
    <section id="intro">
      <form class="" action="/register" method="post">
        @csrf
        <h1>Jak Ci na imię?</h1>
        <input type="text" name="name" value="{{ old('name')}}" placeholder="Bonifacy Mącipała?"><br>
        @error('name')<p>{{ $message }}</p>@enderror
        <h1>Jak na Ciebie mówić?</h1>
        <input type="text" name="username" value="{{ old('username')}}" placeholder="zadymiarz3000"><br>
        @error('username')<p>{{ $message }}</p>@enderror
        <h1>Adres email:</h1>
        <input type="email" name="email" value="{{ old('email')}}" placeholder="kocham@zadymke.pl"><br>
        @error('email')<p>{{ $message }}</p>@enderror
        <h1>Twoje hasło:</h1>
        <input type="password" name="password" value="" placeholder="coś mocnego!"><br>
        @error('password')<p>{{ $message }}</p>@enderror
        {{-- <h1>Powtórz hasło:</h1>
        <input type="password" name="repeat" value="" placeholder="powtórka!"><br>
        @error('repeat')<p>{{ $message }}</p>@enderror --}}
        <input type="submit" name="create" value="Utwórz konto">
      </form>
      <br>
    </section>
  </x-slot>
</x-sidebar>
