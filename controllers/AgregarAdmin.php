<?php 

// controllers/AgregarAdmin.php
require '../fw/fw.php';
require '../models/Administradores.php';
require '../views/AgregarAdmin.php';
require '../views/AgregarAdmin2.php';
require '../views/AltaUsuarioOk.php';

session_start();
//Si inicie sesion acceso
    if (isset($_SESSION['logueado'])) {
        if(isset($_POST['email'])  && isset( $_POST['password'] )  ){
            if ($_POST['password'] !== $_POST['confirmar_password']) {
                $vAdmin = new AgregarAdmin2();
            } else {
                $nombre = $_POST['nombre'];
                $apellido= $_POST['apellido'];
                $email = $_POST['email'] ;
                $usuario = $_POST['usuario'];
                $pw =sha1($_POST['password']);
                $adm = new Administradores();
            
                
                $adm->Alta($nombre,$apellido,$usuario, $email, $pw);
            

                $vAdmin = new AltaUsuarioOk();}
        }else{
        $vAdmin = new AgregarAdmin();
    }

        $vAdmin->render();
    }
    else {//Sino envio al formulario de inicio de sesion 
    header("Location: InicioSesion");}
?>