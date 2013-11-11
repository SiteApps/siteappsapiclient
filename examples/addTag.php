<?php

include_once __DIR__ . "/../vendor/autoload.php";

$configPath = __DIR__ . "/../config/siteapps.json";

$partnerSiteId = 1224;
 try {
    $siteApps = new \SiteApps\API\SiteApps($configPath);
    $tag = $siteApps->getTag($partnerSiteId);

    print $tag;
 } catch (Exception $e) {
     //no tag
 }
