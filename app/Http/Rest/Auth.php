<?php

namespace App\HTTP\Rest;
use Illuminate\Support\Facades\Request;
class Auth
{
    /**
     * IP сервера с 1с
     */
    protected const REMOTE_ADDRESSES = ['91.191.190.94'];

    public static function isAllowAccess()
    {
        if (in_array(Request::ip(), self::REMOTE_ADDRESSES)) {
            return true;
        }

        return response()->json(['error' => 'Forbidden'], 403);
    }
}
