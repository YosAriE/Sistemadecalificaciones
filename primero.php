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
                <li><a href="dashboardcalificaciones.php">Calificaciones</a></li>
                <li><a href="logout.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>
    <div> 
        <form action="buscar.php" method="post">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
            <a href="nuevo1.php">Agregar Materia</a>
        </form>
    </div>
    <div>
    <table border="1">
        <tr>
            <td>ID:</td>
            <td>Materia:</td>
            <td>Parcial I:</td>
            <td>Parcial II:</td>
            <td>Ordinario I:</td>
            <td>Ordinario II:</td>
            <td>Opciones:</td>
        </tr>
        <?php
        require 'db.php';
        $sql = "SELECT id, materia, parcial1, parcial2, ordinario1, ordinario2 FROM primero";
        $resultado = mysqli_query($conexion, $sql); 
        while ($mostrar = mysqli_fetch_row($resultado)) {
            ?>
            <tr>
                <td> <?php echo $mostrar[0]?></td>
                <td> <?php echo $mostrar[1]?></td>
                <td> <?php echo $mostrar[2]?></td>
                <td> <?php echo $mostrar[3]?></td>
                <td> <?php echo $mostrar[4]?></td>
                <td> <?php echo $mostrar[5]?></td>
                <td>
                <a href="editar1.php?id=<?php echo $mostrar[0] ?>&materia=<?php echo $mostrar[1] ?>&parcial1=<?php echo $mostrar[2] ?>&parcial2=<?php echo $mostrar[3] ?>&ordinario1=<?php echo $mostrar[4] ?>&ordinario2=<?php echo $mostrar[5] ?>">Editar</a>

                    <a href="eliminar1.php? id=<?php echo $mostrar[0] ?>">Eliminar</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>

</body>

</html>