<?php

namespace App\Http\Controllers\Vacancy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Article\UpdateRequest;
use App\Models\Vacancy;
use App\Tools\Helpers\MenuHelper;

class ViewController extends Controller
{
    //
    public function __invoke($id)
    {
        $vacancy = Vacancy::where('id', '=', $id)->firstOrFail();
        $menu = MenuHelper::getMenuJsonFile();
        return view('vacancy.view', compact('vacancy','menu'));
     }
}
