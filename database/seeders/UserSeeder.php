<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::where('name', 'admin')->first();

        $role_user = Role::where('name', 'user')->first();

        $admin = new User();
        $admin->name = 'Christian Butler';
        $admin->email = 'cbutler@stmc.ie';
        $admin->password = Hash::make('password');
        $admin->save();

        $admin->roles()->attach($role_admin);


        $user = new User();
        $user->name = 'John Butler';
        $user->email = 'jbutler@stmc.ie';
        $user->password = Hash::make('password');
        $user->save();

        $user->roles()->attach($role_user);
    }
    
}
