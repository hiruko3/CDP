<?php
	
	require_once("../resources/connexion_base_singleton.php");

	/*appel mySQL uniquement dans cette partie*/
	/*Fonction qui récupère l'atelier dans la base de donnée et l'affiche*/

	function get_atelier($id){
		$requete = 'SELECT * FROM atelier WHERE atelier_id = ?';
		$reponse = PDO_Singleton::getInstance()->prepare($requete);
		$reponse->execute(array($id));
		$atelier_display = $reponse->fetchAll();
		return $atelier_display;
		
	}	
?>
