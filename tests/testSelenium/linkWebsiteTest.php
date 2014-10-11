<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  public static $browsers = array(
      array('name' => 'GoogleChrome',
      'browser' => 'googlechrome /Applications/Google\ Chrome.app/Contents/MacOS/Google\ Chrome'),
      array('name' => 'Firefox',
        'browser' => '*firefox' ),
      array('name' => 'Internet Explorer',
        'browser' => '*iexplorerproxy' ),
      array('name' => 'Opera',
        'browser' => '*opera' ),
      array('name' => 'Safari',
        'browser' => '*safariproxy' ));


  protected function setUp()
  {
      $this->setBrowser('*chrome');
      $this->setBrowserUrl("http://localhost:8888/");
  }

  public function testMyTestCase()
  {
    $this->open("/CDP/CDP/src/");
    $this->click("link=\"Affichage atelier\"");
    $this->waitForPageToLoad("30000");
    $this->click("link=Albert");
    $this->waitForPageToLoad("30000");
    $this->click("link=Revenir à la liste des ateliers");
    $this->waitForPageToLoad("30000");
    $this->click("link=efrs");
    $this->waitForPageToLoad("30000");
    $this->click("link=Revenir à la liste des ateliers");
    $this->waitForPageToLoad("30000");
    $this->click("link=créer un nouvel atelier");
    $this->waitForPageToLoad("30000");
    $this->click("link=Revenir à la liste des ateliers");
    $this->waitForPageToLoad("30000");
  }
}
?>