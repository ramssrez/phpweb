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
    if(isset($_POST['submit-category'])){
        $name_category = $_POST['name-categoria'];
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
                <h2>Registro de Categorias</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="form-categoria" id="form-categoria" method="post">
                    <div class="elemento">
                        <label for="name-categoria">Nombre</label>
                        <input type="text" id="name-categoria" name="name-categoria">
                    </div>
                        <?php
                            include("../config/validarCampos.php");
                        ?>
                    <div class="elemento">
                        <input id="btn-agregar" name= "submit-category" type="submit" value="Agregar">
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
                        <?php
                            require '../config/conexionDB.php';
                            $sqlCategoriaRead = "SELECT id_categoria, categoria FROM tblcategoria ORDER BY id_categoria ASC;";
                            $categoriaRead= $conn->query($sqlCategoriaRead);
                        ?>
                        <?php
                            while($row_categoria = $categoriaRead->fetch_assoc()){ ?>  
                                <tr>
                                    <td><?= $row_categoria["id_categoria"]?></td>
                                    <td><?= $row_categoria["categoria"]?></td>        
                                    <td>
                                        <a id="btn-actualizar" href="">Actualizar</a>
                                    </td>
                                    <td>
                                        <a id="btn-eliminar" href="">Eliminar</a>
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