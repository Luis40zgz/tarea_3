<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome_free/css/all.min.css">
    <title>Despliegue</title>
</head>
<body>
    <header>
    <div class="fondo">
            <div class="logo">
                <p class="title-logo"><span class="relleno">*:</span>Retr <span>o</span> Game</p>
                <div class="img-logo"><img src="./img/mario.png" alt="Super Mario"></div>
            </div>
        </div>
        <nav class="main-menu">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./contenido.php">Contenido</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="#">
            <fieldset>
                <legend>Contacto</legend>
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
                <label for="subject">Asunto:</label>
                <input type="text" name="subject" id="subject">
                <label for="message">Mensaje:</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                <button type="submit">Enviar</button>
                <button type="reset">Borrar</button>
            </fieldset>
        </form>
    </main>
    <footer class="main-footer">
    <div class="footer-sections">
        <section>
            <h2>Links de interes</h2>
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="">Mapa Web</a></li>
                <li><a href="">Politica de privacidad y coockies</a></li>
                <li><a href="">Contacto</a></li>
            </ul>
            <div class="redes">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-square-twitter"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
        </section>
        <section class="map">
            <h2>Donde estamos</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2981.5082870297606!2d-0.9253784849316529!3d41.64475877924133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd596b22f6b9f321%3A0xd6fc91a106797562!2sCPIFP%20Los%20Enlaces!5e0!3m2!1ses!2ses!4v1676534462091!5m2!1ses!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        </div>
        <script href="./node_modules/@fortawesome/fontawesome-free/js/all.min.js"></script>   
    </footer>
</body>
</html>