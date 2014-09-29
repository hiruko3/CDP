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
		<form action="../controllers/controller_atelier_creation.php" method="post">
			<fieldset>
				<legend>atelier</legend>
				<label for="nom" class="inline">titre</label>
				<input type="text" name="nom" required /><br />
				<label for="theme" class="inline">th&egrave;me</label>
				<input type="text" name="theme" required /><br />
				<label for="type" class="inline">type</label>
				<input type="text" name="type" required /><br />
				<label for="discipline" class="inline">discipline vis&eacute;e</label>
				<input type="text" name="discipline" required /><br />
				<label for="resume" class="inline">r&eacute;sum&eacute;</label>
				<textarea name="resume" rows="3" cols="45"></textarea><br />
			</fieldset>
			
			<fieldset>
				<legend>organisation</legend>
				<label for="duree" class="inline">dur&eacute;e</label>
				<input type="time" name="duree" required /><br />
				<label for="capacite" class="inline">capacit&eacute;</label>
				<input name="capacite" type="number" min="0" max="500" step="1" required /><br />				
				<label for="inscription" class="inline">type d&rsquo;inscription</label>
				<select name="inscription"><option value="no">Aucune</option><option value="mail">Par mail</option><option value="tel">Par t&eacute;l&eacute;phone</option><option value="lettre">Par courrier</option></select><br />
			</fieldset>
			
			<fieldset>			
				<legend>laboratoire</legend>				
				<label for="labo" class="inline">laboratoire</label>
				<input type="text" name="labo" required /><br />
				<label for="adresse" class="inline">adresse</label>
				<input type="text" name="adresse" required /><br />
				<label for="zone" class="inline">zone</label>
				<select name="zone"><option value="a">A</option><option value="b">B</option><option value="c">C</option><option value="d">D</option></select><br />
			</fieldset>
			
			<fieldset>
				<legend>divers</legend>
				<label for="remarque" class="inline">remarques</label>
				<textarea name="remarque" rows="8" cols="45"></textarea><br />
			</fieldset>
			
			<input type="submit" value="Envoyer" />
			<input type="reset" value="R&eacute;initialiser" />
		</form>
		
		<a href = "../controllers/controller_atelier_liste.php">Revenir &agrave; la liste des ateliers</a>
	</body>
</html>