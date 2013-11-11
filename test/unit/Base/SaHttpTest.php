<?php

class SaHttpTest extends \PHPUnit_Framework_TestCase
{
    private $http;
    private $encriptionMock;

    public function setUp()
    {
        $this->encriptionMock = $this->getMock('\SiteApps\Base\SaEncription');
        //$this->http = new \SiteApps\Base\SaHttp($this->encriptionMock);
        $this->http = $this->getMock('\SiteApps\Base\SaHttp', array('postData'), array($this->encriptionMock));
        
    }
    
    public function testCheckCurlIsLoaded()
    {
        $this->http->checkCurlIsLoaded();
    }

    public function testGetResponse()
    {
        $endpoint = \SiteApps\Enum\EndPoint::PARTNER_ACCOUNT_ADD;
        $params = array('id' => 1, 'name' => 2);
        $publicKey = 'asisjiss';
        $paramsJson = json_encode($params);
        
        $hashKey = '2333';
        
        $hash = 'iadojdiod=adndojid-dnaojdnod-dnadondiof';
        
        $this->encriptionMock
                ->expects($this->once())
                ->method('crypt')
                ->with($paramsJson, $hashKey)
                ->will($this->returnValue($hash));
        
        $postData = array(
            "hash"          => $hash,
            "public-key"    => $publicKey,
            "json-data"     => $paramsJson
        );
        
        $result = array(
            'status' => 100,
            'content' => array(
                'site_id' => 2
            )
        );

        $url = 'https://api.siteapps.com/' . $endpoint;
        
        $this->http->expects($this->once())
                ->method('postData')
                ->with($url, $postData)
                ->will($this->returnValue(json_encode($result)));

        
        $content = $this->http->getResponse($endpoint, $params, $hashKey, $publicKey);
        
        $this->assertEquals($result['content'], $content);
    }
    

}