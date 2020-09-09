<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $companyRole = Role::where('name', 'company')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
        	'name' => 'Admin User',
        	'email' => 'admin@admin.com',
        	'password' => Hash::make('12345678')
        ]);

        $company = User::create([
        	'name' => 'Company User',
        	'email' => 'company@company.com',
        	'password' => Hash::make('12345678')
        ]);

        $user = User::create([
        	'name' => 'User',
        	'email' => 'user@user.com',
        	'password' => Hash::make('12345678')
        ]);

        $admin->roles()->attach($adminRole);
        $company->roles()->attach($companyRole);
        $user->roles()->attach($userRole);
    }
}

