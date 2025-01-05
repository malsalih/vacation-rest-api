<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Models\User;
use App\Models\Vacation;
use App\Models\VacationBalance;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::with('vacationBalance')->get();
        
        return new UserCollection($users);
    }
}
