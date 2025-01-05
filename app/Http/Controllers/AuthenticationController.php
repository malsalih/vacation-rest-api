<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthenticationController extends Controller
{
    //
    public function authenticate(Request $request){
        $request->validate([
            'user_name' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('user_name', $request->user_name)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'user_name' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response()->json($user->createToken($request->user_name)->plainTextToken,200) ;
    }

    public function logout(){
        $user=Auth::user();
        $user->tokens()->delete();
        return response()->json(['message' => 'Logged out successfully.'],200);
    }
}
