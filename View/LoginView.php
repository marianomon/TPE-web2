<?php

class LoginView
{

  private $Smarty;
  function __construct(){
    $this->Smarty = new Smarty();
    $this->Smarty->assign('root', dirname($_SERVER["PHP_SELF"]));
  }

  function mostrarLogin($Titulo, $Generos, $Mensaje_Error=''){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->assign('Mensaje_Error',$Mensaje_Error);
    $this->Smarty->display('templates/LogIn.tpl');
  }


}
 ?>
