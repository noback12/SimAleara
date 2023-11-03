<?php


//models/Sueldo_Basico.php 

class Sueldo_Basico extends Model{
    
    
    public function getTodos(){
        $this->db->query("SELECT * FROM sueldo_basico sb  ");
        return $this->db->fetchAll();
    }

    public function agregarUnSueldoBasico($Sueldo_Basico, $idCategoria,$idFecha){

         $this->db->query("SELECT * FROM sueldo_basico WHERE Id_Categoria = '$idCategoria' AND Id_Fecha = '$idFecha'");
         $result  = $this->db->fetch();
         //var_dump($result);
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