<?php
include('../includes/header.php');
encabezado();
?>
<html  data-dark>
<section class="section" data-dark>
<div class="anuncio">
    <h1>Calculadora Índice de Masa Corporal (IMC)</h1>
    <p>Coloca tu peso en kg y altura en metros</p>
</div>
 <img  src="../../imgs/imc-menu.png" alt="imc">

<div class="formulario" data-dark>
    <h2 class="title-form">Conoce tu IMC </h2>
    <form method="POST" action="../resultados/resultadosIMC.php">

        <label for="peso">Peso</label>
        <input class="input-forms"type="number" name="peso" id="peso" placeholder="Peso en kg" step=".01">

        <label for="estatura">Altura</label>
        <input class="input-forms" type="number" name="estatura" id="estatura" placeholder="Altura en metros" step=".01">

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
<?php
include('../includes/pie_pag.php');
pie();
?>