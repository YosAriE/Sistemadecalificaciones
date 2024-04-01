<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./CSS/Style.css">
    <style>
        body {
            background-image: url("imagenes/tec.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-color: rgba(255, 255, 255, 0.5);
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
            background-color: #ffffff;
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
        .figure {
            align-items: center;
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
                <li><a href="mostrarperfil.php">Perfil</a></li>
                <li><a href="dashboardcalificaciones.php">Calificaciones</a></li>
                <li><a href="logout.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="card">
            <figure style="text-align: center;">
                <img src="imagenes/mision.png">
            </figure>
            <div class="contenido">
                <h3 >MISIÓN</h3>
                <p style="font-size: 18px;">Formar profesionistas lideres, comprometidos con Mexico, con alto sentido etico de sus valores y
                    principios, capaces de entender, comprender, resolver, innovar, competir y emprender con exito
                    acividades en beneficio de la sociedad, a traves del uso de tecnologias y modelos educativos de
                    vanguardia.</p>
            </div>
        </div>
        <div class="card">
            <figure style="text-align: center;">
                <img src="imagenes/vision.png">
            </figure>
            <div class="contenido">
                <h3>VISIÓN</h3>
                <p style="font-size: 18px;">Consolidarnos como una institucion de educacion superior Tecnologica de reconocido prestigio a nivel
                    nacional e internacional, a traves de la formacion de profesionistas copetitivos, que satisfagan las
                    expectativas y necesidades que demanda el mercado laboral.
                </p>
            </div>
        </div>
        <div class="card">
            <figure style="text-align: center;">
                <img src="imagenes/politica.png">
            </figure>
            <div class="contenido">
                <h3>POLITICA</h3>
                <p style="font-size: 18px;">El tecnologico de Estudios superiores de Villa Guerrero esta comprometido en la formacion integral de
                    capital humano que contribuya al desarrollo productivo, economico y social del pais, con base en la
                    legislacion aplicable, los procesos estrategicos implementados en la institucion, el respetp y la
                    proteccion del medio ambiente; satisfaciendo los requisitos del estudiante y partes interesadas
                    orientadas a la mejora continua del sistema de gestion integral, conforme a las norma ISO 9001:2015
                    e ISO 14001:2015</p>
            </div>
        </div>
    </div>


    <script src="./JS/main.js"></script>
</body>

</html>