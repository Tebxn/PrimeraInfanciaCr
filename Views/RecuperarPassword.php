<?php
include_once '../Controllers/usuariosController.php'
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
	<title>Recuperar contraseña</title>
	<link rel="stylesheet" href="Css/CambioPassword.css">
</head>
<body>

<div class="mainDiv">
  <div class="cardStyle">
    <form action="" method="post" name="signupForm" id="signupForm">
      
      <img src="" id="signupLogo"/>
      
      <h2 class="formTitle">
      Recuperar contraseña
      </h2>
      
     <div class="inputDiv"> 
       <label class="inputLabel" for="email">Correo electrónico</label> 
        <input type="email" id="email" name="email"  required onblur="ValidarCorreo();"> 
  </div> 
    
    <div class="buttonWrapper">
      <button type="submit" id="RecuperarButton" name= "RecuperarButton" onclick="validateSignupForm()" class="submitButton pure-button-primary">
        <span>Enviar</span>
        <span id="loader"></span>
      </button>
    </div>
      
  </form>
  </div>
</div>
</body>
</html>