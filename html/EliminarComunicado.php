<!-- html/ListaCategorias.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="style.css"> 		
	<title>Eliminar Comunicado</title>
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
                <h1>Eliminar Comunicado</h1>
            </div>
            
            <form action="" method="get">
                <label> Seleccione Comunicado a Borrar</label> <select name="comunicado" id="comunicado"> 
                    
                        <?php
                         var_dump($c);
                        foreach($this->Comunicados as $c){?>
                        <option value="<?= $c['Id_Comunicado'] ?>">  <?= $c['Titulo_Comunicado'] ?> - <?= $c['Nombre_Sector']?> - <?= $c['mes']?>/<?= $c['año']  ?></option> 
                                <?php } ?>
                    </select><br>
                
                <br><br><input id="delete" type="submit" value="Eliminar Comunicado">
            </form>


        </section>
  </main>
  <!--incluyo mi Nav-->
<?php include '../views/Nav.php'; ?>
 <!--incluyo el Footer oficial-->
 <?php include '../views/FooterAleara.php'; ?>
</body>
</html>

