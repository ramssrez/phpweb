<?php
    if(validarCamposActor() || validarCamposDirector()){
        echo "<p class='succesful'>*Datos enviados correctamente</p>";
    }
    function validarCamposActor(){
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
            if(!isValidText($name_actor,"Campo nombre")){
                return false;
            }
            if(empty($apellido_pa_actor)){
                echo "<p class='error'>*El campo apellido paterno del actor esta vacio</p>";
                return false;
            }
            if(!isValidText($apellido_pa_actor,"Campo apellido paterno")){
                return false;
            }
            if(empty($apellido_ma_actor)){
                echo "<p class='error'>*El campo apellido materno del actor esta vacio</p>";
                return false;
            }
            if(!isValidText($apellido_ma_actor,"Campo apellido materno")){
                return false;
            }
            if(empty($nacionalidad_actor)){
                echo "<p class='error'>*El campo de nacionalidad del actor esta vacio</p>";
                return false;
            }
            if(!isValidText($nacionalidad_actor,"Campo nacionalidad")){
                return false;
            }
            if(empty($nacimiento_actor)){
                echo "<p class='error'>*El campo de nacimiento del actor esta vacio</p>";
                return false;
            }
            if(!isValidDate($nacimiento_actor)){
                return false;
            }
            return true;
        }
    }
    function validarCamposDirector(){
        if(isset($_POST['submit-director'])){
            $name_director = $_POST['name-director'];
            $apellido_pa_director = $_POST['apellido-pa-director'];
            $apellido_ma_director = $_POST['apellido-ma-director'];
            $nacionalidad_director = $_POST['nacionalidad-director'];
            $nacimiento_director = $_POST['nacimiento-director'];
            if(empty($name_director)){
                echo "<p class='error'>*El campo nombre del director esta vacio</p>";
                return false;
            }
            if(!isValidText($name_director,"Campo nombre")){
                return false;
            }
            if(empty($apellido_pa_director)){
                echo "<p class='error'>*El campo apellido paterno del director esta vacio</p>";
                return false;
            }
            if(!isValidText($apellido_pa_director,"Campo apellido paterno")){
                return false;
            }
            if(empty($apellido_ma_director)){
                echo "<p class='error'>*El campo apellido materno del directoresta vacio</p>";
                return false;
            }
            if(!isValidText($apellido_ma_director,"Campo apellido materno")){
                return false;
            }
            if(empty($nacionalidad_director)){
                echo "<p class='error'>*El campo de nacionalidad del director esta vacio</p>";
                return false;
            }
            if(!isValidText($nacionalidad_director,"Campo nacionalidad")){
                return false;
            }
            if(empty($nacimiento_director)){
                echo "<p class='error'>*El campo de nacimiento del director esta vacio</p>";
                return false;
            }
            if(!isValidDate($nacimiento_director)){
                return false;
            }
            return true;  
        }
    }
    function isValidDate($date){
        try{
            $date_arr = explode('-', $date);
            if(!is_numeric($date_arr[0]) || !is_numeric($date_arr[1]) || !is_numeric($date_arr[2])){
                throw new Exception("*Error: El formato de fecha no es el correcto yyyy-mm-dd");
            }
            if(count($date_arr) == 3 && checkdate($date_arr[1],$date_arr[2],$date_arr[0])){
                return true;
            }
        }catch(Exception $e){    
            echo "<p class='error'>" . $e->getMessage() . "</p>";
            return false;
        }
    }
    function isValidText($text,$name_campo){
        try{
            $pattern = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";
            if(!preg_match($pattern, $text)){
                throw new Exception("*Error: El campo no debe de contener números ni caracteres especiales; ".$name_campo);
            }
            return true;
        }catch(Exception $e){
            echo "<p class='error'>" . $e->getMessage() . "</p>";
            return false;
        }
    } 
?>