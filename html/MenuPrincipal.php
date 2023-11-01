<!-- html/ListaCategorias.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="style.css"> 		
	<title>SimAleara Menu Principal</title>

</head>
<body>
    <!--incluyo el header oficial-->
    <?php include '../views/HeaderAleara.php'; ?>




    <main class="fondo-cuerpo">
        <section class="cuerpo">
            <div class="cabecera">
                <div class="divisor">   </div>
                <h1>Sim Aleara</h1>
                
            </div>
                       
           
            <div id="menu">
                    <ul>
                    <li><a href="FormularioRecibo">Simular Recibo</a></li>
                    <li><a href="Historico">Historico(falta)</a></li>
                    <li><a href="Lista-Comunicados">ListaComunicados</a></li>
                    <li><a href="Manual de usuario">Manual De Usuario(falta)</a></li>
                    </ul>
            </div>

            <a href="InicioSesion" id="admin">Administrador</a>

        </section>
  </main>
 

    <!--incluyo mi Nav-->
    <?php include '../views/Nav.php'; ?>
    <!--incluyo el Footer oficial-->
    <?php include '../views/FooterAleara.php'; ?>
</body>
</html>

