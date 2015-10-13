<?php

require_once __DIR__.'/../vendor/autoload.php';
 
class simpleTestTest extends PHPUnit_Extensions_Selenium2TestCase
{
    /**
     * Setup
     * @return void 
     */
     public function setUp()
    {
        $this->setBrowser('phantomjs');
        $this->setHost('127.0.0.1');
        $this->setPort(4444);
        $this->setBrowserUrl('http://127.0.0.1/');
    }
    
    /** 
     * Method testSelenium 
     * @test 
     */ 
    public function testSelenium()
    {
        $this->url("/TravisTest/tests/simpleTest.html");
        $this->byName("uname")->value("root");
        $this->byName("password")->value("root");
        $this->byCssSelector("input[type=\"submit\"]")->click();
        $this->byName("uname")->value("root");
        $this->byName("password")->value("root");
    }
}
?>