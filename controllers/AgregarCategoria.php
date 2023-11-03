<?php 

// controllers/AgregarCategoria.php
require '../fw/fw.php';
require '../models/Categorias.php';
require '../models/Sector.php';
require '../models/Fechas.php';
require '../models/Sueldo_Basico.php';
require '../models/No_Remunerativo.php';
require '../views/AgregarCategoria.php';
require '../views/ListaCategorias.php';


//LLamo a sector para que me muestre los sectores donde se puede agregar la nueva categoria
$c = new Categorias();
$s = new sector();
if(isset($_GET['descripcion'],$_GET['fallo'] ,$_GET['sector'],$_GET['anio'],$_GET['mes'],$_GET['basico'],$_GET['NoRemunerativo'])){
    
    //Si no existe creo la categoria
    if($c->buscarIdCategoria($_GET['descripcion'] ,$_GET['sector'])==0){
        $c->agregarCategoria($_GET['descripcion'],$_GET['fallo'],$_GET['sector']);
        $f = new Fechas();
        $año =$_GET['anio'];
        $mes =$_GET['mes'];
        //esta funcion devuelve el id que encuentre o crea una fecha y devuelve el nuevo id
        $fechaN = $f->agregarFecha($año,$mes);
        $categ= $c->buscarIdCategoria($_GET['descripcion'] ,$_GET['sector']);
        
        $sb= new Sueldo_Basico();
        $sb->agregarUnSueldoBasico($_GET['basico'],$categ,$fechaN );

        $nr= new No_Remunerativo();
        $nr->agregarUnNoRemunerativo("Inicio Categoria",$_GET['NoRemunerativo'],$fechaN ,$categ);
   
    }
    
   
    //Si cree voy a lista de categorias a ver que se agrego 
    header("Location: Lista-Categorias");
}else{
    $sectores = $s->getSector();
    //Vista AgregarCategoria 
    $v = new AgregarCategoria();
    $v->sector = $sectores;
}
$v->render();