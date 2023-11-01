<?php 

// controllers/listaComunicados.php
require '../fw/fw.php';
require '../models/Comunicados.php';
require '../views/ListaComunicados.php';


$c = new Comunicados();
$todos = $c->getTodos();


//Vista listaComunicados
$v = new ListaComunicados();
$v->comunicados = $todos;
$v->render();