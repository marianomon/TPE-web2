<?php
function Connect(){
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

function InsertTarea(){
  $titulo = $_POST["TituloForm"];
  $descripcion = $_POST["DescripcionForm"];
  if (isset($_POST["CompletadaForm"])) {
    $completada = 1;
  }else {
    $completada = 0;
  }

  $db = Connect();
  $sentencia = $db->prepare("INSERT INTO tarea(titulo, descripcion, completada) VALUES(?,?,?)");
  $sentencia->execute(array($titulo,$descripcion,$completada));
  header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
}

echo '<base href="http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]).'/" target="_blank">';
 ?>
