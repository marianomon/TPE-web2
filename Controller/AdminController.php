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
    $this->Titulo = "Bienvenido Administrador!!";
    $this->model = new PelisModel();
  }

  function PelisAdmin(){
      $Peliculas = $this->model->GetPeliculas();
      $Generos = $this->model->GetGeneros();
      $this->view->MostrarAdmin($this->Titulo, $Peliculas, $Generos);
  }

  function MostrarPeliculaAdmin($param){
    $Peliculas = $this->model->MostrarPeliculaAdmin($param);
    $Generos = $this->model->GetGeneros();
    $this->view->MostrarPeliculaAdmin($this->Titulo, $Peliculas, $Generos);
  }

  function GenerarGeneroAdmin($PARAMS){
    $Peliculas = $this->model->GetPeliculasTerror($PARAMS);
    $Generos = $this->model->GetGeneros();
    $GeneroSeleccionado = $this->model->GetGeneroSeleccionado($PARAMS);
    $this->view->GeneroFiltradoAdmin($this->Titulo, $Peliculas, $Generos, $GeneroSeleccionado);
  }

  function BorrarPelicula($param){
    $this->model->BorrarPelicula($param[0]);
  }

  function ActualizarPelicula($parampeli, $paramgenero){
    $nombre = $_POST["EditadoNombre"];
    $sinopsis = $_POST["EditadoSinopsis"];
    $actores = $_POST["EditadoActores"];
    $genero = $_POST["EditadoGenero"];
    $iFrame = $_POST["EditadoiFrame"];
    $this->model->ActualizarMovie($parampeli, $genero, $nombre, $sinopsis, $actores, $iFrame);

  }

  function Logout(){
    session_start();
    session_destroy();
    header(HOME);
  }

  function FormularioAgregarPelicula(){
    $Generos = $this->model->GetGeneros();
    $this->view->MostrarFormularioAgregarPelicula($this->Titulo, $Generos);
  }

  function AgregarPelicula(){
    $nombre = $_POST["nombre"];
    $genero = $_POST["genero"];
    $sinopsis = $_POST["sinopsis"];
    $estreno = $_POST["EstrenoCheck"];
    $actores = $_POST["actores"];
    $iFrame = $_POST["iFrame"];

    $this->model->AgregarPeliculamodel($genero,$nombre,$sinopsis,$actores,$estreno,$iFrame);
  }

}



 ?>
