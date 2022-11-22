<?php
include('db.php');

ini_set('date.timezone','America/Lima');
$hoy=date('Y-m-d');
$tipo=$_POST['tipo'];


$sql="SELECT numero FROM (SELECT nombreTipo, precio, piso, numero FROM reserva r INNER JOIN habitacion h ON r.idHabitacion=h.idHabitacion INNER JOIN tipo_habitacion t 
                ON h.idTipoHabitacion=t.idTipoHabitacion WHERE t.nombreTipo LIKE '$tipo' 
                                  AND r.fechaEntrada < '$hoy' AND r.fechaSalida < '$hoy' group by numero)  AS A
                                  left JOIN 
                                  ( SELECT numero as num FROM reserva r INNER JOIN habitacion h ON r.idHabitacion=h.idHabitacion INNER JOIN tipo_habitacion t 
                ON h.idTipoHabitacion=t.idTipoHabitacion 
                                   WHERE t.nombreTipo LIKE '$tipo' AND
                                  '$hoy' BETWEEN r.fechaEntrada AND r.fechaSalida) AS B
                                  ON B.num = A.numero WHERE B.num IS NULL";
                $result=mysqli_query($conexion,$sql);
                
echo "<option value='' disabled selected>Seleccione</option>";

while($mostrar=mysqli_fetch_array($result)){
echo "<option value='".$mostrar['numero']."'>".$mostrar['numero']."</option>";
}

?>