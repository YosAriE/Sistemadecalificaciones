<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./CSS/Style.css">
    <style>
        body {
            background-color: rgba(163, 239, 189, 0.405);
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }

        .container {
            padding: 15px;
            width: 100%;
            display: flex;
            max-width: 1100px;
            margin: 5%;
            display: flex;
            justify-content: center;
            margin: 0 auto;

        }

        .card {
            width: 100%;
            margin: 20px;
            border-radius: 6px;
            overflow: hidden;
            background: rgba(255, 253, 253, 0.5);
            box-shadow: 0px 1px 10px rgba(238, 236, 236, 0.2);
            cursor: default;
            transition: all 400ms ease;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card:hover {
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.4);
            transform: translateY(-3%);
        }

        .card img {
            padding: 15px;
            margin-left: 15px;
            align-items: center;
        }

        .card .contenido {
            padding: 15px;
            text-align: center;
        }

        .card .contenido p {
            line-height: 1.5;
            color: #000000;
        }

        .card .contenido h3 {
            margin-bottom: 15px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            
        }

        .row {
            display: flex;
            flex: 1;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .card {
            flex: 0 0 calc(33.33% - 10px);
            background-color: #f0f0f0;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 8px;
        }

        h1 {
            font-size: 20px;
            margin-bottom: 10px;

        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }


    </style>
</head>

<body>
    <header>
        <img class="logo" src="./imagenes/logo_tesvg.png" alt="logo">
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x-square-fill"></i></button>
            <ul class="nav-list">
                <li><a href="home.php">Inicio</a></li>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="primero.php">Calificaciones</a></li>
                <li><a href="logout.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>
    <?php
        $id = $_GET['id'];
        $materia = $_GET['materia'];
        $parcial1 = $_GET['parcial1'];
        $parcial2 = $_GET['parcial2'];
        
        if (isset($_POST['ordinario1'])) {
            $ordinario1 = $_POST['ordinario1'];
        } else {
            $ordinario1 = null; 
        }
        
        if (isset($_POST['ordinario2'])) {
            $ordinario2 = $_POST['ordinario2'];
        } else {
            $ordinario2 = null; 
        }
        ?>
    <div>
        <form action="editar_materias.php" method="post">
            <table border="1">
                <tr>
                    <td>Ingresa la Materia:</td>
                    <td><input type="hidden" name="id" value="<?=$id?>"></td>
                </tr>
                <tr>
                    <td> Materia: </td>
                    <td><input type="text" name="materia" id="" value="<?=$materia?>"></td>
                </tr>
                <tr>
                    <td>Parcial 1: </td>
                    <td><input type="text" name="parcial1" id="" value="<?=$parcial1?>"></td>
                </tr>
                <tr>
                    <td>Parcial 2: </td>
                    <td><input type="text" name="parcial2" id="" value="<?=$parcial2?>"></td>
                </tr>
                <tr>
                    <td>Ordinario 1: </td>
                    <td><input type="text" name="ordinario1" id="" value="<?=$ordinario1?>"></td>
                </tr>
                <tr>
                    <td>Ordinario 2: </td>
                    <td><input type="text" name="ordinario2" id="" value="<?=$ordinario2?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar"></td>
                    <td><a href="primero.php">Cancelar</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>