<!-- html/ListaCategorias.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="style.css"> 		
	<title>Manual de Usuario</title>
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
                <h1>Manual de Usuario</h1>
            </div>
            <div id="container">               
                <iframe id="pdfViewer" src="comunicados/ManualDeUsuarioSimAleara.pdf" width="100%" frameborder="0"></iframe>
            </div>           
        </section>
  </main>
 

<!--incluyo mi Nav-->
<?php include '../views/Nav.php'; ?>
<!--incluyo el Footer oficial-->
 <?php include '../views/FooterAleara.php'; ?>

</body>
</html>

