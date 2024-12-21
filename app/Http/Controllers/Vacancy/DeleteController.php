<?php

namespace App\Http\Controllers\Vacancy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vacancy;

class DeleteController extends Controller
{
    //
    public function __invoke(Vacancy $vacancy)
    {
        Vacancy::find($vacancy->id)->delete();
        return response()->json([
            'success' => true,
            'type' => 'vacancy',
            'id' => $vacancy->id
        ]);
    }
}
