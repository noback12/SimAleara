<?php


//models/Comunicados.php 

class Comunicados extends Model{
 
    public function getTodos(){
        $this->db->query("SELECT * FROM comunicados");
        return $this->db->fetchAll();
    }

}