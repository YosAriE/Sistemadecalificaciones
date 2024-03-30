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
        .card button {
            padding: 10px 20px;
            background-color: #50C511; 
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
         }
         .card button i {
            font-size: 24px; /* Tamaño del icono */
            font-weight: bold; /* Grosor de la línea */
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
                <li><a href="#">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="row">
        <div class="card">
            <h1>PRIMER SEMESTRE</h1>
            <a href="primero.php" style="text-decoration: none;">
                <button style="background-color: #50C511;">
                    <i class="bi bi-arrow-right-square"></i>
                </button>
            </a>
        </div>
            <div class="card">
            <h1>SEGUNDO SEMESTRE</h1>
            <a href="segundo.php" style="text-decoration: none;">
                <button style="background-color: #50C511;">
                    <i class="bi bi-arrow-right-square"></i>
                </button>
            </a>
            </div>
            <div class="card">
            <h1>TERCER SEMESTRE</h1>
            <a href="tercero.php" style="text-decoration: none;">
                <button style="background-color: #50C511;">
                    <i class="bi bi-arrow-right-square"></i>
                </button>
            </a>
            </div>
        </div>
        <div class="row">
            <div class="card">
            <h1>CUARTO SEMESTRE</h1>
            <a href="cuarto.php" style="text-decoration: none;">
                <button style="background-color: #50C511;">
                    <i class="bi bi-arrow-right-square"></i>
                </button>
            </a>
            </div>
            <div class="card">
            <h1>QUINTO SEMESTRE</h1>
            <a href="quinto.php" style="text-decoration: none;">
                <button style="background-color: #50C511;">
                    <i class="bi bi-arrow-right-square"></i>
                </button>
            </a>
            </div>
            <div class="card">
            <h1>SEXTO SEMESTRE</h1>
            <a href="sexto.php" style="text-decoration: none;">
                <button style="background-color: #50C511;">
                    <i class="bi bi-arrow-right-square"></i>
                </button>
            </a>
            </div>
        </div>
        <div class="row">
            <div class="card">
            <h1>SEPTIMO SEMESTRE</h1>
            <a href="septimo.php" style="text-decoration: none;">
                <button style="background-color: #50C511;">
                    <i class="bi bi-arrow-right-square"></i>
                </button>
            </a>
            </div>
            <div class="card">
            <h1>OCTAVO SEMESTRE</h1>
            <a href="octavo.php" style="text-decoration: none;">
                <button style="background-color: #50C511;">
                    <i class="bi bi-arrow-right-square"></i>
                </button>
            </a>
            </div>
            <div class="card">
            <h1>NOVENO SEMESTRE</h1>
            <a href="noveno.php" style="text-decoration: none;">
                <button style="background-color: #50C511;">
                    <i class="bi bi-arrow-right-square"></i>
                </button>
            </a>
            </div>
        </div>
    </div>

</body>

</html>