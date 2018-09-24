<?php


class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'TareasController#Home',
      'home'=> 'TareasController#Home',
      'borrar'=> 'TareasController#BorrarTarea',
      'agregar'=> 'TareasController#InsertTarea',
      'completada'=> 'TareasController#CompletarTarea',
      'Terror'=> 'TareasController#GeneroTerror',
    ];
}

 ?>
