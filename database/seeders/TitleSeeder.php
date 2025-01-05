<?php

namespace Database\Seeders;

use App\Models\Title;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Title::factory()->create([
            'name'=>'هندسة'
        ]);Title::factory()->create([
            'name'=>'طب'
        ]);Title::factory()->create([
            'name'=>'مهندس طب حياتي',
        'parent_id'=>1
        ]);Title::factory()->create([
            'name'=>'مهندس ميكانيكي',
            'parent_id'=>1
        ]);Title::factory()->create([
        'name'=>'طبيب',
        'parent_id'=>2
    ]);Title::factory()->create([
        'name'=>'ممرض',
        'parent_id'=>2
    ]);
    }
}
