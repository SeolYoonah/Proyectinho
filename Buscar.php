<?php

$conexion = new mysqli("190.1.0.131", "22progb36", "22progb36", "22progb36");
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}


$q = $_GET["q"];

$sql = "SELECT * FROM biblioteca WHERE ID LIKE '%$q%' OR Autor LIKE '%$q%' OR Materia LIKE '%$q%' OR Nombre LIKE '%$q%' OR Paginas  LIKE '%$q%' OR Fecha LIKE '%$q%' ";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ID"] . "</td>";
        echo "<td>" . $row["Autor"] . "</td>";
        echo "<td>" . $row["Materia"] . "</td>";
        echo "<td>" . $row["Nombre"] . "</td>";
        echo "<td>" . $row["Paginas"] . "</td>";
        echo "<td>" . $row["Fecha"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No se encontraron resultados</td></tr>";
}
$conexion->close();
?>