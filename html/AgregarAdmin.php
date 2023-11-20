<!-- html/AgregarAdmin.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="style.css"> 		
	<title>Agregar Admin</title>
    
</head>
<body>
    <!--incluyo el header oficial-->
    <?php include '../views/HeaderAleara.php'; ?>


    <main class="fondo-cuerpo">
        <section class="cuerpo">
            <div class="cabecera">
                <div class="divisor">   </div>
                <h1>Registro de Administrador</h1>
            </div>
            
            <div id="containerLog">
                <form action="" method="post">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" required>

                    <label for="email">Correo electrónico:</label>
                    <input type="email" placeholder="suEmail@provedor.com" name="email" required>

                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password" required>

                    <label for="confirmar_password">Confirmar Contraseña:</label>
                    <input type="password" name="confirmar_password" id="confirmar_password" required>

                    <input type="submit" value="Registrarse">
                </form>
            </div>


        </section>
  </main>

  <!--incluyo mi Nav-->
<?php include '../views/Nav.php'; ?>
 <!--incluyo el Footer oficial-->
 <?php include '../views/FooterAleara.php'; ?>
</body>
</html>

