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
  <script src="script.js"></script>

   
</head>
<body>
  <nav id="topNav"><img src="images/logoNoback.png" alt="Logo" id="logo"><h1>Simulador de Recibos de Sueldo</h1>  </nav>
  <!--Si tengo los valores cargados genero el recibo -->
  <?php if(isset($_POST['anio'])) { var_dump(count($_POST)) ?>
    <p> </p>

    <div id="recibo">
  <div class="info">
        <span>Nombre:</span> <?= $_POST['nombre'] ?> <br>
        <span>Mes:</span> <?= $_POST['mes'] ?> del <?= $_POST['anio'] ?>
        <span>ingreso:</span>  <?=$_POST['ingreso']?>
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

<!--boton para volver a la pagina anterior -->
<button onclick="location.href='http://localhost:8080/SimRecibo/consulta.php'">otra consulta</button>
  
<!--Si NO tengo los valores cargados genero el formulario -->
  <?php  } else { 
      //Voy a la pagina anterior con el formulario 
      header('location: http://localhost:8080/SimRecibo/consulta.php');
      exit();
    }
    ?>
    
  
</body>
</html>