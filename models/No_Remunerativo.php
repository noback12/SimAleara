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
	
    public function agregarUnNoRemunerativo( $nombre,$montoNR,$Id_fecha,$Id_Categoria){

        
        //Inserto en la tabla No remunerativa
        $this->db->query("INSERT INTO no_remunerativo (Nombre, monto, Id_Fecha) 
        VALUES ('$nombre', $montoNR, '$Id_fecha')");
    //Busco lo que inserte 
       $query = $this->db->query("SELECT Id_NRemunerativo
                                         FROM no_remunerativo NR
                                        WHERE Id_Fecha ='$Id_fecha' AND $montoNR =monto AND '$nombre' = Nombre ");
        $query = $this->db->fetch();
    var_dump($query);
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
}