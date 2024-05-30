<?php
include("Conexion.php");


if (isset($_REQUEST['ID'])) {
    $ID = $_REQUEST['ID'];
    

    $query = "SELECT * FROM biblioteca WHERE ID='$ID'";
    $resultado = $conexion->query($query);
    

    if ($resultado && $resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
?>
        <html>
        <head>
        <title>Modificar Obra</title>
        <link rel="stylesheet" href="stayc.css">
        </head>
        <body id = "bbody">
        <center>
            <form method="post" action="modificarP.php">
                <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
                Ingrese el Autor de la obra:
                <input type="text" required name="Autor" placeholder="Autor" value="<?php echo $row['Autor']; ?>"/>
                <br><br>
                Ingrese la Materia:<br>
                <input type="text" required name="Materia" placeholder="Materia" value="<?php echo $row['Materia']; ?>"/>
                <br><br>
                Ingrese el Nombre:<br>
                <input type="text" required name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']; ?>"/>
                <br><br>
                 Ingrese el numero de Paginas:<br>
                <input type="text" required name="Paginas" placeholder="Paginas" value="<?php echo $row['Paginas']; ?>"/>
                <br><br>
                Ingrese el año de la obra:
                <input type="text" required name="Fecha" placeholder="Fecha" value="<?php echo $row['Fecha']; ?>"/>
                <br><br>
              
                <input type="submit" value="Aceptar">
               
            </form>
        </center>
        </body>
        </html>
<?php
    } else {
        echo "No se encontró ningún usuario con el ID proporcionado.";
    }
} else {
    echo "No se proporcionó un ID válido.";
}
?>
