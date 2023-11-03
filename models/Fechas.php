<?php


//models/fechas.php 

class Fechas extends Model{
 
    public function getTodas(){
        $this->db->query("SELECT * FROM fecha f ");
        return $this->db->fetchAll();
    }

    //buscar la fecha
    public function agregarFecha($anio , $mes){
           $query = $this->db->query("SELECT Id_fecha
                                         FROM fechas F
                                        WHERE año =$anio and $mes =mes");
           $query = $this->db->fetch();
           //var_dump($query);
           //Si existe la devuelvo
           if($query){
             $id_fecha = $query['Id_fecha'];
             return $id_fecha;
             //Sino la creo y la devuelvo
        }else{
            $this->db->query("INSERT INTO fechas (mes, año) VALUES ($mes, $anio)");
            $query = $this->db->query("SELECT Id_fecha
                                         FROM fechas F
                                        WHERE año =$anio and $mes =mes");
            $query = $this->db->fetch();
            $id_fecha = $query['Id_fecha'];
            return $id_fecha;
        }

    }
}