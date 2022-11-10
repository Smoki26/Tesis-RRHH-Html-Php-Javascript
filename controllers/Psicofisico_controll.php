<?php
require_once("../models/Tablas_Ref/Psicofisico_models.php");

if(isset($_POST['btn_new_psico'])){
    $new_psico = new Psicofisico_P($_POST['altura'],$_POST['peso'],$_POST['alergia'],$_POST['exm_fisico'],$_POST['lesione'],$_POST['cardio'],$_POST['exm_visual'],$_POST['exm_psico'],$_POST['o_enfermedades'],$_POST['info_medico'],$_POST['diagnostico']);
    $id = $new_psico->get_Psicof_P();
    $new_psico->InsertPsicofisico_P($_POST['dni'],$id);

}

require_once("../views/Tablas_Ref/Personas.php");
?>