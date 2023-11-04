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
                <h2>Registro de Categorias</h2>
                <form action="#" name="form-login" id="form-login">
                    <div class="elemento">
                        <label for="name-categoria">Nombre</label>
                        <input type="text" id="name-categoria" name="name-categoria" required="true">
                    </div>
                    <div class="elemento">
                        <input id="btn-agregar" type="submit" value="Agregar">
                    </div>
                </form>
            </div>
            <div class="table-crud">
                <h2>Lista de categorías</h2>
                <table>
                    <thead>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Terror</td>
                            <td>
                                <button id="btn-actualizar">Actualizar</button>
                            </td>
                            <td>
                                <button id="btn-eliminar">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Drama</td>
                            <td>
                                <button id="btn-actualizar">Actualizar</button>
                            </td>
                            <td>
                                <button id="btn-eliminar">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Romance</td>
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