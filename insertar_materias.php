<?php
$materia = $_POST['materia'];
$parcial1 = $_POST['parcial1'];
$parcial2 = $_POST['parcial2'];
$ordinario1 = $_POST['ordinario1'];
$ordinario2 = $_POST['ordinario2'];
require 'db.php';
$sql = "INSERT INTO primero (materia, parcial1, parcial2, ordinario1, ordinario2) VALUES ('$materia', '$parcial1', '$parcial2', '$ordinario1', '$ordinario2')";
$resultado = mysqli_query($conexion, $sql); 
if (!$resultado) {
    echo "No se inserto ningun dato!";
}
else {
    header("Location: primero.php");
}
?>