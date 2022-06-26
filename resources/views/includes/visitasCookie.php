<?php

function obtenerVisitasCookie() {
    if(isset($_COOKIE['contador'])){
        setcookie('contador', $_COOKIE['contador'] + 1);
         $mensaje = "Número de visitas: " . $_COOKIE['contador'];
    } else {
        setcookie('contador', 1);
        $mensaje = "Bienvenido a nuestra página web";
    }
    return $mensaje;
}


