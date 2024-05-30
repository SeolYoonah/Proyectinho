<?php
include("Conexion.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["fechaInicio"]) && isset($_POST["fechaFin"])) {
      
        $apellido = $_POST["apellido"];
        $fechaInicio = $_POST["fechaInicio"];
        $fechaFin = $_POST["fechaFin"];

        echo "<script>alert('El libro ha sido apartado');</script>";
    } else {
        echo "<script>alert('Por favor, llene todos los campos');</script>";
    }
}


?>