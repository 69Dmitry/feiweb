<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    /**
     * получаем и обрабатываем теги и статьи
     * для передачи во вьюшку
     */
    public function __invoke(News $news)
    {
        return view('news.edit', compact('news'));
    }
}
