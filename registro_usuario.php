<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="CSS/stylelogin.css">
</head>
<body>
    <form action="" method="post">
        <h2>REGISTRAR NUEVO USUARIO: </h2>
        <img src="imagenes/nuevousuario.png" alt="" style="width: 100px; height: 100px; margin-left: auto; margin-right: auto;">
        <?php
        require 'db.php';
        require 'registronuevo.php';
        ?>
        <div>
            <label for="">Correo Electronico:</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="">Usuario:</label>
            <input type="text" name="usuario">
        </div>
        <div>
            <label for="">Contraseña:</label>
            <input type="password" name="contraseña">
        </div>
        <div>
            <input class="btn" type="submit" value="Registrar"  name="registro">
            <a href="index.php"> Salir </a>
        </div>
    </form>
</body>

</html>