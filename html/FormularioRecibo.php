<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <title>Simulador de Recibos de Sueldo Bingo Ciudadela</title>

    
    <script  src="../SimAleara.js" ></script> 
  </head>
 <body>
  <!--incluyo el header oficial-->
  <?php include '../views/HeaderAleara.php'; ?>

  <!-- Formulario para simular recibo de bingo -->
  <main class="fondo-cuerpo">

    <section class="cuerpo">
      <div class="cabecera">
        <div class="divisor">   </div>
           <h1>Simular Recibo de Sueldo</h1>  
     </div>
    <form id="formularioRecibo" action="SimRecibo.php" method="get">
      <div>
          <label>Periodo de Recibo:</label> 
          <label for="anio">Año:</label>
          <select id="anio" name="anio" required>
            <?php for($i=2023 ; $i >=2020 ; $i--) { ?>
              <option value="<?=$i?>"><?=$i?></option> 
              <?php } ?>
          </select>
        
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
          </select>

          <label for="antiguedad">Antiguedad:</label>
          <select id="antiguedad" name="antiguedad" required>
            <?php for($i=0 ; $i <30 ; $i++) { ?>
              <option value="<?=$i?>"><?=$i?></option> 
              <?php } ?>
          </select>
        </div>
      <br>    
      <br>    
      <label for="feriados">Feriados:</label>
      <input type="number" id="feriados" name="feriados" min="0" max="31" value=0><br>

      <br><label>Seleccionar en que sector trabaja:</label><br>
      <input type="radio" id="bingo" name="sector" value="2" onclick="mostrarOpciones('bingo')" required> Bingo
      <input type="radio" id="loteria" name="sector" value="1" onclick="mostrarOpciones('loteria')"> Lotería<br>
      <br>
      <!-- Agrega todas las opciones correspondientes a la loteria -->
        <div name="especificoLoteria" id="especificoLoteria" style="display:none;"> 
        <label for="categoria">Categoria:</label>
        <select name="select1" id="select1"> 
            <?php foreach($this->sector as $s){ 
              if ($s['Id_Sector'] === '1'){ ?>
              <option value="<?= $s['Id_Categoria'] ?>">  <?= $s['descripcion'] ?>  </option>
                    <?php } }?>
        </select><br>
        <label for="horas50">Hs. extra Lunes a Viernes:</label>
        <input type="number" id="horas50" name="horas50"
        min="0" max="50" value=0><br>
        <label for="horas100">Hs. extra Sabados , Domingos y Feriados:</label>
        <input type="number" id="horas100" name="horas100"
        min="0" max="50" value=0>
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
        <input type='hidden' value='0' name='puntualidad'>
        
        <label><input type="checkbox" id="puntualidad" value="1" name="puntualidad" checked>    Ad. asist y puntualidad</label>
        <br>
        <label for="alimentacion">Dias de Alimentacion (0-31):</label>
        <input type="number" id="alimentacion" name="alimentacion" min="0" max="31" value="21">
      </div>
      <input type='hidden' value='0' name='presentismo'>
      <label><input type="checkbox" id="presentismo" value="1" name ="presentismo" checked>  Ad. Presentismo</label>
      <input type='hidden' value='0' name='mutual'>
      <input type="checkbox" id="mutual" name="mutual" value="1"><label>Mutual</label><br>
      <label for="ajustes">Ajustes:</label>
      <input type="number" id="ajustes" name="ajustes"><br><br>
        <input type="submit" value="Simular">
    </form>
    <div id="apartadoLegal">
      <p>
      Este presente sistema ha sido creado para el uso de los trabajadores de agencias de loteria y juegos de azar ,con el unico proposito de servir como una guía orientativa de su salario. De tal forma, el usuario puede visualizar todos los elementos de esta página web, imprimirlos, copiarlos y almacenarlos en cualquier soporte físico, siempre y cuando sea única y exclusivamente para su uso personal y privado. Los contenidos y resultados que arrojen los cálculos son meramente ORIENTATIVOS. 
      </p>
    </div>
    <br>
    </section>
  </main>

 <!--incluyo el Footer oficial-->
 <?php include '../views/FooterAleara.php'; ?>
</body>