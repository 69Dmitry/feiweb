<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class DeleteController extends Controller
{
    //
    public function __invoke(News $news)
    {
        News::find($news->id)->delete();
        return response()->json([
            'success' => true,
            'type' => 'news',
            'id' => $news->id
        ]);
    }
}
