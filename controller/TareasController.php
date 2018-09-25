<?php
require_once "../view/PeliculasView.php";
require_once "../model/TareasModel.php";

class TareasController
{
  private $view;
  private $model;
  private $Titulo;
  function __construct()
  {
    $this->view = new PeliculasView();
    $this->Titulo = "Lista de Tareas controlador 1";
    $this->model = new TareasModel();
  }

  function Home($dato){
    if ($dato == 1) {
      GeneroTerror();
    }else {

    $Peliculas = $this->model->GetPeliculas();
    $Generos = $this->model->GetGeneros();
    $this->view->Mostrar($this->Titulo, $Peliculas, $Generos);
  }
}

  function GeneroTerror(){
    $Peliculas = $this->model->GetPeliculasTerror();
    $Generos = $this->model->GetGeneros();
    $this->view->PaginaTerror($this->Titulo, $Peliculas, $Generos);
  }

  function GeneroDrama(){
    $Peliculas = $this->model->GetPeliculasDrama();
    $Generos = $this->model->GetGeneros();
    $this->view->PaginaTerror($this->Titulo, $Peliculas, $Generos);
  }

  function GeneroAccion(){
    $Peliculas = $this->model->GetPeliculasAccion();
    $Generos = $this->model->GetGeneros();
    $this->view->PaginaTerror($this->Titulo, $Peliculas, $Generos);
  }

  function GeneroComedia(){
    $Peliculas = $this->model->GetPeliculasComedia();
    $Generos = $this->model->GetGeneros();
    $this->view->PaginaTerror($this->Titulo, $Peliculas, $Generos);
  }

  function InsertTarea(){
    $titulo = $_POST["TituloForm"];
    $descripcion = $_POST["DescripcionForm"];
    if (isset($_POST["CompletadaForm"])) {
      $completada = 1;
    }else {
      $completada = 0;
    }
    $this->model->InsertTarea($titulo,$descripcion,$completada);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function BorrarTarea($param){
    $this->model->BorrarTarea($param[0]);
  }

  function CompletarTarea($param){
  $this->model->CompletarTarea($param[0]);
  }
}

 ?>
