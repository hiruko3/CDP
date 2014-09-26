<?php
include_once("../resources/connexion_base.php");
include_once('../models/model_atelier_liste.php');

$ateliers = array();
$ateliers = get_liste_atelier($bdd);

foreach($ateliers as $i => $a)
{
// TODO : question : il vaudrait pas mieux securiser au niveau de la classe ?
	// securisation des donnees
	$ateliers[$i]['atelier_id'] = htmlspecialchars($a['atelier_id']);
	$ateliers[$i]['atelier_nom'] = htmlspecialchars($a['atelier_nom']);
	$ateliers[$i]['atelier_theme'] = htmlspecialchars($a['atelier_theme']);
	$ateliers[$i]['atelier_type'] = htmlspecialchars($a['atelier_type']);
	$ateliers[$i]['atelier_discipline'] = htmlspecialchars($a['atelier_discipline']);
	$ateliers[$i]['atelier_resume'] = nl2br(htmlspecialchars($a['atelier_resume']));
	$ateliers[$i]['atelier_duree'] = htmlspecialchars($a['atelier_duree']);
	$ateliers[$i]['atelier_capacite'] = htmlspecialchars($a['atelier_capacite']);
	$ateliers[$i]['atelier_inscription'] = htmlspecialchars($a['atelier_inscription']);
	$ateliers[$i]['atelier_laboratoire'] = htmlspecialchars($a['atelier_laboratoire']);
	$ateliers[$i]['atelier_adresse'] = htmlspecialchars($a['atelier_adresse']);
	$ateliers[$i]['atelier_zone'] = nl2br(htmlspecialchars($a['atelier_zone']));
	$ateliers[$i]['atelier_remarque'] = nl2br(htmlspecialchars($a['atelier_remarque']));   
}

include_once('../views/view_atelier_liste.php');
?>