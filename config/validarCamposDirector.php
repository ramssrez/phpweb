<?php
    if(validarCampos()){
        echo "<p class='succesful'>*Datos enviados correctamente</p>";
    }
    function validarCampos(){
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
        return true;  
        }
    }
?>