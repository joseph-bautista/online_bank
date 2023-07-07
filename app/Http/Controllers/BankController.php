<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $banks = Bank::where('provider_id', $request->provider_id)->get();
        return response()
            ->json(
                [
                    'status' => 200,
                    'data' => [
                        'banks' => $banks,
                    ]
                ]
            );
    }

   
}
