<?php
include_once("../resources/connexion_base_singleton.php");
include_once("../models/model_atelier_suppression.php");

delete_atelier($_GET['id']);

echo "<h1>Votre atelier &agrave; bien &eacute;t&eacute; supprim&eacute;</h1>";
echo "<a href = '../controllers/controller_atelier_liste.php'>Revenir &agrave; la liste des ateliers</a>";
header('Location: ../controllers/controller_atelier_liste.php');
?>