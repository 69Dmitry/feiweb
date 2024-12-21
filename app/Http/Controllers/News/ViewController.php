<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\News\UpdateRequest;
use App\Models\News;
use App\Tools\Helpers\MenuHelper;

class ViewController extends Controller
{
    //
    public function __invoke($slug)
    {
        $news = News::where('slug', '=', $slug)->firstOrFail();
        $menu = MenuHelper::getMenuJsonFile();
        return view('news.view', compact('news', 'menu'));
     }
}
