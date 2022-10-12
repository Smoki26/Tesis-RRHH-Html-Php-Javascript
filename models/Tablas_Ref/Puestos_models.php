<?php

Class Puesto{
    private $conn;
    private $puesto;

public function __construct(){
    require_once("../models/Conexion.php");
    $this->conn = Conexion::conectar();
    $this->puesto = array();
}

public function get_Puesto(){
    $datos = mysqli_query($this->conn,"SELECT Pu.id_puesto ,count(P.puesto_id) as total, Pu.nombre_puesto  FROM puesto as Pu, persona as P WHERE Pu.id_puesto = P.puesto_id GROUP BY Pu.nombre_puesto");
    $this->puesto = $datos;
    ($this->conn)->close();     
    
    return $this->puesto;
}

}

?>