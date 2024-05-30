<?php
include("Conexion.php");

if (isset($_POST['ID'], $_POST['Autor'], $_POST['Materia'], $_POST['Nombre'], $_POST['Paginas'], $_POST['Fecha'])) {
    $ID = $_POST['ID'];
    $Nombre = $_POST['Autor'];
    $Edad = $_POST['Materia'];
    $Precio = $_POST['Nombre'];
    $Autor = $_POST['Paginas'];
    $Autor = $_POST['Fecha'];

    $query = "UPDATE biblioteca SET Autor=?, Materia=?, Nombre=?, Paginas=?, Fecha=?, WHERE ID=?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("ssisi", $Autor, $Materia, $Nombre, $Paginas, $Fecha);
    $resultado = $stmt->execute();

    if ($resultado) {
        header("Location: tabla.php");
        exit();
    } else {
        echo "No se modificó";
    }
} else {
    echo "Faltan datos necesarios para realizar la actualización.";
}
?>