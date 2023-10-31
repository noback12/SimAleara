<?php 

// controllers/listaCategorias.php
require '../fw/fw.php';
require '../models/Sector.php';
require '../views/MenuPrincipal.php';


//Hablo con categorias que es un modelo y llamo a un metodo que es getTodos que devuelve todos
$s = new Sector();
$todos = $s->getTodos();

//var_dump($todas);

//Vista MenuPrincipal 
$v = new MenuPrincipal();
$v->Sector = $todos;
$v->render();