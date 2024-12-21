<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    /**
     * получаем и обрабатываем теги и статьи
     * для передачи во вьюшку
     */
    public function __invoke(Service $service)
    {


        return view('service.edit', compact('service'));
    }
}
