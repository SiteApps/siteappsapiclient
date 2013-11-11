<?php

include_once __DIR__ . "/../vendor/autoload.php";

$configPath = __DIR__ . "/../config/siteapps.json";

$partnerSiteId = 1224;
 
$siteApps = new \SiteApps\API\SiteApps($configPath);
$htmlDashboard = $siteApps->getDashBoard($partnerSiteId);

print $htmlDashboard;

