<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Article\UpdateRequest;
use App\Models\Service;
use App\Tools\Helpers\MenuHelper;

class ViewController extends Controller
{
    //
    public function __invoke($id)
    {
        $service = Service::where('id', '=', $id)->firstOrFail();
        
       $menu = MenuHelper::getMenuJsonFile();
        return view('service.view', compact('service', 'menu'));
     }
}
