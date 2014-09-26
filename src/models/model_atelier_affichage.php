<? php
/*appel mySQL uniquement dans cette partie*/
	global $bdd;
	/*Fonction qui récupère l'atelier dans la base de donnée et l'affiche*/
	funtion get_atelier($id){
		$reponse = $bdd->prepare(SELECT * FROM cnrs_lemon WHERE id = ?);
		$reponse->execute($id);
		$atelier_display = $reponse->fetchAll();
		return $atelier_display;
		var_dump($donnees);
	}	