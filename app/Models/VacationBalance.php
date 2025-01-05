<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperVacationBalance
 */
class VacationBalance extends Model
{
    /** @use HasFactory<\Database\Factories\VacationBalanceFactory> */
    use HasFactory;

    protected $fillable = [
        'balance',
        'user_id',
        'vacation_type_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
