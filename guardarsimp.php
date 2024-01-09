<?php
include("conexion.php");

    $Nombres= $_POST['Nombres'];
    $ApellidoP= $_POST['ApellidoP'];
    $ApellidoM= $_POST['ApellidoM'];
    $Sexo= $_POST['Sexo'];
    $TelefonoCel= $_POST['TelefonoCel'];
    $TelefonoFijo= $_POST['TelefonoFijo'];
    $Calle= $_POST['Calle'];
    $NumeroExt= $_POST['NumeroExt'];
    $Colonia= $_POST['Colonia'];
    $Localidad= $_POST['Localidad'];
    $Edad= $_POST['Edad'];
    $SeccionElec= $_POST['SeccionElec'];
    $NombreCol= $_POST['NombreCol'];

    $query= "INSERT INTO simpatizantes(Nombres, ApellidoP, ApellidoM, Sexo, TelefonoCel, TelefonoFijo, Calle, NumeroExt, Colonia, Localidad, Edad, SeccionElec, NombreCol) VALUES ('$Nombres', 
        '$ApellidoP', '$ApellidoM', '$Sexo','$TelefonoCel','$TelefonoFijo','$Calle','$NumeroExt','$Colonia','$Localidad','$Edad','$SeccionElec','$NombreCol')";

    $resultado= $conexion->query($query);

    if($resultado){
        header("Location: index.php");
    }else{
        echo "Insercion no exitosa";
    }


?>