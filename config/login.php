<?php
    $user = $_POST['user'];
    $password = $_POST['password'];
    $nsesion = 0;
    if($user == "admin_RRP" && $password == "ES1921023412"){
        header("Location: ../pages/RRPAdminHome.html");
    }else if($user == "mostrador_RRP" && $password == "ES1921023412"){
        header("Location: ../pages/RRPHome.html");
    }else{
        header("Location: ../index.php?error=El usuario no existe");
    }
?>