<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<link rel = "stylesheet" href = "../css/style_global.css" />
        <meta charset="utf-8" />
        <title>CNRS_Website</title>
	</head>
	<body>
		<?php

			require_once("resources/connexion_base_singleton.php");

			//On démarre la session
			session_start();

	 
			//On inclut le contrôleur s'il existe et s'il est spécifié
			if (!empty($_GET['page']) && is_file('controleurs/'.$_GET['page'].'.php'))
			{
				include 'controllers/'.$_GET['page'].'.php';
			}
			else
			{
				include 'controllers/accueil.php';
			}
		?>
	</body>
</html>
 