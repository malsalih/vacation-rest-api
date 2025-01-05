<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @mixin IdeHelperVacationType
 */
class VacationType extends Model
{
    /** @use HasFactory<\Database\Factories\VacationTypeFactory> */
    use HasFactory;

    public function vacation()
    {
        return $this->hasMany(Vacation::class);
    }

}
