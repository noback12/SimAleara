<?php 

// controllers/EliminarCategoria.php
require '../fw/fw.php';
require '../models/Sector.php';
require '../models/Categorias.php';
require '../views/EliminarCategoria.php';
require '../views/ListaCategorias.php';

//Primero voy a ver todas las categorias y selecciono de esas cual voy a borrar

$s = new sector();
$c = new Categorias();
$todos = $s->getTodos();

if(isset($_GET['categorias'])){
   
    $c->EliminarCategoria($_GET['categorias']);
   
    //Si borro voy a lista de categorias a comprobar 
    header("Location: Lista-Categorias");
}else{
    $v = new EliminarCategoria();
    $v->sector = $todos;
$v->render();
}