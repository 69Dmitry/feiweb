<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Tools\Rest\Auth;
use App\Models\Order as OrderModel;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function get($id)
    {
        if (Auth::isAllowAccess()) {
            $order = [];
            return response()->json($order, 200);
        }
    }

    public function index(Request $request)
    {
        if (!Auth::isAllowAccess()) {
            return response()->json([
                'success' => false,
                'time' => date('Y-m-d H:i:s'),
                'errors' => ['Access denied'],
            ], 403);
        }
        $result = [
            'success' => true,
            'time' => date('Y-m-d H:i:s'),
            'result' => OrderModel::all(),
        ];
        return response()->json($result, 200);
    }
}
