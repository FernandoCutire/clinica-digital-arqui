<?php
include('../includes/header.php');
encabezado();
?>
<html  data-dark>>
<section class="section">
<div class="anuncio">
    <h1>Presión Arterial</h1>
    <p>Coloca la lectura tu Presión Sistólica (mg Hg) y Presión Diastólica (mg Hg)</p>
</div>

<img style="width: 250px;" src="../../imgs/presion.png" alt="imc">

<div class="formulario" data-dark>
    <h2 class="title-form">Conoce tu riesgo de presión alta</h2>
    <form method="POST" action="../resultados/resultadosPresiónArterial.php">

        <label for="pSistolica">Lectura de Presión Sistólica (mg/Hg)</label>
        <input class="input-forms" type="number" name="pSistolica" id="pSistolica" placeholder="Presión Sistólica (mg/Hg)" step=".01">

        <br>
        <br>


        <label for="pDiastolica">Lectura de Presión Diastólica (mg/Hg)</label>
        <input class="input-forms" type="number" name="pDiastolica" id="pDiastolica" placeholder="Presión Diastólica (mg/Hg)" step=".01">

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
    <?php
include('../includes/pie_pag.php');
pie();
?>

