<?php


//models/No_Remunerativo.php 

class No_Remunerativo extends Model{

    public function getTodos(){
        $this->db->query("SELECT * FROM no_remunerativo nr
                            INNER JOIN fechas f ON nr.Id_Fecha = f.Id_Fecha
                            INNER JOIN se_asigna AS Asigna on Asigna.Id_NRemunerativo = NR.Id_NRemunerativo
                            INNER JOIN categorias AS C on C.Id_categoria = Asigna.Id_categoria ORDER BY f.año DESC, f.mes DESC
                            " );
        return $this->db->fetchAll();
    }


//Lista de conceptos en un sector en particular
    public function getNo_remunerativos($id_categoria ,$mes , $anio){
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

        ///////////////////////////////////////////////////
        //Busco 
		$this->db->query("SELECT NR.nombre , NR.monto 
							FROM no_remunerativo AS NR 
                            INNER JOIN se_asigna AS Asigna on Asigna.Id_NRemunerativo = NR.Id_NRemunerativo
                            INNER JOIN categorias AS C on C.Id_categoria = Asigna.Id_categoria 
                            INNER JOIN fechas AS F on F.Id_Fecha = NR.Id_fecha
                            WHERE  C.Id_categoria =$id_categoria AND F.mes =$mes AND F.año = $anio  
					  ");
		return $this->db->fetchAll();
	}
	
    public function agregarUnNoRemunerativo( $nombre,$montoNR,$Id_fecha,$Id_Categoria){
        
        //Validacion nombre
		if(!isset($nombre)) throw new ValidacionException("error nombre 1 no existe ");
		if(strlen($nombre) <2  )throw new ValidacionException("error nombre menor a 2 caracteres");
		//dato sanitizado
		$nombre=substr($nombre, 0, 50);
        
        //Validacion montoNR
        //si no existe
		if(!ctype_digit($montoNR)) throw new ValidacionException("Error montoNR 1 inexistente") ;
        //si es menor a 0
		if($montoNR < 0) throw new ValidacionException("El montoNR 2 es negativo");

        //Validar Idfecha 
        //Si no existe
        if(!ctype_digit($Id_fecha)) throw new ValidacionException("Error fecha 1") ;
		//si es menor a uno
		if( $Id_fecha < 1) throw new ValidacionException("El id de la fecha es menor a 1");
		//se obtienen mas de 1 resultado 
		$this->db->query("SELECT * FROM fechas
						 WHERE Id_Fecha =  $Id_fecha ");
		if($this->db->numRows() !=1) throw new ValidacionException("multiples fechas elegidas");

        //Validacion Id categoria
        //si no existe
		if(!ctype_digit($Id_Categoria)) throw new ValidacionException("Error idCategoria 1 no existe la categoria") ;
        //si es menor a uno
		if($Id_Categoria < 1) throw new ValidacionException("la categoria es menor a 1");
        //se obtienen mas de 1 resultado  
		$this->db->query("SELECT * FROM categorias
        WHERE Id_Categoria = $Id_Categoria ");
        if($this->db->numRows() !=1) throw new ValidacionException("Multiples categorias");

        //////////////////////////////////////////////////
        //Inserto en la tabla No remunerativa
        $this->db->query("INSERT INTO no_remunerativo (Nombre, monto, Id_Fecha) 
        VALUES ('$nombre', $montoNR, '$Id_fecha')");
         //Busco lo que inserte 
       $query = $this->db->query("SELECT Id_NRemunerativo
                                         FROM no_remunerativo NR
                                        WHERE Id_Fecha ='$Id_fecha' AND $montoNR =monto AND '$nombre' = Nombre 
                                        ORDER BY Id_NRemunerativo DESC LIMIT 1");
        $query = $this->db->fetch();
        $noRemun= $query['Id_NRemunerativo'];
        //Lo agrego en la tabla de relacion N N 
        $this->db->query("INSERT INTO se_asigna (Id_Categoria, Id_NRemunerativo) 
            VALUES ($Id_Categoria,$noRemun)");
            

    }

    //Borro todos los No remunerativos que quedaron Sin relacion
    public function limpiarNoRemunerativos(){
    $this->db->query("DELETE FROM no_remunerativo
    WHERE Id_NRemunerativo NOT IN (SELECT Id_NRemunerativo FROM se_asigna); ");
    }

    public function EliminarNoRemunerativo($id_NoRem){
        //Validacion id_NoRem
        //si no existe
		if(!ctype_digit($id_NoRem)) throw new ValidacionException("Error id_NoRem 1 no existe la categoria") ;
        //si es menor a uno
		if($id_NoRem < 1) throw new ValidacionException("la id_NoRem es menor a 1");
        //se obtienen mas de 1 resultado  
		$this->db->query("SELECT * FROM no_remunerativo
        WHERE Id_NRemunerativo = $id_NoRem ");
        if($this->db->numRows() !=1) throw new ValidacionException("Multiples id_NoRem");
        ///////////////////////////////////////
        //Borro
        $this->db->query("DELETE FROM no_remunerativo 
        WHERE Id_NRemunerativo = $id_NoRem");
    }

}
?>