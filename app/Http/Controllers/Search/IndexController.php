<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use App\Tools\Helpers\MenuHelper;

class IndexController extends Controller
{
    //
    public function __invoke(Request $request)
    {
       $searchResults = [];
       $counter = 0;
        $query = $request->query('q');
            if (!empty($query)) {
            $article = Article::where('title', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->get();  
            
            $news = News::where('title', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->get();  

            $searchResults = $article->merge($news);

            $counter = $searchResults->count();
        }
        
        $menu = MenuHelper::getMenuJsonFile();
        return view('search.index', compact('searchResults', 'counter', 'query', 'menu'));
    }
}
