<?php

 
class simpleTestTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowser('*firefox');
        $this->setBrowserUrl('http://127.0.0.1/');
    }
 
    public function testLoadPage()
    {
        $this->open('http://127.0.0.1/tests/simpleTest.html');

        $this->waitForPageToLoad ( "30000" );

        $this->assertTitle('phpunit selenium test');
    }

}
?>