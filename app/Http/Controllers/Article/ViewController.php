<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Article\UpdateRequest;
use App\Models\Article;
use App\Models\ArticleTag;
use App\Tools\Helpers\MenuHelper;

class ViewController extends Controller
{
    //
    public function __invoke($slug)
    {
        $article = Article::where('slug', '=', $slug)->firstOrFail();
      
        $menu = MenuHelper::getMenuJsonFile();
        return view('article.view', compact('article', 'menu'));
     }
}
