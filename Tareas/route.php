<?php
 require_once "index.php";
 require_once "tareas.php";

 if ($_GET['action'] == '') {
  home();
}else {
  if ($_GET['action'] == 'agregar') {
   InsertTarea();
 }
}
  ?>
