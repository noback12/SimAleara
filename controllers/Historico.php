<?php 

// controllers/Historico.php
require '../fw/fw.php';
require '../models/categorias.php';
require '../views/Historico.php';
require '../views/VerHistorico.php';


//Hablo con categorias que es un modelo y llamo a un metodo que es getTodos que devuelve todos
$c = new Categorias();
$todas = $c->getTodos();

if(isset($_GET['sector'],$_GET['select'])){
    $todas=$c->verHistorico($_GET['select']);
    $v = new VerHistorico();
    $v->categorias = $todas;
}else{
    //Vista Formulario Historico 
    $v = new Historico();
    $v->categorias = $todas;

}


$v->render();