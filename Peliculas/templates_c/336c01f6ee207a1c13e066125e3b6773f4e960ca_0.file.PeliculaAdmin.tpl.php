<?php
/* Smarty version 3.1.33, created on 2018-10-13 01:09:57
  from 'C:\xampp\htdocs\proyectos\PDO\Peliculas\templates\PeliculaAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc129c565e934_84752927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '336c01f6ee207a1c13e066125e3b6773f4e960ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\PDO\\Peliculas\\templates\\PeliculaAdmin.tpl',
      1 => 1539385790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:HeaderAdmin.tpl' => 1,
  ),
),false)) {
function content_5bc129c565e934_84752927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:HeaderAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="Espaciado FondoGrisOscuro">

</div>
<div class="container-fluid contenedor FondoGrisOscuro">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Peliculas']->value, 'pelicula');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
?>
  <div class="row justify-content-md-center">
        <div class="col-2 padding15px fondoGrisClaro">
          <h1 class="NombrePelicula"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['nombre'];?>
</h1>
          <img class="imagendepelicula" src="../imagenes/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['nombre'];?>
.jpg" alt="">
        </div>
        <div class="col-5">
          <form class="fondoGrisClaro padding15px" method="post" action="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/ActualizarPelicula/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
 " id="formsinopsis">

            <div class="form-group">
              <label class="LetrasBlancas letra30px">Sinopsis</label>
              <textarea class="TextAreaPelicula LetrasBlancas" cols="90" rows="13" form="formsinopsis" id="Editado" name="Editado"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['sinopsis'];?>
</textarea>
              <!-- <input type="textarea" class="form-control formsinopsis" id="Editado" name="Editado" value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['sinopsis'];?>
"> -->
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
        <div class="Espaciado FondoGrisOscuro">

        </div>
        <div class="col-7 CuadroIframe fondoGrisClaro">
          <?php echo $_smarty_tpl->tpl_vars['pelicula']->value['iFrame'];?>

        </div>
  </div>
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
