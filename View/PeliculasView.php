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

  function GeneroFiltradoAdmin($Titulo, $Peliculas, $Generos, $GeneroSeleccionado){
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->assign('GeneroSeleccionado',$GeneroSeleccionado);
    $this->Smarty->display('templates/GeneroFiltradoAdmin.tpl');
  }


  function MostrarFormularioAgregarPelicula($Titulo, $Generos){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/AgregarPelicula.tpl');
  }

  function MostrarAdmin($Titulo, $Peliculas, $Generos){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/homeadmin.tpl');
  }

  function MostrarPelicula($Titulo, $Peliculas, $Generos){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/Pelicula.tpl');
  }

  function MostrarPeliculaAdmin($Titulo, $Peliculas, $Generos){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/PeliculaAdmin.tpl');
  }

  function PaginaTerror($Titulo, $Peliculas, $Generos, $GeneroSeleccionado){
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->assign('GeneroSeleccionado',$GeneroSeleccionado);
    $this->Smarty->display('templates/PagTerror.tpl');
  }

  function MostrarEstrenosView($Titulo, $PeliculasEstrenos, $Generos){
    $this->Smarty->assign('PeliculasEstrenos',$PeliculasEstrenos);
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/Estrenos.tpl');
  }
}
  ?>
