<?php 

// controllers/ActualizarSueldo.php
require '../fw/fw.php';
require '../models/Categorias.php';
require '../models/Sector.php';
require '../models/Fechas.php';
require '../models/Sueldo_Basico.php';
require '../models/No_Remunerativo.php';
require '../views/ActualizarSueldo.php';

$f = new Fechas();
$c = new Categorias();
$s = new sector();


if(isset($_GET['sector'],$_GET['anio'] , $_GET['mes'],$_GET['aniof'],$_GET['mesf'],$_GET['monto'])){


    //Asigno la categoria
    if(isset($_GET['select1'])){
       $Id_Cat=$_GET['select1'];
    }else{
        $Id_Cat=$_GET['select2'];
    }
           
    //var_dump($fechaC);
    $sb= new Sueldo_Basico();
    //header("Location: Lista-Comunicados");

    // Obtén los valores seleccionados para el año y el mes inicial
    $anioInicio = $_GET['anio'];
    $mesInicio = $_GET['mes'];

    //Busco o agrego la fecha
    $f = new Fechas();
    
    // Obtén los valores seleccionados para el año y el mes final
    $anioFin = $_GET['aniof'];
    $mesFin = $_GET['mesf'];

    // Crea objetos de fecha inicial y final
    $fechaInicio = new DateTime($anioInicio . '-' . $mesInicio . '-01');
    $fechaFin = new DateTime($anioFin . '-' . $mesFin . '-01');

    // Itera sobre cada mes y llama a la función deseada
    while ($fechaInicio <= $fechaFin) {
        $mesActual = $fechaInicio->format('m');
        $anioActual = $fechaInicio->format('Y');

        //esta funcion devuelve el id que encuentre o crea una fecha y devuelve el nuevo id
        $fId = $f->agregarFecha($anioActual,$mesActual);
       
        //Si eligieron NO remunerativo
        if(isset($_GET['tipoSueldo'])  && $_GET['tipoSueldo'] =='NoREMUN'){
            $nr= new No_Remunerativo();
           
            //Si es para todo el sector
            if(isset($_GET['general'])){
                $catXSector = $c->getTodasSector($_GET['sector']);
                //Por cada categoria en el sector itero dentro de cada vuelta
                foreach($catXSector as $cxs){
                    $nr->agregarUnNoRemunerativo(  $_GET['nombre'],$_GET['monto'],$fId, $cxs['Id_Categoria']);    
                }
                
            }else{//Si es para una unica categoria
           $nr->agregarUnNoRemunerativo(  $_GET['nombre'],$_GET['monto'],$fId,$Id_Cat);
            }
           $nr->limpiarNoRemunerativos() ;     

      
        }else{// SI no agrego el basico por cada mes que itero 
            
            $sb->agregarUnSueldoBasico($_GET['monto'],$Id_Cat,$fId );
        }
        
        // Agrega 1 mes a la fecha de inicio
        $fechaInicio->modify('+1 month');
    }
    $sectores = $s->getTodos();
    //Vista AgregarCategoria 
    $v = new ActualizarSueldo();
    $v->sector = $sectores;
}else{
    $sectores = $s->getTodos();
    //Vista AgregarCategoria 
    $v = new ActualizarSueldo();
    $v->sector = $sectores;
}
$v->render();