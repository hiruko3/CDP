<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>CNRS_Website</title>
	<link href="src/css/style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1>Bienvenue sur la page d'affichage des ateliers !</h1>
        <p>Atelier à afficher :</p>
 

<?php
foreach($atelier_display as $atelier)
{
?>

<div class="atelier_display">
    <h3>
        <?php echo $atelier['atelier_nom']; ?>
        <b> Thème : <?php echo $atelier['atelier_theme']; ?></b>
        <em>Type : <?php echo $atelier['atelier_type']; ?></em>
        <em>Discipline : <?php echo $atelier['atelier_discipline']; ?></em>
        <em>Capacité : <?php echo $atelier['atelier_capacite']; ?></em>
    </h3>
    <h2>
    	Durée : <?php echo $atelier['atelier_duree']; ?>
    	Adresse : <?php echo $atelier['atelier_adresse']; ?>
    	Zone : <?php echo $atelier['atelier_zone']; ?>
    </h2>
    <p>
    	Résumé de l'atelier : <?php echo $atelier['atelier_resume']; ?>
    </p>
    <br/>
    <p>
    	Remarque concernant l'atelier : <?php $atelier['atelier_remarque']?>
</div>
<?php
}
?>
</body>
</html>