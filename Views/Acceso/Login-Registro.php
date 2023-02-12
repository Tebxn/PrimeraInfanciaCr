<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="Login.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Inicie Sesión</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuario" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" />
            </div>
            <input type="submit" value="Iniciar Sesión" class="btn solid" />
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Regístrese</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuario" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Correo" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" />
            </div>
            <input type="submit" class="btn" value="Registrarse" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Nuevo Aqui?</h3>
            <p>
              Únase a un equipo de expertos en la materia que le proveerán recursos para una mejor educación.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Regístrese
            </button>
          </div>
          <img src="../Img/desk.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Tienes una Cuenta?</h3>
            <p>
              Acceda a su cuenta y ayúdenos a formar una mejor educación para la juventud del país. 
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Inicie Sesión
            </button>
          </div>
          <img src="../Img/teacher.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="Login.js"></script>
  </body>
</html>
