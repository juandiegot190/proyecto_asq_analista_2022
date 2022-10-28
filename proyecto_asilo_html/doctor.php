
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/general.css">
    <title>doctor</title>
     
    

</head>
<body>
    

<header class="header inicio"> 

 <div class="contenedor">       
    


    <div class="barra">
          <a href="/">
              <img src="img/logo.jpg" alt="">
          </a>
            <nav class="navegacion">

                
                <a href="nosotros.html"> LISTA DE PACIENTES</a>
                <a href="#"> FARMACIA   </a>
                
                <a href="doctor.php"> CREAR FICHA  Y PACIENTE   </a>
                <a href="index.html"> CERRAR SESION</a>
            </nav> 
    </div>
    <div class="form-box"  >
       
        <div class="button-box">
            <div id="elegir"></div>
             <button type="button" class="toggle-btn" onclick="login()"> Nueva Ficha </button> 
           <button type="button" class="toggle-btn" onclick="registrar()">Nuevo paciente</button>
        </div>
        <form id="login" class="input-group" action="registro.php" method="post">
                    <input type="text" class="input-field" placeholder="Nombre  " required name="usuario" >
                    <input type="password" class="input-field" placeholder="motivo de visita " required name="contraseña">
                    <input type="text" class="input-field" placeholder="Examen De Laboratorio "  name="txtnombre">
                   <input type="text" class="input-field" placeholder=" Resultados de los examenes "  name="txtedad">
                   <input type="text" class="input-field" placeholder="Diagnostico  " name="txtdireccion ">
                   <input type="text" class="input-field" placeholder="Medicamento Aplicado  "  name="txtnombre">
                   <input type="text" class="input-field" placeholder="Observaciones Medicas "  name="txtnombre">
                    <button type="submit" class="submint-btn">Registrar </button>
        </form>
        <form id="registrar" class="input-group" action="registro.php" method="post">
            <input type="text" class="input-field" placeholder="Nombre De Usuario "  name="txtnombre">
            <input type="text" class="input-field" placeholder=" Edad  "  name="txtedad">
            <input type="text" class="input-field" placeholder="Direccion  " name="txtdireccion ">
            <input type="email" class="input-field" placeholder="Correo"  name="txtcorreo">
            <input type="password" class="input-field" placeholder="Contraseña "  name="txtcontraseña">
            <input type="checkbox" class="check-box"><span>Acepto Los Terminos y Condiciones del Asilo</span>
            <button type="submit" class="submint-btn">Registrar</button>
        </form>
    </div>
        
</div>
</header> 

<script>
var x = document.getElementById("login");                                                                 
var y = document.getElementById("registrar");  
var z = document.getElementById("elegir");  


function login (){
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0px";
}

function registrar(){
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "120px";
} 
</script>
</body>
</html>
