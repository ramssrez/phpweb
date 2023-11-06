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
            session_start();
            if($_SESSION['user']){
                $client = $_SESSION['user'];
            }
            else{
                header("Location: ../index.php");
                die();
            }
        ?>
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
        <h1 class="title-general">Bienvenido: <?php echo $client; ?> </h1>
        <?php
            include("../pages/RRPFormPeliculas.php");
        ?>
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