<?php

namespace App\Http\Controllers\Vacancy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vacancy;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Vacancy\FilterRequest;
use App\Http\Filters\VacancyFilter;

class IndexController extends Controller
{
    //
    public function __invoke(FilterRequest $request)
    {

        $data = $request->validated();

        $filter = app()->make(VacancyFilter::class, ['queryParams' => array_filter($data)]);

        $vacancies = Vacancy::filter($filter)->get();

        $counter = $vacancies->count();
        
        return view('vacancy.index', compact('vacancies', 'counter'));
    }
}
