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

}


?>