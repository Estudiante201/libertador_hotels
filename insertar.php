<?php
include('db.php');

$usuario=$_POST['nombreUsuario'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];

$sql="INSERT INTO usuario(correo, nombreUsuario, clave) VALUES ('$correo','$usuario','$clave')";
       $exito=mysqli_query($conexion,$sql);
       
       echo $exito;

   }
?>