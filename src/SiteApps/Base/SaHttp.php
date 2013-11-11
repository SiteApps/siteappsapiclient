<?php

namespace SiteApps\Base;

class SaHttp 
{

    private $encription;

    public function __construct($encriptionClass = null)
    {
        if ($encriptionClass == null) {
            $encriptionClass = new \SiteApps\Base\SaEncription();
        }
        $this->encription = $encriptionClass;
        $this->checkCurlIsLoaded();
    }

    public function checkCurlIsLoaded()
    {
        if (!in_array('curl', get_loaded_extensions())) {
            throw new \RuntimeException('CURL not loaded. SiteApps API Client needs PHP-CURL.');
        }
    }

    public function getResponse($endpoint, $params, $hashKey, $publicKey)
    {
        $paramsJson = json_encode($params);
        $hash = $this->encription->crypt($paramsJson, $hashKey);
        
        $response = $this->submit($endpoint, $paramsJson, $hash, $publicKey);
        
        if (! ($response['status'] == 100 && is_array($response['content']))) {
            throw new \SiteApps\Exception\APIException($response['status'] . ' - '. $response['msg']);
        }
        return $response['content'];
    }

    private function submit($endpoint, $params, $hash, $publicKey)
    {
        $postData = array(
            "hash"          => $hash,
            "public-key"    => $publicKey,
            "json-data"     => $params
        );

        $url = 'https://api.siteapps.com/' . $endpoint;
        $result = $this->postData($url, $postData);
        return json_decode($result, 1);
    }

    private function postData($url, $postData)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url );
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}