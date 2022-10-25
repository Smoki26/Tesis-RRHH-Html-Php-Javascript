<?php

Class Puesto{
    private $conn;
    private $datos;
    private $hab_b_pue_prom;
    private $hab_d_pue_prom;
    private $nombre_puesto;
    private $exp_puesto;
    private $habilidad_puesto;
    private $psicofisico_puesto;

public function __construct($nombre_puesto="N/A",$exp_puesto="N/A",$habilidad_puesto=array(),$psicofisico_puesto=array()){
    require_once("../models/Conexion.php");
    $this->datos = array();
	$this->hab_b_pue_prom = array();
	$this->hab_d_pue_prom = array();
    $this->nombre_puesto = $nombre_puesto;
    $this->exp_puesto = $exp_puesto;
    $this->habilidad_puesto = $habilidad_puesto;
    $this->psicofisico_puesto = $psicofisico_puesto;
}

public function get_Puesto(){
    $this->conn = Conexion::conectar();
    $sql = mysqli_query($this->conn,"SELECT Pu.id_puesto ,count(P.puesto_id) as total, Pu.nombre_puesto, H.nombre_habilidad FROM puesto as Pu, persona as P, habilidad as H WHERE Pu.id_puesto = P.puesto_id and H.id_habilidad = Pu.H1 GROUP BY Pu.nombre_puesto");
    $this->datos = $sql;
    ($this->conn)->close();     
    
    return $this->datos;
}
public function get_Hab(){
    $this->conn = Conexion::conectar();
    $sql = mysqli_query($this->conn,"SELECT * FROM habilidad");
    $this->datos = $sql;
    ($this->conn)->close();     
    
    return $this->datos;
}


public function insertarPsi(){
    $this->conn = Conexion::conectar();
    $arrPsi = $this->psicofisico_puesto;
    $prom = array_count_values($arrPsi);
    print_r($prom);
    print_r($arrPsi);
    if($prom[0] > $prom[1]){
        $sql = mysqli_query($this->conn,"INSERT INTO psicofisico_puesto(`examen_visual`, `evalucion_fisica`, `alergia`, `lesiones`, `problema_cardiaco`, `examen_psicofisico`, `diagnostico`) VALUES (".$arrPsi[0].",".$arrPsi[1].",".$arrPsi[2].",".$arrPsi[3].",".$arrPsi[4].",".$arrPsi[5].",".$prom[0].")");
    }else{
        $sql = mysqli_query($this->conn,"INSERT INTO psicofisico_puesto(`examen_visual`, `evalucion_fisica`, `alergia`, `lesiones`, `problema_cardiaco`, `examen_psicofisico`, `diagnostico`) VALUES (".$arrPsi[0].",".$arrPsi[1].",".$arrPsi[2].",".$arrPsi[3].",".$arrPsi[4].",".$arrPsi[5].",".$prom[1].")");
    }
    if ($sql = true) {
        echo "<script> alert('Se inserto un nuevo psico')</script>";

    }else {
        echo "Error al insertar psicofisico: " . mysqli_error($sql);
    
    }
    $sqlaux = mysqli_query($this->conn,"SELECT id_ps_puesto FROM psicofisico_puesto ORDER BY id_ps_puesto DESC" );
    return $sqlaux;
    ($this->conn)->close(); 
}

public function insertarPuesto($id){
    $this->conn = Conexion::conectar();
    $arrHab = $this->habilidad_puesto;
    $hab_val = "";
    $hab_key = "";
    for($i = 0; $i < count($arrHab);$i++){
        $hab_val = $hab_val.",".$arrHab[$i]; 
        $hab_key = $hab_key.", `h".($i+1)."`";
    }
    $hab_key = '`experiencia_nivel`, `psicofisico_puesto_id`, `nombre_puesto`'.$hab_key;
    $hab_val = $this->exp_puesto.",".$id.",".$this->nombre_puesto.$hab_val;
    
    echo "<br>".$hab_val."<br>";
    echo $hab_key."<br>";
echo "INSERT INTO puesto (".$hab_key.") VALUES (".$hab_val.")";

    $sql = mysqli_query($this->conn,"INSERT INTO puesto (".$hab_key.") VALUES (".$hab_val.")");
    if ($sql = true) {
        echo "<script> alert('Se inserto un nuevo puesto')</script>";

    }else {
        echo "Error al insertar puesto: " . mysqli_error($sql);
    
    }
    ($this->conn)->close(); 

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