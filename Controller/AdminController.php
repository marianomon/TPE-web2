<?php
require_once "../view/PeliculasView.php";
require_once "../model/PelisModel.php";
require_once "SecuredController.php";


class AdminController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    parent::__construct();

    $this->view = new PeliculasView();
    $this->Titulo = "Bienvenido a MisPelis Administrador!!";
    $this->model = new PelisModel();
  }

  function PelisAdmin(){
      $Peliculas = $this->model->GetPeliculas();
      $Generos = $this->model->GetGeneros();
      $this->view->MostrarAdmin($this->Titulo, $Peliculas, $Generos);
  }

  function MostrarPeliculaAdmin($param){
    $Peliculas = $this->model->MostrarPeliculaAdmin($param[0]);
    $Generos = $this->model->GetGeneros();
    $this->view->MostrarPeliculaAdmin($this->Titulo, $Peliculas, $Generos);
  }

  function BorrarPelicula($param){
    $this->model->BorrarPelicula($param[0]);
  }

  function ActualizarPelicula($param){
    $sinopsis = $_POST["Editado"];
    $this->model->ActualizarMovie($param, $sinopsis);
  }

  function Logout(){
    session_start();
    session_destroy();
    header(HOME);
  }
}












 ?>
