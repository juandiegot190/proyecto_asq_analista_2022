
          
            <?php

                ini_set('display_errors', 1);
                error_reporting(E_ALL);

                include('db.php');

                $nombre=$_POST['txtnombre'];
                $edad=$_POST['txtedad'];
                $direccion=$_POST['txtdireccion'];
                $correo=$_POST['txtcorreo'];
                $contraseña=$_POST['txtcontraseña'];
                $id=$_POST['txtid'];

                $consulta="SELECT * FROM `usuario` "; /*(`nombre`, `edad`, `dirección`, `correo`, `contraseña`, `idcargo`) 
                VALUES ('$nombre ', '$edad', '$direccion', '$correo', '$contraseña', '$id')"; */

                
                $resultado=mysqli_query($conexion,$consulta) or die ("error de registro");
                echo "registro agregado ";

                mysqli_close($conexion);

                while($mostrar_fetch_array($resultado)){
            ?>   

           

