<?php 

// controllers/AgregarAdmin.php
require '../fw/fw.php';
require '../models/Administradores.php';
require '../views/AgregarAdmin.php';
require '../views/AgregarAdmin2.php';
require '../views/AltaUsuarioOk.php';


    if(isset($_POST['email'])){
        if ($_POST['password'] !== $_POST['confirmar_password']) {
            $vAdmin = new AgregarAdmin2();
        } else {
       
            $email = $_POST['email'];
            $nombre = $_POST['nombre'];
            $apellido =$_POST['apellido']:
            $usuario = $_POST['usuario'];
            $pw =sha1($_POST['password']);
            $adm = new Administradores();
           
            
            //$mNuevoUser->Alta($_POST['nombre'],$_POST['apellido'],$_POST['email'],sha1($_POST['contraseña']));
            echo "Usuario registrado: <br>";
            echo "Nombre: $nombre <br>";
            echo "Correo electrónico: $email <br>";
            echo "PW". $pw;

            $vAdmin = new AltaUsuarioOk();}
    }else{
    $vAdmin = new AgregarAdmin();
}

    $vAdmin->render();
?>