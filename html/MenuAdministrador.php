<!-- html/MenuAdministrador.php --> 

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="style.css"> 		
	<title>SimAleara Menu Administrador</title>

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
                <h1>Sim Aleara Menu Administrador</h1>
                
            </div>
                       
            <div id="menu">
                    <ul>
                        <li><a href="Lista-Categorias">Lista Categorias</a></li>
                        <li><a href="AgregarCategoria">Agregar Categoria</a></li>
                        <li><a href="EliminarCategoria">Eliminar Categoria</a></li>
                        <li><a href="ActualizarSueldo">Actualizar Sueldo</a></li>
                        <li><a href="AgregarComunicado">Agregar Comunicado</a></li>
                        <li><a href="EliminarComunicado">Eliminar un comunicado</a></li>
                        <li><a href="AgregarAdmin">Alta Administrador</a></li>
                    </ul>
            </div>

            <a href="logout" id="admin">Cerrar Sesion</a>

        </section>
  </main>
 

    <!--incluyo mi Nav-->
    <?php include '../views/Nav.php'; ?>
    <!--incluyo el Footer oficial-->
    <?php include '../views/FooterAleara.php'; ?>
</body>
</html>

