<?php
include_once("../resources/connexion_base_singleton.php");
include_once('../models/model_atelier_creation.php');

$a = new Atelier(0, 'nom2', 'theme', 'type', 'discipline', 'resume', '01:20:00', 12, 'inscription', 'labo', 'adresse', 4, 'remarque');
set_atelier($a);

include_once('../views/view_atelier_creation.php');
?>