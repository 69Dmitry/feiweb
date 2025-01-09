<?php

namespace App\HTTP\Rest;

class Auth
{
    protected const REMOTE_ADDRESSES = ['91.191.190.94'];
    public static function isAllowAccess()
    {
        if (in_array($_SERVER['REMOTE_ADDR'], self::REMOTE_ADDRESSES)){ 
            return true;
        }
    }
}
