<?php include 'seguridad.php'; ?>
<?php include 'bienvenida.php'; ?>
<?php
include 'conexion.php';

// Seleccionamos los registros ordenados por ID
$sql = "SELECT * FROM servicios ORDER BY id_servicio DESC"; 
$resultado = mysqli_query($conectar, $sql);
?>

<table class="tabla-panel">
    <thead>
        <tr>
            <th>Nombre del Titular</th>
            <th>Teléfono</th>
            <th>Tipo de Servicio</th>
            <th>Fecha</th>
            <th>Sala</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php
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
            echo "<tr><td colspan='6';'>No hay servicios registrados todavía.</td></tr>";
        }
        ?>
    </tbody>
</table>