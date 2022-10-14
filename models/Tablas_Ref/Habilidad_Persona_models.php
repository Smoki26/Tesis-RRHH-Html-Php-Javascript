<?php
Class Habilidad_Persona{
    private $conn;
    private $habs_b_pers;
    private $habs_d_pers;
    private $hab_b_prom;
    private $hab_d_prom;

public function __construct(){
    require_once("../models/Conexion.php");
    
    $this->habs_b_pers = array();
    $this->habs_d_pers = array();
    $this->hab_b_prom = array();
    $this->hab_d_prom = array();
}

public function get_habilidad_blanda_persona(){
    $this->conn = Conexion::conectar();
    $datos = mysqli_query($this->conn,"
        SELECT h1, h2, h3, h4, h5, h6, h7, h8, h9, h10 
        FROM habilidad_persona as h_p, legajo as L 
        WHERE h_p.id_hab_pers = L.habilidad_persona_id
    ");
    $this->habs_b_pers = $datos;
    ($this->conn)->close();     
    
    return $this->habs_b_pers;
}
public function get_habilidad_dura_persona(){
    $this->conn = Conexion::conectar();
    $datos = mysqli_query($this->conn,"
        SELECT h11, h12, h13, h14, h15, h16, h17, h18, h19, h20 
        FROM habilidad_persona as h_p, legajo as L 
        WHERE h_p.id_hab_pers = L.habilidad_persona_id
    ");
    $this->habs_d_pers = $datos;
    ($this->conn)->close();     
    
    return $this->habs_d_pers;
}

public function get_habilidad_blanda_persona_promedio(){
    $this->conn = Conexion::conectar();
    $datos = mysqli_query($this->conn,"
            SELECT 
                avg(h1) AS h1, 
                avg(h2) AS h2,
                avg(h3) AS h3,
                avg(h4) AS h4,
                avg(h5) AS h5,
                avg(h6) AS h6,
                avg(h7) AS h7,
                avg(h8) AS h8,
                avg(h9) AS h9,
                avg(h10) AS h10        
            FROM habilidad_persona
        ");
    $this->hab_b_prom = $datos;
    ($this->conn)->close();     
    
    return $this->hab_b_prom;
}

public function get_habilidad_dura_persona_promedio(){
    $this->conn = Conexion::conectar();
    $datos = mysqli_query($this->conn,"
            SELECT 
                avg(h11) AS h11, 
                avg(h12) AS h12,
                avg(h13) AS h13,
                avg(h14) AS h14,
                avg(h15) AS h15,
                avg(h16) AS h16,
                avg(h17) AS h17,
                avg(h18) AS h18,
                avg(h19) AS h19,
                avg(h20) AS h20        
            FROM habilidad_persona
        ");
    $this->hab_d_prom = $datos;
    ($this->conn)->close();     
    
    return $this->hab_d_prom;
}

}


?>