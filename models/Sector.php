<?php


//models/Sector.php 

class Sector extends Model{

    //FALTAN LAS VALIDACIONES 
    public function getTodos(){
        $this->db->query("SELECT * FROM sector s  INNER JOIN categorias c ON c.id_sector = s.Id_sector");
        return $this->db->fetchAll();
    }

    //Para mostrar un recibo 
	public function getRecibo($id_sector , $id_categoria ,$mes ,$anio){
		$this->db->query("SELECT DISTINCT   S.Nombre_Sector ,  C.descripcion , SB.Sueldo_basico ,F.Id_Fecha ,F.mes ,F.año ,C.fallo
							FROM Sector AS S 
							INNER JOIN categorias AS C ON C.Id_Sector = S.Id_Sector AND S.Id_Sector = $id_sector
                            INNER JOIN sueldo_basico AS SB on C.Id_Categoria = SB.Id_Categoria
                            INNER JOIN fechas AS F on F.Id_Fecha = SB.Id_fecha
                            INNER JOIN se_acordo AS SA on SA.Id_sector = S.Id_Sector
                            INNER JOIN conceptos AS CON on CON.Id_Concepto = SA.Id_Concepto
                            WHERE  C.Id_categoria =$id_categoria AND F.mes =$mes AND F.año = $anio  
					  ");
		return $this->db->fetchAll();
	}
}