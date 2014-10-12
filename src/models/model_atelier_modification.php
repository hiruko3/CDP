<?php
include_once("../resources/connexion_base_singleton.php");

/* fonction qui modifie un atelier de la base */
function update_atelier($id, $champs, $values)
{
	try
	{
		if(count($champs) < 1) { return; } // s il n y a pas de champs a modifier, on quitte
		
		foreach($champs as $i => $c) { $champs[$i] = "atelier_" . $c;}
		
		$r = "UPDATE atelier SET ";
		for($i = 0; $i < count($champs); ++$i) { if($i > 0) { $r .= ", " . $champs[$i] . " = ?"; } else { $r .= $champs[$i] . " = ?"; } } // on ajoute le bon nombre de "?"
		$r .= " WHERE atelier_id = ?";
		
		$values[] = $id;
		$req = PDO_Singleton::getInstance()->prepare($r);
		$req->execute($values);
		
		$req->closeCursor();
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
}
?>