<?php 

// controllers/MenuAdministradores.php
require '../fw/fw.php';
require '../models/Administradores.php';
require '../views/MenuAdministrador.php';

$adm = new Administradores();
session_start();
//Si inicie sesion acceso
if (isset($_SESSION['logueado'])) {
    //Vista Menu Administrados 
    $v = new MenuAdministrador();
    $v->render();
}
else {//Sino envio al formulario de inicio de sesion 
header("Location: InicioSesion");}