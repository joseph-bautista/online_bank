<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account = Auth::user()->account;
        return response()
            ->json(
                [
                    'status' => 200,
                    'message' => 'User account successfully retrieved.',
                    'data' => [
                        'account' => $account,
                    ]
                ]
            );
    }
}
