<?php 
    if(isset($_POST['submit-actor'])){
        $name_actor = $_POST['name-actor'];
        $apellido_pa_actor = $_POST['apellido-pa-actor'];
        $apellido_ma_actor = $_POST['apellido-ma-actor'];
        $nacionalidad_actor = $_POST['nacionalidad-actor'];
        $nacimiento_actor = $_POST['nacimiento-actor'];
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/styles.css">
        <title>Cine Puebla</title>
    </head>
    <body class="home">
        <?php
            include("../componentes/RRPNavegacionAdmin.php");
        ?>
        <div class="contenedor-table-crud">
            <div class="contenedor-crud">
                <h2>Registro de Actor</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="form-login" id="form-login" method="post">
                    <div class="elemento">
                        <label for="name-actor">Nombre</label>
                        <input type="text" id="name-actor" name="name-actor">
                    </div>
                    <div class="elemento">
                        <label for="apellido-pa-actor">Apellido Paterno</label>
                        <input type="text" id="apellido-pa-actor" name="apellido-pa-actor">
                    </div>
                    <div class="elemento">
                        <label for="apellido-ma-actor">Apellido Materno</label>
                        <input type="text" id="apellido-ma-actor" name="apellido-ma-actor" >
                    </div>
                    <div class="elemento">
                        <label for="nacionalidad-actor">Nacionalidad</label>
                        <input type="text" id="nacionalidad-actor" name="nacionalidad-actor">
                    </div>
                    <div class="elemento">
                        <label for="nacimiento-actor">Fecha de nacimiento del actor</label>
                        <input type="date" id="nacimiento-actor"  name="nacimiento-actor">
                    </div>
                    <?php
                        include("../config/validarCampos.php");
                    ?>
                    <div class="elemento">
                        <input id="btn-agregar" type="submit" name= "submit-actor" value="Agregar">
                    </div>
                </form>
            </div>
            <div class="table-crud">
                <h2>Lista de actores</h2>
                <table>
                    <thead>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Apellido P.</th>
                        <th>Apellido M.</th>
                        <th>Nacionalidad</th>
                        <th>F. Nacimiento</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Leonardo</td>
                            <td>Di</td>
                            <td>Caprio</td>
                            <td>EUA</td>
                            <td>15/08/1980</td>
                            <td>
                                <button id="btn-actualizar">Actualizar</button>
                            </td>
                            <td>
                                <button id="btn-eliminar">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Leonardo</td>
                            <td>Di</td>
                            <td>Caprio</td>
                            <td>EUA</td>
                            <td>15/08/1980</td>
                            <td>
                                <button id="btn-actualizar">Actualizar</button>
                            </td>
                            <td>
                                <button id="btn-eliminar">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Leonardo</td>
                            <td>Di</td>
                            <td>Caprio</td>
                            <td>EUA</td>
                            <td>15/08/1980</td>
                            <td>
                                <button id="btn-actualizar">Actualizar</button>
                            </td>
                            <td>
                                <button id="btn-eliminar">Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <footer class="footer">
            <div class="footer-links">
                <p>RRP-DPW1-noviembre/2023</p>
                <a href="RRPAcercaNosotros.html">Acerca de nosotros</a>
                <a href="RRPTerminosCondiciones.html">Términos y condiciones</a>      
                <a href="RRPAvisoPrivacidad.html">Aviso de Privacidad</a>          
            </div>
        </footer>
    </body>
</html>