<?php
include('db.php');

session_start();
if(isset($_POST['btnProcesar'])){

  $_SESSION['nombre']=$_POST['nombre'];
  $_SESSION['apellido']=$_POST['apellido'];
  $_SESSION['dni']=$_POST['dni'];
  $_SESSION['celular']=$_POST['celular'];
  $_SESSION['correo']=$_POST['correo'];
      
  $_SESSION['num_hab']=$_POST['num_hab'];
  $_SESSION['entrada']=$_POST['entrada'];
  $_SESSION['salida']=$_POST['salida'];
  $_SESSION['dias']=$_POST['dias'];
  $_SESSION['monto']=$_POST['monto'];
  $_SESSION['tarjeta']=$_POST['tarjeta'];

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <title>Libertador Hotels</title> 
    <link rel="stylesheet" href="./css/formularioTarjeta.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="css/tarjeta.css">
    <script src="js/jquery-3.6.0.min.js"></script>
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
            <form id="formulario" method="post">
              <div class="wrapper">
  <div class="payment">
    
    
    <h2>Información de la Tarjeta</h2>
    <div class="form">
      <div class="card space icon-relative">
        <label class="label">Titular de la tarjeta:</label>
        <input type="text" class="input" placeholder="Nombre">
        <i class="fas fa-user"></i>
      </div>
      <div class="card space icon-relative">
        <label class="label">Número de tarjeta:</label>
        <input type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="Número de tarjeta">
        <i class="far fa-credit-card"></i>
      </div>
      <div class="card-grp space">
        <div class="card-item icon-relative">
          <label class="label">Fecha de caducidad:</label>
          <input type="text" name="expiry-data" class="input" data-mask="00 / 00"  placeholder="MM / YY">
          <i class="far fa-calendar-alt"></i>
        </div>
        <div class="card-item icon-relative">
          <label class="label">CVC:</label>
          <input type="text" class="input" data-mask="000" placeholder="000">
          <i class="fas fa-lock"></i>
        </div>
      </div>
        
      <div class="btn">
        <button type="button" id="btnPagar">Pagar</button>
      </div> 
      
    </div>
  </div>
</div>
            </form>
        </section>
        <aside></aside>
    </main>
    <footer></footer>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

<script>
  $('#btnPagar').click(function(){
        $.ajax({
          url: "tarjeta.php",
          type: "post",
          data: $("#formulario").serialize(),
          success: function(resultado){
            alert('El pago se realizo exitosamente');
            location.href="index.php";
          }
        });
  });
    </script>