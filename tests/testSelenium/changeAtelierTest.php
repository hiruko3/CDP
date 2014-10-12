<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://localhost/");
  }

  public function testMyTestCase()
  {
	$id = 91;
    $this->open("/scripts_php/git/CDP/src/views/view_atelier_modification.php?id=" . $id);
    $this->type("name=nom", "un titre");
    $this->type("name=theme", "un theme");
    $this->type("name=type", "un type");
    $this->type("name=discipline", "une discipline");
    $this->type("name=resume", "un résumé");
    $this->type("name=duree", "05:03:05");
    $this->type("name=capacite", "40");
    $this->select("name=inscription", "label=Par téléphone");
    $this->type("name=labo", "labri");
    $this->type("name=adresse", "quelque part");
    $this->select("name=zone", "label=C");
    $this->type("name=remarque", "Je suis une remarque.\nJe suis une autre remarque.");
    $this->click("css=input[type=\"submit\"]");
    $this->waitForPageToLoad("30000");
	$this->open("http://localhost/scripts_php/git/CDP/src/controllers/controller_atelier_affichage.php?id=" . $id);
  }
}
?>