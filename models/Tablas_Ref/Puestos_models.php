<?php

Class Puesto{
    private $conn;
    private $puesto;
    private $hab_b_pue_prom;
    private $hab_d_pue_prom;

public function __construct(){
    require_once("../models/Conexion.php");
    $this->puesto = array();
	$this->hab_b_pue_prom = array();
	$this->hab_d_pue_prom = array();
}

public function get_Puesto(){
    $this->conn = Conexion::conectar();
    $datos = mysqli_query($this->conn,"SELECT Pu.id_puesto ,count(P.puesto_id) as total, Pu.nombre_puesto  FROM puesto as Pu, persona as P WHERE Pu.id_puesto = P.puesto_id GROUP BY Pu.nombre_puesto");
    $this->puesto = $datos;
    ($this->conn)->close();     
    
    return $this->puesto;
}

public function get_habilidad_blanda_puesto_promedio(){
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
            FROM puesto
        ");
    $this->hab_b_pue_prom = $datos;
    ($this->conn)->close();     
    
    return $this->hab_b_pue_prom;
}

public function get_habilidad_dura_puesto_promedio(){
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
            FROM puesto
        ");
    $this->hab_d_pue_prom = $datos;
    ($this->conn)->close();     
    
    return $this->hab_d_pue_prom;
}


}

?>