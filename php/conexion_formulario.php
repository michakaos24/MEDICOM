<?php 

  $conexion = mysqli_connect("localhost","root","","login_register_medicom");
  
  if($conexion){
      echo 'conectado a la base de datos';
  }else{
      echo 'no se conecta';
  }
 


?>