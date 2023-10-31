<!-- html/ListaCategorias.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="../style.css"> 		
	<title>Lista Categorias</title>
</head>
<body>
    <!--incluyo el header oficial-->
    <?php include '../views/HeaderAleara.php'; ?>
    <?php $antiguedad = $_GET["antiguedad"] ;
        $mutual = $_GET["mutual"];
        $Cantferiados =$_GET["feriados"] ; 
    ?>

    <main class="fondo-cuerpo">
        <section class="cuerpo">
            <div class="cabecera">
                <div class="divisor">   </div>
                <h1>Simulacion Recibo de <?php echo $this->sector[0]["Nombre_Sector"];?> </h1>
            </div>
            <div id="infoRecibo">
                <?= '<p class="infoStatic">Periodo de pago : </p>'. $this->sector[0]["mes"] . ' / ' . $this->sector[0]["año"]. '<p class="infoStatic">  Categoria : </p>' . $this->sector[0]["descripcion"] .
                 '<p class="infoStatic">  Antieguedad : </p>' . $antiguedad;?>
            </div>
            <?php
            //inicializo las variables de resultados
            $remunerativo = $this->sector[0]["Sueldo_basico"];
            $NoRemunerativo= 0 ; 
            $Descuentos = 0; 
            ?>
            <table id="tablaRecibo">
                <thead>
                    <tr>
                        <th>Concepto</th>
                        <th>Detalle</th>
                        <th>Remunerativo</th>
                        <th>NO Remunerativo</th>
                        <th>Descuentos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="concepto">Sueldo Basico</td>
                        <td></td>
                        <td><?php echo $this->sector[0]["Sueldo_basico"];?></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <!--los conceptos  Remunerativos -->
                    <?php foreach ($this->Conceptos as $con ) { 
                        if( $con['cmonto']>= 0){
                        ?>
                    <tr>
                        <td class="concepto"><?= $con['Nombre_Concepto'] ?>  </td>
                        <td><?= $con['cmonto'] ?>%</td>
                        <?php if($con['Nombre_Concepto']!="Antiguedad"){
                            $resultadoCalculado = $this->sector[0]["Sueldo_basico"] * $con['cmonto']/100;}
                            else{
                                //Para que multiplique por los años de antiguedad
                                $resultadoCalculado = $this->sector[0]["Sueldo_basico"] * $con['cmonto']/100 * $antiguedad;
                                } 
                        //el number format es para que tenga solo 2 decimales?>
                        <td><?php $remunerativo = $remunerativo + $resultadoCalculado
                            ?>
                            <?php echo number_format($resultadoCalculado, 2);
                                //Los descuentos se hacen en base a los remunerativos 
                                $Descuentos = $Descuentos + $resultadoCalculado ?></td>
                        <td></td>
                        <td></td>
                    </tr> <?php } ?>
                    <?php } ?>
                    
                    <?php if($this->sector[0]["fallo"]>0){
                         $resultadoCalculado = $this->sector[0]["Sueldo_basico"] * ($this->sector[0]["fallo"] /100);
                         $remunerativo = $remunerativo + $resultadoCalculado;
                    echo '<tr>
                        <td class="concepto">Fallo ' . $this->sector[0]["descripcion"] .' </td>
                        <td>'.$this->sector[0]["fallo"] .'%</td>
                        <td>' . number_format($resultadoCalculado, 2) . '</td>
                        <td></td>
                        <td></td>
                    </tr>';
                    }?>

                    <!--Para los feriados , se caculan diferentes --> 
                     <?php if($Cantferiados>0){
                         echo '<tr>
                         <td class="concepto">Feriados </td>
                         <td>'.$Cantferiados .'</td>
                         <td>'; 
                         if($_GET["sector"]=="1"){
                            $resultadoCalculado =  $this->sector[0]["Sueldo_basico"]/25 * $Cantferiados;
                        }else{
                            $resultadoCalculado = $remunerativo /25 * $Cantferiados;
                        } echo  number_format($resultadoCalculado, 2)  .'</td>
                         <td></td>
                         <td></td>
                     </tr>';
                        //Los descuentos se hacen en base a los remunerativos 
                        $remunerativo = $remunerativo + $resultadoCalculado;
                        $Descuentos = $Descuentos + $resultadoCalculado ;
                     } ?>
                     
                     
                      <?php // SI pierden el presentismo 
                      if($_GET["presentismo"] == "0"){
                                foreach ($this->Conceptos as $con ) { 
                                    if( $con['Nombre_Concepto']=="Presentismo"){
                                        
                                        $resultadoCalculado = ($this->sector[0]["Sueldo_basico"] * $con['cmonto']/100)*-1;
                                        $remunerativo = $remunerativo + $resultadoCalculado;
                                        echo '
                                        <td class="concepto">-Presentismo</td>
                                        <td>'.$con['cmonto'] *-1 .'%</td>
                                        <td>'.number_format($resultadoCalculado, 2) .'</td>
                                        <td></td>
                                        <td></td>
                                         <tr>';
                                        }
                                    }
                                }
                            ?>

                    <?php // Solo Bingo puede perder el puntualidad 
                      if($_GET["puntualidad"] == "0" and $this->sector[0]["Nombre_Sector"] =="Bingo"){
                                foreach ($this->Conceptos as $con ) { 
                                    if( $con['Nombre_Concepto']=="Ad. Puntualidad"){
                                        
                                        $resultadoCalculado = ($this->sector[0]["Sueldo_basico"] * $con['cmonto']/100)*-1;
                                        $remunerativo = $remunerativo + $resultadoCalculado;
                                        echo '
                                        <td class="concepto">-Ad. Puntualidad</td>
                                        <td>'.$con['cmonto'] *-1 .'%</td>
                                        <td>'.number_format($resultadoCalculado, 2) .'</td>
                                        <td></td>
                                        <td></td>
                                         <tr>';
                                        }
                                    }
                                }
                            ?>     

                    <!--los conceptos NO remunerativos -->
                    <?php foreach ($this->No_Remunerativo as $NRem ) { 
                        $resultadoCalculado = $NRem['monto'];
                        //var_dump($NRem['nombre']);
                        if($NRem['nombre']!="Alimentacion "){
                            echo '<tr>
                            <td class="concepto">'. $NRem['nombre']  .' </td>
                            <td></td>';
                        } else{
                            $resultadoCalculado = $resultadoCalculado * $_GET["alimentacion"];
                            echo '<tr>
                        <td class="concepto">'. $NRem['nombre'] .'  </td>
                        <td>'.$NRem['monto'].'x'.$_GET["alimentacion"] .'</td>';
                        } ?>
                    
                        <td></td>
                        <td><?php echo number_format($resultadoCalculado, 2) ?></td>
                        <td></td>
                    </tr>
                    <?php $NoRemunerativo += $resultadoCalculado;
                 } ?>
                    <!--los Aportes  -->
                    <?php foreach ($this->Conceptos as $con ) { 
                        if( $con['cmonto']<0){
                        ?>
                    <tr>
                        <td class="concepto"><?= $con['Nombre_Concepto'] ?>  </td>
                        <td><?= $con['cmonto'] ?>%</td>
                        <?php $resultadoCalculado = $remunerativo * $con['cmonto']/100; 
                        //el number format es para que tenga solo 2 decimales?>
                        <td><?php  $Descuentos = $Descuentos + $resultadoCalculado ?></td>
                        <td></td>
                        <td><?php echo number_format($resultadoCalculado, 2); ?></td>
                    </tr>
                        <?php }?>
                        <?php } ?>
                    
                        <?php //Si checkean la opcion mutual
                        if($mutual == 1){
                            $resultadoCalculado = $remunerativo * (-0.01);
                            $Descuentos = $Descuentos + $resultadoCalculado;
                            echo '<tr>
                            <td class="concepto">Mutual</td>
                            <td>-1%</td>
                            <td></td>
                            <td></td>
                            <td>'.  number_format($resultadoCalculado, 2)  .'</td>
                        </tr>';

                        }?>
                    
                    <tr>
                        <td class="concepto"></td>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="concepto">Subtotal</td>
                        <td></td>
                        <td><?= number_format($remunerativo, 2) ?></td>
                        <td><?= number_format($NoRemunerativo, 2) ?></td>
                        <td><?= number_format($Descuentos, 2) ?></td>
                    </tr>
                    <?php //Sumo los subtotales para el neto  
                        $neto = $remunerativo+$NoRemunerativo+$Descuentos
                    ?>
                    <tr id="neto">
                        <td class="concepto">TOTAL NETO</td>
                        <td></td>
                        <td colspan="3" ><?= number_format($neto ,2)  ?></td>
                    </tr>
                </tbody>
            </table>

        </section>
  </main>
  <!--incluyo el Footer oficial-->
 <?php include '../views/FooterAleara.php'; ?>
</body>
</html>

