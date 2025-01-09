<?php

namespace App\HTTP\Rest\Manager;

use App\HTTP\Rest\Auth;

class Manager
{
    public function get($id)
    {
        if (Auth::isAllowAccess()) {
            $manager = []; 
            return response()->json($manager, 200);
        }
    }

    public function add($info)
    {
        if (Auth::isAllowAccess()) {
            $response = []; 
            return response()->json($response, 200);
        }
    }

    public function delete($id)
    {
        if (Auth::isAllowAccess()) {
            $response = []; 
            return response()->json($response, 200);
        }
    }
}
