<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperVacationStatus
 */
class VacationStatus extends Model
{
    /** @use HasFactory<\Database\Factories\VacationStatusFactory> */
    use HasFactory;

    public function vacation()
    {
        return $this->hasMany(Vacation::class);
    }
}
