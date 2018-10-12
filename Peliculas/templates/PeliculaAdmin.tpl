{include file="HeaderAdmin.tpl"}

<div class="container-fluid contenedor FondoGrisOscuro">
  {foreach from=$Peliculas item=pelicula}
  <div class="row justify-content-md-center">
        <div class="col-2 padding15px fondoGrisClaro">
          <h1 class="NombrePelicula">{$pelicula['nombre']}</h1>
          <img class="imagendepelicula" src="../imagenes/{$pelicula['nombre']}.jpg" alt="">
        </div>
        <div class="col-5">
          <form class="fondoGrisClaro padding15px" method="post" action="{$root}/ActualizarPelicula/{$pelicula['id_pelicula']} " id="formsinopsis">

            <div class="form-group">
              <label class="LetrasBlancas letra30px">Sinopsis</label>
              <textarea class="TextAreaPelicula LetrasBlancas" cols="90" rows="13" form="formsinopsis" id="Editado" name="Editado">{$pelicula['sinopsis']}</textarea>
              <!-- <input type="textarea" class="form-control formsinopsis" id="Editado" name="Editado" value="{$pelicula['sinopsis']}"> -->
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
        <div class="Espaciado FondoGrisOscuro">

        </div>
        <div class="col-7 CuadroIframe fondoGrisClaro">
          {$pelicula['iFrame']}
        </div>
  </div>
  {/foreach}
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
