<?php

include_once '../../Models/ConexionModel.php';


$instancia = Open();
$email = $_POST["email"];//valor enviado desde ajax

$sentencia = "CALL ValidarCorreo('$email');";

$respuesta = $instancia -> query($sentencia);
Close($instancia);

if($respuesta -> num_rows > 0)
{
    echo '1'; //Existe cuenta
}else
{
    echo '0'; //No Existe cuenta
}


?>