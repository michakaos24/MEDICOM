<?php 

include 'conexion_formulario.php';

  //recuperar variables 
  $nombre =$_POST['nombre'];
  $correo=$_POST['correo'];
  $mensaje=$_POST['mensaje'];
  //sentencia sql
  $sql="INSERT INTO formulario ('nombre','correo','mensaje')VALUES('$nombre','$correo','$mensaje')";

  //ejecutamos sentencia sql
  $ejecutar=mysqli_query($conexion,$sql);
  //verificacion de ejecucion
  if($ejecutar){
    echo "Hubo algun error";
  }else{
    echo "Formulario enviado exitosamente <br><a href='../formulario.php'>Volver<a>";
  }
  ?>