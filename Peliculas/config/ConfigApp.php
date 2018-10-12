<?php


define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('HOMEADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/admin');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/LogIn');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/LogOut');


class ConfigApp
{

    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'PelisController#Home',
      'home'=> 'PelisController#Home',
      'borrar'=> 'PelisController#BorrarPelicula',
      'agregar'=> 'PelisController#InsertTarea',
      'completada'=> 'PelisController#CompletarTarea',
      'LogIn'=> 'LoginController#login',
      'verificarLogin'=>'LoginController#verificarLogin',
      'LogOut'=>'AdminController#Logout',

      'admin'=>'AdminController#PelisAdmin',
      'AgregarPelicula'=>'AdminController#AgregarPelicula',
      'PeliculaSeleccionadaAdmin'=>'AdminController#MostrarPeliculaAdmin',
      'ActualizarPelicula'=>'AdminController#ActualizarPelicula',

      'genero'=> 'PelisController#GenerarGenero',

    ];
}

 ?>
