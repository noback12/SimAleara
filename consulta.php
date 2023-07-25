<?php
  //conecto con la base de datos 
  //(CUIDADO CON LOS PRIVILEGIOS ROOT)
  $cn= mysqli_connect("localhost","root","","simrecibo");

  //hago una consulta 
  $res=mysqli_query($cn,'select *
                         from categoria');
  //saco una fila del resultado
  $fila=mysqli_fetch_assoc($res);
  //var_dump($fila);

  //Estoy en la 2da pantalla 
  if(count($_POST)>0){
    echo 'segunda';
  }

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>Simulador de Recibos de Sueldo Bingo Ciudadela</title>
  

   
</head>
<body>
  <nav id="topNav"><img src="images/logoNoback.png" alt="Logo" id="logo"><h1>Simulador de Recibos de Sueldo</h1>  </nav>
  
  <form id="myForm" action="http://localhost:8080/SimRecibo/reciboRes.php" method="post">
    <label for="nombre">Nombre del empleado:</label>
    <input type="text" id="nombre" name="nombre"><br><br>

    <label for="categoria">Categoria:</label>
   <select id="cat" name="cat" required>
      <?php 
        while($fila=mysqli_fetch_assoc($res)) { 
          ?>
        
        <option value="<?=$fila['id_cat']?>">  <?=$fila['descripcion']?>   </option>
      <?php } ?>
    </select><br><br>

    <label for="antiguedad">Antiguedad:</label>
    <input type="date" id="fechaInput" > 
    <input type="text" id="ingreso" name="ingreso">
    <br><br>

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
    
    <label><input type="checkbox" id="permPuesto" value="permPuesto" >    Ad. permanencia</label>
    <label><input type="checkbox" id="puntualidad" value="puntualidad"checked>    Ad. asist y puntualidad</label>
    <label><input type="checkbox" id="presentismo" value="presentismo"checked>  Ad. Presentismo</label><br>

    <label for="feriados">Feriados:</label>
    <input type="number" id="feriados" name="feriados"
       min="0" max="31" value=0><br><br>

    <label for="alimentacion">dias trabajados (0-31):</label>
    <input type="number" id="alimentacion" name="alimentacion"
       min="0" max="31" value="21"><br><br>

    <label><input type="checkbox" id="mutual" value="mutual">Mutual</label><br>
    <label for="ajustes">Ajustes:</label>
    <input type="number" id="ajustes" name="ajustes"><br><br>


    <input type="submit" value="Simular Recibo" onclick="obtenerFecha()">
  </form>
 
  
</body>
</html>