<?php

namespace App\Http\Controllers\Contacts;

use Illuminate\Http\Request;
use App\Tools\Helpers\MenuHelper;

class ContactsController
{
    public function index(Request $request)
    {       
        $menu = MenuHelper::getMenuJsonFile();
        return view('contacts.index', compact('menu'));
    }
}
