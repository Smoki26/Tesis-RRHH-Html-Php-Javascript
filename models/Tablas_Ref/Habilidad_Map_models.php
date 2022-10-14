<?php
Class Habilidad_Map{
    private $conn;
    private $habs_b_map;
    private $habs_d_map;
    

public function __construct(){
    require_once("../models/Conexion.php");
    
    $this->habs_b_map = array();
    $this->habs_d_map = array();
    
}

public function get_habilidad_blanda_map(){
    $this->conn = Conexion::conectar();
    $datos = mysqli_query($this->conn,"
        SELECT nombre_habilidad
        FROM habilidad
        WHERE habilidad.id_tipo_hab = 1
    ");
    $this->habs_b_map = $datos;
    ($this->conn)->close();     
    
    return $this->habs_b_map;
}
public function get_habilidad_dura_nap(){
    $this->conn = Conexion::conectar();
    $datos = mysqli_query($this->conn,"
        SELECT nombre_habilidad
        FROM habilidad
        WHERE habilidad.id_tipo_hab = 0
    ");
    $this->habs_d_map = $datos;
    ($this->conn)->close();     
    
    return $this->habs_d_map;
}


}


?>