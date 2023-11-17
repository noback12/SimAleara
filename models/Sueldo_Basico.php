<?php


//models/Sueldo_Basico.php 

class Sueldo_Basico extends Model{
    
    
    public function getTodos(){
        $this->db->query("SELECT * FROM sueldo_basico sb  ");
        return $this->db->fetchAll();
    }

    public function agregarUnSueldoBasico($Sueldo_Basico, $idCategoria,$idFecha){

        //Validaciones

        //Validacion sueldo basico
        //si no existe
		if(!ctype_digit($Sueldo_Basico)) throw new ValidacionException("Error Sueldo_Basico 1 inexistente") ;
        //si es menor a 0
		if($Sueldo_Basico < 0) throw new ValidacionException("El Sueldo_Basico 2 es negativo");

        //Validacion Id categoria
        //si no existe
		if(!ctype_digit($idCategoria)) throw new ValidacionException("Error idCategoria 1 no existe la categoria") ;
        //si es menor a uno
		if($idCategoria < 1) throw new ValidacionException("la categoria es menor a 1");
        //se obtienen mas de 1 resultado  
		$this->db->query("SELECT * FROM categorias
        WHERE Id_Categoria = $idCategoria ");
        if($this->db->numRows() !=1) throw new ValidacionException("Multiples categorias");

        //Validar Idfecha 
        //Si no existe
        if(!ctype_digit($idFecha)) throw new ValidacionException("Error fecha 1") ;
		//si es menor a uno
		if( $idFecha < 1) throw new ValidacionException("El id de la fecha es menor a 1");
		//se obtienen mas de 1 resultado 
		$this->db->query("SELECT * FROM fechas
						 WHERE Id_Fecha =  $idFecha ");
		if($this->db->numRows() !=1) throw new ValidacionException("multiples fechas elegidas");


        //////////////////////////////
        //Agrego
         $this->db->query("SELECT * FROM sueldo_basico WHERE Id_Categoria = '$idCategoria' AND Id_Fecha = '$idFecha'");
         $result  = $this->db->fetch();
        if($result) {
            // Si ya existe una entrada, realiza una actualización en lugar de una inserción
            $this->db->query("UPDATE sueldo_basico SET Sueldo_Basico = '$Sueldo_Basico' WHERE Id_Categoria = '$idCategoria' AND Id_Fecha = '$idFecha'");
        } else {
            // Si no existe ninguna entrada, realiza la inserción
            $this->db->query("INSERT INTO sueldo_basico (Sueldo_Basico, Id_Categoria, Id_Fecha) 
            VALUES ('$Sueldo_Basico', '$idCategoria', '$idFecha')");
        }

    }
   
}