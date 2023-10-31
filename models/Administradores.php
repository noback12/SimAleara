<?php


//models/Categorias.php 

class Administradores extends Model{
 

    //FALTAN VALIDACIONES 
    public function getTodos(){
        $this->db->query("SELECT * FROM administradores A ");
        return $this->db->fetchAll();
    }

}