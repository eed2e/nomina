<?php
$alert = '';
session_start();
if (!empty($_SESSION['active'])) {
  header('location: sistema/');
} else {
  if (!empty($_POST)) {
    if (empty($_POST['usuario']) || empty($_POST['clave'])) {
      $alert = '<div class="alert alert-danger" role="alert">
  Ingrese su usuario y su clave
</div>';
    }else {
      $user = $_POST['usuario'];
      $clave = $_POST['clave'];

      if ($user == "carlos" && $clave == "4048") {
       
        $_SESSION['active'] = true;

        header('location: sistema/');
        
      } else {
        $alert = '<div class="alert alert-danger" role="alert">
              Usuario o Contrase単a Incorrecta
            </div>';
        session_destroy();
      }
    }
  }
}
?>