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
    

    <main class="fondo-cuerpo">
        <section class="cuerpo">
            <div class="cabecera">
                <div class="divisor">   </div>
                <h1>Simulacion Recibo de <?php echo $this->sector[0]["Nombre_Sector"];?> </h1>
            </div>
            <p>Mes de pago : 
            <?php echo $this->sector[0]["mes"];?> Año de pago : <?php echo $this->sector[0]["año"];?>
            </p> 
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
                    <td class="concepto">Categoria</td>
                    <td><?php echo $this->sector[0]["descripcion"];?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="concepto">Sueldo Basico</td>
                    <td></td>
                    <td><?php echo $this->sector[0]["Sueldo_basico"];?></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php foreach ($this->Conceptos as $con ) {  ?>
                <tr>
                    <td class="concepto"><?= $con['Nombre_Concepto'] ?>  </td>
                    <td><?= $con['cmonto'] ?>%</td>
                    <?php $resultadoCalculado = $this->sector[0]["Sueldo_basico"] * $con['cmonto']/100; 
                    //el number format es para que tenga solo 2 decimales?>
                    <td><?php if ($resultadoCalculado >= 0){ 
                        $remunerativo = $remunerativo + $resultadoCalculado
                        ?>
                        <?php echo number_format($resultadoCalculado, 2)."<td></td><td></td>";}else{
                            $Descuentos = $Descuentos + $resultadoCalculado ?></td>
                    <td></td>
                    <td><?php echo number_format($resultadoCalculado, 2);} ?></td>
                </tr>
                <?php } ?>
                <!--los conceptos NO remunerativos -->
                <?php foreach ($this->No_Remunerativo as $NRem ) { 
                    $NoRemunerativo += $NRem['monto'] ?>
                <tr>
                    <td class="concepto"><?= $NRem['nombre'] ?>  </td>
                    <td></td>
                    <td></td>
                    <td><?php echo number_format($NRem['monto'], 2) ?></td>
                    <td></td>
                </tr>
                <?php } ?>



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

