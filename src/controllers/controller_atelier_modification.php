<?php
session_start();
include_once("../resources/Atelier.php");
include_once('../models/model_atelier_modification.php');

if(ISSET($_SESSION['ateliers'])) { $a = unserialize($_SESSION['ateliers'][$_GET['id']]); } // chargement de l atelier en traitement dans $a

/* modifications */
$champs = array();
$exe = array();
	
if($_POST['nom'] != $a->get_nom())
{
	$champs[] = "nom";
	$exe[] = $_POST['nom'];
}
if($_POST['theme'] != $a->get_theme())
{
	$champs[] = "theme";
	$exe[] = $_POST['theme'];
}
if($_POST['type'] != $a->get_type())
{
	$champs[] = "type";
	$exe[] = $_POST['type'];
}
if($_POST['discipline'] != $a->get_discipline())
{
	$champs[] = "discipline";
	$exe[] = $_POST['discipline'];
}
if($_POST['resume'] != $a->get_resume())
{
	$champs[] = "resume";
	$exe[] = $_POST['resume'];
}
if($_POST['duree'] != $a->get_duree())
{
	$champs[] = "duree";
	$exe[] = $_POST['duree'];
}
if($_POST['capacite'] != $a->get_capacite())
{
	$champs[] = "capacite";
	$exe[] = $_POST['capacite'];
}
if($_POST['inscription'] != $a->get_inscription())
{
	$champs[] = "inscription";
	$exe[] = $_POST['inscription'];
}
if($_POST['labo'] != $a->get_labo())
{
	$champs[] = "laboratoire";
	$exe[] = $_POST['labo'];
}
if($_POST['adresse'] != $a->get_adresse())
{
	$champs[] = "adresse";
	$exe[] = $_POST['adresse'];
}
if($_POST['zone'] != $a->get_zone())
{
	$champs[] = "zone";
	$exe[] = $_POST['zone'];
}
if($_POST['remarque'] != $a->get_remarque())
{
	$champs[] = "remarque";
	$exe[] = $_POST['remarque'];
}

update_atelier($_GET['id'], $champs, $exe);
/* fin modifications */

echo "<h1>Votre atelier &agrave; bien &eacute;t&eacute; modifi&eacute;</h1>";
echo "<a href = '../controllers/controller_atelier_liste.php'>Revenir &agrave; la liste des ateliers</a>";
$page = "Location: ../controllers/controller_atelier_affichage.php?id=" . $_GET['id'];
header($page);
?>