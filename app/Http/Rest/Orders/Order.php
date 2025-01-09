<?php

namespace App\HTTP\Rest\Orders;

use App\HTTP\Rest\Auth;

class Order
{
    public function get($id)
    {
        if (Auth::isAllowAccess()) {
            $order = [];
            return response()->json($order, 200);
        }
    }
}
