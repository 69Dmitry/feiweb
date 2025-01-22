<?php

namespace App\Http\Controllers;

use App\Tools\Rest\Auth;
use App\Http\Controllers\Controller;
use App\Models\Manager as ModelsManager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function get($id)
    {
        if (Auth::isAllowAccess()) {
            $manager = ModelsManager::find($id)->get();
            return response()->json($manager, 200);
        }
    }

    public function add(Request $request)
    {
        $errors = [];
        $info = $request->all();
        if (Auth::isAllowAccess()) {
            $result = [];
            if (!ModelsManager::isExist($info['email'])) {
                try {
                    $manager = new ModelsManager();
                    $manager->create($info);

                    $result['success'] = true;
                    $result['time'] = date('Y-m-d H:i:s');
                    $result['result'] = 'created';
                    return response()->json($result, 200);
                } catch (\Exception $e) {
                    $errors[] = $e->getMessage();
                }
            }
            $errors[] = 'Менеджер с таким email уже существует';
        }
        
        return response()->json([
            'success' => false,
            'time' => date('Y-m-d H:i:s'),
            'errors' => $errors,
        ], 500);
    }

    public function index(Request $request)
    {
        if (!Auth::isAllowAccess()) {
            return response()->json([
                'success' => false,
                'time' => date('Y-m-d H:i:s'),
                'errors' => ['Access denied'],
            ], 403);
        }
        $result = [
            'success' => true,
            'time' => date('Y-m-d H:i:s'),
            'result' => ModelsManager::all(),
        ];
        return response()->json($result, 200);
    }

    public function delete($id)
    {
        $result = [];
        if (Auth::isAllowAccess()) {
            ModelsManager::find($id)->delete();
            $result['success'] = true;
            $result['time'] = date('Y-m-d H:i:s');
            $result['result'] = 'Менеджер успешно удален';
            return response()->json($result, 200);
        }

        return response()->json([
            'success' => false,
            'time' => date('Y-m-d H:i:s'),
            'errors' => ['Access denied'],
        ], 403);
    }
}
