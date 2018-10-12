<?php

class LoginView
{

  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
    $this->Smarty->assign('root', dirname($_SERVER["PHP_SELF"]));
  }

  function mostrarLogin($Titulo, $Generos, $Mensaje_Error=''){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Generos',$Generos);
    $smarty->assign('Mensaje_Error',$Mensaje_Error);
    $smarty->display('templates/LogIn.tpl');
  }


}
 ?>
