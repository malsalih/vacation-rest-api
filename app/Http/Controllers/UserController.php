<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserCollection;
use App\Models\User;
use App\Models\Vacation;
use App\Models\VacationBalance;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::with('vacationBalance')->get();

        return new UserCollection($users);
    }

    public function store(StoreUserRequest $request)
    {

        $user = User::create($request->all());
    }
}
