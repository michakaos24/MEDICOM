<?php 
 
  include 'conexion_medicom.php';

  $nombre_completo = $_POST['nombre_completo'];
  $correo = $_POST['correo'];
  $usuario = $_POST['usuario'];
  $contraseña = $_POST['contraseña'];
  
 

  
  
  $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contraseña)
            VALUES('$nombre_completo', '$correo','$usuario','$contraseña')";


    //verificacion de que no se repita el correo
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '<script>
        alert("Este correo ya esta registrado, intenta con otro diferente");
        window.location = "../login/indexmedicom.php";
      
        </script>';
        exit();
    }

    //verificacion de que no se repita el usuario
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario ='$usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '<script>
        alert("Este usuario ya esta registrado, intenta con otro diferente");
        window.location = "../login/indexmedicom.php";
      
        </script>';
        exit();
    }


  $ejecutar = mysqli_query($conexion, $query);


  if($ejecutar){
      echo '<script>
      alert("Usuario almacenado correctamente");
      window.location = "../login/indexmedicom.php";
      
      </script>';

  }else{
    echo '<script>
    alert("Intentalo de nuevo, usuario no almacenado ");
    window.location = "../login/indexmedicom.php";
    
    </script>';
  }


  mysqli_close($conexion);
?>