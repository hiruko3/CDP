
<?php
include_once("../src/resources/connexion_base.php");

// test insertion
/*
try
{
	$bdd->exec("INSERT INTO atelier(atelier_nom, atelier_theme, atelier_type, atelier_discipline, atelier_duree, atelier_capacite, atelier_inscription, atelier_laboratoire, atelier_adresse, atelier_zone, atelier_remarque) VALUES('Albert', 'astrophysique', 'un_autre_type', 'physique', '01:18:52', 2, 'sur réservation', 'un labo', 'bordeaux', 2, 'Romain est nul comme chef de projet, il croit que la base de données s appelle CNRS_Lemon')");
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
*/


// test affichage	
try
{
	$req_aff = $bdd->query('SELECT * FROM atelier');
	
	while ($donnees = $req_aff->fetch())
	{
		echo "<p>";
		echo "nom = " . $donnees['atelier_nom'] . "<br />";
		echo "theme = " . $donnees['atelier_theme'] . "<br />";
		echo "type = " . $donnees['atelier_type'] . "<br />";
		echo "discipline = " . $donnees['atelier_discipline'] . "<br />";
		echo "resume = " . $donnees['atelier_resume'] . "<br />";
		echo "duree = " . $donnees['atelier_duree'] . "<br />";
		echo "capacite = " . $donnees['atelier_capacite'] . "<br />";
		echo "inscription = " . $donnees['atelier_inscription'] . "<br />";
		echo "laboratoire = " . $donnees['atelier_laboratoire'] . "<br />";
		echo "adresse = " . $donnees['atelier_adresse'] . "<br />";
		echo "zone = " . $donnees['atelier_zone'] . "<br />";
		echo "remarque = " . $donnees['atelier_remarque'] . "<br />";
	}
	$req_aff->closeCursor();
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
echo "</p>";


// test modification
/*
try
{
	$bdd->exec("UPDATE atelier SET atelier_capacite = 42, atelier_laboratoire = 'LIFL' WHERE atelier_nom = 'Albert'");
}
catch(Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
*/


// test suppression
/*
try
{
	$bdd->exec("DELETE FROM atelier WHERE atelier_nom = 'Albert'");
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
*/
?>