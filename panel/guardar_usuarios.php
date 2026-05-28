<?php
include 'seguridad.php';
include 'conexion.php'; 

// Recibes lo que viene de usuarios.php
$usuario_form    = $_POST['usuarios']; // Lleva 'S' porque así está en tu HTML
$password        = $_POST['password'];
$nombre_completo = $_POST['nombre_completo'];
$rol             = $_POST['rol']; 

// CORRECCIÓN: Apuntar a la tabla 'usuarios' 
// (Asegúrate en phpMyAdmin de que tus columnas se llamen tal cual: usuario, password, nombre_completo, rol)
$consulta = "INSERT INTO usuarios (usuario, password, nombre_completo, rol) 
             VALUES ('$usuario_form', '$password', '$nombre_completo', '$rol')";

if (mysqli_query($conectar, $consulta)) { 
    // Si se guarda el usuario, te mandamos a ver las citas o donde prefieras
    header("Location: ver_usuarios.php?exito=1");
    exit();
} else {
    echo "<h3>Error en la Base de Datos:</h3>";
    echo "<p>" . mysqli_error($conectar) . "</p>";
    echo "<br><a href='ver_usuarios.php'>Regresar al formulario</a>";
}
?>