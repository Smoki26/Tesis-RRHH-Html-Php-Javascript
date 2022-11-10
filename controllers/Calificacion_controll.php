<?php
require_once("../models/Tablas_Ref/Calificacion_models.php");
$calficacion = new Calificacion();
$calficacion2 = new Calificacion();


$arr = $calficacion->get_Calificaion();
$arr2 = $calficacion2->get_Legajos();

if(isset($_REQUEST['id_elim'])){
    $new_calf = new Calificacion();
    $new_calf->DeletCalificacion($_REQUEST['id_elim']);
}

if(isset($_POST['btn-new-calf']) || isset($_POST['btn-edit-calf'])){
    if(empty($_POST['iniciativa']) and empty($_POST['legajo']) and empty($_POST['responsabilidad']) and empty($_POST['puntualidad']) and empty($_POST['c_normas']) and empty($_POST['p_personal']) and empty($_POST['companierismo']) and empty($_POST['apt'])){
        echo "<script>alert('Campos vacios')</script>";
    }else{

        $year = date("Y");
        $promedio = ($_POST['puntualidad'] + $_POST['companierismo'] + $_POST['p_personal'] + $_POST['c_normas'] + $_POST['apt'] + $_POST['responsabilidad'] + $_POST['iniciativa'])/7;
        $new_calf = new Calificacion($year,$_POST['legajo'],$_POST['puntualidad'],$_POST['companierismo'],$_POST['p_personal'],$_POST['c_normas'],$_POST['apt'],$_POST['responsabilidad'],$_POST['iniciativa'],$promedio);

        if(isset($_POST['btn-edit-calf'])){
        $new_calf->UpdateCalificacion(); 
        }else{
        $new_calf->InsertCalificacion(); 
        }
        }
}

require_once("../views/Tablas_Ref/Calificaciones.php");
?>