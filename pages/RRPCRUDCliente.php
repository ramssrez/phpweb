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
                <h2>Registro de Cliente</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="form-login" id="form-login" method="post">
                    <div class="elemento">
                        <label for="name-cliente">Nombre</label>
                        <input type="text" id="name-cliente" name="name-cliente">
                    </div>
                    <div class="elemento">
                        <label for="apellido-pa-cliente">Apellido Paterno</label>
                        <input type="text" id="apellido-pa-cliente" name="apellido-pa-cliente">
                    </div>
                    <div class="elemento">
                        <label for="apellido-ma-cliente">Apellido Materno</label>
                        <input type="text" id="apellido-ma-cliente" name="apellido-ma-cliente" >
                    </div>
                    <div class="elemento">
                        <label for="rfc-cliente">RFC</label>
                        <input type="text" id="rfc-cliente" name="rfc-cliente">
                    </div>
                    <div class="elemento">
                        <label for="nacimiento-actor">CURP</label>
                        <input type="text" id="curp-cliente"  name="curp-cliente">
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
                <h2>Lista de clientes</h2>
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