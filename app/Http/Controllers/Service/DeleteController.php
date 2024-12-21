<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class DeleteController extends Controller
{
    //
    public function __invoke(Service $service)
    {
        Service::find($service->id)->delete();
        return response()->json([
            'success' => true,
            'type' => 'article',
            'id' => $service->id
        ]);
    }
}
