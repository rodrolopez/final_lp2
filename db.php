<?php

$server = "localhost";
$user = "rodrolopez";
$pass = "Feliciateamo";
$db = "ejemplo";

$conexion = new mysqli ($server, $user, $pass, $db);

if ( $conexion -> connect_errno) {
    die("Conexion Fallida". $conexion -> connect_errno);

} else {
    echo "Conectado";
}
?>