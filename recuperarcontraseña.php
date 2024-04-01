<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="CSS/stylelogin.css">
    <Style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        h1{
            text-aling: center;
            padding: 20px;
        }
        .correo {
            whidth: 100%;
            border: none;
            outline: none;
            margin-bottom; 20px;
            border-bottom: solid rgb(160, 156, 156) 2px;
        }
    </Style>
</head>
<body>
    <form action="contraseña.php" method="post">
        <h2>RECUPERAR CONTRASEÑA: </h2><br>
        <img src="imagenes/message.png" alt="" style="width: 100px; height: 100px; margin-left: auto; margin-right: auto;"><br>
        <div class="container">
            <p>Ingrese el correo que ha registrado:</p>
            <form action="">
                <div class="form_correo"><br>
                <i class="bi bi-envelope-exclamation"></i>
                    <input type="email" placeholder="Ingrese su correo" class="correo"><br>
                </div><br>
                <div>
                    <button>Enviar Link</button><br><br>
                    <a href="index.php"> Salir</a>
                </div>
            </form>
            
        </div>
    </form>
</body>

</html>