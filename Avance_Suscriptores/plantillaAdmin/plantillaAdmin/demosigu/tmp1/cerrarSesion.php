
<?php 
//Iniciar Sesión
session_start();
//error_reporting
error_reporting(1);

  
  session_destroy();
  session_unset();
  $alert = "<script>location.href = './index.php';</script>";
	
  echo $alert;

?> 