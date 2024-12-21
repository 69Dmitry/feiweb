<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\FilterRequest;
use Illuminate\Http\Request;
use App\Http\Requests\News\UpdateRequest;
use App\Models\News;
use App\Http\Filters\NewsFilter;
use App\Tools\Helpers\MenuHelper;

class ListController extends Controller
{
    //
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(NewsFilter::class, ['queryParams' => array_filter($data)]);
    
        $news = News::filter($filter)->paginate(8);  

        $menu = MenuHelper::getMenuJsonFile();
        return view('news.list', compact('news', 'menu'));
     }
}
