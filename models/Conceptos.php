<?php


//models/conceptos.php 

class Conceptos extends Model{

//Lista de conceptos en un sector en particular
    public function getConcepts($id_sector){
		
		//Validacion sector

        //si no existe
		if(!ctype_digit($id_sector)) throw new ValidacionException("Error id_sector 1 no existe el sector") ;
        //si es menor a uno
		if($id_sector < 1) throw new ValidacionException("El id_sector 2 el id es menor a 1");
        //se obtienen mas de 1 resultado  
		$this->db->query("SELECT * FROM sector
        WHERE id_sector = $id_sector ");
        if($this->db->numRows() !=1) throw new ValidacionException("No existe el sector");
		
		$this->db->query("SELECT DISTINCT    CON.Nombre_Concepto , CON.Monto as cmonto
							FROM Sector AS S 
                            INNER JOIN se_acordo AS SA on SA.Id_sector = S.Id_Sector AND S.Id_Sector = $id_sector
                            INNER JOIN conceptos AS CON on CON.Id_Concepto = SA.Id_Concepto
					  ");
		return $this->db->fetchAll();

	}
}