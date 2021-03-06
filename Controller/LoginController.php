<?php

require_once "../View/LoginView.php";
require_once "../Model/LoginModel.php";

class LoginController
{

  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new LoginModel();
    $this->Titulo = "Login";
  }

function login(){
  $Generos = $this->model->GetGeneros();
  $this->view->mostrarLogin($this->Titulo, $Generos);
}

function verificarLogin(){
  $usuario = $_POST["usuario"];
  $pass = $_POST["contraseña"];
  $db_usuario = $this->model->getUser($usuario);

  if (isset($db_usuario)) {
    if (password_verify($pass, $db_usuario[0]["pass"])){
      header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    }else {
      $Generos = $this->model->GetGeneros();
      $this->view->mostrarLogin($this->Titulo, $Generos, "contraseña incorrecta");
    }
  }else {
    echo "no hay usuario";
  }

}

}
 ?>
