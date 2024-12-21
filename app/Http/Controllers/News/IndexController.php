<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\News\FilterRequest;
use App\Http\Filters\NewsFilter;

class IndexController extends Controller
{
    //
    public function __invoke(FilterRequest $request)
    {

        $data = $request->validated();

        $filter = app()->make(NewsFilter::class, ['queryParams' => array_filter($data)]);

        $news = News::filter($filter)->get();

        $counter = $news->count();
        
        return view('news.index', compact('news', 'counter'));
    }
}
