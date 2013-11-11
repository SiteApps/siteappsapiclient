<?php

include_once __DIR__ . "/../vendor/autoload.php";

$configPath = __DIR__ . "/../config/siteapps.json";

$partnerSiteId = "asiojdfidfja12213";

$userSite = array(
            'user_id' => 'dsaojdiofdajf', 
            'site_url' => '21223132213',
            'plan_id' => '1222'
            );

$siteApps = new \SiteApps\API\SiteApps($configPath);
$siteApps->save($partnerSiteId, $userSite);