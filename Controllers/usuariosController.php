<?php
include_once '../Models/usuariosModel.php';



if(isset($_POST["BuscarUsuario"])){
    
    $respuesta = BuscarUsuarioModel($_POST["Email"]);
 
    if($respuesta -> num_rows > 0)
    {
     echo "El correo ya se encuentra registrado";
    }
    else
    {
     echo "OK";
    }
 }

 if(isset($_POST["RecuperarButton"]))
{
    $CorreoElectronico = $_POST["Correo"];
    $respuesta = BuscarUsuarioModel($CorreoElectronico);

    if($respuesta -> num_rows > 0)
    {
        $datosUsuario = mysqli_fetch_array($respuesta);
        $cuerpo = "Su contraseña actual es: " . $datosUsuario["Contrasena"];

        EnviarCorreo($CorreoElectronico, 'Recuperar Usuario', $cuerpo);
        header("Location: ../Views/Login-Registro.php");
    }
}

function EnviarCorreo($destinatario, $asunto, $cuerpo)
{
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    $mail = new PHPMailer();
    $mail -> CharSet = 'UTF-8';

    $mail -> IsSMTP();
    $mail -> Host = 'smtp.office365.com'; // smtp.gmail.com     
    $mail -> SMTPSecure = 'tls';
    $mail -> Port = 587; // 465 // 25                               
    $mail -> SMTPAuth = true;
    $mail -> Username = 'vali80232@ufide.ac.cr';               
    $mail -> Password = '...';                                
    
    $mail -> SetFrom('vali80232@ufide.ac.cr', "Sistema Profesores");
    $mail -> Subject = $asunto;
    $mail -> MsgHTML($cuerpo);   
    $mail -> AddAddress($destinatario, 'Usuario Sistema');
    $mail ->AddAttachment("");

    $mail -> send();
}



?>