<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Service\FilterRequest;
use App\Http\Filters\ServiceFilter;

class IndexController extends Controller
{
    //
    public function __invoke(FilterRequest $request)
    {

        $data = $request->validated();

        $filter = app()->make(ServiceFilter::class, ['queryParams' => array_filter($data)]);

        $services = Service::filter($filter)->get();

        $counter = $services->count();
        
        return view('service.index', compact('services', 'counter'));
    }
}
