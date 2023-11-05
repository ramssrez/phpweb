<?php 
    if(isset($_POST['submit-director'])){
        $name_director = $_POST['name-director'];
        $apellido_pa_director = $_POST['apellido-pa-director'];
        $apellido_ma_director = $_POST['apellido-ma-director'];
        $nacionalidad_director = $_POST['nacionalidad-director'];
        $nacimiento_director = $_POST['nacimiento-director'];
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
        <nav class="navbar">
            <ul>
                <li>
                    <a href="RRPAdminHome.php" id="logo">Cine Ciudad Puebla</a>
                </li>
                <li><a href="RRPCRUDPeliculas.php">CRUD Peliculas</a></li>
                <li><a href="RRPCRUDCategoria.php">CRUS Categorias</a></li>
                <li><a href="RRPCRUDDirector.php">CRUD Director</a></li>
                <li><a href="RRPCRUDActor.php">CRUD Actor</a></li>
                <li><a href="../config/logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>

        <div class="contenedor-table-crud">
            <div class="contenedor-crud">
                <h2>Registro de Director</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" action="#" name="form-login" id="form-login" method="post">
                    <div class="elemento">
                        <label for="name-director">Nombre</label>
                        <input type="text" id="name-director" name="name-director" >
                    </div>
                    <div class="elemento">
                        <label for="apellido-pa-director">Apellido Paterno</label>
                        <input type="text" id="apellido-pa-director" name="apellido-pa-director" >
                    </div>
                    <div class="elemento">
                        <label for="apellido-ma-director">Apellido Materno</label>
                        <input type="text" id="apellido-ma-director" name="apellido-ma-director" >
                    </div>
                    <div class="elemento">
                        <label for="nacionalidad-director">Nacionalidad</label>
                        <input type="text" id="nacionalidad-director" name="nacionalidad-director" >
                    </div>
                    <div class="elemento">
                        <label for="nacimiento-director">Fecha de nacimiento-actor</label>
                        <input type="date" id="nacimiento-director" name="nacimiento-director" >
                    </div>
                    <?php
                        include("../config/validarCampos.php");
                    ?>
                    <div class="elemento">
                        <input id="btn-agregar" type="submit" name= "submit-director" value="Agregar">
                    </div>
                </form>
            </div>
            <div class="table-crud">
                <h2>Lista de directores</h2>
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