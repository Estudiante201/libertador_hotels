<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/login.css" />
    <title>Libertador Hotels</title>
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
      <a class="menu" href="login.php">Iniciar sesión</a>
    </nav>
    </header>
    
    <main>
      <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="cuentaEntrar.php" method="post" class="sign-in-form">
            <h2 class="title">Iniciar Sesión</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nombre de usuario" name="nombreUsuario" required>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="clave" required>
            </div>
            <input type="submit" name="btnIngresar" value="Ingresar" class="btn" />
            <?php

                  if(isset($_SESSION['respuesta'])){   
                  $mensaje=$_SESSION['respuesta'];
                  
                  session_destroy();

            ?>                  
                  <label style="color: red"><?php echo $mensaje?></label>
            <?php 
                 } 
              ?>
            <p class="social-text">O Iniciar sesión con plataformas sociales</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form id="formulario" method="post" class="sign-up-form">
            <h2 class="title">Crear cuenta</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nombre de usuario" name="nombreUsuario" required>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Corrreo electronico" name="correo" required>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="clave" required>
            </div>
            <button type="button" id="btnCrear" class="btn">Registrarse</button>
            <p class="social-text">O Crear una cuenta con las plataformas sociales</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Nuevo aquí ?</h3>
            <p>
              Entonces tiene la oportunidad de tener una cuenta personal.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Crear cuenta
            </button>
          </div>
          <img src="imagenes/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Uno de nosotros ?</h3>
            <p>
              Unete a la comunidad de usuarios de Libertador Hotels
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Iniciar sesión
            </button>
          </div>
          <img src="imagenes/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    </main>

    <script src="js/app.js"></script>
  </body>
</html>

<script>
  $('#btnCrear').click(function(){
        $.ajax({
          url: "cuentaCrear.php",
          type: "post",
          data: $("#formulario").serialize(),
          success: function(resultado){
            alert('El registro fue un exito');
            location.href="index.php";
          }
        });
  });
    </script>