<?php

namespace App\Http\Controllers\About;

use App\Tools\Helpers\MenuHelper;
use Illuminate\Http\Request;

class AboutController
{
    public function index(Request $request)
    {       
        $menu = MenuHelper::getMenuJsonFile();

      
        return view('about.index', compact('menu'));
    }
}
