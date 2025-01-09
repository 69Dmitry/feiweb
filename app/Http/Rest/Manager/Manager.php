<?php

namespace App\HTTP\Rest\Manager;

use App\HTTP\Rest\Auth;

class Manager
{
    public function get($id)
    {
        if (Auth::isAllowAccess()) {
            $manager = []; 
            return response()->json($manager, 201);
        }
    }

    public function add($info)
    {
        if (Auth::isAllowAccess()) {
            $info = []; 
            return response()->json($info, 201);
        }
    }
}
