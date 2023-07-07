<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Services\Transaction\Concerns\TransactionConcern;
use App\Services\Account\Concerns\AccountConcern;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    use TransactionConcern, AccountConcern;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        return response()
            ->json(
                [
                    'status' => 200,
                    'message' => 'User transactions successfully retrieved.',
                    'data' => [
                        'transactions' => $transactions,
                    ]
                ]
            );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        switch($request->type){
            case "user":
                $this->validate($request, [
                    'email' => 'required|email',
                    'amount' => 'required'
                ]);
                $transaction = $this->sendMoneyToUser($request->all());
                break;
            case "bank":
                $this->validate($request, [
                    'account_number' => 'required',
                    'amount' => 'required'
                ]);
                $transaction = $this->sendMoneyToBank($request->all());
                break;
        }

        if(!$transaction){
            return response()->json([
                "status" => 422,
                'message' => 'Insufficient balance.'
            ], 422);
        }

        return response()
            ->json(
                [
                    'status' => 200,
                    'message' => 'Money sent successfully',
                    'data' => [
                        'user' => Auth::user(),
                        'account' => Auth::user()->account
                    ]
                ]
            );
    }
}
