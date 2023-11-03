<!-- html/ListaCategorias.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="style.css"> 		
	<title>Actualizar Sueldo</title>
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
                <h1>Actualizar Sueldo</h1>
            </div>
            
            <form action="" method="get">
               
                        <br><label>Seleccionar en que sector trabaja:</label><br>
                <input type="radio" id="bingo" name="sector" value="2" onclick="mostrarOpcionesRedux('bingo')" required> Bingo
                <input type="radio" id="loteria" name="sector" value="1" onclick="mostrarOpcionesRedux('loteria')"> Lotería<br><br>
                
                <!-- Agrega todas las opciones correspondientes a la loteria -->
                    <div name="especificoLoteria" id="especificoLoteria" style="display:none;"> 
                    <label for="categoria">Categoria:</label>
                    <select name="select1" id="select1"> 
                        <?php foreach($this->sector as $s){ 
                        if ($s['Id_Sector'] === '1'){ ?>
                        <option value="<?= $s['Id_Categoria'] ?>">  <?= $s['descripcion'] ?>  </option>
                                <?php } }?>
                    </select><br>
                </div>
                
                <!-- Agrega todas las opciones correspondientes a bingo  -->
                <div name="especificoBingo" id="especificoBingo" style="display:none;">
                    <label for="categoria">Categoria:</label>
                    <select name="select2" id="select2" >
                        
                        <?php foreach($this->sector as $s){ 
                        if ($s['Id_Sector'] === '2'){ ?>
                        <option value="<?= $s['Id_Categoria'] ?>">  <?= $s['descripcion'] ?>  </option>
                                <?php } }?>
                    </select><br>
                </div>

                <br><input type="radio" id="bingo" name="tipoSueldo" value="basic" onclick="mostrarOpcionesNR('Basic')" checked> Sueldo Basico
                <input type="radio" id="loteria" name="tipoSueldo" value="NoREMUN" onclick="mostrarOpcionesNR('NoREMUN')" > NO Remunerativo<br>
                <div id="tituloNR" style="display:none" ><br>
                <label for="nombre"  >Titulo No remunerativo:  </label><input type="text" id="nombre" name="nombre" placeholder="Bono/No Remunerativo/etc"> &nbsp&nbsp 
                <label for="general">Asignar a todo el sector</label>&nbsp<input type="checkbox" id="general" name="general" value="general"> &nbsp&nbsp  
                <button onclick="window.location.href='BorrarNoRemunerativos'; return false;" id="deleteNoRemun">Borrar No remunerativos</button>
                </div>
                <br>
                
                <label>Fecha de comienzo:</label> 
                    <label for="anio">Año:</label>
                    <?php  $anioActual = date('Y'); ?>

                    <select id="anio" name="anio" required>
                        <?php 
                    for ($i = $anioActual + 5; $i >= 2020; $i--) {
                        if ($i == $anioActual) {
                            echo '<option value="' . $i . '" selected>' . $i . '</option>';
                        } else {
                            echo '<option value="' . $i . '">' . $i . '</option>';
                        }
                    } ?></select>
                    &nbsp&nbsp&nbsp&nbsp
                    <label for="mes">Mes:</label>
                    <select id="mes" name="mes" required>
                        <option value="01">ENERO</option>
                        <option value="02">FEBRERO</option>
                        <option value="03">MARZO</option>
                        <option value="04">ABRIL</option>
                        <option value="05">MAYO</option>
                        <option value="06">JUNIO</option>
                        <option value="07">JULIO</option>
                        <option value="08">AGOSTO</option>
                        <option value="09">SEPTIEMBRE</option>
                        <option value="10">OCTUBRE</option>
                        <option value="11">NOVIEMBRE</option>
                        <option value="12">DICIEMBRE</option>
                    </select><br><br>

                    <label>Fecha de Fin:</label> 
                    <label for="aniof">Año:</label>
                    <?php  $anioActual = date('Y'); ?>

                    <select id="aniof" name="aniof" required>
                        <?php 
                    for ($i = $anioActual + 5; $i >= 2020; $i--) {
                        if ($i == $anioActual) {
                            echo '<option value="' . $i . '" selected>' . $i . '</option>';
                        } else {
                            echo '<option value="' . $i . '">' . $i . '</option>';
                        }
                    } ?></select>
                    &nbsp&nbsp&nbsp&nbsp
                    <label for="mesf">Mes:</label>
                    <select id="mesf" name="mesf" required>
                        <option value="01">ENERO</option>
                        <option value="02">FEBRERO</option>
                        <option value="03">MARZO</option>
                        <option value="04">ABRIL</option>
                        <option value="05">MAYO</option>
                        <option value="06">JUNIO</option>
                        <option value="07">JULIO</option>
                        <option value="08">AGOSTO</option>
                        <option value="09">SEPTIEMBRE</option>
                        <option value="10">OCTUBRE</option>
                        <option value="11">NOVIEMBRE</option>
                        <option value="12">DICIEMBRE</option>
                    </select><br><br>
                <br><br>
                <label for="monto">Ingrese el monto:  $</label>
                <input type="number" id="monto" name="monto"  min="0" placeholder="150000" required><br><br>

                <input type="submit" value="Actualizar">
            </form>




        </section>
  </main>
 


  <!--incluyo mi Nav-->
<?php include '../views/Nav.php'; ?>
 <!--incluyo el Footer oficial-->
 <?php include '../views/FooterAleara.php'; ?>
</body>
</html>

