<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<title>Libertador Hotels</title> 
	<link rel="stylesheet" href="./css/reserva.css">
	<script language="javascript" src="js/jquery-3.1.1.min.js"></script>
	<script language="javascript">
        $(document).ready(function(){
				$("#tipo_hab").change(function () {

					$('#precio').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
					
					$("#tipo_hab option:selected").each(function () {
						tipo = $(this).val();
						$.post("numHabitacion.php", { tipo: tipo }, function(data){
							$("#num_hab").html(data);
						});            
					});
				})
			});

        $(document).ready(function(){
				$("#num_hab").change(function () {
					$("#num_hab option:selected").each(function () {
						numeroHabitacion = $(this).val();
						$.post("precio.php", { numeroHabitacion: numeroHabitacion }, function(data){
							$("#precio").html(data);
						});            
					});
				})
			});
	</script>
	<script>
function calcular(){
	var fechaini = new Date(document.getElementById('entrada').value);
	var fechafin = new Date(document.getElementById('salida').value);
	var diasdif= fechafin.getTime()-fechaini.getTime();
	var contdias = Math.round(diasdif/(1000*60*60*24));

	var prec = document.getElementById('precio').value;
	var monto_final = contdias * prec;

	document.getElementById('dias').value=contdias;
	document.getElementById('monto').value=monto_final;
}
</script>
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
    	<section>
    		<div>
    			
    			<form action="formularioTarjeta.php" method="post">
    				<div class="container1">
    					<h1>INFORMACION PERSONAL</h1>
    					<div class="informacionPersonal"><label class="datosPersonal">Nombre</label><input type="text" name="nombre" required></div>
    					<div class="informacionPersonal"><label class="datosPersonal">Apellido</label><input type="text" name="apellido" required></div>
    					<div class="informacionPersonal"><label class="datosPersonal">DNI</label><input type="text" maxlength="8" name="dni"></div>
    					<div class="informacionPersonal"><label class="datosPersonal">Celular</label><input type="text" maxlength="9" name="celular" required></div>
    					<div class="informacionPersonal"><label class="datosPersonal">Email</label><input type="email" name="correo" required></div>
    				</div>

    				<div class="container2">
    					<h1>INFORMACIÓN DE RESERVA</h1>

    					<div class="informacionReserva"><label class="tipoHabitacion">Tipo de habitacion</label>
    				    <select name="tipo_hab" id="tipo_hab" class="selecciona">
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
    				</select></div>

    				<div class="informacionReserva"><label class="numeroHabitacion">No. de habitación</label>
    				<select name="num_hab" id="num_hab" class="selecciona">
    				</select></div>

    				<div class="informacionReserva"><label class="numeroHabitacion">S/.</label>
    				<select name="precio" id="precio" class="selecciona">
    				</select></div>

    				<div class="informacionReserva"><label class="fecha">Fecha de Entrada</label><input type="date" id="entrada" name="entrada"></div>
    				<div class="informacionReserva"><label class="fecha">Fecha de Salida</label><input type="date" id="salida" name="salida" oninput="calcular()"></div>
    				<div class="informacionReserva">
    					Dias:<input type="text" id="dias" name="dias" size="3" readonly="">
    					Monto: S/.<input type="text" id="monto" name="monto" size="4" readonly="">
    				</div>
    				<div class="informacionReserva">
    					Tarjeta:&nbsp;&nbsp;<input type="radio" name="tarjeta" value="VISA">VISA
    					        <input type="radio" name="tarjeta" value="MASTERCARD">MASTERCARD
    				</div>
    				</div>

    				<div class="informacionReserva"><input type="submit" name="btnProcesar" value="Procesar"></div>
    			</form>
    		</div>
    	</section>
    	<aside></aside>
    </main>
    <footer></footer>
</body>
</html>