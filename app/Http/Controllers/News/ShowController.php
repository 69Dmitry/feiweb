<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    //
    public function __invoke(News $news)
    {
    
        return view('news.show', compact('news'));
    }
}
