<?php
include("../src/resources/Atelier.php");

$a = new Atelier("atelier_id", "atelier_nom", "atelier_theme", "atelier_type", "atelier_discipline", "atelier_resume", "atelier_duree", "atelier_capacite", "atelier_inscription", "atelier_laboratoire", "atelier_adresse", "atelier_zone", "atelier_remarque");
	
	
echo $a->get_id() . "<br />";
echo $a->get_nom() . "<br />";
echo $a->get_theme() . "<br />";
echo $a->get_type() . "<br />";
echo $a->get_discipline() . "<br />";
echo $a->get_resume() . "<br />";
echo $a->get_duree() . "<br />";
echo $a->get_capacite() . "<br />";
echo $a->get_inscription() . "<br />";
echo $a->get_labo() . "<br />";
echo $a->get_adresse() . "<br />";
echo $a->get_zone() . "<br />";
echo $a->get_remarque() . "<br />" . "<br />" . "<br />";

		
$a->set_id("test_id");
$a->set_nom("test nom");
$a->set_theme("test theme");
$a->set_discipline("test discipline");
$a->set_type("test type");
$a->set_resume("test resume");
$a->set_duree("test duree");
$a->set_capacite("test capacite");
$a->set_inscription("test inscription");
$a->set_labo("test labo");
$a->set_adresse("test adresse");
$a->set_zone("test zone");
$a->set_remarque("test remarque");
	
	
echo $a->get_id() . "<br />";
echo $a->get_nom() . "<br />";
echo $a->get_theme() . "<br />";
echo $a->get_type() . "<br />";
echo $a->get_discipline() . "<br />";
echo $a->get_resume() . "<br />";
echo $a->get_duree() . "<br />";
echo $a->get_capacite() . "<br />";
echo $a->get_inscription() . "<br />";
echo $a->get_labo() . "<br />";
echo $a->get_adresse() . "<br />";
echo $a->get_zone() . "<br />";
echo $a->get_remarque() . "<br />" . "<br />" . "<br />";
?>