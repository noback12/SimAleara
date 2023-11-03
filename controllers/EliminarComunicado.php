<?php 

// controllers/EliminarComunicado.php
require '../fw/fw.php';
require '../models/Comunicados.php';
require '../views/EliminarComunicado.php';

//Primero voy a ver todas las comunicado y selecciono de esas cual voy a borrar

$c = new Comunicados();
$todosComunicados = $c->getTodos();

if(isset($_GET['comunicado'])){
   //Elimino el comunicado 
    $c->EliminarComunicado($_GET['comunicado']);
   
    //Voy a la lista de comunicados
    header("Location: Lista-Comunicados");
}else{
    $v = new EliminarComunicado();
    $v->Comunicados = $todosComunicados;
$v->render();
}