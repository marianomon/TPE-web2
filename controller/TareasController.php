<?php
require_once "../view/TareasView.php";
require_once "../model/TareasModel.php";

class TareasController
{
  private $view;
  private $model;
  private $Titulo;
  function __construct()
  {
    $this->view = new TareasView();
    $this->Titulo = "Lista de Tareas controlador 1";
    $this->model = new TareasModel();
  }

  function Home(){
    $Tareas = $this->model->GetTareas();
    $this->view->Mostrar($this->Titulo, $Tareas);
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

  function BorrarTarea($id_tarea){
    $this->model->BorrarTarea($id_tarea);
  }

  function CompletarTarea($id_tarea){
  $this->model->CompletarTarea($id_tarea);
  }
}

 ?>
