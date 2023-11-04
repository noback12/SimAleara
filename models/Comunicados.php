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

    public function agregarComunicado(  $titulo,$direccion , $etiqueta ,$fecha_publicacion){

        // Preparar la consulta SQL para insertar los detalles del comunicado en la base de datos
        $this->db->query("INSERT INTO comunicados (Titulo_Comunicado, Direccion , Id_Sector , Id_Fecha )
                         VALUES ('$titulo', '$direccion', '$etiqueta' , '$fecha_publicacion')");
    }

    public function EliminarComunicado($comunicado){

        //Elimino el comunicado
        $this->db->query("DELETE FROM comunicados WHERE Id_Comunicado = $comunicado ");
        
    }
}