<?php
Class Persona{
    private $conn;
   /* private $dni;
    private $exp;
    private $puesto;
    private $nombre;
    private $apellido;
    private $email;
    private $direccion;
    private $tel;
    private $fecha_ing;
    private $fecha_nac;
    private $status;*/

    private $persona_arr;

    public function __construct(){
        require_once("../models/Conexion.php");
        $this->conn = Conexion::conectar();
        $this->persona_arr = array();
    }

    /*public function __construct($aux_dni,$aux_exp,$aux_pues,$aux_nom,$aux_ape,$aux_mail,$aux_dir,$aux_tel,$aux_f_ing,$aux_f_nac,$aux_statu){
        require_once("../models/Conexion.php");
        $this->conn = Conexion::conectar();
        $this->dni = $aux_dni;
        $this->exp = $aux_exp;
        $this->puesto = $aux_pues;
        $this->nombre = $aux_nom;
        $this->apellido = $aux_ape;
        $this->email = $aux_mail;
        $this->direccion = $aux_dir;
        $this->tel = $aux_tel;
        $this->fecha_ing = $aux_f_ing;
        $this->fecha_nac = $aux_f_nac;
        $this->status = $aux_statu;
        $this->persona_arr = array();
    }*/

    public function get_Persona(){
        $datos = mysqli_query($this->conn,"SELECT P.dni, P.nombre,P.apellido, Ps.nombre_puesto,P.fecha_ingreso, P.status FROM persona as P, puesto as Ps WHERE P.puesto_id = Ps.id_puesto");
            $this->persona_arr = $datos;
        ($this->conn)->close();     
        
        return $this->persona_arr;
    }
    /*public function set_Personas(){
        $sql = 'INSERT INTO `persona`(`dni`, `experiencia`, `puesto_id`, `nombre`, `apellido`, `email`, `direccion`, `telefono`, `fecha_nac`, `fecha_ingreso`, `status`) VALUES ("$this->dni","$this->exp","$this->puesto","$this->nombre","$this->apellido","$this->email","$this->direccion","$this->tel","$this->fecha_ing","$this->fecha_nac","$this->status")';
        ($this->conn)->query($sql);
        ($this->conn)->close();  
    }*/

}


?>