<?php

function Open()
{
    $servidor = "127.0.0.1:3308";
    $usuario = "root";
    $contrasena = "";
    $baseDatos = "primerainfanciacr";

    return mysqli_connect($servidor, $usuario, $contrasena, $baseDatos);
}

function Close($instancia)
{
    mysqli_close($instancia);
}

?>