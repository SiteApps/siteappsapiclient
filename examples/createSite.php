<?php
include_once __DIR__ . "/../vendor/autoload.php";

$configPath = __DIR__ . "/../config/siteapps.json";
//$configPath = __DIR__ . "/../config/siteapps_sandbox.json";
 
$name = "API test for Partners";
$email = "marcelio123@siteapps.com";
$url = "http://yourclientnew.bpg.com.br";

//Your client or shop id
$partnerSiteId = 1228;

try {
    $siteApps = new \SiteApps\API\SiteApps($configPath);
    $userSite = $siteApps->getSiteDetail($partnerSiteId);
    
    //Create only if user is not already registered
    if (!$userSite) {
        $siteAppsAPI = new \SiteApps\API\SiteAppsPartnerClient($configPath);
        $userSite = $siteAppsAPI->createAccount($name, $email, $url);
    }

    //Save client settings
    $siteApps->save($partnerSiteId, $userSite);
    
    //Save tag js
    $siteApps->saveTag($partnerSiteId);
} catch (\SiteApps\Exception\APIException $e) {
    //redirect to another page erro
    //show the message 
    //error examples
    //When the user email is already an SiteApps User
    //Array ( [status] => 300 [msg] => Your email has already been registered. [content] => ) 
    print "SiteApps API Error " . $e->getMessage();
} catch (Exception $e) {
    //handle exception
    print $e->getMessage();
}