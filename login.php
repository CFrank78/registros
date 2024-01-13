<?php
include("conexion.php");
$usuario= $_POST["usuario"];
$contrasena= $_POST["contrasena"];

$query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and contrasena = '$contrasena' ");
$nr = mysqli_num_rows($query);

if($nr == 1){
    header("Location: index.php");
}else{
    echo "No ingreso";
}

?>