<?php 

// controllers/Administradores.php
require '../fw/fw.php';
require '../models/Administradores.php';
require '../views/InicioSesion.php';

$a = new Administradores();
$todos = $a->getTodos();

//var_dump($todos);

//Vista InicioSesion 
$v = new InicioSesion();
$v->Administradores = $todos;
$v->render();