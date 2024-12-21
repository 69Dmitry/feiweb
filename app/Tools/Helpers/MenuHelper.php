<?php

namespace App\Tools\Helpers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

class MenuHelper
{
    private const MENU_MAP_PATH = 'resources/json/menu.json'; 

    public static function getMenuMap()
    {
        return self::MENU_MAP_PATH;
    }

    public static function getMenuJsonFile()
    {
        if (file_exists(base_path(self::getMenuMap()))) {
            return File::json(base_path(self::getMenuMap()));
        }
        return '';
    }

}