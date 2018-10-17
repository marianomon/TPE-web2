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

  function GetGeneroSeleccionado($PARAMS = ''){
    $sentencia = $this->db->prepare( "select * from genero WHERE id_genero = ?");
    $sentencia->execute(array($PARAMS[0]));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }


  function GetGeneros(){
    $sentencia = $this->db->prepare( "select * from genero");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function BorrarPelicula($id_pelicula){
    $sentencia = $this->db->prepare( "delete from pelicula where id_pelicula=?");
    $sentencia->execute(array($id_pelicula));
    header(HOMEADMIN);
  }

  function AgregarPeliculamodel($genero,$nombre,$sinopsis,$actores,$estreno,$iFrame){
    $sentencia = $this->db->prepare( "insert into pelicula (id_genero, nombre, sinopsis, actores, iFrame, estreno) values (?,?,?,?,?,?)");
    $sentencia->execute(array($genero,$nombre,$sinopsis,$actores,$iFrame,$estreno));
    header(HOMEADMIN);
  }

  function MostrarPeliculaAdmin($id_pelicula){
    $sentencia = $this->db->prepare( "select * from pelicula where id_pelicula=?");
    $sentencia->execute(array($id_pelicula[0]));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function ActualizarMovie($id_pelicula, $genero, $nombre, $sinopsis, $actores, $iFrame){
    $sentencia = $this->db->prepare("update pelicula set id_genero=?, nombre=?, sinopsis=?, actores=?, iFrame=? where id_pelicula=?");
    $sentencia->execute(array($genero, $nombre, $sinopsis, $actores, $iFrame, $id_pelicula[0]));
    header(HOME . "/PeliculaSeleccionadaAdmin/$id_pelicula[0]");
  }

  function InsertTarea($titulo,$descripcion,$completada){
    $sentencia = $this->db->prepare("INSERT INTO tarea(titulo, descripcion, completada) VALUES(?,?,?)");
    $sentencia->execute(array($titulo,$descripcion,$completada));
  }

  function CompletarTarea($id_tarea){
    $sentencia = $this->db->prepare( "update tarea set completada=1 where id=?");
    $sentencia->execute(array($id_tarea));
    header(HOME);
  }

  function BuscarEstrenos(){
    $sentencia = $this->db->prepare( "select * from pelicula where estreno=1");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);

  }
}


 ?>
