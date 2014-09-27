<?php
/* fonction qui insere un atelier dans la base */
function set_atelier($a)
{
	try
	{
		$r = "INSERT INTO atelier (atelier_nom, atelier_theme, atelier_type, atelier_discipline, atelier_resume, atelier_duree, atelier_capacite, atelier_inscription, atelier_laboratoire, atelier_adresse, atelier_zone, atelier_remarque) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$req = PDO_Singleton::getInstance()->prepare($r);
		$req->execute(array($a->get_nom(), $a->get_theme(), $a->get_type(), $a->get_discipline(), $a->get_resume(), $a->get_duree(), $a->get_capacite(), $a->get_inscription(), $a->get_labo(), $a->get_adresse(), $a->get_zone(), $a->get_remarque()));
		$req->closeCursor();
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
}

include("../resources/Atelier.php");
?>