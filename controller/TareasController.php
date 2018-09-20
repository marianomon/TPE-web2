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

  function BorrarTarea($id_tarea){
    $this->model->BorrarTarea($id_tarea);
  }

  function CompletarTarea($id_tarea){
  $this->model->CompletarTarea($id_tarea);
  }
}

 ?>
