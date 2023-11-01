<!-- html/ListaCategorias.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="style.css"> 		
	<title>Eliminar Categoria</title>
    <script  src="SimAleara.js" ></script> 
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
                <h1>Eliminar Categoria</h1>
            </div>
            
            <form action="" method="get">
                <label> Seleccione categoria a borrar</label> <select name="categorias" id="categorias"> 
                        <?php foreach($this->sector as $s){?>
                        <option value="<?= $s['Id_Categoria'] ?>">  <?= $s['descripcion'] ?> - <?= $s['Nombre_Sector']?></option>
                                <?php }?>
                    </select><br>
                
                <br><br><input id="delete" type="submit" value="Eliminar Categoría">
            </form>


        </section>
  </main>
  <!--incluyo mi Nav-->
<?php include '../views/Nav.php'; ?>
 <!--incluyo el Footer oficial-->
 <?php include '../views/FooterAleara.php'; ?>
</body>
</html>

