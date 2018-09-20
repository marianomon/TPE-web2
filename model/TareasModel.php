<?php
/**
 *
 */
class TareasModel
{

  function __construct()
  {
    // code...
  }
  private function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=db_tareas;charset=utf8'
    , 'root', '');
  }

  function GetTareas(){
    $db = Connect();
    $sentencia = $db->prepare( "select * from tarea");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function BorrarTarea($id_tarea){
    $db = Connect();
    $sentencia = $db->prepare( "delete from tarea where id=?");
    $sentencia->execute(array($id_tarea));
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function CompletarTarea($id_tarea){
    $db = Connect();
    $sentencia = $db->prepare( "update tarea set completada=1 where id=?");
    $sentencia->execute(array($id_tarea));
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
}


 ?>
