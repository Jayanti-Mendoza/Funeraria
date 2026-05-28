<?php
include 'seguridad.php';
include 'conexion.php'; 

// 1. Recibir los datos que vienen desde tu formulario HTML
$titular_nombre   = $_POST['titular_nombre'];
$titular_telefono = $_POST['titular_telefono'];
$tipo_servicio    = $_POST['tipo_servicio'];
$fecha_servicio   = $_POST['fecha_servicio'];
$sala_nombre      = $_POST['sala_nombre'];
$costo_total      = $_POST['costo_total'];

// 2. Insertar usando los nombres EXACTOS de tus columnas de phpMyAdmin
$consulta = "INSERT INTO servicios (titular_nombre, titular_telefono, tipo_destino, fecha_inicio, id_sala, total) 
             VALUES ('$titular_nombre', '$titular_telefono', '$tipo_servicio', '$fecha_servicio', '$sala_nombre', '$costo_total')";

// 3. Ejecutar la consulta con tu variable $conectar
if (mysqli_query($conectar, $consulta)) { 
    // Si todo sale bien, te manda a ver las citas
    header("Location: ver_citas.php?exito=1");
    exit();
} else {
    // Si algo falla, aquí te dirá el motivo exacto
    echo "<h3>Error en la Base de Datos:</h3>";
    echo "<p>" . mysqli_error($conectar) . "</p>";
    echo "<br><a href='cita.php'>Regresar al formulario</a>";
}
?>