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
 $numero_casas=$_POST['numero_casas'];
 $color=$_POST['color'];
 $precio=$_POST['precio'];
 $dimensiones=$_POST['dimensiones'];
 $habitaciones=$_POST['habitaciones'];
 $direccion=$_POST['direccion'];
 //hacemos la sentencia de sql
 $sql="INSERT INTO casas VALUES('$numero_casas', '$color',  '$precio', '$dimensiones', '$habitaciones', '$direccion')";
 //ejecutamos la sentencia de sql
 if(mysqli_query($con, $sql)){
    echo"Datos Guardados Correctamente<br><a href='principal.html'>Volver</a>";
} else {
echo "Error al ejecutar la consulta: " . mysqli_error($con);
}
mysqli_close($con);

?>