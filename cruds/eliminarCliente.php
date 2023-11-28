<?php
    require '../config/conexionDB.php';
    $id=$_GET['id'];
    $sqlDelate = "DELETE FROM tblcliente WHERE id_cliente=$id";
    
    if(mysqli_query($conn,$sqlDelate)){
        header("Location: ../pages/RRPCRUDCliente.php");
    }else{
        echo "<script>alert('No se pudo eliminar el registro')</script>";
    }  
    mysqli_close($conn);
?>