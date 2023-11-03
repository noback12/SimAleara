<!-- html/ListaCategorias.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="style.css"> 		
	<title>Historico</title>
    <script  src="SimAleara.js" ></script> 
</head>
<body>
    <!--incluyo el header oficial-->
    <?php include '../views/HeaderAleara.php'; ?>
    <!--distintivo de usuario adminstrador-->
    <?php include '../views/AdminBar.php'; ?>

    <main class="fondo-cuerpo">
        <section class="cuerpo">
            <div class="cabecera">
                <div class="divisor">   </div>
                <h1>Historico</h1>
            </div>
            
            <form action="" method="get" >
        
                
            
            <br><label>Seleccionar en que sector trabaja:</label><br>
                <input type="radio" id="bingo" name="sector" value="2" onclick="mostrarOpcionesRedux('bingo')" required> Bingo
                <input type="radio" id="loteria" name="sector" value="1" onclick="mostrarOpcionesRedux('loteria')"> Lotería<br><br>
                
                <!-- Agrega todas las opciones correspondientes a la loteria -->
                    <div name="especificoLoteria" id="especificoLoteria" style="display:none;"> 
                    <label for="categoria">Categoria:</label>
                    <select name="select" id="select1"> 
                        
                        <?php foreach($this->categorias as $c){ 
                        
                        if ($c['Id_Sector'] === '1'){ ?>
                        <option value="<?= $c['Id_Categoria'] ?>">  <?= $c['descripcion'] ?>  </option>
                                <?php } }?>
                    </select><br>
                </div>
                
                <!-- Agrega todas las opciones correspondientes a bingo  -->
                <div name="especificoBingo" id="especificoBingo" style="display:none;">
                    <label for="categoria">Categoria:</label>
                    <select name="select" id="select2" >
                        
                        <?php foreach($this->categorias as $c){ 
                        if ($c['Id_Sector'] === '2'){ ?>
                        <option value="<?= $c['Id_Categoria'] ?>">  <?= $c['descripcion'] ?>  </option>
                                <?php } }?>
                    </select><br>
                </div>

                <input type="submit" value="Mostrar">
            </form>            
            <br>
            <br>


            
        </section>
  </main>
  <!--incluyo mi Nav-->
<?php include '../views/Nav.php'; ?>
 <!--incluyo el Footer oficial-->
 <?php include '../views/FooterAleara.php'; ?>
</body>
</html>

