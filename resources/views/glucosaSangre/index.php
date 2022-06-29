<?php
include('../includes/header.php');
encabezado();
?>

<?php

    if (isset($_COOKIE['contadorGlucosa'])) {
        setcookie('contadorGlucosa', $_COOKIE['contadorGlucosa'] + 1);
        $mensaje = "Número de visitas: " . $_COOKIE['contadorGlucosa'];
    } else {
        setcookie('contadorGlucosa',1);
        $mensaje = "Bienvenido a nuestra página web";
    }
?>


<html data-dark>
<div class="title_result center">
        <?php
        
        // Setear las cookies
        setcookie('nombre', "Aurelio");
        setcookie('apellido', "Jímenez");
        echo "Bienvenido " .$_COOKIE['nombre'] . " " . $_COOKIE['apellido'] ;
        ?>
    </div>

<section class="section" data-dark>
<div class="anuncio" data-dark>
    <h1>Calculadora Glucosa en la sangre</h1>
    <p>Coloca la lectura tu glucómetro (mg/dL) e indica si lo tomaste en Ayunas o posterior a las comidas (posprandial)</p>
</div>
<img style="width: 250px;" src="../../imgs/glucosa.png" alt="imc">


<div class="formulario" data-dark>
    <h2 class="title-form">Conoce tu riesgo de tener diabetes </h2>

    <form method="POST" action="../resultados/resultadosDiabetes.php">

        <label for="glucometro">Lectura de Glucómetro</label>
        <input class="input-forms" style="width: 250px;" type="number" name="glucometro" id="glucometro" placeholder="Lectura de Glucómetro (mg/dL)" step=".01">

        <br>
        <br>

        <label for="horario">¿Cuándo te tomaste la lectura?</label>
        <select input-forms name="horario" id="horario">
            <option class="input-forms" value="Ayunas">Ayunas</option>
            <option class="input-forms" value="Posprandial">Posprandial (posterior a las comidas)</option>
        </select>

        <br>
        <br>
        <br>

        <div class="center">
            <input type="submit" name="enviado" value="Enviar" class="sub">
            <input type="reset" value="Borrar" class="del"><br><br>
        </div>

    </form>
    <br><br>
            </form>

            <div class="center">
                <p>
                    <?php echo $mensaje; ?>
                </p>
            </div>

    </section>
    <script src="../../js/index.js" type="module"></script>


</div>
</html>
<?php
include('../includes/pie_pag.php');
pie();
?>
