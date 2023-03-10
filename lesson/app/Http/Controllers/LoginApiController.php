<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginApiController extends Controller
{
    public function Login(Request $request)
    {
        $validated = $request->validate(
            [
                'email' => 'required|string|',
                'password' => 'required|string|'
            ]
        );

        $user = User::where('email', $validated['email'])->first();
        if (!$user || !Hash::check($validated['password'], $user->password)) {
            return response(
                [
                    'message' => "Bad Credential"
                ],
                401
            );
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        return  response(
            [
                'user' => $user,
                'token' => $token
            ],
            200
        );
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return ['message' => 'log out successfully'];
    }
}
