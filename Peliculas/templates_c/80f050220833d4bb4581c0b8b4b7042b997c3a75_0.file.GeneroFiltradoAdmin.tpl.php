<?php
/* Smarty version 3.1.33, created on 2018-10-16 23:47:32
  from 'C:\xampp\htdocs\proyectos\PDO\Peliculas\templates\GeneroFiltradoAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc65c74df5ff6_86248766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80f050220833d4bb4581c0b8b4b7042b997c3a75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\PDO\\Peliculas\\templates\\GeneroFiltradoAdmin.tpl',
      1 => 1539726451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:HeaderAdmin.tpl' => 1,
  ),
),false)) {
function content_5bc65c74df5ff6_86248766 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:HeaderAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid contenedor FondoGrisOscuro">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GeneroSeleccionado']->value, 'GeneroSelec');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['GeneroSelec']->value) {
?>
    <h1 class="LetrasBlancas"><?php echo $_smarty_tpl->tpl_vars['GeneroSelec']->value['nombre'];?>
</h1>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <div class="row justify-content-md-center">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Peliculas']->value, 'pelicula');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
?>
          <div class="col-2 RecuadroPelicula">
            <a href="borrar/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
">
              Borrar
            </a>
            <a class="TituloPelicula" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/PeliculaSeleccionadaAdmin/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
">
              <img class="imagendepelicula" src="../imagenes/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
.jpg" alt="">
              <?php echo $_smarty_tpl->tpl_vars['pelicula']->value['nombre'];?>

            </a>
          </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
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
