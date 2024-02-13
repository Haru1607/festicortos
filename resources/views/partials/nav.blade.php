<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('home')}}">Festicortos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="{{route('libros.create')}}">Crear Libro <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('autores.create')}}">Crear Autor <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('cortos')}}">Lista de Cortos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('listado')}}">Lista de Libros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('autores.index')}}">Lista de Autores</a>
      </li>
    </ul>
  </div>
</nav>