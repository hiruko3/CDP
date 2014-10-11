<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://localhost:8888/");
  }

  public function testMyTestCase()
  {
    $this->open("/CDP/CDP/src/controllers/controller_atelier_liste.php");
    $this->click("link=Albert");
    $this->waitForPageToLoad("30000");
    $this->click("link=Revenir à la liste des ateliers");
    $this->waitForPageToLoad("30000");
    $this->click("link=efrs");
    $this->waitForPageToLoad("30000");
    $this->click("link=Revenir à la liste des ateliers");
    $this->waitForPageToLoad("30000");
    $this->click("link=Info");
    $this->waitForPageToLoad("30000");
    $this->click("link=Revenir à la liste des ateliers");
    $this->waitForPageToLoad("30000");
  }
}
?>