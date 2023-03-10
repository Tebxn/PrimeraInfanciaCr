<?php
include_once 'ConexionModel.php';



function BuscarUsuarioModel($Correo)
{
    $instancia = Open();

    $sentencia = "CALL BuscarUsuario('$Correo');";
    $respuesta = $instancia->query($sentencia);

    Close($instancia);

    return $respuesta;

}




?>