<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Service\UpdateRequest;
use App\Models\Service;

class UpdateController extends Controller
{
    //
    public function __invoke(UpdateRequest $request, Service $service)
    {
        $data = $request->validated();

        $data['active'] = array_key_exists('active', $data) ? true : false;

        $service->update($data);

        return redirect()->back()->with('success', 'Статья ' . $data['title'] . ' была успешно обновлена');
     }
}
