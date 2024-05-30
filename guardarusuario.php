<?php
include("Conexion.php");
$usuario = $_POST['Usuario'];
$contrasenia = $_POST['Contrasena']; 


$query = "INSERT INTO contactos (Usuario, Contrasena) VALUES ('$usuario','$contrasenia')"; 

$resultado = $conexion->query($query);

if ($resultado)
 header ("location: iniciarsesion.html");
else
    echo "No se insertó correctamente";
?>
