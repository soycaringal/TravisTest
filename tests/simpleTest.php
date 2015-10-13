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
        $this->setBrowserUrl('http://eden.dev/');
    }
    
    /** 
     * Method test 
     *
     * @test 
     * @return void 
     */ 
    public function test()
    {
        $this->url("/control/login");
        $this->byName("auth_slug")->value("admin@openovate.com");
        $this->byName("auth_password")->value("admin");
        $this->byCssSelector("button.btn.btn-primary")->click();
        $this->byLinkText("Create New App")->click();
        $this->byName("app_name")->value("Test2");
        $this->byName("app_domain")->value("test.com");
        $this->byName("app_website")->value("http://test.com");
        $this->byName("app_permissions[]")->click();
        $this->byXPath("(//input[@name='app_permissions[]'])[2]")->click();
        $this->byCssSelector("button.btn.btn-primary")->click();
        $this->byCssSelector("i.fa.fa-lock")->click();
        $this->byXPath("(//button[@name='action'])[2]")->click();
        $this->byCssSelector("i.fa.fa-edit")->click();
        $this->byName("app_domain")->value("test2.com");
        $this->byCssSelector("button.btn.btn-primary")->click();
        // $this->byLinkText("Logout")->click();
    }
}
?>