<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * @mixin IdeHelperVacation
 */
class Vacation extends Model
{
    /** @use HasFactory<\Database\Factories\VacationFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'vacation_type_id',
        'status_id',
        'notes',
        'start_date',
        'end_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vacationType()
    {
        return $this->belongsTo(VacationType::class);
    }

    public function status()
    {
        return $this->belongsTo(VacationStatus::class);
    }
}
