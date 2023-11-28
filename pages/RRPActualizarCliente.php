<?php
    require '../config/conexionDB.php';
    $id=$_GET['id'];
    $sqlClienteRead = "SELECT c.id_cliente, c.nombre , c.ap_paterno, c.ap_materno,c.fecha_nacimiento,
        c.curp, c.rfc,  e.nombre AS nombre_estado, s.tipo AS tipo_sexo FROM tblcliente c 
        JOIN tblestado e ON c.id_estado = e.id_estado 
        JOIN tblsexo s ON c.id_sexo = s.id_sexo 
        WHERE c.id_cliente = $id;";
    $clienteRead = mysqli_query($conn,$sqlClienteRead);
    $row_cliente = mysqli_fetch_array($clienteRead);
    mysqli_close($conn);
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
                    <a href="../pages/RRPAdminHome.php" id="logo">Cine Ciudad Puebla</a>
                </li>
                <li><a href="../pages/RRPCRUDCliente.php">Regresar</a></li>
            </ul>
        </nav>
        <div class="contenedor-table-crud">
            <div class="contenedor-crud">
                <h2>Actualizar datos cliente</h2>
                <form action="../cruds/actualizarCliente.php" name="formCliente" id="formCliente" method="post">
                    <div class="elemento">
                        <input type="hidden" id="id-cliente" name="id-cliente" readonly value=<?php echo $row_cliente["id_cliente"]?>>
                    </div>
                    <div class="elemento">
                        <label for="name-cliente">Nombre</label>
                        <input type="text" id="name-cliente" name="name-cliente" value=<?php echo $row_cliente["nombre"]?>>
                    </div>  
                    <div class="elemento">
                        <label for="apellido-pa-cliente">Apellido Paterno</label>
                        <input type="text" id="apellido-pa-cliente" name="apellido-pa-cliente" value=<?php echo $row_cliente["ap_paterno"]?>>
                    </div>
                    <div class="elemento">
                        <label for="apellido-ma-cliente">Apellido Materno</label>
                        <input type="text" id="apellido-ma-cliente" name="apellido-ma-cliente" value=<?php echo $row_cliente["ap_materno"]?>>
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
                        <input type="date" id="nacimiento-cliente" name="nacimiento-cliente" value=<?php echo $row_cliente["fecha_nacimiento"]?>>
                    </div>
                    <div class="elemento">
                        <label for="curp-cliente">CURP</label>
                        <input type="text" id="curp-cliente"  name="curp-cliente" value=<?php echo $row_cliente["curp"]?>>
                    </div>
                    <div class="elemento">
                        <label for="rfc-cliente">RFC</label>
                        <input type="text" id="rfc-cliente" name="rfc-cliente" value=<?php echo $row_cliente["rfc"]?>>
                    </div>
                    <p id="error"></p>
                    <?php
                        include("../config/validarCampos.php");
                    ?>
                    <div class="elemento">
                        <input id="btn-agregar" type="submit" name= "submit-cliente-actualizar" value="Actualizar">
                    </div>
                    <script src="../assets/JS/validacionCurp.js"></script>
                </form>
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