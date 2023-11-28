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
                        <label for="tipo-suscripcion">Tipo</label>
                        <input type="text" id="tipo-suscripcion" name="tipo-suscripcion">
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
                        <label for="cvv-tarjeta">CVV</label>
                        <input type="text" id="cvv-tarjeta" name="cvv-tarjeta">
                    </div>
                    <div class="elemento">
                        <label for="id-cliente">Id Cliente</label>
                        <input type="number" id="id-cliente" name="id-cliente" readonly>
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
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                            require '../config/conexionDB.php';
                            $sqlClienteRead = "SELECT id_cliente, nombre , ap_paterno, ap_materno FROM tblcliente
                                ORDER BY id_cliente ASC;";
                            $clientesRead = $conn->query($sqlClienteRead);
                        ?>
                        <?php
                            while($row_cliente = $clientesRead->fetch_assoc()){ ?>  
                                <tr>
                                    <td><?= $row_cliente["id_cliente"]?></td>
                                    <td><?= $row_cliente["nombre"]?></td>
                                    <td><?= $row_cliente["ap_paterno"]?></td>
                                    <td><?= $row_cliente["ap_materno"]?></td>       
                                    <td>
                                        <a onclick="selecionarCliente(<?= $row_cliente["id_cliente"]?>)" id="btn-actualizar">Seleccionar</a>
                                    </td>
                                </tr>  
                        <?php }?>
                        <?php
                            mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="../assets/JS/seleccionCliente.js"></script>
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