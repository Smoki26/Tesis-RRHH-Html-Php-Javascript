

<?php
require_once("../models/Tablas_Ref/Calificacion_models.php");
require_once("../models/Tablas_Ref/Estudio_models.php");
require_once("../models/Tablas_Ref/Habilidad_Persona_models.php");
require_once("../models/Tablas_Ref/Habilidad_Map_models.php");
require_once("../models/Tablas_Ref/Puestos_models.php");

$calificacion_promedio = new Calificacion();
$estudio_suma = new Estudio();
$hab_persona_prom = new Habilidad_Persona();
$habilidad_map = new Habilidad_Map();
$habilidad_pu = new Puesto();

$arr_cal = $calificacion_promedio->get_Calificaion_Promedio();
$arr_est = $estudio_suma->get_Estudio_Sumas();


$arr_hab_b_promedio = $hab_persona_prom->get_habilidad_blanda_persona();
$arr_hab_d_promedio = $hab_persona_prom->get_habilidad_dura_persona();
$arr_hab_b_map = $habilidad_map->get_habilidad_blanda_map();
$arr_hab_d_map = $habilidad_map->get_habilidad_dura_nap();
$arr_hab_b_pu_prom = $habilidad_pu->get_habilidad_blanda_puesto_promedio();
$arr_hab_d_pu_prom = $habilidad_pu->get_habilidad_dura_puesto_promedio();
require_once("../views/Informes/info-Personas.php");

?>