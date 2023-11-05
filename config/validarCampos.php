<?php
    if(validarCampos()){
        echo "<p class='succesful'>*Datos enviados correctamente</p>";
    }
    function validarCampos(){
        if(isset($_POST['submit-actor'])){
            $name_actor = $_POST['name-actor'];
            $apellido_pa_actor = $_POST['apellido-pa-actor'];
            $apellido_ma_actor = $_POST['apellido-ma-actor'];
            $nacionalidad_actor = $_POST['nacionalidad-actor'];
            $nacimiento_actor = $_POST['nacimiento-actor'];
            if(empty($name_actor)){
                echo "<p class='error'>*El campo nombre del actor esta vacio</p>";
                return false;
            }
            if(!isValid($name_actor)){
                echo "<p class='error'>*El campo nombre no debe de contener números ni caracteres especiales</p>";
                return false;
            }
            if(empty($apellido_pa_actor)){
                echo "<p class='error'>*El campo apellido paterno del actor esta vacio</p>";
                return false;
            }
            if(!isValid($apellido_pa_actor)){
                echo "<p class='error'>*El campo apellido no debe de contener números ni caracteres especiales</p>";
                return false;
            }
            if(empty($apellido_ma_actor)){
                echo "<p class='error'>*El campo apellido materno del actor esta vacio</p>";
                return false;
            }
            if(!isValid($apellido_ma_actor)){
                echo "<p class='error'>*El campo apellido no debe de contener números ni caracteres especiales</p>";
                return false;
            }
            if(empty($nacionalidad_actor)){
                echo "<p class='error'>*El campo de nacionalidad del actor esta vacio</p>";
                return false;
            }
            if(!isValid($nacionalidad_actor)){
                echo "<p class='error'>*El campo nacionalidad no debe de contener números ni caracteres especiales</p>";
                return false;
            }
            if(empty($nacimiento_actor)){
                echo "<p class='error'>*El campo de nacimiento del actor esta vacio</p>";
                return false;
            }
            if(!isValidDate($nacimiento_actor)){
                echo "<p class='error'>*El formato de fecha no es el correcto yyyy-mm-dd</p>";
                return false;
            }
            return true;
        }
    }
    function isValidDate($date){
        $date_arr = explode('-', $date);
        if(count($date_arr) == 3 && checkdate($date_arr[1],$date_arr[2],$date_arr[0])){
            return true;
        }
    }
    function isValid($text){
        $pattern = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";
        return preg_match($pattern, $text);
    }
?>