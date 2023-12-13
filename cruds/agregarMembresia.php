<?php
    require '../config/conexionDB.php';
    $id=$_POST["id-cliente"];
    $tipoSuscripcion=$_POST["tipo-suscripcion"];
    $numeroTarjeta=$_POST["numero-tarjeta"];
    $bancoTarjeta=$_POST["banco-tarjeta"];
    $precioPagar=$_POST["precio-pagar"];
    $cvvTarjeta=$_POST["cvv-tarjeta"];
    $mesFechaTarjeta = $_POST["mes-fecha-tarjeta"];
    $yearFechaTarjeta = $_POST["year-fecha-tarjeta"];
    $fechaTarjeta=$mesFechaTarjeta."/".$yearFechaTarjeta;
    $fechaSuscripcion=$_POST["fecha-suscripcion"];    
    $sqlMembresia = "INSERT INTO tblsuscripcion (tipo, numero_tarjeta, banco, precio, fecha_tarjeta,cvv, activo, id_cliente,fecha_registro)
        VALUES ('$tipoSuscripcion','$numeroTarjeta','$bancoTarjeta','$precioPagar','$fechaTarjeta','$cvvTarjeta','1','$id','$fechaSuscripcion')";
    if(mysqli_query($conn,$sqlMembresia)){
        echo "<script>alert('Se ha agregado una memebresia')</script>";
        header("Location: ../pages/RRPSuscripcion.php");
    }else{
        echo "<p class='error'>Error: No se enviaron los datos correctamente</p>";
    }  
    mysqli_close($conn);   
?>