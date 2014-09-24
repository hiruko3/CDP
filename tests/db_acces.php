<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=cnrs_lemon', 'root', '');
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
?>


<!-- test insertion -->
<?php
/*
try
{
	$bdd->exec("INSERT INTO atelier(atelier_nom, atelier_theme, atelier_type, atelier_discipline, atelier_duree, atelier_capacite, atelier_inscription, atelier_laboratoire, atelier_adresse, atelier_zone, atelier_remarques) VALUES('Albert', 'astrophysique', 'un_autre_type', 'physique', '01:18:52', 2, 'sur réservation', 'un labo', 'bordeaux', 2, 'Romain est nul comme chef de projet, il croit que la base de données s appelle CNRS_Lemon')");
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
*/
?>
<!-- -->


<!-- test affichage -->
<?php	
try
{
	$req_aff = $bdd->query('SELECT * FROM atelier');
	
	while ($donnees = $req_aff->fetch())
	{
	?>
	<p>
	nom = <?php echo $donnees['atelier_nom']; ?><br />
	theme = <?php echo $donnees['atelier_theme']; ?> <br />
	type = <?php echo $donnees['atelier_type']; ?><br />
	discipline = <?php echo $donnees['atelier_discipline'] ?><br />
	resume = <?php echo $donnees['atelier_resume'] ?><br />
	duree = <?php echo $donnees['atelier_duree'] ?><br />
	capacite = <?php echo $donnees['atelier_capacite'] ?><br />
	inscription = <?php echo $donnees['atelier_inscription'] ?><br />
	laboratoire = <?php echo $donnees['atelier_laboratoire'] ?><br />
	adresse = <?php echo $donnees['atelier_adresse'] ?><br />
	zone = <?php echo $donnees['atelier_zone'] ?><br />
	remarques = <?php echo $donnees['atelier_remarques'] ?><br />
	<?php
	}
	$req_aff->closeCursor();
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
?>
</p>
<!-- -->


<!-- test modification -->
<?php
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
?>
<!-- -->


<!-- test suppression -->
<?php
try
{
	$bdd->exec("DELETE FROM atelier WHERE atelier_nom = 'Albert'");
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
	
?>
<!-- -->