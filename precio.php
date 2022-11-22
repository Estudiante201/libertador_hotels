<?php
include('db.php');

$n_hab=$_POST['numeroHabitacion'];


$sql="SELECT * FROM habitacion h INNER JOIN tipo_habitacion t ON h.idTipoHabitacion=t.idTipoHabitacion WHERE h.numero ='$n_hab'";
                $result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
echo "<option value='".$mostrar['precio']."'>".$mostrar['precio']."</option>";
}

?>