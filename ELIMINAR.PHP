<?php
    include ("Conexion.php");

    $ID = $_REQUEST ['ID'];

    $query = "DELETE FROM bibiloteca WHERE ID = '$ID'";
    $resultado = $conexion->query($query);

    if($resultado)
    header("Location: tabla.php");
else
    echo "No se elimino";

?>