<?php
    $conn = new mysqli("localhost:3308","root","","db_cinema");
    if($conn->connect_error){
        die("Error en la conexión".$conn->connect_error);
    }
?>