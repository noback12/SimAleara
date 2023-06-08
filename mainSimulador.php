<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>Simulador de Recibos de Sueldo Bingo Ciudadela</title>

   
</head>
<body>
  <nav id="topNav"><img src="images/logoNoback.png" alt="Logo" id="logo"><h1>Simulador de Recibos de Sueldo</h1>  </nav>
  <!--Si tengo los valores cargados genero el recibo -->
  <?php if(isset($_GET['anio'])) { ?>
    <p>PAGINA 2 </p>
    <form action="" method="get">
    <label for="nombre">Nombre del empleado:</label>
    <input type="text" id="nombre" name="nombre"><br><br>

     <label for="categoria">Categoria:</label>
   <select id="cat" name="cat" required>
      <option value="promotor">promotor</option>
      <option value="asistente tecnico">asistente tecnico</option>
    </select><br><br>

     <label for="anio">Año:</label>
    <select id="anio" name="anio" required>
      <?php for($i=2023 ; $i >=2020 ; $i--) { ?>
        <option value="<?=$i?>"><?=$i?></option> 
        <?php } ?>
    </select><br><br>


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

    <label><input type="checkbox" id="permPuesto" value="permPuesto">    Adicional permanencia</label><br>

    <label for="feriados">Feriados:</label>
    <input type="number" id="feriados" name="feriados"
       min="0" max="31"><br><br>

    <label for="alimentacion">dias trabajados (0-31):</label>
    <input type="number" id="alimentacion" name="alimentacion"
       min="0" max="31"><br><br>

    <label><input type="checkbox" id="mutual" value="mutual">Mutual</label><br>
    <label for="ajustes">Ajustes:</label>
    <input type="number" id="ajustes" name="ajustes"><br><br>


    <input type="submit" value="Simular Recibo">
  </form>
  
 

<div id="recibo">
  <div class="info">
        <span>Nombre:</span> <?= $_GET['nombre'] ?> <br>
        <span>Mes:</span> <?= $_GET['mes'] ?> del <?= $_GET['anio'] ?>
  </div>
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
        <td>Categoria</td>
        <td>Asistente tecnico</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Sueldo básico</td>
        <td>-</td>
        <td>156115.82</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Antiguedad</td>
        <td>%1 * 4</td>
        <td>6244.63</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Presentismo</td>
        <td>%5</td>
        <td>7805.79</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Ad puntualidad</td>
        <td>%10</td>
        <td>15611.58</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Ad por permanencia</td>
        <td></td>
        <td>0</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>fallo categoria</td>
        <td></td>
        <td>0</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>horas nocturnas</td>
        <td></td>
        <td>0</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>feriados</td>
        <td></td>
        <td>0</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>ajuste categoria</td>
        <td></td>
        <td>0</td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <td>Alimentacion</td>
        <td></td>
        <td></td>
        <td>26000</td>
        <td></td>
      </tr>
      <tr>
        <td>Monto NO remunerativo aleara</td>
        <td></td>
        <td></td>
        <td>27549.85</td>
        <td></td>
      </tr>
      <tr>
        <td>Jubilacion</td>
        <td></td>
        <td></td>
        <td></td>
        <td>21252.98</td>
      </tr>
      <tr>
        <td>Ley 19032</td>
        <td></td>
        <td></td>
        <td></td>
        <td>5796.27</td>
      </tr>
      <tr>
        <td>obra social</td>
        <td></td>
        <td></td>
        <td></td>
        <td>5796.27</td>
      </tr>
      <tr>
        <td>Aleara</td>
        <td></td>
        <td></td>
        <td></td>
        <td>4415.18</td>
      </tr>
      <tr>
        <td>mutual</td>
        <td></td>
        <td></td>
        <td></td>
        <td>0</td>
      </tr>

      <tr>
        <td>Subtotal</td>
        <td></td>
        <td>Rem</td>
        <td>No rem</td>
        <td>Desc</td>
      </tr>
      <tr id="neto">
        <td>TOTAL NETO</td>
        <td></td>
        <td colspan="3" >209898.00</td>
      </tr>
    </tbody>
  </table>
</div>


<!--Si NO tengo los valores cargados genero el formulario -->
  <?php  } else { ?>
  
  <form action="" method="get">
    <label for="nombre">Nombre del empleado:</label>
    <input type="text" id="nombre" name="nombre"><br><br>

     <label for="categoria">Categoria:</label>
   <select id="cat" name="cat" required>
      <option value="promotor">promotor</option>
      <option value="asistente tecnico">asistente tecnico</option>
    </select><br><br>

     <label for="anio">Año:</label>
    <select id="anio" name="anio" required>
      <?php for($i=2023 ; $i >=2020 ; $i--) { ?>
        <option value="<?=$i?>"><?=$i?></option> 
        <?php } ?>
    </select><br><br>


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

    <label><input type="checkbox" id="permPuesto" value="permPuesto">    Adicional permanencia</label><br>

    <label for="feriados">Feriados:</label>
    <input type="number" id="feriados" name="feriados"
       min="0" max="31"><br><br>

    <label for="alimentacion">dias trabajados (0-31):</label>
    <input type="number" id="alimentacion" name="alimentacion"
       min="0" max="31"><br><br>

    <label><input type="checkbox" id="mutual" value="mutual">Mutual</label><br>
    <label for="ajustes">Ajustes:</label>
    <input type="number" id="ajustes" name="ajustes"><br><br>


    <input type="submit" value="Simular Recibo">
  </form>
  <?php } ?>
  
  
  
</body>
</html>