<?php

require('libs/Smarty.class.php');
class PeliculasView
{
  private $Smarty;
  function __construct(){
    $this->Smarty = new Smarty();
    $this->Smarty->assign('root', dirname($_SERVER["PHP_SELF"]));
  

  }

  function Mostrar($Titulo, $Peliculas, $Generos){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/home.tpl');

  }

  function MostrarAdmin($Titulo, $Peliculas, $Generos){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/homeadmin.tpl');
  }

  function MostrarPeliculaAdmin($Titulo, $Peliculas, $Generos){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/PeliculaAdmin.tpl');
  }

  function PaginaTerror($Titulo, $Peliculas, $Generos){
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/PagTerror.tpl');
  }
}
  ?>
