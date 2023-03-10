function ValidarCorreo(){

    let Correo = $("#Correo").val();

    $.ajax({
        type: 'POST',
        url: '../Controllers/usuariosController.php',
        data: {
            'BuscarUsuario':'BuscarUsuario',
             'Correo' : Correo
        },
        success: function (res){
         if(res == "OK"){
            alert("El correo ingresado no existe");
            $("#RecuperarButton").prop("disabled",true);
         }
            else{
                $("#RecuperarButton").prop("disabled",false);
            }
         }
        });
}