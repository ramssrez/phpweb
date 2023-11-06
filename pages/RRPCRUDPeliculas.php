<?php 
    if(isset($_POST['submit-pelicula'])){
        $name_pelicula = $_POST['name-pelicula'];
        $pais_pelicula = $_POST['pais-pelicula'];
        $sinopsis_pelicula = $_POST['sinopsis-pelicula'];
        $imagen_pelicula = $_POST['imagen-pelicula'];
        $year_pelicula = $_POST['year-pelicula'];
        $clasificacion_pelicula = $_POST['clasificacion-pelicula'];
        $categoria_pelicula = $_POST['categoria-pelicula'];
        $director_pelicula = $_POST['director-pelicula'];
        $actor_pelicula = $_POST['actor-pelicula'];
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
        <?php
            include("../componentes/RRPFormPeliculas.php");
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