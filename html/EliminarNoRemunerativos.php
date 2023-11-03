<!-- html/ListaCategorias.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="style.css"> 		
	<title>Eliminar No Remunerativo</title>
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
                <h1>Eliminar No Remunerativo</h1>
            </div>
            
            <form action="" method="get">
                <label> Seleccione no Remunerativo  a Borrar</label> <select name="NoRemunerativo" id="NoRemunerativo"> 
                    
                        <?php
                        foreach($this->NoRemunerativo as $nr){?>
                        <option value="<?= $nr['Id_NRemunerativo'] ?>">  <?= $nr['mes']?>/<?= $nr['año'] ?> -  <?= $nr['Nombre'] ?> - $<?= $nr['monto']?> -  <?= $nr['descripcion'] ?> </option> 
                                <?php } ?>
                    </select><br>
                
                <br><br><input id="delete" type="submit" value="Eliminar No Remunerativo">
            </form>


        </section>
  </main>
  <!--incluyo mi Nav-->
<?php include '../views/Nav.php'; ?>
 <!--incluyo el Footer oficial-->
 <?php include '../views/FooterAleara.php'; ?>
</body>
</html>

