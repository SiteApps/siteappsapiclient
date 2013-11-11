<?php

class SiteAppsTest extends \PHPUnit_Framework_TestCase
{
    private $siteApps;
    private $pKey;
    private $encriptionMock;

    public function setUp()
    {
        $this->encriptionMock = $this->getMock('\SiteApps\Base\SaEncription');
        $this->pKey = '123456789';
        $this->siteApps = new \SiteApps\API\SiteApps($this->encriptionMock);
        $this->siteApps->setPrivateKey($this->pKey);
    }

    public function testGetHash()
    {
        $userEmail  = 'user@siteapps.com';
        $siteUrl    = 'http://www.siteapps.com/';

        $expected = '987654321';
        
        $this->encriptionMock
                ->expects($this->once())
                ->method('crypt')
                ->with($userEmail . $siteUrl, $this->pKey)
                ->will($this->returnValue($expected));

        $hash = $this->siteApps->getSiteHash($userEmail, $siteUrl);

        $this->assertEquals($expected, $hash);
    }


    public function usersDataSet()
    {
        return array(
            array('', 'http://www.com.br', '123456'),
            array('mark@siteapps.com', '', '123456'),
            array('', '', '123456'),
            array('mark@siteapps.com', 'http://www.com.br', ''),
            array('', '', ''),
        );
    }

    /**
     * @dataProvider usersDataSet
     * @expectedException \BadFunctionCallException
     */
     public function testGetHashErrors($userEmail, $siteUrl, $privateKey)
    {
        $this->siteApps->setPrivateKey($privateKey);
        $this->siteApps->getSiteHash($userEmail, $siteUrl);
    }

    public function testGetTag()
    {
        $hash = '12344894322318739138u397897898fh9hsdufhiuds';
        
        $tag = $this->siteApps->getTag($hash);
        
        $this->assertContains($hash, $tag);
        $this->assertContains('javascript', $tag);
    }
}