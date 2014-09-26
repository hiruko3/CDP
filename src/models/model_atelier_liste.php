<?php
/* fonction qui met une entree de la base dans une structure atelier */
function atelier_db_to_obj($data)
{
	$a = new Atelier($data['atelier_id'], $data['atelier_nom'], $data['atelier_theme'], $data['atelier_type'], $data['atelier_discipline'], $data['atelier_resume'], $data['atelier_duree'], $data['atelier_capacite'], $data['atelier_inscription'], $data['atelier_laboratoire'], $data['atelier_adresse'], $data['atelier_zone'], $data['atelier_remarque']);
}

/* fonction qui recupere les ateliers */
function get_liste_atelier($bdd)
{
	try
	{
		$t_atelier = array();
		$i = 0;
		$req = $bdd->query('SELECT * FROM atelier');
	
		while($donnees = $req->fetch())
		{
			$t_atelier[$i] = atelier_db_to_obj($donnees);
			++$i;
		}
		$req->closeCursor();
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	
	return $t_atelier;
}

include("../resources/Atelier.php");
?>