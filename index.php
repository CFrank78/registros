<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>Registro de Simpatizantes</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.cdnfonts.com/css/doris-pp" rel="stylesheet">
                
</head>
<script type="text/javascript">
    function confirmacion(){
        var respuesta = confirm("Deseas guardar esta informacion?");
        if(respuesta==true){
            return true;
        }else{
            return false;
        }
    }
</Script>
<body>        
    <h1 id="Reg">Registro</h1>
    <h1 id="Simp"> Simpatizantes</h1> 
           
    <form action="guardarsimp.php" method="POST" >
        <label for="Nombres">Nombre</label><br>
        <input type="text" id="Nombres" placeholder="Nombres" required name="Nombres"><br><br>
        
        <label for="ApellidoMP">Apellidos</label><br>
        <input type="text" id="ApellidoMP" placeholder="Apellido Paterno" required name="ApellidoP"><br>
        <input type="text" id="ApellidoMP" placeholder="Apellido Materno" name="ApellidoM"><br><br>

        <label for="Sexo">Sexo</label><br>
        <select id="Sexo" required name="Sexo">
            <option value="Masculino"> Masculino </option>
            <option value="Femenino"> Femenino </option>
            <option value="Otro"> Otro </option>
        </select><br><br>

        <label for="Telefono">Telefono Celular</label><br>
        <input type="tel" id="Telefono" placeholder="Telefono Celular" name="TelefonoCel"><br>
        <label >Telefono Fijo</label><br>
        <input type="tel" id="Telefono" placeholder="Telefono Fijo" name="TelefonoFijo"><br><br>

        <label for="Direccion">Direccion</label><br>
        <input type="text" id="Direccion" placeholder="Calle y numero" required name="Calle"><br>
        <input type="text" id="Direccion" placeholder="Numero Exterior" name="NumeroExt"><br>
        <input type="text" id="Direccion" placeholder="Colonia" required name="Colonia"><br>
        <input type="text" id="Direccion" placeholder="Localidad" required name="Localidad"><br><br>
        
        <label for="EdadNumero">Edad</label><br>
        <input type="number" id="EdadNumero" placeholder="Edad" min="18" max="150" required name="Edad"><br><br>
        
        <label for="SeccionElec">Seccion Electoral</label><br>
        <input type="text" id="SeccionElec" placeholder="Seccion Electoral" min="0" max="50" required name="SeccionElec"><br><br>

        <label for="NombreColaborador">Nombre del Colaborador</label><br>
        <input type="text" id="NombreColaborador" placeholder="Nombre del Colaborador" required name="NombreCol"><br><br>

        <input type="submit" onclick="return confirmacion()"><br><br>
    </form>
    <img src="descargar.png" id="img1">  
</body>
</html>