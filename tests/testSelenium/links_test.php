<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{	
  protected function setUp()
  {
	$this->setBrowser('*firefox');
	$this->setBrowserUrl("http://localhost/"); 
  }

  public function testMyTestCase()
  {
    $this->open("/scripts_php/git/CDP/src/");
    $this->click("link=\"Affichage atelier\"");
    $this->waitForPageToLoad("30000");
    $this->click("id=nom d");
    $this->waitForPageToLoad("30000");
    $this->click("link=Revenir à la liste des ateliers");
    $this->waitForPageToLoad("30000");
    $this->click("id=xd");
    $this->waitForPageToLoad("30000");
    $this->click("link=Revenir à la liste des ateliers");
    $this->waitForPageToLoad("30000");
    $this->click("link=créer un nouvel atelier");
    $this->waitForPageToLoad("30000");
    $this->click("link=Revenir à la liste des ateliers");
    $this->waitForPageToLoad("30000");
    $this->click("link=créer un nouvel atelier");
    $this->waitForPageToLoad("30000");
	// entrer parametres creation
    $this->type("name=nom", "titre");
    $this->type("name=theme", "theme");
    $this->type("name=type", "type");
    $this->type("name=discipline", "discipline");
    $this->type("name=resume", "resume");
    $this->type("name=duree", "2");
    $this->type("name=capacite", "20");
    $this->select("name=inscription", "label=Par téléphone");
    $this->type("name=labo", "keap");
    $this->type("name=adresse", "ailleurs");
    $this->select("name=zone", "label=C");
    $this->type("name=remarque", "coucou");
	////
    $this->click("css=input[type=\"submit\"]");
    $this->waitForPageToLoad("30000");
    $this->click("link=Revenir à la liste des ateliers");
    $this->waitForPageToLoad("30000");
    $this->click("link=modifier");
    $this->waitForPageToLoad("30000");
    $this->type("name=duree", "00:40:00");
    $this->click("css=input[type=\"submit\"]");
    $this->waitForPageToLoad("30000");
    $this->click("link=Revenir à la liste des ateliers");
    $this->waitForPageToLoad("30000");
    $this->click("xpath=(//a[contains(text(),'supprimer')])[7]");
    $this->waitForPageToLoad("30000");
  }
}
?>