<?php
require_once("../models/Tablas_Ref/Calificacion_models.php");
$calficacion = new Calificacion();


$arr = $calficacion->get_Calificaion();

require_once("../views/Tablas_Ref/Calificaciones.php");
?>