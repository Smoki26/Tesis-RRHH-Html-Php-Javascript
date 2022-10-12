<?php
require_once("../models/Tablas_Ref/Puestos_models.php");

$pues = new Puesto();
$arr = $pues->get_Puesto();

require_once("../views/Tablas_Ref/Puestos.php");
?>