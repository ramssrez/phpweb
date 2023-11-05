<?php
    if(isset($_POST['submit-category'])){        
        $name_category = $_POST['name-categoria'];
        if(empty($name_category)){
            header("Location:  ../pages/RRPCRUDCategoria.php?error=2");
        }else if(!isValid($name_category)){
            header("Location:  ../pages/RRPCRUDCategoria.php?error=3");
        }else{
            header("Location:  ../pages/RRPCRUDCategoria.php?sussesful=1");
        }
    }
    if(isset($_POST['submit-actor'])){
        echo "Esto es el submit del actor";
    }
    function isValid($text){
        $pattern = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";
        return preg_match($pattern, $text);
    }
?>