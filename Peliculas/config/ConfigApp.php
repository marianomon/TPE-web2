<?php


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
      'admin'=>'PelisController#PelisAdmin',
      'LogOut'=>'PelisController#Home',
      'AgregarPelicula'=>'PelisController#AgregarPelicula',
      'PeliculaSeleccionadaAdmin'=>'PelisController#MostrarPeliculaAdmin',
      'ActualizarPelicula'=>'PelisController#ActualizarPelicula', 

      'genero'=> 'PelisController#GenerarGenero',

    ];
}

 ?>
