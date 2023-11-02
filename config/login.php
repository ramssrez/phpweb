<?php
    $user = $_POST['user'];
    $password = $_POST['pass'];
    session_start();
    $_SESSION['user'] = $user;
    if($user == "admin_RRP" && $password == "ES1921023412"){
        header("Location: ../pages/RRPAdminHome.html");
    }else if($user == "mostrador_RRP" && $password == "ES1921023412"){
        header("Location: ../pages/RRPHome.php");
    }else{
        header("Location: ../index.php?error=1");
    }
?>