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
<?php 
    if(isset($_POST['submit-cliente'])){
        $name_cliente = $_POST['name-cliente'];
        $apellido_pa_cliente = $_POST['apellido-pa-cliente'];
        $apellido_ma_cliente = $_POST['apellido-ma-cliente'];
        $rfc_cliente = $_POST['rfc-cliente'];
        $curp_cliente = $_POST['curp-cliente'];
        $nacimiento_cliente = $_POST['nacimiento-cliente'];
        $sexo = $_POST['sexoCliente'];
        $estado = $_POST['estadoCliente'];
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
                <h2>Registro de Cliente</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="formCliente" id="formCliente" method="post">
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
                        <label for="sexo">Sexo</label>
                        <select id="sexoCliente" name="sexoCliente">
                            <?php
                                require '../config/conexionDB.php';
                                $sqlSexoRead = "SELECT id_sexo, tipo FROM tblsexo";
                                $sexos = $conn->query($sqlSexoRead);
                            ?>
                            <?php
                                while($row_sexos = $sexos->fetch_assoc()){ ?>
                                    <option value="<?php echo $row_sexos["id_sexo"]; ?> ">
                                        <?= $row_sexos["tipo"]?>
                                    </option>    
                            <?php }?>
                            <?php
                                mysqli_close($conn);
                            ?>
                        </select>
                    </div>
                    <div class="elemento">
                        <label for="estado">Estado</label>
                        <select id="estadoCliente" name="estadoCliente">
                            <?php
                                require '../config/conexionDB.php';
                                $sqlEstadoRead = "SELECT id_estado, nombre, abreviacion FROM tblestado";
                                $estados = $conn->query($sqlEstadoRead);
                            ?>
                            <?php
                                while($row_estado = $estados->fetch_assoc()){ ?>
                                    <option value="<?php echo $row_estado["id_estado"]; ?> ">
                                        <?= $row_estado["nombre"]?>-<?= $row_estado["abreviacion"]?>
                                    </option>    
                            <?php }?>
                            <?php
                                mysqli_close($conn);
                            ?>
                        </select>
                    </div>
                    <div class="elemento">
                        <label for="nacimiento-cliente">Fecha de nacimiento del cliente</label>
                        <input type="date" id="nacimiento-cliente" name="nacimiento-cliente" >
                    </div>
                    <div class="elemento">
                        <label for="curp-cliente">CURP</label>
                        <input type="text" id="curp-cliente"  name="curp-cliente">
                    </div>
                    <div class="elemento">
                        <label for="rfc-cliente">RFC</label>
                        <input type="text" id="rfc-cliente" name="rfc-cliente">
                    </div>
                    <p id="error"></p>
                    <?php
                        include("../config/validarCampos.php");
                    ?>
                    <div class="elemento">
                        <input id="btn-agregar" type="submit" name= "submit-cliente" value="Agregar">
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
                        <th>F. Nacimiento</th>
                        <th>CURP</th>
                        <th>RFC</th>
                        <th>Estado</th>
                        <th>Sexo</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                            require '../config/conexionDB.php';
                            $sqlClienteRead = "SELECT c.id_cliente, c.nombre , c.ap_paterno, c.ap_materno,c.fecha_nacimiento,
                                c.curp, c.rfc,  e.nombre AS nombre_estado, s.tipo AS tipo_sexo FROM tblcliente c 
                                JOIN tblestado e ON c.id_estado = e.id_estado 
                                JOIN tblsexo s ON c.id_sexo = s.id_sexo;";
                            $clientesRead = $conn->query($sqlClienteRead);
                        ?>
                        <?php
                            while($row_cliente = $clientesRead->fetch_assoc()){ ?>
                                <tr>
                                    <td><?= $row_cliente["id_cliente"]?></td>
                                    <td><?= $row_cliente["nombre"]?></td>
                                    <td><?= $row_cliente["ap_paterno"]?></td>
                                    <td><?= $row_cliente["ap_materno"]?></td>
                                    <td><?= $row_cliente["fecha_nacimiento"]?></td>
                                    <td><?= $row_cliente["curp"]?></td>
                                    <td><?= $row_cliente["rfc"]?></td>
                                    <td><?= $row_cliente["nombre_estado"]?></td>
                                    <td><?= $row_cliente["tipo_sexo"]?></td>
                                    <td>
                                        <button id="btn-actualizar">Actualizar</button>
                                    </td>
                                    <td>
                                        <button id="btn-eliminar">Eliminar</button>
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
        <script src="../assets/JS/validacionCurp.js"></script>
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