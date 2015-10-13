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
        $this->setBrowser('firefox');
        $this->setHost('127.0.0.1');
        $this->setPort(4444);
        $this->setBrowserUrl('https://www.google.com.ph/');
    }
    
    /** 
     * Method testSelenium 
     * @test 
     */ 
    public function testSelenium()
    {
        $this->url("/?gfe_rd=cr&ei=UIkcVsvsOsuM8QfA4ZzYDw&gws_rd=ssl");
        $this->byName("btnI")->click();
        $this->byId("searchinput")->value("aw");
    }
}
?>