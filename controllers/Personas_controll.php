<?php

require_once("../models/Tablas_Ref/Personas_models.php");
require_once("../models/Tablas_Ref/Puestos_models.php");

$pers = new Persona();
$pues = new Puesto();

$arr = $pers->get_Persona();
$arr2 = $pues->get_Puesto();

//echo $_POST['txtnombre'].$_POST['txtdni'];


require_once("../views/Tablas_Ref/Personas.php");

?>