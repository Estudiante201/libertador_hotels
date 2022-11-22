<?php
include('db.php');

   session_start();

	ini_set('date.timezone','America/Lima');
   $hoy=date('Y-m-d');

   $usuario=false;

	$nombre=$_SESSION['nombre'];
	$apellido=$_SESSION['apellido'];
	$dni=$_SESSION['dni'];
	$celular=$_SESSION['celular'];
   $correo=$_SESSION['correo'];

	$numero=$_SESSION['num_hab'];
	$entrada=$_SESSION['entrada'];
	$salida=$_SESSION['salida'];
	$dias=$_SESSION['dias'];
	$monto=$_SESSION['monto'];
	$tipoPago=$_SESSION['tarjeta'];

   if (isset($_SESSION['usuario'])) {
      $usuario=$_SESSION['usuario'];
   }

   session_destroy();

   if ($usuario!=false) {
      session_start();
      $_SESSION['usuario']=$usuario;
   }
   

	$idCliente="";
	$idHabitacion="";

	$sql="SELECT * FROM cliente WHERE dni = '$dni'";
    $result=mysqli_query($conexion,$sql);
       while($mostrar=mysqli_fetch_array($result)){
       $idCliente=$mostrar['idCliente'];
       }

     if($idCliente==""){
     	$sql="INSERT INTO cliente(nombre,apellido,dni,celular,correo) VALUES ('$nombre','$apellido','$dni','$celular','$correo')";
     	mysqli_query($conexion,$sql);
     }

     $sql="SELECT * FROM cliente WHERE dni='$dni'";
    $result=mysqli_query($conexion,$sql);
       while($mostrar=mysqli_fetch_array($result)){
       $idCliente=$mostrar['idCliente'];
       }

       $sql="SELECT * FROM habitacion WHERE numero='$numero'";
       $result=mysqli_query($conexion,$sql);
       while($mostrar=mysqli_fetch_array($result)){
       $idHabitacion=$mostrar['idHabitacion'];
       }

       $sql="INSERT INTO reserva(fechaEntrada,fechaSalida,cantidadDias,montoTotal,fechaRegistro,TipoTarjetaPago,idCliente,idHabitacion) VALUES ('$entrada','$salida','$dias','$monto','$hoy','$tipoPago','$idCliente','$idHabitacion')";
       $exito=mysqli_query($conexion,$sql);

?>