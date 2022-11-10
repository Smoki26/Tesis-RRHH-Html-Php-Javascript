<?php
Class Psicofisico_P{
    private $conn;
    private $altura;
    private $peso;
    private $alergia;
    private $exm_fisico;
    private $lesiones;
    private $cardio;
    private $exm_visual;
    private $exm_psicofisico;
    private $otra_enfermedade;
    private $info_medic;
    private $diagnostico;
    
    public function __construct($altura,$peso,$alergia,$exm_fisico,$lesiones,$cardio,$exm_visual,$exm_psicofisico,$otra_enfermedade,$info_medic,$diagnostico){
        require_once("../models/Conexion.php");
        $this->conn = Conexion::conectar();
        $this->altura = $altura;
        $this->peso = $peso;
        $this->alergia = $alergia;
        $this->exm_fisico = $exm_fisico;
        $this->lesiones = $lesiones;
        $this->cardio = $cardio;
        $this->exm_visual = $exm_visual;
        $this->exm_psicofisico = $exm_psicofisico;
        $this->otra_enfermedade = $otra_enfermedade;
        $this->info_medic = $info_medic;
        $this->diagnostico = $diagnostico;
    
    }

    public function get_Psicof_P(){
        $this->conn = Conexion::conectar();
        $sql = mysqli_query($this->conn,"SELECT id_ps_per FROM `psciofisico_:persona` ORDER BY id_ps_per desc");
        $row = $sql->fetch_assoc();

        return $row['id_ps_per'];
    }

    public function InsertPsicofisico_P($dni,$id){
        $this->conn = Conexion::conectar();
        $sql = mysqli_query($this->conn,"INSERT INTO `psciofisico_:persona`(`peso`, `altura`, `examen_visual`, `evaluacion_fisica`, `alergia`, `lesiones`, `problema_cardiaco`, `examen_psicofisico`, `otra_enfermedade`, `informe_medico`, `diagnostico`) VALUES ('".$this->peso."','".$this->altura."','".$this->exm_visual."','".$this->exm_fisico."','".$this->alergia."','".$this->lesiones."','".$this->cardio."','".$this->exm_psicofisico."','".$this->otra_enfermedade."','".$this->info_medic."','".$this->diagnostico."')");
        if ($sql = true) {
            echo "<script> alert('Se inserto un nuevo psicofisico!! ')</script>";
            
        }else {
            echo "Error al insertar psicofisico!! : " . mysqli_error($sql);
        }


        $sql2 = mysqli_query($this->conn,"UPDATE `legajo` SET `psicofisico_persona_:id`= ".$id." WHERE persona_dni = ".$dni);
        ($this->conn)->close();
    }

}
?>