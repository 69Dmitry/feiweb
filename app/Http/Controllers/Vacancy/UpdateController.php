<?php

namespace App\Http\Controllers\Vacancy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Vacancy\UpdateRequest;
use App\Models\Vacancy;

class UpdateController extends Controller
{
    //
    public function __invoke(UpdateRequest $request, Vacancy $vacancy)
    {
        $data = $request->validated();

        $data['active'] = array_key_exists('active', $data) ? 1 : 0;

        $vacancy->update($data);

        return redirect()->back()->with('success', 'Вакансия ' . $data['title'] . ' была успешно обновлена');
     }
}
