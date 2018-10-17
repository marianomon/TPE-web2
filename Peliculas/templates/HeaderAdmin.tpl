<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="http://localhost/proyectos/PDO/Peliculas/css/Style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home">MisPelis</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href={$root}/admin>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{$root}/estrenos">Estrenos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Género
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          {foreach from=$Generos item=genero}
            <a class="dropdown-item" href="{$root}/generoAdmin/{$genero['id_genero']}"> {$genero['nombre']}</a>
            <div class="dropdown-divider"></div>

          {/foreach}
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Sobre MisPelis</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{$root}/FormularioAgregarPelicula">Agregar Pelicula</a>
      </li>
    </ul>
      <a type="button" href={$root}/LogOut class="btn btn-primary nav-link">LogOut</a>
  </div>
</nav>
