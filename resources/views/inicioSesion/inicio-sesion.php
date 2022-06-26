<!DOCTYPE html>
<html lang="es" data-dark>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="icon" href="../../imgs/horoscopo.png">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body data-dark>

<header class="header">
    <section class="container">

        <div class="logo">
            <a href="../inicio/inicio.php">
                <img class="horoscopo" src="../../imgs/horoscopo.png" alt="zodiac"><span> </span></a>
            <h1>Tu Horóscopo</h1>
        </div>
        <nav class="menu">
            <a href="../inicio/inicio.php">Inicio</a>
            <a href="https://doc.clickup.com/31045686/d/h/xke1p-283/8ec2db1806fa6a4" target="_blank">Signos
                Zodiacales</a>
            <a href="https://github.com/FernandoCutire/zodiaco-app/tree/master" target="_blank">Acerca de</a>
            <button class="scroll-top-btn hidden">&#11014;</button>
            <button class="dark-mode-btn">🌙</button>
        </nav>
    </section>
</header>


<section class="section" data-dark>

    <div class="formulario" data-dark><br><br>
        <h2 class="title-form" data-dark>Iniciar Sesion</h2>
        <form name="login" method="post" action="../idioma/seleccionIdiomas.php"><br>
            <label for="usuario">Usuario: </label>
            <input name="usuario" type="text" id="usuario"> <br><br>

            <label for="clave">Contraseña: </label>
            <input name="clave" type="password" id="clave"><br><br>

            <div class="center">
                <a>
                    <input name="enviar" type="submit" id="enviar" value="Enviar" class="sub"></a><br><br>
                <a href="segura.php" data-dark>PÁGINA SEGURA</a>
            </div>
        </form>
    </div>
</section>

<footer class="footer">
    <p>Creado por: <b>Fernando Cutire & Hellynger St Rose</b></p>
    <p>Arquitectura y Desarrollo de Aplicaciones Web</p>
    <p> Laboratorio 3</p>
    <p>Todos los derechos reservados <?php echo date("Y") ?> </p>
</footer>

<script src="../../js/index.js" type="module"></script>

</body>

</html>
