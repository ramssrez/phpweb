<?php
    require '../config/conexionDB.php';
    $id=$_POST["id-cliente"];
    $name_cliente = $_POST['name-cliente'];
    $apellido_pa_cliente = $_POST['apellido-pa-cliente'];
    $apellido_ma_cliente = $_POST['apellido-ma-cliente'];
    $rfc_cliente = $_POST['rfc-cliente'];
    $curp_cliente = $_POST['curp-cliente'];
    $nacimiento_cliente = $_POST['nacimiento-cliente'];
    $sexo = $_POST['sexoCliente'];
    $estado = $_POST['estadoCliente'];

    $sqlClienteUpdate= "UPDATE tblcliente SET nombre='$name_cliente', ap_paterno='$apellido_pa_cliente', ap_materno='$apellido_ma_cliente',curp='$curp_cliente', rfc='$rfc_cliente', 
    fecha_nacimiento = '$nacimiento_cliente', id_estado='$estado', id_sexo = '$sexo' WHERE (id_cliente = '$id');";
    
    if(mysqli_query($conn,$sqlClienteUpdate)){
        echo "Si se actualizo";
        header("Location: ../pages/RRPCRUDCliente.php");
    }else{
        echo "No se actualizo";
        echo "<script>alert('No se pudo actualizar el registro')</script>";
    } 
    
    mysqli_close($conn);
?>
