<?php 

// controllers/Administradores.php
require '../fw/fw.php';
require '../models/Administradores.php';
require '../views/InicioSesion.php';
require '../views/MenuAdministrador.php';


$adm = new Administradores();

if(isset($_GET["usuario"])){
	//validaciones	
	$usuario = $_GET["usuario"];
	$passwd = sha1($_GET["password"]);
	$administrador = $adm->Inicio($usuario, $passwd);

    if(!empty($administrador) ){
		session_start();
		$_SESSION['logueado'] = true;
		$_SESSION['usuario'] = $usuario ;
		$_SESSION['empleado'] = true;
		header("Location: Administrador");
        $vAdmin = new MenuAdministrador();
		$vAdmin->administrador = $administrador;
	}else{
		echo "<script>alert('Usuario o contraseña incorrecto')</script>";
		$vAdmin = new InicioSesion();
	}   
}
else{
	$vAdmin = new InicioSesion();
}
$vAdmin->render();
?>