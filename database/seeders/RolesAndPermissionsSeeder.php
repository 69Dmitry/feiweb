<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissionAdmin = Permission::create(['name' => 'manage apanel']);

        // Создание роли и привязка разрешения
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo($permissionAdmin);


        $permissionContentManager = Permission::create(['name' =>'manage content']);

        $roleCM = Role::create(['name' => 'content manager']);
        $roleCM->givePermissionTo($permissionContentManager);
    }
}
