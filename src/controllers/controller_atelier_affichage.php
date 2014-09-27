<?php
/* include model*/
include_once("../resources/connexion_base_singleton.php");
global $bdd;
//traitement des données
include_once('../models/model_atelier_affichage.php');

if(!empty($_GET['id'])){
	$atelier_display = get_atelier($_GET['id'],$bdd);	


    foreach ($atelier_display as $cle => $atelier)
    {
    	/*Permet de sécuriser les données */
    	$atelier_display[$cle]['atelier_adresse'] = htmlspecialchars($atelier['atelier_adresse']);
     	$atelier_display[$cle]['atelier_nom'] = htmlspecialchars($atelier['atelier_nom']);
        $atelier_display[$cle]['atelier_resume'] = nl2br(htmlspecialchars($atelier['atelier_resume']));
     	$atelier_display[$cle]['atelier_theme'] = htmlspecialchars($atelier['atelier_theme']);
        $atelier_display[$cle]['atelier_remarque'] = nl2br(htmlspecialchars($atelier['atelier_remarque']));
     	$atelier_display[$cle]['atelier_type'] = htmlspecialchars($atelier['atelier_type']);
        $atelier_display[$cle]['atelier_zone'] = nl2br(htmlspecialchars($atelier['atelier_zone']));
    	$atelier_display[$cle]['atelier_discipline'] = htmlspecialchars($atelier['atelier_discipline']);
        $atelier_display[$cle]['atelier_capacite'] = htmlspecialchars($atelier['atelier_capacite']);
        $atelier_display[$cle]['atelier_duree'] = htmlspecialchars($atelier['atelier_duree']);
        $atelier_display[$cle]['atelier_laboratoire'] = htmlspecialchars($atelier['atelier_laboratoire']);
        
    }
}
include_once('../views/view_atelier_affichage.php');

/*include view*/
?>