<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function __invoke()
    {
       // $tagsCounter = Tag::all()->count();
        $articlesCounter = Article::all()->count();

        $user = Auth::user();

        $userName = $user->email;
        
        return view('admin.index', compact('articlesCounter', 'userName'));
    }
}
