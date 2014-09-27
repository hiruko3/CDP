<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
<!--    <link rel = "stylesheet" href = "" /> -->
        <meta charset="utf-8" />
        <title>CNRS_Website</title>
	</head>
	<body>
		<h1>Saisie d'un nouvel atelier</h1>
		<form action="../controllers/controller_atelier_creation.php" method="post">
			titre<input type="text" name="nom" required /><br />
			th&egrave;me<input type="text" name="theme" required /><br />
			type<input type="text" name="type" required /><br />
			discipline vis&eacute;e<input type="text" name="discipline" required /><br />
			r&eacute;sum&eacute;<textarea name="resume" rows="3" cols="45"></textarea><br />
			dur&eacute;e<input type="time" name="duree" required /><br />
			capacit&eacute;<input name="capacite" type="number" min="0" max="500" step="1" required /><br />
			inscription<select name="inscription"><option value="no">Aucune</option><option value="mail">Par mail</option><option value="tel">Par t&eacute;l&eacute;phone</option><option value="lettre">Par courrier</option></select><br />
			laboratoire<input type="text" name="labo" required /><br />
			adresse<input type="text" name="adresse" required /><br />
			zone<select name="zone"><option value="a">A</option><option value="b">B</option><option value="c">C</option><option value="d">D</option></select><br />
			remarques<textarea name="remarque" rows="8" cols="45"></textarea><br />
			<input type="submit" value="Envoyer" />
			<input type="reset" value="R&eacute;initialiser" />
		</form>
	</body>
</html>