<?php
    $conn = new mysqli("localhost:3308","root","","db_peliculas_puebla");
    //$conn = new mysqli("localhost:3306","root","admin","db_peliculas_puebla");
    //$conn = new mysqli("localhost","id21515347_admin_cine_puebla","Es1921023412*","id21515347_db_peliculas_puebla");

    if($conn->connect_error){
        die("Error en la conexión".$conn->connect_error);
    }
?>