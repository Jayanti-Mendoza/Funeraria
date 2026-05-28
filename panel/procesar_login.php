<?php
require "conexion.php";

//Datos del formulario HTML 
$usuario  = trim($_POST['usuario']);
$password = $_POST['password'];

$comparar = "SELECT * FROM usuarios WHERE usuario = ? AND password = ?";
$stmt = mysqli_prepare($conectar, $comparar);

if ($stmt) {
    //Vincular los datos de forma segura ("ss" porque ambos son texto)
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $password);
    mysqli_stmt_execute($stmt);

    //Obtener el resultado de la base de datos
    $resultado = mysqli_stmt_get_result($stmt);

    //Verificar si el usuario y contraseña son correctos
    if(mysqli_num_rows($resultado) > 0){
        //Guarda los datos de la fila para poder usar, por ejemplo, el nombre real
        $fila = mysqli_fetch_assoc($resultado);
        session_start();
        $_SESSION["autentificado"] = "SI";
        //Guarda el 'nombre_completo' real de la base de datos para tu Bienvenida.php
        $_SESSION["nombre_usuario"] = $fila['nombre_completo']; 
        $_SESSION["rol"] = $fila['rol']; // Por si llegas a necesitar bloquear páginas según el rol
        header("Location: bienvenida.php");
        exit();
    }
    else {
        // Si no coincide, mandamos la alerta y regresamos al formulario
        echo '
        <script>
            alert("Usuario o contraseña incorrecta");
            location.href = "iniciar_sesion.php";
        </script>
        ';
    }
} else {
    echo "Error al preparar la consulta: " . mysqli_error($conectar);
}
?>