<?php

namespace SiteApps\Base;

class SaValidator
{

    public function validateDataReturned($keys, $data)
    {
        foreach ($keys as $key) {
            if (!array_key_exists($key, $data)) {
                throw new \DomainException('Error: No user data returned - ' . $key);
            }
        }
    }

    public function validateConfig($keys, $data)
    {
//        foreach ($keys as $key) {
//            if (!array_key_exists($key, $data)) {
//                throw new \DomainException('Error: No user data returned - ' . $key);
//            }
//        }
    }

}