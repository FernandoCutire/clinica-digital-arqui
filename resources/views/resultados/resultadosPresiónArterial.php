<?php

include('../includes/header.php');
include('../includes/pie_pag.php');
include('../../../app/Models/Paciente.php');

encabezado();
?>

<?php

$paciente = new Paciente();
$paciente->setPresionSistolica($_POST['pSistolica']);
$paciente->setPresionDiastolica($_POST['pDiastolica']);
$paciente->calcularPresionArterial($paciente->getPresionSistolica(), $paciente->getPresionDiastolica());
?>
<html  data-dark>
<div class="title_result">Hola,  <?php
        
        // Setear las cookies
        setcookie('nombre', "Aurelio");
        setcookie('apellido', "Jímenez");
        echo "" .$_COOKIE['nombre'] . " " . $_COOKIE['apellido'] ;
        ?> Tu Resultado Categoría de Presión Arterial es:</div>

        
    <section class="section_resultado"  data-dark>
        <div class="respuestas" data-dark><h2>Según lo indicado su estado es:
                <span class="persona" data-dark>
                    <?php echo $paciente->getPresionArterial() . " ", " " ?>
                </span>
            </h2>
        </div>


        <div class="respuestas" data-dark><h2>Su presión Sistólica marcó:
                <span class="persona" data-dark>
                    <?php echo $paciente->getPresionSistolica() . " ", " mg/Hg" ?>
                </span>
            </h2>
        </div>

        <div class="respuestas" data-dark><h2> Su presión Diastólica marcó:
                <span class="persona" data-dark>
                    <?php echo $paciente->getPresionDiastolica() . " ", " mg/Hg" ?>
                </span>
            </h2>
        </div>

        <a class="btn-volver" href="../../views/presionArterial/index.php">Regresar al formulario</a>

    </section>


<?php
pie();
?>