<?php
	include_once("../resources/connexion_base_singleton.php");
	include_once('../models/model_atelier_creation.php');

	echo "<h1>Votre atelier &agrave; bien &eacute;t&eacute; ajout&eacute; &agrave; la base de donn&eacute;es</h1>";

	if($_POST['zone'] == 'a')
		$zone = 1;
	else if($_POST['zone'] == 'b')
		$zone = 2;
	else if($_POST['zone'] == 'c')
		$zone = 3;
	else if($_POST['zone'] == 'd')
		$zone = 4;
		
	/* champs non obligatoires a null si vides */
	if($_POST['resume'] == "")
		$_POST['resume'] = NULL;
	if($_POST['remarque'] == "")
		$_POST['remarque'] = NULL;

	$a = new Atelier(0, $_POST['nom'], $_POST['theme'], $_POST['type'], $_POST['discipline'], $_POST['resume'], $_POST['duree'], $_POST['capacite'], $_POST['inscription'], $_POST['labo'], $_POST['adresse'], $zone, $_POST['remarque']);
	set_atelier($a);
	header('Location: ../controllers/controller_atelier_liste.php');
?>