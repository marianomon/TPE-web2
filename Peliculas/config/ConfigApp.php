<?php


class ConfigApp
{

    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'PelisController#Home',
      'home'=> 'PelisController#Home',
      'borrar'=> 'PelisController#BorrarTarea',
      'agregar'=> 'PelisController#InsertTarea',
      'completada'=> 'PelisController#CompletarTarea',
      'Terror'=> 'PelisController#GeneroTerror',
      'Accion'=> 'PelisController#GeneroAccion',
      'Drama'=> 'PelisController#GeneroDrama',
      'Comedia'=> 'PelisController#GeneroComedia',
    ];
}

 ?>
