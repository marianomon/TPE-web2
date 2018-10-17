<?php
/* Smarty version 3.1.33, created on 2018-10-16 21:26:03
  from 'C:\xampp\htdocs\proyectos\PDO\Peliculas\templates\Pelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc63b4b7340a8_15181324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f07bd03cbf9e18103dce0d19ba2dd0b74c098694' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\PDO\\Peliculas\\templates\\Pelicula.tpl',
      1 => 1539716250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5bc63b4b7340a8_15181324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid contenedor FondoGrisOscuro">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Peliculas']->value, 'pelicula');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
?>
  <div class="row justify-content-md-center">
        <div class="col-2 padding15px fondoGrisClaro">
          <img class="imagendepelicula" src="../imagenes/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
.jpg" alt="">
          <h1 class="NombrePelicula LetrasBlancas"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['nombre'];?>
</h1>
        </div>

        <div class="col-5 LetrasBlancas padding15px fondoGrisClaro">
          <h2>Sinopsis</h2>
          <p class="LetrasMedianas"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['sinopsis'];?>
</p>
          <p class="LetrasChicas">Actores: <?php echo $_smarty_tpl->tpl_vars['pelicula']->value['actores'];?>
</p>
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
