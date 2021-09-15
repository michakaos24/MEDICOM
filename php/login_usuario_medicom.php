<?php 

  

 include 'conexion_medicom.php';

 $correo = $_POST['correo'];
 $contraseña =$_POST['contraseña'];
 

 $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' 
 and contraseña='$contraseña' ");

 if(mysqli_num_rows($validar_login) > 0){
     header("location: ../formulario.php");
     exit;
 }else{
    echo '<script>
    alert("Este usuario no existe, por favor verifique los datos introducidos");
    window.location = "../login/indexmedicom.php";
  
    </script>';
    exit;
 }
?>