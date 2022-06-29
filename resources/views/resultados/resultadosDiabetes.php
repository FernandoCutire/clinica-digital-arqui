<?php

include('../includes/header.php');
include('../includes/pie_pag.php');
include('../../../app/Models/Paciente.php');

encabezado();
?>

<?php

$paciente = new Paciente();
$paciente->setLecturaGlucometro($_POST['glucometro']);
$paciente->setLecturaHorario($_POST['horario']);
$paciente->calcularGlucosa($paciente->getLecturaGlucometro(), $paciente->getLecturaHorario());
?>
<html data-dark>
<div class="title_result" >Hola,  <?php
        
        // Setear las cookies
        setcookie('nombre', "Aurelio");
        setcookie('apellido', "Jímenez");
        echo "" .$_COOKIE['nombre'] . " " . $_COOKIE['apellido'] ;
        ?> Tu Resultado Lectura de Glucómetro es:</div>
    <section class="section_resultado" data-dark>
        
       
        <div class="respuestas" data-dark><h2>Según lo indicado su estado es:
                <span class="persona" data-dark>
                    <?php echo $paciente->getGlucosa() . " ", " " ?>
                </span>
            </h2>
        </div>


        <div class="respuestas" data-dark><h2>Su glucómetro marcó:
                <span class="persona" data-dark>
                    <?php echo $paciente->getLecturaGlucometro() . " ", " mg/dL 🩸" ?>
                </span>
            </h2>
        </div>

        <div class="respuestas" data-dark><h2>Se midió en un horario:
                <span class="persona" data-dark>
                    <?php echo $paciente->getLecturaHorario() . " ", " ⏰" ?>
                </span>
            </h2>
        </div>
        <a class="btn-volver" href="../../views/glucosaSangre/index.php">Regresar al formulario</a>

    </section>


<?php
pie();
?>