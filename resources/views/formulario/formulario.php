<?
include('../includes/header.php');
encabezado();
?>

<?php
function formulario()
{
    if (isset($_COOKIE['contador'])) {
        setcookie('contador', $_COOKIE['contador'] + 1);
        $mensaje = "Número de visitas: " . $_COOKIE['contador'];
    } else {
        setcookie('contador');
        $mensaje = "Bienvenido a nuestra página web";
    }

    ?>
    <html data-dark>

    </html>
    <div class="anuncio">
        <img id="personas-salud" src="../../imgs/personas-salud.png" alt="future">
        <p>🩸 <i>Conoceras tu presión Arterial</i></p>
        <p>🍏 <i>Calcula tu IMC</i></p>
        <p>💉<i>Calcula tu Glucosa</i></p>
    </div>

    <section class="section" data-dark>

        <div class="formulario" data-dark><br><br>
            <h2 class="title-form" data-dark>Escoja su opcion de preferencia</h2>
            <form method="POST" action="../resultados/resultados.php"><br>

<article class="menu-opciones">
 <a href="youtube.com">
    <figure class="card">
     <img src="../../imgs/imc-menu.png" alt="imc">

      <figcaption>IMC</figcaption>
    </figure>
</a>

<a href="youtube.com">
    <figure class="card">
      <img src="../../imgs/glucosa.png" alt="glucosa">
      <figcaption>Glucosa</figcaption>
    </figure>
</a>
    <a href="youtube.com">
    <figure class="card">
      <img src="../../imgs/presion.png" alt="presion">
      <figcaption>Presión Arterial</figcaption>
    </figure>
    </a>
</article>

                <br><br>
                <a class="btn-cookie" href="../../../app/Controllers/Cookie/borrarCookie.php">Borrar Cookie</a>
                <a class="btn-cookie" href="../inicio/borrar_contador.php">Reiniciar
                    Contador</a><br>


            </form>

            <div class="center">
                <p>
                    <?php echo $mensaje; ?>
                </p>
            </div>
        </div>


    </section>
    <script src="../../js/index.js" type="module"></script>


<?php } ?>
