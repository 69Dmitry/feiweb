<?php

namespace App\Tools\Rest;
use Illuminate\Support\Facades\Request;

class Auth
{
    /**
     * IP сервера с 1с
     */
    protected const REMOTE_ADDRESSES = ['91.191.190.94'];
    protected const IS_DEBUG = false;

    public static function isAllowAccess()
    {
        if (in_array(Request::ip(), self::REMOTE_ADDRESSES) || self::IS_DEBUG) {
            return true;
        }

       return false;
    }
}