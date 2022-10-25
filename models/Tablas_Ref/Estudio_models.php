<?php
Class Estudio{
    private $conn;
    private $estu;

public function __construct(){
    require_once("../models/Conexion.php");
    $this->conn = Conexion::conectar();
    $this->estu = array();
}

public function get_Estudio(){
    $datos = mysqli_query($this->conn,"SELECT Est.* FROM estudio as Est, legajo as L WHERE Est.idestudios = L.estudio_idestudio");
    $this->estu = $datos;
    ($this->conn)->close();     
    
    return $this->estu;
}

public function get_Estudio_Sumas(){
    $datos = mysqli_query($this->conn,"
            SELECT 
            AVG(primario) AS primario,
            AVG(secundario) AS secundario ,
            AVG(terciario_universitario) AS terciario_universitario
            FROM estudio
        ");
    $this->estu = $datos;
    ($this->conn)->close();     
    
    return $this->estu;
}

}


?>