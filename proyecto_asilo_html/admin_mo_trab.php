<?php
$conexion=mysqli_connect("localhost","root","","proyecto_analisis_2");

$consulta="SELECT * FROM 'usuario' ";



$resultado=mysqli_query($conexion,$consulta) or die ("error de registro");
 echo "registro agregado ";

 $filas=mysqli_fetch_array($resultado);



 mysqli_close($conexion);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tabla_usuarios.css">
    <title>mostrar trabajadores</title>
</head>
<body>
<header class="header inicio"> 

 <div class="contenedor">       
    


    <div class="barra">
          <a href="/">
              <img src="img/logo.jpg" alt="">
          </a>
            <nav class="navegacion">

                
                <a href="nosotros.html"> LISTADO DE INTERNOS</a>
                <a href="listado_trabajadores.php"> LISTADO DE TRABAJADORES  </a>
                
                <a href="admin.php"> CREAR NUEVO TRABAJADOR   </a>

                <a href="index.html"> CERRAR SESION   </a>
            </nav> 
    </div>
    
    <h1> LISTA DE TODOS LOS TRABAJADORES </h1>

    <table>

    <tr>
      <th>Nombre</th>
      <th>Edad</th>
      <th>Direccion</th>
      <th>Correo</th>
      <th>Contraseña</th>
      <th>Idcargo</th>

      <?php
           for ($i=0; $i<filas; $i++){

            echo"<tr>";
               echo"<td>";
                 echo$filas['nombre'];
               echo"</td>";

               echo"<td>";
                 echo$filas['edad'];
               echo"</td>";

               echo"<td>";
                 echo$filas['direccion'];
               echo"</td>";

               echo"<td>";
                 echo$filas['correo'];
               echo"</td>";

               echo"<td>";
                 echo$filas['contraseña'];
               echo"</td>";

               echo"<td>";
                 echo$filas['idcargo'];
               echo"</td>";

            echo"</tr>";


           $filas=mysqli_fetch_array($resultado);
           }
        ?>

    </tr>
    </table>


</body>
</html>