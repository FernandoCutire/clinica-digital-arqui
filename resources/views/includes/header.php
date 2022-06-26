<?php
function encabezado()
{
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clínica Digital</title>
        <link rel="icon" href="../../imgs/salud.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css">
        <link rel="stylesheet" href="../../css/style.css">
    </head>

    <body>
    <header class="header">
        <section class="container">
            <div class="logo">
                <a href="../inicio/inicio.php">
                    <img class="horoscopo" src="../../imgs/salud.png" alt="zodiac"><span> </span>
                </a>
                <h1>Clínica Digital</h1>
            </div>
            <nav class="menu">
                <a href="../inicio/inicio.php">Inicio</a>
                <a href="https://doc.clickup.com/31045686/d/h/xke1p-283/8ec2db1806fa6a4" target="_blank">Más información</a>
                <a href="https://github.com/FernandoCutire/clinica-digital-arqui/tree/master" target="_blank">Acerca de</a>
                <a href="../inicioSesion/inicio-sesion.php">Cerrar Sesion</a>

              

            </nav>
        </section>
    </header>


    <script src="../../js/index.js" type="module"></script>

    </body>
    </html>
<?php } ?>