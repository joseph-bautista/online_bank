<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\Account\Concerns\AccountConcern;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use AccountConcern;
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->mobile = $request->mobile;
        $user->save();

        $this->createAccount($user->id);

        return response()
            ->json(
                [
                    'status' => 200,
                    'message' => 'User registered successfully',
                    'data' => [
                        'user' => $user,
                        'account' => $user->account
                    ]
                ]
            );
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $user = User::where('email', $request->input('email'))->first();
    
        if (!$user || !password_verify($request->input('password'), $user->password)) {
            return response()->json([
                'status' => 401,
                'message' => 'Invalid credentials'
            ], 401);
        }
    
        // Generate a token for the user
        $token = bin2hex(random_bytes(40));
        $user->api_token = $token;
        $user->save();
    
        return response()
            ->json(
                [
                    'status' => 200,
                    'message' => 'Successful login',
                    'data' => [
                        'token' => $token,
                        'user' => $user,
                        'account' => $user->account
                    ]
                    
                ]
            );
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->api_token = null;
        $user->save();
        return response()
            ->json(
                [
                    'status' => 200,
                    'message' => 'Logged out successfully'
                ]
            );
    }
}
