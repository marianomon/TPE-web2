<?php
/* Smarty version 3.1.33, created on 2018-10-11 23:30:45
  from 'C:\xampp\htdocs\proyectos\PDO\Peliculas\templates\PeliculaAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbfc1057874c5_77513417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '336c01f6ee207a1c13e066125e3b6773f4e960ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\PDO\\Peliculas\\templates\\PeliculaAdmin.tpl',
      1 => 1539293400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbfc1057874c5_77513417 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
            <a class="dropdown-item" href="genero/<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
"> <?php echo $_smarty_tpl->tpl_vars['genero']->value['nombre'];?>
</a>
            <div class="dropdown-divider"></div>

          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Peliculas']->value, 'pelicula');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
?>
  <div class="row">
        <div class="col-3 fotopelicula">
          <h1 class="NombrePelicula"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['nombre'];?>
</h1>
          <img src="../imagenes/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['nombre'];?>
.jpg" width="250px" alt="">
          <form method="put" action="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/ActualizarPelicula/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
">

            <div class="form-group">
              <label for="exampleInputPassword1">Sinopsis</label>
              <input type="text" class="form-control" id="Editado" name="Editado" value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['sinopsis'];?>
">

            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
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
