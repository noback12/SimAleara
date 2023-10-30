<?php


//models/Categorias.php 

class Categorias extends Model{
 
    public function getTodos(){
        $this->db->query("SELECT * FROM categorias c  INNER JOIN sector s ON c.id_sector = s.Id_sector");
        return $this->db->fetchAll();
    }

}