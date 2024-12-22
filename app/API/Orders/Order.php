<?php

namespace App\API\Orders;

use App\API\Auth;

class Order
{
    public function get($id)
    {
        if (Auth::isAllowAccess()) {
            $order = []; 
            return response()->json($order, 201);
        }
    }
}
