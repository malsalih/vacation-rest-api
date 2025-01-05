<?php

namespace Database\Seeders;

use App\Models\VacationType;
use Illuminate\Database\Seeder;

class VacationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        VacationType::factory()->create([
            'name'           => 'اﻋﺘﻴﺎﺩﻳﺔ',
            'description'    => 'اﺟﺎﺯﺓ اﻋﺘﻴﺎﺩﻳﺔ',
            'incremented'    => true,
            'increment_days' => 10,
        ]);
        VacationType::factory()->create([
            'name'        => 'مرضية',
            'description' => 'اﺟﺎﺯﺓ ﻣﺮﺿﻴﺔ',
            'incremented' => false,
        ]);
        VacationType::factory()->create([
            'name'        => 'تعويضية',
            'description' => 'اﺟﺎﺯﺓ ﺗﻌﻮﻳﻀﻴﺔ',
        ]);
        VacationType::factory()->create([
            'name'        => 'زمنية',
            'description' => 'اﺟﺎﺯﺓ ﺯﻣﻨﻴﺔ',
        ]);
    }
}
