<?php
require_once "../view/PeliculasView.php";
require_once "../model/PelisModel.php";

class PelisController
{
  private $view;
  private $model;
  private $Titulo;
  function __construct()
  {
    $this->view = new PeliculasView();
    $this->Titulo = "Lista de Tareas controlador 1";
    $this->model = new PelisModel();
  }

  function Home(){
    $Peliculas = $this->model->GetPeliculas();
    $Generos = $this->model->GetGeneros();
    $this->view->Mostrar($this->Titulo, $Peliculas, $Generos);
}

  function GeneroTerror(){
    $NumeroGenero = 6;
    $Peliculas = $this->model->GetPeliculasTerror($NumeroGenero);
    $Generos = $this->model->GetGeneros();
    $this->view->PaginaTerror($this->Titulo, $Peliculas, $Generos);
  }
  function GeneroDrama(){
    $NumeroGenero = 5;
    $Peliculas = $this->model->GetPeliculasTerror($NumeroGenero);
    $Generos = $this->model->GetGeneros();
    $this->view->PaginaTerror($this->Titulo, $Peliculas, $Generos);
  }
  function GeneroComedia(){
    $NumeroGenero = 7;
    $Peliculas = $this->model->GetPeliculasTerror($NumeroGenero);
    $Generos = $this->model->GetGeneros();
    $this->view->PaginaTerror($this->Titulo, $Peliculas, $Generos);
  }

  function GeneroAccion(){
    $NumeroGenero = 1;
    $Peliculas = $this->model->GetPeliculasTerror($NumeroGenero);
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
