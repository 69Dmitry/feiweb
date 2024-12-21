<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Requests\News\StoreRequest;
use Illuminate\Support\Facades\Storage;
use \Transliterate;

class StoreController extends Controller
{
    //
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        if (array_key_exists('img', $data)) {
            $data['img'] = Storage::disk('public')->put('/images', $data['img']);
        }

        if (empty($data['slug'])) {
            $data['slug'] = Transliterate::slugify(trim($data['title']));
        }
        
        $data['active'] = 0;
        if (array_key_exists('active', $data)) {
            $data['active'] = 1;
        }

        $data['description'] = strip_tags(trim($data['description']));
    
        $news = (new News())->create($data);
     
        return redirect()->route('news.index');
    }
}
