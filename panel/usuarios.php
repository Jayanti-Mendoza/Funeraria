<?php include 'seguridad.php'; ?>
<?php include 'bienvenida.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta de Usuario - Valle de Paz</title>
    <link rel="stylesheet" href="estilospanel.css">
</head>
<body>

    <div class="contenedor-dashboard">
        
        <h2>Alta de Nuevo Usuario</h2>

        <form action="guardar_usuarios.php" method="POST" class="formulario-pasos">
            
            <h3>Datos de la Cuenta</h3>
            
            <div class="campo-formulario">
                <label>Nombre de Usuario:</label>
                <input type="text" name="usuarios" required>
            </div>
            
            <div class="campo-formulario">
                <label>Contraseña:</label>
                <input type="password" name="password" required>
            </div>
            
             <div class="campo-formulario">
                <label>Nombre Completo:</label>
                <input type="text" name="nombre_completo" required>
            </div>
            
            <div class="campo-formulario">
                <label>Tipo de Rol:</label>
                <select name="rol" required>
                <option value="">-- Seleccione --</option>
                <option value="SuperAdmin">SuperAdmin</option>
                <option value="Empleado">Empleado</option>
</select>
            </div>

            <div class="campo-formulario">
                <button type="submit" class="boton-servicio"   >
                    Registrar Usuario
                </button>
            </div>
            
        </form> </div> <?php include 'piedash.php'; ?>