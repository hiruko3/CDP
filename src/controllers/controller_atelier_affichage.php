<?php
/* include model*/

//traitement des données
include_once('../models/model_atelier_affichage.php');
$atelier_display = get_atelier($id);
foreach ($atelier_display as $cle => $atelier)
{
	/*
    $atelier_display[$cle]['titre'] = htmlspecialchars($billet['titre']);
    $atelier_display[$cle]['contenu'] = nl2br(htmlspecialchars($billet['contenu']));
    */
}

include_once('../views/view_atelier_affichage.php');

/*include view*/
?>