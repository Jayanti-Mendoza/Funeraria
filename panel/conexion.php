<?php 

$host = "localhost";
$usuario = "root";
$password = "";
$basedatos = "funeraria";

$conectar = mysqli_connect($host, $usuario, $password, $basedatos);

if(!$conectar){
    die("Error en la conexión a la base de datos: " . mysqli_connect_error());
}

// Establecer el conjunto de caracteres a UTF-8
mysqli_set_charset($conectar, "utf8");

?>
