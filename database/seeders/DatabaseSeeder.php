<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // $permissionAdmin = Permission::create(['name' => 'manage apanel']);

        // // Создание роли и привязка разрешения
        // $role = Role::create(['name' => 'admin']);
        // $role->givePermissionTo($permissionAdmin);


        // $permissionContentManager = Permission::create(['name' =>'manage content']);

        // $roleCM = Role::create(['name' => 'content manager']);
        // $roleCM->givePermissionTo($permissionContentManager);


        // $permissionUser = Permission::create(['name' => 'manage personal']);
        // $roleUser = Role::create(['name' => 'simple user']);
        // $roleUser->givePermissionTo($permissionUser);


        // User::factory(10)->create();
        // $permissionUser = Permission::create(['name' => 'manage personal']);

        // $user = User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@example.com',
        //     'phone' => '+79260938282',
        //     'status' => 0,
        //     'password' => bcrypt('12345678'),
        // ]);
    }
}
