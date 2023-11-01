<!-- html/ListaCategorias.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="style.css"> 		
	<title>Lista Comunicados</title>
    <style>
        #container {
            display: flex;
            height: 800px;
        }

        #lista-comunicados {
            flex: 1;
            padding: 20px;
        }

        #visor-pdf {
            flex: 3;
            height: 800px;
        }

        #comunicados-list {
            list-style-type: none;
            padding: 0;
        }

        #comunicados-list li {
            margin-bottom: 10px;
            cursor: pointer;
            padding: 10px;
            border-radius: 5px;
            background-color: #f2f2f2;
            transition: background-color 0.3s;
        }

        #comunicados-list li:hover {
            background-color: #e6e6e6;
        }
    </style>
    <script  src="SimAleara.js" ></script> 
</head>
<body>
    <!--incluyo el header oficial-->
    <?php include '../views/HeaderAleara.php'; ?>
   
    <main class="fondo-cuerpo">
        <section class="cuerpo">
            <div class="cabecera">
                <div class="divisor">   </div>
                <h1>Lista Comunicados</h1>
            </div>

           
            <!--<a id="pdfAfuera" href=""> ver en otra pagina</a>-->
            <div id="container">               
                <ul id="comunicados-list">
                <?php foreach($this->comunicados as $c){ ?>
                    <!-- Supongamos que tienes una lista de comunicados con títulos y rutas de PDF -->
                    <li data-pdf=<?= $c['Direccion'] ?>>  <?= $c['Titulo_Comunicado'] ?></li>
                
                <?php } ?>
                </ul>
                <iframe id="pdfViewer" src="" width="100%" frameborder="0"></iframe>
            </div>

             
        </section>
  </main>
  <script>
        // Obtén la lista de elementos de comunicados
        var comunicados = document.querySelectorAll('#comunicados-list li');

        // Agrega un evento de clic a cada elemento de la lista
        comunicados.forEach(function(comunicado) {
            comunicado.addEventListener('click', function() {
                var rutaPDF = this.getAttribute('data-pdf');
                document.getElementById('pdfViewer').setAttribute('src', rutaPDF);
                document.getElementById('pdfAfuera').setAttribute('href', rutaPDF);
            });
        });
    </script>

<!--incluyo mi Nav-->
<?php include '../views/Nav.php'; ?>
<!--incluyo el Footer oficial-->
 <?php include '../views/FooterAleara.php'; ?>

</body>
</html>

