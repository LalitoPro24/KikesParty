<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM Salon";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Kike's Party</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <center><h1>BIENVENIDOS A KIKE'S PARTY</h1></center>
               <center> <a href="Paquete.php" class="btn btn-info">Paquetes</a>
                <a href="Salon.php" class="btn btn-danger">Salon</a>
                <a href="Empleado.php" class="btn btn-info">Empleado</a>
                <a href="Cliente.php" class="btn btn-danger">Cliente</a>
                <a href="Jornada.php" class="btn btn-info">Jornada</a>
                <a href="Cuadrilla.php" class="btn btn-danger">Cuadrilla</a>
                <a href="Evento.php" class="btn btn-info">Evento</a>
                        </center>
                        
                                     
                                    
                                
                        </div>
                        </div>
            
    </body>
</html>