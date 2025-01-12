<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\HTTP\Rest\Auth;

class OrderController extends Controller
{
    public function get($id)
    {
        if (Auth::isAllowAccess()) {
            $order = [];
            return response()->json($order, 200);
        }
    }
}
