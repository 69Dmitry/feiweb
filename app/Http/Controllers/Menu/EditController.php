<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Tools\Helpers\MenuHelper;

class EditController extends Controller
{
    //
    public function __invoke()
    {
        $menus = MenuHelper::getMenuJsonFile();
        return view('menu.edit', compact('menus'));
    }
}
