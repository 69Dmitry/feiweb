<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tools\Helpers\MenuHelper;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ViewController extends Controller
{
    //
    public function __invoke(Request $request)
    {
        $menu = MenuHelper::getMenuJsonFile();
        $id = 1;
        if (Auth::check() && Auth::id()) {
            $id = Auth::id();
        }
      
        $user = User::find($id)->firstorFail();

        return view('personal.view', compact('menu', 'user'));
    }
}
