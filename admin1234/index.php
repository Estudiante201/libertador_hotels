<?php
include('../db.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<title>Libertador Hotels</title> 
	<link rel="stylesheet" href="../css/reporte.css">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <title></title>
    <style>
        table.dataTable thead {
            background: linear-gradient(to right, #0575E6, #00F260);
            color:white;
        }
    </style>
</head>  
<body>
	<header class="Libertador_hotels">
		<label class="nombreParte1">Libertador</label>
		<label class="nombreParte2">Hotels</label>
		<nav>
			<a class="menu" href="index.php">Reporte&nbsp;</a>
            <a class="menu" href="../index.php">Inicio&nbsp;</a>
		</nav>
    </header>
    <main>
    	
<?php
if (!(isset($_POST['btnMostrar']))) {   
?>             

   <h1 class="text-center">Generar Reportes</h1>

            <h3 class="text-center">Lista de datos que se guardo</h3>

    <div class="reporte">
        <form action="" method="post">
        
        <select name="reporte">
            <option value="">Seleccione</option>
            <option value="reporteIngreso">Reporte de Ingreso</option>
            <option value="reporteSemanal">Reporte de Reserva Semanal</option>
            <option value="reporteMensual">Reporte de Reserva Mensual</option>
            <option value="reporteAnual">Reporte de Reserva Anual</option>
            <option value="reporteMetodosPagos">Reporte de métodos de pagos más frecuente</option>
        </select>
        <input type="submit" name="btnMostrar" value="Mostrar">
    </form>
    </div>

 <?php 
     } else if (isset($_POST['btnMostrar']) && $_POST['reporte']=='reporteIngreso') {

 ?>  

    <h1 class="text-center">Reporte de Ingreso</h1>

    <div class="reporte">
        <form action="" method="post">
        
        <select name="reporte">
            <option value="">Seleccione</option>
            <option value="reporteIngreso">Reporte de Ingreso</option>
            <option value="reporteSemanal">Reporte de Reserva Semanal</option>
            <option value="reporteMensual">Reporte de Reserva Mensual</option>
            <option value="reporteAnual">Reporte de Reserva Anual</option>
            <option value="reporteMetodosPagos">Reporte de métodos de pagos más frecuente</option>
        </select>
        <input type="submit" name="btnMostrar" value="Mostrar">
    </form>
    </div>

    <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                                <th scope="col">ID</th>
                                <th scope="col">Tipo de Habitación</th>
                                <th scope="col">Subtotal</th>
                </thead>
                <tbody>
                    <?php
                        $sql="SELECT t.idTipoHabitacion as id ,nombreTipo, SUM(montoTotal) as subtotal FROM reserva r INNER JOIN habitacion h ON r.idHabitacion=h.idHabitacion INNER JOIN tipo_habitacion t 
                ON h.idTipoHabitacion=t.idTipoHabitacion INNER JOIN cliente c ON r.idCliente=c.idCliente GROUP BY t.idTipoHabitacion";
                        $result=mysqli_query($conexion,$sql);
                        while($mostrar=mysqli_fetch_array($result)){
                        ?>
                    <tr style="text-align: center;">
                                <td><?php echo $mostrar['id']; ?></td>
                                <td><?php echo $mostrar['nombreTipo']; ?></td>
                                <td>S/.<?php echo $mostrar['subtotal']; ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <?php
                        $sql="SELECT SUM(montoTotal) as total FROM reserva";
                        $result=mysqli_query($conexion,$sql);
                        while($mostrar=mysqli_fetch_array($result)){
                        ?>
                            <center>
                                Ganancia Total: <label style="color: red">S/.</label>
                                <label style="color: blue"><?php echo $mostrar['total']; ?></label>
                                                
                            </center>
                        <?php
                        }
                        ?>
           </div>
       </div> 
    </div>


 <?php
} else if (isset($_POST['btnMostrar']) && $_POST['reporte']=='reporteSemanal') {
?>  
    
    <h1 class="text-center">Reporte de Reserva Semanal</h1>

    <div class="reporte">
        <form action="" method="post">
        
        <select name="reporte">
            <option value="">Seleccione</option>
            <option value="reporteIngreso">Reporte de Ingreso</option>
            <option value="reporteSemanal">Reporte de Reserva Semanal</option>
            <option value="reporteMensual">Reporte de Reserva Mensual</option>
            <option value="reporteAnual">Reporte de Reserva Anual</option>
            <option value="reporteMetodosPagos">Reporte de métodos de pagos más frecuente</option>
        </select>
        <input type="submit" name="btnMostrar" value="Mostrar">
    </form>
    </div>

    <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                                <th scope="col">F. Registro</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Tipo de Habitación</th>
                                <th scope="col"># hab.</th>
                                <th scope="col">F. Entrada</th>
                                <th scope="col">F. Salida</th>
                                <th scope="col"># dias</th>
                                <th scope="col">Monto</th>
                                <th scope="col">Tipo de Tarjeta</th>
                </thead>
                <tbody>
                    <?php
                    ini_set('date.timezone','America/Lima');
                    $hoy=date('Y-m-d');
                    $a=date("Y-m-d",strtotime($hoy."- 1 week")); 
                    $rango=$a.' al '.$hoy;

                        $sql="SELECT nombre, apellido, nombreTipo, numero, fechaEntrada, fechaSalida, cantidadDias, montoTotal, fechaRegistro, TipoTarjetaPago  FROM reserva r INNER JOIN habitacion h ON r.idHabitacion=h.idHabitacion INNER JOIN tipo_habitacion t 
                ON h.idTipoHabitacion=t.idTipoHabitacion INNER JOIN cliente c ON r.idCliente=c.idCliente
                WHERE fechaRegistro BETWEEN '$a' AND '$hoy'";
                        $result=mysqli_query($conexion,$sql);
                        while($mostrar=mysqli_fetch_array($result)){
                        ?>
                    <tr>
                                <td><?php echo $mostrar['fechaRegistro']; ?></td>
                                <td><?php echo $mostrar['nombre']; ?></td>
                                <td><?php echo$mostrar['apellido']; ?></td>
                                <td><?php echo $mostrar['nombreTipo']; ?></td>
                                <td><?php echo $mostrar['numero']; ?></td>
                                <td><?php echo $mostrar['fechaEntrada']; ?></td>
                                <td><?php echo $mostrar['fechaSalida']; ?></td>
                                <td><?php echo $mostrar['cantidadDias']; ?></td>
                                <td><?php echo 'S/.'.$mostrar['montoTotal']; ?></td>
                                <td><?php echo $mostrar['TipoTarjetaPago']; ?></td>
                    </tr>
                            <?php
                             }
                            ?>
                </tbody>
            </table>
            <label style="color: #000080;">Rango de fecha: <?php echo $rango ?></label>
           </div>
       </div> 
    </div>

<?php
} else if (isset($_POST['btnMostrar']) && $_POST['reporte']=='reporteMensual') {
?>  
    
    <h1 class="text-center">Reporte de Reserva Mensual</h1>

    <div class="reporte">
        <form action="" method="post">
        
        <select name="reporte">
            <option value="">Seleccione</option>
            <option value="reporteIngreso">Reporte de Ingreso</option>
            <option value="reporteSemanal">Reporte de Reserva Semanal</option>
            <option value="reporteMensual">Reporte de Reserva Mensual</option>
            <option value="reporteAnual">Reporte de Reserva Anual</option>
            <option value="reporteMetodosPagos">Reporte de métodos de pagos más frecuente</option>
        </select>
        <input type="submit" name="btnMostrar" value="Mostrar">
    </form>
    </div>

    <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                                <th scope="col">F. Registro</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Tipo de Habitación</th>
                                <th scope="col"># hab.</th>
                                <th scope="col">F. Entrada</th>
                                <th scope="col">F. Salida</th>
                                <th scope="col"># dias</th>
                                <th scope="col">Monto</th>
                                <th scope="col">Tipo de Tarjeta</th>
                </thead>
                <tbody>
                    <?php
                    ini_set('date.timezone','America/Lima');
                    $hoy=date('Y-m-d');
                    $a=date("Y-m-d",strtotime($hoy."- 1 month"));
                    $rango=$a.' al '.$hoy;

                        $sql="SELECT nombre, apellido, nombreTipo, numero, fechaEntrada, fechaSalida, cantidadDias, montoTotal, fechaRegistro, TipoTarjetaPago  FROM reserva r INNER JOIN habitacion h ON r.idHabitacion=h.idHabitacion INNER JOIN tipo_habitacion t 
                ON h.idTipoHabitacion=t.idTipoHabitacion INNER JOIN cliente c ON r.idCliente=c.idCliente
                WHERE fechaRegistro BETWEEN '$a' AND '$hoy'";
                        $result=mysqli_query($conexion,$sql);
                        while($mostrar=mysqli_fetch_array($result)){
                        ?>
                    <tr>
                                <td><?php echo $mostrar['fechaRegistro']; ?></td>
                                <td><?php echo $mostrar['nombre']; ?></td>
                                <td><?php echo$mostrar['apellido']; ?></td>
                                <td><?php echo $mostrar['nombreTipo']; ?></td>
                                <td><?php echo $mostrar['numero']; ?></td>
                                <td><?php echo $mostrar['fechaEntrada']; ?></td>
                                <td><?php echo $mostrar['fechaSalida']; ?></td>
                                <td><?php echo $mostrar['cantidadDias']; ?></td>
                                <td><?php echo 'S/.'.$mostrar['montoTotal']; ?></td>
                                <td><?php echo $mostrar['TipoTarjetaPago']; ?></td>
                    </tr>
                            <?php
                             }
                            ?>
                </tbody>
            </table>
            <label style="color: #000080;">Rango de fecha: <?php echo $rango ?></label>
           </div>
       </div> 
    </div>    

 <?php

 } else if (isset($_POST['btnMostrar']) && $_POST['reporte']=='reporteAnual') {
    ?>  
        
        <h1 class="text-center">Reporte de Reserva Anual</h1>
    
        <div class="reporte">
            <form action="" method="post">
            
            <select name="reporte">
                <option value="">Seleccione</option>
                <option value="reporteIngreso">Reporte de Ingreso</option>
                <option value="reporteSemanal">Reporte de Reserva Semanal</option>
                <option value="reporteMensual">Reporte de Reserva Mensual</option>
                <option value="reporteAnual">Reporte de Reserva Anual</option>
                <option value="reporteMetodosPagos">Reporte de métodos de pagos más frecuente</option>
            </select>
            <input type="submit" name="btnMostrar" value="Mostrar">
        </form>
        </div>
    
        <div class="container">
           <div class="row">
               <div class="col-lg-12">
                <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                    <thead class="text-center">
                                    <th scope="col">F. Registro</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Tipo de Habitación</th>
                                    <th scope="col"># hab.</th>
                                    <th scope="col">F. Entrada</th>
                                    <th scope="col">F. Salida</th>
                                    <th scope="col"># dias</th>
                                    <th scope="col">Monto</th>
                                    <th scope="col">Tipo de Tarjeta</th>
                    </thead>
                    <tbody>
                        <?php
                        ini_set('date.timezone','America/Lima');
                        $hoy=date('Y-m-d');
                        $a=date("Y-m-d",strtotime($hoy."- 1 year"));
                        $rango=$a.' al '.$hoy;
    
                            $sql="SELECT nombre, apellido, nombreTipo, numero, fechaEntrada, fechaSalida, cantidadDias, montoTotal, fechaRegistro, TipoTarjetaPago  FROM reserva r INNER JOIN habitacion h ON r.idHabitacion=h.idHabitacion INNER JOIN tipo_habitacion t 
                    ON h.idTipoHabitacion=t.idTipoHabitacion INNER JOIN cliente c ON r.idCliente=c.idCliente
                    WHERE fechaRegistro BETWEEN '$a' AND '$hoy'";
                            $result=mysqli_query($conexion,$sql);
                            while($mostrar=mysqli_fetch_array($result)){
                            ?>
                        <tr>
                                    <td><?php echo $mostrar['fechaRegistro']; ?></td>
                                    <td><?php echo $mostrar['nombre']; ?></td>
                                    <td><?php echo$mostrar['apellido']; ?></td>
                                    <td><?php echo $mostrar['nombreTipo']; ?></td>
                                    <td><?php echo $mostrar['numero']; ?></td>
                                    <td><?php echo $mostrar['fechaEntrada']; ?></td>
                                    <td><?php echo $mostrar['fechaSalida']; ?></td>
                                    <td><?php echo $mostrar['cantidadDias']; ?></td>
                                    <td><?php echo 'S/.'.$mostrar['montoTotal']; ?></td>
                                    <td><?php echo $mostrar['TipoTarjetaPago']; ?></td>
                        </tr>
                                <?php
                                 }
                                ?>
                    </tbody>
                </table>
                <label style="color: #000080;">Rango de fecha: <?php echo $rango ?></label>
               </div>
           </div> 
        </div>    
    
     <?php
} else if (isset($_POST['btnMostrar']) && $_POST['reporte']=='reporteMetodosPagos') {
?>  
    
    <h1 class="text-center">Reporte de métodos de pagos más frecuente</h1>

    <div class="reporte">
        <form action="" method="post">
        
        <select name="reporte">
            <option value="">Seleccione</option>
            <option value="reporteIngreso">Reporte de Ingreso</option>
            <option value="reporteSemanal">Reporte de Reserva Semanal</option>
            <option value="reporteMensual">Reporte de Reserva Mensual</option>
            <option value="reporteAnual">Reporte de Reserva Anual</option>
            <option value="reporteMetodosPagos">Reporte de métodos de pagos más frecuente</option>
        </select>
        <input type="submit" name="btnMostrar" value="Mostrar">
    </form>
    </div>

    <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                                <th scope="col">VISA</th>
                                <th scope="col">MASTERCARD</th>
                </thead>
                <tbody>
                    <?php
                    $v="";
                    $m="";

                        $sql="SELECT COUNT(TipoTarjetaPago) as VISA  FROM reserva  
                WHERE TipoTarjetaPago='VISA'";
                        $result=mysqli_query($conexion,$sql);
                        while($mostrar=mysqli_fetch_array($result)){
                            $v=$mostrar['VISA'];
                        }


                            $sql="SELECT COUNT(TipoTarjetaPago) as MASTERCARD  FROM reserva  
                WHERE TipoTarjetaPago='MASTERCARD'";
                        $result=mysqli_query($conexion,$sql);
                        while($mostrar=mysqli_fetch_array($result)){
                            $m=$mostrar['MASTERCARD'];
                        }

                        ?>
                    <tr style="text-align: center;">
                                <td><?php echo $v; ?></td>
                                <td><?php echo $m; ?></td>
                    </tr>
                </tbody>
            </table>
           </div>
       </div> 
    </div>

 <?php }else if (isset($_POST['btnMostrar'])) { ?>
   <h1 class="text-center">Generar Reportes</h1>

            <h3 class="text-center">Lista de datos que se guardo</h3>

    <div class="reporte">
        <form action="" method="post">
        
        <select name="reporte">
            <option value="">Seleccione</option>
            <option value="reporteIngreso">Reporte de Ingreso</option>
            <option value="reporteSemanal">Reporte de Reserva Semanal</option>
            <option value="reporteMensual">Reporte de Reserva Mensual</option>
            <option value="reporteAnual">Reporte de Reserva Anual</option>
            <option value="reporteMetodosPagos">Reporte de métodos de pagos más frecuente</option>
        </select>
        <input type="submit" name="btnMostrar" value="Mostrar">
    </form>
    </div>

 <?php } ?>
    
    </main>
    <footer></footer>
</body>
</html>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
      
<!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
      
    <script>
      $(document).ready(function(){
         $('#tablaUsuarios').DataTable(); 
      });
    </script>