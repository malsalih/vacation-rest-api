<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Vacation;
use Illuminate\Auth\Access\Response;

class VacationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('view vacations');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Vacation $vacation): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Vacation $vacation): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Vacation $vacation): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Vacation $vacation): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Vacation $vacation): bool
    {
        return false;
    }
}
