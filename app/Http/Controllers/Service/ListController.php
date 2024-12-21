<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Service\FilterRequest;
use Illuminate\Http\Request;
use App\Http\Requests\Service\UpdateRequest;
use App\Models\Service;
use App\Http\Filters\ServiceFilter;
use App\Resourses\Helpers\PageHelper;
use App\Tools\Helpers\MenuHelper;

class ListController extends Controller
{
    //
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(ServiceFilter::class, ['queryParams' => array_filter($data)]);
    
        $services = Service::filter($filter)->paginate(16);  

        //$pageTitle = PageHelper::getCurrentTitle();
        $pageTitle = '';
        $menu = MenuHelper::getMenuJsonFile();

      

        return view('service.list', compact('services', 'pageTitle', 'menu'));
     }
}
