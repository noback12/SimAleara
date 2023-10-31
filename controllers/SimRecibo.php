<?php 

    // controllers/SimRecibo.php
    //Muestro el recibo simulado , segun su sector 
    require '../fw/fw.php';
    require '../models/Sector.php';
    require '../models/Conceptos.php';
    require '../models/No_remunerativo.php';
    require '../views/SimRecibo.php';

    if(isset($_GET['sector'])){
        //Hablo con Sector que es el modelo y llamo al metodo getRecibo que junta todos los valores necesarios 
        $s = new sector();
        $con = new Conceptos();
        $NR= new No_Remunerativo();
        if(isset($_GET['select1'])){
            $recibo = $s->getRecibo($_GET['sector'], $_GET['select1'],$_GET['mes'],$_GET['anio']);
            $NRemun = $NR->getNo_remunerativos($_GET['select1'],$_GET['mes'],$_GET['anio']);
        }
        if(isset($_GET['select2'])){
            $recibo = $s->getRecibo($_GET['sector'], $_GET['select2'],$_GET['mes'],$_GET['anio']);
            $NRemun = $NR->getNo_remunerativos($_GET['select2'],$_GET['mes'],$_GET['anio']);
        }
        $concepts = $con->getConcepts($_GET['sector']);
        
        
        //var_dump($recibo);
        //var_dump($concepts);
        //var_dump($NRemun);

        //Vista SimRecibo 
        $v = new SimRecibo();
        $v->sector = $recibo;
        $v->Conceptos = $concepts;
        $v->No_Remunerativo = $NRemun;
        $v->render();
        }
    else{	
		header("Location: FormularioRecibo.php");
	}
?>

