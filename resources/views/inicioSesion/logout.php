<?php
    session_start();

    if(!empty($_SESSION['usuario'])) {
        session_unset();
        session_destroy();
        echo "Sesión finalizada";
    }

?>