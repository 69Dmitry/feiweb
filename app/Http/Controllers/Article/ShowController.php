<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleTag;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    //
    public function __invoke(Article $article)
    {
        return view('article.show', compact('article'));
    }
}
