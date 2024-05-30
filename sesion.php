<!DOCTYPE html>
    <html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stayc.css">
    <title>Sesion</title>
    </head>
    <body id = "bbody">

    <center><h2>¡¡Sesion Exitosa, Bienvenido!!</h2>
    <img src="isa.jpg" width = "80%" height = "40%"></center>
   
        <?php

        session_start();
        if(isset($_SESSION['u_usuario'])){
       
          
           

            echo "<br><br><br><br><br><br><br><br><br><a href='CERRAR SESION.php'>\nCerrar Sesión</a>";
            echo "<br><a href='formulario.html'>\nContinuar</a>";

            
        }
        else{
            header("Location: iniciarsesion.html");
        }
          

        ?>

      
    </body>
    </html>