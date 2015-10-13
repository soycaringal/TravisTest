<?php

require_once __DIR__.'/../vendor/autoload.php';
 
class simpleTestTest extends PHPUnit_Extensions_SeleniumTestCase
{
    protected function setUp()
    {
        $this->setBrowser('*firefox');
        $this->setBrowserUrl('http://google.com/');
    }
 
    public function testLoadPage()
    {
        $this->open('/doodles');

        $this->waitForPageToLoad ( "3000" );

        $this->assertTitle('Google Doodles');
    }

}
?>