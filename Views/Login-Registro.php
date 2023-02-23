<?php
  include '../Controllers/AccesoController.php';
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="Css/Login.css" />
    
    <title>Acceder</title>
  </head>
  <body>
 
    <!-- LOG IN-->

    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="" method="post" class="sign-in-form">
            <h2 class="title">Inicie Sesión</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" id="emailLogin" name="emailLogin" placeholder="Correo Electronico" required onkeyup="HabilitarCampos()"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="passwordLogin" name="passwordLogin" placeholder="Contraseña" required onkeyup="HabilitarCampos()"/>
            </div>
            <input type="submit" id="btnIniciarSesion" name="btnIniciarSesion" value="Iniciar Sesión" class="btn solid" disabled/>
          </form>

    <!-- REGISTRARSE -->

          <form action="" method="post" class="sign-up-form">
            <h2 class="title">Registrarse</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" class="form-control" placeholder="Correo Electronico"  id="emailRegistro" name="emailRegistro" required>
            </div>

            <div id="mensaje"></div> <!-- mostrar si el correo ya esta registrado -->

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="nombre" name="nombre" placeholder="Nombre" required disabled/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="apellido1" name="apellido1" placeholder="Primer Apellido" required disabled/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="apellido2" name="apellido2" placeholder="Segundo Apellido" required disabled/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="direccion" name="direccion" placeholder="Direccion" required disabled/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required disabled/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="contrasena2" name="contrasena2" placeholder="Confirmar Contraseña" required disabled onblur="HabilitarRegistro()"/>
            </div>

            <div id="mensajePassword"></div>

            <input type="submit" id="btnRegistrarse" name="btnRegistrarse" class="btn" value="Registrarse"/>
          </form>

        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>¿Nuevo Aqui?</h3>
            <p>
              Unete a un equipo de expertos en la materia que le proveerán recursos para una mejor educación para los más pequeños
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Regístrese
            </button>
          </div>
          <img src="Svg/desk.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>¿Ya tienes una cuenta?</h3>
            <p>
              Acceda a su cuenta y ayúdenos a mejorar la educación para los niños y niñas del país. 
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Inicie Sesión
            </button>
          </div>
          <img src="Svg/teacher.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="Js\Acceso.js"></script>
    <script src="Js\Login.js"></script>
  </body>

<script>

$('#emailRegistro').blur(function(e){
      e.preventDefault();
  
      var email = $('#emailRegistro').val();

      $.ajax({
        type: "POST",
        url: 'Ajax/ValidarCorreo.php',
        data: ('email='+email),
        beforeSend: function(){
          console.log(email);
        },
        success: function(respuesta){
          console.log(respuesta);
          if(respuesta == '1'){
            console.log('Correo electronico ya ha sido registrado');
            $('#mensaje').html('Correo electronico ya ha sido registrado');
          }else{
            console.log('Correo electronico valido');
            $('#mensaje').html('Correo electronico valido');
            $("#nombre").prop("disabled", false);
            $("#apellido1").prop("disabled", false);
            $("#apellido2").prop("disabled", false);
            $("#direccion").prop("disabled", false);
            $("#contrasena").prop("disabled", false);
            $("#contrasena2").prop("disabled", false);
          }
        },
        error: function(xhr) { // if error occured
        alert("Error occured.please try again");
        $(placeholder).append(xhr.statusText + xhr.responseText);
         $(placeholder).removeClass('loading');
     }
      })
    })

</script>


</html>
