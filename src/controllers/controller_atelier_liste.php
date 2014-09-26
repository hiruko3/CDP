<?php
include_once("../resources/connexion_base.php");
include_once('../models/model_atelier_liste.php');

$ateliers = get_liste_atelier($bdd);

foreach($ateliers as $i => $a)
{
// TODO : question : il vaudrait pas mieux securiser au niveau de la classe ?
	// securisation des donnees
	$ateliers[$i]->set_id(htmlspecialchars($a->get_id()));
	$ateliers[$i]->set_nom(htmlspecialchars($a->get_nom()));
	$ateliers[$i]->set_theme(htmlspecialchars($a->get_theme()));
	$ateliers[$i]->set_type(htmlspecialchars($a->get_type()));
	$ateliers[$i]->set_discipline(htmlspecialchars($a->get_discipline()));
	$ateliers[$i]->set_resume(nl2br(htmlspecialchars($a->get_resume())));
	$ateliers[$i]->set_duree(htmlspecialchars($a->get_duree()));
	$ateliers[$i]->set_capacite(htmlspecialchars($a->get_capacite()));
	$ateliers[$i]->set_inscription(htmlspecialchars($a->get_inscription()));
	$ateliers[$i]->set_labo(htmlspecialchars($a->get_labo()));
	$ateliers[$i]->set_adresse(htmlspecialchars($a->get_adresse()));
	$ateliers[$i]->set_zone(nl2br(htmlspecialchars($a->get_zone())));
	$ateliers[$i]->set_remarque(nl2br(htmlspecialchars($a->get_remarque())));
}

include_once('../views/view_atelier_liste.php');
?>