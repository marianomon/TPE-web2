{include file="HeaderAdmin.tpl"}

<div class="container-fluid contenedor FondoGrisOscuro">
  {foreach from=$Peliculas item=pelicula}
    <form method="post" action="{$root}/ActualizarPelicula/{$pelicula['id_pelicula']}" class="FondoGrisOscuro">
      <div class="row justify-content-md-center">
      <div class="form-group col-2 padding15px margin-1 fondoGrisClaro">
        <img class="imagendepelicula padding-bottom" src="../imagenes/{$pelicula['id_pelicula']}.jpg" alt="">
        <textarea class="form-control" aria-label="Nombre" name="EditadoNombre" placeholder="Insertar Nombre de la Pelicula...">{$pelicula['nombre']}</textarea>
        <!-- <input type="input" class="form-control" id="EditadoNombre" name="EditadoNombre" aria-describedby="emailHelp" placeholder="Insertar Nombre de la Pelicula..."> -->
      </div>

      <div class="col-5 fondoGrisClaro">

        <div class="input-group  padding-top height-sinopsis">
          <div class="input-group-prepend">
            <span class="input-group-text">Sinopsis</span>
          </div>
          <textarea class="form-control" aria-label="Sinopsis" name="EditadoSinopsis" placeholder="Inserte Sinopsis">{$pelicula['sinopsis']}</textarea>
        </div>

        <div class="input-group mb-3 padding-top">
          <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Actores</span>
          </div>
            <textarea class="form-control" aria-label="actores" name="EditadoActores" placeholder="Coloque aquí el iFrame">{$pelicula['actores']}</textarea>
            <!-- <input type="text" name="EditadoActores" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Inserte los Actores"> -->
          </div>
      </div>

      <div class="col-7 fondoGrisClaro padding-bottom">

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Options</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" name="EditadoGenero">
            <option selected>Elegir Genero...</option>
            {foreach from=$Generos item=genero}
            <option value="{$genero['id_genero']}">{$genero['nombre']}</option>
            {/foreach}
          </select>
        </div>

        {$pelicula['iFrame']}

        <div class="input-group padding15px">
          <div class="input-group-prepend">
            <span class="input-group-text">iFrame</span>
          </div>
          <textarea class="form-control" aria-label="iFrame" name="EditadoiFrame" placeholder="Coloque aquí el iFrame">{$pelicula['iFrame']}</textarea>
        </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
  </form>
  {/foreach}
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
