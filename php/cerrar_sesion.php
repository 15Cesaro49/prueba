<?php
  session_start();
  include("db.php");
  include("inicio.php");

   $varsesion = $_SESSION['correo'];

  
  if($varsesion == null || $varsesion = '') {
    echo 'Inicie sesion por favor';
    die();
  }
  session_destroy();
  header("Location:../HTML/form-registro.php");
?>