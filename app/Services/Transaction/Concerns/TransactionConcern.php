<?php

namespace App\Services\Transaction\Concerns;

use Illuminate\Http\Request;
use App\Services\Transaction\Actions\AddBalanceToUser;
use App\Services\Transaction\Actions\CreateTransaction;
use App\Services\Transaction\Actions\SubtractBalanceToUser;
use Illuminate\Support\Facades\Auth;

trait TransactionConcern
{
    public function sendMoneyToUser($data)
    {
       $subtractBalance = SubtractBalanceToUser::handle(Auth::user()->id, $data['amount']);
       
       if(!$subtractBalance){
            return false;
       }
       $addBalance = AddBalanceToUser::handle($data['email'], $data['amount']);
       return true;
    }

    public function sendMoneyToBank($data)
    {
        $additionalData = [
            "provider_id" => $data['provider_id'],
            "bank_id" => $data['bank_id'],
            "account_number" => $data['account_number']
        ];
        $subtractBalance = SubtractBalanceToUser::handle(Auth::user()->id, $data['amount'], $additionalData);
        if(!$subtractBalance){
            return false;
        }
        return true;
    }

}
