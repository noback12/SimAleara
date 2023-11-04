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

}