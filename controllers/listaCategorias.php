<?php 

// controllers/listaCategorias.php
require '../fw/fw.php';
require '../models/Categorias.php';
require '../views/ListaCategorias.php';


//Hablo con categorias que es un modelo y llamo a un metodo que es getTodos que devuelve todos
$c = new Categorias();
$todas = $c->getTodos();

//var_dump($todas);

//Vista listaCategorias 
$v = new ListaCategorias();
$v->categorias = $todas;
$v->render();