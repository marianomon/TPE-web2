<?php

require('libs/Smarty.class.php');
class PeliculasView
{
  function Mostrar($Titulo, $Peliculas){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Peliculas',$Peliculas);
    $smarty->display('templates/home.tpl');

  }
}
  ?>
