<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        $user = User::factory()->create([
            'name' => 'Test User',
            'user_name' => 'test',
            'phone_number' => '0123456789',
            'email' => 'test@example.com',
        ]);
        Role::create(['name' => 'admin']);
        $user->assignRole('admin');

    }
}
