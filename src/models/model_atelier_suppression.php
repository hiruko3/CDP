<?php
/* fonction qui supprime un atelier de la base */
function delete_atelier($id)
{
	try
	{
		$r = "DELETE FROM atelier WHERE atelier_id = ?";
		$req = PDO_Singleton::getInstance()->prepare($r);
		$req->execute(array($id));
		$req->closeCursor();
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
}
?>