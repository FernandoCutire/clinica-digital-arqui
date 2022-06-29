<?php

include('../includes/header.php');
include('../includes/pie_pag.php');
include('../../../app/Models/Paciente.php');

encabezado();
?>

<?php

$paciente = new Paciente();
$paciente->setPeso($_POST['peso']);
$paciente->setEstatura($_POST['estatura']);
$paciente->calcularIMC($paciente->getPeso(), $paciente->getEstatura());
$paciente->calcularIMCEstado();
?>
<html data-dark>
<div class="title_result">Hola, <?php
        
        // Setear las cookies
        setcookie('nombre', "Aurelio");
        setcookie('apellido', "Jímenez");
        echo "" .$_COOKIE['nombre'] . " " . $_COOKIE['apellido'] ;
        ?> Tu Resultado Índice de Masa Corporal IMC es:</div>
    <section class="section_resultado" data-dark>
        

        <div class="respuestas" data-dark><h2>Tu IMC es:
                <span class="persona" data-dark>
                    <?php echo $paciente->getImc() . " ", " ⏲️" ?>
                </span>
            </h2>
        </div>

        <div class="respuestas" data-dark><h2>Tu Estado según tu IMC es:
                <span class="persona" data-dark>
                    <?php echo $paciente->getImcEstado() . " ", " " ?>
                </span>
            </h2>
        </div>
        <a class="btn-volver" href="../../views/IMC/index.php">Regresar al formulario</a>

    </section>


<?php
pie();
?>