<<?php

//models/Categorias.php 

class Categorias extends Model{
 
    public function getTodos(){
        $this->db->query("SELECT * FROM categorias c  INNER JOIN sector s ON c.id_sector = s.Id_sector");
        return $this->db->fetchAll();
    }

    public function getTodasSector($idSector){
        // VALIDACIONES
        //si no existe
		if(!ctype_digit($idSector)) throw new ValidacionException("Error idSector 1 no existe el sector") ;
        //si es menor a uno
		if($idSector < 1) throw new ValidacionException("El sector es menor a 1");
        //se obtienen mas de 1 resultado  
		$this->db->query("SELECT * FROM sector
        WHERE id_sector = $idSector ");
        if($this->db->numRows() !=1) throw new ValidacionException("No existe el sector");

        ////////////////////////////////////////////////////////////////////////////////////
        $this->db->query("SELECT * FROM categorias c  INNER JOIN sector s ON c.id_sector = s.Id_sector WHERE s.id_sector = $idSector");
        return $this->db->fetchAll();
    }

    public function agregarCategoria($descripcion,$fallo,$idSector){
        // VALIDACIONES
        
        //Validacion descripcion
		if(!isset($descripcion)) throw new ValidacionException("error descripcion 1 no existe ");
		if(strlen($descripcion) <2  )throw new ValidacionException("error descripcion menor a 2 caracteres");
		//dato sanitizado
		$descripcion=substr($descripcion, 0, 50);
        
        //Validacion fallo
        //si no existe
		if(!ctype_digit($fallo)) throw new ValidacionException("Error fallo 1 inexistente") ;
        //si es menor a 0
		if($fallo < 0) throw new ValidacionException("El fallo 2 es negativo");
       
        //Validacion sector
        //si no existe
		if(!ctype_digit($idSector)) throw new ValidacionException("Error idSector 1 no existe el sector") ;
        //si es menor a uno
		if($idSector < 1) throw new ValidacionException("El idsector 2 el id es menor a 1");
        //se obtienen mas de 1 resultado  
		$this->db->query("SELECT * FROM sector
        WHERE id_sector = $idSector ");
        if($this->db->numRows() !=1) throw new ValidacionException("No existe el sector");

        ////////////////////////////////////////////////////////////////////////////////////
        $this->db->query("INSERT INTO categorias (descripcion, fallo, id_sector) 
        VALUES ('$descripcion', '$fallo', '$idSector')");
    }


    public function buscarIdCategoria($descripcion,$idSector){
        //Validacion descripcion
		if(!isset($descripcion)) throw new ValidacionException("error descripcion 1 no existe ");
		if(strlen($descripcion) <2  )throw new ValidacionException("error descripcion menor a 2 caracteres");
		//dato sanitizado
		$descripcion=substr($descripcion, 0, 50);

        //Validacion sector
        //si no existe
		if(!ctype_digit($idSector)) throw new ValidacionException("Error idSector 1 no existe el sector") ;
        //si es menor a uno
		if($idSector < 1) throw new ValidacionException("El idsector 2 el id es menor a 1");
        //se obtienen mas de 1 resultado  
		$this->db->query("SELECT * FROM sector
        WHERE id_sector = $idSector ");
        if($this->db->numRows() !=1) throw new ValidacionException("No existe el sector");

        ////////////////////////////////////////////////////////////////////////////////////
        $id_cat = $this->db->query("SELECT * FROM categorias c  WHERE descripcion = '$descripcion' AND Id_Sector = $idSector");
        $id_cat = $this->db->fetch();
        if($id_cat){    
            return $id_cat['Id_Categoria'] ;

        }else{
            return 0;
        }   
    }

    public function EliminarCategoria($Id_Categoria){ 
        //Validacion Id categoria

        //si no existe
		if(!ctype_digit($Id_Categoria)) throw new ValidacionException("Error idCategoria 1 no existe la categoria") ;
        //si es menor a uno
		if($Id_Categoria < 1) throw new ValidacionException("la categoria es menor a 1");
        //se obtienen mas de 1 resultado  
		$this->db->query("SELECT * FROM categorias
        WHERE Id_Categoria = $Id_Categoria ");
        if($this->db->numRows() !=1) throw new ValidacionException("No existe la categoria");

        //////////////////////////////////////////////////////////////////
        $this->db->query("DELETE FROM categorias WHERE Id_Categoria = $Id_Categoria ");
    }

    public function verHistorico($Id_Categoria){

        //si no existe
		if(!ctype_digit($Id_Categoria)) throw new ValidacionException("Error idCategoria 1 no existe la categoria") ;
        //si es menor a uno
		if($Id_Categoria < 1) throw new ValidacionException("la categoria es menor a 1");
        //se obtienen mas de 1 resultado  
		$this->db->query("SELECT * FROM categorias
        WHERE Id_Categoria = $Id_Categoria ");
        if($this->db->numRows() !=1) throw new ValidacionException("No existe la categoria");


        $this->db->query("SELECT * FROM categorias c  
                            INNER JOIN sueldo_basico AS SB on C.Id_Categoria = SB.Id_Categoria
                            INNER JOIN fechas AS F on F.Id_Fecha = SB.Id_fecha
                            INNER JOIN sector s ON c.id_sector = s.Id_sector
                            WHERE  C.Id_categoria =$Id_Categoria ORDER BY f.año ASC, f.mes ASC
                            ");
        return $this->db->fetchAll();

    }
}