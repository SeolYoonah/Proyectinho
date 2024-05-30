<?php
    $conexion = new mysqli ("190.1.0.131", "22progb36", "22progb36", "22progb36");
    
    if ($conexion)
        echo "Conexion exitosa";
        else 
        echo "Error en la conexion";
        
?>