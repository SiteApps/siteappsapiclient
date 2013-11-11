<?php

namespace SiteApps\API;

class SiteApps
{

    private $encription;
    private $config;

    public function __construct($configPath, $encriptionClass = null) 
    {
        $this->config = \SiteApps\Base\SaConfig::load($configPath);

        if ($encriptionClass == null) {
            $encriptionClass = new \SiteApps\Base\SaEncription();
        }
        $this->encription = $encriptionClass;
    }

    public function getTag($partnerSiteId)
    {
        $data = $this->getSiteDetail($partnerSiteId);
        $siteId = $data['site_id'];
        return '<script type="text/javascript">' .
        $this->getTagContent($siteId) .
        '</script>';
    }
    
    private function getTagContent($siteId)
    {
        return <<<END
        //<![CDATA[[
            \$SA = {s: '$siteId', asynch: 1};
            (function() {
                var sa = document.createElement("script");
                sa.type = "text/javascript";
                sa.async = true;
                sa.src=("https:"==document.location.protocol?"https://"+\$SA.s+".sa":"http://"+\$SA.s+".a")+".siteapps.com/"+\$SA.s+".js";
                var t = document.getElementsByTagName("script")[0];
                t.parentNode.insertBefore(sa, t);
            })();
        //]]>
END;
    }
    
    public function saveTag($partnerSiteId)
    {
        $data = $this->getSiteDetail($partnerSiteId);
        $siteId = $data['site_id'];
        $tag = $this->getTagContent($siteId);
        $filename = $this->config['file']['js'] . $partnerSiteId . ".js";
        \SiteApps\Base\SaFile::saveFileContent($filename, $tag);
    }
    
    public function getSiteDetail($partnerSiteId)
    {
        $filename = $this->config['file']['path'] . $partnerSiteId;
        $data = \SiteApps\Base\SaFile::getFile($filename);
        return json_decode($data, 1);
    }
    
    public function save($partnerSiteId, $userSiteData)
    {
        $data = json_encode($userSiteData);
        $filename = $this->config['file']['path'] . $partnerSiteId;
        \SiteApps\Base\SaFile::saveFileContent($filename, $data);
    }
    
    public function getDashboard($partnerSiteId)
    {
        $userSite = null;
        try {
            $userSite = $this->getSiteDetail($partnerSiteId);
        } catch (Exception $e) {
            
        }
        
        include_once __DIR__ . "/../view/dashboard.php";
    }
}