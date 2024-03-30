<?php
$id = $_GET['id'];

require 'db.php';
$sql = "DELETE FROM primero where id ='$id'";
$resultado = mysqli_query($conexion, $sql); 
if (!$resultado) {
    echo "No se Eliminó!";
}
else {
    header("Location: primero.php");
}
?>