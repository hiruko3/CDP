<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
<!--    <link rel = "stylesheet" href = "" /> -->
        <meta charset="utf-8" />
        <title>CNRS_Website</title>
	</head>
	<body>
        <h1>Liste des ateliers</h1>
		<table>
			<tr>
				<th>Atelier</th>
				<th>Th&egrave;me</th>
				<th>Type</th>
				<th>Discipline</th>
			</tr>
			<?php			
				foreach($ateliers as $a)
				{
					echo "<tr>";
						echo "<td><a href = controller_atelier_affichage.php?id=" . $a->get_id() . ">" . $a->get_nom() . "</a></td>";
						echo "<td>" . $a->get_theme() . "</td>";
						echo "<td>" . $a->get_type() . "</td>";
						echo "<td>" . $a->get_discipline() . "</td>";
					echo "</tr>";
				}
			?>
		</table>
		<a href = ../views/view_atelier_creation.php>cr&eacute;er un nouvel atelier</a>
	</body>
</html>
