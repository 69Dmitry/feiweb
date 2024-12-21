<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    /**
     * получаем и обрабатываем теги и статьи
     * для передачи во вьюшку
     */
    public function __invoke(Article $article)
    {


        return view('article.edit', compact('article'));
    }
}
