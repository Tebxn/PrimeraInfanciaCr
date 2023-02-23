<?php
include 'ConexionModel.php';

function IniciarSesionModel($correoElectronico, $contrasena)
{
    $instancia = Open();
    
    $sentencia = "CALL IniciarSesion('$correoElectronico','$contrasena');";
    $respuesta = $instancia -> query($sentencia);

    Close($instancia);
    
    return $respuesta;
}

function RegistrarUsuarioModel($correo, $nombre, $contrasena, $apellido1, $apellido2, $direccion)
{
    $instancia = Open();
    
    $sentencia = "CALL RegistrarUsuario('$correo','$nombre','$contrasena','$apellido1','$apellido2','$direccion');";
    $respuesta = $instancia -> query($sentencia);

    Close($instancia);
    
    return $respuesta;
}


?>