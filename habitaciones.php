<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<title>Libertador Hotels</title> 
	<link rel="stylesheet" href="./css/habitaciones.css">
</head>  
<body>
	<header>
		<label class="nombreParte1">Libertador</label>
		<label class="nombreParte2">Hotels</label>
		<nav>
			<a class="menu" href="index.php">Inicio&nbsp;</a>
			<a class="menu" href="habitaciones.php">Habitaciones&nbsp;</a>
			<a class="menu" href="disponibilidad.php">Ver disponibilidad&nbsp;</a>
			<?php
			     session_start();
                 if(isset($_SESSION['usuario'])){
            ?>
              <a class="menu" href="" style="border: 1px solid white; 
              border-radius: 25px; background: white; font-family: none; color: black;padding: 5px;
              font-weight: bolder;"><?php echo $_SESSION['usuario']?></a>
                 
                 <a class="menu" href="cerrarSesion.php"><img src="imagenes/CerrarSesion2.png"></a>
                 <?php }else{ ?>
                 	<a class="menu" href="login.php">Iniciar sesión</a>
                 <?php } ?>
		</nav>
    </header>
    <main>
    	<!-- Catalogo de habitaciones -->
    	<section>
    		<br/>
    		<div class="container">
    			<?php
                $sql="SELECT * from tipo_habitacion";
                $result=mysqli_query($conexion,$sql);
                while($mostrar=mysqli_fetch_array($result)){
    		    ?>
		      <div class="card">
			    <img src="imagenes/<?php echo $mostrar['idTipoHabitacion']?>.jpg">
		        <h4><?php echo $mostrar['nombreTipo']?></h4>
		        <p><?php echo $mostrar['descripcion']?></p>
		        <label>S/.<?php echo $mostrar['precio']?></label>
		        <a href="reserva.php" class="boton">Reservar ahora</a>
		     </div>
		     <?php
		     }
		     ?>
	       </div>
    	</section>
    	<aside></aside>
    </main>
    <footer></footer>
</body>
</html>