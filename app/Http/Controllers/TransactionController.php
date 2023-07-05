<?php

namespace App\Http\Controllers;

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
        $transactions = Auth::user()->transactions;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                if($this->checkAccountExist($request->email)){
                    return response()->json([
                        "status" => 422,
                        'message' => 'You are not allowed to send money to you own account.'
                    ], 422);
                }
                $transaction = $this->sendMoneyToUser($request->all());
                break;
            case "bank":
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
