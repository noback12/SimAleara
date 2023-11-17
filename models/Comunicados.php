<?php


//models/Comunicados.php 

class Comunicados extends Model{
 
    public function getTodos(){
        $this->db->query("SELECT * FROM comunicados c 
                            INNER JOIN sector S on c.Id_Sector = S.Id_Sector
                            INNER JOIN fechas f ON c.Id_Fecha = f.Id_Fecha
                            ORDER BY c.Id_Fecha ASC");
        return $this->db->fetchAll();
    }

    public function agregarComunicado( $titulo,$direccion , $etiqueta ,$fecha_publicacion){
        //Validaciones

        //Validar titulo 
        if(!isset($titulo)) throw new ValidacionException("error titulo 1");
		if(strlen($titulo) <2  )throw new ValidacionException("error titulo menor a 2 caracteres");
		//dato sanitizado
		$titulo= substr($titulo, 0, 50);
        
        //Validar etiqueta
        //Si no existe
        if(!ctype_digit($etiqueta)) throw new ValidacionException("Error etiqueta 1") ;
		//si es menor a uno
		if( $etiqueta < 1) throw new ValidacionException("El id de la etiqueta es menor a 1");
		//se obtienen mas de 1 resultado 
		$this->db->query("SELECT * FROM sector
						 WHERE Id_Sector =  $etiqueta ");
		if($this->db->numRows() !=1) throw new ValidacionException("Multiples etiquetas elegidas");

        //Validar Idfecha 
        //Si no existe
        if(!ctype_digit($fecha_publicacion)) throw new ValidacionException("Error fecha 1") ;
		//si es menor a uno
		if( $fecha_publicacion < 1) throw new ValidacionException("El id de la fecha es menor a 1");
		//se obtienen mas de 1 resultado 
		$this->db->query("SELECT * FROM fechas
						 WHERE Id_Fecha =  $fecha_publicacion ");
		if($this->db->numRows() !=1) throw new ValidacionException("multiples fechas elegidas");


        ////////////////////////////////////////////////////
        // Preparar la consulta SQL para insertar los detalles del comunicado en la base de datos
        $this->db->query("INSERT INTO comunicados (Titulo_Comunicado, Direccion , Id_Sector , Id_Fecha )
                         VALUES ('$titulo', '$direccion', '$etiqueta' , '$fecha_publicacion')");
    }

    public function EliminarComunicado($comunicado){

        //Elimino el comunicado
        $this->db->query("DELETE FROM comunicados WHERE Id_Comunicado = $comunicado ");
        
    }
}