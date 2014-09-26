<?php
/* include model*/

//traitement des données
include_once('../models/model_atelier_affichage.php');
if(!empty($_GET['id'])){
	$atelier_display = get_atelier($_GET['id']);	


    foreach ($atelier_display as $cle => $atelier)
    {
    	/*Permet de sécuriser les données */
    	$atelier_display[$cle]['atelier_adresse'] = htmlspecialchars($atelier['atelier_']);
     	$atelier_display[$cle]['atelier_nom'] = htmlspecialchars($atelier['atelier_']);
        $atelier_display[$cle]['atelier_resume'] = nl2br(htmlspecialchars($atelier['atelier_']));
     	$atelier_display[$cle]['atelier_theme'] = htmlspecialchars($atelier['atelier_']);
        $atelier_display[$cle]['atelier_remarque'] = nl2br(htmlspecialchars($atelier['atelier_']));
     	$atelier_display[$cle]['atelier_type'] = htmlspecialchars($atelier['atelier_']);
        $atelier_display[$cle]['atelier_zone'] = nl2br(htmlspecialchars($atelier['atelier_']));
    	$atelier_display[$cle]['atelier_discipline'] = htmlspecialchars($atelier['atelier_']);
        $atelier_display[$cle]['atelier_capacite'] = htmlspecialchars($atelier['atelier_']);
        $atelier_display[$cle]['atelier_duree'] = htmlspecialchars($atelier['atelier_']);
        $atelier_display[$cle]['atelier_laboratoire'] = htmlspecialchars($atelier['atelier_']);
        
    }
}
include_once('../views/view_atelier_affichage.php');

/*include view*/
?>