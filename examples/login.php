<?php
include_once __DIR__ . "/../vendor/autoload.php";

$configPath = __DIR__ . "/../config/siteapps.json";
//$configPath = __DIR__ . "/../config/siteapps_sandbox.json";

//Your client or shop id
$partnerSiteId = 1228;

try {
    $siteApps = new \SiteApps\API\SiteApps($configPath);
    $userSite = $siteApps->getSiteDetail($partnerSiteId);
    
    $siteAppsAPI = new \SiteApps\API\SiteAppsPartnerClient($configPath);
    $loginData = $siteAppsAPI->getLoginToken($userSite);
    
    //redirect to siteapps (is a new page link)
    $siteApps->loginRedirect($loginData);
} catch (Exception $e) {
    //handle exception
    print $e->getMessage();
}