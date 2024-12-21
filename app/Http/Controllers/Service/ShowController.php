<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    //
    public function __invoke(Service $service)
    {
        return view('service.show', compact('service'));
    }
}
