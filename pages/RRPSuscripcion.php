<?php
    session_start();
    if($_SESSION['user']){
        $client = $_SESSION['user'];
    }
    else{
    header("Location: ../index.php");
        die();
    }
?>
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
                <h2>Registro de suscripción</h2>
                <form action="" name="form-categoria" id="form-suscripcion" method="post">
                    <div class="elemento">
                        <label for="name-categoria">Tipo</label>
                        <input type="text" id="name-categoria" name="tipo-suscripcion">
                    </div>
                    <div class="elemento">
                        <label for="numero-tarjeta">Número de tarjeta</label>
                        <input type="number" id="numero-tarjeta" name="numero-tarjeta">
                    </div>
                    <div class="elemento">
                        <label for="banco-tarjeta">Banco de la tarjeta</label>
                        <input type="text" id="banco-tarjeta" name="banco-tarjeta">
                    </div>
                    <div class="elemento">
                        <label for="precio-pagar">Precio a pagar</label>
                        <input type="number" id="precio-pagar" name="precio-pagar">
                    </div>
                    <div class="elemento">
                        <label for="fecha-tarjeta">Fecha tarjeta MM/AA</label>
                        <input type="text" id="fecha-tarjeta" name="fecha-tarjeta">
                    </div>
                    <div class="elemento">
                        <label for="fecha-tarjeta">CVV</label>
                        <input type="text" id="fecha-tarjeta" name="fecha-tarjeta">
                    </div>
                    <div class="elemento">
                        <input id="btn-agregar" name= "submit-category" type="submit" value="Agregar">
                    </div>
                </form>
            </div>
            <div class="table-crud">
                <h2>Lista de clientes</h2>
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