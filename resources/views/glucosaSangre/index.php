<?php
include('../includes/header.php');
encabezado();
?>

<section class="section">
<div class="anuncio">
    <h1>Calculadora Glucosa en la sangre</h1>
    <p>Coloca la lectura tu glucómetro (mg/dL) e indica si lo tomaste en Ayunas o posterior a las comidas (posprandial)</p>
</div>


<div class="formulario" data-dark>
    <h2 class="title-form">Conoce tu riesgo de tener diabetes </h2>
    <form method="POST" action="../resultados/resultadosDiabetes.php">

        <label for="glucometro">Lectura de Glucómetro</label>
        <input type="number" name="glucometro" id="glucometro" placeholder="Lectura de Glucómetro (mg/dL)" step=".01">

        <br>
        <br>

        <label for="horario">¿Cuándo te tomaste la lectura?</label>
        <select name="horario" id="horario">
            <option value="Ayunas">Ayunas</option>
            <option value="Posprandial">Posprandial (posterior a las comidas)</option>
        </select>

        <br>
        <br>
        <br>

        <div class="center">
            <input type="submit" name="enviado" value="Enviar" class="sub">
            <input type="reset" value="Borrar" class="del"><br><br>
        </div>

    </form>


    </section>
    <script src="../../js/index.js" type="module"></script>


</div>
