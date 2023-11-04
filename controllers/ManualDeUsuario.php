<?php 

    // controllers/ManualDeUsuario.php
    require '../fw/fw.php';
    require '../models/Comunicados.php';
    require '../views/ManualDeUsuario.php';


    $c = new Comunicados();
    $todos = $c->getTodos();


    //Vista ManualDeUsuario
    $v = new ManualDeUsuario();
    $v->comunicados = $todos;
    $v->render();
?>