<?php
    require '../config/conexionDB.php';
    /*
    if(validarCamposActor() || validarCamposDirector() || validarCamposCategoria() || validartCamposPelicula() ||validarCamposCliente()){
        echo "<p class='succesful'>*Datos enviados correctamente</p>";
    }
    */
    if(validarCamposCliente()){        
        $sqlInsertCliente = "INSERT INTO tblcliente (nombre, ap_paterno, ap_materno, rfc, curp, 
            fecha_nacimiento, id_estado, id_sexo) VALUES ('$name_cliente', '$apellido_pa_cliente', 
            '$apellido_ma_cliente', '$rfc_cliente', '$curp_cliente', '$nacimiento_cliente', '$estado', '$sexo');
        ";
        if(mysqli_query($conn,$sqlInsertCliente)){
            echo "<p class='succesful'>*Datos enviados correctamente</p>";
        }else{
            echo "<p class='error'>Error: No se enviaron los datos correctamente</p>";
        }  
        mysqli_close($conn);
    }
    function validarCamposCliente(){
        if(isset($_POST['submit-cliente'])){
            $name_cliente = $_POST['name-cliente'];
            $apellido_pa_cliente = $_POST['apellido-pa-cliente'];
            $apellido_ma_cliente = $_POST['apellido-ma-cliente'];
            $rfc_cliente = $_POST['rfc-cliente'];
            $curp_cliente = $_POST['curp-cliente'];
            $nacimiento_cliente = $_POST['nacimiento-cliente'];
            $sexo = $_POST['sexoCliente'];
            $estado = $_POST['estadoCliente'];
            if(empty($name_cliente)){
                echo "<p class='error'>*El campo nombre del cliente esta vacio</p>";
                return false;
            }
            if(!isValidText($name_cliente,"Campo nombre")){
                return false;
            }
            if(empty($apellido_pa_cliente)){
                echo "<p class='error'>*El campo apellido paterno del cliente esta vacio</p>";
                return false;
            }
            if(!isValidText($apellido_pa_cliente,"Campo apellido paterno")){
                return false;
            }
            if(empty($apellido_ma_cliente)){
                echo "<p class='error'>*El campo apellido materno del cliente esta vacio</p>";
                return false;
            }
            if(!isValidText($apellido_ma_cliente,"Campo apellido materno")){
                return false;
            }
            if(empty($rfc_cliente)){
                echo "<p class='error'>*El campo RFC del cliente esta vacio</p>";
                return false;
            }
            if(!isValidateRFC($rfc_cliente,"Campo RFC")){
                return false;
            }
            if(empty($curp_cliente)){
                echo "<p class='error'>*El campo CURP del cliente esta vacio</p>";
                return false;
            }
            if(!isValidateCURP($curp_cliente,"Campo CURP")){
                return false;
            }
            if(empty($nacimiento_cliente)){
                echo "<p class='error'>*El campo de nacimiento del cliente esta vacio</p>";
                return false;
            }
            if(!isValidDate($nacimiento_cliente)){
                return false;
            }
            return true;
        }
    }
    function validartCamposPelicula(){
        if(isset($_POST['submit-pelicula'])){
            $name_pelicula = $_POST['name-pelicula'];
            $pais_pelicula = $_POST['pais-pelicula'];
            $sinopsis_pelicula = $_POST['sinopsis-pelicula'];
            $imagen_pelicula = $_POST['imagen-pelicula'];
            $year_pelicula = $_POST['year-pelicula'];
            $clasificacion_pelicula = $_POST['clasificacion-pelicula'];
            $categoria_pelicula = $_POST['categoria-pelicula'];
            $director_pelicula = $_POST['director-pelicula'];
            $actor_pelicula = $_POST['actor-pelicula'];
            if(empty($name_pelicula)){
                echo "<p class='error'>*El campo nombre de la pelicula esta vacio</p>";
                return false;
            }
            if(!isValidText($name_pelicula,"Campo nombre")){
                return false;
            }
            if(empty($pais_pelicula)){
                echo "<p class='error'>*El campo país de la pelicula esta vacio</p>";
                return false;
            }
            if(!isValidText($pais_pelicula,"Campo país")){
                return false;
            }
            if(empty($sinopsis_pelicula)){
                echo "<p class='error'>*El campo sinopsis de la pelicula esta vacio</p>";
                return false;
            }
            if(!isValidTextSinopsis($sinopsis_pelicula,"Campo sinopsis")){
                return false;
            }
            if(empty($imagen_pelicula)){
                echo "<p class='error'>*El campo imagen de la pelicula esta vacio</p>";
                return false;
            }
            if(empty($year_pelicula)){
                echo "<p class='error'>*El campo año de la pelicula esta vacio</p>";
                return false;
            }
            if(!isValidYear($year_pelicula,"Campo año")){
                return false;
            }
            if(empty($clasificacion_pelicula)){
                echo "<p class='error'>*El campo clasificación de la pelicula esta vacio</p>";
                return false;
            }
            if(!isValidText($clasificacion_pelicula,"Campo clasificación")){
                return false;
            }
            if(empty($categoria_pelicula)){
                echo "<p class='error'>*El campo categoría de la pelicula esta vacio</p>";
                return false;
            }
            if(!isValidText($categoria_pelicula,"Campo categoría")){
                return false;
            }
            if(empty($director_pelicula)){
                echo "<p class='error'>*El campo director de la pelicula esta vacio</p>";
                return false;
            }
            if(!isValidText($director_pelicula,"Campo director")){
                return false;
            }
            if(empty($actor_pelicula)){
                echo "<p class='error'>*El campo actor de la pelicula esta vacio</p>";
                return false;
            }
            if(!isValidText($actor_pelicula,"Campo actor")){
                return false;
            }
            return true;
        }
    }
    function validarCamposCategoria(){
        if(isset($_POST['submit-category'])){
            $name_category = $_POST['name-categoria'];
            if(empty($name_category)){
                echo "<p class='error'>*El campo categoría esta vacio</p>";
                return false;
            }
            if(!isValidText($name_category,"Campo categoría")){
                return false;
            }
            return true;
        }
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
    //Función que valida el RFC del clientes
    function isValidateRFC($text,$name_campo){
        //Uso de la sentención try/catch
        try{
            //Uso de la expresión regular, solo para admitir texto y números
            $pattern = "/^[a-zA-Z0-9]+$/";
            //Validacción para el caso de que el campo tenga caracteres especiales.
            if(!preg_match($pattern, $text)){
                //Excepción lanzada para el caso de que ingrese números o caracteres especiales
                throw new Exception("*Error: El campo no debe de contener caracteres especiales; ".$name_campo);
            }
            //Validación para el caso de que el texto ingresado sea exactamente igual a 13
            if(strlen($text) != 13){
                //Excepción lanzada para el caso de que el campo ingresado no sea de 13 caracteres
                throw new Exception("*Error: El campo debe de contener exactamente 13 caracteres; ".$name_campo);
            }
            return true;
        //Catch que atrapa las excepciónes generadas anteriormente
        }catch(Exception $e){  
            //Impresión del error en el html   
            echo "<p class='error'>" . $e->getMessage() . "</p>";
            return false;
        }
    }
    //Función que valida el CURP del cliente
    function isValidateCURP($text,$name_campo){
        //Uso de la sentención try/catch
        try{
            //Uso de la expresión regular, solo para admitir texto y números
            $pattern = "/^[a-zA-Z0-9]+$/";
            //Validacción para el caso de que el campo tenga caracteres especiales.
            if(!preg_match($pattern, $text)){
                //Excepción lanzada para el caso de que ingrese números o caracteres especiales
                throw new Exception("*Error: El campo no debe de contener caracteres especiales; ".$name_campo);
            }
            //Validación para el caso de que el texto ingresado sea exactamente igual a 18
            if(strlen($text) != 18){
                //Excepción lanzada para el caso de que el campo ingresado no sea de 18 caracteres
                throw new Exception("*Error: El campo debe de contener exactamente 18 caracteres; ".$name_campo);
            }
            return true;
        //Catch que atrapa las excepciónes generadas anteriormente
        }catch(Exception $e){
            //Impresión del error en el html    
            echo "<p class='error'>" . $e->getMessage() . "</p>";
            return false;
        }
    }
    //Función qué válida si la fecha ingresado correctamente con el formato yyyy-mm-dd
    function isValidDate($date){
        //Uso de la sentención try/catch
        try{
            //Descomposición de la fecha en dias, meses y años, en enteros
            $date_arr = explode('-', $date);
            //Validación para que lo ingresado sea en formato que se espera, y de tipo numerico
            if(!is_numeric($date_arr[0]) || !is_numeric($date_arr[1]) || !is_numeric($date_arr[2])){
                //Exepción lanzada para el caso de que no sea en formato correcto
                throw new Exception("*Error: El formato de fecha no es el correcto yyyy-mm-dd");
            }
            //Validación para el caso de que sea correcta la fecha se lance un true y en caso contrario se lance una excepción
            if(count($date_arr) == 3 && checkdate($date_arr[1],$date_arr[2],$date_arr[0])){
                return true;
            }else{
                //Exepción lanzada para el caso de que no sea en formato correcto
                throw new Exception("*Error: Ingresa una fecha correcta yyyy-mm-dd");
            }
        //Catch que atrapa las excepciónes generadas anteriormente
        }catch(Exception $e){    
            //Impresión del error en el html
            echo "<p class='error'>" . $e->getMessage() . "</p>";
            return false;
        }
    }
    //Función qué válida el ingreso solo de texto, con acentos
    function isValidText($text,$name_campo){
        //Uso de la sentención try/catch
        try{
            //Uso de la expresión regular, solo para admitir texto.
            $pattern = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";
            //Validacción para el caso de que el campo tenga texto.
            if(!preg_match($pattern, $text)){
                //Excepción lanzada para el caso de que ingrese números o caracteres especiales
                throw new Exception("*Error: El campo no debe de contener números ni caracteres especiales; ".$name_campo);
            }
            return true;
        //Catch que atrapa las excepciónes generadas anteriormente
        }catch(Exception $e){
            //Impresión del error en el html
            echo "<p class='error'>" . $e->getMessage() . "</p>";
            return false;
        }
    }
    //Función qué válida el ingreso de letras y algunos caracteres especiales como la comilla simple y el punto
    function isValidTextSinopsis($text,$name_campo){
        //Uso de la sentención try/catch
        try{
            //Uso de la expresión regular, solo para admitir texto, con algunos caracter especial
            $pattern = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ'.]+$/";
            //Validacción para el caso de que el campo solo tenga texto
            if(!preg_match($pattern, $text)){
                //Excepción lanzada para el caso de que ingrese números
                throw new Exception("*Error: El campo no debe de contener números; ".$name_campo);
            }
            return true;
        //Catch que atrapa las excepciónes generadas anteriormente
        }catch(Exception $e){
            //Impresión del error en el html
            echo "<p class='error'>" . $e->getMessage() . "</p>";
            return false;
        }
    }
    //Función qué válida si es un año ingresado correctamente con parametros
    function isValidYear($text,$name_campo){
        //Uso de la sentención try/catch
        try{
            //Uso de la expresión regular, solo para admitir números
            $pattern = "/^[0-9]+$/";
            //Validacción para el caso de que el campo solo tenga números
            if(!preg_match($pattern, $text)){
                //Excepción lanzada para el caso de que ingrese letras
                throw new Exception("*Error: El campo no debe de contener letras; ".$name_campo);
            }
            //Validación para que el campo no tenga valores menores a 1900
            if($text < 1900){
                //Exepción lanzada para el caso de que el campo ingresado sea mayor a 1900
                throw new Exception("*Error: El año no debe ser menor a 1900; ".$name_campo);
            }
            //Validación para que el campo no tenga valores mayores a 2024
            if($text > 2024){
                //Exepción lanzada para el caso de que el campo ingresado sea mayor a 2024
                throw new Exception("*Error: El año no debe ser mayor a 2024; ".$name_campo);
            }
            return true;
        //Catch que atrapa las excepciónes generadas anteriormente
        }catch(Exception $e){
            //Impresión del error en el html
            echo "<p class='error'>" . $e->getMessage() . "</p>";
            return false;
        }
    }
?>