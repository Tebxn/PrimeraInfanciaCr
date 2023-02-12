<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recuperar contraseña</title>
	<link rel="stylesheet" href="../Css/CambioPassword.css">
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
        <label class="inputLabel" for="password">Correo electrónico</label>
        <input type="password" id="password" name="password" required>
      </div>
    
    <div class="buttonWrapper">
      <button type="submit" id="submitButton" onclick="validateSignupForm()" class="submitButton pure-button pure-button-primary">
        <span>Enviar</span>
        <span id="loader"></span>
      </button>
    </div>
      
  </form>
  </div>
</div>
</body>
</html>