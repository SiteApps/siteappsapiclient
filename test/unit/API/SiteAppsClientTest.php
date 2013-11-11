<?php

use \SiteApps\Enum\EndPoint;

class SiteAppsClientTest extends \PHPUnit_Framework_TestCase
{

    private $siteApps;
    private $privateKey;
    private $publicKey;
    private $saHttpMock;

    public function setUp()
    {
        $this->privateKey = '123456789';
        $this->publicKey = '987654321';

        $this->saHttpMock = $this->getMock('\SiteApps\Base\SaHttp');

        $this->siteApps = new \SiteApps\API\SiteAppsClient($this->saHttpMock);
        $this->siteApps->setPrivateKey($this->privateKey);
        $this->siteApps->setPublicKey($this->publicKey);
    }

    public function testCreateAccount()
    {
        $name = 'New User SiteApps';
        $email = 'newuser@siteapps.com';
        $url = 'http://www.newuser.com.br';

        $userParams = array(
                'user_name' => $name,
                'user_email' => $email
            );

        $userReturn = array(
            
        );

        $this->saHttpMock->expects($this->once())
                ->method('getResponse')
                ->with(EndPoint::ACCOUNT_ADD, $userParams, $this->privateKey, $this->publicKey)
                ->will($this->returnValue($userReturn));


        $this->siteApps->createAccount($name, $email, $url);
    }
}