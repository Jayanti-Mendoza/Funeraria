<?php include 'seguridad.php'; ?>
<?php include 'bienvenida.php'; ?>
<?php
include 'conexion.php';

// Seleccionamos los registros de la tabla usuarios ordenados por ID descendentemente
$sql = "SELECT * FROM usuarios ORDER BY id_usuario DESC"; 
$resultado = mysqli_query($conectar, $sql);
?>

<table class="tabla-panel">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre de Usuario</th>
            <th>Nombre Completo</th>
            <th>Tipo de Rol</th>
            <th>Acciones</th> 
        </tr>
    </thead>
    <tbody>
        <?php
        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($fila['id_usuario']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['usuario']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['nombre_completo']) . "</td>"; 
                echo "<td>" . htmlspecialchars($fila['rol']) . "</td>"; 
                
                // CORRECCIÓN: Cambiado a eliminar.php para que coincida con tu archivo real
                echo "<td>
                        <a href='eliminar.php?id=" . $fila['id_usuario'] . "' 
                           onclick='return confirm(\"¿De verdad quieres eliminar a este usuario?\");' >
                           Eliminar
                        </a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay usuarios registrados todavía.</td></tr>";
        }
        ?>
    </tbody>
</table>