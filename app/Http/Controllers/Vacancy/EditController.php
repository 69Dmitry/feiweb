<?php

namespace App\Http\Controllers\Vacancy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vacancy;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    /**
     * получаем и обрабатываем теги и статьи
     * для передачи во вьюшку
     */
    public function __invoke(Vacancy $vacancy)
    {
        return view('vacancy.edit', compact('vacancy'));
    }
}
