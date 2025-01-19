<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Service;
use App\Tools\Helpers\MenuHelper;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $articles = Article::where('active', '=', 1)->limit(4)->get();
        $services = Service::where('active', '=', 1)->get();
        $query = '';
        if ($request->query('q')) {
            $query = $request->query('q');
        }
       
        $menu = MenuHelper::getMenuJsonFile();

      

        return view('front.index', compact('articles', 'services', 'query', 'menu'));
    }
}
