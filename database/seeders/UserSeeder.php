<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $adminUser = new User();
        $adminUser->userType      = 'admin';
        $adminUser->name          = 'Admin';
        $adminUser->email         = 'admin@gmail.com';
        $adminUser->password      =  \Hash::make('12345678');
        $adminUser->role          = '1';
        $adminUser->save();

        app()['cache']->forget('spatie.permission.cache');

        Permission::create(['name' => 'user-read', 'guard_name' => 'web','group_name'=>'user']);
        Permission::create(['name' => 'user-create', 'guard_name' => 'web','group_name'=>'user']);
        Permission::create(['name' => 'user-update', 'guard_name' => 'web','group_name'=>'user']);
        Permission::create(['name' => 'user-delete', 'guard_name' => 'web','group_name'=>'user']);

        Permission::create(['name' => 'role-read', 'guard_name' => 'web','group_name'=>'role']);
        Permission::create(['name' => 'role-create', 'guard_name' => 'web','group_name'=>'role']);
        Permission::create(['name' => 'role-update', 'guard_name' => 'web','group_name'=>'role']);
        Permission::create(['name' => 'role-delete', 'guard_name' => 'web','group_name'=>'role']);

        Permission::create(['name' => 'designation-read', 'guard_name' => 'web','group_name'=>'designation']);
        Permission::create(['name' => 'designation-create', 'guard_name' => 'web','group_name'=>'designation']);
        Permission::create(['name' => 'designation-update', 'guard_name' => 'web','group_name'=>'designation']);
        Permission::create(['name' => 'designation-delete', 'guard_name' => 'web','group_name'=>'designation']);

        Permission::create(['name' => 'department-read', 'guard_name' => 'web','group_name'=>'department']);
        Permission::create(['name' => 'department-create', 'guard_name' => 'web','group_name'=>'department']);
        Permission::create(['name' => 'department-update', 'guard_name' => 'web','group_name'=>'department']);
        Permission::create(['name' => 'department-delete', 'guard_name' => 'web','group_name'=>'department']);

        $adminRole = Role::create(['name' => 'admin', 'guard_name' => 'web']);
        $adminRole->givePermissionTo(Permission::all());

        //assign role
        $adminUser->assignRole('admin');
    }
}
