<?php
$id = $_POST['id'];
$materia = $_POST['materia'];
$parcial1 = $_POST['parcial1'];
$parcial2 = $_POST['parcial2'];
$ordinario1 = $_POST['ordinario1'];
$ordinario2 = $_POST['ordinario2'];
require 'db.php';
$sql = "UPDATE primero set materia='$materia', parcial1='$parcial1', parcial2='$parcial2', ordinario1='$ordinario1', ordinario2='$ordinario2' where id ='$id'";
$resultado = mysqli_query($conexion, $sql); 
if (!$resultado) {
    echo "No se actualizo";
}
else {
    header("Location: primero.php");
}
?>