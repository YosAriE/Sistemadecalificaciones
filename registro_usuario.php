<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="CSS/stylelogin.css">
    <style>
                    
            form {
                max-width: 400px;
                margin: 0 auto;
                padding: 20px;
                background-color: #f9f9f9;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            /* Estilos para los campos de entrada */
            form input[type="email"],
            form input[type="text"],
            form input[type="password"] {
                width: 100%;
                padding: 10px;
                margin: 8px 0;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            /* Estilos para las etiquetas */
            form label {
                font-weight: bold;
            }

            /* Estilos para el botón */
            form input[type="submit"] {
                background-color: #007bff;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            /* Estilos para el enlace "Salir" */
            form a {
                display: block;
                text-align: center;
                margin-top: 10px;
                color: #007bff;
                text-decoration: none;
                transition: color 0.3s;
            }

            form a:hover {
                color: #0056b3;
            }
    </style>
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