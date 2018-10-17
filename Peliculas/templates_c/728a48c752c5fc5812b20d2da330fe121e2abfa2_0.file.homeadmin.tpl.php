<?php
/* Smarty version 3.1.33, created on 2018-10-13 06:31:55
  from 'C:\xampp\htdocs\proyectos\PDO\Peliculas\templates\homeadmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc1753b9f4d18_16548608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '728a48c752c5fc5812b20d2da330fe121e2abfa2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\PDO\\Peliculas\\templates\\homeadmin.tpl',
      1 => 1539403984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:HeaderAdmin.tpl' => 1,
  ),
),false)) {
function content_5bc1753b9f4d18_16548608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:HeaderAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid contenedor FondoGrisOscuro">
  <h1 class="Titulo LetrasBlancas"><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
  <div class="row justify-content-md-center">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Peliculas']->value, 'pelicula');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
?>
          <div class="col-2 RecuadroPelicula TituloPelicula">
            <a href="borrar/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
">
              Borrar
            </a>
              <a class="TituloPelicula" href="PeliculaSeleccionadaAdmin/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
">
                <img class="imagendepelicula" src="imagenes/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
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
