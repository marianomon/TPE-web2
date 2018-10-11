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
        <a class="nav-link" href="http://localhost/proyectos/PDO/Peliculas/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Estrenos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Género
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          {foreach from=$Generos item=genero}
            <a class="dropdown-item" href="genero/{$genero['id_genero']}"> {$genero['nombre']}</a>
            <div class="dropdown-divider"></div>

          {/foreach}
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Sobre MisPelis</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AgregarPelicula">Agregar Pelicula</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="EliminarPelicula">Eliminar Pelicula</a>
      </li>
    </ul>
      <a type="button" href="LogOut" class="btn btn-success nav-link">LogOut</a>
  </div>
</nav>
<div class="container-fluid contenedor">
  {foreach from=$Peliculas item=pelicula}
  <div class="row">
        <div class="col-3 fotopelicula">
          <h1 class="NombrePelicula">{$pelicula['nombre']}</h1>
          <img src="../imagenes/{$pelicula['nombre']}.jpg" width="250px" alt="">
        </div>
        <div class="col-5 Sinopsis">
          <form method="post" action="{$root}/ActualizarPelicula/{$pelicula['id_pelicula']} " id="formsinopsis">

            <div class="form-group">
              <label for="exampleInputPassword1">Sinopsis</label>
              <textarea cols="100" rows="15" form="formsinopsis" id="Editado" name="Editado"> {$pelicula['sinopsis']} </textarea>
              <!-- <input type="textarea" class="form-control formsinopsis" id="Editado" name="Editado" value="{$pelicula['sinopsis']}"> -->
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>

        </div>
  </div>
  {/foreach}
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>