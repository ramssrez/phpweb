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
                    <a href="RRPHome.php" id="logo">Cine Ciudad Puebla</a>
                </li>
                <li><a href="RRPHome.php">Inicio</a></li>
                <li><a href="RRPPeliculas.html">Todas las Películas</a></li>
                <li><a href="RRPPeliculasVistas.html">Películas Vistas</a></li>
                <li><a href="../config/logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
        <h1 class="title-general">Bienvenido: <?php echo $client; ?> </h1>
        <div class="image-container">
            <div class="image-galery">
                <img src="../images/12horas.jpeg" alt="Doce horas para sobrevivir">
                <img src="../images/chicaspesadas.jpeg" alt="Chicas Pesadas">
                <img src="../images/elhijodechucky.jpeg" alt="El hijo de chucky">
                <img src="../images/guerranovias.jpeg" alt="Guerra de Novias">
                <img src="../images/jovenesbrujas.jpeg" alt="Jovenes Brujas">
                <img src="../images/miPrimerBeso.jpeg" alt="Mi primer beso">
                <img src="../images/posdatateamo.jpeg" class="img-fluid rounded-top" alt="Posdata Te Amo">
                <img src="../images/sherk.jpeg" alt="Sherk">
                <img src="../images/sherk2.jpeg" alt="Sherk 2">
                <img src="../images/sherk3.jpeg" alt="Sherk 3">
                <img src="../images/supercool.jpeg" alt="Super Cool">
                <img src="../images/ylasrubias.jpeg" alt="Donde están las Rubias">
            </div>
        </div>
        <div class="image-container">
            <div class="image-galery">
                <img src="../images/12horas.jpeg" alt="Doce horas para sobrevivir">
                <img src="../images/chicaspesadas.jpeg" alt="Chicas Pesadas">
                <img src="../images/elhijodechucky.jpeg" alt="El hijo de chucky">
                <img src="../images/guerranovias.jpeg" alt="Guerra de Novias">
                <img src="../images/jovenesbrujas.jpeg" alt="Jovenes Brujas">
                <img src="../images/miPrimerBeso.jpeg" alt="Mi primer beso">
                <img src="../images/posdatateamo.jpeg" class="img-fluid rounded-top" alt="Posdata Te Amo">
                <img src="../images/sherk.jpeg" alt="Sherk">
                <img src="../images/sherk2.jpeg" alt="Sherk 2">
                <img src="../images/sherk3.jpeg" alt="Sherk 3">
                <img src="../images/supercool.jpeg" alt="Super Cool">
                <img src="../images/ylasrubias.jpeg" alt="Donde están las Rubias">
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