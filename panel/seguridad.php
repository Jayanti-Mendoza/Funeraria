<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Validar si la variable de sesión NO existe o NO es "SI"
if(!isset($_SESSION["autentificado"]) || $_SESSION["autentificado"] != "SI"){   
    header("Location: iniciar_sesion.php");
    exit();
}
?>