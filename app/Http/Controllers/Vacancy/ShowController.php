<?php

namespace App\Http\Controllers\Vacancy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vacancy;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    //
    public function __invoke(Vacancy $vacancy)
    {
        return view('vacancy.show', compact('vacancy'));
    }
}
