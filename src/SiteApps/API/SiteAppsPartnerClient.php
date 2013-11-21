<?php

namespace SiteApps\API;

use SiteApps\Enum\EndPoint;

class SiteAppsPartnerClient
{
    private $validator;
    private $http;
    private $config;

    public function __construct($configPath, $saHttp = null, $saValidator = null)
    {
        $this->config = \SiteApps\Base\SaConfig::load($configPath);
        $this->setHTTP($saHttp);
        $this->setValidator($saValidator);
    }
    
    private function setHTTP($saHttp)
    {
        if (!$saHttp) {
            $saHttp = new \SiteApps\Base\SaHttp($this->config['api']['url']);
        }
        $this->http = $saHttp;
    }

    private function setValidator($validator)
    {
        if (!$validator) {
            $validator = new \SiteApps\Base\SaValidator();
        }
        $this->validator = $validator;
    }

    public function createAccount($name, $email, $url)
    {
        $user = $this->createUser($name, $email, $this->config['partner']['privateKey']);
        $site = $this->createSite($user['user_id'], $url, $this->config['partner']['planId'], $this->config['partner']['privateKey'] . $user['user_key']);
        return array_merge($user, $site);
    }
    
    private function createUser($name, $email, $hashKey)
    {
        $userParams = array(
            'name' => $name,
            'email' => $email
            );
        $user = $this->http->getResponse(EndPoint::PARTNER_ACCOUNT_ADD, $userParams, $hashKey, $this->config['partner']['publicKey']);
        
        $this->validator->validateDataReturned(array('user_id', 'user_key'), $user);
        return array_merge($user, $userParams);
    }

    private function createSite($userId, $url, $planId, $hashKey)
    {
        $siteParams = array(
            'user_id' => $userId, 
            'site_url' => $url,
            'plan_id' => $planId
            );
        $site = $this->http->getResponse(EndPoint::PARTNER_SITE_ADD, $siteParams, $hashKey, $this->config['partner']['publicKey']);
        $this->validator->validateDataReturned(array('site_id', 'site_key'), $site);
        return array_merge($site, $siteParams);
    }


    public function getLoginToken($userSite)
    {
        $browser = $_SERVER['HTTP_USER_AGENT'];
        $ip = $_SERVER['REMOTE_ADDR'];
        
        $params = array(
            'user_id' => $userSite['user_id'],
            'site_id' => $userSite['site_id'],
            'user_email' => $userSite['email'],
            'user_agent' => $browser,
            'ip' => $ip
        );
        $loginData = $this->http->getResponse(EndPoint::PARTNER_AUTH_LOGIN_TOKEN, $params, $this->config['partner']['privateKey'] . $userSite['user_key'], $this->config['partner']['publicKey']);
        $this->validator->validateDataReturned(array('token', 'url_to_login'), $loginData);
        return $loginData;
    }
}