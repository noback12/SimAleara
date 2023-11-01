<?php


//models/Sueldo_Basico.php 

class Sueldo_Basico extends Model{
    
    
    public function getTodos(){
        $this->db->query("SELECT * FROM sueldo_basico sb  ");
        return $this->db->fetchAll();
    }

    public function agregarUnSueldoBasico($Sueldo_Basico, $idCategoria,$idFecha){

        $this->db->query("INSERT INTO sueldo_basico (Sueldo_Basico, Id_Categoria, Id_fecha) 
        VALUES ('$Sueldo_Basico', '$idCategoria', '$idFecha')");

    }
   
}