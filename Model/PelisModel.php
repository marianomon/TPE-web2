<?php
/**
 *
 */
class PelisModel
{

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_generos;charset=utf8'
    , 'root', '');
  }

  function GetPeliculas(){
    $sentencia = $this->db->prepare( "select * from pelicula");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetPeliculasTerror($PARAMS  =  ''){
    $sentencia = $this->db->prepare( "select * from pelicula WHERE id_genero = ?");
    $sentencia->execute(array($PARAMS[0]));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }


  function GetGeneros(){
    $sentencia = $this->db->prepare( "select * from genero");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

   function InsertTarea($titulo,$descripcion,$completada){
     $sentencia = $this->db->prepare("INSERT INTO tarea(titulo, descripcion, completada) VALUES(?,?,?)");
     $sentencia->execute(array($titulo,$descripcion,$completada));
    }


  function BorrarTarea($id_tarea){
    $sentencia = $this->db->prepare( "delete from tarea where id=?");
    $sentencia->execute(array($id_tarea));
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function CompletarTarea($id_tarea){
    $sentencia = $this->db->prepare( "update tarea set completada=1 where id=?");
    $sentencia->execute(array($id_tarea));
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
}


 ?>
