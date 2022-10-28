<?php
require_once("../models/Tablas_Ref/Puestos_models.php");

$pues = new Puesto();
$arr = $pues->get_Puesto();
$arr2 = $pues->get_Hab();
$arr3= $pues->get_Hab();

$name;$exper;$habil;
$psi = array();

if(isset($_REQUEST['id_elim'])){
    $nuevoPuesto = new Puesto();
    $nuevoPuesto->ElimPuesto($_REQUEST['id_elim']);
    
}


if(empty($_POST["newnombre"]) and empty($_POST["newexp"]) and empty($_POST['newhabil'])){

    
    echo '<script>alert("Error faltan campos por completar");</script>';
    

}else{
if(isset($_POST["newnombre"],$_POST["newexp"],$_POST['newhabil'])){
    $name = $_POST["newnombre"];
    $exper = $_POST['newexp'];
    $habil = $_POST['newhabil'];

    if(isset($_POST['visual'])){
        $psi[0] = 1;
    }else{
        $psi[0] = 0;
    }
    if(isset($_POST['fisica'])){
        $psi[1] = 1;
    }else{
        $psi[1] = 0;
    }
    if(isset($_POST['alergia'])){
        $psi[2] = 1;
    }else{
        $psi[2] = 0;
    }
    if(isset($_POST['lesione'])){
        $psi[3] = 1;
    }else{
        $psi[3] = 0;
    }
    if(isset($_POST['cardio'])){
        $psi[4] = 1;
    }else{
        $psi[4] = 0;
    }
    if(isset($_POST['psicofisico'])){
        $psi[5] = 1;
    }else{
        $psi[5] = 0;
    }
    if(empty($_POST['idpuesto'])){
        //$nuevoPuesto = new Puesto($name,$exper,$habil,$psi);
        //$aux = $nuevoPuesto->insertarPsi();
        //$id_psi = $aux->fetch_assoc();
        //$nuevoPuesto->insertarPuesto($id_psi['id_ps_puesto']);
        echo "no paso";
    }else{
        $nuevoPuesto = new Puesto($name,$exper,$habil,$psi);
        $nuevoPuesto->ModfPsi($_POST['idpuesto']);
        $nuevoPuesto->ModfPuesto($_POST['idpuesto']);
    }
}
}


require_once("../views/Tablas_Ref/Puestos.php");
?>