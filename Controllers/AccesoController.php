<?php
//CONTROLLER

include '../Models/AccesoModel.php';



if(isset($_POST["btnIniciarSesion"]))
{
    $correoElectronico = $_POST["correoElectronico"];
    $contrasena = $_POST["contrasena"];

    $respuesta = IniciarSesionModel($correoElectronico, $contrasena);

    if($respuesta -> num_rows > 0)
    {
        $datosUsuario = mysqli_fetch_array($respuesta);
        header("Location: ../Views/principal.php");
    }else
    {
        header("Location: ../Views/login.php");
    }
}

if(isset($_POST["btnRegistrarse"]))
{
    $correo = $_POST["emailRegistro"];
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $direccion = $_POST["direccion"];
    $contrasena = $_POST["contrasena"];
    $contrasena2 = $_POST["contrasena2"];

    if($contrasena == $contrasena2)
    {
        $respuesta = RegistrarUsuarioModel($correo, $contrasena, $nombre, $apellido1, $apellido2, $direccion);

        if($respuesta == true)
        {
            echo '<script>alert("USUARIO REGISTRADO")</script>';
            header('Refresh:5 ; URL=../Views/login.php');
        }
        else
        {
            header("Location: ../Views/registrarUsuario.php");
        }
    }else
    {
        echo '<script>alert("ERROR")</script>';
    }
}

?>