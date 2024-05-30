<?php
include("Conexion.php");
$Autor = $_POST['Autor'];
$Materia = $_POST['Materia']; 
$Nombre = $_POST['Nombre'];
$Paginas = $_POST['Paginas'];
$Fecha = $_POST['Fecha'];

$query = "INSERT INTO biblioteca (Autor, Materia, Nombre, Paginas, Fecha) VALUES ('$Autor','$Materia','$Nombre','$Paginas','$Fecha')"; 

$resultado = $conexion->query($query);

if ($resultado)
    header("Location: tabla.php");
else
    echo "No se insertó correctamente";
?>
