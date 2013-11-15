<?php
include_once __DIR__ . "/../vendor/autoload.php";

$configPath = __DIR__ . "/../config/siteapps.json";
 
$name = "API test for Partners";
$email = "yourclientnew@bpg.com.br";
$url = "http://yourclientnew.bpg.com.br";

//Your client or shop id
$partnerSiteId = 1227;

try {
    $siteAppsAPI = new \SiteApps\API\SiteAppsPartnerClient($configPath);
    $userSite = $siteAppsAPI->createAccount($name, $email, $url);

    //Save client settings
    $siteApps = new \SiteApps\API\SiteApps($configPath);
    $siteApps->save($partnerSiteId, $userSite);
    
    //Save tag js
    $siteApps->saveTag($partnerSiteId);
} catch (Exception $e) {
    //handle exception
    print $e->getMessage();
}