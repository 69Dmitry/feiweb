<?php

namespace App\Http\Controllers\Vacancy;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vacancy\FilterRequest;
use Illuminate\Http\Request;
use App\Http\Requests\Vacancy\UpdateRequest;
use App\Models\Vacancy;
use App\Http\Filters\VacancyFilter;
use App\Resourses\Helpers\PageHelper;
use App\Tools\Helpers\MenuHelper;

class ListController extends Controller
{
    //
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(VacancyFilter::class, ['queryParams' => array_filter($data)]);
    
        $vacancies = Vacancy::filter($filter)->paginate(8);  

        //$pageTitle = PageHelper::getCurrentTitle();
        $menu = MenuHelper::getMenuJsonFile();

      

        return view('vacancy.list', compact('vacancies', 'menu'));
     }
}
