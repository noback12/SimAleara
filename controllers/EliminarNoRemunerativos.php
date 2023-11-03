<?php 

// controllers/EliminarNoRemunerativos.php
require '../fw/fw.php';
require '../models/No_Remunerativo.php';
require '../views/EliminarNoRemunerativos.php';

//Primero voy a ver todas las comunicado y selecciono de esas cual voy a borrar

$nr = new No_Remunerativo();
$todosNR = $nr->getTodos();

if(isset($_GET['NoRemunerativo'])){
   //Elimino el No remunerativo 
   $nr->EliminarNoRemunerativo($_GET['NoRemunerativo']);
   $nr->limpiarNoRemunerativos();
    //Voy a la lista de comunicados
    header("Location: BorrarNoRemunerativos");
}else{
    $v = new EliminarNoRemunerativos();
    $v->NoRemunerativo = $todosNR;
$v->render();
}