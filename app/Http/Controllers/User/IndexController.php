<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    public function __invoke(Request $request)
    {

        $users = User::all();
        $counter = User::all()->count();
        
        return view('user.index', compact('users', 'counter'));
    }
}
