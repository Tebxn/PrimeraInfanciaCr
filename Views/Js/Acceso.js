function HabilitarCampos(){
  var correo = document.getElementById("correoElectronico").value;
  var clave = document.getElementById("contrasena").value;

  if(correo.trim() != "" && clave.trim() != "")
  {
    //docuement.getElementById("btnIniciarSesion").disable = false;
    $("#btnIniciarSesion").prop("disabled", false);
  }else{
    $("#btnIniciarSesion").prop("disabled", true);
  }
  //$("#btnIniciarSesion").disabled = false;
} 

function HabilitarRegistro(){

  password1 = document.getElementById("contrasena").value;
  password2 = document.getElementById("contrasena2").value;

  if(password1 == password2){
    console.log('Contraseña valida');
    $("#btnRegistrarse").prop("disabled", false);
  }else{
    console.log('Contraseña invalida');
    $('#mensajeContrasena').html('Las contraseñas no coinciden');
  }
}
