<?php

session_start();
$Usuario = $_POST['Usuario'];
$Contrasena = $_POST['Contrasena'];

include ("conexion.php");

$proceso = $conexion->query("SELECT * FROM control1 WHERE Usuario='$Usuario' AND Contrasena='$Contrasena'");

if($resultado = mysqli_fetch_array($proceso)){
    $_SESSION['u_usuario'] = $Usuario;
    header("Location: sesion.php");
}
else {
    header ("Location: iniciarsesion.html");
}

?>
