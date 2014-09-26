<?php
/*appel mySQL uniquement dans cette partie*/
	/*Fonction qui récupère l'atelier dans la base de donnée et l'affiche*/

	function get_atelier($id ,$bdd){
		$reponse = $bdd->prepare('SELECT * FROM atelier WHERE atelier_id = ?');
		$reponse->execute(array($id));
		$atelier_display = $reponse->fetchAll();
		return $atelier_display;
		
	}	
