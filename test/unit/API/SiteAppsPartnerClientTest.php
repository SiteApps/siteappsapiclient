<?php

use \SiteApps\Enum\EndPoint;

class SiteAppsPartnerClientTest extends \PHPUnit_Framework_TestCase
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
        $this->validatorMock = $this->getMock('\SiteApps\Base\SaValidator');

        $this->siteApps = new \SiteApps\API\SiteAppsPartnerClient($this->saHttpMock, $this->validatorMock);
        $this->siteApps->setPrivateKey($this->privateKey);
        $this->siteApps->setPublicKey($this->publicKey);
    }

    public function testCreateAccount()
    {
        $name = 'New User SiteApps';
        $email = 'newuser@siteapps.com';
        $url = 'http://www.newuser.com.br';
        $planId = 123;

        $userParams = array(
                'name' => $name,
                'email' => $email
            );

        $userReturn = array(
            'user_id' => '12234',
            'user_key' => 'aaiittuuee-asnjis-sjinxsi-snjdin'
        );

        $this->saHttpMock->expects($this->at(0))
                ->method('getResponse')
                ->with(EndPoint::PARTNER_ACCOUNT_ADD, $userParams, $this->privateKey, $this->publicKey)
                ->will($this->returnValue($userReturn));

        $this->validatorMock->expects($this->at(0))
                ->method('validateDataReturned')
                ->with(array_keys($userReturn), $userReturn);

        $siteParams = array(
            'user_id' => $userReturn['user_id'],
            'site_url' => $url,
            'plan_id' => $planId
        );
        
        $siteReturn = array(
            'site_id' => '223',
            'site_key' => '12344kajaoisjasjncsaojsiosji-sakjs'
        );
        
        $this->saHttpMock->expects($this->at(1))
                ->method('getResponse')
                ->with(EndPoint::PARTNER_SITE_ADD, $siteParams, $this->privateKey . $userReturn['user_key'], $this->publicKey)
                ->will($this->returnValue($siteReturn));
        
        $this->validatorMock->expects($this->at(1))
                ->method('validateDataReturned')
                ->with(array_keys($siteReturn), $siteReturn);

        $this->siteApps->createAccount($name, $email, $url, $planId);
    }
}