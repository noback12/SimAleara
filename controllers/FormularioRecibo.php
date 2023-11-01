<?php 

    // controllers/FormularioBingo.php
    require '../fw/fw.php';
    require '../models/Sector.php';
    require '../views/FormularioRecibo.php';


    $s = new sector();
    $todos = $s->getTodos();

    //Vista FormularioRecibo 
    $v = new FormularioRecibo();
    $v->sector = $todos;
    $v->render();
?>