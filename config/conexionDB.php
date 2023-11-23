<?php
    //$conn = new mysqli("localhost:3308","root","","db_cinema");
    $conn = new mysqli("localhost:3306","root","admin","db_peliculas_puebla");
    if($conn->connect_error){
        die("Error en la conexión".$conn->connect_error);
    }
?>