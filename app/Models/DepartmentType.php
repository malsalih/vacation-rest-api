<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperDepartmentType
 */
class DepartmentType extends Model
{
    /** @use HasFactory<\Database\Factories\DepartmentTypeFactory> */
    use HasFactory;
}
