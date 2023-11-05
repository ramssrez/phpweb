<?php
    if(isset($_POST['submit-category'])){
        $name_category = $_POST['name-categoria'];
        if(empty($name_category)){
            echo "<p class='error'>*El campo esta vacio</p>";
        }else if(!isValid($name_category)){
            echo "<p class='error'>*El campo no debe de contener números ni caracteres especiales</p>";
        }else{
            echo "<p class='succesful'>*Datos enviados correctamente</p>";
        }
    }
    function isValid($text){
        $pattern = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";
        return preg_match($pattern, $text);
    }
?>