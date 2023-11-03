<?php 

// controllers/AgregarComunicado.php
require '../fw/fw.php';
require '../models/Comunicados.php';
require '../models/Sector.php';
require '../models/Fechas.php';
require '../views/AgregarComunicado.php';


$c = new Comunicados();
$s = new Sector();

if(isset($_GET['titulo'],$_GET['fileName'] , $_GET['sector'],$_GET['anio'],$_GET['mes'])){
    
    //Busco o agrego la fecha
    $f = new Fechas();
    $año =$_GET['anio'];
    $mes =$_GET['mes'];
    $fechaC = $f->agregarFecha($año,$mes);
    var_dump($fechaC);
    //Agrego el comunicado
    $c->agregarComunicado( $_GET['titulo'] ,$_GET['fileName'] , $_GET['sector'],$fechaC );

   
    //Si cree voy a lista de categorias a ver que se agrego 
    header("Location: Lista-Comunicados");
}else{
    $sectores = $s->getSector();
    //Vista AgregarCategoria 
    $v = new AgregarComunicado();
    $v->sector = $sectores;
}
$v->render();