<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="presentacion";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 //recuperar las variables
 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];
 $correo=$_POST['correo'];
 $contrasena=$_POST['contrasena'];

 //hacemos la sentencia de sql
 $sql="INSERT INTO registro VALUES('$nombre', '$apellido',  '$correo', '$contrasena')";
 //ejecutamos la sentencia de sql
 if(mysqli_query($con, $sql)){
    echo"Cuenta creada correctamente<br><a href='registro.html'>Volver</a>";

} else {
echo "Error al ejecutar la consulta: " . mysqli_error($con);
}
mysqli_close($con);

?>