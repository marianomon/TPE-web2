<?php


class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONs = [
      ''=> 'TareasController#Home',
      'home'=> 'TareasController#Home',
      'borrar'=> 'TareasController#BorrarTarea',
    ];
}

 ?>
