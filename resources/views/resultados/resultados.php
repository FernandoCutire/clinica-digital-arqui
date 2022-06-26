<?php

use Models\Persona;
use Models\SignoZodiacal;

include('../includes/header.php');
include('../includes/pie_pag.php');
include('../../../app/Models/Persona.php');
include('../../../app/Models/SignoZodiacal.php');

encabezado();
?>

<?php
$per = new Persona();
$signo = new SignoZodiacal();
$per->setNombre($_POST["nombre"]);
$per->setApellido($_POST["apellido"]);
$per->setDiaUsuario($_POST['dia']);
$per->setMesUsuario($_POST['mes']);
$per->setYearUsuario($_POST['anio']);
$signo->getZodiaco($per->getDiaUsuario(), $per->getMesUsuario())
?>
    <html data-dark></html>
    <section class="section_resultado" data-dark>
        <h2 class="title_result">RESULTADO ZODIACAL</h2>
        <img src="../../imgs/lecture.png" alt="lecture" style="width: 150px; height: 150px;">

        <div class="respuestas" data-dark><h2>Tu Nombre:
                <span class="persona" data-dark><?php echo $per->getNombre() . " ", " " . $per->getApellido(); ?></span>
            </h2></div>


        <div class="respuestas" data-dark><h2> Fecha de Nacimiento:

                <span class="persona" data-dark>
    <?php echo $per->getDiaUsuario() . " / ", " " . $per->getMesUsuario(), " / " . $per->getYearUsuario(); ?>
    </span></h2></div>

        <div class="respuestas" data-dark><h2>Tu edad es:
                <span class="persona" data-dark>
        <?php
        $per->calcularedad($per->getDiaUsuario(), $per->getMesUsuario(), $per->getYearUsuario());
        echo $per->getEdad();
        ?>
    </span></h2></div>

        <div class="respuestas" data-dark><h2>Tu Signo Zodiacal es:
                <span class="persona" data-dark>
        <?php echo $signo->getSignoZodiacal() ?><br><br>
        <?php echo $signo->getFechaLarga() ?>

    </span></h2></div>

        <div class="respuestas" data-dark>
    <span class="persona" data-dark>
        <img src="<?php echo $signo->getImgZodiaco() ?>" alt="Imagen zodiaco" height="90px" width="150px"/>
    </span></div>

        <div class="respuestas" data-dark>
            <h2>Lectura:
                <p class="persona--desc" data-dark>
                    <?php echo $signo->getLectura() ?>
                </p>
                </span></h2>
        </div>

        <div class="respuestas" data-dark><h2>Caballero del Zodiaco:
                <span class="persona" data-dark>
        <?php echo $signo->getNombreCaballero() ?>
    </span></h2></div>


        <div class="respuestas" data-dark>
    <span class="persona" data-dark>
        <img src="<?php echo $signo->getImagen() ?>" alt="Imagen del caballero" height="90px" width="150px"/>
    </span></div>

        <div class="respuestas" data-dark>
            <h2>Descripción Caballero
                <p class="persona--desc" data-dark>
                    <?php echo $signo->getDescCaballero() ?></p>
                </span></h2>
        </div>

        <a class="btn-volver" href="../inicio/inicio.php">Volver a inicio</a>

        <br>
        <br>

    </section>


    <script src="../../js/index.js" type="module"></script>
<?php
pie();
?>