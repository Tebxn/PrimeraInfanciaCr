<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cambiar contraseña</title>
	<link rel="stylesheet" href="../Css/CambioPassword.css">
</head>
<body>

<div class="mainDiv">
  <div class="cardStyle">
    <form action="" method="post" name="signupForm" id="signupForm">
      
      <img src="" id="signupLogo"/>
      
      <h2 class="formTitle">
        Cambiar contraseña
      </h2>
      
      <div class="inputDiv">
        <label class="inputLabel" for="password">Contraseña actual</label>
        <input type="password" id="password" name="password" required>
      </div>
      
    <div class="inputDiv">
      <label class="inputLabel" for="confirmPassword">Nueva contraseña</label>
      <input type="password" id="confirmPassword" name="confirmPassword">
    </div>

        <div class="inputDiv">
      <label class="inputLabel" for="confirmPassword">Confirmar contraseña</label>
      <input type="password" id="confirmPassword" name="confirmPassword">
    </div>
    
    <div class="buttonWrapper">
      <button type="submit" id="submitButton" onclick="validateSignupForm()" class="submitButton pure-button pure-button-primary">
        <span>Guardar</span>
        <span id="loader"></span>
      </button>
    </div>
      
  </form>
  </div>
</div>
</body>
</html>