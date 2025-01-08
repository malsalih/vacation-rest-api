<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(VacationStatusSeeder::class);
        $this->call(VacationTypeSeeder::class);
        $this->call(DepartmentTypeSeeder::class);
        $this->call(TitleSeeder::class);
        $this->call(DepartmentSeeder::class);
        $roles = ['super-admin', 'employer', 'admin',  'doctor',  'unit-head',  'section-head',  'department-head'];
        foreach ($roles as $key => $value)
        {
            Role::create(['name' => $value]);
        }
        Permission::create(['name' => 'view vacations']);
        Permission::create(['name' => 'create user']);
        $user = User::factory()->create([
            'name' => 'Test User',
            'user_name' => 'super',
            'phone_number' => '0123456789',
            'email' => 'super@example.com',
        ]);
        $user->assignRole('super-admin');
        $user = User::factory()->create([
            'name' => 'Vacatiin special',
            'user_name' => 'vacation',
            'phone_number' => '0123456729',
            'email' => 'vacation@example.com',
        ]);
        $vrole = Role::create(['name' =>  'vacation-specialist']);

        $vrole->givePermissionTo(['view vacations', 'create user']);
        $user->assignRole('vacation-specialist');

        $user = User::factory()->create([
            'name' => 'employee',
            'user_name' => 'employer',
            'phone_number' => '0123454789',
            'email' => 'employer@example.com',
        ]);
    }
}
