<?php

require('libs/Smarty.class.php');
class PeliculasView
{
  private $Smarty;
  function __construct(){
    $this->Smarty = new Smarty();

  }

  function Mostrar($Titulo, $Peliculas, $Generos){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Peliculas',$Peliculas);
    $smarty->assign('Generos',$Generos);
    $smarty->display('templates/home.tpl');

  }

  function PaginaTerror($Titulo, $Peliculas, $Generos){
    $smarty = new Smarty();
    $smarty->assign('Peliculas',$Peliculas);
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Generos',$Generos);
    $smarty->display('templates/PagTerror.tpl');
  }
}
  ?>
