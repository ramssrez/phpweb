<?php
    session_start();
    $user = $_POST['user'];
    $password = $_POST['pass'];
    $_SESSION['user'] = $user;
    if($user == "admin_RRP" && $password == "ES1921023412"){
        header("Location: ../pages/RRPAdminHome.php");
    }else if($user == "mostrador_RRP" && $password == "ES1921023412"){
        header("Location: ../pages/RRPHome.php");
    }else{
        header("Location: ../index.php?error=1");
    }
?>