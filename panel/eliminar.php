<?php
require_once __DIR__ . "/seguridad.php";
require_once __DIR__ . "/conexion.php";

$id = $_GET['id'];

// Borramos usando la columna id_usuario
$eliminar = "DELETE FROM usuarios WHERE id_usuario = '$id'";
$resultado = mysqli_query($conectar, $eliminar);

if($resultado){
  echo "<script>
    alert('Usuario eliminado correctamente');
    window.location='ver_usuarios.php';
  </script>";
}else{
  echo "<script>
    alert('Error al eliminar: " . mysqli_error($conectar) . "');
    window.location='ver_usuarios.php';
  </script>";
}
?>


