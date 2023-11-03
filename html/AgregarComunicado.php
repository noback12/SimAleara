<!-- html/ListaCategorias.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="style.css"> 		
	<title>Agregar Comunicado</title>
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
                <h1>Agregar Comunicado</h1>
            </div>
            
            <form action="" method="get">

                <label for="fecha_publicacion">Fecha de publicación:</label><br>
                <label for="anio">Año:</label>
                <?php  $anioActual = date('Y'); ?>

                <select id="anio" name="anio" required>
                    <?php 
                for ($i = $anioActual + 5; $i >= 2020; $i--) {
                    if ($i == $anioActual) {
                        echo '<option value="' . $i . '" selected>' . $i . '</option>';
                    } else {
                        echo '<option value="' . $i . '">' . $i . '</option>';
                    }
                } ?></select>
                &nbsp&nbsp&nbsp&nbsp
                <label for="mes">Mes:</label>
                <select id="mes" name="mes" required>
                    <option value="01">ENERO</option>
                    <option value="02">FEBRERO</option>
                    <option value="03">MARZO</option>
                    <option value="04">ABRIL</option>
                    <option value="05">MAYO</option>
                    <option value="06">JUNIO</option>
                    <option value="07">JULIO</option>
                    <option value="08">AGOSTO</option>
                    <option value="09">SEPTIEMBRE</option>
                    <option value="10">OCTUBRE</option>
                    <option value="11">NOVIEMBRE</option>
                    <option value="12">DICIEMBRE</option>
                </select><br><br>

                <label for="titulo">Título del Comunicado:</label><br>
                <input type="text" id="titulo" name="titulo"><br><br>

                <input type="file" id="fileInput" onchange="mostrarNombreArchivo()" />
                <input type="hidden" id="fileNameInput" name="fileName" value="" />

                <script>
                function mostrarNombreArchivo() {
                    var input = document.getElementById('fileInput');
                    var fileName = input.files.item(0).name;
                    document.getElementById('fileNameInput').value = fileName;
                }
                </script>

                <label for="sector">Etiqueta del Comunicado:</label><br>
                <select id="sector" name="sector">
                <?php foreach($this->sector as $s){ ?>
                        <option value="<?= $s['Id_Sector'] ?>">  <?= $s['Nombre_Sector'] ?>  </option>
                    <?php } ?>
                </select><br><br>

                <br><br><input type="submit" value="Agregar Comunicado">
            </form>


        </section>
  </main>
  <!--incluyo mi Nav-->
<?php include '../views/Nav.php'; ?>
 <!--incluyo el Footer oficial-->
 <?php include '../views/FooterAleara.php'; ?>
</body>
</html>

