<?php


//models/No_Remunerativo.php 

class No_Remunerativo extends Model{

    //FALTAN LAS VALIDACIONES 
    

    public function getTodos(){
        $this->db->query("SELECT * FROM No_Remunerativo");
        return $this->db->fetchAll();
    }
//Lista de conceptos en un sector en particular
    public function getNo_remunerativos($id_categoria ,$mes , $anio){
		$this->db->query("SELECT NR.nombre , NR.monto 
							FROM no_remunerativo AS NR 
                            INNER JOIN se_asigna AS Asigna on Asigna.Id_NRemunerativo = NR.Id_NRemunerativo
                            INNER JOIN categorias AS C on C.Id_categoria = Asigna.Id_categoria 
                            INNER JOIN fechas AS F on F.Id_Fecha = NR.Id_fecha
                            WHERE  C.Id_categoria =$id_categoria AND F.mes =$mes AND F.año = $anio  
					  ");


		return $this->db->fetchAll();
	}
	


}