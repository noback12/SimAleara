<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <title>Simulador de Recibos de Sueldo Bingo Ciudadela</title>
    <script src="script.js"></script>   
  </head>
 <body>
  <!--incluyo el header oficial-->
  <?php include '../views/HeaderAleara.php'; ?>
  <main class="fondo-cuerpo">
    <section class="cuerpo">

      <div class="cabecera">
        <div class="divisor">   </div>
           <h1>Simulador de Recibos de Sueldo de Bingo</h1>  
     </div>
     

      <div class="info">
            <span>Mes: XX</span>  del XXXX  <br>
            <span>ingreso:XX/XX/XX</span>  
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
            <td class="concepto">Categoria</td>
            <td>Asistente tecnico</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td class="concepto">Sueldo</td>
            <td>-</td>
            <td>156115.82</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td class="concepto">Antiguedad</td>
            <td>%1 * 4</td>
            <td>6244.63</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td class="concepto">Presentismo</td>
            <td>%5</td>
            <td>7805.79</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td class="concepto">Ad. puntualidad</td>
            <td>%10</td>
            <td>15611.58</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td class="concepto">Ad. por Permanencia</td>
            <td></td>
            <td>0</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td class="concepto">Fallo categoria</td>
            <td></td>
            <td>0</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td class="concepto">feriados</td>
            <td></td>
            <td>0</td>
            <td></td>
            <td></td>
          </tr>
          <tr>

          <tr>
            <td class="concepto">Alimentacion</td>
            <td></td>
            <td></td>
            <td>26000</td>
            <td></td>
          </tr>
          <tr>
            <td class="concepto">Monto NO remunerativo aleara</td>
            <td></td>
            <td></td>
            <td>27549.85</td>
            <td></td>
          </tr>
          <tr>
            <td class="concepto">Jubilacion</td>
            <td></td>
            <td></td>
            <td></td>
            <td>21252.98</td>
          </tr>
          <tr>
            <td class="concepto">Ley 19032</td>
            <td></td>
            <td></td>
            <td></td>
            <td>5796.27</td>
          </tr>
          <tr>
            <td class="concepto">obra social</td>
            <td></td>
            <td></td>
            <td></td>
            <td>5796.27</td>
          </tr>
          <tr>
            <td class="concepto">Aleara</td>
            <td></td>
            <td></td>
            <td></td>
            <td>4415.18</td>
          </tr>
          <tr>
            <td class="concepto">Mutual</td>
            <td></td>
            <td></td>
            <td></td>
            <td>0</td>
          </tr>

          <tr>
            <td class="concepto">Subtotal</td>
            <td></td>
            <td>Rem</td>
            <td>No rem</td>
            <td>Desc</td>
          </tr>
          <tr id="neto">
            <td class="concepto">TOTAL NETO</td>
            <td></td>
            <td colspan="3" >209898.00</td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>

  <!--incluyo el footer oficial-->
  <?php include '../views/FooterAleara.php'; ?>
</body>