<?php
/* Smarty version 3.1.33, created on 2018-09-25 03:34:33
  from 'C:\xampp\htdocs\proyectos\PDO\Tareas\templates\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ba990a9c26f18_12056657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46d1aacf32ea86d56c4e77ca58e13ec7cfc4c6f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\PDO\\Tareas\\templates\\Header.tpl',
      1 => 1537839271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba990a9c26f18_12056657 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
    <base href="">
    <link rel="stylesheet" type"text/css" href="../CSS/Estilos.css">
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
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
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
            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['genero']->value['nombre'];?>
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
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LogIn</button>
    </form>
  </div>
  </nav>
<?php }
}
