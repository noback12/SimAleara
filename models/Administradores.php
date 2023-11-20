<?php

//models/Categorias.php 

class Administradores extends Model{
 
    public function Inicio($usuario, $passwd){
		$this->db->query("SELECT *
										FROM administradores
										WHERE usuario='$usuario' and contraseña='$passwd'
										LIMIT 1");
		return $this->db->fetchAll();
	}


	public function Alta($nombre, $apellido,$usuario, $email, $contraseña){
		// VALIDACIONES
		//Validacion nombre
		if(!isset($nombre)) throw new ValidacionException("error nombre 1");
		if(strlen($nombre) <2  )throw new ValidacionException("error nombre menor a 2 caracteres");

		//dato sanitizado
		$nombre = substr($nombre, 0, 30);

		//Validacion apellido
		if(!isset( $apellido)) throw new ValidacionException("error apellido 1");
		if(strlen( $apellido) <2  )throw new ValidacionException("error apellido menor a 2 caracteres");

		//dato sanitizado
		 $apellido = substr( $apellido, 0, 30);

		 //Validacion nombre
		if(!isset($usuario)) throw new ValidacionException("error usuario 1");
		if(strlen($usuario) <2  )throw new ValidacionException("error usuario menor a 2 caracteres");

		//dato sanitizado
		$usuario = substr($usuario, 0, 30);

		//Validacion email
		if(!isset($email)) throw new ValidacionException("error email 1");
		if(strlen($email) <2  )throw new ValidacionException("error email menor a 2 caracteres");

		//dato sanitizado
		$email = substr($email, 0, 30);

		//Validacion contraseña
		if(!isset($contraseña)) throw new ValidacionException("error contraseña 1");
		if(strlen($contraseña) <2  )throw new ValidacionException("error contraseña menor a 2 caracteres");

		//dato sanitizado
		$contraseña = substr($contraseña, 0, 30);


		//////////////////////////////////////////////////////////////

		$this->db->query("INSERT INTO administradores (nombre ,apellido,,usuario,email,contraseña) 
		values ('$nombre','$apellido','$usuario','$email','$contraseña')	");
}



}

?>