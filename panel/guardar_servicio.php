<?php
include 'seguridad.php';
include 'conexion.php'; 

// Recib datos del formulario HTML
$titular_nombre   = $_POST['titular_nombre'];
$titular_telefono = $_POST['titular_telefono'];
$tipo_servicio    = $_POST['tipo_servicio'];
$fecha_servicio   = $_POST['fecha_servicio'];
$id_sala      = $_POST['id_sala'];
$costo_total      = $_POST['costo_total'];
$consulta = "INSERT INTO servicios (titular_nombre, titular_telefono, tipo_destino, fecha_inicio, id_sala, total) /*costo_total */
             VALUES ('$titular_nombre', '$titular_telefono', '$tipo_servicio', '$fecha_servicio', '$id_sala', '$costo_total')";

if (mysqli_query($conectar, $consulta)) { 
    header("Location: ver_citas.php?exito=1");
    exit();
} else {
    echo "<h3>Error en la Base de Datos:</h3>";
    echo "<p>" . mysqli_error($conectar) . "</p>";
    echo "<br><a href='cita.php'>Regresar al formulario</a>";
}
?>