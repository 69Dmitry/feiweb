<?php

namespace App\Http\Controllers\Vacancy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    //
    public function __invoke()
    {
        return view('vacancy.create');
    }
}
