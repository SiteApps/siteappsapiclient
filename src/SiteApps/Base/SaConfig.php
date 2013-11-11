<?php

namespace SiteApps\Base;

class SaConfig
{

    static public function load($configPath)
    {
        $config = json_decode(\SiteApps\Base\SaFile::getFile($configPath), 1);
        
        if (!is_array($config)) {
            throw new \RuntimeException('Config file is a invalid json');
        }

        $validator = new \SiteApps\Base\SaValidator();
        
        $structure = array(
            "partner" => array(
                "private_key",
                "public_key",
                "plan_id"
            ),
            "engine",
            "file" => array(
                "path"
            )
        );
        
        $validator->validateConfig($structure, $config);
        
        return $config;
    }

}