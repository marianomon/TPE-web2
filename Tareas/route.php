<?php
 require_once "index.php";
 require_once "tareas.php";
 require_once "../Controller/TareasController.php";

$controller = new TareasController();
$partesURL = explode('/', $_GET['action']);

 if ($partesURL[0] == '') {
  $controller->Home();
}else {
  if ($partesURL[0] == 'agregar') {
   InsertTarea();
 }elseif ($partesURL[0] == 'borrar') {
   $controller->BorrarTarea($partesURL[1]);
 }elseif ($partesURL[0] == 'completada') {
   $controller->CompletarTarea($partesURL[1]);
 }
}
  ?>
