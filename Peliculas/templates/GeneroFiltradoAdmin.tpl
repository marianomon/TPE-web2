{include file="HeaderAdmin.tpl"}

<div class="container-fluid contenedor FondoGrisOscuro">
  {foreach from=$GeneroSeleccionado item=GeneroSelec}
    <h1 class="LetrasBlancas">{$GeneroSelec['nombre']}</h1>
  {/foreach}
  <div class="row justify-content-md-center">
    {foreach from=$Peliculas item=pelicula}
          <div class="col-2 RecuadroPelicula">
            <a href="borrar/{$pelicula['id_pelicula']}">
              Borrar
            </a>
            <a class="TituloPelicula" href="{$root}/PeliculaSeleccionadaAdmin/{$pelicula['id_pelicula']}">
              <img class="imagendepelicula" src="../imagenes/{$pelicula['id_pelicula']}.jpg" alt="">
              {$pelicula['nombre']}
            </a>
          </div>
    {/foreach}
  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>