<?php

namespace SiteApps\Base;

class SaFile
{
    public static function saveFileContent($filename, $data)
    {
        $return = @file_put_contents($filename, $data);
        if (!$return) {
            throw new \RuntimeException('SiteApps API couldn\'t save the file - ' . $filename);
        }
    }
    
    public static function getFile($filename)
    {
        $content = @file_get_contents($filename);
        if ($content === false) {
            throw new \RuntimeException('SiteApps API couldn\'t read the file - ' . $filename);
        }
        return $content;
    }
}