<!-- html/ListaCategorias.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<style>
 		 <?php include "style.css" ?>
 		</style>
	<title>Lista Categorias</title>
</head>
<body>
	<h1>Lista Categorias</h1>

    <table>
        <tr><th>ID</th><th>Descripcion</th></tr>
        <?php foreach($this->categorias as $c){ ?>
            <tr><td><?= $c['id_cat'] ?> </td>  <td><?= $c['descripcion'] ?>  </td> </tr>
        <?php } ?>
    </table>
</body>
</html>

