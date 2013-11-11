<?php

namespace SiteApps\Base;

class SaEncription
{
    public function crypt($content, $hash)
    {
        return hash_hmac('sha256', $content, $hash);
    }
}