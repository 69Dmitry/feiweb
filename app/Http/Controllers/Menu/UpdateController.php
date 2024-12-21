<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Menu\UpdateRequest;
use App\Tools\Helpers\MenuHelper;

class UpdateController extends Controller
{
    /**
     * получаем заголовки 
     */
    public function __invoke(UpdateRequest $request)
    {
        $data = $request->validated();

        $encoded = json_encode($data, JSON_FORCE_OBJECT|JSON_UNESCAPED_UNICODE);

        $loaded = file_put_contents(base_path(MenuHelper::getMenuMap()), $encoded);

        if ($loaded !== false) {
            return redirect()->back()->with('success', 'Меню успешно обновлено');
        }
    }
}
