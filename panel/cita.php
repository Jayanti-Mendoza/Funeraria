<?php include 'seguridad.php'; ?>
<?php include 'bienvenida.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta de Servicio - Valle de Paz</title>
    <link rel="stylesheet" href="estilospanel.css">
</head>
<body>

    <div class="contenedor-dashboard">
        
        <h2>Alta de Nuevo Servicio (Cita)</h2>

        <form action="guardar_servicio.php" method="POST" class="formulario-pasos">
            
            <h3>1. Datos del Responsable y Fallecido</h3>
            
            <div class="campo-formulario">
                <label>Nombre del Responsable (Titular):</label>
                <input type="text" name="titular_nombre" required>
            </div>
            
            <div class="campo-formulario">
                <label>Teléfono de Contacto:</label>
                <input type="text" name="titular_telefono" required>
            </div>

            <h3>2. Detalles del Servicio Funerario</h3>
            
            <div class="campo-formulario">
                <label>Tipo de Servicio:</label>
                <select name="tipo_servicio" required>
                    <option value="">-- Seleccione --</option>
                    <option value="Cremación">Cremación</option>
                    <option value="Inhumación">Inhumación</option>
                </select>
            </div>
            
            <div class="campo-formulario">
                <label>Fecha Programada:</label>
                <input type="date" name="fecha_servicio" required>
            </div>

            <h3>3. Asignación de Capilla / Sala</h3>
            
            <div class="campo-formulario">
             <label>Selecciona la Sala:</label>
             <select name="sala_nombre" required>
             <option value="">-- Seleccione una sala --</option>
             <option value="1">Sala Magna</option>
             <option value="2">Capilla A</option>
             <option value="3">Capilla B</option>
             </select>
             </div>
            
            <div class="campo-formulario">
                <label>Florería u Ornamentos:</label>
                <textarea name="detalles_flores" placeholder="Ej. Corona blanca clásica"></textarea>
            </div>

            <h3>4. Información Financiera</h3>
            
            <div class="campo-formulario">
                <label>Costo Total del Servicio:</label>
                <input type="text" name="costo_total" placeholder="$0.00" required>
            </div>
            
            <div class="campo-formulario">
                <label>Método de Pago:</label>
                <input type="text" name="metodo_pago" placeholder="Ej. Efectivo, Tarjeta, Transferencia" required>
            </div>
            
            <div class="campo-formulario">
                <label></label> 
                <button type="submit" style="background-color: #7f8c8d; color: white; padding: 12px 25px; border: none; display: inline-block;">Guardar Servicio Completo</button>
            </div>

        </form>
        
    </div>

</body>
</html>
<?php include 'piedash.php'; ?>