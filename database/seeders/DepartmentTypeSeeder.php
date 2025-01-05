<?php

namespace Database\Seeders;

use App\Models\DepartmentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DepartmentType::factory()->create([
            'name'=>'دائرة',
        ]);
        DepartmentType::factory()->create([
            'name'=>'قسم',
        ]);
        DepartmentType::factory()->create([
            'name'=>'شعبة',
        ]);
        DepartmentType::factory()->create([
            'name'=>'وحدة',
        ]);
    }
}
