<!-- html/ListaCategorias.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="style.css"> 		
	<title>Historico </title>
    <script  src="SimAleara.js" ></script> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                <h1>Historico </h1>
            </div>
            
           

            <table id="myTable">
            <tr><th>Fecha</th>
            <th>Valor</th>
            <th>Porcentaje de diferencia con el ultimo tramo</th></tr>
                            
                <?php 
                      $c = $this->categorias;
                      
                      echo "<tr>";
                        echo "<td>" . $c[0]['mes'] ."/". $c[0]['año']. "</td>";
                        echo "<td>" .$c[0]['Sueldo_Basico']. "</td>";
                        echo "<td>  Inicio del calculo </td>";
                      for ($i = 1; $i < count( $c) ; $i++) {
                    
                        echo "<tr>";
                        echo "<td>" . $c[$i]['mes'] ."/". $c[$i]['año']. "</td>";
                        echo "<td>" .$c[$i]['Sueldo_Basico']. "</td>";
                        $diferencia = (($c[$i ]['Sueldo_Basico'] - $c[$i-1]['Sueldo_Basico']) / $c[$i-1]['Sueldo_Basico']) * 100;
                        echo "<td>" .number_format($diferencia, 2) . "%</td>";
                        echo "</tr>";
                    }

                ?>
               
            </table>
            <canvas id="myChart" width="400" height="400"></canvas>

            <script>
        document.addEventListener("DOMContentLoaded", function() {
            var table = document.getElementById('myTable');
            var data = [];
            var labels = [];
            for (var i = 1, row; row = table.rows[i]; i++) {
                labels.push(row.cells[0].innerHTML);
                data.push(parseFloat(row.cells[1].innerHTML));
            }

            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Valores',
                        data: data,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>

            
        </section>
  </main>
  <!--incluyo mi Nav-->
<?php include '../views/Nav.php'; ?>
 <!--incluyo el Footer oficial-->
 <?php include '../views/FooterAleara.php'; ?>
</body>
</html>

