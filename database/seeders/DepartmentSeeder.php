<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Department::factory()->create([
            'name'=>'دائرة صحة كربلاء المقدسة',
            'department_type_id'=>1
        ]);
        Department::factory()->create([
            'name'=>'مركز امراض الدم الوراثية',
            'department_type_id'=>2,
            'parent_id'=>1
        ]);
        Department::factory()->create([
            'name'=>'مستشفى الاطفال التعليمي',
            'department_type_id'=>2,
            'parent_id'=>1
        ]);
        Department::factory()->create([
            'name'=>'شعبة الامور الادارية',
            'department_type_id'=>3,
            'parent_id'=>2
        ]);
        Department::factory()->create([
            'name'=>'الشعبة الهندسية',
            'department_type_id'=>3,
            'parent_id'=>3
        ]);
    }
}
