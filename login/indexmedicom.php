

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro - MEDICOM</title>
    <link rel="stylesheet" href="../estilologin/css/estiloslogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;700&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <!--caja trasera login y registro-->
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para agendar tu cita</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>

            </div>
            <!--caja trasera login y registro-->
            <!--formulario de  login y registro-->
            
            <div class="contenedor__login-register">

               <form action="../php/login_usuario_medicom.php" method="POST" class="formulario__login">
                   <h2>Iniciar Sesion</h2>
                   <input type="text" placeholder="Correo Electronico" name="correo">
                   <input type="password" placeholder="Contraseña" name="contraseña">
                   <button >Entrar</button>
               </form>
               <form action="../php/registro_usuario_medicom.php"method = "POST" class="formulario__register">
                   <h2>Registrarse</h2>
                   <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                   <input type="text" placeholder="Correo Electronico" name ="correo">
                   <input type="text" placeholder="Usuario" name="usuario">
                   <input type="password" placeholder="Contraseña" name="contraseña">
                   <button>Registrarse</button>
               </form>
            </div>
            <!--formulario de  login y registro-->


        </div>
    </main>
    <div class="contenedor head">
            <h1 class="titulo">MEDICOM</h1>
            <p class="copy">Tu cita médica a tiempo</p>
            <a href="../html/citas_medicas_inicio.php"><button class="botonn">Inicio</button></a>
        </div>
    <script src="../estilologin/scripts/scripts.js"></script>
</body>
</html>