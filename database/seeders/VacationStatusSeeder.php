<?php

namespace Database\Seeders;

use App\Models\VacationStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VacationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        VacationStatus::factory()->create([
            'name' => 'Pending',
        ]);
        VacationStatus::factory()->create([
            'name' => 'Approved',
        ]);
        VacationStatus::factory()->create([
            'name' => 'Rejected',
        ]);
        VacationStatus::factory()->create([
            'name' => 'Canceled',
        ]);
    }
}
