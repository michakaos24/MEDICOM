<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilologin/css/estilosformulario.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="form">
        <form action="../php/formulario_envio.php" method="POST">
            <p>Nombre</p>
            <label for="nombre">Su nombre</label>
            <input type="text" name="nombre" placeholder="nombre" required>
            <br>
            <p>Correo</p>
            <label for="correo">Direccion de Correo</label>
            <input type="email"name="correo"placeholder="example@correo.com" required>
            <br>
            <p>Mensaje</p>
            <label for="mensaje">Su Mensaje</label>
            <textarea name="mensaje" placeholder="Mensaje" required></textarea>
            <br>
            <br>
            <input type="submit"value="Enviar">

        </form>
    </div>
</body>
</html>