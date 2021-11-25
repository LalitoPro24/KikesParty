<?php

include("conexion.php");
$con=conectar();

$idEvento=$_POST['idEvento'];
$fecha=$_POST['fecha'];
$idCuadrilla=$_POST['idCuadrilla'];
$idCiiente=$_POST['idCliente'];
$idPaquete=$_POST['idPaquete'];
$idSalon=$_POST['idSalon'];
$total=$_POST['total'];

$sql="UPDATE Evento SET  fecha='$fecha',idCuadrilla='$idCuadrilla',idCliente='$idCiiente',idPaquete='$idPaquete',idSalon='$idSalon', total='total' WHERE idEvento='$idEvento'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Evento.php");
    }
?>