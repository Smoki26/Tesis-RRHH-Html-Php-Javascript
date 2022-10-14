<?php
Class Calificacion{
    private $conn;
    private $calf;

public function __construct(){
    require_once("../models/Conexion.php");
    $this->conn = Conexion::conectar();
    $this->calf = array();
}

public function get_Calificaion(){
    $datos = mysqli_query($this->conn,"SELECT Cal.* FROM calificacion as Cal, legajo as L WHERE Cal.legajo_id_legajo = L.id_legajo");
    $this->calf = $datos;
    ($this->conn)->close();     
    
    return $this->calf;
}

public function get_Calificaion_Promedio(){
    $datos = mysqli_query($this->conn,"
        
            SELECT 
            avg(puntualidad) AS puntualidad, 
            avg(compañerismo) AS compañerismo,
            avg(presentacion_personal) AS presentacion_personal,
             avg(cumplimiento_normas) AS cumplimiento_normas,
             avg(aplicacion_procesos_trabajo) AS aplicacion_procesos,
             avg(responsabilidad) AS responsabilidad,
             avg(iniciativa) AS iniciativa
              FROM calificacion
        ");
    $this->calf = $datos;
    ($this->conn)->close();     
    
    return $this->calf;
}

}


?>