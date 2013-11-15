<?php

namespace SiteApps\Enum;

class EndPoint
{
    const ACCOUNT_ADD = 'Account/add';
    const PARTNER_ACCOUNT_ADD = 'Partner/createUser';
    const SITE_ADD = 'Site/add';
    const PARTNER_SITE_ADD = 'PartnerSite/createSite';
    const SEGMENTS_GET = 'Segment/getSegments';
    const FLAG_ADD = 'Site/addFlags';
    const AUTH_LOGIN_TOKEN = 'Auth/createLoginToken';
    const PARTNER_AUTH_LOGIN_TOKEN = 'PartnerSite/createLoginToken';
}