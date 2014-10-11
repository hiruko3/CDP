<?php
class Creation_atelier_test extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://127.0.0.1/");
  }

  public function testMyTestCase()
  {
    $this->open("/cdp/src/");
    $this->click("link=\"Affichage atelier\"");
    $this->waitForPageToLoad("30000");
    $this->click("link=créer un nouvel atelier");
    $this->waitForPageToLoad("30000");
    $this->type("name=nom", "titre_test_atelier");
    $this->type("name=theme", "theme_test_atelier");
    $this->type("name=type", "type_test_atelier");
    $this->type("name=discipline", "discipline_test_atelier");
    $this->type("name=resume", "resume_test_atelier");
    $this->type("name=duree", "duree_test_atelier");
    $this->type("name=capacite", "20");
    $this->select("name=inscription", "label=Par mail");
    $this->type("name=labo", "laboratoire_test_atelier");
    $this->type("name=adresse", "adresse_test_atelier");
    $this->select("name=zone", "label=B");
    $this->type("name=remarque", "remarque_test_atelier");
    $this->click("css=input[type=\"submit\"]");
    $this->click("css=input[type=\"submit\"]");
    $this->waitForPageToLoad("30000");
    $this->verifyText("id=titre_test_atelier", "titre_test_atelier");
    $this->click("id=titre_test_atelier");
    $this->waitForPageToLoad("30000");
    $this->verifyText("class=nom_atelier", "titre_test_atelier");
    $this->verifyText("id=theme", "Thème : theme_test_atelier");
    $this->verifyText("id=type", "Type : type_test_atelier");
    $this->verifyText("id=discipline", "Discipline : discipline_test_atelier");
    $this->verifyText("id=capacite", "Capacité : 20");
    $this->verifyText("id=duree", "Durée : 00:00:00");
    $this->verifyText("id=adresse", "Adresse : adresse_test_atelier");
    $this->verifyText("id=zone", "Zone : b");
    $this->verifyText("id=resume", "Résumé de l'atelier : resume_test_atelier");
  }
}
?>