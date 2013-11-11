<?php

class SaConfigTest extends \PHPUnit_Framework_TestCase
{
    private $config;

    public function setUp()
    {
        $this->config = new \SiteApps\Base\SaConfig();
    }
    
    public function testLoadConfig()
    {
        $config = __DIR__ . "/../config/siteapps.json";
        
        $this->config->loadConfig($config);
    }
}