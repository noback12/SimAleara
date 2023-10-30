<?php 

    // controllers/FormularioBingo.php
    require '../fw/fw.php';
    require '../models/Sector.php';
    require '../views/FormularioRecibo.php';


    //Hablo con Sector que es un modelo y llamo a un metodo que es getTodos que devuelve todos
    $s = new sector();
    $todos = $s->getTodos();

    //var_dump($todos);

    //Vista FormularioRecibo 
    $v = new FormularioRecibo();
    $v->sector = $todos;
    $v->render();
?>