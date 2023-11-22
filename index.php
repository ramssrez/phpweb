<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
        <title>Cine Puebla</title>
    </head>
    <body class="background-general">
        <a href="index.php">
            <svg viewBox="0 0 200 100">
                <text x="40%" y="50%" text-anchor="middle">Cine Ciudad Puebla</text>
            </svg>
        </a>
        <div class="contenedor">
            <h2>Login</h2>
            <?php
                if(isset($_GET['error']) && $_GET['error'] == 1 )
                {
                    echo "<p class='error'>El usuario no existe</p>";
                }
                if(isset($_GET['sesion']) && $_GET['sesion'] == 1 )
                {
                    echo "<p class='sesion'>Sesión cerrada correctamente</p>";
                }       
            ?>
            <form action="config/login.php" method="post" name="form-login" id="form-login">
                <div class="elemento">
                    <label for="usuario">Usuario</label>
                    <input type="text" id="usuario" name="user" required="true">
                </div>
                <div class="elemento">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="pass" required="true">
                </div>
                <div class="elemento">
                    <input type="submit" value="Iniciar Sesión">
                </div>
            </form>
        </div>
        <h1 class="title-general">Proximos estrenos en la plataforma</h1>
        <div class="contenedor-slider">
            <div class="botones-izq-der izq">
                &#60
            </div>
            <div class="slider-screen">
                <img id="imagen">
                <h3 id="textoPel">Nombre</h3>
                <p id="informacion"></p>
            </div>
            <div class="botones-izq-der der">
                &#62
            </div>
        </div>
        <script src="assets/JS/carrusel.js"></script>
        <footer class="footer">
            <div class="footer-links">
                <p>RRP-DPW1-noviembre/2023</p>
                <a href="pages/RRPAcercaNosotros.html">Acerca de nosotros</a>
                <a href="pages/RRPTerminosCondiciones.html">Términos y condiciones</a>      
                <a href="pages/RRPAvisoPrivacidad.html">Aviso de Privacidad</a>          
            </div>
        </footer>
    </body>
</html>