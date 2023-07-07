<?php
 
$host ="localhost";
 $user ="root";
 $pass ="";
 $db="presentacion";

 
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 

 $correo=$_POST['correo'];
 $contrasena=$_POST['contrasena'];

 $consulta = "SELECT * FROM registro WHERE correo ='$correo' AND contrasena ='$contrasena'";
    
    $resultado = mysqli_query($con, $consulta);
   

    // Si la consulta devuelve un resultado, el usuario y la contraseña son correctos
    if (mysqli_num_rows($resultado) == 1) {
        // Crear una sesión para el usuario
        session_start();
        $_SESSION['correo'] = $correo;
        echo 'Session exitosa <a href="principal.html">ir a la pagina principal</a>';
    }        
     else {
        echo "<p>Usuario o contraseña incorrectos. Por favor, intente de nuevo.</p>";

     }
    
?>