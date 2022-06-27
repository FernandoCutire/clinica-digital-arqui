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

    <section class="section_resultado">
        <h2 class="title_result">Resultado Índice de Masa Corporal IMC</h2>

        <div class="respuestas" data-dark><h2>Tu IMC es:
                <span class="persona" data-dark>
                    <?php echo $paciente->getImc() . " ", " " ?>
                </span>
            </h2>
        </div>

        <div class="respuestas" data-dark><h2>Tu Estado según tu IMC es:
                <span class="persona" data-dark>
                    <?php echo $paciente->getImcEstado() . " ", " " ?>
                </span>
            </h2>
        </div>

    </section>


<?php
pie();
?>