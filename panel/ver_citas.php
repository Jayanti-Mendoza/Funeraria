<?php
include 'conexion.php';

// Seleccionamos ordenando por tu columna id_servicio
$sql = "SELECT * FROM servicios ORDER BY id_servicio DESC"; 
$resultado = mysqli_query($conectar, $sql);

if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($fila['titular_nombre']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['titular_telefono']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['tipo_destino']) . "</td>"; 
        echo "<td>" . htmlspecialchars($fila['fecha_inicio']) . "</td>"; 
        echo "<td>" . htmlspecialchars($fila['id_sala']) . "</td>"; 
        echo "<td>$" . htmlspecialchars($fila['total']) . "</td>"; 
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6' style='text-align:center;'>No hay servicios registrados todavía.</td></tr>";
}
?>