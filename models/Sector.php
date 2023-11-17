<?php
//models/Sector.php 
class Sector extends Model{

    public function getTodos(){
        $this->db->query("SELECT * FROM sector s  INNER JOIN categorias c ON c.id_sector = s.Id_sector");
        return $this->db->fetchAll();
    }

    public function getSector(){
        $this->db->query("SELECT * FROM sector s ");
        return $this->db->fetchAll();
    }

    //Para mostrar un recibo 
	public function getRecibo($id_sector , $id_categoria ,$mes ,$anio){

        //Validaciones 
        //Validacion sector
        //si no existe
		if(!ctype_digit($id_sector)) throw new ValidacionException("Error id_sector 1 no existe el sector") ;
        //si es menor a uno
		if($id_sector < 1) throw new ValidacionException("El id_sector 2 el id es menor a 1");
        //se obtienen mas de 1 resultado  
		$this->db->query("SELECT * FROM sector
        WHERE id_sector = $id_sector ");
        if($this->db->numRows() !=1) throw new ValidacionException("No existe el sector");
        
        //Validacion Id categoria
        //si no existe
		if(!ctype_digit($id_categoria)) throw new ValidacionException("Error idCategoria 1 no existe la categoria") ;
        //si es menor a uno
		if($id_categoria < 1) throw new ValidacionException("la categoria es menor a 1");
        //se obtienen mas de 1 resultado  
		$this->db->query("SELECT * FROM categorias
        WHERE Id_Categoria = $id_categoria ");
        if($this->db->numRows() !=1) throw new ValidacionException("Multiples categorias");

        //Valido año y mes 
        //si no existe
		if(!ctype_digit($anio)) throw new ValidacionException("Error año 1 inexistente") ;
		if(!ctype_digit($mes)) throw new ValidacionException("Error mes 1 inexistente") ;
        //si es menor a 0
		if($anio < 0) throw new ValidacionException("El año  es negativo");
		if($mes < 0) throw new ValidacionException("El mes  es negativo");


        ///////////////////////////////////////
        //Busco
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

?>