<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {

    }

    public function login(Request $request)
    {
        dd('test');
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $user = User::where('email', $request->input('email'))->first();
    
        if (!$user || !password_verify($request->input('password'), $user->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    
        // Generate a token for the user
        $token = bin2hex(random_bytes(40));
        $user->api_token = $token;
        $user->save();
    
        return response()->json(['token' => $token]);
    }
}
