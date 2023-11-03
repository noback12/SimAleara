<?php


//models/Categorias.php 

class Categorias extends Model{
 
    public function getTodos(){
        $this->db->query("SELECT * FROM categorias c  INNER JOIN sector s ON c.id_sector = s.Id_sector");
        return $this->db->fetchAll();
    }

    public function getTodasSector($idSector){
        $this->db->query("SELECT * FROM categorias c  INNER JOIN sector s ON c.id_sector = s.Id_sector WHERE s.id_sector = $idSector");
        return $this->db->fetchAll();
    }

    public function agregarCategoria($descripcion,$fallo,$id_sector){
        $this->db->query("INSERT INTO categorias (descripcion, fallo, id_sector) 
        VALUES ('$descripcion', '$fallo', '$id_sector')");
    }
    public function buscarIdCategoria($descripcion,$id_sector){

        $id_cat = $this->db->query("SELECT * FROM categorias c  WHERE descripcion = '$descripcion' AND Id_Sector = $id_sector");
        $id_cat = $this->db->fetch();
        if($id_cat){    
            return $id_cat['Id_Categoria'] ;

        }else{
            return 0;
        }   
    }

    public function EliminarCategoria($Id_Categoria){ 
        $this->db->query("DELETE FROM categorias WHERE Id_Categoria = $Id_Categoria ");
    }

    public function verHistorico($id_categoria){
        $this->db->query("SELECT * FROM categorias c  
                            INNER JOIN sueldo_basico AS SB on C.Id_Categoria = SB.Id_Categoria
                            INNER JOIN fechas AS F on F.Id_Fecha = SB.Id_fecha
                            INNER JOIN sector s ON c.id_sector = s.Id_sector
                            WHERE  C.Id_categoria =$id_categoria ORDER BY f.año ASC, f.mes ASC
                            ");
        return $this->db->fetchAll();

    }
}