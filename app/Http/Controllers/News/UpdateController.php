<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\News\UpdateRequest;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    //
    public function __invoke(UpdateRequest $request, News $news)
    {
        $data = $request->validated();

        $data['active'] = array_key_exists('active', $data) ? true : false;

        if (array_key_exists('img', $data)) {
            $data['img'] = Storage::disk('public')->put('/images', $data['img']);
        }

        $news->update($data);

        return redirect()->back()->with('success', 'Новость ' . $data['title'] . ' была успешно обновлена');
     }
}
