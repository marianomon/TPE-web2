<?php
/* Smarty version 3.1.33, created on 2018-09-24 21:58:39
  from 'C:\xampp\htdocs\proyectos\PDO\Tareas\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ba941ef058cc4_57150048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eada15c1ade49a96567c0da26fb486af7a0bf76a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\PDO\\Tareas\\templates\\home.tpl',
      1 => 1537819118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba941ef058cc4_57150048 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">MisPelis</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Estrenos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Género
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Acción</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Drama</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Terror</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Sobre MisPelis</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LogIn</button>
    </form>
  </div>
</nav>
<div class="container">
  <?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>

  <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Peliculas']->value, 'pelicula');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
?>
          <div class="col-3"> <?php echo $_smarty_tpl->tpl_vars['pelicula']->value['nombre'];?>
 ---- <?php echo $_smarty_tpl->tpl_vars['pelicula']->value['sinopsis'];?>
 ---- <?php echo $_smarty_tpl->tpl_vars['pelicula']->value['actores'];?>
 </div>;
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
