<?php


//models/conceptos.php 

class Conceptos extends Model{

    //FALTAN LAS VALIDACIONES 
    

    
//Lista de conceptos en un sector en particular
    public function getConcepts($id_sector){
		$this->db->query("SELECT DISTINCT    CON.Nombre_Concepto , CON.Monto as cmonto
							FROM Sector AS S 
                            INNER JOIN se_acordo AS SA on SA.Id_sector = S.Id_Sector AND S.Id_Sector = $id_sector
                            INNER JOIN conceptos AS CON on CON.Id_Concepto = SA.Id_Concepto
					  ");


		return $this->db->fetchAll();
	}
	


}