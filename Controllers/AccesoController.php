<?php
include '../Models/AccesoModel.php';


if(isset($_POST["btnIniciarSesion"]))
{
    $correoElectronico = $_POST["emailLogin"];
    $contrasena = $_POST["passwordLogin"];

    $respuesta = IniciarSesionModel($correoElectronico, $contrasena);

    if($respuesta -> num_rows > 0)
    {
        $datosUsuario = mysqli_fetch_array($respuesta);
        $_SESSION["Id"] = $datosUsuario["Id"];
        $_SESSION["Correo"] = $datosUsuario["Correo"];
        $_SESSION["Apellido1"] = $datosUsuario["Apellido1"];
        $_SESSION["Apellido2"] = $datosUsuario["Apellido2"];
        $_SESSION["Direccion"] = $datosUsuario["Direccion"];
        $_SESSION["Rol"] = $datosUsuario["Rol"];


        header("Location: ../Views/Inicio.php");
    }else
    {
        header("Location: ../Views/Login-Registro.php");
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
        $respuesta = RegistrarUsuarioModel($correo, $nombre, $contrasena, $apellido1, $apellido2, $direccion);

        if($respuesta == true)
        {
            echo '<script>alert("USUARIO REGISTRADO")</script>';
            header('Refresh:5 ; URL=../Views/Login-Registro.php');
        }
        else
        {
            echo '<script>alert("Error")</script>';
        }
    }else
    {
        echo '<script>alert("ERROR")</script>';
    }
}

?>