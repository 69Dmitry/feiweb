<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tools\Helpers\MenuHelper;

class ViewController extends Controller
{
    //
    public function __invoke(Request $request)
    {
        $menu = MenuHelper::getMenuJsonFile();
        return view('personal.view', compact('menu'));
    }
}
