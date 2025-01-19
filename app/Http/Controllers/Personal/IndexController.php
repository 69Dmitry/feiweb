<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tools\Helpers\MenuHelper;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class IndexController extends Controller
{
    //
    public function __invoke(Request $request)
    {
        $menu = MenuHelper::getMenuJsonFile();

        if (Auth::check()) {
            $id = Auth::id();
        }
        $orders = Order::query()->where('user_id', $id)->get();
     
        return view('personal.index', compact('menu', 'orders'));
    }
}
