<!-- html/InicioSesion.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="style.css"> 		
	<title>Inicio Sesion</title>

</head>
<body>
    <!--incluyo el header oficial-->
    <?php include '../views/HeaderAleara.php'; ?>
    <!--distintivo de usuario adminstrador-->
    <?php include '../views/AdminBar.php'; ?>


    <main class="fondo-cuerpo">
        <section class="cuerpo">
            <div class="cabecera">
                <div class="divisor"> </div>
                <h1>Inicio Sesion</h1>
            </div>

            
            <div id="iniciar">
            <div class="login-container">
            <h2>Bienvenido/a</h2>
        <form>
            <input type="text" placeholder="Nombre de usuario" required>
            <input type="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
            </div>
        </section>
  </main>

    <!--incluyo el Footer oficial-->
 <?php include '../views/FooterAleara.php'; ?>
</body>
</html>

