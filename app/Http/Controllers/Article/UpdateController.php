<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Article\UpdateRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    //
    public function __invoke(UpdateRequest $request, Article $article)
    {
        $data = $request->validated();

        $data['active'] = array_key_exists('active', $data) ? true : false;

        if (array_key_exists('img', $data)) {
            $data['img'] = Storage::disk('public')->put('/images', $data['img']);
        }
        $article->update($data);

        return redirect()->back()->with('success', 'Статья ' . $data['title'] . ' была успешно обновлена');
     }
}
