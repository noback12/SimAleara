<?php
//Para cerrar la sesion , cierro y envio al  inicio
    session_start();
    unset($_SESSION["logueado"]);
    header("Location: inicio");
?>