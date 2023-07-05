<?php

namespace App\Services\Transaction\Concerns;

use Illuminate\Http\Request;
use App\Services\Transaction\Actions\AddBalanceToUser;
use App\Services\Transaction\Actions\CreateTransaction;
use App\Services\Transaction\Actions\SubtractBalanceToUser;
use Illuminate\Support\Facades\Auth;

trait TransactionConcern
{
    public function sendMoney($data)
    {
       $subtractBalance = SubtractBalanceToUser::handle(Auth::user()->id, $data['amount']);
       
       if(!$subtractBalance){
        return false;
       }
       $addBalance = AddBalanceToUser::handle($data['email'], $data['amount']);
       return true;
    }

}
