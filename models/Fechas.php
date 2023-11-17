<?php

//models/fechas.php 
class Fechas extends Model{
 
    public function getTodas(){
        $this->db->query("SELECT * FROM fecha f ");
        return $this->db->fetchAll();
    }

    //buscar la fecha
    public function agregarFecha($anio , $mes){
        //Valido año y mes 
        //si no existe
		if(!ctype_digit($anio)) throw new ValidacionException("Error año 1 inexistente") ;
		if(!ctype_digit($mes)) throw new ValidacionException("Error mes 1 inexistente") ;
        //si es menor a 0
		if($anio < 0) throw new ValidacionException("El año  es negativo");
		if($mes < 0) throw new ValidacionException("El mes  es negativo");

        ///////////////////////////////////////////////
        $query = $this->db->query("SELECT Id_fecha
                                        FROM fechas F
                                    WHERE año =$anio and $mes =mes");
        $query = $this->db->fetch();
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
?>