<?php
include('db.php');

if (isset($_POST['btnIngresar'])) {

	session_start();
	$usuario=$_POST['nombreUsuario'];
	$clave=$_POST['clave'];
	$respuesta=false;

$sql="SELECT * from usuario WHERE nombreUsuario='$usuario' AND clave='$clave'" ;
                        $result=mysqli_query($conexion,$sql);
                        while($mostrar=mysqli_fetch_array($result)){
    		            $respuesta=true;
    		            $_SESSION['usuario']=$mostrar['nombreUsuario'];
		                }

		                if ($respuesta) {
		                	header("Location: index.php");
		                }else{
		                	$_SESSION['respuesta']="Datos de ingreso no valido, intentalo de nuevo por favor";

		                	header("Location: login.php");
		                }




}
?>