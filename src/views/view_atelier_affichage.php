<!DOCTYPE html>
<html>
    <head>
		<link rel = "stylesheet" href = "../css/style_global.css" />
		<link rel = "stylesheet" href = "../css/style_atelier_affichage.css" />
        <meta charset="utf-8" />
        <title>CNRS_Website</title>
    </head>
        
    <body>
        <h1>Bienvenue sur la page d'affichage des ateliers !</h1>
        <p>Atelier à afficher :</p>
 

		<?php
			foreach($atelier_display as $atelier)
			{
		?>

		<div class="atelier_display">
			<h2>
				<div class = "nom_atelier"><?php echo $atelier['atelier_nom']; ?></div>
				<b> Thème : <?php echo $atelier['atelier_theme']; ?></b>
				<em>Type : <?php echo $atelier['atelier_type']; ?></em>
				<em>Discipline : <?php echo $atelier['atelier_discipline']; ?></em>
				<em>Capacité : <?php echo $atelier['atelier_capacite']; ?></em>
			</h2>
			<h3>
				Durée : <?php echo $atelier['atelier_duree']; ?>
				Adresse : <?php echo $atelier['atelier_adresse']; ?>
				Zone : <?php echo $atelier['atelier_zone']; ?>
			</h3>
			<p>
				Résumé de l'atelier : <?php echo $atelier['atelier_resume']; ?>
			</p>
			<br/>
			<p>
				Remarque concernant l'atelier : <?php $atelier['atelier_remarque']?>
			</p>
		</div>
		<?php
			}
		?>
		<a href = "../controllers/controller_atelier_liste.php">Revenir &agrave; la liste des ateliers</a>
	</body>
</html>