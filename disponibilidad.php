<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<title>Libertador Hotels</title> 
	<link rel="stylesheet" href="./css/disponibilidad.css">
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
    	<!-- Consultar habitaciones disponible -->
    	<section>
    		<h1 class="titulo">Fecha disponible de las habitaciones</h1>
    		<div class="container2">
    			<form action="" method="post">
    				<label class="tipoHabitacion">Tipo de habitacion</label>
    				<select name="tipo_hab" class="selecciona">
    					<option value="" disabled selected>Seleccione</option>
    					<?php
                        $sql="SELECT * from tipo_habitacion";
                        $result=mysqli_query($conexion,$sql);
                        while($mostrar=mysqli_fetch_array($result)){
    		            ?>
    					<option value="<?php echo $mostrar['nombreTipo']?>"><?php echo $mostrar['nombreTipo']?></option>
    				    <?php
		                }
		                ?>
    				</select>
    				<label class="fecha">Entrada</label><input type="date" name="entrada">
    				<label class="fecha">Salida</label><input type="date" name="salida">
    				<input type="submit" name="btnEnviar" value="Buscar">
    			</form>
    		</div>
    	</section>
    	<?php

if(isset($_POST['btnEnviar']) && isset($_POST['tipo_hab'])){
	$tipo_hab=$_POST['tipo_hab'];
    $fecha_entrada=$_POST['entrada'];
    $fecha_salida=$_POST['salida'];  
    $entrada=$_POST['entrada'];
    $salida=$_POST['salida'];
?>
    	<section>
    		<table>
    			<tr>
    			    <th>Tipo de habitación</th>
    			    <th>S/.</th>
    			    <th>Piso</th>
    			    <th>No. de habitación</th>
    			    <th><?php echo $entrada.' al '.$salida?></th>
    		    </tr>
    		    <?php
                $sql="SELECT nombreTipo, precio, piso, numero FROM (SELECT nombreTipo, precio, piso, numero FROM reserva r INNER JOIN habitacion h ON r.idHabitacion=h.idHabitacion INNER JOIN tipo_habitacion t 
                ON h.idTipoHabitacion=t.idTipoHabitacion WHERE t.nombreTipo LIKE '$tipo_hab' 
                                  AND r.fechaEntrada < '$entrada' AND r.fechaSalida < '$entrada' group by numero)  AS A
                                  left JOIN 
                                  ( SELECT numero as num FROM reserva r INNER JOIN habitacion h ON r.idHabitacion=h.idHabitacion INNER JOIN tipo_habitacion t 
                ON h.idTipoHabitacion=t.idTipoHabitacion 
                                   WHERE t.nombreTipo LIKE '$tipo_hab' AND
                                  '$entrada' BETWEEN r.fechaEntrada AND r.fechaSalida or 
                                   '$salida' BETWEEN r.fechaEntrada AND  r.fechaSalida) AS B
                                  ON B.num = A.numero WHERE B.num IS NULL";
                $result=mysqli_query($conexion,$sql);
                while($mostrar=mysqli_fetch_array($result)){
    		    ?>
    		    <tr>
    		        <td><?php echo $mostrar['nombreTipo']?></td>
    		        <td><?php echo $mostrar['precio']?></td>
    		        <td><?php echo $mostrar['piso']?></td>
    		        <td><?php echo $mostrar['numero']?></td>
    		        <td><?php echo 'disponible'?></td>
    		    </tr>
    		    <?php } ?>
    		</table>
    	</section>
<?php } ?>    	    	
    </main>
    <footer></footer>
</body>
</html>