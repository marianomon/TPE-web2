<?php
/* Smarty version 3.1.33, created on 2018-10-17 00:20:42
  from 'C:\xampp\htdocs\proyectos\PDO\Peliculas\templates\PeliculaAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc6643a391eb5_29875284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '336c01f6ee207a1c13e066125e3b6773f4e960ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\PDO\\Peliculas\\templates\\PeliculaAdmin.tpl',
      1 => 1539728441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:HeaderAdmin.tpl' => 1,
  ),
),false)) {
function content_5bc6643a391eb5_29875284 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:HeaderAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid contenedor FondoGrisOscuro">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Peliculas']->value, 'pelicula');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
?>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/ActualizarPelicula/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
" class="FondoGrisOscuro">
      <div class="row justify-content-md-center">
      <div class="form-group col-2 padding15px margin-1 fondoGrisClaro">
        <img class="imagendepelicula padding-bottom" src="../imagenes/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
.jpg" alt="">
        <textarea class="form-control" aria-label="Nombre" name="EditadoNombre" placeholder="Insertar Nombre de la Pelicula..."><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['nombre'];?>
</textarea>
        <!-- <input type="input" class="form-control" id="EditadoNombre" name="EditadoNombre" aria-describedby="emailHelp" placeholder="Insertar Nombre de la Pelicula..."> -->
      </div>

      <div class="col-5 fondoGrisClaro">

        <div class="input-group  padding-top height-sinopsis">
          <div class="input-group-prepend">
            <span class="input-group-text">Sinopsis</span>
          </div>
          <textarea class="form-control" aria-label="Sinopsis" name="EditadoSinopsis" placeholder="Inserte Sinopsis"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['sinopsis'];?>
</textarea>
        </div>

        <div class="input-group mb-3 padding-top">
          <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Actores</span>
          </div>
            <textarea class="form-control" aria-label="actores" name="EditadoActores" placeholder="Coloque aquí el iFrame"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['actores'];?>
</textarea>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value['nombre'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        </div>

        <?php echo $_smarty_tpl->tpl_vars['pelicula']->value['iFrame'];?>


        <div class="input-group padding15px">
          <div class="input-group-prepend">
            <span class="input-group-text">iFrame</span>
          </div>
          <textarea class="form-control" aria-label="iFrame" name="EditadoiFrame" placeholder="Coloque aquí el iFrame"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['iFrame'];?>
</textarea>
        </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
  </form>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
