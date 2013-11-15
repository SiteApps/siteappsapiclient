<?php

namespace SiteApps\API;

use SiteApps\Enum\EndPoint;

class SiteAppsClient
{
    private $validator;
    private $http;
    private $privateKey;
    private $publicKey;

    public function __construct($saHttp = null, $saValidator = null)
    {
        $this->setHTTP($saHttp);
        $this->setValidator($saValidator);
    }
    
    private function setHTTP($saHttp)
    {
        if (!$saHttp) {
            $saHttp = new \SiteApps\Base\SaHttp();
        }
        $this->http = $saHttp;
    }

    private function setValidator($validator)
    {
        if (!$validator) {
            $validator = new \SiteApps\Base\Validator();
        }
        $this->validator = $validator;
    }

    public  function setPrivateKey($key)
    {
        $this->privateKey = $key;
    }

    public  function setPublicKey($key)
    {
        $this->publicKey = $key;
    }

    public function createAccount($name, $email, $url)
    {
        $user = $this->createUser($name, $email);

        $site = $this->createSite($email, $url, $user['user_key']);
        //$flags = array('platform' => array('wordpress', 'plugin-wordpress', 'signup-wordpress'));
        //$this->addFlags($flags, $site['site_id'], $email, $user['user_key'], $privateKey, $publicKey);
        return array_merge($user, $site);
    }
    
    private function createPartnerUser($name, $email)
    {
        //setkeys
        $userParams = array(
            'name' => $name,
            'email' => $email
            );
        $user = $this->http->getResponse(EndPoint::PARTNER_ACCOUNT_ADD, $userParams);
        $this->validateDataReturned(array('user_id', 'user_key'), $user);
        return $user;
    }

    private function createUser($name, $email)
    {
        //setkeys
        $userParams = array(
            'user_name' => $name,
            'user_email' => $email
            );
        $user = $this->http->getResponse(EndPoint::ACCOUNT_ADD, $userParams);
        $this->validateDataReturned(array('user_id', 'user_key'), $user);
        return $user;
    }

    private function createSite($email, $url, $userKey , $privateKey, $publicKey)
    {
        $siteParam = json_encode(array('user_email' => $email, 'site_url' => $url));
        $hash = hash_hmac('sha256', $siteParam, $privateKey . $userKey);
        $site = $this->getResponse('Site/add', $hash, $siteParam, $publicKey);
        if ( !array_key_exists('site_id', $site) || !array_key_exists('site_key', $site)) {
            throw new Exception('No site data.');
        }
        return $site;
    }

    private function getSegments($siteAppsId, $email, $userKey, $privateKey, $publicKey)
    {
        $segmentsParam = json_encode(array('site_id' => $siteAppsId, 'user_email' => $email));
        $hash = hash_hmac('sha256', $segmentsParam, $privateKey . $userKey);
        $segments = $this->getResponse('Segment/getSegments', $hash, $segmentsParam, $publicKey);
        return $segments;
    }

    private function addFlags($flags, $siteId, $email, $userKey , $privateKey, $publicKey)
    {
        try {
            $flagsParam = json_encode(array('site_id' => $siteId, 'user_email' => $email, 'flags' => $flags));
            $hash = hash_hmac('sha256', $flagsParam, $privateKey . $userKey);
            $this->getResponse('Site/addFlags', $hash, $flagsParam, $publicKey);
        } catch (Exception $e) {
            //$this->messages->addCustomMessage($e->getMessage(), true);
            //change message to exception
        }
    }

    public function getSegmentsByClient($siteAppsId, $email, $privateKey, $publicKey, $userKey)
    {
        try {
            return $this->getSegments($siteAppsId, $email, $userKey, $privateKey, $publicKey);
        } catch (Exception $e) {
            return array();
        }
    }

    public function getLoginToken($userSite)
    {
        $siteId = $userSite['site_id'];
        $email = $userSite['email'];
        $userKey = $userSite['user_key'];
        try {
            $params = json_encode(array('site_id' => $siteId, 'user_email' => $email, 'user_agent' => $_SERVER['HTTP_USER_AGENT'], 'ip' => $_SERVER['REMOTE_ADDR']));
            $hash = hash_hmac('sha256', $params, $privateKey . $userKey);
            $result = $this->getResponse('Auth/createLoginToken', $hash, $params, $publicKey);
            if ( !array_key_exists('token', $result) || !array_key_exists('url_to_login', $result)) {
                throw new Exception('Can\'t login. Wrong data.');
            }
            return $result;
        } catch (Exception $e) {
            //$this->messages->addCustomMessage($e->getMessage(), true);
            //exception ?
        }
    }
}