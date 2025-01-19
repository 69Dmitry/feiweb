<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Tools\Helpers\MenuHelper;
use Illuminate\Support\Facades\Auth;

class UpdateController extends Controller
{
    //
    public function __invoke(Request $request)
    {
        $menu = MenuHelper::getMenuJsonFile();

        //$id = 1;
        if (Auth::check()) {
            $id = Auth::id();
        }
     
        $user = User::query()->where('id', $id)->first();
       
        return view('personal.update', compact('menu', 'user'));
    }
}
