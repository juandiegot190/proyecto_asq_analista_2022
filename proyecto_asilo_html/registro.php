<?php

 ini_set('display_errors', 1);
 error_reporting(E_ALL);

 include('db.php');

 $nombre=$_POST['txtnombre'];
 $edad=$_POST['txtedad'];
 $direccion=$_POST['txtdireccion'];
 $correo=$_POST['txtcorreo'];
 $contraseña=$_POST['txtcontraseña'];

  $consulta="INSERT INTO `paciente` (`Nombre`, `Edad`, `Direccion`, `Correo`, `Contraseña`)
 VALUES ('$nombre', '$edad', '$direccion', '$correo', '$contraseña')";

 /*$consulta="INSERT INTO `usuario` ( `nombre`, `edad`, `dirección`, `correo`, `contraseña`)
 VALUES ('$nombre ', '$edad', '$direccion ', '$correo', '$contraseña')";*/

 $resultado=mysqli_query($conexion,$consulta) or die ("error de registro");
 echo "registro agregado ";

 mysqli_close($conexion);

?>