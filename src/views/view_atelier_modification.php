<?php
session_start();

if(ISSET($_SESSION['ateliers']))
{
	$a = unserialize($_SESSION['ateliers'][$_GET['id']]);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<link rel = "stylesheet" href = "../css/style_global.css" />
		<link rel = "stylesheet" href = "../css/style_atelier_creation.css" />
        <meta charset="utf-8" />
        <title>CNRS_Website</title>
	</head>
	<body>
		<h1>Saisie d'un nouvel atelier</h1>
		<form action="../controllers/controller_atelier_modification.php" method="post">
			<fieldset>
				<legend>atelier</legend>
				<label for="nom" class="inline">titre</label>
				<input type="text" name="nom" value = <?php echo $a->get_nom(); ?> required /><br />
				<label for="theme" class="inline">th&egrave;me</label>
				<input type="text" name="theme" value = <?php echo $a->get_theme(); ?> required /><br />
				<label for="type" class="inline">type</label>
				<input type="text" name="type" value = <?php echo $a->get_type(); ?> required /><br />
				<label for="discipline" class="inline">discipline vis&eacute;e</label>
				<input type="text" name="discipline" value = <?php echo $a->get_discipline(); ?> required /><br />
				<label for="resume" class="inline">r&eacute;sum&eacute;</label>
				<textarea name="resume" rows="3" cols="45"><?php echo $a->get_resume() ?></textarea><br />
			</fieldset>
			
			<fieldset>
				<legend>organisation</legend>
				<label for="duree" class="inline">dur&eacute;e</label>
				<input type="time" name="duree" value = <?php echo $a->get_duree(); ?> required /><br />
				<label for="capacite" class="inline">capacit&eacute;</label>
				<input name="capacite" type="number" min="0" max="500" step="1" value = <?php echo $a->get_capacite(); ?> required /><br />				
				<label for="inscription" class="inline">type d&rsquo;inscription</label>
				<select name="inscription">
					<option value="no" <?php if($a->get_inscription() == "no") echo 'selected="selected"';?>>Aucune</option>
					<option value="mail" <?php if($a->get_inscription() == "mail") echo 'selected="selected"';?>>Par mail</option>
					<option value="tel" <?php if($a->get_inscription() == "tel") echo 'selected="selected"';?>>Par t&eacute;l&eacute;phone</option>
					<option value="lettre" <?php if($a->get_inscription() == "lettre") echo 'selected="selected"';?>>Par courrier</option>
				</select><br />
			</fieldset>
			
			<fieldset>			
				<legend>laboratoire</legend>				
				<label for="labo" class="inline">laboratoire</label>
				<input type="text" name="labo" value = <?php echo $a->get_labo(); ?> required /><br />
				<label for="adresse" class="inline">adresse</label>
				<input type="text" name="adresse" value = <?php echo $a->get_adresse(); ?> required /><br />
				<label for="zone" class="inline">zone</label>
				<select name="zone">
					<option value="a" <?php if($a->get_zone() == "a") echo 'selected="selected"';?>>A</option>
					<option value="b" <?php if($a->get_zone() == "b") echo 'selected="selected"';?>>B</option>
					<option value="c" <?php if($a->get_zone() == "c") echo 'selected="selected"';?>>C</option>
					<option value="d" <?php if($a->get_zone() == "d") echo 'selected="selected"';?>>D</option>
				</select><br />
			</fieldset>
			
			<fieldset>
				<legend>divers</legend>
				<label for="remarque" class="inline">remarques</label>
				<textarea name="remarque" rows="8" cols="45"><?php echo $a->get_remarque(); ?></textarea><br />
			</fieldset>
			
			<input type="submit" value="Envoyer" />
			<input type="reset" value="R&eacute;initialiser" />
		</form>
		
		<a href = "../controllers/controller_atelier_liste.php">Revenir &agrave; la liste des ateliers</a>
	</body>
</html>