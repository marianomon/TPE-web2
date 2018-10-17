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

      'LogIn'=> 'LoginController#login',
      'verificarLogin'=>'LoginController#verificarLogin',
      'LogOut'=>'AdminController#Logout',

      'generoAdmin'=>'AdminController#GenerarGeneroAdmin',
      'admin'=>'AdminController#PelisAdmin',

      'ActualizarPelicula'=>'AdminController#ActualizarPelicula',
      'AgregarPelicula'=>'AdminController#AgregarPelicula',
      'FormularioAgregarPelicula'=>'AdminController#FormularioAgregarPelicula',
      'borrar'=> 'AdminController#BorrarPelicula',

      'PeliculaSeleccionada'=>'PelisController#PeliculaSeleccionada',
      'PeliculaSeleccionadaAdmin'=>'AdminController#MostrarPeliculaAdmin',

      'estrenos'=>'PelisController#MostrarEstrenos',

      'genero'=> 'PelisController#GenerarGenero',

    ];
}

 ?>
