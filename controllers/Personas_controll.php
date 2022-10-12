<?php

require_once("../models/Tablas_Ref/Personas_models.php");

$pers = new Persona();

$arr = $pers->get_Persona();


require_once("../views/Tablas_Ref/Personas.php");

?>