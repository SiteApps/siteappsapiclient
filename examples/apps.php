<?php

include_once __DIR__ . "/../vendor/autoload.php";

$configPath = __DIR__ . "/../config/siteapps.json";

$partnerSiteId = 1224;

//url com o callback de login (arquivo login.php)
$loginCallbackUrl = '/siteapps/login';
 
$siteApps = new \SiteApps\API\SiteApps($configPath);
$htmlDashboard = $siteApps->getDashBoard($loginCallbackUrl);

print $htmlDashboard;

