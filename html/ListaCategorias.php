<!-- html/ListaCategorias.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="style.css"> 		
	<title>Lista Categorias</title>
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
                <h1>Lista Categorias</h1>
            </div>
            <table id="lista">
                <tr><th>ID</th><th>Descripcion</th><th>%Fallo</th><th> Sector</th></tr>
                <?php foreach($this->categorias as $c){ ?>
                    <tr><td><?= $c['Id_Categoria'] ?> </td>  <td><?= $c['descripcion'] ?>  </td> <td><?= $c['fallo'] ?>% <td><?= $c['Nombre_Sector'] ?>  </td>  </td></tr>
                <?php } ?>
            </table>
        </section>
  </main>
</body>
</html>

